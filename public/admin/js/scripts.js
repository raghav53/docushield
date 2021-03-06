function loadStyle(e, t) {



    for (var o = 0; o < document.styleSheets.length; o++)
        if (document.styleSheets[o].href == e) return;
    var a = document.getElementsByTagName("head")[0],
        r = document.createElement("link");
    (r.rel = "stylesheet"),
        (r.type = "text/css"),
        (r.href = e),
        t &&
            (r.onload = function () {
                t();
            });
    var l = $(a).find('[href$="main.css"]');
    0 !== l.length ? l[0].before(r) : a.appendChild(r);
}
!(function (e) {
    e().dropzone && (Dropzone.autoDiscover = !1);
    e("body").append(
        '<div class="theme-colors"><div class="p-4"><p class="text-muted mb-2">Light Theme</p><div class="d-flex flex-row justify-content-between mb-4"><a href="#" data-theme="dore.light.blue.min.css" class="theme-color theme-color-blue"></a><a href="#" data-theme="dore.light.purple.min.css" class="theme-color theme-color-purple"></a><a href="#" data-theme="dore.light.green.min.css" class="theme-color theme-color-green"></a><a href="#" data-theme="dore.light.orange.min.css" class="theme-color theme-color-orange"></a><a href="#" data-theme="dore.light.red.min.css" class="theme-color theme-color-red"></a></div><p class="text-muted mb-2">Dark Theme</p><div class="d-flex flex-row justify-content-between"><a href="#" data-theme="dore.dark.blue.min.css" class="theme-color theme-color-blue"></a><a href="#" data-theme="dore.dark.purple.min.css" class="theme-color theme-color-purple"></a><a href="#" data-theme="dore.dark.green.min.css" class="theme-color theme-color-green"></a><a href="#" data-theme="dore.dark.orange.min.css" class="theme-color theme-color-orange"></a><a href="#" data-theme="dore.dark.red.min.css" class="theme-color theme-color-red"></a></div></div><div class="p-4"><p class="text-muted mb-2">Border Radius</p><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="roundedRadio" name="radiusRadio" class="custom-control-input radius-radio" data-radius="rounded"><label class="custom-control-label" for="roundedRadio">Rounded</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="flatRadio" name="radiusRadio" class="custom-control-input radius-radio" data-radius="flat"><label class="custom-control-label" for="flatRadio">Flat</label></div></div><div class="p-4"><p class="text-muted mb-2">Direction</p><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="ltrRadio" name="directionRadio" class="custom-control-input direction-radio" data-direction="ltr"><label class="custom-control-label" for="ltrRadio">Ltr</label></div><div class="custom-control custom-radio custom-control-inline"><input type="radio" id="rtlRadio" name="directionRadio" class="custom-control-input direction-radio" data-direction="rtl"><label class="custom-control-label" for="rtlRadio">Rtl</label></div></div><a href="#" class="theme-button"> <i class="simple-icon-magic-wand"></i> </a></div>'
    );
    var t = "dore.light.blue.min.css",
        o = "ltr",
        a = "rounded";
    function r() {
     
        e("body").addClass(o),
            e("html").attr("dir", o),
            e("body").addClass(a),
            e("body").dore();
    }
    var url =   window.location.href;
    var arr =   url.split('/');
    if(arr.length == 6){
        var href_s = "../public/admin/css/";
    }else if(arr.length == 7){
        var href_s = "../../public/admin/css/";
    }else{
        var href_s = "../../../public/admin/css/";
    }
    "undefined" != typeof Storage &&
        (localStorage.getItem("dore-theme")
            ? (t = localStorage.getItem("dore-theme"))
            : localStorage.setItem("dore-theme", t),
        localStorage.getItem("dore-direction")
            ? (o = localStorage.getItem("dore-direction"))
            : localStorage.setItem("dore-direction", o),
        localStorage.getItem("dore-radius")
            ? (a = localStorage.getItem("dore-radius"))
            : localStorage.setItem("dore-radius", a)),
        e(".theme-color[data-theme='" + t + "']").addClass("active"),
        e(".direction-radio[data-direction='" + o + "']").attr("checked", !0),
        e(".radius-radio[data-radius='" + a + "']").attr("checked", !0),
        e("#switchDark").attr("checked", t.indexOf("dark") > 0),
    
        loadStyle(""+href_s+"" + t, function () {
            setTimeout(r, 300);
        }),
        // loadStyle("../admin/css//" + t, function () {
        //     setTimeout(r, 300);
        // }),
        e("body").on("click", ".theme-color", function (t) {
            t.preventDefault();
            var o = e(this).data("theme");
            "undefined" != typeof Storage &&
                (localStorage.setItem("dore-theme", o),
                window.location.reload());
        }),
        e("input[name='directionRadio']").on("change", function (t) {
            var o = e(t.currentTarget).data("direction");
            "undefined" != typeof Storage &&
                (localStorage.setItem("dore-direction", o),
                window.location.reload());
        }),
        e("input[name='radiusRadio']").on("change", function (t) {
            var o = e(t.currentTarget).data("radius");
            "undefined" != typeof Storage &&
                (localStorage.setItem("dore-radius", o),
                window.location.reload());
        }),
        e("#switchDark").on("change", function (o) {
            var a = e(o.currentTarget)[0].checked ? "dark" : "light";
            "dark" == a
                ? (t = t.replace("light", "dark"))
                : "light" == a && (t = t.replace("dark", "light")),
                "undefined" != typeof Storage &&
                    (localStorage.setItem("dore-theme", t),
                    window.location.reload());
        }),
        e(".theme-button").on("click", function (t) {
            t.preventDefault(),
                e(this).parents(".theme-colors").toggleClass("shown");
        }),
        e(document).on("click", function (t) {
            e(t.target).parents().hasClass("theme-colors") ||
                e(t.target).parents().hasClass("theme-button") ||
                e(t.target).hasClass("theme-button") ||
                e(t.target).hasClass("theme-colors") ||
                (e(".theme-colors").hasClass("shown") &&
                    e(".theme-colors").removeClass("shown"));
        });
})(jQuery);
