/*!
 * Socialplay v.1.0.0
 * Copyright 2013 extracoding
 * 
 */

jQuery(document).ready(function ($) {
	"use strict";

	/*** Menu in Mobile version 
	////////////////////////////////////// ***/
  $(".tablet-menu").on("click", function(){

		if ($(".main-nav ul:first").css('left') === '-200px') {

				$(".main-nav ul:first")
					.css('left', '0px');
				$(this).css({'left':'220px'});
				$("body").css({'marginRight':'-200px', 'paddingLeft':'200px'});	

		}
		else {

			$(".main-nav ul:first").css('left', '-200px');	
			$(this).css({'left':'20px'});
			$("body")
				.css({'marginRight':'0px', 'paddingLeft':'0px'})
				.removeAttr('style');

		}

  });

	function menuTablet() {
		var $screen = $(window).width();
		if ($screen > 979) {
			$(".tablet-menu")
				.css('left','20px');
			$(".main-nav ul:first")
				.css({'left':'0px'})
				.removeAttr('style');
				
			$("body")
				.css({'marginRight':'0px', 'paddingLeft':'0px'})
				.removeAttr('style');
		}
	}
	menuTablet();


	$('.gallery .image').mouseenter(function(){
				var $this = $(this);
				var ht = $('.image-info p', $this).height() / 2;
				$('.image-info p', $this).css({'marginTop':-ht});
	});

		/*** News Ticker 
		////////////////////// ***/
		function tweet(){
			var $li = $('.tweets li:first');
			$li.fadeOut( function () { $li.appendTo($('.tweets')).fadeIn(); });
			$li.addClass('current');
		}
		setInterval(function(){ tweet (); }, 5000);

		/*** Data Picker ***/
		if( $('#datepicker').length !== 0 ){
			$( "#datepicker" ).datepicker();
		}
		
		
		
	/*** Dialog Script ***/
	$("#dialog-login, #dialog-search").dialog({
		autoOpen: false,
		draggable: false,
		show: {effect:'drop', direction:'left'},
		hide: {effect:'drop', direction:'right'}
	});

	/*** Trigger Dialog ***/
	$('.user-login').on('click', this, function(e){
		$('.dialog-overlay').fadeIn();
		$( "#dialog-login" ).dialog('open');
		e.preventDefault();
	});
	$('.user-search').on('click', this, function(e){
		$('.dialog-overlay').fadeIn();
		$( "#dialog-search" ).dialog('open');
		e.preventDefault();
	});
	$('.ui-dialog .ui-dialog-titlebar-close').click( function(){
		$('.dialog-overlay').fadeOut();
	});
	/*** hide elements on ESCAPE ***/
	$(document).bind('keydown', function(e) {
		if (e.keyCode === 27) {
			$(".dialog-overlay").fadeOut();
		}
	});

	function dialogLogin_size (){
		var resolution = $(window).width();
		if(resolution <= 480){
			var winW = $(window).width();
			$("#dialog-login, #dialog-search").dialog( "option", "width", winW );
		}
		if(resolution > 480){
			$("#dialog-login, #dialog-search").dialog( "option", "width", 400 );
		}

		
	} // dialogLogin_size function ends
	dialogLogin_size(); // Dialog resizing function
		$(window).resize( function(){
			dialogLogin_size(); // Dialog resizing function
			menuTablet();
		});
		
		
		/*** Accordion script ***/
		$( "#accordion" )
			.accordion({
				header: " > h6",
				heightStyle: "content"
			});

			if($("a[data-rel^='prettyPhoto']").length !== 0){
				$("a[data-rel^='prettyPhoto']").prettyPhoto({
					animation_speed:'normal',
					theme:'pp_default',
					slideshow:3000,
					autoplay_slideshow: false
				});
			}

}); // document ready function ends //