(self.webpackChunktradingview=self.webpackChunktradingview||[]).push([[87461],{48636:e=>{e.exports={"css-value-copyright-transition-params":".6s 0s cubic-bezier(.4, .01, .22, 1)","css-value-copyright-transition-params-half-time":".3s 0s cubic-bezier(.4, .01, .22, 1)",label:"label-dkyS18j2",logoWrap:"logoWrap-dkyS18j2",start:"start-dkyS18j2",end:"end-dkyS18j2",snap:"snap-dkyS18j2",top:"top-dkyS18j2",bottom:"bottom-dkyS18j2",chartBottom:"chartBottom-dkyS18j2",large:"large-dkyS18j2"}},848546:()=>{},351079:(e,t,n)=>{"use strict";n.d(t,{CopyrightPosition:()=>o,createCopyrightLabel:()=>s});var o,r=n(497754),a=n(995683),i=n(48636);function s({svgText:e,icon:t,theme:n,url:s,verticalPosition:c=o.Vertical.Bottom,horizontalPosition:l=o.Horizontal.End,snapToEdge:d=!0,isLarge:m=!1}){const u=(0,a.mergeThemes)(i,n);let p;s?(p=document.createElement("a"),p.href=s,p.target="_blank",p.rel="noopener noreferrer"):p=document.createElement("span"),p.className=r(u.label,l===o.Horizontal.Start&&u.start,l===o.Horizontal.End&&u.end,c===o.Vertical.Top&&u.top,c===o.Vertical.Bottom&&u.bottom,c===o.Vertical.ChartBottom&&u.chartBottom,d&&u.snap,m&&u.large,"js-copyright-label");const g=document.createElement("span");g.className=u.logoWrap,g.innerHTML=t;const h=document.createElement("span");return h.className=u.svgTextWrap,h.innerHTML=e,p.append(g,h),p}!function(e){let t,n;!function(e){e[e.Bottom=0]="Bottom",e[e.Top=1]="Top",e[e.ChartBottom=2]="ChartBottom"}(t=e.Vertical||(e.Vertical={})),function(e){e[e.Start=0]="Start",e[e.End=1]="End"}(n=e.Horizontal||(e.Horizontal={}))}(o||(o={}))},23580:(e,t,n)=>{"use strict";function o(e,t,o){return"lentaru"===e?Promise.all([n.e(33413),n.e(1523)]).then(n.bind(n,466672)).then((e=>e.getLentaCopyrightData())):"cmoneycomtw"===e?Promise.all([n.e(72622),n.e(20860),n.e(42091)]).then(n.bind(n,20922)).then((e=>e.getCmoneycomtwCopyrightData(t,o))):Promise.all([n.e(72622),n.e(53259)]).then(n.bind(n,340338)).then((e=>e.getTradingViewCopyrightData(t,o)))}n.d(t,{getCustomerCopyrightData:()=>o})},797638:(e,t,n)=>{"use strict";n.d(t,{createEmbedWidgetWrapper:()=>i});n(848546);var o=n(588537),r=n(351079),a=n(23580);function i(e,t,n={}){if(null===e.parentElement)return console.warn("Can not wrap 'elWidgetContainer' because it has no parentElement"),e;let i=null,s=document.querySelector(".js-embed-widget-body");const c=null!==s;if(c){s=(0,o.ensureNotNull)(s),i=(0,o.ensureNotNull)(s.parentElement);let e=document.querySelector(".js-embed-widget-head");null===e&&(e=document.createElement("div"),e.classList.add("tv-embed-widget-wrapper__header"),e.classList.add("js-embed-widget-head"),i.insertBefore(e,s))}else i=document.createElement("div"),i.classList.add("tv-embed-widget-wrapper"),i.innerHTML='<div class="tv-embed-widget-wrapper__header js-embed-widget-head"></div><div class="tv-embed-widget-wrapper__body js-embed-widget-body"></div>',s=i.querySelector(".js-embed-widget-body");if(n.overflowAuto&&s.classList.add("tv-embed-widget-wrapper__body--overflow_auto"),
n.showBorderOnTransparent&&s.classList.add("tv-embed-widget-wrapper__body--border-on-transparent"),!n.isWhiteLabel){const e=!document.documentElement.classList.contains("is-transparent")||Boolean(n.showBorderOnTransparent);(0,a.getCustomerCopyrightData)(n.customer,n.locale,t).then((t=>{(0,o.ensureNotNull)(s).appendChild((0,r.createCopyrightLabel)({snapToEdge:e,...n.copyrightOptions,...t}))}))}return c||(e.parentElement.insertBefore(i,e),s.appendChild(e)),e}},128710:(e,t,n)=>{n(778785).setClasses();var o=n(677748).whenDocumentReady,r=n(975420).initGA,a=n(826384).handleTVLinksClick;o((()=>{r(),a()}))},788065:(e,t,n)=>{"use strict";function o(e,t){const n=t||window.locale||"en";let o=e[n]?e[n]:e.en;return o="tradingview.com"===o?"www.tradingview.com":o,o?document.location.protocol+"//"+o:""}n.d(t,{determineBaseUrl:()=>o})},327265:(e,t,n)=>{"use strict";n.d(t,{getSymbolPagePath:()=>s,makeSymbolChartUrl:()=>g,makeSymbolPageUrl:()=>p,makeSymbolTechnicalsPageUrl:()=>h,makeTemplateSymbolUrl:()=>m});var o=n(102901),r=n(788065),a=n(179380),i=n(519073);function s(e,t){return l(d(e,t),c(e))}function c(e){const t={shortName:e.shortName,exchange:e.exchange,proName:e.proName,type:e.type};return e.proName&&e.proName.includes(":")&&([t.exchange,t.shortName]=e.proName.split(":")),t}function l(e,t){const n=encodeURIComponent(t.shortName||""),o=encodeURIComponent(t.exchange||""),r=encodeURIComponent(t.proName||"");return e.replace("{tvexchange}",o).replace("{tvsymbol}",n).replace("{tvprosymbol}",r)}function d(e,t=""){const n=["UKOIL","USOIL","XAGAUD","XAGCAD","XAGCHF","XAGEUR","XAGGBP","XAGHKD","XAGJPY","XAGUSD","XAUAUD","XAUCAD","XAUCHF","XAUEUR","XAUGBP","XAUHKD","XAUJPY","XAUNZD","XAUUSD","XPDUSD","XPTUSD","SPX"];return e.type&&["spread","expression"].includes(e.type)?e.proName?`/symbols/spread/{tvprosymbol}/${t}`:`/${t}`:void 0===e.shortName&&void 0===e.proName?(console.warn("Params missed"),"/"):y(e)?e.exchange?"/symbols/{tvsymbol}/?exchange={tvexchange}":`/symbols/{tvsymbol}/${t}`:e.exchange||e.proName?e.shortName&&n.includes(e.shortName)?`/symbols/{tvsymbol}/${t}`:`/symbols/{tvexchange}-{tvsymbol}/${t}`:`/symbols/{tvsymbol}/${t}`}function m(e,t){let n=e;if(!/{tvsymbol}|{tvexchange}|{tvprosymbol}/.test(e)){let o="tvprosymbol";void 0===t.proName&&(o="tvsymbol"),n=`${e}?tvwidgetsymbol={${o}}`}const o=l(n,c(t));if(!(0,a.isSafeUrl)(o))throw new Error(`The symbol URL ${o} is not allowed.`);return o}function u(e,t,n,a){const i=(window.locale_domains?(0,r.determineBaseUrl)(window.locale_domains,a):window.location.origin)+l(e,c(t));return n?(0,o.addUtmToUrl)(i,n):i}function p(e,t,n,o){return u(d(e,o),e,t,n)}function g(e,t){return u("/chart/?symbol={tvprosymbol}",e,t)}function h(e,t,n){return p(e,t,n,"technicals/")}function y(e){return!!e.type&&(t=e.type,n=e.typespecs,"forex"===t||(0,i.hasCryptoTypespec)(t,null!=n?n:[]));var t,n}},184601:(e,t,n)=>{"use strict";n.r(t),n.d(t,{htmlEscape:()=>a,removeTags:()=>i,removeSpaces:()=>s,capitalizeFirstLetterInWord:()=>c});const o=/[<"'&>]/g,r=e=>`&#${e.charCodeAt(0)};`;function a(e){
return e.replace(o,r)}function i(e=""){return e.replace(/(<([^>]+)>)/gi,"")}function s(e=""){return e.replace(/\s+/g,"")}function c(e=""){return e.replace(/\b\w/g,(e=>e.toUpperCase()))}},514998:(e,t,n)=>{"use strict";function o(e){return decodeURIComponent(e.replace(/\+/g," ")).replace(/<\/?[^>]+(>|$)/g,"")}function r(e){const t=/([^&=]+)=?([^&]*)/g,n={};if(!e)return n;let r=t.exec(e);for(;r;)n[o(r[1])]=o(r[2]),r=t.exec(e);return n}function a(){return r(window.location.search.substring(1))}function i(){return r(window.location.hash.split("#")[1])}function s(e){const t=[];for(const n in e)e.hasOwnProperty(n)&&null!=e[n]&&t.push({key:n,pair:encodeURIComponent(n)+"="+encodeURIComponent(e[n])});return t.sort(((e,t)=>e.key>t.key?1:e.key<t.key?-1:0)).map((e=>e.pair)).join("&")}n.r(t),n.d(t,{decode:()=>o,getQueryParams:()=>r,getUrlParams:()=>a,getHashUrlParams:()=>i,createUrlParams:()=>s})},179380:(e,t,n)=>{"use strict";function o(e){const t=new URL(e,document.baseURI);return c(t)&&s(t)&&i(t)}function r(e){const t=new URL(e,document.baseURI);return s(t)&&i(t)}function a(e){return!e.split(/(\s+)/).filter((e=>e.trim().length>0)).some((e=>{try{const t=new URL(e);return!(!t||!t.hostname.length)&&!r(e)}catch(e){return!1}}))}n.d(t,{isInternalUrl:()=>o,isSafeUrl:()=>r,validateUrlsInText:()=>a,isInternalHost:()=>l});const i=e=>!e.username,s=e=>"http:"===e.protocol||"https:"===e.protocol,c=e=>e.hostname===location.hostname||!/^\d+\.\d+\.\d+\.\d+$/.test(e.hostname)&&l(e.hostname);function l(e,t=window.location.hostname){const n="."===t.slice(-1)?3:2,o=t.toLowerCase().split(".").slice(-n),r=e.toLowerCase().split(".").slice(-o.length);return o.join(".")===r.join(".")}},102901:(e,t,n)=>{"use strict";n.d(t,{addUtmToUrl:()=>r});var o=n(114939);function r(e,t){if(!/([a-zA-Z0-9.-]*tradingview.com)|localhost/.test(e))return e;const n=(0,o.buildUtmQueryString)(t);if(""===n)return e;const r=e.indexOf("?"),a=e.indexOf("#"),i=-1!==a;if(-1!==r&&(!i||r<a)){return`${e.slice(0,r)}?${i?e.slice(r+1,a):e.slice(r+1)}&${n}${i?e.slice(a):""}`}if(i){return`${e.slice(0,a)}?${n}${e.slice(a)}`}return`${e}?${n}`}},114939:(e,t,n)=>{"use strict";n.d(t,{filterUtmInfo:()=>i,buildUtmQueryString:()=>s,buildUtmQueryStringFromUrlParams:()=>c});var o=n(514998),r=n(184601);const a=["utm_source","utm_medium","utm_campaign"];function i(e){const t={};return a.forEach((n=>{const o=e[n];"string"==typeof o&&""!==o&&(t[n]=(0,r.htmlEscape)(o))})),t}function s(e,t=!1){const n=(0,o.createUrlParams)(e);return n&&t?"?"+n:n}function c(e){return s(i((0,o.getUrlParams)()),e)}},677748:(e,t,n)=>{"use strict";function o(e,t=!1){"loading"!==document.readyState?t?setTimeout((()=>e()),1):e():document.addEventListener("DOMContentLoaded",(()=>e()))}n.d(t,{whenDocumentReady:()=>o,whenDocumentReadyPromise:()=>r});const r=new Promise((e=>{o(e)}))},365516:(e,t,n)=>{"use strict";function o(e){return e.replace("{{shortName}}","{tvsymbol}").replace("{{proName}}","{tvprosymbol}").replace("{{symbol}}","{tvsymbol}").replace("{{exchange}}","{tvexchange}")}n.d(t,{replaceOldPlaceholders:()=>o})},
826384:(e,t,n)=>{"use strict";n.d(t,{handleTVLinksClick:()=>a,sendWidgetTrackData:()=>i});var o=n(114939),r=n(179380);function a(){document.addEventListener("click",(e=>{const t=e.target.closest(":link");if(!(null==t?void 0:t.hostname)||!(0,r.isInternalHost)(t.hostname,"tradingview.com"))return;const n=t.classList.contains("js-copyright-label")?"copyright":null;i(t.href,n)}))}function i(e,t){const r=function(){const e=window.initData.hashSettings;if(Object.keys(e).length>0)return(0,o.filterUtmInfo)(e);const t=new URLSearchParams(location.href);return{utm_campaign:t.get("utm_campaign")||void 0,utm_source:t.get("utm_source")||void 0}}(),a=function(e){var t;const n=(null===(t=location.ancestorOrigins)||void 0===t?void 0:t[0])||document.referrer;return e.utm_source||(n.length>0?new URL(n).host:"")}(r);!async function(e){var t;null===(t=await async function(){return(await Promise.all([n.e(63897),n.e(88908),n.e(36683)]).then(n.bind(n,449946))).getTrackerInstance()||null}())||void 0===t||t.trackWidgetTVLinkClick(e)}({widget_type:s(r),domain:a,link:e,target_type:t})}function s(e){if(e.utm_campaign)return e.utm_campaign;const t=location.pathname;return t.includes("embed-widget")?t.split("/")[2]:t}},701066:(e,t,n)=>{"use strict";function o(e,t=[],n){return function(e,t,n,o=[],r){const a=n.slice(1),i=decodeURIComponent(a);let s={};try{""!==i&&(s=JSON.parse(i),void 0!==r&&r(e,s),Object.keys(s).forEach((e=>{o.includes(e)&&delete s[e]})))}catch(e){s={},console.warn("Hash params parsing error! Hash params ignored.")}const c=t.slice(1),l=decodeURIComponent(c);let d={};try{""!==l&&(l.split("&").map((e=>{const t=e.indexOf("=");return[e.slice(0,t),e.slice(t+1)]})).forEach((e=>{const[t,n]=e;o.includes(t)||(d[t]=n)})),void 0!==r&&r(e,d))}catch(e){d={},console.warn("Search query params parsing error! Search query params ignored.")}return Object.assign({},e,s,d)}(e,location.search,location.hash,t,n)}function r(){const e=window;return{...e.initData.widgetDefaults,...e.initData.hashSettings,...e.initData.querySettings}}n.d(t,{extractWidgetSettings:()=>o,extractWidgetSettingsFromInitData:()=>r})},268037:(e,t,n)=>{"use strict";n.d(t,{makeWidgetSymbolLink:()=>a});var o=n(365516),r=n(327265);function a(e,t,n,a){let i,s;return e.includes(":")?[s,i]=e.split(":"):i=e,t?(0,r.makeTemplateSymbolUrl)((0,o.replaceOldPlaceholders)(t),{proName:e}):(0,r.makeSymbolPageUrl)({shortName:i,exchange:s},n,void 0,a)}},975420:(e,t,n)=>{"use strict";n.d(t,{initGA:()=>l,trackTiming:()=>d});var o=n(251954),r=n(261030),a=n(588948),i=n(638456),s=n(691805);let c=!1;function l(){if(c)return;(0,a.updateInitData)();const e=(0,a.getInitData)();if(!e.gaId)return;c=!0,(0,s.appendScript)(`https://www.googletagmanager.com/gtag/js?id=${(0,a.getInitData)().gaId}`),window.dataLayer=window.dataLayer||[],window.gtag=function(){window.dataLayer.push(arguments)},window.gtag("js",new Date);const t={optimize_id:e.optimizeId,anonymize_ip:!0};window.TVD&&(t.app_name="TVD",t.app_version=(0,i.desktopAppVersion)()),e.gaVars&&window.gtag("set",e.gaVars),window.gtag("consent","default",{
analytics_storage:(0,r.getCookieSetting)(r.CookieSettings.Analytics)?"granted":"denied"}),window.gtag("config",e.gaId,t),o.subscribe(r.cookieSettingsChangeEvent,((e,t)=>{e===r.CookieSettings.Analytics&&window.gtag("consent","update",{analytics_storage:t?"granted":"denied"})}),null)}function d(e,t,n,o){l(),window.gtag("event","timing_complete",{name:t,value:n,event_category:e,event_label:o})}},519073:(e,t,n)=>{"use strict";function o(e,t){return t.includes("crypto")||["bitcoin","crypto"].includes(e)}n.d(t,{hasCryptoTypespec:()=>o})},995683:(e,t,n)=>{"use strict";function o(e,t,n={}){const o=Object.assign({},t);for(const r of Object.keys(t)){const a=n[r]||r;a in e&&(o[r]=[e[a],t[r]].join(" "))}return o}function r(e,t,n={}){return Object.assign({},e,o(e,t,n))}n.d(t,{weakComposeClasses:()=>o,mergeThemes:()=>r})}}]);