(self.webpackChunktradingview=self.webpackChunktradingview||[]).push([[49569,60276],{588537:(e,t)=>{"use strict";function o(e,t){if(void 0===e)throw new Error((null!=t?t:"Value")+" is undefined");return e}function r(e,t){if(null===e)throw new Error((null!=t?t:"Value")+" is null");return e}Object.defineProperty(t,"__esModule",{value:!0}),t.ensureNever=t.ensure=t.ensureNotNull=t.ensureDefined=t.assert=void 0,t.assert=function(e,t){if(!e)throw new Error("Assertion failed"+(t?": "+t:""))},t.ensureDefined=o,t.ensureNotNull=r,t.ensure=function(e,t){return r(o(e,t),t)},t.ensureNever=function(e){}},24654:e=>{"use strict";e.exports=function(e){for(var t=[],o=e.length,r=0;r<o;r++){var _=e.charCodeAt(r);if(_>=55296&&_<=56319&&o>r+1){var s=e.charCodeAt(r+1);s>=56320&&s<=57343&&(_=1024*(_-55296)+s-56320+65536,r+=1)}_<128?t.push(_):_<2048?(t.push(_>>6|192),t.push(63&_|128)):_<55296||_>=57344&&_<65536?(t.push(_>>12|224),t.push(_>>6&63|128),t.push(63&_|128)):_>=65536&&_<=1114111?(t.push(_>>18|240),t.push(_>>12&63|128),t.push(_>>6&63|128),t.push(63&_|128)):t.push(239,191,189)}return new Uint8Array(t).buffer}},9995:(e,t,o)=>{var r=o(939340);e.exports=function(e){return e=r(e^=e>>>16,2246822507),e=r(e^=e>>>13,3266489909),(e^=e>>>16)>>>0}},939340:e=>{"use strict";e.exports=Math.imul||function(e,t){var o=65535&e,r=65535&t;return o*r+((e>>>16&65535)*r+o*(t>>>16&65535)<<16>>>0)|0}},503060:(e,t,o)=>{"use strict";o.d(t,{default:()=>r});const r=o(178160).default.Symbol},128177:(e,t,o)=>{"use strict";o.d(t,{default:()=>u});var r=o(503060),_=Object.prototype,s=_.hasOwnProperty,a=_.toString,n=r.default?r.default.toStringTag:void 0;const i=function(e){var t=s.call(e,n),o=e[n];try{e[n]=void 0;var r=!0}catch(e){}var _=a.call(e);return r&&(t?e[n]=o:delete e[n]),_};var l=Object.prototype.toString;const d=function(e){return l.call(e)};var c=r.default?r.default.toStringTag:void 0;const u=function(e){return null==e?void 0===e?"[object Undefined]":"[object Null]":c&&c in Object(e)?i(e):d(e)}},489956:(e,t,o)=>{"use strict";o.d(t,{default:()=>r});const r="object"==typeof o.g&&o.g&&o.g.Object===Object&&o.g},178160:(e,t,o)=>{"use strict";o.d(t,{default:()=>s});var r=o(489956),_="object"==typeof self&&self&&self.Object===Object&&self;const s=r.default||_||Function("return this")()},12481:(e,t,o)=>{"use strict";o.d(t,{default:()=>l});var r=o(598279),_=o(178160);const s=function(){return _.default.Date.now()};var a=o(968877),n=Math.max,i=Math.min;const l=function(e,t,o){var _,l,d,c,u,m,h=0,p=!1,b=!1,g=!0;if("function"!=typeof e)throw new TypeError("Expected a function");function f(t){var o=_,r=l;return _=l=void 0,h=t,c=e.apply(r,o)}function y(e){return h=e,u=setTimeout(v,t),p?f(e):c}function w(e){var o=e-m;return void 0===m||o>=t||o<0||b&&e-h>=d}function v(){var e=s();if(w(e))return x(e);u=setTimeout(v,function(e){var o=t-(e-m);return b?i(o,d-(e-h)):o}(e))}function x(e){return u=void 0,g&&_?f(e):(_=l=void 0,c)}function k(){var e=s(),o=w(e);if(_=arguments,l=this,m=e,o){if(void 0===u)return y(m);if(b)return clearTimeout(u),u=setTimeout(v,t),f(m)}
return void 0===u&&(u=setTimeout(v,t)),c}return t=(0,a.default)(t)||0,(0,r.default)(o)&&(p=!!o.leading,d=(b="maxWait"in o)?n((0,a.default)(o.maxWait)||0,t):d,g="trailing"in o?!!o.trailing:g),k.cancel=function(){void 0!==u&&clearTimeout(u),h=0,_=m=l=u=void 0},k.flush=function(){return void 0===u?c:x(s())},k}},598279:(e,t,o)=>{"use strict";o.d(t,{default:()=>r});const r=function(e){var t=typeof e;return null!=e&&("object"==t||"function"==t)}},383527:(e,t,o)=>{"use strict";o.d(t,{default:()=>r});const r=function(e){return null!=e&&"object"==typeof e}},708875:(e,t,o)=>{"use strict";o.d(t,{default:()=>s});var r=o(128177),_=o(383527);const s=function(e){return"symbol"==typeof e||(0,_.default)(e)&&"[object Symbol]"==(0,r.default)(e)}},343370:(e,t,o)=>{"use strict";o.d(t,{default:()=>s});var r=o(12481),_=o(598279);const s=function(e,t,o){var s=!0,a=!0;if("function"!=typeof e)throw new TypeError("Expected a function");return(0,_.default)(o)&&(s="leading"in o?!!o.leading:s,a="trailing"in o?!!o.trailing:a),(0,r.default)(e,t,{leading:s,maxWait:t,trailing:a})}},968877:(e,t,o)=>{"use strict";o.d(t,{default:()=>d});var r=o(598279),_=o(708875),s=/^\s+|\s+$/g,a=/^[-+]0x[0-9a-f]+$/i,n=/^0b[01]+$/i,i=/^0o[0-7]+$/i,l=parseInt;const d=function(e){if("number"==typeof e)return e;if((0,_.default)(e))return NaN;if((0,r.default)(e)){var t="function"==typeof e.valueOf?e.valueOf():e;e=(0,r.default)(t)?t+"":t}if("string"!=typeof e)return 0===e?e:+e;e=e.replace(s,"");var o=n.test(e);return o||i.test(e)?l(e.slice(2),o?2:8):a.test(e)?NaN:+e}},855385:(e,t,o)=>{var r=o(939340),_=o(9995),s=o(24654),a=new Uint32Array([3432918353,461845907]);function n(e,t){return e<<t|e>>>32-t}e.exports=function(e,t){if(t=t?0|t:0,"string"==typeof e&&(e=s(e)),!(e instanceof ArrayBuffer))throw new TypeError("Expected key to be ArrayBuffer or string");var o=new Uint32Array([t]);return function(e,t){for(var o=e.byteLength/4|0,_=new Uint32Array(e,0,o),s=0;s<o;s++)_[s]=r(_[s],a[0]),_[s]=n(_[s],15),_[s]=r(_[s],a[1]),t[0]=t[0]^_[s],t[0]=n(t[0],13),t[0]=r(t[0],5)+3864292196}(e,o),function(e,t){var o=e.byteLength/4|0,_=e.byteLength%4,s=0,i=new Uint8Array(e,4*o,_);switch(_){case 3:s^=i[2]<<16;case 2:s^=i[1]<<8;case 1:s^=i[0]<<0,s=n(s=r(s,a[0]),15),s=r(s,a[1]),t[0]=t[0]^s}}(e,o),function(e,t){t[0]=t[0]^e.byteLength,t[0]=_(t[0])}(e,o),o.buffer}},64531:(e,t)=>{"use strict";var o,r=!("undefined"==typeof window||!window.document||!window.document.createElement);function _(){if(o)return o;if(!r||!window.document.body)return"indeterminate";var e=window.document.createElement("div");return e.appendChild(document.createTextNode("ABCD")),e.dir="rtl",e.style.fontSize="14px",e.style.width="4px",e.style.height="1px",e.style.position="absolute",e.style.top="-1000px",e.style.overflow="scroll",document.body.appendChild(e),o="reverse",e.scrollLeft>0?o="default":(e.scrollLeft=1,0===e.scrollLeft&&(o="negative")),document.body.removeChild(e),o}t.detectScrollType=_,t.getNormalizedScrollLeft=function(e,t){var o=e.scrollLeft;if("rtl"!==t)return o;var r=_();if("indeterminate"===r)return Number.NaN
;switch(r){case"negative":return e.scrollWidth-e.clientWidth+o;case"reverse":return e.scrollWidth-e.clientWidth-o}return o},t.setNormalizedScrollLeft=function(e,t,o){if("rtl"===o){var r=_();if("indeterminate"!==r)switch(r){case"negative":e.scrollLeft=e.clientWidth-e.scrollWidth+t;break;case"reverse":e.scrollLeft=e.scrollWidth-e.clientWidth-t;break;default:e.scrollLeft=t}}else e.scrollLeft=t}},611688:(e,t,o)=>{"use strict";o.r(t),o.d(t,{disable:()=>c,enable:()=>d,enabled:()=>i,getAllFeatures:()=>u,setEnabled:()=>l})
;const r=JSON.parse('{"14851":{},"custom_items_in_context_menu":{},"countdown":{},"symbol_search_parser_mixin":{},"pay_attention_to_ticker_not_symbol":{},"graying_disabled_tools_enabled":{},"update_study_formatter_on_symbol_resolve":{},"constraint_dialogs_movement":{},"phone_verification":{},"show_trading_notifications_history":{},"show_interval_dialog_on_key_press":{},"header_interval_dialog_button":{"subsets":["show_interval_dialog_on_key_press"]},"header_fullscreen_button":{},"header_symbol_search":{},"symbol_search_hot_key":{},"header_resolutions":{"subsets":["header_interval_dialog_button"]},"header_chart_type":{},"header_settings":{},"header_indicators":{},"header_compare":{},"header_undo_redo":{},"header_screenshot":{},"header_saveload":{},"study_on_study":{},"scales_date_format":{},"header_widget":{"subsets":["header_widget_dom_node","header_symbol_search","header_resolutions","header_chart_type","header_settings","header_indicators","header_compare","header_undo_redo","header_fullscreen_button","compare_symbol","header_screenshot"]},"legend_widget":{},"compare_symbol":{"subsets":["header_compare"]},"property_pages":{"subsets":["show_chart_property_page","chart_property_page"]},"show_chart_property_page":{},"chart_property_page":{"subsets":["chart_property_page_scales","chart_property_page_trading","chart_property_page_right_margin_editor"]},"left_toolbar":{},"hide_left_toolbar_by_default":{},"control_bar":{},"widget_logo":{},"timeframes_toolbar":{},"edit_buttons_in_legend":{"subsets":["show_hide_button_in_legend","format_button_in_legend","study_buttons_in_legend","delete_button_in_legend"]},"show_hide_button_in_legend":{},"object_tree_legend_mode":{},"format_button_in_legend":{},"study_buttons_in_legend":{},"delete_button_in_legend":{},"broker_button":{},"buy_sell_buttons":{"subsets":["broker_button"]},"pane_context_menu":{},"scales_context_menu":{},"legend_context_menu":{},"context_menus":{"subsets":["pane_context_menu","scales_context_menu","legend_context_menu","objects_tree_context_menu"]},"items_favoriting":{},"save_chart_properties_to_local_storage":{},"use_localstorage_for_settings":{"subsets":["items_favoriting","save_chart_properties_to_local_storage"]},"handle_scale":{"subsets":["mouse_wheel_scale","pinch_scale","axis_pressed_mouse_move_scale"]},"handle_scroll":{"subsets":["mouse_wheel_scroll","pressed_mouse_move_scroll","horz_touch_drag_scroll","vert_touch_drag_scroll"]},"plain_studymarket":{},"disable_resolution_rebuild":{},"border_around_the_chart":{},"charting_library_debug_mode":{},"saveload_requires_authentication":{},"saveload_storage_customization":{},"volume_force_overlay":{},"create_volume_indicator_by_default":{},"create_volume_indicator_by_default_once":{},"saved_charts_count_restriction":{},"lean_chart_load":{},"stop_study_on_restart":{},"star_some_intervals_by_default":{},"move_logo_to_main_pane":{},"show_animated_logo":{},"link_to_tradingview":{},"logo_without_link":{},"right_bar_stays_on_scroll":{},"chart_content_overrides_by_defaults":{},"snapshot_trading_drawings":{},"allow_supported_resolutions_set_only":{},"widgetbar_tabs":{"subsets":["right_toolbar"]},"show_object_tree":{"subsets":["right_toolbar"]},"dome_widget":{"subsets":["right_toolbar","showdom_button"]},"dom_widget":{"subsets":["right_toolbar","showdom_button"]},"collapsible_header":{},"study_templates":{},"side_toolbar_in_fullscreen_mode":{},"header_in_fullscreen_mode":{},"remove_library_container_border":{},"whotrades_auth_only":{},"support_multicharts":{},"display_market_status":{},"display_data_mode":{},"datasource_copypaste":{},"drawing_templates":{"subsets":["linetoolpropertieswidget_template_button"]},"expand_symbolsearch_items":{},"symbol_search_three_columns_exchanges":{},"symbol_search_flags":{},"symbol_search_limited_exchanges":{},"bugreport_button":{"subsets":["right_toolbar"]},"footer_publish_idea_button":{},"showdom_button":{"subsets":["right_toolbar"]},"text_notes":{},"show_source_code":{},"symbol_info":{},"no_bars_status":{},"clear_bars_on_series_error":{},"hide_loading_screen_on_series_error":{},"seconds_resolution":{},"dont_show_boolean_study_arguments":{},"hide_last_na_study_output":{},"price_scale_always_last_bar_value":{},"study_dialog_fundamentals_economy_addons":{},"uppercase_instrument_names":{},"trading_notifications":{},"chart_crosshair_menu":{},"japanese_chart_styles":{},"hide_series_legend_item":{},"hide_study_overlay_legend_item":{},"hide_study_compare_legend_item":{},"linetoolpropertieswidget_template_button":{},"use_overrides_for_overlay":{},"timezone_menu":{},"main_series_scale_menu":{},"show_login_dialog":{},"remove_img_from_rss":{},"bars_marks":{},"chart_scroll":{},"chart_zoom":{},"source_selection_markers":{},"low_density_bars":{},"end_of_period_timescale_marks":{},"open_account_manager":{},"show_order_panel_on_start":{},"order_panel":{"subsets":["order_panel_close_button","order_panel_undock","right_toolbar","order_info"]},"multiple_watchlists":{},"watchlist_import_export":{},"study_overlay_compare_legend_option":{},"custom_resolutions":{},"referral_program_for_widget_owners":{},"mobile_trading":{},"real_brokers":{},"no_min_chart_width":{},"lock_visible_time_range_on_resize":{},"pricescale_currency":{},"cropped_tick_marks":{},"trading_account_manager":{},"disable_sameinterval_aligning":{},"display_legend_on_all_charts":{},"chart_style_hilo":{},"pricescale_unit":{},"show_spread_operators":{},"hide_exponentiation_spread_operator":{},"hide_reciprocal_spread_operator":{},"compare_symbol_search_spread_operators":{},"studies_symbol_search_spread_operators":{},"hide_resolution_in_legend":{},"hide_unresolved_symbols_in_legend":{},"fix_left_edge":{},"study_symbol_ticker_description":{},"two_character_bar_marks_labels":{},"tick_resolution":{},"secondary_series_extend_time_scale":{},"hide_volume_ma":{},"small_no_display":{},"charting_library_single_symbol_request":{},"use_ticker_on_symbol_info_update":{},"show_zoom_and_move_buttons_on_touch":{},"hide_main_series_symbol_from_indicator_legend":{},"chart_hide_close_position_button":{},"chart_hide_close_order_button":{},"hide_price_scale_global_last_bar_value":{},"tv_production":{"subsets":["auto_enable_symbol_labels","symbol_search_parser_mixin","header_fullscreen_button","header_widget","dont_show_boolean_study_arguments","left_toolbar","buy_sell_buttons","control_bar","symbol_search_hot_key","context_menus","edit_buttons_in_legend","object_tree_legend_mode","uppercase_instrument_names","use_localstorage_for_settings","saveload_requires_authentication","volume_force_overlay","saved_charts_count_restriction","create_volume_indicator_by_default","create_volume_indicator_by_default_once","charts_auto_save","save_old_chart_before_save_as","chart_content_overrides_by_defaults","alerts","header_saveload","header_layouttoggle","datasource_copypaste","show_saved_watchlists","watchlists_from_to_file","add_to_watchlist","property_pages","support_multicharts","display_market_status","display_data_mode","show_chart_warn_message","support_manage_drawings","widgetbar_tabs","study_templates","collapsible_header","drawing_templates","footer_publish_idea_button","text_notes","show_source_code","symbol_info","linetoolpropertieswidget_template_button","trading_notifications","symbol_search_three_columns_exchanges","symbol_search_flags","symbol_search_limited_exchanges","phone_verification","chart_events","custom_resolutions","compare_symbol","study_on_study","japanese_chart_styles","show_login_dialog","dome_widget","dom_widget","bars_marks","chart_scroll","chart_zoom","show_trading_notifications_history","source_selection_markers","study_dialog_fundamentals_economy_addons","multiple_watchlists","marked_symbols","order_panel","pricescale_currency","show_animated_logo","pricescale_currency","show_object_tree","watchlist_import_export","scales_date_format","popup_hints","show_right_widgets_panel_by_default","compare_recent_symbols_enabled","adaptive_trading_sources"]},"widget":{"subsets":["auto_enable_symbol_labels","symbol_search_parser_mixin","uppercase_instrument_names","left_toolbar","control_bar","symbol_search_hot_key","context_menus","edit_buttons_in_legend","object_tree_legend_mode","use_localstorage_for_settings","saveload_requires_authentication","volume_force_overlay","create_volume_indicator_by_default","create_volume_indicator_by_default_once","dont_show_boolean_study_arguments","header_widget_dom_node","header_symbol_search","header_resolutions","header_chart_type","header_compare","header_indicators","star_some_intervals_by_default","display_market_status","display_data_mode","show_chart_warn_message","symbol_info","linetoolpropertieswidget_template_button","symbol_search_three_columns_exchanges","symbol_search_flags","symbol_search_limited_exchanges","widgetbar_tabs","compare_symbol","show_login_dialog","plain_studymarket","japanese_chart_styles","bars_marks","chart_scroll","chart_zoom","source_selection_markers","property_pages","show_right_widgets_panel_by_default"]},"bovespa_widget":{"subsets":["widget","header_settings","linetoolpropertieswidget_template_button","compare_recent_symbols_enabled"]},"charting_library_base":{"subsets":["14851","allow_supported_resolutions_set_only","auto_enable_symbol_labels","border_around_the_chart","collapsible_header","constraint_dialogs_movement","context_menus","control_bar","create_volume_indicator_by_default","custom_items_in_context_menu","datasource_copypaste","uppercase_instrument_names","display_market_status","edit_buttons_in_legend","object_tree_legend_mode","graying_disabled_tools_enabled","header_widget","legend_widget","header_saveload","dont_show_boolean_study_arguments","lean_chart_load","left_toolbar","link_to_tradingview","pay_attention_to_ticker_not_symbol","plain_studymarket","refresh_saved_charts_list_on_dialog_show","right_bar_stays_on_scroll","saveload_storage_customization","stop_study_on_restart","timeframes_toolbar","symbol_search_hot_key","update_study_formatter_on_symbol_resolve","update_timeframes_set_on_symbol_resolve","use_localstorage_for_settings","volume_force_overlay","widget_logo","countdown","use_overrides_for_overlay","trading_notifications","compare_symbol","symbol_info","timezone_menu","main_series_scale_menu","create_volume_indicator_by_default_once","bars_marks","chart_scroll","chart_zoom","source_selection_markers","property_pages","go_to_date","adaptive_logo","show_animated_logo","handle_scale","handle_scroll","shift_visible_range_on_new_bar","chart_content_overrides_by_defaults","cropped_tick_marks","scales_date_format","popup_hints","save_shortcut","show_right_widgets_panel_by_default","show_object_tree","insert_indicator_dialog_shortcut","compare_recent_symbols_enabled","hide_main_series_symbol_from_indicator_legend"]},"charting_library":{"subsets":["charting_library_base"]},"static_charts_service":{"subsets":["charting_library","disable_resolution_rebuild"]},"trading_terminal":{"subsets":["charting_library_base","showdom_button","support_multicharts","header_layouttoggle","japanese_chart_styles","chart_property_page_trading","add_to_watchlist","open_account_manager","show_dom_first_time","order_panel","buy_sell_buttons","multiple_watchlists","show_trading_notifications_history","always_pass_called_order_to_modify","show_object_tree","watchlist_import_export","drawing_templates","trading_account_manager","chart_crosshair_menu","compare_recent_symbols_enabled","adaptive_trading_sources"]}}')
;var _=o.t(r,2);const s=new Map,a=new Map,n=new Set;function i(e){const t=s.get(e);if(void 0!==t)return t;const o=a.get(e);return!!o&&o.some(i)}function l(e,t){s.set(String(e),Boolean(t))}function d(e){l(e,!0)}function c(e){l(e,!1)}function u(){const e=Object.create(null);for(const t of n)e[t]=i(t);return e}!function(){for(const[e,t]of Object.entries(_))if(n.add(e),"subsets"in t)for(const o of t.subsets){n.add(o);let t=a.get(o);void 0===t&&(t=[],a.set(o,t)),t.push(e)}"object"==typeof __initialDisabledFeaturesets&&Array.isArray(__initialDisabledFeaturesets)&&__initialDisabledFeaturesets.forEach(c),"object"==typeof __initialEnabledFeaturesets&&Array.isArray(__initialEnabledFeaturesets)&&__initialEnabledFeaturesets.forEach(d)}()},778785:(e,t,o)=>{"use strict";o.r(t),o.d(t,{mobiletouch:()=>_,touch:()=>s,setClasses:()=>a});const r="ontouchstart"in window,_=r&&"onorientationchange"in window,s=r||!!navigator.maxTouchPoints;function a(){document.documentElement.classList.add(s?"feature-touch":"feature-no-touch",_?"feature-mobiletouch":"feature-no-mobiletouch")}},638456:(e,t,o)=>{"use strict";const{mobiletouch:r,touch:_}=o(778785);var s,a,n,i,l,d,c=window.TradingView=window.TradingView||{},u=window.chrome&&window.chrome.runtime,m=window.navigator.userAgent.toLowerCase().indexOf("firefox")>-1,h=/\sEdge\/\d\d\b/.test(navigator.userAgent),p=navigator.vendor&&navigator.vendor.indexOf("Apple")>-1&&-1===navigator.userAgent.indexOf("CriOS")&&-1===navigator.userAgent.indexOf("FxiOS");c.className=function(e){for(var t in c)if(c[t]===e)return t;return null},c.isMobile=(s=/Android/i.test(navigator.userAgent),a=/BlackBerry/i.test(navigator.userAgent),n=/iPhone|iPad|iPod/.test(navigator.platform),i=/Opera Mini/i.test(navigator.userAgent),l="MacIntel"===navigator.platform&&navigator.maxTouchPoints>1||/iPad/.test(navigator.platform),d=s||a||n||i,{Android:function(){return s},BlackBerry:function(){return a},iOS:function(){return n},Opera:function(){return i},isIPad:function(){return l},any:function(){return d}}),c.supportTouch=function(){return r||_||c.isMobile.any()},c.onWidget=function(){
for(var e=["^widgetembed/?$","^cmewidgetembed/?$","^([0-9a-zA-Z-]+)/widgetembed/?$","^([0-9a-zA-Z-]+)/widgetstatic/?$","^([0-9a-zA-Z-]+)?/?miniwidgetembed/?$","^([0-9a-zA-Z-]+)?/?mediumwidgetembed/?$","^embed(-static)?/([0-9a-zA-Z]{8})/?$","^widgetpopup/?$","^extension/?$","^chatwidgetembed/?$","^ideaswidgetembed/?$","^ideas-widget/?$","^view-idea-widget/([0-9a-zA-Z]{8})/?$","^embed-quotes-provider/?$","^idea-popup/?$","^hotlistswidgetembed/?$","^([0-9a-zA-Z-]+)/hotlistswidgetembed/?$","^marketoverviewwidgetembed/?$","^([0-9a-zA-Z-]+)/marketoverviewwidgetembed/?$","^eventswidgetembed/?$","^tickerswidgetembed/?$","^forexcrossrateswidgetembed/?$","^forexheatmapwidgetembed/?$","^marketquoteswidgetembed/?$","^screenerwidget/?$","^cryptomktscreenerwidget/?$","^([0-9a-zA-Z-]+)/cryptomktscreenerwidget/?$","^([0-9a-zA-Z-]+)/marketquoteswidgetembed/?$","^technical-analysis-widget-embed/$","^singlequotewidgetembed/?$","^([0-9a-zA-Z-]+)/singlequotewidgetembed/?$","^embed-widget/([0-9a-zA-Z-]+)/(([0-9a-zA-Z-]+)/)?$"],t=window.location.pathname.replace(/^\//,""),o=e.length-1;o>=0;o--)if(new RegExp(e[o]).test(t))return!0;return!1},c.onOrder=function(){return"/order/"===window.location.pathname},e.exports.isMac=function(){return/mac/i.test(navigator.platform)},e.exports.isWindows=function(){return/Win32|Win64/i.test(navigator.platform)},e.exports.isDesktopApp=function(){return/TVDesktop/i.test(navigator.userAgent)},e.exports.desktopAppVersion=function(){const e=navigator.userAgent.match(/TVDesktop\/([^\s]+)/);return e&&e[1]},e.exports.CheckMobile=c.isMobile,e.exports.onWidget=c.onWidget,e.exports.supportTouch=c.supportTouch,e.exports.checkPageType=function(e){return new URLSearchParams(window.location.search).get("page_type")===e},e.exports.isChrome=u,e.exports.isFF=m,e.exports.isEdge=h,e.exports.isSafari=p,e.exports.onOrder=c.onOrder,e.exports.className=c.className,e.exports.onGoPro=function(){return"/gopro/"===window.location.pathname},e.exports.onMainPage=function(){return"/"===window.location.pathname}}}]);