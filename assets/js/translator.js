function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: "en",
        includedLanguages: "en,mr",
        autoDisplay: false,
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
    }, "google_translate_element");
}

(function ($) {
    "use strict";

    $(function () {
        var $translator = $("#language-translator");
        var $button = $translator.find(".language-translator__button");
        var $panel = $("#language-translator-panel");

        $button.on("click", function () {
            var isOpen = $button.attr("aria-expanded") === "true";

            $button.attr("aria-expanded", String(!isOpen));
            $panel.prop("hidden", isOpen);
        });

        $(document).on("click", function (event) {
            if (!$translator.is(event.target) && !$translator.has(event.target).length) {
                $button.attr("aria-expanded", "false");
                $panel.prop("hidden", true);
            }
        });
    });
})(jQuery);
