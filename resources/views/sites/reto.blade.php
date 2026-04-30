@extends('layouts.app')

@section('content')
    <style>
        .node--type-page .node__content .field--name-body {

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                /* font-size: 24px !important; */

            }
        }
    </style>
    <style>
        #sdm-reto-landing {
            --reto-brand-olive: #4d541f;
            --reto-brand-lime: #bed000;
            --reto-brand-lime-soft: #c9d64f;
            --reto-brand-lime-mid: #a6b517;
            --reto-brand-lime-deep: #8f9f14;
            --reto-brand-surface: #f6f8ec;
            --reto-text: #222222;
            --reto-muted: #5e6358;
            --reto-line: #dde3d0;
        }

        #sdm-reto-landing,
        #sdm-reto-landing *,
        #sdm-reto-landing *::before,
        #sdm-reto-landing *::after {
            box-sizing: border-box;
        }

        #sdm-reto-landing {
            width: min(1160px, calc(100% - 24px));
            margin: 0 auto;
            padding: 12px 0 48px;
            color: var(--reto-text);
            font-size: 18px;
            line-height: 1.7;
        }

        #sdm-reto-landing img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        #sdm-reto-landing .reto-banner,
        #sdm-reto-landing .reto-bullet {
            overflow: hidden;
            background: #fff;
        }

        #sdm-reto-landing .reto-bullet {
            border-radius: 12px;
        }

        #sdm-reto-landing .reto-bullet {
            display: flex;
            align-items: flex-start;
            justify-content: center;
            padding: 0;
            margin: 0;
        }

        #sdm-reto-landing .reto-bullet img {
            width: auto;
            max-width: 100%;
            height: auto;
        }

        #sdm-reto-landing .reto-banner {
            position: relative;
            width: 100%;
            aspect-ratio: 1980 / 900;
            background: #111;
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.08);
        }

        #sdm-reto-landing .reto-banner::before {
            content: "";
            position: absolute;
            inset: 0;
            z-index: 2;
            background: linear-gradient(90deg,
                    rgba(10, 18, 8, 0.9) 0%,
                    rgba(10, 18, 8, 0.74) 34%,
                    rgba(10, 18, 8, 0.34) 58%,
                    rgba(10, 18, 8, 0.08) 100%);
            pointer-events: none;
        }

        #sdm-reto-landing .reto-banner-layer {
            position: absolute;
            display: block;
            max-width: none;
            pointer-events: none;
            user-select: none;
        }

        #sdm-reto-landing .reto-banner-bg {
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center center;
            z-index: 1;
        }

        #sdm-reto-landing .reto-banner-content {
            position: absolute;
            left: 7.2%;
            top: 50%;
            z-index: 4;
            display: grid;
            justify-items: start;
            gap: 16px;
            width: min(34%, 430px);
            transform: translateY(-50%);
        }

        #sdm-reto-landing .reto-banner-logo {
            width: min(100%, 280px);
            max-width: 100%;
            height: auto;
        }

        #sdm-reto-landing .reto-banner-copy {
            margin: 0;
            max-width: 37ch;
            color: #ffffff;
            font-size: clamp(1rem, 0.86rem + 0.45vw, 1rem);
            font-weight: 500;
            line-height: 1.2;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.32);
        }

        #sdm-reto-landing .reto-banner-content .reto-actions {
            margin-top: 4px;
        }

        #sdm-reto-landing .reto-banner-content .reto-btn-highlight {
            border-color: var(--reto-brand-lime);
            box-shadow: 0 18px 34px rgba(0, 0, 0, 0.24), 0 0 0 4px rgba(186, 204, 0, 0.16);
        }

        #sdm-reto-landing .reto-banner-motociclistas {
            right: 8%;
            top: 54%;
            width: 31%;
            transform: translateY(-50%);
            z-index: 4;
        }

        #sdm-reto-landing .reto-intro {
            width: 100%;
            max-width: none;
        }

        #sdm-reto-landing h1 {
            margin: 0 0 16px;
            max-width: 60ch;
            font-size: 1.08rem !important;
            line-height: 1.7;
            font-weight: 700;
            letter-spacing: 0;
            color: var(--reto-brand-olive);
            text-wrap: balance;
            text-align: left !important;
        }

        #sdm-reto-landing h2 {
            margin: 0 0 16px;
            font-size: clamp(1.55rem, 1.35rem + 0.7vw, 2.1rem);
            line-height: 1.12;
            font-weight: 700;
            letter-spacing: 0;
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing h3 {
            margin: 0 0 12px;
            font-size: 1.15rem;
            line-height: 1.2;
            font-weight: 700;
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-intro-title {
            margin: 0 0 16px;
            max-width: 62ch;
            color: var(--reto-brand-olive);
            font-size: clamp(1.25rem, 1.06rem + 0.7vw, 1.65rem);
            font-weight: 600;
            line-height: 1.35;
            letter-spacing: 0;
            text-align: left !important;
            text-wrap: balance;
        }

        #sdm-reto-landing p {
            margin: 0 0 16px;
        }

        #sdm-reto-landing ul {
            margin: 0;
            padding-left: 1.15rem;
        }

        #sdm-reto-landing li+li {
            margin-top: 8px;
        }

        #sdm-reto-landing .reto-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            align-items: center;
            margin-top: 26px;
        }

        #sdm-reto-landing .reto-quicknav {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 18px;
        }

        #sdm-reto-landing .reto-quicknav a {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 7px;
            min-height: 38px;
            padding: 0 14px;
            border: 1px solid rgba(166, 181, 23, 0.42);
            border-radius: 999px;
            background: linear-gradient(180deg, #ffffff 0%, var(--reto-brand-surface) 100%);
            color: var(--reto-brand-olive);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 700;
            box-shadow: 0 8px 18px rgba(77, 84, 31, 0.08);
            transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        #sdm-reto-landing .reto-quicknav a i {
            color: var(--reto-brand-lime-deep);
            font-size: 0.96rem;
            line-height: 1;
            transition: transform .2s ease;
        }

        #sdm-reto-landing .reto-quicknav a:hover,
        #sdm-reto-landing .reto-quicknav a:focus {
            background: var(--reto-brand-lime);
            border-color: var(--reto-brand-lime-deep);
            box-shadow: 0 10px 22px rgba(77, 84, 31, 0.14);
            transform: translateY(-2px);
        }

        #sdm-reto-landing .reto-quicknav a:hover i,
        #sdm-reto-landing .reto-quicknav a:focus i {
            color: var(--reto-brand-olive);
            transform: translateX(2px);
        }

        #sdm-reto-landing .reto-quicknav a:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-btn {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 50px;
            padding: 0 24px;
            border: 1px solid transparent;
            border-radius: 999px;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.2;
            overflow: hidden;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        #sdm-reto-landing .reto-btn::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent 0%, rgba(255, 255, 255, 0.22) 45%, transparent 70%);
            transform: translateX(-120%);
            transition: transform .45s ease;
        }

        #sdm-reto-landing .reto-btn span,
        #sdm-reto-landing .reto-btn i {
            position: relative;
            z-index: 1;
        }

        #sdm-reto-landing .reto-btn i {
            font-size: 1.15em;
            line-height: 1;
            transition: transform .2s ease;
        }

        #sdm-reto-landing .reto-btn:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-btn:hover,
        #sdm-reto-landing .reto-btn:focus {
            transform: translateY(-1px);
        }

        #sdm-reto-landing .reto-btn:hover::after,
        #sdm-reto-landing .reto-btn:focus::after {
            transform: translateX(120%);
        }

        #sdm-reto-landing .reto-btn:hover i,
        #sdm-reto-landing .reto-btn:focus i {
            transform: translateX(3px);
        }

        #sdm-reto-landing .reto-btn-primary {
            background: var(--reto-brand-olive);
            border-color: var(--reto-brand-olive);
            color: #ffffff !important;
            box-shadow: 0 14px 28px rgba(77, 84, 31, 0.26);
        }

        #sdm-reto-landing .reto-btn-primary:hover,
        #sdm-reto-landing .reto-btn-primary:focus {
            background: #3f4519;
            border-color: #3f4519;
            color: #ffffff;
            box-shadow: 0 18px 34px rgba(77, 84, 31, 0.34);
        }

        #sdm-reto-landing .reto-btn-highlight {
            min-height: 58px;
            padding: 0 30px;
            font-size: 1.08rem;
            box-shadow: 0 18px 34px rgba(77, 84, 31, 0.28), 0 0 0 6px rgba(186, 204, 0, 0.14);
        }

        #sdm-reto-landing .reto-btn-highlight:hover,
        #sdm-reto-landing .reto-btn-highlight:focus {
            box-shadow: 0 22px 40px rgba(77, 84, 31, 0.36), 0 0 0 8px rgba(186, 204, 0, 0.18);
        }

        #sdm-reto-landing .reto-btn-secondary {
            border-color: var(--reto-brand-lime-deep);
            color: var(--reto-brand-olive);
            background: var(--reto-brand-surface);
        }

        #sdm-reto-landing .reto-btn-secondary:hover,
        #sdm-reto-landing .reto-btn-secondary:focus {
            background: #eef3d8;
            border-color: var(--reto-brand-lime-deep);
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-note {
            color: var(--reto-muted);
            font-size: 1rem;
        }

        #sdm-reto-landing .reto-side {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 28px 24px;
            border-radius: 20px;
            background: var(--reto-brand-surface);
            border: 1px solid var(--reto-line);
            border-left: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-side strong {
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-side ul {
            padding-left: 1.05rem;
        }

        #sdm-reto-landing .reto-side li {
            line-height: 1.7;
        }

        #sdm-reto-landing .reto-intro-copy {
            display: grid;
            column-gap: 36px;
            align-items: center;
            min-height: 100%;
            padding: 12px 0;
            justify-content: center;
        }

        #sdm-reto-landing .reto-intro-copy h1,
        #sdm-reto-landing .reto-intro-copy .reto-intro-title,
        #sdm-reto-landing .reto-intro-copy p,
        #sdm-reto-landing .reto-intro-copy .reto-quicknav {
            grid-column: 1;
        }

        #sdm-reto-landing .reto-intro-copy>p {
            max-width: 60ch;
        }

        #sdm-reto-landing .reto-intro-copy>p.reto-intro-title {
            max-width: 62ch;
        }

        #sdm-reto-landing .reto-intro-copy>p:last-of-type {
            margin-bottom: 32px;
        }

        #sdm-reto-landing .reto-intro-copy .reto-actions {
            grid-column: 2;
            grid-row: 1;
            justify-self: start;
            margin-top: 0;
        }

        #sdm-reto-landing .reto-section {
            padding-top: 32px;
            margin-top: 32px;
            border-top: 1px solid var(--reto-line);
            background: #f5f5f5;
        }

        #sdm-reto-landing .reto-section> :first-child {
            margin-top: 0;
        }


        #sdm-reto-landing .reto-section-content {
            display: grid;
            gap: 32px;
            grid-template-columns: 80% 20%;
            width: min(100%, 1010px);

        }

        #sdm-reto-landing .reto-key-stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
            margin-top: 22px;
            margin-right: 2px solid var(--reto-line);
        }

        #sdm-reto-landing .reto-key-stat {
            display: grid;
            justify-items: center;
            align-content: start;
            gap: 12px;
            min-height: 190px;
            padding: 12px;
            border-radius: 12px;
            text-align: center;
            border: #d5d5d5 1px solid;
            background: #fff;
            box-shadow: 0 8px 18px rgba(77, 84, 31, 0.08);

        }

        #sdm-reto-landing .reto-key-stat-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: 999px;
            background: #BED000;
            color: var(--reto-brand-olive);
            font-size: 1.72rem;
            line-height: 1;
        }

        #sdm-reto-landing .reto-key-stat-value {
            display: block;
            max-width: 20ch;
            color: var(--reto-brand-olive);
            font-size: clamp(1.16rem, 1.02rem + 0.45vw, 0.8rem);
            font-weight: 700;
            line-height: 1.2;
        }

        #sdm-reto-landing .reto-key-stat-value.first-value {
            font-size: clamp(1.3rem, 1.14rem + 0.6vw, 1.7rem);
        }

        #sdm-reto-landing .reto-key-stat-description {
            display: block;
            max-width: 19ch;
            color: var(--reto-muted);
            font-size: 0.97rem;
            line-height: 1.45;
        }


        #sdm-reto-landing .reto-video-slot {
            position: relative;
            display: grid;
            place-items: center;
            width: min(200px, 100%);
            margin: 24px auto 0;
            overflow: hidden;
            border: 1px solid rgba(166, 181, 23, 0.35);
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(77, 84, 31, 0.92), rgba(34, 34, 34, 0.9));
            color: #ffffff;
            box-shadow: 0 18px 36px rgba(77, 84, 31, 0.16);
        }

        #sdm-reto-landing .reto-video-slot-inner {
            display: grid;
            justify-items: center;
            gap: 10px;
            padding: 24px;
            text-align: center;
        }

        #sdm-reto-landing .reto-video-slot-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 68px;
            height: 68px;
            border-radius: 999px;
            background: var(--reto-brand-lime);
            color: var(--reto-brand-olive);
            font-size: 2rem;
            line-height: 1;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.18);
        }

        #sdm-reto-landing .reto-video-slot strong {
            font-size: clamp(1.1rem, 0.98rem + 0.5vw, 1.45rem);
            line-height: 1.2;
        }

        #sdm-reto-landing .reto-why-copy {
            max-width: 100%;
            margin-top: 28px;
        }

        #sdm-reto-landing .reto-why-copy p {
            max-width: none;
        }

        #sdm-reto-landing .reto-why-copy strong {
            color: var(--reto-brand-olive);
            font-weight: 700;
        }

        #sdm-reto-landing .reto-goal-layout {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(280px, 0.9fr);
            gap: 24px;
            align-items: stretch;
            margin-top: 26px;
        }

        #sdm-reto-landing .reto-goal-card {
            display: grid;
            align-content: start;
            gap: 16px;
            min-height: 100%;
            padding: 8px 0 0;
            border: 0;
            border-radius: 0;
            background: #ffffff;
        }

        #sdm-reto-landing .reto-goal-card-head {
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 18px;
            align-items: center;
        }

        #sdm-reto-landing .reto-goal-card h3 {
            margin: 0;
        }

        #sdm-reto-landing .reto-goal-icons {
            display: flex;
            gap: 8px;
            align-items: center;
            justify-content: flex-end;
        }

        #sdm-reto-landing .reto-goal-icon {
            width: 58px;
            max-width: none;
            height: auto;
            filter: drop-shadow(0 8px 10px rgba(77, 84, 31, 0.16));
        }

        #sdm-reto-landing .reto-goal-highlight .reto-goal-icon {
            width: 64px;
            filter: drop-shadow(0 10px 12px rgba(0, 0, 0, 0.22));
        }

        #sdm-reto-landing .reto-goal-list {
            display: grid;
            gap: 12px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #sdm-reto-landing .reto-goal-list li {
            position: relative;
            margin: 0;
            padding: 8px 0 8px 28px;
            border-radius: 0;
            background: transparent;
            color: var(--reto-brand-olive);
            font-weight: 700;
            line-height: 1.35;
        }

        #sdm-reto-landing .reto-goal-list li::before {
            content: "";
            position: absolute;
            left: 4px;
            top: 50%;
            width: 10px;
            height: 10px;
            border-radius: 999px;
            background: var(--reto-brand-lime);
            transform: translateY(-50%);
        }

        #sdm-reto-landing .reto-goal-highlight {
            padding: 8px 0 0;
            background: transparent;
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-goal-highlight h3,
        #sdm-reto-landing .reto-goal-highlight p,
        #sdm-reto-landing .reto-goal-highlight strong {
            color: var(--reto-brand-olive);
        }

        #sdm-reto-landing .reto-goal-highlight h3 {
            font-size: clamp(1.35rem, 1.12rem + 0.75vw, 1.9rem);
            line-height: 1.16;
        }

        #sdm-reto-landing .reto-goal-highlight p {
            margin: 0;
            max-width: none;
            line-height: 1.55;
        }

        #sdm-reto-landing .reto-goal-highlight .reto-goal-result {
            color: var(--reto-brand-olive);
            font-weight: 700;
        }

        #sdm-reto-landing .reto-two-col {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        #sdm-reto-landing .reto-process {
            grid-template-columns: minmax(280px, 360px) minmax(0, 1fr);
            gap: 36px;
            align-items: start;
        }

        #sdm-reto-landing .reto-process-nav {
            display: grid;
            gap: 12px;
        }

        #sdm-reto-landing .reto-process-tab {
            appearance: none;
            -webkit-appearance: none;
            display: grid;
            grid-template-columns: 44px 1fr;
            gap: 14px;
            width: 100%;
            padding: 16px 18px;
            border: 1px solid var(--reto-line);
            border-radius: 18px;
            background: #fff;
            color: var(--reto-text);
            text-align: left;
            cursor: pointer;
            transition: background-color .2s ease, border-color .2s ease, transform .2s ease, box-shadow .2s ease;
        }

        #sdm-reto-landing .reto-process-tab.is-active {
            border-color: var(--reto-brand-lime-deep);
            background: var(--reto-brand-surface);
            box-shadow: 0 0 0 2px rgba(166, 181, 23, 0.08);
        }

        #sdm-reto-landing .reto-process-tab:hover,
        #sdm-reto-landing .reto-process-tab:focus {
            border-color: var(--reto-brand-lime-deep);
            transform: translateY(-1px);
        }

        #sdm-reto-landing .reto-process-tab:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-step-number,
        #sdm-reto-landing .reto-process-tab-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 999px;
            background: var(--reto-brand-lime);
            color: var(--reto-brand-olive);
            font-weight: 700;
        }

        #sdm-reto-landing .reto-step h3,
        #sdm-reto-landing .reto-process-tab h3 {
            margin-bottom: 6px;
            font-size: 1.05rem;
        }

        #sdm-reto-landing .reto-step p,
        #sdm-reto-landing .reto-process-tab p {
            margin: 0;
            max-width: none;
            color: var(--reto-muted);
            font-size: 0.98rem;
        }

        #sdm-reto-landing .reto-process-panel {
            min-height: 100%;
            padding: 30px 26px;
            border: 1px solid var(--reto-line);
            border-radius: 22px;
            background: var(--reto-brand-surface);
            border-top: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-process-panel-item[hidden] {
            display: none !important;
        }

        #sdm-reto-landing .reto-process-panel-kicker {
            display: inline-block;
            margin-bottom: 10px;
            color: var(--reto-brand-olive);
            font-size: 0.86rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        #sdm-reto-landing .reto-process-panel p {
            max-width: 46ch;
        }

        #sdm-reto-landing .reto-why {
            grid-template-columns: minmax(0, 1fr) minmax(320px, 492px);
            gap: 32px;
            align-items: start;
        }

        #sdm-reto-landing .reto-why .reto-bullet:first-child {
            justify-content: flex-start;
        }

        #sdm-reto-landing .reto-why .reto-bullet:first-child img {
            width: min(100%, 250px);
        }

        #sdm-reto-landing .reto-why .reto-bullet:last-child {
            justify-content: flex-start;
            padding-top: 10px;
        }

        #sdm-reto-landing .reto-why .reto-bullet:last-child img {
            width: min(100%, 460px);
        }

        #sdm-reto-landing .reto-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
            align-items: start;
        }

        #sdm-reto-landing .reto-cta {
            text-align: center;
        }

        #sdm-reto-landing .reto-cta .reto-btn {
            min-width: min(100%, 320px);
            margin-top: 10px;
        }

        #sdm-reto-landing .reto-contact {
            margin-top: 18px;
            font-size: 0.98rem;
        }

        #sdm-reto-landing .reto-contact a {
            color: var(--reto-brand-olive);
            font-weight: 600;
        }

        #sdm-reto-landing .reto-columns-compact {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        #sdm-reto-landing .reto-info-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        #sdm-reto-landing .reto-info-tab {
            appearance: none;
            -webkit-appearance: none;
            min-height: 42px;
            padding: 0 16px;
            border: 1px solid var(--reto-line);
            border-radius: 999px;
            background: #fff;
            color: var(--reto-brand-olive);
            font-size: 0.95rem;
            font-weight: 700;
            cursor: pointer;
            transition: background-color .2s ease, border-color .2s ease, color .2s ease, transform .2s ease;
        }

        #sdm-reto-landing .reto-info-tab.is-active {
            background: var(--reto-brand-olive);
            border-color: var(--reto-brand-olive);
            color: #fff;
        }

        #sdm-reto-landing .reto-info-tab:hover,
        #sdm-reto-landing .reto-info-tab:focus {
            transform: translateY(-1px);
            border-color: var(--reto-brand-lime-deep);
        }

        #sdm-reto-landing .reto-info-tab:focus-visible {
            outline: 3px solid var(--reto-brand-lime-mid);
            outline-offset: 3px;
        }

        #sdm-reto-landing .reto-info-panel {
            padding: 24px;
            border: 1px solid var(--reto-line);
            border-radius: 22px;
            background: #fff;
            border-top: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-info-panel[hidden] {
            display: none !important;
        }

        #sdm-reto-landing .reto-info-panel-head {
            display: grid;
            gap: 8px;
            margin-bottom: 18px;
        }

        #sdm-reto-landing .reto-info-panel-head p {
            margin: 0;
            max-width: 60ch;
            color: var(--reto-muted);
            font-size: 0.98rem;
        }

        #sdm-reto-landing .reto-card {
            height: 100%;
            padding: 22px 22px 20px;
            border: 1px solid var(--reto-line);
            border-radius: 20px;
            background: #fff;
            border-top: 6px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-card p {
            max-width: none;
        }

        #sdm-reto-landing .reto-chip-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #sdm-reto-landing .reto-chip-list li {
            margin: 0;
            padding: 10px 14px;
            border-radius: 999px;
            background: var(--reto-brand-surface);
            border: 1px solid rgba(166, 181, 23, 0.45);
            color: var(--reto-brand-olive);
            font-weight: 600;
        }

        #sdm-reto-landing .reto-mini-list {
            display: grid;
            gap: 12px;
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #sdm-reto-landing .reto-mini-list li {
            margin: 0;
            padding-left: 16px;
            position: relative;
        }

        #sdm-reto-landing .reto-mini-list li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.8em;
            width: 7px;
            height: 7px;
            border-radius: 999px;
            background: var(--reto-brand-lime-deep);
            transform: translateY(-50%);
        }

        #sdm-reto-landing .reto-stat-list {
            display: grid;
            gap: 12px;
        }

        #sdm-reto-landing .reto-stat-item {
            padding: 14px 16px;
            border-radius: 16px;
            background: var(--reto-brand-surface);
            border: 1px solid var(--reto-line);
            border-left: 4px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-stat-item strong {
            display: block;
            margin-bottom: 4px;
            color: var(--reto-brand-olive);
            font-size: 1rem;
        }

        #sdm-reto-landing .reto-stat-item span {
            color: var(--reto-muted);
            font-size: 0.96rem;
            line-height: 1.55;
        }

        #sdm-reto-landing .reto-rule-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px;
        }

        #sdm-reto-landing .reto-rule {
            padding: 16px 18px;
            border: 1px solid var(--reto-line);
            border-radius: 18px;
            background: #fff;
            border-top: 4px solid var(--reto-brand-lime-mid);
        }

        #sdm-reto-landing .reto-rule strong {
            display: block;
            margin-bottom: 6px;
            color: var(--reto-brand-olive);
            font-size: 1rem;
        }

        #sdm-reto-landing .reto-rule span {
            color: var(--reto-muted);
            font-size: 0.97rem;
            line-height: 1.55;
        }

        @media (prefers-reduced-motion: reduce) {

            #sdm-reto-landing *,
            #sdm-reto-landing *::before,
            #sdm-reto-landing *::after {
                transition: none !important;
                animation: none !important;
                scroll-behavior: auto !important;
            }
        }

        #sdm-reto-landing .reto-intro-copy>p:first-of-type {
            font-size: 1.48rem;
        }

        @media (max-width: 900px) {
            #sdm-reto-landing {
                font-size: 17px;
            }

            #sdm-reto-landing .reto-banner {
                aspect-ratio: 1979 / 625;
            }

            #sdm-reto-landing .reto-banner-content {
                left: 5.5%;
                width: 38%;
            }

            #sdm-reto-landing .reto-banner-motociclistas {
                right: 5%;
                width: 35%;
            }

            #sdm-reto-landing .reto-intro,
            #sdm-reto-landing .reto-two-col,
            #sdm-reto-landing .reto-grid,
            #sdm-reto-landing .reto-goal-layout,
            #sdm-reto-landing .reto-columns-compact,
            #sdm-reto-landing .reto-rule-grid {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-process {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-why .reto-bullet:first-child,
            #sdm-reto-landing .reto-why .reto-bullet:last-child {
                justify-content: center;
                padding-top: 0;
            }

            #sdm-reto-landing .reto-intro {
                gap: 24px;
            }

            #sdm-reto-landing .reto-intro-copy {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-intro-copy h1,
            #sdm-reto-landing .reto-intro-copy .reto-intro-title,
            #sdm-reto-landing .reto-intro-copy p,
            #sdm-reto-landing .reto-intro-copy .reto-actions,
            #sdm-reto-landing .reto-intro-copy .reto-quicknav {
                grid-column: 1;
            }

            #sdm-reto-landing .reto-intro-copy .reto-actions {
                grid-row: auto;
                margin-top: 22px;
            }

            #sdm-reto-landing .reto-goal-card-head {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-goal-icons {
                justify-content: flex-start;
            }

            #sdm-reto-landing h1 {
                max-width: 60ch;
            }

            #sdm-reto-landing .reto-key-stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 576px) {
            #sdm-reto-landing {
                width: min(100% - 16px, 1160px);
                padding: 8px 0 40px;
                font-size: 16px;
            }

            #sdm-reto-landing .reto-banner {
                aspect-ratio: 970 / 620;
            }

            #sdm-reto-landing .reto-banner-bg {
                object-position: 37% center;
            }

            #sdm-reto-landing .reto-banner-content {
                left: 5%;
                top: 43%;
                width: 54%;
            }

            #sdm-reto-landing .reto-banner-motociclistas {
                right: 2%;
                top: 68%;
                width: 48%;
            }

            #sdm-reto-landing .reto-banner-copy {
                max-width: 30ch;
                font-size: 0.92rem;
                line-height: 1.2;
            }

            #sdm-reto-landing .reto-banner-content .reto-btn-highlight {
                min-height: 46px;
                padding: 0 18px;
                font-size: 0.95rem;
            }

            #sdm-reto-landing .reto-side {
                padding: 18px;
            }

            #sdm-reto-landing .reto-key-stats {
                grid-template-columns: 1fr;
            }

            #sdm-reto-landing .reto-key-stat {
                min-height: auto;
            }

            #sdm-reto-landing .reto-actions {
                flex-direction: column;
            }

            #sdm-reto-landing .reto-actions a {
                width: 100%;
            }
        }
    </style>

    <div id="sdm-reto-landing">
        <section>
            <div class="reto-banner">
                <img class="reto-banner-layer reto-banner-bg" src="{{ asset('reto-assets/banner-reto-fondo.png') }}"
                    alt="">
                <img class="reto-banner-layer reto-banner-motociclistas"
                    src="{{ asset('reto-assets/banner-reto-motociclistas.png') }}" alt="">
                <div class="reto-banner-content">
                    <img class="reto-banner-logo" src="{{ asset('reto-assets/banner-reto-logo.png') }}"
                        alt="Reto Más lento, más pro">
                    <p class="reto-banner-copy">
                        Ser más rápido no te hace mejor conductor: en este reto, demostrarás que el verdadero dominio está
                        en el control y en la protección de la vida en las vías, no en la velocidad.
                    </p>
                    <div class="reto-actions">
                        <a class="reto-btn reto-btn-primary reto-btn-highlight" href="https://forms.gle/HQyMfK7k38y9z2xp8"
                            target="_blank" rel="noopener noreferrer">
                            <span>Inscribirse</span>
                            <i class="bi bi-arrow-right-circle-fill" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="reto-intro">
                <div class="reto-intro-copy">
                    <nav class="reto-quicknav" aria-label="Accesos rápidos del reto">
                        <a href="#por-que"><i class="bi bi-shield-check" aria-hidden="true"></i><span>Por qué</span></a>
                        <a href="#que-busca"><i class="bi bi-bullseye" aria-hidden="true"></i><span>Qué busca</span></a>
                        <a href="#como-funciona"><i class="bi bi-signpost-split" aria-hidden="true"></i><span>Cómo
                                funciona</span></a>
                        <a href="#explora-reto"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i><span>Explorar
                                información</span></a>
                    </nav>
                </div>
            </div>
        </section>

        <section id="por-que" class="reto-section" aria-labelledby="reto-datos-clave">
            <h2 id="reto-datos-clave">¿Por qué este reto?</h2>


            <div class="reto-section-content" aria-label="Datos clave del reto">

                <div class="reto-key-stats">
                    <article class="reto-key-stat">
                        <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-shield-exclamation"></i></span>
                        <strong class="reto-key-stat-value first-value">4 de cada 10</strong>
                        <p class="reto-key-stat-description">personas que mueren en las vías son motociclistas</p>
                    </article>

                    <article class="reto-key-stat">
                        <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-speedometer2"></i></span>
                        <strong class="reto-key-stat-value">El exceso de velocidad mata</strong>
                        <p class="reto-key-stat-description">Es el principal factor de riesgo en las vías de Bogotá</p>
                    </article>

                    <article class="reto-key-stat">
                        <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-bicycle"></i></span>
                        <strong class="reto-key-stat-value">Los motociclistas son quienes más exceden la velocidad</strong>
                        <p class="reto-key-stat-description">En comparación con otros actores viales</p>
                    </article>

                    <article class="reto-key-stat">
                        <span class="reto-key-stat-icon" aria-hidden="true"><i class="bi bi-cone-striped"></i></span>
                        <strong class="reto-key-stat-value">La falta de pericia también cobra vidas en las vías.</strong>
                        <p class="reto-key-stat-description">El control y la tecnica pueden marcar la diferencia.</p>
                    </article>
                </div>

                <div class="reto-video-slot" aria-label="Espacio para video de generalidades del reto">
                    <div class="reto-video-slot-inner">
                        <span class="reto-video-slot-icon" aria-hidden="true"><i class="bi bi-play-fill"></i></span>
                        <strong>Video generalidades</strong>
                    </div>

                </div>

            </div>


            <div class="reto-why-copy">
                <p>
                    El exceso de velocidad es el principal factor de riesgo en las vías de Bogotá y, sumado a la falta de
                    pericia en la conducción, está causando muertes y lesiones graves, principalmente entre motociclistas
                    de la ciudad. Sin embargo, <strong>el exceso de velocidad también es una práctica, paradójicamente,
                        fascinante para algunos motociclistas.</strong>
                </p>
                <p>
                    Para mitigar este riesgo y cambiar ese imaginario social de que "el mejor motociclista es el que más
                    rápido anda", la Secretaría Distrital de Movilidad puso en marcha el <strong>reto 'Más lento, más
                        pro'</strong>, una estrategia pedagógica innovadora que se suma a otras acciones con las que la
                    entidad le apuesta a la construcción de una cultura de movilidad segura.
                </p>
                <p>
                    En el reto 'Más lento, más pro' no gana el más rápido, gana quien mejor domina y controla su moto.
                    Porque quien es pro no corre, domina.
                </p>
            </div>
        </section>

        <section id="que-busca" class="reto-section">
            <h2>¿Qué busca?</h2>
            <p>
                El reto 'Más lento, más pro' busca tumbar el mito de que ir más rápido es ir mejor, recordando a los
                motociclistas que el exceso de velocidad es el riesgo, pero que el dominio, el control y las decisiones
                seguras en las vías son acciones que protegen la vida.
            </p>
            <p>
                Es una apuesta por cambiar la mentalidad para transformar comportamientos comunes en las vías.
            </p>

            <div class="reto-goal-layout">
                <article class="reto-goal-card">
                    <div class="reto-goal-card-head">
                        <h3>Lo que este reto quiere cambiar</h3>
                        <div class="reto-goal-icons" aria-hidden="true">
                            <img class="reto-goal-icon" src="{{ asset('reto-assets/material-landing-reto_9.png') }}"
                                alt="">
                            <img class="reto-goal-icon" src="{{ asset('reto-assets/material-landing-reto_7.png') }}"
                                alt="">
                        </div>
                    </div>
                    <ul class="reto-goal-list">
                        <li>Ir rápido no es ser eficiente</li>
                        <li>Ir rápido no es ser hábil</li>
                        <li>Ir lento no es estorbar</li>
                    </ul>
                </article>

                <article class="reto-goal-card reto-goal-highlight">
                    <div class="reto-goal-card-head">
                        <h3>Ser pro = dominar + controlar + decidir bien</h3>
                        <div class="reto-goal-icons" aria-hidden="true">
                            <img class="reto-goal-icon" src="{{ asset('reto-assets/material-landing-reto_10.png') }}"
                                alt="">
                            <img class="reto-goal-icon" src="{{ asset('reto-assets/material-landing-reto_8.png') }}"
                                alt="">
                        </div>
                    </div>
                    <p class="reto-goal-result">
                        Llegar, sin poner en riesgo la vida, es el verdadero logro.
                    </p>
                </article>
            </div>
        </section>

        <section id="como-funciona" class="reto-section">
            <h2>¿En qué consiste?</h2>
            <p>Recorre esta ruta paso a paso para entender cómo avanza el reto y qué evalúa cada válida.</p>
            <div class="reto-two-col reto-process">
                <div class="reto-process-nav" role="tablist" aria-label="Ruta del reto">
                    <button class="reto-process-tab is-active" type="button" role="tab" id="reto-process-tab-1"
                        aria-controls="reto-process-panel-1" data-process-tab="1" aria-selected="true">
                        <span class="reto-process-tab-number">1</span>
                        <div>
                            <h3>Tres pistas lentas</h3>
                            <p>Primer acercamiento al reto.</p>
                        </div>
                    </button>
                    <button class="reto-process-tab" type="button" role="tab" id="reto-process-tab-2"
                        aria-controls="reto-process-panel-2" data-process-tab="2" aria-selected="false">
                        <span class="reto-process-tab-number">2</span>
                        <div>
                            <h3>Niveles de complejidad</h3>
                            <p>La prueba exige mayor dominio.</p>
                        </div>
                    </button>
                    <button class="reto-process-tab" type="button" role="tab" id="reto-process-tab-3"
                        aria-controls="reto-process-panel-3" data-process-tab="3" aria-selected="false">
                        <span class="reto-process-tab-number">3</span>
                        <div>
                            <h3>Válidas eliminatorias</h3>
                            <p>Clasificación durante todo el año.</p>
                        </div>
                    </button>
                    <button class="reto-process-tab" type="button" role="tab" id="reto-process-tab-4"
                        aria-controls="reto-process-panel-4" data-process-tab="4" aria-selected="false">
                        <span class="reto-process-tab-number">4</span>
                        <div>
                            <h3>Final del reto</h3>
                            <p>Cierre en octubre de 2026.</p>
                        </div>
                    </button>
                </div>
                <div class="reto-process-panel">
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-1"
                        aria-labelledby="reto-process-tab-1" data-process-panel="1">
                        <span class="reto-process-panel-kicker">Paso 1</span>
                        <h3>Tres pistas lentas</h3>
                        <p>El reto se desarrolla en circuitos diseñados para evaluar control, equilibrio y precisión, no
                            velocidad.</p>
                    </article>
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-2"
                        aria-labelledby="reto-process-tab-2" data-process-panel="2" hidden>
                        <span class="reto-process-panel-kicker">Paso 2</span>
                        <h3>Tres niveles de complejidad</h3>
                        <p>La exigencia crece progresivamente para medir pericia real, capacidad de reacción y dominio
                            continuo de la moto.</p>
                    </article>
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-3"
                        aria-labelledby="reto-process-tab-3" data-process-panel="3" hidden>
                        <span class="reto-process-panel-kicker">Paso 3</span>
                        <h3>Válidas eliminatorias durante el año</h3>
                        <p>Habrá jornadas sucesivas con clasificación por categorías para que la competencia sea comparable
                            y justa.</p>
                    </article>
                    <article class="reto-process-panel-item" role="tabpanel" id="reto-process-panel-4"
                        aria-labelledby="reto-process-tab-4" data-process-panel="4" hidden>
                        <span class="reto-process-panel-kicker">Paso 4</span>
                        <h3>Gran final en octubre de 2026</h3>
                        <p>Avanzan quienes logran los mejores tiempos: los más lentos, más pro. La final se realizará en el
                            mes de octubre, durante la celebración del Día Distrital del Motociclista.</p>
                    </article>
                    <div class="reto-side" style="margin-top: 16px;">
                        <h3>Cómo se define a quienes avanzan</h3>
                        <p>
                            El reto no premia correr. Premia a quienes controlan mejor la moto, recorren la pista con
                            precisión
                            y logran el mejor desempeño en términos de lentitud y dominio.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="explora-reto" class="reto-section">
            <h2>Explora la información del reto</h2>
            <p>Elige el tema que quieres revisar. Así la información se presenta por bloques y no toda al tiempo.</p>
            <div class="reto-info-tabs" role="tablist" aria-label="Información del reto">
                <button class="reto-info-tab is-active" type="button" role="tab" id="reto-info-tab-categorias"
                    aria-controls="reto-info-panel-categorias" data-info-tab="categorias"
                    aria-selected="true">Categorías</button>
                <button class="reto-info-tab" type="button" role="tab" id="reto-info-tab-requisitos"
                    aria-controls="reto-info-panel-requisitos" data-info-tab="requisitos"
                    aria-selected="false">Requisitos</button>
                <button class="reto-info-tab" type="button" role="tab" id="reto-info-tab-reglas"
                    aria-controls="reto-info-panel-reglas" data-info-tab="reglas" aria-selected="false">Reglas</button>
            </div>

            <article class="reto-info-panel" role="tabpanel" id="reto-info-panel-categorias"
                aria-labelledby="reto-info-tab-categorias" data-info-panel="categorias">
                <div class="reto-info-panel-head">
                    <h3>Categorías de participación</h3>
                    <p>La clasificación separa experiencia y género para que la competencia sea más clara y comparable.</p>
                </div>
                <ul class="reto-chip-list">
                    <li>Mujeres novatas: menos de dos años manejando moto</li>
                    <li>Hombres novatos: menos de dos años manejando moto</li>
                    <li>Mujeres experimentadas: más de dos años manejando moto</li>
                    <li>Hombres experimentados: más de dos años manejando moto</li>
                </ul>
            </article>

            <article class="reto-info-panel" role="tabpanel" id="reto-info-panel-requisitos"
                aria-labelledby="reto-info-tab-requisitos" data-info-panel="requisitos" hidden>
                <div class="reto-info-panel-head">
                    <h3>Requisitos para participar</h3>
                    <p>Antes de inscribirte, verifica que cumples estas condiciones básicas.</p>
                </div>
                <ul class="reto-mini-list">
                    <li>Licencia de conducción vigente.</li>
                    <li>Revisión técnico-mecánica vigente.</li>
                    <li>SOAT vigente.</li>
                    <li>Estar al día con el pago de comparendos.</li>
                </ul>
            </article>

            <article class="reto-info-panel" role="tabpanel" id="reto-info-panel-reglas"
                aria-labelledby="reto-info-tab-reglas" data-info-panel="reglas" hidden>
                <div class="reto-info-panel-head">
                    <h3>Reglas del reto</h3>
                    <p>Estas reglas buscan reforzar hábitos de conducción segura y controlada durante la prueba.</p>
                </div>
                <div class="reto-rule-grid">
                    <article class="reto-rule">
                        <strong>Cero alcohol</strong>
                        <span>No se permite consumo de alcohol o sustancias psicoactivas.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Sin apoyar los pies</strong>
                        <span>La prueba debe completarse sin poner los pies en el piso.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Dentro del carril</strong>
                        <span>La moto debe mantenerse en el recorrido establecido.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Control continuo</strong>
                        <span>No se puede dejar apagar la moto durante la prueba.</span>
                    </article>
                    <article class="reto-rule">
                        <strong>Salida inmediata</strong>
                        <span>Se debe arrancar tan pronto se dé la orden de inicio.</span>
                    </article>
                </div>
                <div class="reto-side" style="margin-top: 18px;">
                    <h3>Importante</h3>
                    <p>Incumplir cualquiera de estas reglas significa descalificación.</p>
                </div>
            </article>

        </section>

        <section id="inscripcion-reto" class="reto-section reto-cta">
            <h2>Acepta el reto</h2>
            <p>
                Demuestra que quien es pro no corre, domina. Inscríbete en la siguiente válida y participa en una
                experiencia centrada en el control, la pericia y el cuidado de la vida.
            </p>

            <a class="reto-btn reto-btn-primary" href="https://forms.gle/HQyMfK7k38y9z2xp8" target="_blank"
                rel="noopener noreferrer">
                <span>Inscríbete en la siguiente válida</span>
                <i class="bi bi-arrow-right-circle-fill" aria-hidden="true"></i>
            </a>
        </section>
    </div>

    <script>
        (function() {
            var root = document.getElementById('sdm-reto-landing');
            if (!root) return;

            var processTabs = Array.prototype.slice.call(root.querySelectorAll('[data-process-tab]'));
            var processPanels = Array.prototype.slice.call(root.querySelectorAll('[data-process-panel]'));

            function activateProcess(step) {
                processTabs.forEach(function(tab) {
                    var active = tab.getAttribute('data-process-tab') === step;
                    tab.classList.toggle('is-active', active);
                    tab.setAttribute('aria-selected', active ? 'true' : 'false');
                    tab.setAttribute('tabindex', active ? '0' : '-1');
                });

                processPanels.forEach(function(panel) {
                    panel.hidden = panel.getAttribute('data-process-panel') !== step;
                });
            }

            processTabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    activateProcess(tab.getAttribute('data-process-tab'));
                });
            });

            function bindTabKeyboard(tabs, activateFn, attributeName) {
                tabs.forEach(function(tab, index) {
                    tab.addEventListener('keydown', function(event) {
                        var nextIndex = null;

                        if (event.key === 'ArrowRight' || event.key === 'ArrowDown') nextIndex = (
                            index + 1) % tabs.length;
                        if (event.key === 'ArrowLeft' || event.key === 'ArrowUp') nextIndex = (index -
                            1 + tabs.length) % tabs.length;
                        if (event.key === 'Home') nextIndex = 0;
                        if (event.key === 'End') nextIndex = tabs.length - 1;

                        if (nextIndex === null) return;

                        event.preventDefault();
                        var nextTab = tabs[nextIndex];
                        activateFn(nextTab.getAttribute(attributeName));
                        nextTab.focus();
                    });
                });
            }

            activateProcess('1');
            bindTabKeyboard(processTabs, activateProcess, 'data-process-tab');

            var infoTabs = Array.prototype.slice.call(root.querySelectorAll('[data-info-tab]'));
            var infoPanels = Array.prototype.slice.call(root.querySelectorAll('[data-info-panel]'));

            function activateInfo(name) {
                infoTabs.forEach(function(tab) {
                    var active = tab.getAttribute('data-info-tab') === name;
                    tab.classList.toggle('is-active', active);
                    tab.setAttribute('aria-selected', active ? 'true' : 'false');
                    tab.setAttribute('tabindex', active ? '0' : '-1');
                });

                infoPanels.forEach(function(panel) {
                    panel.hidden = panel.getAttribute('data-info-panel') !== name;
                });
            }

            infoTabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    activateInfo(tab.getAttribute('data-info-tab'));
                });
            });

            activateInfo('categorias');
            bindTabKeyboard(infoTabs, activateInfo, 'data-info-tab');
        })();
    </script>
@endsection
