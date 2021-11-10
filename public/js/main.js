jQuery(function () {
    // Preloader
    $(window).on("load", function () {
        if ($("#preloader").length) {
            $("#preloader")
                .delay(100)
                .fadeOut("slow", function () {
                    $(this).remove();
                });
        }
    });

    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $("#myBtn").fadeIn("slow");
        } else {
            $("#myBtn").fadeOut("slow");
        }
    });

    $("#myBtn").click(function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            1500,
            "swing"
        );
        return false;
    });
});
