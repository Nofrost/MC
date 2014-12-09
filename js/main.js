//Utils
/*window.log = function(msg) {
	if( typeof console == 'object' && _.isFunction(console.log)) {
		console.log(msg);
	}
};
window.err = function(msg) {
	if( typeof console == 'object' && _.isFunction(console.error)) {
		console.error(msg);
	}
};*/
//Param can be an array, object or string
/*window.preloadImage = function(param) {
	switch(typeof param) {
		case 'string':
			window._preloadImage(param);break;
		case 'object':
			$.each(param, function(k,v) {window._preloadImage(v);});break;
		default:
			log(this+': preloadImage error, typeof '+(typeof param)+' not allowed');
	}
};
window._preloadImage = function(url) {
	if(typeof url == "string") {
		var img = new Image();
		img.src = url;
	} else {
		console.log(this+': _preloadImage error, typeof '+(typeof url)+' is not a string');
	}
};*/

$(document).ready(function () {
	//About navigation
	'use strict';
	$("header_wrapper > #logo").click(function () {
		$("#content_main_services,#content_main_objectives,#content_main_test,#content_main_contact,#content_main_legal").addClass("hide");
		$("#content_main_presentation").removeClass("hide");
	});
	$("nav > #objectives").click(function () {
		$("#content_main_services,#content_main_presentation,#content_main_test,#content_main_contact,#content_main_legal").addClass("hide");
		$("#content_main_objectives").removeClass("hide");
		$("#objectives").addClass("active");
		$("#services,#test,#contact,#legal").removeClass("active");
	});
	$("nav > #services").click(function () {
		$("#content_main_objectives,#content_main_presentation,#content_main_test,#content_main_contact,#content_main_legal").addClass("hide");
		$("#content_main_services").removeClass("hide");
		$("#objectives").addClass("active");
		$("#objectives,#test,#contact,#legal").removeClass("active");
	});
	$("nav > #test").click(function () {
		$("#content_main_services,#content_main_presentation,#content_main_objectives,#content_main_contact,#content_main_legal").addClass("hide");
		$("#content_main_test").removeClass("hide");
		$("#test").addClass("active");
		$("#services,#objectives,#contact,#legal").removeClass("active");
	});
	$("nav > #contact").click(function () {
		$("#content_main_services,#content_main_presentation,#content_main_objectives,#content_main_test,#content_main_legal").addClass("hide");
		$("#content_main_contact").removeClass("hide");
		$("#contact").addClass("active");
		$("#services,#objectives,#test,#legal").removeClass("active");
	});
	$("#footer_wrapper > #legal").click(function () {
		$("#content_main_services,#content_main_presentation,#content_main_objectives,#content_main_test,#content_main_contact").addClass("hide");
		$("#content_main_legal").removeClass("hide");
		$("#legal").addClass("active");
		$("#services,#objectives,#test,#contact").removeClass("active");
	});
	$("#question_test > span > div:last-child > a#button_click").click(function () {
		$("#result_test").addClass("active");
	});
	/*
	Info:
		http://sorgalla.com/jcarousel/docs/reference/configuration.html
		http://sorgalla.com/jcarousel/docs/reference/usage.html
	*/
	$('.jcarousel').jcarousel({
		//Configuration
		wrap: 'both',
		transitions: true,
		animation: 1000
	});
	$("#video-player").bind('ended', function () { //Al acabar el video
		$('.jcarousel').jcarousel('scroll', '+=1'); //Usage
		//Sino també es pot canviar de pàgina amb això:
//		$('.jcarousel').jcarousel('scroll', 0);
	});
	var checkboxes = $("input[type='checkbox']"), submitButt = $("input[type='submit']"), vid = $("#video-player");
	checkboxes.click(function () {
		submitButt.attr("disabled", !checkboxes.is(":checked"));
	});
	if ($('#content_main_presentation').hassClass("hide")) {
		vid.muted = true;
	}
//	loadImages();

/*	Code from bookandlook
	window.routing = new window.Routing();
//	window.views = new window.Views();
	window.buttonsView = new window.ButtonsView();
	window.logosView = new window.LogosView();

	Backbone.history.start(); //{pushState: true}*/

});
