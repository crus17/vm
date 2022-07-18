"use strict";!function(t,e){function i(t,e,i){var n;return function(){var a=this,o=arguments,s=function(){n=null,i||t.apply(a,o)},r=i&&!n;clearTimeout(n),n=setTimeout(s,e),r&&t.apply(a,o)}}function n(e,i){var n=e.find(".hajs-gallery-filter");n.length&&n.on("click","button",function(e){e.stopPropagation();var n=t(this);n.parent().addClass("ha-filter-active").siblings().removeClass("ha-filter-active"),i(n.data("filter"))})}function a(e,i,n,a){if(t.fn.magnificPopup){if(!n)return void t.magnificPopup.close();e.on("click",i,function(t){t.stopPropagation()}),e.find(i).magnificPopup({key:a,type:"image",image:{titleSrc:function(t){return t.el.attr("title")?t.el.attr("title"):t.el.find("img").attr("alt")}},gallery:{enabled:!0,preload:[1,2]},zoom:{enabled:!0,duration:300,easing:"ease-in-out",opener:function(t){return t.is("img")?t:t.find("img")}}})}}var o=t(e);t.fn.getHappySettings=function(){return this.data("happy-settings")};var s=function(t){var e=t.find(".hajs-image-comparison"),i=e.getHappySettings();i[{on_hover:"move_slider_on_hover",on_swipe:"move_with_handle_only",on_click:"click_to_move"}[i.move_handle||"on_swipe"]]=!0,delete i.move_handle,e.imagesLoaded().done(function(){e.twentytwenty(i);var t=setTimeout(function(){o.trigger("resize.twentytwenty"),clearTimeout(t)},400)})},r=function(e){var i=e.find(".hajs-justified-gallery"),o=i.getHappySettings(),s=o.enable_popup;i.justifiedGallery(t.extend({},{rowHeight:150,lastRow:"justify",margins:10},o)),a(e,".ha-js-popup",s,"justifiedgallery"),n(e,function(t){i.justifiedGallery({lastRow:"*"===t?o.lastRow:"nojustify",filter:t}),a(e,"*"!==t?t:".ha-js-popup",s,"justifiedgallery")})};o.on("elementor/frontend/init",function(){var e=elementorFrontend,o=elementorModules,l=o.frontend.handlers.Base.extend({onInit:function(){o.frontend.handlers.Base.prototype.onInit.apply(this,arguments),this.widgetContainer=this.$element.find(".elementor-widget-container")[0],this.initFloatingEffects(),this.initBackgroundOverlay()},initBackgroundOverlay:function(){this.isEdit&&this.$element.addClass("ha-has-background-overlay")},getDefaultSettings:function(){return{targets:this.widgetContainer,loop:!0,direction:"alternate",easing:"easeInOutSine"}},onElementChange:function(t){-1!==t.indexOf("ha_floating")&&this.runOnElementChange()},runOnElementChange:i(function(){this.animation&&this.animation.restart(),this.initFloatingEffects()},200),getConfig:function(t){return this.getElementSettings("ha_floating_fx_"+t)},initFloatingEffects:function(){var t=this.getDefaultSettings();this.getConfig("translate_toggle")&&((this.getConfig("translate_x.size")||this.getConfig("translate_x.sizes.to"))&&(t.translateX={value:[this.getConfig("translate_x.sizes.from")||0,this.getConfig("translate_x.size")||this.getConfig("translate_x.sizes.to")],duration:this.getConfig("translate_duration.size"),delay:this.getConfig("translate_delay.size")||0}),(this.getConfig("translate_y.size")||this.getConfig("translate_y.sizes.to"))&&(t.translateY={value:[this.getConfig("translate_y.sizes.from")||0,this.getConfig("translate_y.size")||this.getConfig("translate_y.sizes.to")],duration:this.getConfig("translate_duration.size"),delay:this.getConfig("translate_delay.size")||0})),this.getConfig("rotate_toggle")&&((this.getConfig("rotate_x.size")||this.getConfig("rotate_x.sizes.to"))&&(t.rotateX={value:[this.getConfig("rotate_x.sizes.from")||0,this.getConfig("rotate_x.size")||this.getConfig("rotate_x.sizes.to")],duration:this.getConfig("rotate_duration.size"),delay:this.getConfig("rotate_delay.size")||0}),(this.getConfig("rotate_y.size")||this.getConfig("rotate_y.sizes.to"))&&(t.rotateY={value:[this.getConfig("rotate_y.sizes.from")||0,this.getConfig("rotate_y.size")||this.getConfig("rotate_y.sizes.to")],duration:this.getConfig("rotate_duration.size"),delay:this.getConfig("rotate_delay.size")||0}),(this.getConfig("rotate_z.size")||this.getConfig("rotate_z.sizes.to"))&&(t.rotateZ={value:[this.getConfig("rotate_z.sizes.from")||0,this.getConfig("rotate_z.size")||this.getConfig("rotate_z.sizes.to")],duration:this.getConfig("rotate_duration.size"),delay:this.getConfig("rotate_delay.size")||0})),this.getConfig("scale_toggle")&&((this.getConfig("scale_x.size")||this.getConfig("scale_x.sizes.to"))&&(t.scaleX={value:[this.getConfig("scale_x.sizes.from")||0,this.getConfig("scale_x.size")||this.getConfig("scale_x.sizes.to")],duration:this.getConfig("scale_duration.size"),delay:this.getConfig("scale_delay.size")||0}),(this.getConfig("scale_y.size")||this.getConfig("scale_y.sizes.to"))&&(t.scaleY={value:[this.getConfig("scale_y.sizes.from")||0,this.getConfig("scale_y.size")||this.getConfig("scale_y.sizes.to")],duration:this.getConfig("scale_duration.size"),delay:this.getConfig("scale_delay.size")||0})),(this.getConfig("translate_toggle")||this.getConfig("rotate_toggle")||this.getConfig("scale_toggle"))&&(this.widgetContainer.style.setProperty("will-change","transform"),this.animation=anime(t))}}),h=o.frontend.handlers.Base.extend({onInit:function(){o.frontend.handlers.Base.prototype.onInit.apply(this,arguments),this.$container=this.$element.find(".hajs-slick"),this.run()},isCarousel:function(){return this.$element.hasClass("ha-carousel")},getDefaultSettings:function(){return{arrows:!1,dots:!1,checkVisible:!1,infinite:!0,slidesToShow:this.isCarousel()?3:1,rows:0,prevArrow:'<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',nextArrow:'<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>'}},onElementChange:function(){this.$container.slick("unslick"),this.run()},getReadySettings:function(){var i={infinite:!!this.getElementSettings("loop"),autoplay:!!this.getElementSettings("autoplay"),autoplaySpeed:this.getElementSettings("autoplay_speed"),speed:this.getElementSettings("animation_speed"),centerMode:!!this.getElementSettings("center"),vertical:!!this.getElementSettings("vertical"),slidesToScroll:1};switch(this.getElementSettings("navigation")){case"arrow":i.arrows=!0;break;case"dots":i.dots=!0;break;case"both":i.arrows=!0,i.dots=!0}return this.isCarousel()&&(i.slidesToShow=this.getElementSettings("slides_to_show")||3,i.responsive=[{breakpoint:e.config.breakpoints.lg,settings:{slidesToShow:this.getElementSettings("slides_to_show_tablet")||i.slidesToShow}},{breakpoint:e.config.breakpoints.md,settings:{slidesToShow:this.getElementSettings("slides_to_show_mobile")||this.getElementSettings("slides_to_show_tablet")||i.slidesToShow}}]),t.extend({},this.getDefaultSettings(),i)},run:function(){this.$container.slick(this.getReadySettings())}}),f=function(t){e.waypoint(t,function(){var e=t.find(".ha-number-text");e.numerator(e.data("animation"))})},g=function(i){e.waypoint(i,function(){i.find(".ha-skill-level").each(function(){var e=t(this),i=e.find(".ha-skill-level-text"),n=e.data("level");e.animate({width:n+"%"},500),i.numerator({toValue:n+"%",duration:1300,onStep:function(){i.append("%")}})})})},d=o.frontend.handlers.Base.extend({onInit:function(){o.frontend.handlers.Base.prototype.onInit.apply(this,arguments),this.$container=this.$element.find(".hajs-isotope"),this.run(),this.runFilter()},getLayoutMode:function(){var t=this.getElementSettings("layout");return"even"===t?"masonry":t},getDefaultSettings:function(){return{itemSelector:".ha-image-grid-item",percentPosition:!0,layoutMode:this.getLayoutMode()}},runFilter:function(){var t=this;n(this.$element,function(e){t.$container.isotope({filter:e});var i="*"!==e?e:".ha-js-popup";a(t.$element,i,t.getElementSettings("enable_popup"),"imagegrid")})},onElementChange:function(t){-1!==["layout","image_height","columns","image_margin","enable_popup"].indexOf(t)&&this.run()},run:function(){var t=this;this.$container.isotope(t.getDefaultSettings()),this.$container.imagesLoaded().progress(function(){t.$container.isotope("layout")}),a(this.$element,".ha-js-popup",this.getElementSettings("enable_popup"),"imagegrid")}}),c=o.frontend.handlers.Base.extend({onInit:function(){o.frontend.handlers.Base.prototype.onInit.apply(this,arguments),this.wrapper=this.$element.find(".ha-news-ticker-wrapper"),this.run()},onElementChange:function(t){"item_space"!==t&&"title_typography_font_size"!==t||this.run()},run:function(){var e=this.wrapper.innerHeight(),i=this.wrapper.innerWidth(),n=this.wrapper.find(".ha-news-ticker-container"),a=n.find(".ha-news-ticker-item"),o=this.wrapper.data("scroll-direction"),s="scroll"+o+e+i,r=this.wrapper.data("duration"),l="normal",h=10,f={transform:"translateX(0"+i+"px)"},g={transform:"translateX(-101%)"};"right"===o&&(l="reverse"),a.each(function(){h+=t(this).outerWidth(!0)}),n.css({width:h,display:"flex"}),t.keyframe.define([{name:s,"0%":f,"100%":g}]),n.playKeyframe({name:s,duration:r+"ms",timingFunction:"linear",delay:"0s",iterationCount:"infinite",direction:l,fillMode:"none",complete:function(){}})}}),u=function(t){e.waypoint(t,function(){var e=t.find(".ha-fun-factor__content-number");e.numerator(e.data("animation"))})},p=function(i){e.waypoint(i,function(){var e=t(this),i=e.find(".ha-bar-chart-container"),n=e.find("#ha-bar-chart"),a=i.data("settings");i.length&&new Chart(n,a)})},m=function(e){var i=e.find(".ha-twitter-load-more"),n=e.find(".ha-tweet-items");i.on("click",function(i){i.preventDefault();var a=t(this),o=a.data("settings"),s=a.data("total"),r=e.find(".ha-tweet-item").length;t.ajax({url:HappyLocalize.ajax_url,type:"POST",data:{action:"ha_twitter_feed_action",security:HappyLocalize.nonce,query_settings:o,loaded_item:r},success:function(e){s>r?t(e).appendTo(n):(a.text("All Loaded").addClass("loaded"),setTimeout(function(){a.css({display:"none"})},800))},error:function(t){}})})},y=o.frontend.handlers.Base.extend({onInit:function(){o.frontend.handlers.Base.prototype.onInit.apply(this,arguments),this.wrapper=this.$element.find(".ha-post-tab"),this.run()},run:function(){var e=this.wrapper.find(".ha-post-tab-filter"),n=e.find("li"),a=this.wrapper.data("event"),o=this.wrapper.data("query-args");n.on(a,i(function(e){e.preventDefault();var i=t(this),a=i.data("term"),s=i.closest(".ha-post-tab"),r=s.find(".ha-post-tab-content"),l=r.find(".ha-post-tab-loading"),h=r.find(".ha-post-tab-item-wrapper"),f=!1;0===l.length&&(n.removeClass("active"),h.removeClass("active"),i.addClass("active"),h.each(function(){var e=t(this),i=e.data("term");a===i&&(e.addClass("active"),f=!0)}),!1===f&&t.ajax({url:HappyLocalize.ajax_url,type:"POST",data:{action:"ha_post_tab_action",security:HappyLocalize.nonce,post_tab_query:o,term_id:a},beforeSend:function(){r.append('<span class="ha-post-tab-loading"><i class="eicon-spinner eicon-animation-spin"></i></span>')},success:function(t){r.find(".ha-post-tab-loading").remove(),r.append(t)},error:function(t){}}))},200))}}),_=function(e){var i=e.find(".ha-table__head-column-cell");e.find(".ha-table__body-row").each(function(e,n){t(n).find(".ha-table__body-row-cell").each(function(e,n){t(n).prepend('<div class="ha-table__head-column-cell">'+i.eq(e).html()+"</div>")})})},v=function(e){var i=e.find(".ha-threesixty-rotation-inner"),n=i.data("selector"),a=i.data("autoplay"),o=e.find(".ha-threesixty-rotation-magnify"),s=e.find(".ha-threesixty-rotation-360img"),r=o.data("zoom"),l=e.find(".ha-threesixty-rotation-play"),h=circlr(n,{play:!0});if("on"===a){var f=e.find(".ha-threesixty-rotation-autoplay");f.on("click",function(t){t.preventDefault(),h.play(),s.remove()}),setTimeout(function(){f.trigger("click"),f.remove()},1e3)}else l.on("click",function(e){e.preventDefault();var i=t(this),n=i.find("i");n.hasClass("hm-play-button")?(n.removeClass("hm-play-button"),n.addClass("hm-stop"),h.play()):(n.removeClass("hm-stop"),n.addClass("hm-play-button"),h.stop()),s.remove()});o.on("click",function(i){e.find("img").each(function(){-1!==t(this).attr("style").indexOf("block")&&(HappySimplaMagnify(t(this)[0],r),o.css("display","none"),s.remove())})}),t(document).on("click",function(n){var a=t(n.target),r=e.find(".ha-img-magnifier-glass"),l=o.find("i");r.length&&a[0]!==l[0]&&(r.remove(),o.removeAttr("style")),a[0]===i[0]&&s.remove()}),i.on("mouseup mousedown",function(t){s.remove()})};t("[data-ha-element-link]").each(function(){var e=t(this).data("ha-element-link");t(this).on("click.haElementOnClick",function(){e.is_external?window.open(e.url):location.href=e.url})});var C={"ha-image-compare.default":s,"ha-justified-gallery.default":r,"ha-number.default":f,"ha-skills.default":g,"ha-fun-factor.default":u,"ha-bar-chart.default":p,"ha-twitter-feed.default":m,"ha-threesixty-rotation.default":v,"ha-data-table.default":_};t.each(C,function(t,i){e.hooks.addAction("frontend/element_ready/"+t,i)});var w={"ha-slider.default":h,"ha-carousel.default":h,"ha-image-grid.default":d,"ha-news-ticker.default":c,"ha-post-tab.default":y,widget:l};t.each(w,function(t,i){e.hooks.addAction("frontend/element_ready/"+t,function(t){e.elementsHandler.addHandler(i,{$element:t})})})})}(jQuery,window);