$(document).ready(function() {
    "use strict";
    function a(a, c, d) {
        var e = $("section").width(), f = e - 30, g = Math.round(f / d), h = $(c), i = "width: " + parseInt(f) + "px; height: " + parseInt(g) + "px;";
        h.attr("style", i), b(a, f, g);
    }
    function b(a, b, c) {
        function d(a) {
            i += k * a * -1;
            var b = f + "transform: translateZ(-" + l + "px) rotateY(" + i + "deg)";
            console.log(b), e.attr("style", b);
        }
        var e = $(a), f = "-webkit-", g = e.children(), h = g.length, i = 0, j = 0, k = 360 / h, l = Math.round(b / 2 / Math.tan(2 * Math.PI / h / 2));
        console.log("Carousel: " + a + " --- panelCount: " + h + " --- panelWidth: " + b + "px --- translateZ: " + l + " --- Angle: " + k);
        var m = f + "transform: translateZ(-" + l + "px);";
        m += " transform: translateZ(-" + l + "px);", e.attr("style", m), g.each(function() {
            var a = f + "transform: rotateY(" + j + "deg) translateZ(" + l + "px); width: " + b + "px; height: " + c + "px; line-height: " + c + "px; ";
            a += "transform: rotateY(" + j + "deg) translateZ(" + l + "px)", $(this).attr("style", a), 
            j += k;
        }), $("#previous").on("click", function() {
            d(1);
        }), $("#next").on("click", function() {
            d(-1);
        }), e.swipe({
            swipe: function(a, b, c) {
                "left" === b && c > 100 ? d(1) : "right" === b && c > 100 && d(-1);
            },
            fingers: "all"
        });
    }
    $(window).on("resize orientationchange", function(b) {
        console.log(b), a("#carousel", "div.carousel-container", "1.5");
    }), a("#carousel", "div.carousel-container", "1.5");
}), $(document).ready(function() {
    "use strict";
    function a() {
        var a = $(window).height(), b = "height: " + a + "px;";
        $("#navigation").attr("style", b);
    }
    var b = {
        el: {
            ham: $(".menu-hekkens"),
            menuTop: $(".menu-hekkens-top"),
            menuMiddle: $(".menu-hekkens-middle"),
            menuBottom: $(".menu-hekkens-bottom")
        },
        init: function() {
            b.bindUIactions();
        },
        bindUIactions: function() {
            b.el.ham.on("click", function(c) {
                b.activateMenu(c), c.preventDefault(), a(), $("#navigation").toggleClass("closed"), 
                "MENU" === $(".menu-hekkens-text").text() ? ($(".menu-hekkens-text").text("CLOSE"), 
                $("#navigation").fadeIn("800", function() {
                    console.log("Animated.");
                })) : ($(".menu-hekkens-text").text("MENU"), $("#navigation").fadeOut("800", function() {
                    $("#navigation").hide(), console.log("Animated and Hidden");
                }));
            });
        },
        activateMenu: function() {
            b.el.menuTop.toggleClass("menu-hekkens-top-click"), b.el.menuMiddle.toggleClass("menu-hekkens-middle-click"), 
            b.el.menuBottom.toggleClass("menu-hekkens-bottom-click");
        }
    };
    b.init();
}), $(document).ready(function() {
    "use strict";
}), $(document).ready(function() {
    "use strict";
    function a(a, b) {
        var c;
        return function() {
            function d() {
                a(), c = null;
            }
            c && clearTimeout(c), c = setTimeout(d, b || 100);
        };
    }
    if ($("work-archive").length) {
        var b, c = $("#work-archive .isotope-container").isotope({
            filter: function() {
                return b ? $(this).text().match(b) : !0;
            }
        }), d = $("#quicksearch").keyup(a(function() {
            b = new RegExp(d.val(), "gi"), c.isotope();
        }, 200)), e = [];
        $(".filter-group").on("click", "button", function() {
            var a = $(this), b = a.parents(".button-group"), d = b.attr("data-filter-group");
            e[d] = a.attr("data-filter");
            var f = "";
            for (var g in e) g && (f += e[g]);
            c.isotope({
                filter: f
            });
        }), $("#work-archive .row-filter button").on("click", function(a) {
            a.preventDefault();
            var b = $(this).attr("href");
            console.log(b), $("#work-archive").removeClass("one"), $("#work-archive").removeClass("two"), 
            $("#work-archive").removeClass("three"), $("#work-archive").addClass(b), c.isotope("layout");
        });
    }
});
//# sourceMappingURL=hekkens.map