@if(session('result'))
@php $result = session('result'); @endphp
@if(!isset($result['error']) && $result['url'])
<script>
    window.serverUploadedImageUrl = "{{ $result['url'] }}";
</script>
@endif
@endif
@push('style')
<style>
    * {
        font-family: "Plus Jakarta Sans", sans-serif;
    }

    .mainsection {
        background-color: var(--bs-body-bg);
    }

    .hero-section {
        text-align: center;
    }

    .powered-badge {
        color: #4f46e5;
        font-size: 12px;
        font-weight: 400;
    }

    .rounded-pill-badge {
        background: var(--bs-label);
    }

    .hero-title {
        font-size: 57px;
        font-weight: 800;
        color: var(--bs-body-color);
        line-height: 1.2;
        margin-bottom: -5px;
    }

    .hero-title-gradient {
        background: linear-gradient(to bottom right, #7466efff, #6B5CE7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 48px;
        font-weight: 800;
        line-height: 1.2;
        display: block;
        margin-bottom: 16px;
        font-size: 57px;
    }

    .hero-subtitle {
        color: var(--bs-navcolor);
        font-size: 1rem;
        line-height: 1.625;
        max-width: 480px;
        margin: 0 auto 40px;
    }

    .generator-container {
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .fg-card {
        border-radius: 16px;
        border: var(--bs-card-border);
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        background: var(--bs-card);
        height: 100%;
    }

    .fg-card-header {
        padding: 22px 20px 15px;
        border-radius: 16px 16px 0 0;
    }

    .fg-card-body {
        padding: 24px;
    }

    .fg-card-title {
        font-size: 16px;
        font-weight: 700;
        color: var(--bs-body-color);
        margin: 0;
    }

    .tabs {
        display: flex;
        gap: 6px;
        background: var(--bs-primary);
        padding: 4px;
        border-radius: 10px;
    }

    .tab-btn {
        flex: 1;
        padding: 8px 12px;
        border: none;
        background: transparent;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        color: var(--bs-navcolor);
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .tab-btn.active {
        background: var(--bs-body-bg);
        color: rgb(79 70 229);
        font-weight: 550;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .fg-label {
        font-size: 12px;
        font-weight: 600;
        display: block;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding-top: 12px;
        margin-bottom: 5px;
    }

    .fg-input {
        width: 100%;
        padding: 10px 14px;
        border: var(--bs-card-border);
        border-radius: 15px;
        font-size: 14px;
        outline: none;
        transition: all 0.2s;
        box-sizing: border-box;
        background-color: var(--bs-body-bg);
    }

    .fg-input:focus {
        border-color: #7567f8;
        box-shadow: 0 0 0 3px rgba(117, 103, 248, 0.1);
    }

    .fg-select {
        width: 100%;
        padding: 10px 14px;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        font-size: 14px;
        outline: none;
        background: #fff;
        cursor: pointer;
        box-sizing: border-box;
    }

    .fg-select:focus {
        border-color: #7567f8;
        box-shadow: 0 0 0 3px rgba(117, 103, 248, 0.1);
    }

    .range-container {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .range-wrapper {
        flex: 1;
    }

    .range-input {
        width: 100%;
        height: 6px;
        border-radius: 3px;
        background: #e2e8f0;
        outline: none;
    }

    .range-input::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        cursor: pointer;
        box-shadow: 0 2px 6px rgba(117, 103, 248, 0.3);
    }

    .range-value {
        font-size: 12px;
        color: #64748b;
        background: #f1f5f9;
        padding: 4px 10px;
        border-radius: 6px;
        min-width: 50px;
        text-align: center;
    }

    .color-row {
        display: flex;
        gap: 12px;
        align-items: center;
    }

    .color-preview {
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        border-radius: 10px;
        border: 1px solid #e2e8f0;
    }

    .color-input {
        flex: 1;
        min-width: 0;
        padding: 10px 14px;
        border: var(--bs-card-border);
        border-radius: 10px;
        font-size: 14px;
        outline: none;
        font-family: monospace;
    }

    .color-swatches {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-top: 10px;
    }

    .swatch {
        width: 28px;
        height: 28px;
        border-radius: 6px;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.2s;
        flex-shrink: 0;
    }

    .swatch:hover {
        transform: scale(1.1);
        border-color: #cbd5e1;
    }

    .shape-btns {
        display: flex;
        gap: 6px;
        background: var(--bs-card);
        padding: 4px;
        border-radius: 10px;
        margin-bottom: 20px;
    }

    .shape-btn {
        flex: 1;
        padding: 8px 12px;
        border: none;
        background: transparent;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 500;
        color: var(--bs-navcolor);
        cursor: pointer;
        transition: all 0.2s;
    }

    .shape-btn.active {
        background: #fff;
        color: #6B5CE7;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .generate-btn {
        width: 100%;
        padding: 12px;
        border: none;
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        color: #fff;
        border-radius: 10px;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
    }

    .generate-btn:hover {
        opacity: 0.95;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(117, 103, 248, 0.3);
    }

    .browser-preview {
        display: inline-block;
        text-align: left;
    }

    .browser-bar {
        display: flex;
        align-items: center;
        gap: 8px;
        padding: 8px 10px;
        background: #f1f5f9;
        border-radius: 8px 8px 0 0;
        margin-bottom: -1px;
    }

    .browser-dots {
        display: flex;
        gap: 6px;
    }

    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .dot-red {
        background: #ff5f57;
    }

    .dot-yellow {
        background: #febc2e;
    }

    .dot-green {
        background: #28c840;
    }

    .tab-label {
        display: flex;
        align-items: center;
        gap: 6px;
        padding: 4px 10px;
        background: #fff;
        border-radius: 6px 6px 0 0;
        font-size: 11px;
        color: #64748b;
    }

    .browser-content {
        border: 1px solid #e2e8f0;
        border-radius: 0 0 8px 8px;
        padding: 30px;
        background: var(--bs-body-bg);
    }

    .favicon-preview {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: 800;
        transition: all 0.2s;
        background: #6366f1;
    }

    .favicon-preview--tab {
        width: 16px;
        height: 16px;
        font-size: 8px;
        border-radius: 3px;
    }

    .favicon-preview--main {
        width: 100px;
        height: 100px;
        font-size: 48px;
        border-radius: 20px;
    }

    .favicon-preview--16 {
        width: 16px;
        height: 16px;
        font-size: 8px;
        border-radius: 3px;
    }

    .favicon-preview--32 {
        width: 32px;
        height: 32px;
        font-size: 14px;
        border-radius: 5px;
    }

    .favicon-preview--48 {
        width: 48px;
        height: 48px;
        font-size: 20px;
        border-radius: 8px;
    }

    .favicon-preview--64 {
        width: 64px;
        height: 64px;
        font-size: 28px;
        border-radius: 10px;
    }

    .favicon-preview--128 {
        width: 128px;
        height: 128px;
        font-size: 42px;
        border-radius: 16px;
    }

    .size-label {
        font-size: 11px;
        color: var(--bs-navcolor);
        margin-top: 8px;
    }

    .size-previews {
        display: flex;
        align-items: flex-end;
        justify-content: center;
        gap: 16px;
        padding: 20px;
        flex-wrap: wrap;
    }

    .size-item {
        text-align: center;
    }

    .fg-size-card {
        background: var(--bs-card);
        border: var(--bs-card-border);
        border-radius: 12px;
        padding: 25px 12px;
        text-align: center;
        transition: all 0.2s;
        width: 230px;
        cursor: pointer;
    }

    .fg-size-card:hover {
        border-color: #c7d2fe;
        box-shadow: 0 2px 8px rgba(99, 102, 241, 0.08);
    }

    .fg-size-card-title {
        color: #6366f1;
        font-weight: 800;
        font-size: 18px;
        margin-bottom: 6px;
    }

    .fg-size-card-text {
        color: var(--bs-navcolor);
        font-size: 11px;
        font-weight: 550;
    }

    .fg-sizes-subtitle {
        color: #6366f1;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .fg-sizes-title {
        font-size: 28px;
        font-weight: 800;
        color: --bs-body-color;
        margin-bottom: 8px;
    }

    .fg-sizes-description {
        color: var(--bs-navcolor);
        font-size: 14px;
        max-width: 450px;
        margin: 0 auto;
    }

    .fg-how-subtitle {
        color: #6366f1;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .fg-how-title {
        font-size: 28px;
        font-weight: 800;
        color: var(--bs-body-color);
        margin-bottom: 8px;
    }

    .fg-how-description {
        color: var(--bs-navcolor);
        font-size: 14px;
        margin-bottom: 24px;
    }

    .fg-step-card {
        background: var(--bs-card);
        border: var(--bs-card-border);
        border-radius: 16px;
        padding: 24px 15px 0px;
        width: 230px;
        transition: all 0.2s;
    }

    .fg-step-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .fg-step-number {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 30px;
        border-radius: 8px;
        font-weight: 800;
        font-size: 14px;
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        color: #fff;
        margin-bottom: 12px;
    }

    .fg-step-title {
        font-size: 15px;
        font-weight: 700;
        color: var(--bs-body-color);
        margin-bottom: 8px;
    }

    .fg-step-text {
        font-size: 13px;
        color: var(--bs-navcolor);
        line-height: 1.5;
    }

    .fg-why-subtitle {
        color: #6366f1;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .fg-why-title {
        font-size: 30px;
        font-weight: 800;
        color: var(--bs-body-color);
        margin-bottom: 8px;
    }

    .fg-why-description {
        color: var(--bs-navcolor);
        font-size: 14px;
        margin: 10px 400px 35px 400px;
    }

    .fg-feature-card {
        background: var(--bs-card);
        border: var(--bs-card-border);
        border-radius: 16px;
        padding: 20px 24px 0px;
        width: 320px;
        transition: all 0.2s;
    }

    .fg-feature-card:hover {
        border-color: #c7d2fe;
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.08);
    }

    .fg-feature-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        border-radius: 10px;
        background: var(--bs-svg);
        margin-bottom: 12px;
    }

    .fg-feature-title {
        font-size: 14px;
        font-weight: 700;
        color: var(--bs-body-color);
        margin-bottom: 8px;
    }

    .fg-feature-text {
        font-size: 12px;
        color: var(--bs-navcolor);
        line-height: 1.5;
    }

    .fg-use-subtitle {
        color: #6366f1;
        font-weight: 600;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .fg-use-title {
        font-size: 30px;
        font-weight: 800;
        color: var(--bs-body-color);
        margin-bottom: 8px;
    }

    .fg-use-description {
        color: var(--bs-navcolor);
        font-size: 14px;
        margin-bottom: 32px;
    }

    .fg-use-card {
        background: var(--bs-card);
        border: var(--bs-card-border);
        border-radius: 16px;
        padding: 22px 20px 0px 22px;
        width: 312px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        transition: all 0.2s;
    }

    .fg-use-card:hover {
        border-color: #c7d2fe;
        box-shadow: 0 4px 12px rgba(99, 102, 241, 0.08);
    }

    .fg-use-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--bs-svg);
        flex-shrink: 0;
    }

    .fg-use-card .fg-use-title {
        font-size: 14px;
        font-weight: 700;
        color: var(--bs-body-color);
        margin-bottom: 6px;
    }

    .fg-use-card .fg-use-text {
        font-size: 12px;
        color: var(--bs-navcolor);
        line-height: 1.5;
    }

    .fg-about-card {
        background: var(--bs-card);
        border: var(--bs-card-border);
        border-radius: 16px;
        padding: 28px;
    }

    .fg-about-subtitle {
        color: rgb(79 70 229);
        font-size: 11px;
        letter-spacing: 1px;
        margin-bottom: 8px;
    }

    .fg-about-title {
        font-size: 25px;
        font-weight: 800;
        margin-bottom: 16px;
        line-height: 1.25;
    }

    .fg-about-text {
        color: var(--bs-navcolor);
        font-size: 14px;
        line-height: 1.6;
        margin-bottom: 12px;
    }

    .fg-about-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px 24px;
    }

    .fg-about-list-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: var(--bs-navcolor);
    }

    .fg-html-card {
        background: var(--bs-card);
        border: var(--bs-card-border);
        border-radius: 16px;
        padding: 24px;
        height: 100%;
    }

    .fg-html-header {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-bottom: 16px;
    }

    .fg-html-header span {
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .fg-html-text {
        color: var(--bs-navcolor);
        font-size: 12px;
        margin-bottom: 16px;
        line-height: 1.6;
    }

    .fg-code {
        background: #f1f5f9;
        padding: 2px 6px;
        border-radius: 4px;
        font-size: 12px;
        font-family: monospace;
        color: #4f46e5;
    }

    .fg-code-block {
        background: #1a1b26;
        border-radius: 12px;
        padding: 20px;
        overflow-x: auto;
    }

    .fg-code-block pre {
        margin: 0;
        color: #e0e0e0;
        font-size: 12px;
    }

    .fg-code-tag {
        color: #bb9af7;
    }

    .fg-code-value {
        color: #34d399;
    }

    .fg-html-note {
        color: var(--bs-navcolor);
        font-size: 11px;
        line-height: 1.6;
    }

    .faq-section {
        text-align: center;
    }

    .how-title-4 {
        font-size: 30px;
        font-weight: 800;
        color: var(--text);
        margin-bottom: 12px;
    }

    .how-subtitle-3 {
        color: var(--bs-navcolor);
        font-size: 14px;
        max-width: 510px;
        margin: 0 auto 40px;
        line-height: 1.7;
    }

    .faq-wrap {
        max-width: 770px;
        margin: 0 auto;
    }

    .faq-item {
        background: var(--bs-card);
        border-radius: 12px;
        padding: 18px 15px;
        margin-bottom: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        text-align: left;
        border: var(--bs-card-border);
    }

    .faq-question {
        font-size: 0.88rem;
        font-weight: 700;
        color: var(--text);
        margin-bottom: 0;
    }

    .faq-answer {
        font-size: 0.82rem;
        color: var(--bs-navcolor);
        line-height: 1.7;
        margin-top: 12px;
        margin-bottom: 0;
        display: none;
    }

    .faq-icon {
        color: #7367f0;
        font-size: 1.2rem;
        font-weight: 300;
        min-width: 20px;
        text-align: center;
        line-height: 1;
    }

    .faq-item.open .faq-answer {
        display: block;
    }

    .faq-item.open .faq-icon {
        transform: rotate(45deg);
    }

    .faq-icon {
        transition: transform 0.2s ease;
    }

    .simple-badge {
        background: linear-gradient(to bottom right, #7567f8, #6B5CE7);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-size: 0.75rem;
        font-weight: 800;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
    }

    .cta-section .extract {
        max-width: 59%;
        padding-left: 0;
        padding-right: 0;
    }

    .cta-box {
        background: linear-gradient(135deg, #7567f8, #6B5CE7, #8b6ff5);
        border-radius: 20px;
        padding: 50px 24px;
        text-align: center;
    }

    .cta-title {
        color: #fff;
        font-size: 30px;
        font-weight: 800;
        margin-bottom: 12px;
    }

    .cta-desc {
        color: rgba(255, 255, 255, 0.85);
        font-size: 0.88rem;
        line-height: 1.7;
        max-width: 380px;
        margin: 0 auto 28px;
    }

    .cta-btn {
        background: #fff;
        color: #6B5CE7;
        border: none;
        padding: 12px 32px;
        font-size: 0.88rem;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
    }

    .cta-btn:hover {
        background: #f0f0ff;
        color: #6B5CE7;
    }

    .image-upload-box {
        border: 2px dashed #cbd5e1;
        border-radius: 12px;
        padding: 30px 20px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s;
        background: var(--bs-body-bg);
    }

    .image-upload-box:hover,
    .image-upload-box.drag-over {
        border-color: #7567f8;
        background: rgba(117, 103, 248, 0.04);
    }

    .upload-text {
        font-size: 13px;
        font-weight: 600;
        color: var(--bs-body-color);
        margin: 10px 0 2px;
    }

    .upload-subtext {
        font-size: 11px;
        color: #94a3b8;
        margin: 0;
    }

    #uploadedPreviewWrap {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
    }

    #uploadedImgThumb {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 12px;
        border: 1px solid #e2e8f0;
    }

    .remove-image-btn {
        border: none;
        background: #fee2e2;
        color: #dc2626;
        font-size: 12px;
        font-weight: 600;
        padding: 5px 12px;
        border-radius: 6px;
        cursor: pointer;
    }

    .remove-image-btn:hover {
        background: #fecaca;
    }

    .favicon-preview.has-image {
        background-size: cover;
        background-position: center;
        color: transparent;
    }

    .emoji-grid {
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        gap: 6px;
        max-height: 260px;
        overflow-y: auto;
        padding: 12px;
        border: var(--bs-card-border);
        border-radius: 12px;
        margin-top: 10px;
        background: var(--bs-body-bg);
    }

    .emoji-item {
        font-size: 22px;
        text-align: center;
        padding: 6px 0;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.15s;
    }

    .emoji-item:hover {
        background: rgba(117, 103, 248, 0.1);
        transform: scale(1.15);
    }

    .emoji-item.selected {
        background: rgba(117, 103, 248, 0.18);
        box-shadow: 0 0 0 2px #7567f8;
    }
    /* ---------- Scroll reveal animation ---------- */
    .reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.7s ease, transform 0.7s ease;
    }

    .reveal.reveal-visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Optional: stagger children inside a revealed container */
    .reveal-stagger > * {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .reveal-stagger.reveal-visible > * {
        opacity: 1;
        transform: translateY(0);
    }

    .reveal-stagger.reveal-visible > *:nth-child(1) { transition-delay: 0s; }
    .reveal-stagger.reveal-visible > *:nth-child(2) { transition-delay: 0.08s; }
    .reveal-stagger.reveal-visible > *:nth-child(3) { transition-delay: 0.16s; }
    .reveal-stagger.reveal-visible > *:nth-child(4) { transition-delay: 0.24s; }

    /* Respect users who prefer reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .reveal,
        .reveal-stagger > * {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }
    }

    @media (max-width: 576px) {
        .cta-title {
            font-size: 1.3rem;
        }

        .cta-box {
            padding: 36px 16px;
        }

        .step-card {
            margin-bottom: 20px;
        }

        .fg-use-card {
            width: 100%;
            max-width: 320px;
        }

        .fg-feature-card {
            width: 100%;
            max-width: 300px;
        }

        .fg-step-card {
            width: 100%;
            max-width: 300px;
        }

        .fg-size-card {
            width: 100%;
            max-width: 280px;
        }

        .hero-title,
        .hero-title-gradient {
            font-size: 32px;
        }
    }

    @media (max-width: 992px) {
        .fg-about-list {
            flex-direction: column;
            gap: 6px;
        }
    }
</style>
@endpush
<div class="mainsection">
    <div class="hero-section pt-5">
        <div class="container">
            <p class="powered-badge fw-bold pb-2 pt-4">
                <span class="border border-primary-subtle rounded-pill p-2 rounded-pill-badge">{{ __('pages.badge') }}</span>
            </p>
            <h1 class="hero-title">{{ __('pages.hero_title') }}</h1>
            <span class="hero-title-gradient">{{ __('pages.hero_title_gradient') }}</span>
            <p class="hero-subtitle">{{ __('pages.hero_subtitle') }}</p>
        </div>
        <div class="generator-container">
            <div class="row g-4 align-items-start">
                <div class="col-12 col-md-6">
                    <div class="fg-card">
                        <div class="fg-card-header">
                            <h3 class="fg-card-title">{{ __('pages.customize_title') }}</h3>
                        </div>
                        <div class="fg-card-body">
                            <section>
                                <div class="tabs">
                                    <button class="tab-btn active" data-tab="text">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M4 7V4h16v3"></path>
                                            <path d="M9 20h6"></path>
                                            <path d="M12 4v16"></path>
                                        </svg>
                                        {{ __('pages.tab_text') }}
                                    </button>
                                    <button class="tab-btn" data-tab="emoji">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                                        </svg>
                                        {{ __('pages.tab_emoji') }}
                                    </button>
                                    <button class="tab-btn" data-tab="image">
                                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                            <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                            <polyline points="21 15 16 10 5 21"></polyline>
                                        </svg>
                                        {{ __('pages.tab_image') }}
                                    </button>
                                </div>
                            </section>
                            <section id="textInputSection">
                                <label class="fg-label text-muted">{{ __('pages.text_label') }}</label>
                                <input type="text" class="fg-input" id="textInput" value="FG" maxlength="3">
                            </section>
                            <section id="imageInputSection" style="display:none;">
                                <label class="fg-label text-muted">{{ __('pages.upload_label') }}</label>
                                <form class="closest" method="POST" enctype="multipart/form-data" id="imageUploadForm">
                                    @csrf
                                    <div class="image-upload-box" id="imageUploadBox" style="position: relative; height: 505px;">
                                        <input type="file" name="w_image" id="imageFileInput" accept="image/png, image/jpeg, image/svg+xml, image/gif, image/webp" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; opacity: 0; cursor: pointer;">
                                        <div id="uploadPlaceholder" style="pointer-events: none; height: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                                            <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="1.5">
                                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                <polyline points="17 8 12 3 7 8"></polyline>
                                                <line x1="12" y1="3" x2="12" y2="15"></line>
                                            </svg>
                                            <p class="upload-text" style="font-size: 16px; margin-top: 15px;">{{ __('pages.upload_text') }}</p>
                                            <p class="upload-subtext">{{ __('pages.upload_subtext') }}</p>
                                        </div>
                                    </div>
                                    <button type="submit" class="generate-btn mt-3">Upload Image</button>
                                </form>

                                <!-- NEW: shows the uploaded image URL -->
                            </section>
                            <section id="emojiInputSection" style="display:none;">
                                <label class="fg-label text-muted">{{ __('pages.emoji_label') }}</label>
                                <div class="emoji-grid" id="emojiGrid"></div>
                            </section>
                            <div id="settingsContainer">
                                <div id="textOnlySettings">
                                    <section>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <label class="fg-label text-muted">{{ __('pages.font_size') }}</label>
                                                <div class="range-container">
                                                    <div class="range-wrapper">
                                                        <input type="range" class="range-input" id="fontSizeRange" min="30" max="100" value="61">
                                                    </div>
                                                    <span class="range-value" id="fontSizeValue">61%</span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="fg-label text-muted">{{ __('pages.font_weight') }}</label>
                                                <select class="fg-select" id="fontWeightSelect">
                                                    <option value="400">{{ __('pages.weight_regular') }}</option>
                                                    <option value="600">{{ __('pages.weight_semibold') }}</option>
                                                    <option value="800" selected>{{ __('pages.weight_bold') }}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <label class="fg-label">{{ __('pages.text_color') }}</label>
                                        <div class="color-row">
                                            <div class="color-preview" id="textColorPreview"></div>
                                            <input type="text" class="color-input" id="textColorInput" value="#ffffff">
                                        </div>
                                        <div class="color-swatches" id="textSwatches">
                                            <div class="swatch swatch--white" data-color="#ffffff"></div>
                                            <div class="swatch swatch--black" data-color="#000000"></div>
                                            <div class="swatch swatch--indigo" data-color="#6366f1"></div>
                                            <div class="swatch swatch--pink" data-color="#ec4899"></div>
                                            <div class="swatch swatch--emerald" data-color="#10b981"></div>
                                            <div class="swatch swatch--amber" data-color="#f59e0b"></div>
                                        </div>
                                    </section>
                                </div>
                                <section>
                                    <label class="fg-label">{{ __('pages.bg_color') }}</label>
                                    <div class="color-row">
                                        <div class="color-preview" id="bgColorPreview"></div>
                                        <input type="text" class="color-input" id="bgColorInput" value="#6366f1">
                                    </div>
                                    <div class="color-swatches" id="bgSwatches">
                                        <div class="swatch swatch--indigo" data-color="#6366f1"></div>
                                        <div class="swatch swatch--violet" data-color="#8b5cf6"></div>
                                        <div class="swatch swatch--pink" data-color="#ec4899"></div>
                                        <div class="swatch swatch--amber" data-color="#f59e0b"></div>
                                        <div class="swatch swatch--emerald" data-color="#10b981"></div>
                                        <div class="swatch swatch--sky" data-color="#0ea5e9"></div>
                                        <div class="swatch swatch--black" data-color="#000000"></div>
                                        <div class="swatch swatch--white" data-color="#ffffff"></div>
                                    </div>
                                </section>
                                <section>
                                    <label class="fg-label">{{ __('pages.shape') }}</label>
                                    <div class="shape-btns">
                                        <button class="shape-btn" data-shape="square">{{ __('pages.shape_square') }}</button>
                                        <button class="shape-btn active" data-shape="rounded">{{ __('pages.shape_rounded') }}</button>
                                        <button class="shape-btn" data-shape="circle">{{ __('pages.shape_circle') }}</button>
                                    </div>
                                </section>
                            </div>
                            <button class="generate-btn">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                {{ __('pages.generate_btn') }}
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column gap-4">
                    <div class="fg-card text-center">
                        <div class="fg-card-header">
                            <h3 class="fg-card-title">{{ __('pages.live_preview') }}</h3>
                        </div>
                        <div class="fg-card-body">
                            <div class="browser-preview">
                                <div class="browser-bar">
                                    <div class="browser-dots">
                                        <div class="dot dot-red"></div>
                                        <div class="dot dot-yellow"></div>
                                        <div class="dot dot-green"></div>
                                    </div>
                                    <div class="tab-label">
                                        <div class="favicon-preview favicon-preview--tab" id="tabPreview">FG</div>
                                        {{ __('pages.my_website') }}
                                    </div>
                                </div>
                                <div class="browser-content">
                                    <div class="favicon-preview favicon-preview--main" id="mainPreview">FG</div>
                                    <div class="size-label">200×200</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fg-card">
                        <div class="fg-card-header">
                            <h3 class="fg-card-title">{{ __('pages.size_preview') }}</h3>
                        </div>
                        <div class="fg-card-body">
                            <div class="size-previews">
                                <div class="size-item">
                                    <div class="favicon-preview favicon-preview--16" id="size16">FG</div>
                                    <div class="size-label">16px</div>
                                </div>
                                <div class="size-item">
                                    <div class="favicon-preview favicon-preview--32" id="size32">FG</div>
                                    <div class="size-label">32px</div>
                                </div>
                                <div class="size-item">
                                    <div class="favicon-preview favicon-preview--48" id="size48">FG</div>
                                    <div class="size-label">48px</div>
                                </div>
                                <div class="size-item">
                                    <div class="favicon-preview favicon-preview--64" id="size64">FG</div>
                                    <div class="size-label">64px</div>
                                </div>
                                <div class="size-item">
                                    <div class="favicon-preview favicon-preview--128" id="size128">FG</div>
                                    <div class="size-label">128px</div>
                                </div>
                            </div>

                            <div class="d-flex gap-2 mt-3">
                                <button type="button" class="generate-btn" id="downloadZipBtn">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                        <path d="M12 15V3"></path>
                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                        <path d="m7 10 5 5 5-5"></path>
                                    </svg>
                                    Download All (ZIP)
                                </button>
                                <button type="button" class="generate-btn" id="downloadOneBtn" style="background:#fff; color:#6B5CE7; border:1.5px solid #6B5CE7;">
                                    Download PNG
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="sizes-section reveal">
        <div class="container pt-5">
            <div class="text-center mb-4">
                <p class="fg-sizes-subtitle">{{ __('pages.sizes_subtitle') }}</p>
                <h2 class="fg-sizes-title">{{ __('pages.sizes_title') }}</h2>
                <p class="fg-sizes-description">{{ __('pages.sizes_description') }}</p>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">
                <div class="fg-size-card">
                    <div class="fg-size-card-title">16×16</div>
                    <div class="fg-size-card-text">{{ __('pages.size_16_text') }}</div>
                </div>
                <div class="fg-size-card">
                    <div class="fg-size-card-title">32×32</div>
                    <div class="fg-size-card-text">{{ __('pages.size_32_text') }}</div>
                </div>
                <div class="fg-size-card">
                    <div class="fg-size-card-title">48×48</div>
                    <div class="fg-size-card-text">{{ __('pages.size_48_text') }}</div>
                </div>
                <div class="fg-size-card">
                    <div class="fg-size-card-title">64×64</div>
                    <div class="fg-size-card-text">{{ __('pages.size_64_text') }}</div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="fg-size-card">
                    <div class="fg-size-card-title">128×128</div>
                    <div class="fg-size-card-text">{{ __('pages.size_128_text') }}</div>
                </div>
                <div class="fg-size-card">
                    <div class="fg-size-card-title">180×180</div>
                    <div class="fg-size-card-text">{{ __('pages.size_180_text') }}</div>
                </div>
                <div class="fg-size-card">
                    <div class="fg-size-card-title">192×192</div>
                    <div class="fg-size-card-text">{{ __('pages.size_192_text') }}</div>
                </div>
                <div class="fg-size-card">
                    <div class="fg-size-card-title">512×512</div>
                    <div class="fg-size-card-text">{{ __('pages.size_512_text') }}</div>
                </div>
            </div>
        </div>
    </section>
    <section class="how-it-works-section reveal">
        <div class="container pt-5">
            <div class="text-center mb-4">
                <p class="fg-how-subtitle">{{ __('pages.how_subtitle') }}</p>
                <h2 class="fg-how-title">{{ __('pages.how_title') }}</h2>
                <p class="fg-how-description">{{ __('pages.how_description') }}</p>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="fg-step-card">
                    <div class="fg-step-number">01</div>
                    <h3 class="fg-step-title">{{ __('pages.step1_title') }}</h3>
                    <p class="fg-step-text">{{ __('pages.step1_text') }}</p>
                </div>
                <div class="fg-step-card">
                    <div class="fg-step-number">02</div>
                    <h3 class="fg-step-title">{{ __('pages.step2_title') }}</h3>
                    <p class="fg-step-text">{{ __('pages.step2_text') }}</p>
                </div>
                <div class="fg-step-card">
                    <div class="fg-step-number">03</div>
                    <h3 class="fg-step-title">{{ __('pages.step3_title') }}</h3>
                    <p class="fg-step-text">{{ __('pages.step3_text') }}</p>
                </div>
                <div class="fg-step-card">
                    <div class="fg-step-number">04</div>
                    <h3 class="fg-step-title">{{ __('pages.step4_title') }}</h3>
                    <p class="fg-step-text">{{ __('pages.step4_text') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="why-favigen-section reveal">
        <div class="container pt-5">
            <div class="text-center mb-4">
                <p class="fg-why-subtitle">{{ __('pages.why_subtitle') }}</p>
                <h2 class="fg-why-title">{{ __('pages.why_title') }}</h2>
                <p class="fg-why-description">{{ __('pages.why_description') }}</p>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-3 reveal-stagger">
                <div class="fg-feature-card">
                    <div class="fg-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path>
                        </svg>
                    </div>
                    <h3 class="fg-feature-title">{{ __('pages.feature1_title') }}</h3>
                    <p class="fg-feature-text">{{ __('pages.feature1_text') }}</p>
                </div>
                <div class="fg-feature-card">
                    <div class="fg-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        </svg>
                    </div>
                    <h3 class="fg-feature-title">{{ __('pages.feature2_title') }}</h3>
                    <p class="fg-feature-text">{{ __('pages.feature2_text') }}</p>
                </div>
                <div class="fg-feature-card">
                    <div class="fg-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-palette w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M12 22a1 1 0 0 1 0-20 10 9 0 0 1 10 9 5 5 0 0 1-5 5h-2.25a1.75 1.75 0 0 0-1.4 2.8l.3.4a1.75 1.75 0 0 1-1.4 2.8z"></path>
                            <circle cx="13.5" cy="6.5" r=".5" fill="currentColor"></circle>
                            <circle cx="17.5" cy="10.5" r=".5" fill="currentColor"></circle>
                            <circle cx="6.5" cy="12.5" r=".5" fill="currentColor"></circle>
                            <circle cx="8.5" cy="7.5" r=".5" fill="currentColor"></circle>
                        </svg>
                    </div>
                    <h3 class="fg-feature-title">{{ __('pages.feature3_title') }}</h3>
                    <p class="fg-feature-text">{{ __('pages.feature3_text') }}</p>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="fg-feature-card">
                    <div class="fg-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M12 15V3"></path>
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <path d="m7 10 5 5 5-5"></path>
                        </svg>
                    </div>
                    <h3 class="fg-feature-title">{{ __('pages.feature4_title') }}</h3>
                    <p class="fg-feature-text">{{ __('pages.feature4_text') }}</p>
                </div>
                <div class="fg-feature-card">
                    <div class="fg-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                    </div>
                    <h3 class="fg-feature-title">{{ __('pages.feature5_title') }}</h3>
                    <p class="fg-feature-text">{{ __('pages.feature5_text') }}</p>
                </div>
                <div class="fg-feature-card">
                    <div class="fg-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-code w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="m16 18 6-6-6-6"></path>
                            <path d="m8 6-6 6 6 6"></path>
                        </svg>
                    </div>
                    <h3 class="fg-feature-title">{{ __('pages.feature6_title') }}</h3>
                    <p class="fg-feature-text">{{ __('pages.feature6_text') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="use-cases-section reveal">
        <div class="container pt-5">
            <div class="text-center mb-4">
                <p class="fg-use-subtitle">{{ __('pages.use_subtitle') }}</p>
                <h2 class="fg-use-title">{{ __('pages.use_title') }}</h2>
                <p class="fg-use-description">{{ __('pages.use_description') }}</p>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3 mb-3">
                <div class="fg-use-card">
                    <div class="fg-use-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <rect width="20" height="14" x="2" y="3" rx="2"></rect>
                            <line x1="8" x2="16" y1="21" y2="21"></line>
                            <line x1="12" x2="12" y1="17" y2="21"></line>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fg-use-title">{{ __('pages.use1_title') }}</h3>
                        <p class="fg-use-text">{{ __('pages.use1_text') }}</p>
                    </div>
                </div>
                <div class="fg-use-card">
                    <div class="fg-use-icon">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fg-use-title">{{ __('pages.use2_title') }}</h3>
                        <p class="fg-use-text">{{ __('pages.use2_text') }}</p>
                    </div>
                </div>
                <div class="fg-use-card">
                    <div class="fg-use-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-panels-top-left w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                            <path d="M3 9h18"></path>
                            <path d="M9 21V9"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fg-use-title">{{ __('pages.use3_title') }}</h3>
                        <p class="fg-use-text">{{ __('pages.use3_text') }}</p>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <div class="fg-use-card">
                    <div class="fg-use-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-image w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M6 22a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h8a2.4 2.4 0 0 1 1.704.706l3.588 3.588A2.4 2.4 0 0 1 20 8v12a2 2 0 0 1-2 2z"></path>
                            <path d="M14 2v5a1 1 0 0 0 1 1h5"></path>
                            <circle cx="10" cy="12" r="2"></circle>
                            <path d="m20 17-1.296-1.296a2.41 2.41 0 0 0-3.408 0L9 22"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fg-use-title">{{ __('pages.use4_title') }}</h3>
                        <p class="fg-use-text">{{ __('pages.use4_text') }}</p>
                    </div>
                </div>
                <div class="fg-use-card">
                    <div class="fg-use-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <path d="M16 3.128a4 4 0 0 1 0 7.744"></path>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fg-use-title">{{ __('pages.use5_title') }}</h3>
                        <p class="fg-use-text">{{ __('pages.use5_text') }}</p>
                    </div>
                </div>
                <div class="fg-use-card">
                    <div class="fg-use-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                            <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="fg-use-title">{{ __('pages.use6_title') }}</h3>
                        <p class="fg-use-text">{{ __('pages.use6_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section reveal">
        <div class="container pt-5">
            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-5">
                    <div class="fg-about-card">
                        <p class="fg-about-subtitle fw-bolder">{{ __('pages.about_subtitle') }}</p>
                        <h2 class="fg-about-title">{{ __('pages.about_title') }}</h2>
                        <p class="fg-about-text">
                            {{ __('pages.about_p1') }}
                        </p>
                        <p class="fg-about-text">
                            {{ __('pages.about_p2') }}
                        </p>
                        <p class="fg-about-text">
                            {{ __('pages.about_p3') }}
                        </p>
                        <div class="fg-about-list mt-4">
                            <div class="icon">
                                <div class="fg-about-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 flex-shrink-0 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <span>{{ __('pages.about_list1') }}</span>
                                </div>
                                <div class="fg-about-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 flex-shrink-0 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>{{ __('pages.about_list2') }}</span>
                                </div>
                                <div class="fg-about-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 flex-shrink-0 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>{{ __('pages.about_list3') }}</span>
                                </div>
                            </div>
                            <div class="icon2">
                                <div class="fg-about-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 flex-shrink-0 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>{{ __('pages.about_list4') }}</span>
                                </div>
                                <div class="fg-about-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 flex-shrink-0 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>{{ __('pages.about_list5') }}</span>
                                </div>
                                <div class="fg-about-list-item">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-3.5 h-3.5 flex-shrink-0 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg>
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg>
                                    <span>{{ __('pages.about_list6') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="fg-html-card">
                        <div class="fg-html-header">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#4f46e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star w-4 h-4 text-indigo-600 dark:text-indigo-400" aria-hidden="true">
                                <path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path>
                            </svg>
                            <span>{{ __('pages.html_header') }}</span>
                        </div>
                        <p class="fg-html-text fw-medium">
                            {{ __('pages.html_text') }} <code class="fg-code fw-semibold">&lt;head&gt;</code>:
                        </p>
                        <div class="fg-code-block">
                            <pre><code><span class="fg-code-tag">&lt link rel=</span> <span class="fg-code-value">"icon" <span class="fg-code-tag">size=</span></span> <span class="fg-code-value">"16x16"</span><br><span class="fg-code-tag">href</span>=<span>"/favicon-16x16.png"</span>&gt;
                            <span class="fg-code-tag">&lt link</span> <span class="fg-code-tag">rel</span>=<span class="fg-code-value">"icon" <span class="fg-code-tag">size=</span></span> <span class="fg-code-value">"32x32"</span><br><span class="fg-code-tag">href</span>=<span class="fg-code-value">"/favicon-32x32.png"</span>&gt;
                            <span class="fg-code-tag">&lt link</span> <span class="fg-code-tag">rel</span>=<span class="fg-code-value">"apple-touch-icon"</span><br><span class="fg-code-tag">href</span>=<span class="fg-code-value">"/favicon-180x180.png"</span>&gt;
                            <span class="fg-code-tag">&lt link</span> <span class="fg-code-tag">rel</span>=<span class="fg-code-value">"manifest"</span> <br> <span class="fg-code-tag">href</span>=<span class="fg-code-value">"/manifest.json"</span>&gt;</code></pre>
                        </div>

                        <p class="fg-html-note mt-3">
                            {{ __('pages.html_note') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="faq-section pt-5 reveal">
        <div class="container">
            <p class="simple-badge">{{ __('pages.faq_badge') }}</p>
            <h2 class="how-title-4">{{ __('pages.faq_title') }}</h2>
            <p class="how-subtitle-3">{{ __('pages.faq_subtitle') }}</p>
            <div class="faq-wrap">
                <div class="faq-item">
                    <div>
                        <p class="faq-question">{{ __('pages.faq_q1') }}</p>
                        <p class="faq-answer">{{ __('pages.faq_a1') }}</p>
                    </div>
                    <span class="faq-icon">+</span>
                </div>

                <div class="faq-item">
                    <div>
                        <p class="faq-question">{{ __('pages.faq_q2') }}</p>
                        <p class="faq-answer">{{ __('pages.faq_a2') }}</p>
                    </div>
                    <span class="faq-icon">+</span>
                </div>

                <div class="faq-item">
                    <div>
                        <p class="faq-question">{{ __('pages.faq_q3') }}</p>
                        <p class="faq-answer">{{ __('pages.faq_a3') }}</p>
                    </div>
                    <span class="faq-icon">+</span>
                </div>

                <div class="faq-item">
                    <div>
                        <p class="faq-question">{{ __('pages.faq_q4') }}</p>
                        <p class="faq-answer">{{ __('pages.faq_a4') }}</p>
                    </div>
                    <span class="faq-icon">+</span>
                </div>

                <div class="faq-item">
                    <div>
                        <p class="faq-question">{{ __('pages.faq_q5') }}</p>
                        <p class="faq-answer">{{ __('pages.faq_a5') }}
                        </p>
                    </div>
                    <span class="faq-icon">+</span>
                </div>

                <div class="faq-item">
                    <div>
                        <p class="faq-question">{{ __('pages.faq_q6') }}</p>
                        <p class="faq-answer">{{ __('pages.faq_a6') }}</p>
                    </div>
                    <span class="faq-icon">+</span>
                </div>

            </div>
        </div>
    </section>

    <section class="cta-section pt-5 pb-5">
        <div class="container extract">
            <div class="cta-box">
                <h2 class="cta-title">{{ __('pages.cta_title') }}</h2>
                <p class="cta-desc">{{ __('pages.cta_desc') }}</p>
                <a href="#" class="cta-btn rounded-4">{{ __('pages.cta_btn') }}</a>
            </div>
        </div>
    </section>
</div>


@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script>
    $(document).ready(function() {

        // ============================================
        // 1. SWATCH COLORS — paint the color dots
        // ============================================
        const swatchColors = {
            'swatch--white': { bg: '#ffffff', border: '#e2e8f0' },
            'swatch--black': { bg: '#000000' },
            'swatch--indigo': { bg: '#6366f1' },
            'swatch--pink': { bg: '#ec4899' },
            'swatch--emerald': { bg: '#10b981' },
            'swatch--amber': { bg: '#f59e0b' },
            'swatch--violet': { bg: '#8b5cf6' },
            'swatch--sky': { bg: '#0ea5e9' },
        };

        $('.swatch').each(function() {
            $(this).attr('class').split(' ').forEach(cls => {
                if (swatchColors[cls]) {
                    $(this).css('background', swatchColors[cls].bg);
                    if (swatchColors[cls].border) $(this).css('border-color', swatchColors[cls].border);
                }
            });
        });

        $('#textColorPreview').css('background', '#ffffff');
        $('#bgColorPreview').css('background', '#6366f1');


        // ============================================
        // 2. FONT SIZES — base sizes for each preview box
        // ============================================
        const baseFontSizes = {
            'favicon-preview--tab': 8,
            'favicon-preview--main': 48,
            'favicon-preview--16': 8,
            'favicon-preview--32': 14,
            'favicon-preview--48': 20,
            'favicon-preview--64': 28,
            'favicon-preview--128': 42,
        };

        function getVariantClass($el) {
            return Object.keys(baseFontSizes).find(cls => $el.hasClass(cls));
        }


        // ============================================
        // 3. SHAPE — apply border-radius to previews
        // ============================================
        function applyShape($el, shape) {
            if ($el.hasClass('favicon-preview--main')) {
                $el.css('border-radius', shape === 'circle' ? '50%' : shape === 'rounded' ? '20px' : '4px');
            } else if ($el.hasClass('favicon-preview--tab')) {
                $el.css('border-radius', shape === 'circle' ? '50%' : shape === 'rounded' ? '3px' : '0');
            } else {
                $el.css('border-radius', shape === 'circle' ? '50%' : shape === 'rounded' ? '20%' : '0');
            }
        }


        // ============================================
        // 4. STATE — track current mode and uploaded image
        // ============================================
        let uploadedImageData = null;
        let currentMode = 'text';
        let selectedEmoji = '😀';


        // ============================================
        // 5. UPDATE PREVIEW — main function that redraws
        //    all favicon preview boxes on every change
        // ============================================
        function updatePreview() {
            const shape = $('.shape-btn.active').data('shape');
            const bgColor = $('#bgColorInput').val();

            if (currentMode === 'image' && uploadedImageData) {
                // --- IMAGE MODE ---
                $('.favicon-preview').each(function() {
                    const $el = $(this);
                    $el.text('').addClass('has-image').css({
                        'background-image': `url(${uploadedImageData})`,
                        'background-size': 'contain',
                        'background-position': 'center',
                        'background-repeat': 'no-repeat',
                        'background-color': bgColor
                    });
                    applyShape($el, shape);
                });

            } else if (currentMode === 'emoji') {
                // --- EMOJI MODE ---
                $('.favicon-preview').each(function() {
                    const $el = $(this);
                    const variant = getVariantClass($el);
                    const baseSize = baseFontSizes[variant] || 14;
                    $el.removeClass('has-image').css('background-image', 'none')
                        .text(selectedEmoji)
                        .css({
                            background: bgColor,
                            'font-size': (baseSize * 1.3) + 'px',
                        });
                    applyShape($el, shape);
                });

            } else {
                // --- TEXT MODE ---
                const text = $('#textInput').val() || 'FG';
                const scale = parseInt($('#fontSizeRange').val()) / 61;
                const fontWeight = $('#fontWeightSelect').val();
                const textColor = $('#textColorInput').val();

                $('.favicon-preview').each(function() {
                    const $el = $(this);
                    const variant = getVariantClass($el);
                    const baseSize = baseFontSizes[variant] || 14;
                    $el.removeClass('has-image').css('background-image', 'none').text(text).css({
                        color: textColor,
                        background: bgColor,
                        'font-weight': fontWeight,
                        'font-size': (baseSize * scale) + 'px',
                    });
                    applyShape($el, shape);
                });
            }
        }

        updatePreview(); // run once on page load


        // ============================================
        // 6. TEXT MODE LISTENERS — update preview live
        // ============================================
        $('#textInput').on('input', updatePreview);

        $('#fontSizeRange').on('input', function() {
            $('#fontSizeValue').text($(this).val() + '%');
            updatePreview();
        });

        $('#fontWeightSelect').on('change', updatePreview);

        $('#textColorInput').on('input', function() {
            $('#textColorPreview').css('background', $(this).val());
            updatePreview();
        });

        $('#bgColorInput').on('input', function() {
            $('#bgColorPreview').css('background', $(this).val());
            updatePreview();
        });

        $('#textSwatches .swatch').on('click', function() {
            const color = $(this).data('color');
            $('#textColorInput').val(color);
            $('#textColorPreview').css('background', color);
            updatePreview();
        });

        $('#bgSwatches .swatch').on('click', function() {
            const color = $(this).data('color');
            $('#bgColorInput').val(color);
            $('#bgColorPreview').css('background', color);
            updatePreview();
        });


        // ============================================
        // 7. SHAPE BUTTONS — square / rounded / circle
        // ============================================
        $('.shape-btn').on('click', function() {
            $('.shape-btn').removeClass('active');
            $(this).addClass('active');
            updatePreview();
        });


        // ============================================
        // 8. IMAGE UPLOAD — click, drag & drop, remove
        // ============================================
        $('#imageUploadBox').on('click', function(e) {
            if ($(e.target).is('#removeImageBtn')) return;
            $('#imageFileInput').trigger('click');
        });

        $('#imageUploadBox')
            .on('dragover', function(e) {
                e.preventDefault();
                $(this).addClass('drag-over');
            })
            .on('dragleave', function(e) {
                e.preventDefault();
                $(this).removeClass('drag-over');
            })
            .on('drop', function(e) {
                e.preventDefault();
                $(this).removeClass('drag-over');
                const file = e.originalEvent.dataTransfer.files[0];
                if (file) handleImageFile(file);
            });

        $('#removeImageBtn').on('click', function(e) {
            e.stopPropagation();
            uploadedImageData = null;
            $('#imageFileInput').val('');
            $('#removeImageBtn').hide();
            currentMode = 'text';
            updatePreview();
        });

        $('#imageFileInput').on('change', function(e) {
            const file = e.target.files[0];
            if (file) handleImageFile(file);
        });

        // Validates the picked file, then auto-submits the upload form
        // immediately — no local preview, the real image only appears
        // once the API returns a URL (handled in section 11 below).
        function handleImageFile(file) {
            const validTypes = ['image/png', 'image/jpeg', 'image/svg+xml', 'image/gif', 'image/webp'];
            if (!validTypes.includes(file.type)) {
                alert('Please upload a PNG, JPG, SVG, GIF, or WebP image.');
                return;
            }
            $('#imageUploadForm').trigger('submit');
        }


        // ============================================
        // 9. EMOJI GRID — build the emoji picker
        // ============================================
        const emojiList = [
            '😀', '😁', '😂', '🤣', '😊', '😍', '🥰', '😘', '😎', '🤩',
            '🥳', '😇', '🙂', '😉', '😋', '🤔', '😴', '🤯', '🥶', '🥵',
            '👍', '👎', '👏', '🙌', '🤝', '💪', '✌️', '🤞', '👋', '🤙',
            '❤️', '🧡', '💛', '💚', '💙', '💜', '🖤', '🤍', '💯', '✨',
            '🔥', '⭐', '🌟', '💥', '💫', '🌈', '☀️', '🌙', '⚡', '❄️',
            '🚀', '🎉', '🎊', '🎁', '🏆', '🎯', '💡', '🔔', '📌', '🔑',
            '🐶', '🐱', '🦊', '🐼', '🦁', '🐸', '🐵', '🦄', '🐳', '🦋',
            '🍕', '🍔', '🍟', '🍩', '🍪', '☕', '🍎', '🍓', '🍉', '🥑',
        ];

        function renderEmojiGrid() {
            const $grid = $('#emojiGrid');
            $grid.empty();
            emojiList.forEach(emoji => {
                const $item = $('<div class="emoji-item"></div>').text(emoji).attr('data-emoji', emoji);
                if (emoji === selectedEmoji) $item.addClass('selected');
                $grid.append($item);
            });
        }
        renderEmojiGrid();

        $('#emojiGrid').on('click', '.emoji-item', function() {
            $('.emoji-item').removeClass('selected');
            $(this).addClass('selected');
            selectedEmoji = $(this).data('emoji');
            currentMode = 'emoji';
            updatePreview();
        });


        // ============================================
        // 10. TAB SWITCHING — Text / Emoji / Image
        // ============================================
        $('.tab-btn').on('click', function() {
            $('.tab-btn').removeClass('active');
            $(this).addClass('active');

            const tab = $(this).data('tab');

            $('#textInputSection, #imageInputSection, #emojiInputSection').hide();
            $('#textOnlySettings').hide();

            if (tab === 'image') {
                currentMode = 'image';
                $('#imageInputSection').show();
            } else if (tab === 'emoji') {
                currentMode = 'emoji';
                $('#emojiInputSection').show();
            } else {
                currentMode = 'text';
                $('#textInputSection').show();
                $('#textOnlySettings').show();
            }
            updatePreview();
        });


        // ============================================
        // 11. SERVER UPLOAD RESULT — runs after page reload
        //     following a successful image upload
        // ============================================
        if (window.serverUploadedImageUrl) {
            uploadedImageData = window.serverUploadedImageUrl;
            currentMode = 'image';

            $('.tab-btn').removeClass('active');
            $('.tab-btn[data-tab="image"]').addClass('active');
            $('#textInputSection, #imageInputSection, #emojiInputSection').hide();
            $('#textOnlySettings').hide();
            $('#imageInputSection').show();

            $('#previewUrlText').text(window.serverUploadedImageUrl).show();

            updatePreview();
        }


        // ============================================
        // 12. DOWNLOAD — render favicon to canvas, export
        //     as ZIP (all sizes) or a single PNG
        // ============================================
        const downloadSizes = [16, 32, 48, 64, 128, 180, 192, 512];

        function renderFaviconToBlob(size) {
            return new Promise((resolve) => {
                const canvas = document.createElement('canvas');
                canvas.width = size;
                canvas.height = size;
                const ctx = canvas.getContext('2d');

                const shape = $('.shape-btn.active').data('shape');
                const bgColor = $('#bgColorInput').val() || '#6366f1';

                function drawShapeClip() {
                    ctx.beginPath();
                    if (shape === 'circle') {
                        ctx.arc(size / 2, size / 2, size / 2, 0, Math.PI * 2);
                    } else if (shape === 'rounded') {
                        const r = size * 0.2;
                        ctx.moveTo(r, 0);
                        ctx.arcTo(size, 0, size, size, r);
                        ctx.arcTo(size, size, 0, size, r);
                        ctx.arcTo(0, size, 0, 0, r);
                        ctx.arcTo(0, 0, size, 0, r);
                    } else {
                        ctx.rect(0, 0, size, size);
                    }
                    ctx.closePath();
                    ctx.clip();
                }

                ctx.save();
                drawShapeClip();
                ctx.fillStyle = bgColor;
                ctx.fillRect(0, 0, size, size);

                if (currentMode === 'image' && uploadedImageData) {
                    const img = new Image();
                    img.crossOrigin = 'anonymous';
                    img.onload = function() {
                        const scale = Math.min(size / img.width, size / img.height);
                        const w = img.width * scale;
                        const h = img.height * scale;
                        ctx.drawImage(img, (size - w) / 2, (size - h) / 2, w, h);
                        ctx.restore();
                        canvas.toBlob((blob) => resolve(blob), 'image/png');
                    };
                    img.onerror = function() {
                        ctx.restore();
                        canvas.toBlob((blob) => resolve(blob), 'image/png');
                    };
                    img.src = uploadedImageData;
                } else {
                    const text = currentMode === 'emoji' ? selectedEmoji : ($('#textInput').val() || 'FG');
                    const textColor = currentMode === 'emoji' ? '#ffffff' : ($('#textColorInput').val() || '#ffffff');
                    const fontWeight = $('#fontWeightSelect').val() || '800';
                    ctx.fillStyle = textColor;
                    ctx.font = `${fontWeight} ${size * 0.5}px "Plus Jakarta Sans", sans-serif`;
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText(text, size / 2, size / 2);
                    ctx.restore();
                    canvas.toBlob((blob) => resolve(blob), 'image/png');
                }
            });
        }

        $('#downloadZipBtn').on('click', async function() {
            const $btn = $(this);
            $btn.prop('disabled', true).css('opacity', 0.6);

            try {
                const zip = new JSZip();
                for (const size of downloadSizes) {
                    const blob = await renderFaviconToBlob(size);
                    zip.file(`favicon-${size}x${size}.png`, blob);
                }
                const content = await zip.generateAsync({ type: 'blob' });
                const url = URL.createObjectURL(content);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'favicons.zip';
                document.body.appendChild(a);
                a.click();
                a.remove();
                URL.revokeObjectURL(url);
            } catch (err) {
                console.error('ZIP generation failed:', err);
                alert('Something went wrong generating the ZIP. Please try again.');
            } finally {
                $btn.prop('disabled', false).css('opacity', 1);
            }
        });

        $('#downloadOneBtn').on('click', async function() {
            const $btn = $(this);
            $btn.prop('disabled', true).css('opacity', 0.6);

            try {
                const blob = await renderFaviconToBlob(512);
                const url = URL.createObjectURL(blob);
                const a = document.createElement('a');
                a.href = url;
                a.download = 'favicon.png';
                document.body.appendChild(a);
                a.click();
                a.remove();
                URL.revokeObjectURL(url);
            } catch (err) {
                console.error('PNG generation failed:', err);
                alert('Something went wrong generating the PNG. Please try again.');
            } finally {
                $btn.prop('disabled', false).css('opacity', 1);
            }
        });
     
        // ============================================
        // 14. SCROLL REVEAL — fade+slide elements in
        //     as they enter the viewport
        // ============================================
        const $revealElements = $('.reveal, .reveal-stagger');

        if ('IntersectionObserver' in window && $revealElements.length) {
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        $(entry.target).addClass('reveal-visible');
                        observer.unobserve(entry.target); // animate once only
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: '0px 0px -50px 0px'
            });

            $revealElements.each(function() {
                revealObserver.observe(this);
            });
        } else {
            $revealElements.addClass('reveal-visible');
        }
    }); // END of main $(document).ready


    // ============================================
    // 13. FAQ ACCORDION — open/close questions
    // ============================================
    $(document).ready(function() {
        $('.faq-item').on('click', function() {
            const $this = $(this);
            const isActive = $this.hasClass('active');

            $('.faq-item').removeClass('active').find('.faq-answer').slideUp(250);
            $('.faq-icon').text('+');

            if (!isActive) {
                $this.addClass('active').find('.faq-answer').slideDown(250);
                $this.find('.faq-icon').text('×');
            }
        });
    });
</script>
@endpush