(self.webpackChunktradingview=self.webpackChunktradingview||[]).push([[19132],{503443:e=>{e.exports={"common-tooltip":"common-tooltip-3cIbUUfe","common-tooltip--hidden":"common-tooltip--hidden-3cIbUUfe","common-tooltip--horizontal":"common-tooltip--horizontal-3cIbUUfe","common-tooltip--farther":"common-tooltip--farther-3cIbUUfe","common-tooltip--vertical":"common-tooltip--vertical-3cIbUUfe","common-tooltip-farther":"common-tooltip-farther-3cIbUUfe","common-tooltip--direction_normal":"common-tooltip--direction_normal-3cIbUUfe","common-tooltip__body":"common-tooltip__body-3cIbUUfe","common-tooltip__button-container":"common-tooltip__button-container-3cIbUUfe","common-tooltip__body--no-buttons":"common-tooltip__body--no-buttons-3cIbUUfe","common-tooltip__button":"common-tooltip__button-3cIbUUfe","common-tooltip--direction_reversed":"common-tooltip--direction_reversed-3cIbUUfe","common-tooltip__ear-holder":"common-tooltip__ear-holder-3cIbUUfe","common-tooltip__ear-holder--below":"common-tooltip__ear-holder--below-3cIbUUfe","common-tooltip__ear-holder--above":"common-tooltip__ear-holder--above-3cIbUUfe","common-tooltip__ear-holder--before":"common-tooltip__ear-holder--before-3cIbUUfe","common-tooltip__ear-holder--after":"common-tooltip__ear-holder--after-3cIbUUfe","common-tooltip__body--with-hotkey":"common-tooltip__body--with-hotkey-3cIbUUfe","common-tooltip__body--width_wide":"common-tooltip__body--width_wide-3cIbUUfe","common-tooltip__body--width_narrow":"common-tooltip__body--width_narrow-3cIbUUfe","common-tooltip__body--no-padding":"common-tooltip__body--no-padding-3cIbUUfe","common-tooltip__hotkey-block":"common-tooltip__hotkey-block-3cIbUUfe","common-tooltip__hotkey-block--divider":"common-tooltip__hotkey-block--divider-3cIbUUfe","common-tooltip__hotkey-text":"common-tooltip__hotkey-text-3cIbUUfe","common-tooltip__hotkey-button":"common-tooltip__hotkey-button-3cIbUUfe","common-tooltip__plus-sign":"common-tooltip__plus-sign-3cIbUUfe"}},499994:(e,t,o)=>{"use strict";o.d(t,{getTooltipData:()=>i,setTooltipData:()=>r});const n=new WeakMap;function i(e,t){const o=n.get(e);return o instanceof Function?o(t):o&&o[t]}function r(e,t,o){if(o instanceof Function)return void n.set(e,o);const i=n.get(e),r=void 0===i||i instanceof Function?{}:i;r[t]=o,n.set(e,r)}},604286:(e,t,o)=>{"use strict";o.d(t,{hotKeySerialize:()=>i,hotKeyDeserialize:()=>r});var n=o(694755);function i(e){return(0,n.clean)(JSON.stringify(e))}function r(e){return JSON.parse((0,n.clean)(e,!0))}},309103:(e,t,o)=>{"use strict";o.r(t),o.d(t,{hide:()=>j,show:()=>W,showOnElement:()=>B,tooltipClickHandler:()=>G,updateTooltipText:()=>q});var n=o(778785);let i=0,r=0,s=0;function a(){clearTimeout(i),clearTimeout(r),clearTimeout(s)}function l(e,t){i=setTimeout(e,t)}const c="tooltip-root-element";let d;function u(){const e=document.getElementById(c);e?d=e:(d=document.createElement("div"),d.id=c,document.body.appendChild(d))}function m(){d&&(d.innerHTML="")}"interactive"===document.readyState?u():document.addEventListener("DOMContentLoaded",u);var _=o(588537);const p={
default:"",white:"theme-white","round-shadow":"theme-round-shadow"},h=Object.keys(p);var f=o(499994),g=o(604286),b=o(698969),v=o(143498),y=(o(897116),o(860502)),w=o(466915),k=o(638456),E=o(503443);function T(e){const t=e.hasAttribute("data-tooltip")?e.getAttribute("data-tooltip"):e.getAttribute("title");return t&&((0,f.setTooltipData)(e,"text",t),e.removeAttribute("title")),(0,f.getTooltipData)(e,"text")||""}function L(e){const t=S.cloneNode(!0),o=V(t),{content:n}=e;switch(n.type){case"element":o.innerHTML="",o.appendChild(n.data);break;case"html":o.innerHTML=n.data;break;case"text":if(e.hotkey){const e=F.cloneNode(!0);e.innerText=n.data,o.appendChild(e)}else o.innerText=n.data}if(e.hotkey){const t="none"!==n.type,i=N.cloneNode(!0),r=(0,g.hotKeyDeserialize)(e.hotkey),s=r.keys.map((e=>`<span class="${E["common-tooltip__hotkey-button"]}">${e}</span>`));i.innerHTML=function(e,t){const o=/{\d}|{hotkey_\d}/gi;return e.replace(o,(e=>{const o=Number(e.match(/\d/));return t[o]}))}(r.text,s).replace(/\s\+\s/g,`<span class="${E["common-tooltip__plus-sign"]}">+</span>`),o.classList.add(E["common-tooltip__body--with-hotkey"]),t&&i.classList.add(E["common-tooltip__hotkey-block--divider"]),o.appendChild(i)}return t.addEventListener("contextmenu",y.preventDefault),t}function U(e,t){const o=t.rect;if(!o)return;!function(e,t){const o=h.includes(t)?p[t]:"";e.classList.remove(...h.map((e=>p[e])).filter((e=>!!e))),o&&!e.classList.contains(o)&&e.classList.add(o)}(e,t.colorTheme||"default"),t.addClass&&e.classList.add(t.addClass);const n=V(e),i=e.querySelector(`.${E["common-tooltip__button-container"]}`);n.classList.toggle(E["common-tooltip__body--width_wide"],Boolean(t.wide)),n.classList.toggle(E["common-tooltip__body--no-padding"],Boolean(t.noPadding)),n.classList.toggle(E["common-tooltip__body--width_narrow"],Boolean(t.narrow)),n.classList.toggle(E["common-tooltip__body--no-buttons"],!0),n.style.left=D(0),n.style.width=D(n.clientWidth+(Boolean(t.noPadding)?0:2));const r=document.body.clientWidth,s=k.CheckMobile.iOS()||(0,k.supportTouch)()&&(0,k.isMac)()?window.innerHeight:document.body.clientHeight,a=t.vertical,l=t.extendMargin||a&&o.w<20||!a&&o.h<20;e.classList.toggle(E["common-tooltip--farther"],l),e.classList.toggle(E["common-tooltip--vertical"],a),e.classList.toggle(E["common-tooltip--horizontal"],!a);const c=function(e){return e.querySelector(`.${E["common-tooltip__ear-holder"]}`)}(e),d=e.offsetHeight;if(a){const a=10,l=s-10,u=12,m=a+u,_=l-u,p=(0,w.clamp)(o.y+o.h/2,m,_)-d/2,h=p+d;e.style.left=D(o.x+o.w),e.style.top=D(p),p<a?n.style.top=i.style.top=D(a-p):h>l&&(n.style.top=i.style.top=D(l-h));const{right:f}=(e.querySelector(":last-child")||n).getBoundingClientRect(),g=f+10>r;e.classList.toggle(E["common-tooltip--direction_reversed"],g),e.classList.toggle(E["common-tooltip--direction_normal"],!g);let b=g?"after":"before";(0,v.isRtl)()?(b=t.otr?"after":b,b=t.otl?"before":b):(b=t.otr?"before":b,b=t.otl?"after":b),c.classList.toggle(E["common-tooltip__ear-holder--before"],"before"===b),
c.classList.toggle(E["common-tooltip__ear-holder--after"],"after"===b),"after"===b&&(e.style.left="auto",e.style.right=D(r-o.x))}else{const a=o.x-(n.offsetWidth-o.w)/2,l=r-10-e.offsetWidth,u=Math.max(10,Math.min(a,l));e.style.left=D(u);const m=l<a;e.classList.toggle(E["common-tooltip--direction_reversed"],m),e.classList.toggle(E["common-tooltip--direction_normal"],!m);const _=function(e,t,o,n){if(e.above)return A(t,n)?"above":"below";if(e.below)return function(e,t,o){return o.y+o.h+t+10<e}(t,o,n)?"below":"above";return A(o,n)?"above":"below"}(t,s,d,o);"above"===_?e.style.bottom=D(s-o.y):e.style.top=D(o.y+o.h),c.classList.add("above"===_?E["common-tooltip__ear-holder--above"]:E["common-tooltip__ear-holder--below"]);const{left:p}=n.getBoundingClientRect();let h=Math.trunc(o.x+o.w/2-(p+n.clientWidth/2));e.style.left=D(u+h),e.style.width=D(n.clientWidth+i.clientWidth),h=m?Math.max(0,h):Math.min(0,h),i.style.left=D(-h),n.style.left=D(-h)}}function x(e){e.classList.toggle(E["common-tooltip--hidden"],!0)}function D(e){return`${Math.floor(e)}px`}const M=`\n\t<div id="common-tooltip-wrapper" class="${E["common-tooltip"]}">\n\t\t<div class="${E["common-tooltip__ear-holder"]}" >\n\t\t\t<div class="${E["common-tooltip__body"]} js-tooltip-body"></div>\n\t\t</div>\n\t\t<div class="${E["common-tooltip__button-container"]}"></div>\n\t</div>\n`,I=`\n\t<div class="${E["common-tooltip__hotkey-block"]}"></div>\n`,C=`\n\t<div class="${E["common-tooltip__hotkey-text"]}"></div>\n`,S=(0,b.parseHtmlElement)(M),N=(0,b.parseHtmlElement)(I),F=(0,b.parseHtmlElement)(C);function V(e){return e.querySelector(`.${E["common-tooltip__body"]}`)}function A(e,t){return 10+e<t.y}var H=o(398835);let R=!1,K=null,O=null;n.mobiletouch||document.addEventListener("mouseover",(function(e){var t;if(null===(t=e.sourceCapabilities)||void 0===t?void 0:t.firesTouchEvents)return;const o=e.target,n=e.currentTarget,i=function(e,t,o){const n=[];for(;e&&e!==t;)e.classList&&e.classList.contains(o)&&n.push(e),e=e.parentElement||X(e.parentNode);return n}(o,n,"apply-common-tooltip"),r=()=>{O&&(O.destroy(),O=null)};for(const t of i){if("buttons"in e){if(1&e.buttons)continue}else if(1===e.which)continue;const o=()=>B(t);if(o()){const e=e=>{e.target instanceof Element&&e.target.contains(t)&&n(null,!0)},n=(i,s=!1)=>{t.removeEventListener("common-tooltip-update",o),t.removeEventListener("mouseleave",n),t.removeEventListener("mousedown",n),document.removeEventListener("scroll",e,{capture:!0}),r(),j(s)};t.addEventListener("common-tooltip-update",o),t.addEventListener("mouseleave",n),t.addEventListener("mousedown",n),document.addEventListener("scroll",e,{capture:!0}),null===O&&(O=(0,H.createGroup)({desc:"Tooltip"}),O.add({desc:"Hide",hotkey:27,handler:n}));break}}}),!0);const $=new MutationObserver((()=>{if(K&&K.options.target){let e;e="isConnected"in K.options.target?K.options.target.isConnected:document.body.contains(K.options.target),e||j()}})),B=(e,t={})=>{const{content:o,...n}=Z(t),i=function(e){const t=T(e),o=e.getBoundingClientRect(),n={h:o.height,w:o.width,x:o.left,y:o.top
},i=e.getAttribute("data-color-theme")||"",r=e.classList.contains("common-tooltip-html"),s=parseInt(e.getAttribute("data-tooltip-delay")||""),a=parseInt(e.getAttribute("data-tooltip-debounce")||"");let l={type:"none"};return t&&(l={type:r?"html":"text",data:t}),{above:e.classList.contains("common-tooltip-above"),below:e.classList.contains("common-tooltip-below"),otl:e.classList.contains("common-tooltip-otl"),otr:e.classList.contains("common-tooltip-otr"),vertical:e.classList.contains("common-tooltip-vertical"),hotkey:e.getAttribute("data-tooltip-hotkey"),narrow:e.classList.contains("common-tooltip-narrow"),wide:e.classList.contains("common-tooltip-wide"),colorTheme:i,tooltipDelay:s,tooltipDebounce:a,rect:n,content:l,target:e}}(e),r=Object.assign(i,n);return"none"!==o.type&&(r.content=o),!("none"===r.content.type&&!r.hotkey)&&(r.target=e,W(r),!0)},W=e=>{const t=Z(e),o=L(t);var n;if(K={options:t,element:o},n=o,m(),d&&d.appendChild(n),a(),!R)return x(o),void l((()=>J(o)),function(e){return"number"!=typeof e.tooltipDelay||isNaN(e.tooltipDelay)?500:e.tooltipDelay}(t));const{tooltipDebounce:i}=e;"number"!=typeof i||isNaN(i)?J(o):l((()=>J(o)),i)},q=e=>T(e);function G(e){n.mobiletouch&&(B(e.currentTarget,{tooltipDelay:0}),document.addEventListener("scroll",z),document.addEventListener("touchstart",z))}function z(){document.removeEventListener("scroll",z),document.removeEventListener("touchstart",z),j()}function P(){m(),R=!1,K=null}const j=e=>{if(a(),$.disconnect(),!K)return;if(!e&&!R)return;const{element:t,options:o}=K,n=()=>{t.removeEventListener("mouseleave",n),x(t),e?P():s=setTimeout((()=>{P()}),250)};var i,l;o.tooltipHideDelay?(i=()=>{t.querySelector(":hover")?t.addEventListener("mouseleave",n):n()},l=o.tooltipHideDelay,r=setTimeout(i,l)):n()};function J(e){const{options:t}=(0,_.ensureNotNull)(K);if(U(e,t),function(e){e.classList.toggle(E["common-tooltip--hidden"],!1)}(e),$.observe(document,{childList:!0,subtree:!0}),R=!0,t.forceHideOnMove){const e=()=>{document.removeEventListener("mousemove",e),j()};document.addEventListener("mousemove",e)}}function X(e){return e&&(e.nodeType===Node.ELEMENT_NODE?e:null)}function Z(e){if(function(e){return"content"in e}(e))return e;const{inner:t,html:o,text:n,...i}=e;let r={type:"none"};return t&&(r={type:"element",data:t}),n&&(r={type:o?"html":"text",data:n}),{content:r,...i}}},466915:(e,t,o)=>{"use strict";function n(e,t){return e<=t}function i(e,t){return e>=t}function r(e,t,o){return Math.min(Math.max(e,t),o)}function s(e){return e<0?-1:e>0?1:0}function a(e){if(e<0)return!1;for(let t=e;t>1;t/=10)if(t%10!=0)return!1;return!0}function l(e,t,o){return t-e<=o}function c(e,t,o){return Math.abs(e-t)<o}function d(e){return e<=0?NaN:Math.log(e)/Math.log(10)}function u(e,t){return e<t?-1:e>t?1:0}function m(e,t=u){if(e.length<1)throw Error("array is empty");let o=e[0];for(let n=0;n<e.length;++n)t(e[n],o)<0&&(o=e[n]);return o}function _(e,t=u){if(e.length<1)throw Error("array is empty");let o=e[0];for(let n=0;n<e.length;++n)t(e[n],o)>0&&(o=e[n]);return o}function p(e){const t=Math.ceil(e)
;return t%2!=0?t-1:t}function h(e){return e>0?Math.floor(e):Math.ceil(e)}o.r(t),o.d(t,{lessThan:()=>n,greaterThan:()=>i,clamp:()=>r,sign:()=>s,isBaseDecimal:()=>a,greaterOrEqual:()=>l,equal:()=>c,log10:()=>d,defComparator:()=>u,min:()=>m,max:()=>_,ceiledEven:()=>p,toInt:()=>h})},694755:(e,t,o)=>{e=o.nmd(e),TradingView.cleanButAmpersand=function(e,t){var o=t?["&amp;"]:["&"];return TradingView.clean(e,t,o)},TradingView.strip_tags=function(e){return e&&e.replace?e.replace(/(<([^>]+)>)/gi,""):e},TradingView.encodeSpread=function(e){return encodeURIComponent(e)},TradingView.clean=function(e,t,o){var n=[["&","&amp;"],["<","&lt;"],[">","&gt;"],['"',"&quot;"],["'","&#039;"],["'","&#39;"]],i=e;if(!e||!e.replace)return i;for(var r=0;r<n.length;r++){var s=n[r][0],a=n[r][1];o&&o.indexOf&&-1!==o.indexOf(t?a:s)||(i=t?i.replace(new RegExp(a,"g"),s):i.replace(new RegExp(s,"g"),a))}return i},e&&e.exports&&(e.exports={clean:TradingView.clean,cleanButAmpersand:TradingView.cleanButAmpersand,stripTags:TradingView.strip_tags})},698969:(e,t,o)=>{"use strict";o.d(t,{parseHtml:()=>i,parseHtmlElement:()=>r});const n=new WeakMap;function i(e,t){let o,i;return o=null==t?document.documentElement:9===t.nodeType?t.documentElement:t,n&&(i=n.get(o)),i||(i=o.ownerDocument.createRange(),i.selectNodeContents(o),n&&n.set(o,i)),i.createContextualFragment(e)}function r(e,t){const o=i(e,t),n=o.firstElementChild;return null!==n&&o.removeChild(n),n}},860502:(e,t,o)=>{"use strict";function n(e){e.preventDefault()}o.d(t,{preventDefault:()=>n,preventDefaultForContextMenu:()=>r});const i=["input:not([type])",'input[type="text"]','input[type="email"]','input[type="password"]','input[type="search"]','input[type="number"]','input[type="url"]',"textarea","a[href]",'*[contenteditable="true"]',"[data-allow-context-menu]"];function r(e){const t=e.target;t&&!t.closest(i.join(", "))&&e.preventDefault()}},125226:(e,t,o)=>{"use strict";var n=o(49437).TVLocalStorage,i=o(97639),r=o(855385);o(638456);var s=new i;TradingView.FeatureToggle={force_prefix:"forcefeaturetoggle.",onChanged:new i,enableFeature:function(e){n.setItem(this.force_prefix+e,"true"),s.fire(e)},disableFeature:function(e){n.setItem(this.force_prefix+e,"false"),s.fire(e)},resetFeature:function(e){n.removeItem(this.force_prefix+e),s.fire(e)},onFeaturesStateChanged:function(){return s}},TradingView.isFeatureEnabled=function(e){var t="featuretoggle_seed";function i(e){try{var o=r(e+function(){if(window.user&&window.user.id)return window.user.id;var e=n.getItem(t);return null!==e||(e=Math.floor(1e6*Math.random()),n.setItem(t,e)),e}());return new DataView(o).getUint32(0,!0)/4294967296}catch(e){return.5}}function a(t){return!("local"!==window.environment||!function(e){
var t=["remove_note_tab_from_bottom_panel","broker_FXCM_token_v2","broker_TRADESTATION_V3","broker_TRADOVATE_dev","black_friday_mainpage","black_friday_popup","datawindow","trading-fast-renew-oauth-token","switching_trial_year_to_month_disabled","switching_year_to_month_disabled","default_year_billing_cycle_switcher","marketing-analytics","google-ads","visible_address_fields_by_default","slow-support-warning","hide-trading-floating-toolbar","tvcoins_donations","save-short-streams","details_disable_bid_ask","vat_disabled","pro_plan_upgrades_disabled","pro_plan_downgrades_disabled","unit_conversion","disable_recaptcha_on_signup","braintree-order-one-click-dropdown","braintree-trial-implementation","braintree-gopro-in-order-dialog","braintree-apple-pay","braintree-google-pay","braintree-apple-pay-trial","braintree-google-pay-trial","hide_gopro_popup_upgrade_button","tradestation_use_sync_mapper","yandex_metric_enabled","broker_id_session","remove_line_tools_from_content","modular_broker_use_sync_mapper","do_not_save_shared_line_tools_to_charts","save_shared_line_tools","chart_storage_with_broker_name","do_not_invalidate_chart_on_changing_line_tools","log_removing_line_tools_group","oanda-european-accounts-warning","mobile_show_bottom_panel","disable_save_settings","desktop_version_notification_enabled","favorites-in-broker-dropdown","streams_stats_profile","hide_ecomonic_events","aggregating_page_pings","mobile_trading_web","mobile_trading_ios","mobile_trading_android","hide_real_brokers_on_mobile","enable_trading_server_logger","hide_ranges_label_colors","disable_user_specific_encryption","remove_scale_settings_from_menu","enable_deep_history_backtesting","enable_deep_history_backtesting_list_of_trades","show_checkbox_of_house_rules_to_idea_and_script","enable_partner_program","disable_phone_verification_sms","no_overlap_mode_enabled","collapse_pane_buttons_when_connected_to_broker","enable_new_execution_style","test_minds_connections","enable_eventsource_pushstream_transport","ftx_request_server_logger","ibkr_request_server_logger","trading_request_server_logger","show_symbol_chart_type_switcher","ecommpay_ru","hide_ideas_on_chart","RU_SF_disable","RU_VOR_disable","enable_monaco_editor","show_continuous_contract_switches","enable_new_custom_public_chats","bottom_panel_track_events","vertex-tax-included","enable_place_order_context_in_instant_mode"],o="[A-Z]+[a-zA-Z0-9_]+",n=new RegExp(`broker_${o}_dev`,"g"),i=new RegExp(`hide_${o}_on_ios`,"g"),r=new RegExp(`hide_${o}_on_android`,"g"),s=new RegExp(`hide_${o}_on_mobile_web`,"g");return-1===t.indexOf(e)&&-1===e.indexOf("-maintenance")&&!1===n.test(e)&&!1===i.test(e)&&!1===r.test(e)&&!1===s.test(e)
}(t))||(!e[t]||-1!==e[t])&&(!!("true"===n.getItem(TradingView.FeatureToggle.force_prefix+t)||window.is_authenticated&&"undefined"!=typeof user&&user.settings&&"true"===user.settings[TradingView.FeatureToggle.force_prefix+t])||!("false"===n.getItem(TradingView.FeatureToggle.force_prefix+t)||window.is_authenticated&&"undefined"!=typeof user&&user.settings&&"false"===user.settings[TradingView.FeatureToggle.force_prefix+t])&&(!!e[t]&&(1===e[t]||i(t)<=e[t])))}return TradingView.onWidget()||Promise.all([o.e(1867),o.e(34604)]).then(o.t.bind(o,501867,23)).then((t=>{t.on("featuretoggle",(function(t){var o=a(t.name);e[t.name]=t.state,o!==a(t.name)&&s.fire(t.name)}))})),a}(window.featureToggleState||{}),t.FeatureToggle=TradingView.FeatureToggle,t.isFeatureEnabled=TradingView.isFeatureEnabled,t.onFeaturesStateChanged=TradingView.FeatureToggle.onFeaturesStateChanged.bind(TradingView.FeatureToggle)},398835:(e,t,o)=>{"use strict";o.r(t),o.d(t,{Modifiers:()=>n.Modifiers,createGroup:()=>m,pressedKeys:()=>u,registerWindow:()=>_,unregisterWindow:()=>p});var n=o(470316),i=o(515312),r=o(262325),s=o.n(r);var a=o(345848);class l{constructor(e,t){this._group=e,this.hotkey=t.hotkey,this.handler=t.handler,this.desc=t.desc,this.element=t.element||null,t.isDisabled?"function"==typeof t.isDisabled?this.isDisabled=t.isDisabled:this.isDisabled=()=>!0:this.isDisabled=()=>!1}destroy(){this._group&&(this._group.remove(this),this._group=null)}}class c{constructor(e,t){this._actions=[],this._manager=e,this.modal=!(!t||!t.modal),t&&(this.desc=t.desc),t&&t.isDisabled?"function"==typeof t.isDisabled?this.isDisabled=t.isDisabled:this.isDisabled=()=>!0:this.isDisabled=()=>!1,this._manager.registerGroup(this)}add(e){const t=new l(this,e);return this._actions.push(t),t}remove(e){for(let t=this._actions.length;t-- >0;)this._actions[t]===e&&this._actions.splice(t,1)}handleHotkey(e,t){for(let o=this._actions.length;o-- >0;){const i=this._actions[o];if(i.hotkey===e&&((!i.element||t.target&&i.element.contains(t.target))&&!i.isDisabled()))return i.handler(t),t.preventDefault(),(0,a.trackEvent)("Keyboard Shortcuts",(0,n.humanReadableHash)(e)),!0}return!1}promote(){this._manager.promoteGroup(this)}destroy(){this._actions.length=0,this._manager.unregisterGroup(this)}}const d=new class{constructor(){this._groups=[],this._pressedKeys=new(s())(0),this._keyDownListener=e=>{if(e.defaultPrevented)return;const t=(0,n.hashFromEvent)(e);if(this._pressedKeys.setValue(t),!(0,i.isNativeUIInteraction)(t,e.target))for(let o=this._groups.length;o-- >0;){const n=this._groups[o];if(!n.isDisabled()){if(n.handleHotkey(t,e))return;if(n.modal)return}}},this._keyUpListener=e=>{const t=(0,n.hashFromEvent)(e);this._pressedKeys.setValue(t)},this._blurEvent=()=>{this._pressedKeys.setValue(0)},this._mouseEvent=e=>{const t=(0,n.modifiersFromEvent)(e),o=255&this._pressedKeys.value();this._pressedKeys.setValue(t|o)}}listen(e){e.addEventListener("keydown",this._keyDownListener),e.addEventListener("keyup",this._keyUpListener),e.addEventListener("blur",this._blurEvent),
e.addEventListener("mousemove",this._mouseEvent)}unlisten(e){e.removeEventListener("keydown",this._keyDownListener),e.removeEventListener("keyup",this._keyUpListener),e.removeEventListener("blur",this._blurEvent),e.removeEventListener("mousemove",this._mouseEvent)}registerGroup(e){this._groups.push(e)}unregisterGroup(e){for(let t=this._groups.length;t--;)this._groups[t]===e&&this._groups.splice(t,1)}promoteGroup(e){let t=this._groups.length-1;for(let o=this._groups.length;o--;){if(this._groups[o]===e)return void(o!==t&&(this._groups.splice(o,1),this._groups.splice(t,0,e)));this._groups[o].modal&&(t=o-1)}}pressedKeys(){return this._pressedKeys}},u=d.pressedKeys();function m(e){return new c(d,e)}function _(e){d.listen(e)}function p(e){d.unlisten(e)}_(window)},470316:(e,t,o)=>{"use strict";o.r(t),o.d(t,{isMacKeyboard:()=>i,Modifiers:()=>r,modifiersFromEvent:()=>s,hashFromEvent:()=>a,hashShiftPlusEnter:()=>l,humanReadableModifiers:()=>c,humanReadableHash:()=>u});var n=o(638456);const i=(0,n.isMac)()||n.CheckMobile.iOS();var r;function s(e){let t=0;return e.shiftKey&&(t+=1024),e.altKey&&(t+=512),e.ctrlKey&&(t+=256),e.metaKey&&(t+=2048),t}function a(e){return s(e)|e.keyCode}!function(e){e[e.None=0]="None",e[e.Alt=512]="Alt",e[e.Shift=1024]="Shift",e[e.Mod=i?2048:256]="Mod",e[e.Control=256]="Control",e[e.Meta=2048]="Meta"}(r||(r={}));const l=1037;function c(e,t=!i){let o="";return 256&e&&(o+=i?"^":"Ctrl",t&&(o+=" + ")),512&e&&(o+=i?"⌥":"Alt",t&&(o+=" + ")),1024&e&&(o+=i?"⇧":"Shift",t&&(o+=" + ")),2048&e&&(o+=i?"⌘":"Win",t&&(o+=" + ")),o}const d={9:"⇥",13:"↵",27:"Esc",8:i?"⌫":"Backspace",32:"Space",35:"End",36:"Home",37:"←",38:"↑",39:"→",40:"↓",45:"Ins",46:"Del",188:",",191:"/"};for(let e=1;e<=16;e++)d[e+111]=`F${e}`;function u(e){let t=c(e);const o=255&e;return t+=o in d?d[o]:String.fromCharCode(o),t}},515312:(e,t,o)=>{"use strict";o.d(t,{isTextEditingField:()=>i,isNativeUIInteraction:()=>r});var n=o(470316);function i(e){if("INPUT"===e.tagName){const t=e.type;return"text"===t||"email"===t||"number"===t||"password"===t||"search"===t||"tel"===t||"url"===t}return"TEXTAREA"===e.tagName||e.isContentEditable}function r(e,t){if(!t)return!1;const o=255&e;if(27===o||o>>>4==7)return!1;switch(e^o){case n.Modifiers.Alt:return(38===o||40===o)&&"SELECT"===t.tagName||i(t);case n.Modifiers.Alt+n.Modifiers.Shift:return i(t);case n.Modifiers.Mod:if(67===o||!n.isMacKeyboard&&45===o){const e=t.ownerDocument&&t.ownerDocument.getSelection();if(e&&!e.isCollapsed)return!0}return i(t);case n.Modifiers.Mod+n.Modifiers.Shift:return o>=33&&o<=40&&i(t);case n.Modifiers.Shift:case 0:return!!(9!==o||t.ownerDocument&&t!==t.ownerDocument.body&&t!==t.ownerDocument.documentElement)&&((13===o||32===o||!function(e){if("BUTTON"===e.tagName)return!0;if("INPUT"===e.tagName){const t=e.type;if("submit"===t||"button"===t||"reset"===t||"checkbox"===t||"radio"===t)return!0}return!1}(t))&&("form"in t||t.isContentEditable))}return!1}},345848:(e,t,o)=>{"use strict";o.d(t,{trackEvent:()=>l});var n=o(251954),i=o(611688);const r=(0,
o(911905).getLogger)("Common.TrackEvent"),s=[/Study_(Drawing)_(.*)/,/(Study)_(.*)@tv-basicstudies/,/(Study)_(.*)/,/(Chart Style) (.*)/];let a=!1;const l=(e,t,o)=>{if(a)return;if(i.enabled("charting_library_base"))return void((e,t,o)=>{t=t||e||o||"";let i="";for(let e=0;e<s.length;e++){const o=t.match(s[e]);if(o&&3===o.length){t=o[1],i=o[2];break}}(0,n.emit)(t.toLowerCase().replace(" ","_"),{category:e,label:o,value:i})})(e,t,o);let l=(e?e+":":"")+t;o&&(l+=" "+o),r.logNormal(l),i.enabled("widget")||!window._UNIT_TESTS&&window.gtag&&window.gtag("event",t,{event_category:e,event_label:o})};"undefined"!=typeof window&&(window.TradingView=window.TradingView||{},window.TradingView.trackEvent=l)}}]);