import { chromium } from 'playwright';

const url = process.argv[2] || 'http://127.0.0.1:8000/sites/sir';

const executablePath =
  process.env.PLAYWRIGHT_EXECUTABLE_PATH || 'C:\\Program Files\\Google\\Chrome\\Application\\chrome.exe';

const browser = await chromium.launch({ headless: true, executablePath });
const page = await browser.newPage();

try {
  await page.goto(url, { waitUntil: 'networkidle', timeout: 120000 });

  await page.addScriptTag({
    url: 'https://cdnjs.cloudflare.com/ajax/libs/axe-core/4.10.2/axe.min.js',
  });

  const axeResults = await page.evaluate(async () => {
    return await window.axe.run(document, {
      runOnly: {
        type: 'tag',
        values: ['wcag2a', 'wcag2aa', 'wcag21aa', 'wcag22aa'],
      },
    });
  });

  const extraChecks = await page.evaluate(() => {
    const focusables = Array.from(
      document.querySelectorAll(
        'a[href], button, input, select, textarea, summary, video[controls], [tabindex]:not([tabindex="-1"])'
      )
    );

    const emptyHref = Array.from(document.querySelectorAll('a[href=""]')).map((node) =>
      node.textContent.trim()
    );
    const missingMain = !document.querySelector('main');
    const missingSkipLink = !document.querySelector('.skip-link');
    const missingImageAlt = Array.from(document.images)
      .filter((img) => !img.hasAttribute('alt'))
      .map((img) => img.outerHTML.slice(0, 200));
    const targetBlankWithoutNotice = Array.from(document.querySelectorAll('a[target="_blank"]'))
      .filter((link) => !/abre en una nueva pestaña/i.test(link.textContent))
      .map((link) => link.href);

    return {
      title: document.title,
      focusableCount: focusables.length,
      emptyHref,
      missingMain,
      missingSkipLink,
      missingImageAlt,
      targetBlankWithoutNotice,
    };
  });

  const summary = {
    url,
    violations: axeResults.violations.map((violation) => ({
      id: violation.id,
      impact: violation.impact,
      description: violation.description,
      help: violation.help,
      nodes: violation.nodes.map((node) => ({
        target: node.target,
        html: node.html,
        failureSummary: node.failureSummary,
      })),
    })),
    incomplete: axeResults.incomplete.map((item) => ({
      id: item.id,
      impact: item.impact,
      help: item.help,
      nodes: item.nodes.map((node) => ({
        target: node.target,
        html: node.html,
        failureSummary: node.failureSummary,
      })),
    })),
    extraChecks,
  };

  console.log(JSON.stringify(summary, null, 2));
} finally {
  await browser.close();
}
