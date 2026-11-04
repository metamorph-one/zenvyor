<div id="cookieBanner" class="cookie-banner" role="dialog" aria-live="polite" aria-label="Consentimento de cookies" hidden>
    <div class="cb-inner">
        <p class="cb-text">Utilizamos cookies para melhorar a sua experiência no nosso site. Ao continuar, aceita a nossa <a href="/politica-de-cookies-ue">Política de Cookies</a>.</p>
        <div class="cb-actions">
            <button type="button" class="cb-btn cb-accept" data-consent="all">Aceitar</button>
            <button type="button" class="cb-btn cb-deny" data-consent="functional">Negar</button>
            <button type="button" class="cb-btn cb-prefs" id="cbOpenPrefs">Preferências</button>
        </div>
    </div>
</div>

<div id="cookiePrefs" class="cookie-prefs" role="dialog" aria-label="Preferências de cookies" hidden>
    <div class="cp-overlay" id="cpOverlay"></div>
    <div class="cp-modal">
        <div class="cp-header">
            <h3>Preferências de Cookies</h3>
            <button type="button" class="cp-close" id="cpClose" aria-label="Fechar">&times;</button>
        </div>
        <div class="cp-body">
            <div class="cp-row">
                <div class="cp-row-text">
                    <strong>Funcional</strong>
                    <p>Necessários para o funcionamento do site. Sempre ativos.</p>
                </div>
                <label class="cp-switch">
                    <input type="checkbox" checked disabled>
                    <span class="cp-slider"></span>
                </label>
            </div>
            <div class="cp-row">
                <div class="cp-row-text">
                    <strong>Marketing</strong>
                    <p>Google Ads — medição de conversões e remarketing.</p>
                </div>
                <label class="cp-switch">
                    <input type="checkbox" id="cpMarketing">
                    <span class="cp-slider"></span>
                </label>
            </div>
            <p class="cp-note">Consulte a <a href="/politica-de-cookies-ue">Política de Cookies</a> para mais detalhes.</p>
        </div>
        <div class="cp-footer">
            <button type="button" class="cb-btn cb-deny" id="cpDenyAll">Negar Tudo</button>
            <button type="button" class="cb-btn cb-save" id="cpSave">Guardar Preferências</button>
            <button type="button" class="cb-btn cb-accept" id="cpAcceptAll">Aceitar Tudo</button>
        </div>
    </div>
</div>

<button type="button" id="cookieRevoke" class="cookie-revoke" hidden>Gerir Cookies</button>

<script>
    (function () {
        var banner = document.getElementById('cookieBanner');
        var prefs = document.getElementById('cookiePrefs');
        var revoke = document.getElementById('cookieRevoke');
        var marketing = document.getElementById('cpMarketing');

        function current() { return localStorage.getItem('zenvyor_consent'); }
        function loadGtag() {
            if (window.__gtagLoaded) return;
            window.__gtagLoaded = true;
            var s = document.createElement('script');
            s.async = true;
            s.src = 'https://www.googletagmanager.com/gtag/js?id=AW-17102141885';
            document.head.appendChild(s);
            gtag('js', new Date());
            gtag('config', 'AW-17102141885');
        }
        function applyConsent(c) {
            localStorage.setItem('zenvyor_consent', c);
            gtag('consent', 'update', c === 'all'
                ? { ad_storage: 'granted', analytics_storage: 'granted' }
                : { ad_storage: 'denied', analytics_storage: 'denied' });
            if (c === 'all') loadGtag();
            marketing.checked = (c === 'all');
            revoke.hidden = false;
            banner.hidden = true;
            prefs.hidden = true;
        }

        if (!current()) {
            banner.hidden = false;
        } else {
            marketing.checked = (current() === 'all');
            revoke.hidden = false;
        }

        banner.querySelectorAll('[data-consent]').forEach(function (btn) {
            btn.addEventListener('click', function () { applyConsent(btn.getAttribute('data-consent')); });
        });

        document.getElementById('cbOpenPrefs').addEventListener('click', function () { prefs.hidden = false; });
        document.getElementById('cpClose').addEventListener('click', function () { prefs.hidden = true; });
        document.getElementById('cpOverlay').addEventListener('click', function () { prefs.hidden = true; });
        document.getElementById('cpAcceptAll').addEventListener('click', function () { applyConsent('all'); });
        document.getElementById('cpDenyAll').addEventListener('click', function () { applyConsent('functional'); });
        document.getElementById('cpSave').addEventListener('click', function () { applyConsent(marketing.checked ? 'all' : 'functional'); });
        revoke.addEventListener('click', function () {
            marketing.checked = (current() === 'all');
            prefs.hidden = false;
        });
    })();
</script>
