+function($){"use strict";function t(s,e){this.$body=$(document.body),this.$scrollElement=$($(s).is(document.body)?window:s),this.options=$.extend({},t.DEFAULTS,e),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",$.proxy(this.process,this)),this.refresh(),this.process()}function s(s){return this.each(function(){var e=$(this),i=e.data("bs.scrollspy"),o="object"==typeof s&&s;i||e.data("bs.scrollspy",i=new t(this,o)),"string"==typeof s&&i[s]()})}t.VERSION="3.3.7",t.DEFAULTS={offset:10},t.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},t.prototype.refresh=function(){var t=this,s="offset",e=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),$.isWindow(this.$scrollElement[0])||(s="position",e=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var t=$(this),i=t.data("target")||t.attr("href"),o=/^#./.test(i)&&$(i);return o&&o.length&&o.is(":visible")&&[[o[s]().top+e,i]]||null}).sort(function(t,s){return t[0]-s[0]}).each(function(){t.offsets.push(this[0]),t.targets.push(this[1])})},t.prototype.process=function(){var t=this.$scrollElement.scrollTop()+this.options.offset,s=this.getScrollHeight(),e=this.options.offset+s-this.$scrollElement.height(),i=this.offsets,o=this.targets,r=this.activeTarget,l;if(this.scrollHeight!=s&&this.refresh(),t>=e)return r!=(l=o[o.length-1])&&this.activate(l);if(r&&t<i[0])return this.activeTarget=null,this.clear();for(l=i.length;l--;)r!=o[l]&&t>=i[l]&&(void 0===i[l+1]||t<i[l+1])&&this.activate(o[l])},t.prototype.activate=function(t){this.activeTarget=t,this.clear();var s=this.selector+'[data-target="'+t+'"],'+this.selector+'[href="'+t+'"]',e=$(s).parents("li").addClass("active");e.parent(".dropdown-menu").length&&(e=e.closest("li.dropdown").addClass("active")),e.trigger("activate.bs.scrollspy")},t.prototype.clear=function(){$(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var e=$.fn.scrollspy;$.fn.scrollspy=s,$.fn.scrollspy.Constructor=t,$.fn.scrollspy.noConflict=function(){return $.fn.scrollspy=e,this},$(window).on("load.bs.scrollspy.data-api",function(){$('[data-spy="scroll"]').each(function(){var t=$(this);s.call(t,t.data())})})}(jQuery);
//# sourceMappingURL=./scrollspy.js.map