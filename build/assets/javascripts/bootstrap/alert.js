+function($){"use strict";function t(t){return this.each(function(){var e=$(this),r=e.data("bs.alert");r||e.data("bs.alert",r=new a(this)),"string"==typeof t&&r[t].call(e)})}var e='[data-dismiss="alert"]',a=function(t){$(t).on("click",e,this.close)};a.VERSION="3.3.7",a.TRANSITION_DURATION=150,a.prototype.close=function(t){function e(){s.detach().trigger("closed.bs.alert").remove()}var r=$(this),n=r.attr("data-target");n||(n=r.attr("href"),n=n&&n.replace(/.*(?=#[^\s]*$)/,""));var s=$("#"===n?[]:n);t&&t.preventDefault(),s.length||(s=r.closest(".alert")),s.trigger(t=$.Event("close.bs.alert")),t.isDefaultPrevented()||(s.removeClass("in"),$.support.transition&&s.hasClass("fade")?s.one("bsTransitionEnd",e).emulateTransitionEnd(a.TRANSITION_DURATION):e())};var r=$.fn.alert;$.fn.alert=t,$.fn.alert.Constructor=a,$.fn.alert.noConflict=function(){return $.fn.alert=r,this},$(document).on("click.bs.alert.data-api",e,a.prototype.close)}(jQuery);
//# sourceMappingURL=./alert.js.map