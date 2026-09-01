function googleTranslateElementInit() {
    // Note: InlineLayout.SIMPLE never renders a real <select class="goog-te-combo">,
    // only a link that opens a cross-origin popup we cannot script. Default layout
    // renders the scriptable select we need, so no "layout" option is passed here.
    new google.translate.TranslateElement({
        pageLanguage: "en",
        includedLanguages: "en,mr",
        autoDisplay: false
    }, "google_translate_element");
}

(function ($) {
    "use strict";

    function setLanguage(language, attempts) {
        var translateSelect = document.querySelector(".goog-te-combo");

        if (!translateSelect) {
            if (attempts < 20) {
                window.setTimeout(function () {
                    setLanguage(language, attempts + 1);
                }, 250);
            }
            return;
        }

        translateSelect.value = language === "en" ? "" : language;

        if (typeof translateSelect.onchange === "function") {
            translateSelect.onchange();
            return;
        }

        var changeEvent = document.createEvent("HTMLEvents");
        changeEvent.initEvent("change", true, true);
        translateSelect.dispatchEvent(changeEvent);
    }

    function updateToggle(isMarathi) {
        var $toggle = $("#language-toggle");

        $toggle.toggleClass("is-marathi", isMarathi);
        $toggle.attr("aria-pressed", String(isMarathi));
        $toggle.attr("aria-label", isMarathi ? "Switch language to English" : "Switch language to Marathi");
    }

    $(function () {
        var $toggle = $("#language-toggle");
        var isMarathi = document.cookie.indexOf("googtrans=/en/mr") !== -1;

        updateToggle(isMarathi);

        $toggle.on("click", function () {
            isMarathi = !isMarathi;
            setLanguage(isMarathi ? "mr" : "en", 0);
            updateToggle(isMarathi);
        });
    });
})(jQuery);
