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

    function updateToggle(isMarathi) {
        var $toggle = $("#language-toggle");

        $toggle.toggleClass("is-marathi", isMarathi);
        $toggle.attr("aria-pressed", String(isMarathi));
        $toggle.attr("aria-label", isMarathi ? "Switch language to English" : "Switch language to Marathi");
    }

    $(function () {
        var $toggle = $("#language-toggle");
        var $translator = $("#google_translate_element");
        var isMarathi = document.cookie.indexOf("googtrans=/en/mr") !== -1;

        updateToggle(isMarathi);

        function positionTranslator() {
            var button = $toggle[0];
            var panel = $translator[0];
            var buttonRect = button.getBoundingClientRect();
            var panelWidth = panel.offsetWidth;
            var left = Math.min(buttonRect.left, window.innerWidth - panelWidth - 12);

            panel.style.top = (buttonRect.bottom + 8) + "px";
            panel.style.left = Math.max(12, left) + "px";
        }

        function closeTranslator() {
            $translator.removeClass("is-open").attr("aria-hidden", "true");
            $toggle.attr("aria-expanded", "false");
        }

        $toggle.on("click", function () {
            if ($translator.hasClass("is-open")) {
                closeTranslator();
                return;
            }

            $translator.addClass("is-open").attr("aria-hidden", "false");
            $toggle.attr("aria-expanded", "true");
            positionTranslator();
        });

        $(document).on("click", function (event) {
            if (!$(event.target).closest("#language-toggle, #google_translate_element").length) {
                closeTranslator();
            }
        });

        $(document).on("keydown", function (event) {
            if (event.key === "Escape") {
                closeTranslator();
            }
        });

        $(window).on("resize scroll", function () {
            if ($translator.hasClass("is-open")) {
                positionTranslator();
            }
        });

        $translator.on("change", ".goog-te-combo", function () {
            isMarathi = this.value === "mr";
            updateToggle(isMarathi);
            closeTranslator();
        });
    });
})(jQuery);
