<?php
// Extrae el bloque <script> del HTML exportado y lo valida con node
$html = file_get_contents('storage/exports/reto.html');
preg_match('/<script>(.*?)<\/script>/s', $html, $m);
if (!$m) { die("No se encontró bloque <script>\n"); }
$js = $m[1];
file_put_contents('storage/exports/_check.js', $js);
echo "JS extraído: " . strlen($js) . " bytes\n";
// Verificar con node si está disponible
$out = shell_exec('node --check storage/exports/_check.js 2>&1');
echo $out ?: "node no disponible o sin errores\n";
unlink('storage/exports/_check.js');
