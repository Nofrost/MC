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
};//*/

$(document).ready(function() {
	//About navigation
	$("header_wrapper > #logo").click(function() {
		$("#content_main_services,#content_main_objectives,#content_main_test,#content_main_contact").addClass("hide");
		$("#content_main_presentation").removeClass("hide");
	});
	$("nav > #objectives").click(function() {
		$("#content_main_services,#content_main_presentation,#content_main_test,#content_main_contact").addClass("hide");
		$("#content_main_objectives").removeClass("hide");
		$("#objectives").addClass("active");
		$("#services,#test,#contact").removeClass("active");
	});
	$("nav > #services").click(function() {
		$("#content_main_objectives,#content_main_presentation,#content_main_test,#content_main_contact").addClass("hide");
		$("#content_main_services").removeClass("hide");
		$("#objectives").addClass("active");
		$("#objectives,#test,#contact").removeClass("active");
	});
	$("nav > #test").click(function() {
		$("#content_main_services,#content_main_presentation,#content_main_objectives,#content_main_contact").addClass("hide");
		$("#content_main_test").removeClass("hide");
		$("#test").addClass("active");
		$("#services,#objectives,#contact").removeClass("active");
	});
	$("nav > #contact").click(function() {
		$("#content_main_services,#content_main_presentation,#content_main_objectives,#content_main_test").addClass("hide");
		$("#content_main_contact").removeClass("hide");
		$("#contact").addClass("active");
		$("#services,#objectives,#test").removeClass("active");
	});




	loadImages();

/*	Code from bookandlook
	window.routing = new window.Routing();
//	window.views = new window.Views();
	window.buttonsView = new window.ButtonsView();
	window.logosView = new window.LogosView();

	Backbone.history.start(); //{pushState: true}*/

});
