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
	window.actualPage = $("body").attr('data-page');

	//About navigation
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


	switch (window.actualPage) {
	case 'index':
//		console.log('testing svg');
		nosvg = false;
		try {
			if (!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure", "1.1")) {
				nosvg = true;
			}
		} catch (e) {
			nosvg = true;
		}
		if (nosvg) {
//			console.log('nosvg');
			$("#Logo_index").addClass('hide');
			$("#Logo_index_jpg").removeClass('hide');
//		} else {
//			console.log('svg ok');
		}

		break;
	case 'Presentation':
		$("#video-player").get(0).play();
		$("#video-player").bind('ended', function () { //Al acabar el video
			$(".jcarousel")
				.removeClass("jcarousel-small").addClass("jcarousel-big")
				.jcarousel('scroll', '+=1'); //Usage
				//Sino també es pot canviar de pàgina amb això:
//				$('.jcarousel').jcarousel('scroll', 0);
		});
		break;
//	case 'Objectives':
//		break;
	case 'Services':
		$("#video-services").get(0).play();
		$("#video-services").bind('ended', function () { //Al acabar el video
			$("#video-services").fadeOut();
		});
		break;
//	case 'Test':
//		break;
//	case 'Contact':
//		break;
//	case 'Legal':
//			break;
	}

//	loadImages();

/*	Code from bookandlook
	window.routing = new window.Routing();
//	window.views = new window.Views();
	window.buttonsView = new window.ButtonsView();
	window.logosView = new window.LogosView();

	Backbone.history.start(); //{pushState: true}*/

});
