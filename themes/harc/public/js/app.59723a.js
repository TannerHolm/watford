"use strict";(self.webpackChunksage=self.webpackChunksage||[]).push([[143],{537:function(n,e,t){var i=t(575),o=t(567);const c=async n=>{n&&console.error(n);var e=o(".home-video").data("src"),t=o(".home-video");if(t.length){var i=new XMLHttpRequest;i.open("GET",e,!0),i.responseType="blob",i.onload=function(){if(200===this.status){var n=this.response,e=URL.createObjectURL(n);t.attr("src",e),setTimeout((function(){o(".cover-img").hide()}),200)}},i.onerror=function(){},i.send()}o(".menu-item-has-children").on("click",(function(n){o(this).find("ul.sub-menu").slideToggle(),o(this).toggleClass("active")})),o("a.menu-trigger").on("click",(function(n){o("section.navigation").fadeIn()})),o("a.close").on("click",(function(n){o("section.navigation").fadeOut()})),o(".services .content-item").on("click",(function(n){var e=o(this).find(".content"),t=o(this).find("svg.accordion");o(this).find("svg").toggleClass("active"),o(".content").not(e).slideUp(),o("svg.accordion").not(t).removeClass("active"),o(this).find(".content").slideToggle()})),o(".first .content-title").trigger("click")};(0,i.Z)(c)},713:function(){},567:function(n){n.exports=window.jQuery}},function(n){var e=function(e){return n(n.s=e)};n.O(0,[575],(function(){return e(537),e(713)})),n.O()}]);