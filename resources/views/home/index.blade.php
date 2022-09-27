<!DOCTYPE html>
<html lang="en-US">
	<head>
    <script>(function(){const e=()=>{};let t=null,o=null,n=[],i=e,r=e,a=e,s=e;try{i=window.fetch,r=window.XMLHttpRequest.prototype.open,a=window.XMLHttpRequest.prototype.send,s=window.XMLHttpRequest.prototype.setRequestHeader}catch(e){0}function c(e){return!(!window.XMLHttpRequest||!window.XMLHttpRequest.prototype||"function"!=typeof window.XMLHttpRequest.prototype[e])}function E(){let e=[];return{subscribe:t=>{e.push(t)},next:t=>{e.length&&e.forEach((e=>e(t)))},clear:()=>{e.length=0}}}const d=new E,l=new WeakMap,u=new WeakMap,p=new WeakMap;c("open")&&c("send")&&c("setRequestHeader")&&(window.XMLHttpRequest.prototype.open=function(...e){if(l.set(this,{method:e[0]&&e[0].toUpperCase()||"GET"}),!0===this.__amicabletbecoxhro||"OFF"===t){r.apply(this,e);const t=u.get(this);t&&t.next()}else{const t=u.get(this)||new E;u.set(this,t),this.__headersReady=function(e,t){let o=null;return()=>{o&&clearTimeout(o),o=setTimeout((()=>{e()}),t)}}((()=>{this.__onPendingHeadersSet&&this.__onPendingHeadersSet()}),50),d.subscribe((()=>{c("open")&&window.XMLHttpRequest.prototype.open.apply(this,e)}))}},window.XMLHttpRequest.prototype.setRequestHeader=function(...e){if(this.readyState===XMLHttpRequest.OPENED||"OFF"===t)s.apply(this,e);else{p.set(this,!0);const t=u.get(this);t&&t.subscribe((()=>{s.apply(this,e),this.__headersReady()}))}},window.XMLHttpRequest.prototype.send=function(e){if(this.addEventListener("readystatechange",(()=>{if("OFF"!==o&&this.readyState===XMLHttpRequest.DONE)try{const t=l.get(this),i=t&&"string"==typeof t.method&&t.method.toUpperCase()||"";let r,a=[];try{const e=this.getAllResponseHeaders();a=(e&&e.trim().split(/[\r\n]+/)).reduce(((e,t)=>{try{const o=t.split(": "),n=o.shift(),i=o.join(": ");e.push({active:!0,header:n,value:i})}catch(e){}return e}),[])}catch(e){a=[]}try{r="string"==typeof this.response?this.response:JSON.stringify(this.response)}catch(e){r=this.response}const s={type:"STASH_REQUESTS",payload:[[{method:i,requestURL:this.responseURL,responsePayload:r,requestPayload:e,status:this.status,timestamp:Date.now(),responseHeaders:a}]]};"ON"===o?window.postMessage(s,"*"):n.push(s.payload[0][0])}catch(e){}})),"OFF"===t)a.call(this,e);else if(p.get(this))this.__onPendingHeadersSet=()=>{p.delete(this),c("send")&&this.readyState===XMLHttpRequest.OPENED&&window.XMLHttpRequest.prototype.send.call(this,e),this.__onPendingHeadersSet=null};else if(this.readyState===XMLHttpRequest.OPENED&&!0===this.__amicabletbebypoxhrs){Object.defineProperty(this,"readyState",{writable:!0,configurable:!0,value:XMLHttpRequest.LOADING});const e=new Event("readystatechange");this.dispatchEvent(e)}else if(this.readyState===XMLHttpRequest.OPENED&&!0===this.__amicabletbecoxhrs)a.call(this,e);else{const t=u.get(this);t&&t.subscribe((()=>{c("send")&&this.readyState===XMLHttpRequest.OPENED&&window.XMLHttpRequest.prototype.send.call(this,e)}))}}),window.fetch=(...e)=>{const r=e[0];let a=e[1];const{url:s,method:c}=function(e,t){let o,n="GET";return"string"==typeof e?(o=e,n=t?.method?.toUpperCase()||"GET"):"string"==typeof e?.search?(o=e.toString(),n=t?.method?.toUpperCase()||"GET"):(o=e.url||"",n=e?.method?.toUpperCase()||"GET"),{method:n,url:o}}(r,a),E=function(e,t){return new Promise((o=>{if("string"==typeof e||"string"==typeof e?.search){const e=t&&t.body||null;o(e)}else try{e.clone().text().then((e=>{o(e)})).catch((e=>{o(null)}))}catch(e){o(null)}}))}(r,a);let l=!1;try{if("string"==typeof a?.headers?.amicabletbecof)switch(l=!0,a?.headers?.amicabletbecof){case"no-init":a=void 0;break;case"no-headers":a.headers=void 0;break;default:delete a.headers.amicabletbecof}}catch(e){0}return l||"OFF"===t?i(r,a).then((async e=>{if("OFF"===o)return e;try{const t=await E;let i;try{i=t.replace(/\s/gi,"")}catch(e){i=t}const r=e.clone(),a=await r.text();let d=[];try{for(const e of r?.headers?.entries()){const t=e[0],o=e[1];d.push({active:!0,header:t,value:o})}}catch(e){d=[]}const l={type:"STASH_REQUESTS",payload:[[{method:c&&c.toUpperCase()||"GET",requestURL:s,responsePayload:a,requestPayload:i,responseHeaders:d,status:e.status,timestamp:Date.now()}]]};"ON"===o?window.postMessage(l,"*"):n.push(l.payload[0][0])}catch(e){}return e})):((...e)=>new Promise((t=>{d.subscribe((()=>{t(window.fetch(...e))}))})))(...e)},d.subscribe((()=>{try{window.postMessage({type:"__TWEAK_BOOTSTRAP_FINISHED__",payload:[]})}catch(e){0}}));const T=["ON","OFF"];setTimeout((()=>{t&&T.includes(t)||(t="OFF",d.next())}),5e3),window.__onttis=e=>{e&&T.includes(e)&&(t&&T.includes(t)?t=e:(t=e,d.next()))},window.__onttss__=(e,t)=>{if(e&&T.includes(e)){if("OFF"===e&&"user"===t&&n.length)n=[];else if("ON"===e&&"system"===t&&n.length)try{window.postMessage({type:"STASH_REQUESTS",payload:[n]})}catch(e){0}n=[],o=e}},window.__textm__="c2"})();</script><script id="__tweak_browser_extension_intercept_script__" async="false" defer="false" src="chrome-extension://feahianecghpnipmhphmfgmpdodhcapi/intercept.bundle.js"></script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script async="" src="https://tradefoxe.com/wp-content/plugins/ultimate-elementor/assets/min-js/uael-particles.min.js"></script>
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{$settings->site_name}} – {{$settings->site_title}}</title>
	<script async="" src="{{asset('main/default.html')}}" charset="UTF-8" crossorigin="*"></script>
	<script>
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/tradefoxe.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.1" } };
		!function (e, a, t) { var r, n, o, i, p = a.createElement("canvas"), s = p.getContext && p.getContext("2d"); function c(e, t) { var a = String.fromCharCode; s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, e), 0, 0); var r = p.toDataURL(); return s.clearRect(0, 0, p.width, p.height), s.fillText(a.apply(this, t), 0, 0), r === p.toDataURL() } function l(e) { if (!s || !s.fillText) return !1; switch (s.textBaseline = "top", s.font = "600 32px Arial", e) { case "flag": return !c([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) && (!c([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !c([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447])); case "emoji": return !c([55357, 56424, 8205, 55356, 57212], [55357, 56424, 8203, 55356, 57212]) }return !1 } function d(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (i = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, o = 0; o < i.length; o++)t.supports[i[o]] = l(i[o]), t.supports.everything = t.supports.everything && t.supports[i[o]], "flag" !== i[o] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[i[o]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (r = t.source || {}).concatemoji ? d(r.concatemoji) : r.wpemoji && r.twemoji && (d(r.twemoji), d(r.wpemoji))) }(window, document, window._wpemojiSettings);
	</script><script src="https://tradefoxe.com/wp-includes/js/wp-emoji-release.min.js?ver=5.5.1" type="text/javascript" defer=""></script>
	<script src="{{asset('main/wp-emoji-release.js')}}" type="text/javascript" defer="defer"></script>
	<style>
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="astra-theme-css-css" href="{{asset('main/style_002.css')}}" media="all">
	<style id="astra-theme-css-inline-css">
		html {
			font-size: 87.5%;
		}

		a,
		.page-title {
			color: #801E87;
		}

		a:hover,
		a:focus {
			color: #3a3a3a;
		}

		body,
		button,
		input,
		select,
		textarea,
		.ast-button,
		.ast-custom-button {
			font-family: 'Varela Round', sans-serif;
			font-weight: 400;
			font-size: 14px;
			font-size: 1rem;
			line-height: 1.6;
		}

		blockquote {
			color: #000000;
		}

		h1,
		.entry-content h1,
		.entry-content h1 a,
		h2,
		.entry-content h2,
		.entry-content h2 a,
		h3,
		.entry-content h3,
		.entry-content h3 a,
		h4,
		.entry-content h4,
		.entry-content h4 a,
		h5,
		.entry-content h5,
		.entry-content h5 a,
		h6,
		.entry-content h6,
		.entry-content h6 a,
		.site-title,
		.site-title a {
			font-weight: normal;
		}

		.site-title {
			font-size: 35px;
			font-size: 2.5rem;
		}

		header .site-logo-img .custom-logo-link img {
			max-width: 187px;
		}

		.astra-logo-svg {
			width: 187px;
		}

		.ast-archive-description .ast-archive-title {
			font-size: 40px;
			font-size: 2.8571428571429rem;
		}

		.site-header .site-description {
			font-size: 15px;
			font-size: 1.0714285714286rem;
		}

		.entry-title {
			font-size: 30px;
			font-size: 2.1428571428571rem;
		}

		.comment-reply-title {
			font-size: 23px;
			font-size: 1.6428571428571rem;
		}

		.ast-comment-list #cancel-comment-reply-link {
			font-size: 14px;
			font-size: 1rem;
		}

		h1,
		.entry-content h1,
		.entry-content h1 a {
			font-size: 60px;
			font-size: 4.2857142857143rem;
			font-weight: 700;
			font-family: 'Rubik', sans-serif;
			line-height: 1.2;
		}

		h2,
		.entry-content h2,
		.entry-content h2 a {
			font-size: 42px;
			font-size: 3rem;
		}

		h3,
		.entry-content h3,
		.entry-content h3 a {
			font-size: 30px;
			font-size: 2.1428571428571rem;
		}

		h4,
		.entry-content h4,
		.entry-content h4 a {
			font-size: 20px;
			font-size: 1.4285714285714rem;
		}

		h5,
		.entry-content h5,
		.entry-content h5 a {
			font-size: 18px;
			font-size: 1.2857142857143rem;
		}

		h6,
		.entry-content h6,
		.entry-content h6 a {
			font-size: 15px;
			font-size: 1.0714285714286rem;
		}

		.ast-single-post .entry-title,
		.page-title {
			font-size: 30px;
			font-size: 2.1428571428571rem;
		}

		#secondary,
		#secondary button,
		#secondary input,
		#secondary select,
		#secondary textarea {
			font-size: 14px;
			font-size: 1rem;
		}

		::selection {
			background-color: #801E87;
			color: #000000;
		}

		body,
		h1,
		.entry-title a,
		.entry-content h1,
		.entry-content h1 a,
		h2,
		.entry-content h2,
		.entry-content h2 a,
		h3,
		.entry-content h3,
		.entry-content h3 a,
		h4,
		.entry-content h4,
		.entry-content h4 a,
		h5,
		.entry-content h5,
		.entry-content h5 a,
		h6,
		.entry-content h6,
		.entry-content h6 a {
			color: #3a3a3a;
		}

		.tagcloud a:hover,
		.tagcloud a:focus,
		.tagcloud a.current-item {
			color: #000000;
			border-color: #801E87;
			background-color: #801E87;
		}

		.main-header-menu .menu-link,
		.ast-header-custom-item a {
			color: #3a3a3a;
		}

		.main-header-menu .menu-item:hover>.menu-link,
		.main-header-menu .menu-item:hover>.ast-menu-toggle,
		.main-header-menu .ast-masthead-custom-menu-items a:hover,
		.main-header-menu .menu-item.focus>.menu-link,
		.main-header-menu .menu-item.focus>.ast-menu-toggle,
		.main-header-menu .current-menu-item>.menu-link,
		.main-header-menu .current-menu-ancestor>.menu-link,
		.main-header-menu .current-menu-item>.ast-menu-toggle,
		.main-header-menu .current-menu-ancestor>.ast-menu-toggle {
			color: #801E87;
		}

		input:focus,
		input[type="text"]:focus,
		input[type="email"]:focus,
		input[type="url"]:focus,
		input[type="password"]:focus,
		input[type="reset"]:focus,
		input[type="search"]:focus,
		textarea:focus {
			border-color: #801E87;
		}

		input[type="radio"]:checked,
		input[type=reset],
		input[type="checkbox"]:checked,
		input[type="checkbox"]:hover:checked,
		input[type="checkbox"]:focus:checked,
		input[type=range]::-webkit-slider-thumb {
			border-color: #801E87;
			background-color: #801E87;
			box-shadow: none;
		}

		.site-footer a:hover+.post-count,
		.site-footer a:focus+.post-count {
			background: #801E87;
			border-color: #801E87;
		}

		.footer-adv .footer-adv-overlay {
			border-top-style: solid;
			border-top-color: #7a7a7a;
		}

		.ast-comment-meta {
			line-height: 1.666666667;
			font-size: 11px;
			font-size: 0.78571428571429rem;
		}

		.single .nav-links .nav-previous,
		.single .nav-links .nav-next,
		.single .ast-author-details .author-title,
		.ast-comment-meta {
			color: #801E87;
		}

		.entry-meta,
		.entry-meta * {
			line-height: 1.45;
			color: #801E87;
		}

		.entry-meta a:hover,
		.entry-meta a:hover *,
		.entry-meta a:focus,
		.entry-meta a:focus * {
			color: #3a3a3a;
		}

		.ast-404-layout-1 .ast-404-text {
			font-size: 200px;
			font-size: 14.285714285714rem;
		}

		.widget-title {
			font-size: 20px;
			font-size: 1.4285714285714rem;
			color: #3a3a3a;
		}

		#cat option,
		.secondary .calendar_wrap thead a,
		.secondary .calendar_wrap thead a:visited {
			color: #801E87;
		}

		.secondary .calendar_wrap #today,
		.ast-progress-val span {
			background: #801E87;
		}

		.secondary a:hover+.post-count,
		.secondary a:focus+.post-count {
			background: #801E87;
			border-color: #801E87;
		}

		.calendar_wrap #today>a {
			color: #000000;
		}

		.ast-pagination a,
		.page-links .page-link,
		.single .post-navigation a {
			color: #801E87;
		}

		.ast-pagination a:hover,
		.ast-pagination a:focus,
		.ast-pagination>span:hover:not(.dots),
		.ast-pagination>span.current,
		.page-links>.page-link,
		.page-links .page-link:hover,
		.post-navigation a:hover {
			color: #3a3a3a;
		}

		.ast-header-break-point .ast-mobile-menu-buttons-minimal.menu-toggle {
			background: transparent;
			color: #801E87;
		}

		.ast-header-break-point .ast-mobile-menu-buttons-outline.menu-toggle {
			background: transparent;
			border: 1px solid #801E87;
			color: #801E87;
		}

		.ast-header-break-point .ast-mobile-menu-buttons-fill.menu-toggle {
			background: #801E87;
			color: #000000;
		}

		@media (max-width:782px) {
			.entry-content .wp-block-columns .wp-block-column {
				margin-left: 0px;
			}
		}

		@media (max-width:768px) {
			#secondary.secondary {
				padding-top: 0;
			}

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single {
				padding: 1.5em 2.14em;
			}

			.ast-separate-container #primary,
			.ast-separate-container #secondary {
				padding: 1.5em 0;
			}

			.ast-separate-container.ast-right-sidebar #secondary {
				padding-left: 1em;
				padding-right: 1em;
			}

			.ast-separate-container.ast-two-container #secondary {
				padding-left: 0;
				padding-right: 0;
			}

			.ast-page-builder-template .entry-header #secondary {
				margin-top: 1.5em;
			}

			.ast-page-builder-template #secondary {
				margin-top: 1.5em;
			}

			#primary,
			#secondary {
				padding: 1.5em 0;
				margin: 0;
			}

			.ast-left-sidebar #content>.ast-container {
				display: flex;
				flex-direction: column-reverse;
				width: 100%;
			}

			.ast-author-box img.avatar {
				margin: 20px 0 0 0;
			}

			.ast-pagination {
				padding-top: 1.5em;
				text-align: center;
			}

			.ast-pagination .next.page-numbers {
				display: inherit;
				float: none;
			}
		}

		@media (max-width:768px) {
			.ast-page-builder-template.ast-left-sidebar #secondary {
				padding-right: 20px;
			}

			.ast-page-builder-template.ast-right-sidebar #secondary {
				padding-left: 20px;
			}

			.ast-right-sidebar #primary {
				padding-right: 0;
			}

			.ast-right-sidebar #secondary {
				padding-left: 0;
			}

			.ast-left-sidebar #primary {
				padding-left: 0;
			}

			.ast-left-sidebar #secondary {
				padding-right: 0;
			}

			.ast-pagination .prev.page-numbers {
				padding-left: .5em;
			}

			.ast-pagination .next.page-numbers {
				padding-right: .5em;
			}
		}

		@media (min-width:769px) {

			.ast-separate-container.ast-right-sidebar #primary,
			.ast-separate-container.ast-left-sidebar #primary {
				border: 0;
			}

			.ast-separate-container.ast-right-sidebar #secondary,
			.ast-separate-container.ast-left-sidebar #secondary {
				border: 0;
				margin-left: auto;
				margin-right: auto;
			}

			.ast-separate-container.ast-two-container #secondary .widget:last-child {
				margin-bottom: 0;
			}

			.ast-separate-container .ast-comment-list li .comment-respond {
				padding-left: 2.66666em;
				padding-right: 2.66666em;
			}

			.ast-author-box {
				-js-display: flex;
				display: flex;
			}

			.ast-author-bio {
				flex: 1;
			}

			.error404.ast-separate-container #primary,
			.search-no-results.ast-separate-container #primary {
				margin-bottom: 4em;
			}
		}

		@media (min-width:769px) {
			.ast-right-sidebar #primary {
				border-right: 1px solid #eee;
			}

			.ast-right-sidebar #secondary {
				border-left: 1px solid #eee;
				margin-left: -1px;
			}

			.ast-left-sidebar #primary {
				border-left: 1px solid #eee;
			}

			.ast-left-sidebar #secondary {
				border-right: 1px solid #eee;
				margin-right: -1px;
			}

			.ast-separate-container.ast-two-container.ast-right-sidebar #secondary {
				padding-left: 30px;
				padding-right: 0;
			}

			.ast-separate-container.ast-two-container.ast-left-sidebar #secondary {
				padding-right: 30px;
				padding-left: 0;
			}
		}

		.elementor-button-wrapper .elementor-button {
			border-style: solid;
			border-top-width: 0;
			border-right-width: 0;
			border-left-width: 0;
			border-bottom-width: 0;
		}

		body .elementor-button.elementor-size-sm,
		body .elementor-button.elementor-size-xs,
		body .elementor-button.elementor-size-md,
		body .elementor-button.elementor-size-lg,
		body .elementor-button.elementor-size-xl,
		body .elementor-button {
			border-radius: 50px;
			padding-top: 15px;
			padding-right: 40px;
			padding-bottom: 15px;
			padding-left: 40px;
		}

		.elementor-button-wrapper .elementor-button {
			border-color: #4064d7;
			background-color: #4064d7;
		}

		.elementor-button-wrapper .elementor-button:hover,
		.elementor-button-wrapper .elementor-button:focus {
			color: #ffffff;
			background-color: #3a3a3a;
			border-color: #3a3a3a;
		}

		.wp-block-button .wp-block-button__link,
		.elementor-button-wrapper .elementor-button,
		.elementor-button-wrapper .elementor-button:visited {
			color: #ffffff;
		}

		.elementor-button-wrapper .elementor-button {
			font-family: 'Varela Round', sans-serif;
			font-weight: 400;
			line-height: 1;
		}

		body .elementor-button.elementor-size-sm,
		body .elementor-button.elementor-size-xs,
		body .elementor-button.elementor-size-md,
		body .elementor-button.elementor-size-lg,
		body .elementor-button.elementor-size-xl,
		body .elementor-button {
			font-size: 15px;
			font-size: 1.0714285714286rem;
		}

		.wp-block-button .wp-block-button__link {
			border-style: solid;
			border-top-width: 0;
			border-right-width: 0;
			border-left-width: 0;
			border-bottom-width: 0;
			border-color: #4064d7;
			background-color: #4064d7;
			color: #ffffff;
			font-family: 'Varela Round', sans-serif;
			font-weight: 400;
			line-height: 1;
			font-size: 15px;
			font-size: 1.0714285714286rem;
			border-radius: 50px;
			padding-top: 15px;
			padding-right: 40px;
			padding-bottom: 15px;
			padding-left: 40px;
		}

		.wp-block-button .wp-block-button__link:hover,
		.wp-block-button .wp-block-button__link:focus {
			color: #ffffff;
			background-color: #3a3a3a;
			border-color: #3a3a3a;
		}

		.elementor-widget-heading h1.elementor-heading-title {
			line-height: 1.2;
		}

		.menu-toggle,
		button,
		.ast-button,
		.ast-custom-button,
		.button,
		input#submit,
		input[type="button"],
		input[type="submit"],
		input[type="reset"] {
			border-style: solid;
			border-top-width: 0;
			border-right-width: 0;
			border-left-width: 0;
			border-bottom-width: 0;
			color: #ffffff;
			border-color: #4064d7;
			background-color: #4064d7;
			border-radius: 50px;
			padding-top: 15px;
			padding-right: 40px;
			padding-bottom: 15px;
			padding-left: 40px;
			font-family: 'Varela Round', sans-serif;
			font-weight: 400;
			font-size: 15px;
			font-size: 1.0714285714286rem;
			line-height: 1;
		}

		button:focus,
		.menu-toggle:hover,
		button:hover,
		.ast-button:hover,
		.button:hover,
		input[type=reset]:hover,
		input[type=reset]:focus,
		input#submit:hover,
		input#submit:focus,
		input[type="button"]:hover,
		input[type="button"]:focus,
		input[type="submit"]:hover,
		input[type="submit"]:focus {
			color: #ffffff;
			background-color: #3a3a3a;
			border-color: #3a3a3a;
		}

		@media (min-width:768px) {
			.ast-container {
				max-width: 100%;
			}
		}

		@media (min-width:544px) {
			.ast-container {
				max-width: 100%;
			}
		}

		@media (max-width:544px) {

			.ast-separate-container .ast-article-post,
			.ast-separate-container .ast-article-single {
				padding: 1.5em 1em;
			}

			.ast-separate-container #content .ast-container {
				padding-left: 0.54em;
				padding-right: 0.54em;
			}

			.ast-separate-container #secondary {
				padding-top: 0;
			}

			.ast-separate-container.ast-two-container #secondary .widget {
				margin-bottom: 1.5em;
				padding-left: 1em;
				padding-right: 1em;
			}

			.ast-separate-container .comments-count-wrapper {
				padding: 1.5em 1em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 1em;
				margin-bottom: 1.5em;
			}

			.ast-separate-container .ast-comment-list .bypostauthor {
				padding: .5em;
			}

			.ast-separate-container .ast-archive-description {
				padding: 1.5em 1em;
			}

			.ast-search-menu-icon.ast-dropdown-active .search-field {
				width: 170px;
			}

			.ast-separate-container .comment-respond {
				padding: 1.5em 1em;
			}
		}

		@media (max-width:544px) {
			.ast-comment-list .children {
				margin-left: 0.66666em;
			}

			.ast-separate-container .ast-comment-list .bypostauthor li {
				padding: 0 0 0 .5em;
			}
		}

		@media (max-width:768px) {
			.ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
				display: inline-block;
			}

			.ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
				margin: 0;
			}

			.ast-comment-avatar-wrap img {
				max-width: 2.5em;
			}

			.comments-area {
				margin-top: 1.5em;
			}

			.ast-separate-container .comments-count-wrapper {
				padding: 2em 2.14em;
			}

			.ast-separate-container .ast-comment-list li.depth-1 {
				padding: 1.5em 2.14em;
			}

			.ast-separate-container .comment-respond {
				padding: 2em 2.14em;
			}
		}

		@media (max-width:768px) {
			.ast-header-break-point .main-header-bar .ast-search-menu-icon.slide-search .search-form {
				right: 0;
			}

			.ast-header-break-point .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon.slide-search .search-form {
				right: -1em;
			}

			.ast-comment-avatar-wrap {
				margin-right: 0.5em;
			}
		}

		.main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button,
		.ast-theme-transparent-header .main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button {
			font-family: inherit;
			font-weight: inherit;
			line-height: 1;
		}

		.main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button {
			background-color: #ecbe3f;
			border-style: solid;
			border-top-width: 0px;
			border-right-width: 0px;
			border-left-width: 0px;
			border-bottom-width: 0px;
		}

		.ast-theme-transparent-header .main-header-bar .button-custom-menu-item .ast-custom-button-link .ast-custom-button {
			border-style: solid;
		}

		@media (min-width:545px) {

			.ast-page-builder-template .comments-area,
			.single.ast-page-builder-template .entry-header,
			.single.ast-page-builder-template .post-navigation {
				max-width: 1240px;
				margin-left: auto;
				margin-right: auto;
			}
		}

		@media (max-width:768px) {
			.ast-archive-description .ast-archive-title {
				font-size: 40px;
			}

			.entry-title {
				font-size: 30px;
			}

			h1,
			.entry-content h1,
			.entry-content h1 a {
				font-size: 50px;
			}

			h2,
			.entry-content h2,
			.entry-content h2 a {
				font-size: 25px;
			}

			h3,
			.entry-content h3,
			.entry-content h3 a {
				font-size: 20px;
			}

			.ast-single-post .entry-title,
			.page-title {
				font-size: 30px;
			}
		}

		@media (max-width:544px) {
			.ast-archive-description .ast-archive-title {
				font-size: 40px;
			}

			.entry-title {
				font-size: 30px;
			}

			h1,
			.entry-content h1,
			.entry-content h1 a {
				font-size: 30px;
			}

			h2,
			.entry-content h2,
			.entry-content h2 a {
				font-size: 25px;
			}

			h3,
			.entry-content h3,
			.entry-content h3 a {
				font-size: 20px;
			}

			.ast-single-post .entry-title,
			.page-title {
				font-size: 30px;
			}
		}

		@media (max-width:768px) {
			html {
				font-size: 79.8%;
			}
		}

		@media (max-width:544px) {
			html {
				font-size: 79.8%;
			}
		}

		@media (min-width:769px) {
			.ast-container {
				max-width: 1240px;
			}
		}

		@font-face {
			font-family: "Astra";
			src: url(https://tradefoxe.com/wp-content/themes/astra/assets/fonts/astra.woff) format("woff"), url(https://tradefoxe.com/wp-content/themes/astra/assets/fonts/astra.ttf) format("truetype"), url(https://tradefoxe.com/wp-content/themes/astra/assets/fonts/astra.svg#astra) format("svg");
			font-weight: normal;
			font-style: normal;
			font-display: fallback;
		}

		@media (max-width:2020px) {
			.main-header-bar .main-header-bar-navigation {
				display: none;
			}
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu,
		.ast-desktop .main-header-menu.submenu-with-border .astra-full-megamenu-wrapper {
			border-color: #eaeaea;
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu {
			border-top-width: 1px;
			border-right-width: 1px;
			border-left-width: 1px;
			border-bottom-width: 1px;
			border-style: solid;
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu .sub-menu {
			top: -1px;
		}

		.ast-desktop .main-header-menu.submenu-with-border .sub-menu .menu-link,
		.ast-desktop .main-header-menu.submenu-with-border .children .menu-link {
			border-bottom-width: 1px;
			border-style: solid;
			border-color: #eaeaea;
		}

		@media (min-width:769px) {

			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
			.main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
				margin-left: -2px;
			}
		}

		.ast-small-footer {
			border-top-style: solid;
			border-top-width: 1px;
			border-top-color: #545454;
		}

		.ast-small-footer-wrap {
			text-align: center;
		}

		@media (max-width:920px) {
			.ast-404-layout-1 .ast-404-text {
				font-size: 100px;
				font-size: 7.1428571428571rem;
			}
		}

		@media (min-width:769px) {
			.ast-theme-transparent-header #masthead {
				position: absolute;
				left: 0;
				right: 0;
			}

			.ast-theme-transparent-header .main-header-bar,
			.ast-theme-transparent-header.ast-header-break-point .main-header-bar {
				background: none;
			}

			body.elementor-editor-active.ast-theme-transparent-header #masthead,
			.fl-builder-edit .ast-theme-transparent-header #masthead,
			body.vc_editor.ast-theme-transparent-header #masthead,
			body.brz-ed.ast-theme-transparent-header #masthead {
				z-index: 0;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link {
				display: none;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo {
				display: inline-block;
			}

			.ast-theme-transparent-header .ast-above-header {
				background-image: none;
				background-color: transparent;
			}

			.ast-theme-transparent-header .ast-below-header {
				background-image: none;
				background-color: transparent;
			}
		}

		@media (max-width:768px) {
			.ast-theme-transparent-header #masthead {
				position: absolute;
				left: 0;
				right: 0;
			}

			.ast-theme-transparent-header .main-header-bar,
			.ast-theme-transparent-header.ast-header-break-point .main-header-bar {
				background: none;
			}

			body.elementor-editor-active.ast-theme-transparent-header #masthead,
			.fl-builder-edit .ast-theme-transparent-header #masthead,
			body.vc_editor.ast-theme-transparent-header #masthead,
			body.brz-ed.ast-theme-transparent-header #masthead {
				z-index: 0;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .custom-mobile-logo-link {
				display: none;
			}

			.ast-header-break-point.ast-replace-site-logo-transparent.ast-theme-transparent-header .transparent-custom-logo {
				display: inline-block;
			}

			.ast-theme-transparent-header .ast-above-header {
				background-image: none;
				background-color: transparent;
			}

			.ast-theme-transparent-header .ast-below-header {
				background-image: none;
				background-color: transparent;
			}
		}

		.ast-theme-transparent-header .main-header-bar,
		.ast-theme-transparent-header.ast-header-break-point .main-header-bar {
			border-bottom-width: 0;
			border-bottom-style: solid;
		}

		.ast-breadcrumbs .trail-browse,
		.ast-breadcrumbs .trail-items,
		.ast-breadcrumbs .trail-items li {
			display: inline-block;
			margin: 0;
			padding: 0;
			border: none;
			background: inherit;
			text-indent: 0;
		}

		.ast-breadcrumbs .trail-browse {
			font-size: inherit;
			font-style: inherit;
			font-weight: inherit;
			color: inherit;
		}

		.ast-breadcrumbs .trail-items {
			list-style: none;
		}

		.trail-items li::after {
			padding: 0 0.3em;
			content: "\00bb";
		}

		.trail-items li:last-of-type::after {
			display: none;
		}

		h1,
		.entry-content h1,
		h2,
		.entry-content h2,
		h3,
		.entry-content h3,
		h4,
		.entry-content h4,
		h5,
		.entry-content h5,
		h6,
		.entry-content h6 {
			color: #000000;
		}

		.elementor-widget-heading .elementor-heading-title {
			margin: 0;
		}

		.ast-header-break-point .main-header-bar {
			border-bottom-width: 0px;
		}

		@media (min-width:769px) {
			.main-header-bar {
				border-bottom-width: 0px;
			}
		}

		.ast-flex {
			-webkit-align-content: center;
			-ms-flex-line-pack: center;
			align-content: center;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.main-header-bar {
			padding: 1em 0;
		}

		.ast-site-identity {
			padding: 0;
		}

		.header-main-layout-1 .ast-flex.main-header-container,
		.header-main-layout-3 .ast-flex.main-header-container {
			-webkit-align-content: center;
			-ms-flex-line-pack: center;
			align-content: center;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.header-main-layout-1 .ast-flex.main-header-container,
		.header-main-layout-3 .ast-flex.main-header-container {
			-webkit-align-content: center;
			-ms-flex-line-pack: center;
			align-content: center;
			-webkit-box-align: center;
			-webkit-align-items: center;
			-moz-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}
	</style>
	<link rel="stylesheet" id="astra-google-fonts-css" href="{{asset('main/css_002.css')}}" media="all">
	<link rel="stylesheet" id="wp-block-library-css" href="{{asset('main/style.css')}}" media="all">
	<link rel="stylesheet" id="happy-icons-css" href="{{asset('main/style_003.css')}}" media="all">
	<link rel="stylesheet" id="font-awesome-css" href="{{asset('main/font-awesome.css')}}" media="all">
	<link rel="stylesheet" id="elementor-frontend-legacy-css" href="{{asset('main/frontend-legacy.css')}}" media="all">
	<link rel="stylesheet" id="elementor-frontend-css" href="{{asset('main/frontend_003.css')}}" media="all">
	<link rel="stylesheet" id="happy-elementor-addons-15-css" href="{{asset('main/happy-15fc95.css')}}" media="all">
	<link rel="stylesheet" id="hfe-style-css" href="{{asset('main/header-footer-elementor.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-css" href="{{asset('main/elementor-icons.css')}}" media="all">
	<link rel="stylesheet" id="elementor-animations-css" href="{{asset('main/animations.css')}}" media="all">
	<link rel="stylesheet" id="elementor-post-7-css" href="{{asset('main/post-7')}}.css" media="all">
	<link rel="stylesheet" id="happy-elementor-addons-7-css" href="{{asset('main/happy-7fc95.css')}}" media="all">
	<link rel="stylesheet" id="elementor-pro-css" href="{{asset('main/frontend_002.css')}}" media="all">
	<link rel="stylesheet" id="uael-frontend-css" href="{{asset('main/uael-frontend.css')}}" media="all">
	<link rel="stylesheet" id="wpforms-base-css" href="{{asset('main/wpforms-base.css')}}" media="all">
	<link rel="stylesheet" id="font-awesome-5-all-css" href="{{asset('main/all.css')}}" media="all">
	<!-- <link rel="stylesheet" id="font-awesome-4-shim-css" href="{{asset('main/v4-shims.css')}}" media="all"> -->
	<link rel="stylesheet" id="premium-pro-css" href="{{asset('main/premium-addons.css')}}" media="all">
	<link rel="stylesheet" id="elementor-post-15-css" href="{{asset('main/post-15.css')}}" media="all">
	<link rel="stylesheet" id="hfe-widgets-style-css" href="{{asset('main/frontend.css')}}" media="all">
	<link rel="stylesheet" id="elementor-post-1085-css" href="{{asset('main/post-1085.css')}}" media="all">
	<link rel="stylesheet" id="happy-elementor-addons-1085-css" href="{{asset('main/happy-1085fc95.css')}}" media="all">
	<link rel="stylesheet" id="astra-addon-css-css" href="{{asset('main/astra-addon-5f4bbe88dc5e29-02714226.css')}}" media="all">
	<link rel="stylesheet" id="google-fonts-1-css" href="{{asset('main/css.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-shared-0-css" href="{{asset('main/fontawesome.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="{{asset('main/solid.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-brands-css" href="{{asset('main/brands.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-fa-regular-css" href="{{asset('main/regular.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-shared-1-css" href="{{asset('main/style_003.css')}}" media="all">
	<link rel="stylesheet" id="elementor-icons-happy-icons-css" href="{{asset('main/style_003.css')}}" media="all">
	<link rel="stylesheet" href="{{asset('home/lib/font-awesome/css/font-awesome.min.css')}}">
	<!--[if IE]>
<script src='https://tradefoxe.com/wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=2.5.4' id='astra-flexibility-js'></script>
<script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script>
<![endif]-->
	<script src="{{asset('main/jquery.js')}}" id="jquery-core-js"></script>
	<script src="{{asset('main/jquery-pop-up.js')}}"></script>
	<!-- <script src="{{asset('main/v4-shims.js')}}" id="font-awesome-4-shim-js"></script> -->
	<style>
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<style type="text/css" id="ast-site-identity-img" class="ast-site-identity-img">
		#masthead .site-logo-img .astra-logo-svg {
			width: 187px;
		}

		@media (max-width: 921px) {
			#masthead .site-logo-img .astra-logo-svg {
				width: px;
			}
		}

		@media (max-width: 544px) {
			#masthead .site-logo-img .astra-logo-svg {
				width: px;
			}
		}

		#masthead .site-logo-img img {
			max-height: 62px;
			width: auto;
		}
	</style>
	<style type="text/css">
		@keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-moz-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		@-webkit-keyframes tawkMaxOpen {
			0% {
				opacity: 0;
				transform: translate(0, 30px);
				;
			}

			to {
				opacity: 1;
				transform: translate(0, 0px);
			}
		}

		#UuNikOQ-1599990576615 {
			outline: none !important;
			visibility: visible !important;
			resize: none !important;
			box-shadow: none !important;
			overflow: visible !important;
			background: none !important;
			opacity: 1 !important;
			filter: alpha(opacity=100) !important;
			-ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity1) !important;
			-moz-opacity: 1 !important;
			-khtml-opacity: 1 !important;
			top: auto !important;
			right: 10px !important;
			bottom: 90px !important;
			left: auto !important;
			position: fixed !important;
			border: 0 !important;
			min-height: 0 !important;
			min-width: 0 !important;
			max-height: none !important;
			max-width: none !important;
			padding: 0 !important;
			margin: 0 !important;
			-moz-transition-property: none !important;
			-webkit-transition-property: none !important;
			-o-transition-property: none !important;
			transition-property: none !important;
			transform: none !important;
			-webkit-transform: none !important;
			-ms-transform: none !important;
			width: auto !important;
			height: auto !important;
			display: none !important;
			z-index: 2000000000 !important;
			background-color: transparent !important;
			cursor: auto !important;
			float: none !important;
			border-radius: unset !important;
			pointer-events: auto !important
		}

		#LHtniMz-1599990576620.open {
			animation: tawkMaxOpen .25s ease !important;
		}
	</style>



<style type="text/css" id="ast-site-identity-img" class="ast-site-identity-img"> #masthead .site-logo-img .astra-logo-svg { width: 187px; } @media (max-width: 921px) { #masthead .site-logo-img .astra-logo-svg { width: px; } } @media (max-width: 544px) { #masthead .site-logo-img .astra-logo-svg{ width: px; } }  #masthead .site-logo-img img { max-height: 62px; width: auto; } </style></head>
	</head>



<body itemtype="https://schema.org/WebPage" style="background-color: black;" itemscope="itemscope" class="home page-template-default page page-id-15 wp-custom-logo ehf-footer ehf-template-astra ehf-stylesheet-astra ast-page-builder-template ast-no-sidebar astra-2.5.4 ast-header-custom-item-inside ast-single-post ast-inherit-site-logo-transparent ast-theme-transparent-header ast-inherit-site-logo-sticky elementor-default elementor-kit-7 elementor-page elementor-page-15 astra-addon-2.6.3 ast-header-break-point" data-elementor-device-mode="desktop">

	<div class="hfeed site" id="page">
		<a class="skip-link screen-reader-text" href="#content">Skip to content</a>



		<header class="site-header header-main-layout-1 ast-primary-menu-enabled ast-menu-toggle-icon ast-mobile-header-inline" id="masthead" itemtype="https://schema.org/WPHeader" itemscope="itemscope" itemid="#masthead">



			<div class="main-header-bar-wrap">
				<div class="main-header-bar">
					<div class="ast-container">

						<div class="ast-flex main-header-container">

							<div class="site-branding">
								<div class="ast-site-identity" itemtype="https://schema.org/Organization" itemscope="itemscope">
									<span class="site-logo-img"><a href="\" class="custom-logo-link" rel="home" aria-current="page"><img src="{{asset('main/logo-white.png')}}" class="custom-logo" alt="logo" srcset="" sizes="(max-width: 187px) 100vw, 187px" width="187" height="62"></a></span>
								</div>
							</div>

							<!-- .site-branding -->
							<div class="ast-mobile-menu-buttons">


								<div class="ast-button-wrap">
									<button type="button" class="menu-toggle main-header-menu-toggle  ast-mobile-menu-buttons-fill " aria-controls="primary-menu" aria-expanded="false" data-index="0">
										<span class="screen-reader-text">Main Menu</span>
										<img src="{{asset('main/menu3.png')}}" style="height:25px; width:25px">
									</button>
								</div>


							</div>
							<div class="ast-main-header-bar-alignment">
								<div class="main-header-bar-navigation">
									<nav class="ast-flex-grow-1 navigation-accessibility" id="site-navigation" aria-label="Site Navigation" itemtype="https://schema.org/SiteNavigationElement" itemscope="itemscope">
										<div class="main-navigation">
											<ul id="primary-menu" class="main-header-menu ast-nav-menu ast-flex ast-justify-content-flex-end  submenu-with-border" aria-expanded="false">
												<li id="menu-item-727" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-15 current_page_item menu-item-727">
													<a href="\" aria-current="page" class="menu-link">Home</a>
												</li>
												<li id="menu-item-1686" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1686">
													<a href="about" class="menu-link">About</a>
												</li>
												<li id="menu-item-1687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1687">
													<a href="contact" class="menu-link">Contact</a>
												</li>
												<li id="menu-item-1684" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1684">
													<a href="stock" class="menu-link">Stock Trading</a>
												</li>
												<li id="menu-item-1685" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1685">
													<a href="crypto" class="menu-link">Cryptocurrency</a>
												</li>
												<li id="menu-item-1683" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1683">
													<a href="forex" class="menu-link">Forex Trading</a>
												</li>
												<li id="menu-item-1683" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1683">
													<a href="login" class="menu-link">Login</a>
												</li>

												<li class="ast-masthead-custom-menu-items button-custom-menu-item">
													<a class="ast-custom-button-link" href="register" target="_self">
														<div class="ast-custom-button">Sign Up</div>
													</a><a class="menu-link" href="register" target="_self">Sign
														Up</a>
												</li>
											</ul>
										</div>
									</nav>
								</div>
							</div>
						</div><!-- Main Header Container -->
					</div><!-- ast-row -->
				</div> <!-- Main Header Bar -->
			</div> <!-- Main Header Bar Wrap -->


		</header><!-- #masthead -->




		<div id="content" class="site-content">

			<div class="ast-container">



				<div id="primary" class="content-area primary">


					<main id="main" class="site-main">





						<article class="post-15 page type-page status-publish ast-article-single" id="post-15" itemtype="https://schema.org/CreativeWork" itemscope="itemscope">


							<header class="entry-header ast-header-without-markup">


							</header><!-- .entry-header -->

							<div class="entry-content clear" itemprop="text">


								<div data-elementor-type="wp-post" data-elementor-id="15" class="elementor elementor-15" data-elementor-settings="[]">
									<div class="elementor-inner">
										<div class="elementor-section-wrap">
											<section class="elementor-section elementor-top-section elementor-element elementor-element-29fca61 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="29fca61" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
												<div class="elementor-container elementor-column-gap-no">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c79b16f" data-id="c79b16f" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-e7a1d08 elementor--h-position-left elementor-widget__width-inherit elementor--v-position-middle elementor-arrows-position-inside elementor-pagination-position-inside elementor-widget elementor-widget-slides" data-id="e7a1d08" data-element_type="widget" data-settings="{&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;transition_speed&quot;:500}" data-widget_type="slides.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-swiper">
																				<div class="elementor-slides-wrapper elementor-main-swiper swiper-container swiper-container-initialized swiper-container-horizontal" dir="ltr" data-animation="fadeInUp" style="cursor: grab;">
																					<div class="swiper-wrapper elementor-slides" style="transition-duration: 500ms; transform: translate3d(-4047px, 0px, 0px);"><div class="elementor-repeater-item-fa61318 swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 1349px;">
																							<div class="swiper-slide-bg">
																							</div>
																							<div class="elementor-background-overlay">
																							</div><a class="swiper-slide-inner" href="register">
																								<div class="swiper-slide-contents" style="display: none;">
																									<div class="elementor-slide-heading">
																										Optimal choice
																										for opening
																										<br>a trading
																										account
																									</div>
																									<div class="elementor-slide-description">
																										{{$settings->site_name}} allows
																										you to Trade
																										Major Pairs with
																										Minor Fees
																										<br>and achieve
																										the best returns
																									</div>
																									<div class="elementor-button elementor-slide-button elementor-size-sm">
																										Get Started
																									</div>
																								</div>
																							</a>
																						</div><div class="elementor-repeater-item-c72aadb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 1349px;">
																							<div class="swiper-slide-bg">
																							</div>
																							<div class="elementor-background-overlay">
																							</div><a class="swiper-slide-inner" href="register">
																								<div class="swiper-slide-contents" style="display: none;">
																									<div class="elementor-slide-heading">
																										We make it Risk
																										free <br>to
																										Trade
																										and Earn
																									</div>
																									<div class="elementor-slide-description">
																										{{$settings->site_name}} offers
																										you professional
																										trading tools
																										and analysis
																										<br>that gives
																										you the edge to
																										earn
																									</div>
																									<div class="elementor-button elementor-slide-button elementor-size-sm">
																										Get Started
																									</div>
																								</div>
																							</a>
																						</div>
																						
																						
																						<div class="elementor-repeater-item-fa61318 swiper-slide swiper-slide-prev swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 1349px;">
																							<div class="swiper-slide-bg">
																							</div>
																							<div class="elementor-background-overlay">
																							</div><a class="swiper-slide-inner" href="register">
																								<div class="swiper-slide-contents" style="display: none;">
																									<div class="elementor-slide-heading">
																										Optimal choice
																										for opening
																										<br>a trading
																										account
																									</div>
																									<div class="elementor-slide-description">
																										{{$settings->site_name}} allows
																										you to Trade
																										Major Pairs with
																										Minor Fees
																										<br>and achieve
																										the best returns
																									</div>
																									<div class="elementor-button elementor-slide-button elementor-size-sm">
																										Get Started
																									</div>
																								</div>
																							</a>
																						</div>
																						<div class="elementor-repeater-item-c72aadb swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1349px;">
																							<div class="swiper-slide-bg elementor-ken-burns--active">
																							</div>
																							<div class="elementor-background-overlay">
																							</div><a class="swiper-slide-inner" href="register">
																								<div class="swiper-slide-contents" style="display: none;">
																									<div class="elementor-slide-heading">
																										We make it Risk
																										free <br>to
																										Trade
																										and Earn
																									</div>
																									<div class="elementor-slide-description">
																										{{$settings->site_name}} offers
																										you professional
																										trading tools
																										and analysis
																										<br>that gives
																										you the edge to
																										earn
																									</div>
																									<div class="elementor-button elementor-slide-button elementor-size-sm">
																										Get Started
																									</div>
																								</div>
																							</a>
																						</div>
																						
																						
																					<div class="elementor-repeater-item-fa61318 swiper-slide swiper-slide-duplicate swiper-slide-next swiper-slide-duplicate-prev" data-swiper-slide-index="0" style="width: 1349px;">
																							<div class="swiper-slide-bg">
																							</div>
																							<div class="elementor-background-overlay">
																							</div><a class="swiper-slide-inner" href="register">
																								<div class="swiper-slide-contents" style="display: none;">
																									<div class="elementor-slide-heading">
																										Optimal choice
																										for opening
																										<br>a trading
																										account
																									</div>
																									<div class="elementor-slide-description">
																										{{$settings->site_name}} allows
																										you to Trade
																										Major Pairs with
																										Minor Fees
																										<br>and achieve
																										the best returns
																									</div>
																									<div class="elementor-button elementor-slide-button elementor-size-sm">
																										Get Started
																									</div>
																								</div>
																							</a>
																						</div><div class="elementor-repeater-item-c72aadb swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="1" style="width: 1349px;">
																							<div class="swiper-slide-bg">
																							</div>
																							<div class="elementor-background-overlay">
																							</div><a class="swiper-slide-inner" href="register">
																								<div class="swiper-slide-contents" style="display: none;">
																									<div class="elementor-slide-heading">
																										We make it Risk
																										free <br>to
																										Trade
																										and Earn
																									</div>
																									<div class="elementor-slide-description">
																										{{$settings->site_name}} offers
																										you professional
																										trading tools
																										and analysis
																										<br>that gives
																										you the edge to
																										earn
																									</div>
																									<div class="elementor-button elementor-slide-button elementor-size-sm">
																										Get Started
																									</div>
																								</div>
																							</a>
																						</div></div>
																					<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2"></span></div>
																					<div class="elementor-swiper-button elementor-swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
																						<i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
																						<span class="elementor-screen-only">Previous</span>
																					</div>
																					<div class="elementor-swiper-button elementor-swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
																						<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
																						<span class="elementor-screen-only">Next</span>
																					</div>
																					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
																				<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
                                            
                                            <!-- TradingView Widget BEGIN -->
											<div class="tradingview-widget-container">
												<div class="tradingview-widget-container__widget"></div>
												<script type="text/javascript"
													src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
													async>
														{
															"symbols";[
																{
																	"proName": "FOREXCOM:SPXUSD",
																	"title": "S&P 500"
																},
																{
																	"proName": "FOREXCOM:NSXUSD",
																	"title": "US 100"
																},
																{
																	"proName": "FX_IDC:EURUSD",
																	"title": "EUR/USD"
																},
																{
																	"proName": "BITSTAMP:BTCUSD",
																	"title": "Bitcoin"
																},
																{
																	"proName": "BITSTAMP:ETHUSD",
																	"title": "Ethereum"
																},
																{
																	"description": "Tesla",
																	"proName": "NASDAQ:TSLA"
																},
																{
																	"description": "NFT",
																	"proName": "AMEX:NFTZ"
																}
															],
																"showSymbolLogo"; true,
																	"colorTheme"; "dark",
																		"isTransparent"; false,
																			"displayMode"; "adaptive",
																				"locale"; "en"
														}
													</script>
											</div>
											<!-- TradingView Widget END -->

											<section class="elementor-section elementor-top-section elementor-element elementor-element-dcc7501 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="dcc7501" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4616ec99" data-id="4616ec99" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-0f955a1 elementor-widget elementor-widget-ha-animated-text happy-addon ha-animated-text happy-addon-pro" data-id="0f955a1" data-element_type="widget" data-settings="{&quot;animation_delay&quot;:1500}" data-widget_type="ha-animated-text.default">
																		<div class="elementor-widget-container">
																			<h2 class="ha-animated-text-wrap cd-headline letters rotate-2 ha-animated-has-before-text" data-animation-delay="1500"><span class="ha-animated-before-text">WELCOME
																					TO</span><br><span style="color:#801E87"> {{$settings->site_name}}</span></h2>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-10d8456b elementor-widget elementor-widget-text-editor" data-id="10d8456b" data-element_type="widget" data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-text-editor elementor-clearfix">
																				<p>{{$settings->site_name}} - one of the best Forex
																					brokers on the market, for traders
																					all round the world. {{$settings->site_name}} offers
																					access to CFD trading, commodity
																					trading and indices with
																					award-winning Forex trading
																					conditions. As well as access to the
																					Forex market, {{$settings->site_name}} offers a
																					variety of promotions that can help
																					you become successful in FX trading.
																					<br>
																					{{$settings->site_name}} adopts sophisticated
																					algorithms to generate
																					unlimited binary option signals
																					which enable us trade with
																					top currency pairs like: EUR/USD, GBP/USD,
																					USD/JPY, EUR/GBP, AUD/USD, USD/CAD,
																					USD/CHF, NZD/USD, EUR/JPY, EUR/AUD
																					in different time frames without
																					limitations.
																					<br>This is more reason why
																					you should utilize the opportunity
																					of trading with us without
																					hesitation.</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div data-uael-partstyle="nasa" data-uael-partcolor="#000000" data-uael-partopacity="0" data-uael-partdirection="bottom" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3b1ec75f uael-particle-yes uael-particle-adv-no" data-id="3b1ec75f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-background-overlay"></div>
																<div class="uael-particle-wrapper js-is-enabled" id="uael-particle-3b1ec75f"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="570" height="524"></canvas></div>
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-0797603 elementor-widget elementor-widget-image" data-id="0797603" data-element_type="widget" data-widget_type="image.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-image">
																				<img src="{{asset('main/robot.jpg')}}" class="attachment-large size-large" alt="" loading="lazy" srcset="{{asset('main/robot.jpg')}} 1000w, {{asset('main/robot.jpg')}} 300w, {{asset('main/robot.jpg')}} 768w" sizes="(max-width: 1000px) 100vw, 1000px" width="1000" height="800">
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-5f0b163 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5f0b163" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4420bd7" data-id="4420bd7" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-09d8646 uael-heading-stack-none elementor-widget elementor-widget-uael-dual-color-heading" data-id="09d8646" data-element_type="widget" data-widget_type="uael-dual-color-heading.default">
																		<div class="elementor-widget-container">
																			<div class="uael-module-content uael-dual-color-heading">
																				<h2>
																					<span class="uael-before-heading"><span class="elementor-inline-editing uael-dual-heading-text uael-first-text" data-elementor-setting-key="before_heading_text" data-elementor-inline-editing-toolbar="basic">Why
																							Choose </span></span><span class="uael-adv-heading-stack"><span class="elementor-inline-editing uael-dual-heading-text uael-highlight-text" data-elementor-setting-key="second_heading_text" data-elementor-inline-editing-toolbar="basic">{{$settings->site_name}}</span></span>
																				</h2>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-401ce83 elementor-section-boxed elementor-section-height-default elementor-section-height-default animated fadeIn" data-id="401ce83" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-574c712" data-id="574c712" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-5c9631d elementor-widget elementor-widget-html" data-id="5c9631d" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="feature-item">
																						<div class="feature-icon">
																							<img src="{{asset('main/1.png')}}" alt="">
																						</div>
																						<div class="feature-text">
																							<h3>Safe and Secure</h3>
																							<p>You are 100% secured as
																								we are regulated by IFRB
																							</p>
																						</div>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-cb7545e elementor-widget elementor-widget-html" data-id="cb7545e" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="feature-item feature-p">
																						<div class="feature-icon">
																							<img src="{{asset('main/4.png')}}" alt="">
																						</div>
																						<div class="feature-text">
																							<h3>Instant Deposit</h3>
																							<p>Make Deposit Instantly
																								with your preferred
																								payment method</p>
																						</div>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-25cc1e8" data-id="25cc1e8" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-6760f39 elementor-widget elementor-widget-html" data-id="6760f39" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="feature-item feature-p">
																						<div class="feature-icon">
																							<img src="{{asset('main/2.png')}}" alt="">
																						</div>
																						<div class="feature-text">
																							<h3>Experts Support</h3>
																							<p>24/7 active support
																								from our<br> customer support agents
																								</p>
																						</div>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-0779f85 elementor-widget elementor-widget-html" data-id="0779f85" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="feature-item">
																						<div class="feature-icon">
																							<img src="{{asset('main/5.png')}}" alt="">
																						</div>
																						<div class="feature-text">
																							<h3>Secure Wallet</h3>
																							<p>Top security measures to
																								keep your account and
																								funds safe</p>
																						</div>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-35c7104" data-id="35c7104" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-59fe161 elementor-widget elementor-widget-html" data-id="59fe161" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="feature-item">
																						<div class="feature-icon">
																							<img src="{{asset('main/3.png')}}" alt="">
																						</div>
																						<div class="feature-text">
																							<h3>Responsive Design</h3>
																							<p>Our platform is highly
																								responsive<br> on all
																								devices</p>
																						</div>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-29aa48d elementor-widget elementor-widget-html" data-id="29aa48d" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="feature-item feature-p">
																						<div class="feature-icon">
																							<img src="{{asset('main/6.png')}}" alt="">
																						</div>
																						<div class="feature-text">
																							<h3>Trade Assistant</h3>
																							<p>Your trading is managed by a
																								group of {{$settings->site_name}} experts</p>
																						</div>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-5b542c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5b542c3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-5b79fd8" data-id="5b79fd8" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-df570f5 uael-heading-stack-none elementor-widget elementor-widget-uael-dual-color-heading" data-id="df570f5" data-element_type="widget" data-widget_type="uael-dual-color-heading.default">
																		<div class="elementor-widget-container">
																			<div class="uael-module-content uael-dual-color-heading">
																				<h2>
																					<span class="uael-before-heading"><span class="elementor-inline-editing uael-dual-heading-text uael-first-text" data-elementor-setting-key="before_heading_text" data-elementor-inline-editing-toolbar="basic">How
																						</span></span><span class="uael-adv-heading-stack"><span class="elementor-inline-editing uael-dual-heading-text uael-highlight-text" data-elementor-setting-key="second_heading_text" data-elementor-inline-editing-toolbar="basic">it
																						</span></span><span class="uael-after-heading"><span class="elementor-inline-editing uael-dual-heading-text uael-third-text" data-elementor-setting-key="after_heading_text" data-elementor-inline-editing-toolbar="basic">Works</span></span>
																				</h2>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-e07cdea elementor-widget elementor-widget-text-editor" data-id="e07cdea" data-element_type="widget" data-widget_type="text-editor.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-text-editor elementor-clearfix">
																				<p>Easy steps to success</p>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-545a816 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="545a816" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ab0f085" data-id="ab0f085" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-c474680 elementor-widget elementor-widget-html" data-id="c474680" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="service-item">
																						<div class="service-icon">
																							<img src="{{asset('main/6.png')}}" alt="">
																						</div>
																						<h3>Create an Account</h3>
																						<p>Register a free account in
																							less than 1 minute</p>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3f27e98" data-id="3f27e98" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-a620569 elementor-widget elementor-widget-html" data-id="a620569" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="service-item">
																						<div class="service-icon">
																							<img src="{{asset('main/7.png')}}" alt="">
																						</div>
																						<h3>Make Payments</h3>
																						<p>Make deposit into your
																							trading account</p>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-637385e" data-id="637385e" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-8184b98 elementor-widget elementor-widget-html" data-id="8184b98" data-element_type="widget" data-widget_type="html.default">
																		<div class="elementor-widget-container">
																			<center>
																				<div class="col-md-4 col-sm-6">
																					<div class="service-item">
																						<div class="service-icon">
																							<img src="{{asset('main/8.png')}}" alt="">
																						</div>
																						<h3>Choose a Plan</h3>
																						<p>Choose a Plan and Relax,
																							while we do the trading for
																							you</p>
																					</div>
																				</div>
																			</center>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-b1cd1ae elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b1cd1ae" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f389295" data-id="f389295" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-ff98853 uael-heading-stack-none elementor-widget elementor-widget-uael-dual-color-heading" data-id="ff98853" data-element_type="widget" data-widget_type="uael-dual-color-heading.default">
																		<div class="elementor-widget-container">
																			<div class="uael-module-content uael-dual-color-heading">
																				<h2>
																					<span class="uael-before-heading"><span class="elementor-inline-editing uael-dual-heading-text uael-first-text" data-elementor-setting-key="before_heading_text" data-elementor-inline-editing-toolbar="basic">Our
																							Investment
																						</span></span><span class="uael-adv-heading-stack"><span class="elementor-inline-editing uael-dual-heading-text uael-highlight-text" data-elementor-setting-key="second_heading_text" data-elementor-inline-editing-toolbar="basic">Plans</span></span>
																				</h2>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-57f0e696 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="57f0e696" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_bottom&quot;:&quot;book&quot;}">
												<div class="elementor-shape elementor-shape-bottom" data-negative="false">
													<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
														<path class="elementor-shape-fill" d="M194,99c186.7,0.7,305-78.3,306-97.2c1,18.9,119.3,97.9,306,97.2c114.3-0.3,194,0.3,194,0.3s0-91.7,0-100c0,0,0,0,0-0 L0,0v99.3C0,99.3,79.7,98.7,194,99z">
														</path>
													</svg>
												</div>
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-542d586c" data-id="542d586c" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-2b97b97c elementor-widget elementor-widget-price-table animated bounceIn" data-id="2b97b97c" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}" data-widget_type="price-table.default">
																		<div class="elementor-widget-container">

																			<div class="elementor-price-table">
																				<div class="elementor-price-table__header">
																					<h3 class="elementor-price-table__heading">
																						BRONZE</h3>

																					<span class="elementor-price-table__subheading">Min.
																						Possible deposit: $1,000
																						<br>Max.
																						Possible deposit: $4,999</span>
																				</div>

																				<div class="elementor-price-table__price">
																					<span class="elementor-price-table__currency elementor-currency--before">$</span>
																					<span class="elementor-price-table__integer-part" style="font-size:48px;">1000+</span>



																					<span class="elementor-price-table__period elementor-typo-excluded">Returns
																						in 1 week</span>
																				</div>

																				<ul class="elementor-price-table__features-list">
																					<li class="elementor-repeater-item-91f617b">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								At least $7,000
																								expected
																								return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-d6e2933">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								35% Daily return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-4e4d4c1">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/eye.png')}}" aria-hidden="true">
																							<span>
																								Referral percent: 35%
																							</span>
																						</div>
																					</li>
																				</ul>

																				<div class="elementor-price-table__footer">
																					<a class="elementor-price-table__button elementor-button elementor-size-md elementor-animation-pulse-grow" href="register">Join Plan</a>

																				</div>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-21594d42" data-id="21594d42" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-7637ab38 elementor-widget elementor-widget-price-table animated bounceIn" data-id="7637ab38" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}" data-widget_type="price-table.default">
																		<div class="elementor-widget-container">

																			<div class="elementor-price-table">
																				<div class="elementor-price-table__header">
																					<h3 class="elementor-price-table__heading">
																						SILVER</h3>

																					<span class="elementor-price-table__subheading">Min.
																						Possible deposit: $5,000
																						<br>Max. Possible deposit:
																						$24,999</span>
																				</div>

																				<div class="elementor-price-table__price">
																					<span class="elementor-price-table__currency elementor-currency--before">$</span>
																					<span class="elementor-price-table__integer-part" style="font-size:48px;">5,000+</span>



																					<span class="elementor-price-table__period elementor-typo-excluded">Returns
																						in 1 week</span>
																				</div>

																				<ul class="elementor-price-table__features-list">
																					<li class="elementor-repeater-item-91f617b">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								At least $35,000
																								expected
																								return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-d6e2933">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								35% Daily return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-4e4d4c1">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/eye.png')}}" aria-hidden="true">
																							<span>
																								Referral percent: 25%
																							</span>
																						</div>
																					</li>
																				</ul>

																				<div class="elementor-price-table__footer">
																					<a class="elementor-price-table__button elementor-button elementor-size-md elementor-animation-pulse-grow" href="register">Join Plan</a>

																				</div>
																			</div>

																			<div class="elementor-price-table__ribbon">
																				<div class="elementor-price-table__ribbon-inner">
																					Popular</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-63e48" data-id="63e48" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-39090155 elementor-widget elementor-widget-price-table animated bounceIn" data-id="39090155" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}" data-widget_type="price-table.default">
																		<div class="elementor-widget-container">

																			<div class="elementor-price-table">
																				<div class="elementor-price-table__header">
																					<h3 class="elementor-price-table__heading">
																						GOLD</h3>

																					<span class="elementor-price-table__subheading">Min.
																						Possible deposit: $25,000
																						<br>Max. Possible deposit:
																						$49,999</span>
																				</div>

																				<div class="elementor-price-table__price">
																					<span class="elementor-price-table__currency elementor-currency--before">$</span>
																					<span class="elementor-price-table__integer-part" style="font-size:48px;">25,000+</span>



																					<span class="elementor-price-table__period elementor-typo-excluded">Returns
																						in 1 week</span>
																				</div>

																				<ul class="elementor-price-table__features-list">
																					<li class="elementor-repeater-item-91f617b">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								At least $120,000
																								expected return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-d6e2933">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								35% Daily return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-4e4d4c1">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/eye.png')}}" aria-hidden="true">
																							<span>
																								Referral percent: 20%
																							</span>
																						</div>
																					</li>
																				</ul>

																				<div class="elementor-price-table__footer">
																					<a class="elementor-price-table__button elementor-button elementor-size-md elementor-animation-pulse-grow" href="register">Join Plan</a>

																				</div>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-1d5316d3" data-id="1d5316d3" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-4a6808f2 elementor-widget elementor-widget-price-table animated bounceIn" data-id="4a6808f2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;}" data-widget_type="price-table.default">
																		<div class="elementor-widget-container">

																			<div class="elementor-price-table">
																				<div class="elementor-price-table__header">
																					<h3 class="elementor-price-table__heading">
																						DIAMOND</h3>

																					<span class="elementor-price-table__subheading">Min.
																						Possible deposit: $50,000
																						<br>Max. Possible deposit:
																						$250,000</span>
																				</div>

																				<div class="elementor-price-table__price">
																					<span class="elementor-price-table__currency elementor-currency--before">$</span>
																					<span class="elementor-price-table__integer-part" style="font-size:48px;">50,000+</span>



																					<span class="elementor-price-table__period elementor-typo-excluded">Returns
																						in 1 week</span>
																				</div>

																				<ul class="elementor-price-table__features-list">
																					<li class="elementor-repeater-item-91f617b">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								At least $320,000
																								expected return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-d6e2933">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/star.png')}}" aria-hidden="true">
																							<span>
																								35% Daily return </span>
																						</div>
																					</li>
																					<li class="elementor-repeater-item-4e4d4c1">
																						<div class="elementor-price-table__feature-inner">
																							<img src="{{asset('main/eye.png')}}" aria-hidden="true">
																							<span>
																								Referral percent: 10%
																							</span>
																						</div>
																					</li>
																				</ul>

																				<div class="elementor-price-table__footer">
																					<a class="elementor-price-table__button elementor-button elementor-size-md elementor-animation-pulse-grow" href="register">Join Plan</a>

																				</div>
																			</div>

																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>


											<section class="elementor-section elementor-top-section elementor-element elementor-element-5726551 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="5726551" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:1700,&quot;url&quot;:&quot;https:\/\/tradefoxe.com\/wp-content\/uploads\/2020\/04\/bilder-2-of-10.jpg&quot;}],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}"><div class="elementor-background-slideshow swiper-container" dir="rtl"><div class="swiper-wrapper"><div class="elementor-background-slideshow__slide swiper-slide"><div class="elementor-background-slideshow__slide__image" style="background-image: url(&quot;https://tradefoxe.com/wp-content/uploads/2020/04/bilder-2-of-10.jpg&quot;);"></div></div></div></div>
												<div class="elementor-background-slideshow swiper-container" dir="rtl">
													<div class="swiper-wrapper">
														<div class="elementor-background-slideshow__slide swiper-slide">
															<div class="elementor-background-slideshow__slide__image" style="background-image: url(_https_/tradefoxe.com/wp-content/uploads/2020/04/bilder-2-of-10.html);">
															</div>
														</div>
													</div>
												</div>
												<div class="elementor-background-overlay"></div>
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8ea2337" data-id="8ea2337" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-8416709 elementor-view-default elementor-widget elementor-widget-icon" data-id="8416709" data-element_type="widget" data-widget_type="icon.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-icon-wrapper">
																				<div class="elementor-icon">
																					<i class="fa fa-user-o" aria-hidden="true"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-cf2cb92 elementor-widget elementor-widget-heading" data-id="cf2cb92" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h4 class="elementor-heading-title elementor-size-default">
																				<b>CUSTOMERS</b>
																			</h4>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-729e062 elementor-widget elementor-widget-heading" data-id="729e062" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h3 class="elementor-heading-title elementor-size-default">
																				<b>15,372</b>
																			</h3>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f0ef7a4" data-id="f0ef7a4" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-408cbcb elementor-view-default elementor-widget elementor-widget-icon" data-id="408cbcb" data-element_type="widget" data-widget_type="icon.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-icon-wrapper">
																				<div class="elementor-icon">
																					<i class="fa fa-trophy" aria-hidden="true"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-6a4e715 elementor-widget elementor-widget-heading" data-id="6a4e715" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h4 class="elementor-heading-title elementor-size-default">
																				<b>AWARD WINNER</b>
																			</h4>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-197b056 elementor-widget elementor-widget-heading" data-id="197b056" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h3 class="elementor-heading-title elementor-size-default">
																				<b>84</b>
																			</h3>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-887822c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="887822c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-d134704" data-id="d134704" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-9248373 uael-heading-stack-none elementor-widget elementor-widget-uael-dual-color-heading" data-id="9248373" data-element_type="widget" data-widget_type="uael-dual-color-heading.default">
																		<div class="elementor-widget-container">
																			<div class="uael-module-content uael-dual-color-heading">
																				<h2>
																					<span class="uael-before-heading"><span class="elementor-inline-editing uael-dual-heading-text uael-first-text" data-elementor-setting-key="before_heading_text" data-elementor-inline-editing-toolbar="basic">Our
																						</span></span><span class="uael-adv-heading-stack"><span class="elementor-inline-editing uael-dual-heading-text uael-highlight-text" data-elementor-setting-key="second_heading_text" data-elementor-inline-editing-toolbar="basic">Clients
																						</span></span><span class="uael-after-heading"><span class="elementor-inline-editing uael-dual-heading-text uael-third-text" data-elementor-setting-key="after_heading_text" data-elementor-inline-editing-toolbar="basic">Review</span></span>
																				</h2>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-63ca7df elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="63ca7df" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0b314b8" data-id="0b314b8" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-f6e4cad premium-testimonial-separator-row elementor-widget elementor-widget-premium-addon-testimonials" data-id="f6e4cad" data-element_type="widget" data-widget_type="premium-addon-testimonials.default">
																		<div class="elementor-widget-container">

																			<div class="premium-testimonial-box">
																				<div class="premium-testimonial-container">
																					<i class="fa fa-quote-left premium-testimonial-upper-quote"></i>
																					<div class="premium-testimonial-content-wrapper">
																						<div class="premium-testimonial-img-wrapper circle">
																							<img src="{{asset('main/team-s2.jpg')}}" alt="team-s2.jpg" class="premium-testimonial-person-image">
																						</div>

																						<div class="premium-testimonial-text-wrapper">
																							<div>
																								<p>If you are looking
																									for some awesome,
																									knowledgeable people
																									to work with in
																									trading, these are
																									the guys I
																									highly recommend.
																									Their friendliness
																									and result-driven
																									approach are what
																									I love about them.​
																								</p>
																							</div>
																						</div>

																						<div class="premium-testimonial-author-info">
																							<h3 class="premium-testimonial-person-name">
																								<span>Milla Davis</span>
																							</h3>

																							<span class="premium-testimonial-separator">-</span>

																							<h5 class="premium-testimonial-company-name">
																								<a class="premium-testimonial-company-link" href="\#" target="_blank">
																									<span>USA</span>
																								</a>
																							</h5>
																						</div>
																					</div>
																					<i class="fa fa-quote-right premium-testimonial-lower-quote"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-0b314b8" data-id="0b314b8" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-f6e4cad premium-testimonial-separator-row elementor-widget elementor-widget-premium-addon-testimonials" data-id="f6e4cad" data-element_type="widget" data-widget_type="premium-addon-testimonials.default">
																		<div class="elementor-widget-container">

																			<div class="premium-testimonial-box">
																				<div class="premium-testimonial-container">
																					<i class="fa fa-quote-left premium-testimonial-upper-quote"></i>
																					<div class="premium-testimonial-content-wrapper">
																						<div class="premium-testimonial-img-wrapper circle">
																							<img src="{{asset('main/images/Irene_Strong.jpg')}}" alt="Irene Strong" class="premium-testimonial-person-image">
																						</div>

																						<div class="premium-testimonial-text-wrapper">
																							<div>
																								<p>"Pleasantly surprised by the withdrawal of money. 
																									I didn't even expect them to arrive so quickly. 
																									Withdrawed to Electronic wallet. Good job guys!""
																								</p>
																							</div>
																						</div>

																						<div class="premium-testimonial-author-info">
																							<h3 class="premium-testimonial-person-name">
																								<span>Irene Strong</span>
																							</h3>

																							<span class="premium-testimonial-separator">-</span>

																							<h5 class="premium-testimonial-company-name">
																								<a class="premium-testimonial-company-link" href="\#" target="_blank">
																									<span>USA</span>
																								</a>
																							</h5>
																						</div>
																					</div>
																					<i class="fa fa-quote-right premium-testimonial-lower-quote"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f83b97f" data-id="f83b97f" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-b8ee101 premium-testimonial-separator-row elementor-widget elementor-widget-premium-addon-testimonials" data-id="b8ee101" data-element_type="widget" data-widget_type="premium-addon-testimonials.default">
																		<div class="elementor-widget-container">

																			<div class="premium-testimonial-box">
																				<div class="premium-testimonial-container">
																					<i class="fa fa-quote-left premium-testimonial-upper-quote"></i>
																					<div class="premium-testimonial-content-wrapper">
																						<div class="premium-testimonial-img-wrapper circle">
																							<img src="{{asset('main/images/Brooke_Cagle.jpg')}}" alt="Brooke Cagle" class="premium-testimonial-person-image">
																						</div>

																						<div class="premium-testimonial-text-wrapper">
																							<div>
																								<p>"
																								I will not praise {{$settings->site_name}} and convince someone that 
																								this is the best broker in the world. Let me just say that 
																								this is a normal broker with which you can not only trade 
																								comfortably, but also earn money. In my understanding, 
																								“normal” is an honest broker with adequate commissions. 
																								For a couple of years I traded from a silver account, but 
																								in the fall of 2021 I switched to Gold. Deposits and withdrawals 
																								via electronic wallets are almost instantaneous if you’re familiar with them"</p>
																							</div>
																						</div>

																						<div class="premium-testimonial-author-info">
																							<h3 class="premium-testimonial-person-name">
																								<span>Brooke Cagle</span>
																							</h3>

																							<span class="premium-testimonial-separator">-</span>

																							<h5 class="premium-testimonial-company-name">
																								<a class="premium-testimonial-company-link" href="\#" target="_blank">
																									<span>UK</span>
																								</a>
																							</h5>
																						</div>
																					</div>
																					<i class="fa fa-quote-right premium-testimonial-lower-quote"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-f83b97f" data-id="f83b97f" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-b8ee101 premium-testimonial-separator-row elementor-widget elementor-widget-premium-addon-testimonials" data-id="b8ee101" data-element_type="widget" data-widget_type="premium-addon-testimonials.default">
																		<div class="elementor-widget-container">

																			<div class="premium-testimonial-box">
																				<div class="premium-testimonial-container">
																					<i class="fa fa-quote-left premium-testimonial-upper-quote"></i>
																					<div class="premium-testimonial-content-wrapper">
																						<div class="premium-testimonial-img-wrapper circle">
																							<img src="{{asset('main/team-s10.jpg')}}" alt="team-s10.jpg" class="premium-testimonial-person-image">
																						</div>

																						<div class="premium-testimonial-text-wrapper">
																							<div>
																								<p>"For years I was
																									trying out all the
																									different
																									ways to make extra
																									money that I was
																									coming across only
																									to soon find out
																									that they all were
																									excessively time-
																									consuming and
																									resulted in very
																									little profit or
																									none at all. Now
																									however, I am proud
																									and happy to be
																									making about 2
																									thousand Dollars a
																									week from the
																									comfort of my home
																									using {{$settings->site_name}}
																									Platform..."</p>
																							</div>
																						</div>

																						<div class="premium-testimonial-author-info">
																							<h3 class="premium-testimonial-person-name">
																								<span>Stella
																									Jones</span>
																							</h3>

																							<span class="premium-testimonial-separator">-</span>

																							<h5 class="premium-testimonial-company-name">
																								<a class="premium-testimonial-company-link" href="\#" target="_blank">
																									<span>UK</span>
																								</a>
																							</h5>
																						</div>
																					</div>
																					<i class="fa fa-quote-right premium-testimonial-lower-quote"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ceb9c73" data-id="ceb9c73" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-6a5e5ca premium-testimonial-separator-row elementor-widget elementor-widget-premium-addon-testimonials" data-id="6a5e5ca" data-element_type="widget" data-widget_type="premium-addon-testimonials.default">
																		<div class="elementor-widget-container">

																			<div class="premium-testimonial-box">
																				<div class="premium-testimonial-container">
																					<i class="fa fa-quote-left premium-testimonial-upper-quote"></i>
																					<div class="premium-testimonial-content-wrapper">
																						<div class="premium-testimonial-img-wrapper circle">
																							<img src="{{asset('main/team-s8.jpg')}}" alt="team-s8.jpg" class="premium-testimonial-person-image">
																						</div>

																						<div class="premium-testimonial-text-wrapper">
																							<div>
																								<p>I'm happy to work
																									with the super
																									amazing
																									experts on {{$settings->site_name}}, I had a tough
																									time trading on my
																									own and I loosed a
																									lot of money, THANKS
																									to this platform for
																									restoring life to
																									me!</p>
																							</div>
																						</div>

																						<div class="premium-testimonial-author-info">
																							<h3 class="premium-testimonial-person-name">
																								<span>Jacob
																									Heinrich</span>
																							</h3>

																							<span class="premium-testimonial-separator">-</span>

																							<h5 class="premium-testimonial-company-name">
																								<a class="premium-testimonial-company-link" href="\#" target="_blank">
																									<span>Canada</span>
																								</a>
																							</h5>
																						</div>
																					</div>
																					<i class="fa fa-quote-right premium-testimonial-lower-quote"></i>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>

											<section class="elementor-section elementor-top-section elementor-element elementor-element-afbf8da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="afbf8da" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-64f687a" data-id="64f687a" data-element_type="column">
															<div class="elementor-column-wrap">
																<div class="elementor-widget-wrap">
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-4c1fec6e elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4c1fec6e" data-element_type="section">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-58fa9fdc" data-id="58fa9fdc" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-e424f86 elementor-widget elementor-widget-heading" data-id="e424f86" data-element_type="widget" data-widget_type="heading.default">
																		<div class="elementor-widget-container">
																			<h4 class="elementor-heading-title elementor-size-default">
																				Qualified In :</h4>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-50d480b" data-id="50d480b" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<section class="elementor-section elementor-inner-section elementor-element elementor-element-263b31b8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="263b31b8" data-element_type="section">
																		<div class="elementor-container elementor-column-gap-default">
																			<div class="elementor-row">
																				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7c84488b" data-id="7c84488b" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-4d8d7bc5 elementor-widget elementor-widget-image" data-id="4d8d7bc5" data-element_type="widget" data-widget_type="image.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-image">
																										<img src="{{asset('main/iqoption1.jpg')}}" class="attachment-large size-large" alt="" loading="lazy" width="200" height="100">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7d6d2a47" data-id="7d6d2a47" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-2ec6cab5 elementor-widget elementor-widget-image" data-id="2ec6cab5" data-element_type="widget" data-widget_type="image.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-image">
																										<img src="{{asset('main/olymptrade2.jpg')}}" class="attachment-large size-large" alt="" loading="lazy" width="200" height="100">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-14dbac3b" data-id="14dbac3b" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-28b0b664 elementor-widget elementor-widget-image" data-id="28b0b664" data-element_type="widget" data-widget_type="image.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-image">
																										<img src="{{asset('main/expertoption6.jpg')}}" class="attachment-large size-large" alt="" loading="lazy" width="200" height="100">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-45b0540b" data-id="45b0540b" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-1065987d elementor-widget elementor-widget-image" data-id="1065987d" data-element_type="widget" data-widget_type="image.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-image">
																										<img src="{{asset('main/binomo3.jpg')}}" class="attachment-large size-large" alt="" loading="lazy" width="200" height="100">
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</section>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>



							</div><!-- .entry-content .clear -->



						</article><!-- #post-## -->





					</main><!-- #main -->


				</div><!-- #primary -->



			</div> <!-- ast-container -->

		</div><!-- #content -->



		<footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
			<div class="footer-width-fixer">
				<div data-elementor-type="wp-post" data-elementor-id="1085" class="elementor elementor-1085" data-elementor-settings="[]">
					<div class="elementor-inner">
						<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-4900071 elementor-section-stretched elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4900071" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1349px; left: 0px;">
								<div class="elementor-background-overlay"></div>
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-675edfe" data-id="675edfe" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-530aacf elementor-widget elementor-widget-heading" data-id="530aacf" data-element_type="widget" data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h3 class="elementor-heading-title elementor-size-default">
																Fast Account Opening in 2 minutes!</h3>
														</div>
													</div>
													<div class="elementor-element elementor-element-f9d7839 elementor-widget elementor-widget-text-editor" data-id="f9d7839" data-element_type="widget" data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<div class="elementor-text-editor elementor-clearfix">
																<p>GET STARTED BY CREATING A FREE ACCOUNT NOW</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-661d0f9" data-id="661d0f9" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-df64028 elementor-button-info elementor-align-right elementor-tablet-align-right elementor-mobile-align-left elementor-widget elementor-widget-button" data-id="df64028" data-element_type="widget" data-widget_type="button.default">
														<div class="elementor-widget-container">
															<div class="elementor-button-wrapper">
																<a href="register" class="elementor-button-link elementor-button elementor-size-sm" role="button">
																	<span class="elementor-button-content-wrapper">
																		<span class="elementor-button-text">GET
																			STARTED</span>
																	</span>
																</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-782282b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="782282b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-background-overlay"></div>
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-46c341f" data-id="46c341f" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-91842e4 elementor-widget elementor-widget-image" data-id="91842e4" data-element_type="widget" data-widget_type="image.default">
														<div class="elementor-widget-container">
															<div class="elementor-image">
																<img src="{{asset('main/logo-white.png')}}" title="logo" alt="logo" width="220px;">
															</div>
														</div>
													</div>
													<div class="elementor-element elementor-element-06ae5d2 elementor-widget elementor-widget-text-editor" data-id="06ae5d2" data-element_type="widget" data-widget_type="text-editor.default">
														<div class="elementor-widget-container">
															<div class="elementor-text-editor elementor-clearfix">
																<p>{{$settings->site_name}} is one of the fastest growing online trading brands
																	in the world.
																	{{$settings->site_name}} has grown massively, and now has
																	thousands of users and counting!</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5278d99" data-id="5278d99" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-1b93cb9 elementor-widget elementor-widget-heading" data-id="1b93cb9" data-element_type="widget" data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Our Services</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-31f673c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="31f673c" data-element_type="widget" data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																		<img src="{{asset('main/n.png')}}" aria-hidden="true"> </span>
																	<span class="elementor-icon-list-text">FX
																		TRADING</span>
																</li>
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																		<img src="{{asset('main/n.png')}}" aria-hidden="true"> </span>
																	<span class="elementor-icon-list-text">MARKET
																		ANALYSIS</span>
																</li>
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																		<img src="{{asset('main/n.png')}}" aria-hidden="true"> </span>
																	<span class="elementor-icon-list-text">FX
																		INVESTMENTS</span>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ae1b48e" data-id="ae1b48e" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-2078b37 elementor-widget elementor-widget-heading" data-id="2078b37" data-element_type="widget" data-widget_type="heading.default">
														<div class="elementor-widget-container">
															<h4 class="elementor-heading-title elementor-size-default">
																Get In Touch</h4>
														</div>
													</div>
													<div class="elementor-element elementor-element-cb3b07f elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="cb3b07f" data-element_type="widget" data-widget_type="icon-list.default">
														<div class="elementor-widget-container">
															<ul class="elementor-icon-list-items">
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																	<i class="fa fa-map-marker" aria-hidden="true"></i>
																	<span class="elementor-icon-list-text">1710 13th St, San Diego, CA</span>
																</li>
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																	<i class="fa fa-phone-square" aria-hidden="true"></i>
																	<span class="elementor-icon-list-text">{{$settings->contact_number}}</span>
																</li>
																<li class="elementor-icon-list-item">
																	<span class="elementor-icon-list-icon">
																	<i class="fa fa-envelope-o" aria-hidden="true"></i>
																	<span class="elementor-icon-list-text">{{$settings->contact_email}}</span>
																</li>

															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8d27873" data-id="8d27873" data-element_type="column">
											<div class="elementor-column-wrap">
												<div class="elementor-widget-wrap">
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="elementor-section elementor-top-section elementor-element elementor-element-6eebdb6 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6eebdb6" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
								<div class="elementor-container elementor-column-gap-default">
									<div class="elementor-row">
										<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f065b8" data-id="4f065b8" data-element_type="column">
											<div class="elementor-column-wrap elementor-element-populated">
												<div class="elementor-widget-wrap">
													<div class="elementor-element elementor-element-64c7e7f elementor-widget elementor-widget-copyright" data-id="64c7e7f" data-element_type="widget" data-widget_type="copyright.default">
														<div class="elementor-widget-container">
															<div class="hfe-copyright-wrapper">
																<span>Copyright © All Rights Reserved</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
			

		</footer>


	</div><!-- #page -->


	<link rel="stylesheet" id="premium-addons-css" href="{{asset('main/premium-addons_002.css')}}" media="all">
	
	<script id="astra-theme-js-js-extra">
		var astra = { "break_point": "2020", "isRtl": "" };
	</script>
	<script src="{{asset('main/style.js')}}" id="astra-theme-js-js"></script>
	<script src="{{asset('main/anime.js')}}" id="anime-js"></script>
	<script src="{{asset('main/animated-text.js')}}" id="animated-text-js"></script>
	<script src="{{asset('main/imagesloaded.js')}}" id="imagesloaded-js"></script>
	<script id="happy-elementor-addons-js-extra">
		var HappyLocalize = { "ajax_url": "https:\/\/tradefoxe.com\/wp-admin\/admin-ajax.php", "nonce": "0771ec9b02" };
	</script>
	<script src="{{asset('main/happy-addons.js')}}" id="happy-elementor-addons-js"></script>
	<script id="happy-addons-pro-js-extra">
		var HappyProLocalize = { "ajax_url": "https:\/\/tradefoxe.com\/wp-admin\/admin-ajax.php", "nonce": "1e15da1107" };
		var HappyProLocalize = { "ajax_url": "https:\/\/tradefoxe.com\/wp-admin\/admin-ajax.php", "nonce": "1e15da1107" };
	</script>
	<script src="{{asset('main/happy-addons-pro.js')}}" id="happy-addons-pro-js"></script>
	<script id="astra-addon-js-js-extra">
		var astraAddon = { "sticky_active": "", "header_main_stick": "", "header_above_stick": "0", "header_below_stick": "0", "stick_header_meta": "", "header_main_stick_meta": "", "header_above_stick_meta": "", "header_below_stick_meta": "", "sticky_header_on_devices": "both", "sticky_header_style": "fade", "sticky_hide_on_scroll": "", "break_point": "2020", "tablet_break_point": "921", "mobile_break_point": "544", "header_main_shrink": "1", "header_logo_width": "", "responsive_header_logo_width": { "desktop": "187", "tablet": "", "mobile": "" }, "stick_origin_position": "", "site_layout": "", "site_content_width": "1240", "site_layout_padded_width": "1200", "site_layout_box_width": "1200" };
	</script>
	<script src="{{asset('main/astra-addon-5f4bbe88dcbe35-54608992.js')}}" id="astra-addon-js-js"></script>
	<script src="{{asset('main/wp-embed.js')}}" id="wp-embed-js"></script>
	<script src="{{asset('main/frontend-modules.js')}}" id="elementor-frontend-modules-js"></script>
	<script src="{{asset('main/jquery_002.js')}}" id="elementor-sticky-js"></script>
	<script id="elementor-pro-frontend-js-before">
		var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/tradefoxe.com\/wp-admin\/admin-ajax.php", "nonce": "04515e4480", "i18n": { "toc_no_headings_found": "No headings were found on this page." }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "google": { "title": "Google+", "has_counter": true }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "delicious": { "title": "Delicious" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" } };
	</script>
	<script src="{{asset('main/frontend_003.js')}}" id="elementor-pro-frontend-js"></script>
	<script src="{{asset('main/position.js')}}" id="jquery-ui-position-js"></script>
	<script src="{{asset('main/dialog.js')}}" id="elementor-dialog-js"></script>
	<script src="{{asset('main/waypoints.js')}}" id="elementor-waypoints-js"></script>
	<script src="{{asset('main/swiper.js')}}" id="swiper-js"></script>
	<script src="{{asset('main/share-link.js')}}" id="share-link-js"></script>
	<script id="elementor-frontend-js-extra">
		var uael_particles_script = { "uael_particles_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/ultimate-elementor\/assets\/min-js\/uael-particles.min.js", "particles_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/ultimate-elementor\/assets\/lib\/particles\/particles.min.js" };
		var papro_addons = { "url": "https:\/\/tradefoxe.com\/wp-admin\/admin-ajax.php", "particles_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/particles.min.js", "kenburns_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/cycle.min.js", "gradient_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/premium-gradient.min.js", "parallax_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/premium-addons-pro\/assets\/frontend\/min-js\/premium-parallax.min.js", "lottie_url": "https:\/\/tradefoxe.com\/wp-content\/plugins\/premium-addons-for-elementor\/assets\/frontend\/min-js\/lottie.min.js" };
	</script>
	<script id="elementor-frontend-js-before">
		var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "version": "3.0.4", "is_static": false, "legacyMode": { "elementWrappers": true }, "urls": { "assets": "https:\/\/tradefoxe.com\/wp-content\/plugins\/elementor\/assets\/" }, "settings": { "page": [], "editorPreferences": [], "general": [] }, "kit": { "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 15, "title": "TradeFoxe%20%E2%80%93%20Online%20Investment%20and%20Secured%20Trading%20Platform", "excerpt": "", "featuredImage": false } };
	</script>
	<script src="{{asset('main/frontend_002.js')}}" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span><span id="elementor-device-mode" class="elementor-screen-only"></span>


	<script src="{{asset('main/underscore.js')}}" id="underscore-js"></script>
	<script id="wp-util-js-extra">
		var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };
	</script>
	<script src="{{asset('main/wp-util.js')}}" id="wp-util-js"></script>
	<script id="wpforms-elementor-js-extra">
		var wpformsElementorVars = { "recaptcha_type": "v2" };
	</script>
	<script src="{{asset('main/frontend.js')}}" id="wpforms-elementor-js"></script>
    <script>
		/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }, !1);
	</script>
	<div id="UuNikOQ-1599990576615" class="" style="display: block !important;"><iframe id="LHtniMz-1599990576620"
			src="about:blank" scrolling="no" title="chat widget"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: auto !important; position: static !important; border: 0px none !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 350px !important; height: 520px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; display: none !important;"
			class="" frameborder="0"></iframe><iframe id="j8P2YoR-1599990576622" src="about:blank" scrolling="no"
			title="chat widget"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: auto 20px 20px auto !important; position: fixed !important; border: 0px none !important; padding: 0px !important; transition-property: none !important; z-index: 1000001 !important; cursor: auto !important; float: none !important; pointer-events: auto !important; box-shadow: rgba(0, 0, 0, 0.16) 0px 2px 10px 0px !important; height: 60px !important; min-height: 60px !important; max-height: 60px !important; width: 60px !important; min-width: 60px !important; max-width: 60px !important; border-radius: 50% !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; margin: 0px !important; display: block !important;"
			class="" frameborder="0"></iframe><iframe id="KJRxiFV-1599990576623" src="about:blank" scrolling="no"
			title="chat widget"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: auto 15px 60px auto !important; position: fixed !important; border: 0px none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; z-index: 1000003 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; width: 21px !important; max-width: 21px !important; min-width: 21px !important; height: 21px !important; max-height: 21px !important; min-height: 21px !important; display: block !important;"
			class="" frameborder="0"></iframe><iframe id="VgKeyzs-1599990576624" src="about:blank" scrolling="no"
			title="chat widget"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: auto 0px 30px auto !important; position: fixed !important; border: 0px none !important; padding: 0px !important; transition-property: none !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; transform: rotate(0deg) translateZ(0px) !important; transform-origin: 0px center 0px !important; width: 124px !important; max-width: 124px !important; min-width: 124px !important; height: 95px !important; max-height: 95px !important; min-height: 95px !important; z-index: 1000002 !important; margin: 0px !important; display: none !important;"
			class="" frameborder="0"></iframe>
		<div style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: 0px auto auto 0px !important; position: absolute !important; border: 0px none !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 100% !important; display: none !important; z-index: 1000001 !important; cursor: move !important; float: left !important; border-radius: unset !important; pointer-events: auto !important;"
			class=""></div>
		<div id="ep3x4IA-1599990576615"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: 0px auto auto 0px !important; position: absolute !important; border: 0px none !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 6px !important; height: 100% !important; display: block !important; z-index: 999998 !important; cursor: w-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"
			class=""></div>
		<div id="nCwgWM1-1599990576616"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: 0px 0px auto auto !important; position: absolute !important; border: 0px none !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 100% !important; height: 6px !important; display: block !important; z-index: 999998 !important; cursor: n-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"
			class=""></div>
		<div id="ABoE8lw-1599990576616"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: 0px auto auto 0px !important; position: absolute !important; border: 0px none !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 12px !important; height: 12px !important; display: block !important; z-index: 999998 !important; cursor: nw-resize !important; float: none !important; border-radius: unset !important; pointer-events: auto !important;"
			class=""></div><iframe id="cBCvImD-1599990576691" src="about:blank" scrolling="no" title="chat widget"
			style="outline: currentcolor none medium !important; visibility: visible !important; resize: none !important; box-shadow: none !important; overflow: visible !important; background: transparent none repeat scroll 0% 0% !important; opacity: 1 !important; inset: auto 20px 100px auto !important; position: fixed !important; border: 0px none !important; min-height: auto !important; min-width: auto !important; max-height: none !important; max-width: none !important; padding: 0px !important; margin: 0px !important; transition-property: none !important; transform: none !important; width: 378px !important; z-index: 999999 !important; cursor: auto !important; float: none !important; border-radius: unset !important; pointer-events: auto !important; display: block !important; height: 188px !important;"
			class="" frameborder="0"></iframe>
	</div>



</body></html>