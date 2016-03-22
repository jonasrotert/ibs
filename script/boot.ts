import {Slider} from "./slider/Slider";
import {DialogController} from "./dialog/DialogController";
import {NavigationController} from "./nav/NavigationController";

var slider:Slider = new Slider();
var dialogController:DialogController = new DialogController();
var navigationController:NavigationController = new NavigationController();

// Twitter
!function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
    if (!d.getElementById(id)) {
        js = d.createElement(s);
        js.id = id;
        js.src = p + "://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
    }
}(document, "script", "twitter-wjs");

function init_ga() {
// Google Analytics
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-73599031-1', 'auto');
    ga('send', 'pageview');
}

init_ga();

var kjo_link = document.querySelector("div.kjo-link");
if (kjo_link) kjo_link.remove();