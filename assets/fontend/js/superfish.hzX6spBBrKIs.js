(function(n,y){var h=function(){var o={bcClass:"sf-breadcrumb",menuClass:"sf-js-enabled",anchorClass:"sf-with-ul",menuArrowClass:"sf-arrows"},u=function(){var e=/^(?![\w\W]*Windows Phone)[\w\W]*(iPhone|iPad|iPod)/i.test(navigator.userAgent);return e&&n("html").css("cursor","pointer").on("click",n.noop),e}(),g=function(){var e=document.documentElement.style;return"behavior"in e&&"fill"in e&&/iemobile/i.test(navigator.userAgent)}(),w=function(){return!!y.PointerEvent}(),p=function(e,s,t){var i=o.menuClass,r;s.cssArrows&&(i+=" "+o.menuArrowClass),r=t?"addClass":"removeClass",e[r](i)},S=function(e,s){return e.find("li."+s.pathClass).slice(0,s.pathLevels).addClass(s.hoverClass+" "+o.bcClass).filter(function(){return n(this).children(s.popUpSelector).hide().show().length}).removeClass(s.pathClass)},c=function(e,s){var t=s?"addClass":"removeClass";e.children("a")[t](o.anchorClass)},d=function(e){var s=e.css("ms-touch-action"),t=e.css("touch-action");t=t||s,t=t==="pan-y"?"auto":"pan-y",e.css({"ms-touch-action":t,"touch-action":t})},v=function(e){return e.closest("."+o.menuClass)},a=function(e){return v(e).data("sfOptions")},l=function(){var e=n(this),s=a(e);clearTimeout(s.sfTimer),e.siblings().superfish("hide").end().superfish("show")},C=function(e){e.retainPath=n.inArray(this[0],e.$path)>-1,this.superfish("hide"),this.parents("."+e.hoverClass).length||(e.onIdle.call(v(this)),e.$path.length&&n.proxy(l,e.$path)())},f=function(){var e=n(this),s=a(e);u?n.proxy(C,e,s)():(clearTimeout(s.sfTimer),s.sfTimer=setTimeout(n.proxy(C,e,s),s.delay))},T=function(e){var s=n(this),t=a(s),i=s.siblings(e.data.popUpSelector);if(t.onHandleTouch.call(i)===!1)return this;i.length>0&&i.is(":hidden")&&(s.one("click.superfish",!1),e.type==="MSPointerDown"||e.type==="pointerdown"?s.trigger("focus"):n.proxy(l,s.parent("li"))())},b=function(e,s){var t="li:has("+s.popUpSelector+")";n.fn.hoverIntent&&!s.disableHI?e.hoverIntent(l,f,t):e.on("mouseenter.superfish",t,l).on("mouseleave.superfish",t,f);var i="MSPointerDown.superfish";w&&(i="pointerdown.superfish"),u||(i+=" touchend.superfish"),g&&(i+=" mousedown.superfish"),e.on("focusin.superfish","li",l).on("focusout.superfish","li",f).on(i,"a",s,T)};return{hide:function(e){if(this.length){var s=this,t=a(s);if(!t)return this;var i=t.retainPath===!0?t.$path:"",r=s.find("li."+t.hoverClass).add(this).not(i).removeClass(t.hoverClass).children(t.popUpSelector),m=t.speedOut;if(e&&(r.show(),m=0),t.retainPath=!1,t.onBeforeHide.call(r)===!1)return this;r.stop(!0,!0).animate(t.animationOut,m,function(){var P=n(this);t.onHide.call(P)})}return this},show:function(){var e=a(this);if(!e)return this;var s=this.addClass(e.hoverClass),t=s.children(e.popUpSelector);return e.onBeforeShow.call(t)===!1?this:(t.stop(!0,!0).animate(e.animation,e.speed,function(){e.onShow.call(t)}),this)},destroy:function(){return this.each(function(){var e=n(this),s=e.data("sfOptions"),t;if(!s)return!1;t=e.find(s.popUpSelector).parent("li"),clearTimeout(s.sfTimer),p(e,s),c(t),d(e),e.off(".superfish").off(".hoverIntent"),t.children(s.popUpSelector).attr("style",function(i,r){if(typeof r!="undefined")return r.replace(/display[^;]+;?/g,"")}),s.$path.removeClass(s.hoverClass+" "+o.bcClass).addClass(s.pathClass),e.find("."+s.hoverClass).removeClass(s.hoverClass),s.onDestroy.call(e),e.removeData("sfOptions")})},init:function(e){return this.each(function(){var s=n(this);if(s.data("sfOptions"))return!1;var t=n.extend({},n.fn.superfish.defaults,e),i=s.find(t.popUpSelector).parent("li");t.$path=S(s,t),s.data("sfOptions",t),p(s,t,!0),c(i,!0),d(s),b(s,t),i.not("."+o.bcClass).superfish("hide",!0),t.onInit.call(this)})}}}();n.fn.superfish=function(o,u){return h[o]?h[o].apply(this,Array.prototype.slice.call(arguments,1)):typeof o=="object"||!o?h.init.apply(this,arguments):n.error("Method "+o+" does not exist on jQuery.fn.superfish")},n.fn.superfish.defaults={popUpSelector:"ul,.sf-mega",hoverClass:"sfHover",pathClass:"overrideThisToUse",pathLevels:1,delay:800,animation:{opacity:"show"},animationOut:{opacity:"hide"},speed:"normal",speedOut:"fast",cssArrows:!0,disableHI:!1,onInit:n.noop,onBeforeShow:n.noop,onShow:n.noop,onBeforeHide:n.noop,onHide:n.noop,onIdle:n.noop,onDestroy:n.noop,onHandleTouch:n.noop}})(jQuery,window);