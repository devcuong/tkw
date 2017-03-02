var wls_file_frame;

(function( $ ) {
	'use strict';

	 $(function() {

	 	$( "#main-slides-list-wrap" ).sortable();

	 	// Create  Slider 
	 	jQuery(document).on('click', 'input.wls-select-img', function( event ){	 		
	 	  var $this = $(this);
	 	  event.preventDefault();

	 	  // Create the media frame.
	 	  wls_file_frame = wp.media.frames.wls_file_frame = wp.media({
	 	    title: jQuery( this ).data( 'uploader_title' ),
	 	    button: {
	 	      text: jQuery( this ).data( 'uploader_button_text' ),
	 	    },
	 	    multiple: false 
	 	  });

	 	  // When an image is selected, run a callback.
	 	  wls_file_frame.on( 'select', function() {

	 	    var attachment = wls_file_frame.state().get('selection').first().toJSON();

	 	    var mytemplate = $("#template-wls-slider-item").html();

	 		$('#main-slides-list-wrap').append(mytemplate);
	 	    	 	    
	 	    var image_field = $this.parent().siblings('.wls-slide-image-id');
	 	    
	 	    image_field.val(attachment.id);
	 	    //console.log(attachment.id);
	 	    var imgurl = attachment.url;

	 	    if( 'undefined' != typeof attachment.sizes.thumbnail ){
  	 	    imgurl = attachment.sizes.thumbnail.url;
	 	    }
	 	    var image_preview_wrap = $this.siblings('.wls-slide-image-id');

	 	    image_preview_wrap.show();
	 	    image_preview_wrap.find('.img-preview').attr('class',"imgurl");

	 	     // Hide upload button
 	    	//$this.hide();
 	    	 
	 	  });

	 	  // Finally, open the modal
	 	  wls_file_frame.open();
	 	});

		// single image Upload/change only
	 	jQuery(document).on('click', 'input.wls-select-single-img', function( event ){
			var $this = $(this);
			event.preventDefault();

			// Create the media frame.
			wls_file_frame = wp.media.frames.wls_file_frame = wp.media({
				title: jQuery( this ).data( 'uploader_title' ),
				button: {
				  text: jQuery( this ).data( 'uploader_button_text' ),
				},
				multiple: false  // Set to true to allow multiple files to be selected
			});

			// When an image is selected, run a callback.
			wls_file_frame.on( 'select', function() {
	 	    // We set multiple to false so only get one image from the uploader
		 	    var attachment = wls_file_frame.state().get('selection').first().toJSON();	 
		 	    
		 	    var image_field = $this.siblings('.wls-slide-image-id');
		 	    image_field.val(attachment.id);

		 	    var imgurl = attachment.url;
		 	    if( 'undefined' != typeof attachment.sizes.thumbnail ){
	  	 	    imgurl = attachment.sizes.thumbnail.url;
		 	    }
		 	    var image_preview_wrap = $this.siblings('.image-preview-wrap');
		 	    image_preview_wrap.show();
		 	    image_preview_wrap.find('.img-preview').attr('src',imgurl);

		 	     // Hide upload button
	 	    	$this.hide();
		 	    return;
			});

			// Finally, open the modal
			wls_file_frame.open();
	 	});

		// Image remove button handler
		$(document).on('click', 'a.btn-wls-remove-image-upload', function(evt){
		  evt.preventDefault();
		  var $this = $(this);

		  var image_field_temp = $this.parent().parent().parent().find('input.wls-slide-image-id');
		  var upload_button = $this.parent().parent().parent().find('input.wls-select-single-img');
		  var image_preview_wrap = $this.parent().parent().parent().find('.image-preview-wrap');
		  var cur_image_value = image_field_temp.val();

		  image_field_temp.val('');
		  image_preview_wrap.fadeOut('slow',function(){
			  image_preview_wrap.hide();
			  image_preview_wrap.find('.img-preview').attr('src','');
			  upload_button.fadeIn();
		  });
		  return;
		});


	 	// Remove Handler
	 	$(document).on('click','input.btn-remove-slide-item', function(e){

	 		e.preventDefault();
	 		// Confirmation
	 		var confirmation = confirm(WLS_OBJ.lang.are_you_sure);
	 		if( ! confirmation ){
	 			return false;
	 		}

	 		var $this = $(this);
	 		var $wrap = $this.parent().parent();
	 		$wrap.fadeOut('slow',function(){
				$wrap.remove();
			});

	 	});



	 	// Add Handler
	 	$('input.btn-add-slide-item').on('click', function(e){

	 		e.preventDefault();
	 		var mytemplate = $("#template-wls-slider-item").html();
	 		$('#main-slides-list-wrap').append(mytemplate);
	 		$('.txt-slide-title').focus();
 	 		return;

	 	});


        // for choosen dropdown
        $(".wls-choosen").chosen({
		  disable_search_threshold: 10 
		});

		$(".wls-choosen-nav-type").chosenImage({
		  disable_search_threshold: 10,
		  
		});
		
		$(document).on('keyup select', ".txt-slide-url",function(e) {				
			var url = $(this).val();
			var pattern = /^(http(s)?:\/\/)?(www\.)?[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/;				
			 if(!pattern.test(url) && url != "")
			 	$(this).addClass('error');
		 	else
		 		$(this).removeClass('error');

		 	var Error = "";
		 	$('.txt-slide-url').each(function(i){
		 		if($(this).hasClass('error')){
		 			Error ="has error";
		 		}			 			
		 	});

		 	if(!Error)
		 		$('#publish').removeAttr('disabled');
		 	else{
		 		$('#publish').attr('disabled','disabled');			 					 		  
		 	}
			
		});

		$('#post').submit(function(e){
			e.preventDefault();	
			var Error = "";
			$('.txt-slide-url').each(function(i){
		 		if($(this).hasClass('error')){
		 			Error ="has error";
		 			$(this).focus();
		 			return;
		 		}			 			
		 	});				
		 	if(!Error)
		 		$(this).unbind().submit();
	 	});

		$(".tabs-menu a").click(function(event) {
	        event.preventDefault();
	        $(this).parent().addClass("current");
	        $(this).parent().siblings().removeClass("current");
	        var tab = $(this).attr("href");
	        $(".tab-content").not(tab).css("display", "none");
	        $(tab).fadeIn();
	    });
	    $("input:text").focus(function() { $(this).select(); } );
		    
	 	  // setting option acc
	    $(document).on('click','.option-title a',function(e){
			e.preventDefault();
			$(this).parent().next("div.setting-options").slideToggle();
			
			if($(this).hasClass('showing')){
				$(this).removeClass('showing');
				$(this).children('i').removeClass('dashicons-arrow-up').addClass('dashicons-arrow-down');				
			}
			else{
				$(this).addClass('showing');
				$(this).children('i').removeClass('dashicons-arrow-down').addClass('dashicons-arrow-up');				
			}
		});
		
 	 });

})( jQuery );

