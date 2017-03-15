/*
 *		This file contains the javascript code for our gallery
 */

// variables for all of the templates so we only have to compile
// them once on page load and can then use the same compiled 
// templates many times
var pagseguro_template, tabelas_template, planos_template, login_template, consorcio_template;



// a helper function that instantiates a template
// and displays the results in the content div
function showTemplate(template, data) {
	var html    = template(data);
	$('#content').html(html);
}

// document read gets called when the whole document
// is loaded, so we put most of the code that needs to run
// in here
$(document).ready(function () {

	//
	// compile all of our templates ready for use
	//
	var source   = $("#pagseguro-template").html();
	pagseguro_template = Handlebars.compile(source);
	
	source   = $("#tabelas-template").html();
	tabelas_template = Handlebars.compile(source);
	
	source   = $("#planos-template").html();
	planos_template = Handlebars.compile(source);
	
	source   = $("#login-template").html();
	login_template = Handlebars.compile(source);
    
    source   = $("#consorcio-template").html();
    consorcio_template = Handlebars.compile(source);

	// 
	//  clicking on the albums tab shows the 
	//  thumbnails of all the albums
	//
	$("#pagseguro-tab").click(function () {

		// displays the albums template
		showTemplate(pagseguro_template);

		// make the albums tab the active one
		// first make the currently active tab inactive
		$(".nav .nav-tabs .active").removeClass("active");
		// then make albums tab active
		$("#pagseguro-tab").addClass("active");

	});

	// 
	//  clicking on the photos tab shows all of the 
	//  photos in the current album
	//
	$("#tabelas-tab").click(function () {
		
		// displays the photos template
		showTemplate(tabelas_template);

		// make the photos tab the active one
		// first make the currently active tab inactive
		$(".nav .nav-tabs .active").removeClass("active");
		// then make photos tab active
		$("#tabelas-tab").addClass("active");

	});

	// 
	//  clicking on the slideshow tab displays the
	//  current album as a slide show
	//
	$("#planos-tab").click(function () {
		// display the slideshow template using the 
		// current album
		showTemplate(planos_template);
		
		// make the slideshow tab the active one
		// first make the currently active tab inactive
		$(".nav .nav-tabs .active").removeClass("active");
		// then make slideshow tab active
		$("#planos-tab").addClass("active");
	});

    
    $("#login-tab").click(function () {
		// display the slideshow template using the 
		// current album
		showTemplate(login_template);
		
		// make the slideshow tab the active one
		// first make the currently active tab inactive
		$(".nav .nav-tabs .active").removeClass("active");
		// then make slideshow tab active
		$("#login-tab").addClass("active");
	});
    
    
	// start the page by showing the albums view
	// we do this by virtually clicking on the 
	// albums tab
	$("#pagseguro-tab").click();
    
});


//Mesma função das tabs, mas no botão inicial
$("#pagseguro-tab").ready(function () {
    
    $("#consorcio").click(function () {
        // display the slideshow template using the 
        // current album
        showTemplate(consorcio_template);
    });
    $("#consorcio-xs").click(function () {
        // display the slideshow template using the 
        // current album
        showTemplate(consorcio_template);
    });
});