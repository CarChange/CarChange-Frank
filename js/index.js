/*
 *		This file contains the javascript code for our gallery
 */

// variables for all of the templates so we only have to compile
// them once on page load and can then use the same compiled 
// templates many times
var index_template, compras_template;



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
	var source   = $("#index-template").html();
	index_template = Handlebars.compile(source);
	
	source   = $("#compras-template").html();
	compras_template = Handlebars.compile(source);
	

	// 
	//  clicking on the albums tab shows the 
	//  thumbnails of all the albums
	//
	$("#index-tab").click(function () {

		// displays the albums template
		showTemplate(index_template);

	});
    
    
	// start the page by showing the albums view
	// we do this by virtually clicking on the 
	// albums tab
	$("#index-tab").click();
    
});