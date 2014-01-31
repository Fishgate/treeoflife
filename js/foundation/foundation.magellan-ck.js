(function(e,t,n,r){"use strict";Foundation.libs.magellan={name:"magellan",version:"5.0.3",settings:{active_class:"active",threshold:0},init:function(t,n,r){this.fixed_magellan=e("[data-magellan-expedition]");this.magellan_placeholder=e("<div></div>").css({height:this.fixed_magellan.outerHeight(!0)}).hide().insertAfter(this.fixed_magellan);this.set_threshold();this.set_active_class(n);this.last_destination=e("[data-magellan-destination]").last();this.events()},events:function(){var n=this;e(this.scope).off(".magellan").on("arrival.fndtn.magellan","[data-magellan-arrival]",function(t){var r=e(this),i=r.closest("[data-magellan-expedition]"),s=i.attr("data-magellan-active-class")||n.settings.active_class;r.closest("[data-magellan-expedition]").find("[data-magellan-arrival]").not(r).removeClass(s);r.addClass(s)});this.fixed_magellan.off(".magellan").on("update-position.fndtn.magellan",function(){var t=e(this)}).trigger("update-position");e(t).off(".magellan").on("resize.fndtn.magellan",function(){this.fixed_magellan.trigger("update-position")}.bind(this)).on("scroll.fndtn.magellan",function(){var r=e(t).scrollTop();n.fixed_magellan.each(function(){var t=e(this);typeof t.data("magellan-top-offset")=="undefined"&&t.data("magellan-top-offset",t.offset().top);typeof t.data("magellan-fixed-position")=="undefined"&&t.data("magellan-fixed-position",!1);var i=r+n.settings.threshold>t.data("magellan-top-offset"),s=t.attr("data-magellan-top-offset");if(t.data("magellan-fixed-position")!=i){t.data("magellan-fixed-position",i);if(i){t.addClass("fixed");t.css({position:"fixed",top:0});n.magellan_placeholder.show()}else{t.removeClass("fixed");t.css({position:"",top:""});n.magellan_placeholder.hide()}i&&typeof s!="undefined"&&s!=0&&t.css({position:"fixed",top:s+"px"})}})});this.last_destination.length>0&&e(t).on("scroll.fndtn.magellan",function(r){var i=e(t).scrollTop(),s=i+e(t).height(),o=Math.ceil(n.last_destination.offset().top);e("[data-magellan-destination]").each(function(){var t=e(this),r=t.attr("data-magellan-destination"),u=t.offset().top-t.outerHeight(!0)-i;u<=n.settings.threshold&&e("[data-magellan-arrival='"+r+"']").trigger("arrival");s>=e(n.scope).height()&&o>i&&o<s&&e("[data-magellan-arrival]").last().trigger("arrival")})})},set_threshold:function(){typeof this.settings.threshold!="number"&&(this.settings.threshold=this.fixed_magellan.length>0?this.fixed_magellan.outerHeight(!0):0)},set_active_class:function(e){e&&e.active_class&&typeof e.active_class=="string"&&(this.settings.active_class=e.active_class)},off:function(){e(this.scope).off(".fndtn.magellan");e(t).off(".fndtn.magellan")},reflow:function(){}}})(jQuery,this,this.document);