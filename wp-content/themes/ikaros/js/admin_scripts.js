$ = jQuery.noConflict();
jQuery(function(jQuery) {  


	$('#navigation_arrows').val('verticalcentered');
	$('#navigaion_type').val('bullet');
	$('#nav_offset_vert').val('-25');
	$('#responsitive_w3').prop('disabled', true).val('480').css('backgroundColor', '#F0F0F0');
	$('#responsitive_w2').prop('disabled', true).val('768').css('backgroundColor', '#F0F0F0');
	$('#responsitive_w1').prop('disabled', true).val('960').css('backgroundColor', '#F0F0F0');

	/* Slider setup */

	checkSlider();
	addBindings();

	$('.option-tree-list-item-add').click(function(){
		setTimeout(addBindings,1000);
		setTimeout(checkSlider,1000);
	});

	function addBindings(){
		$('.rb_slide_type').unbind('change', checkSlider).bind('change', checkSlider);
	}

	function checkSlider(){
		var type = $('.list-sub-setting').find('.rb_slide_type').val();
		switch(type){
			case 'image':
				$('.rb_slide_hosted').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeOut(100);
				$('textarea').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeOut(100);
				$('.rb_slide_image').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeIn(100);
				break;
			case 'emb_video':
				$('.rb_slide_hosted').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeOut(100);
				$('.rb_slide_image').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeOut(100);
				$('textarea').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeIn(100);
				break;
			case 'self_video':
				$('.rb_slide_image').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeOut(100);
				$('textarea').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeOut(100);
				$('.rb_slide_hosted').parentsUntil('.option-tree-setting-wrap', '.format-settings').fadeIn(100);
				break;
		}
	}

	/* Project setup */

	$('#rb_project_type').unbind('change', checkProject).bind('change', checkProject);
	hideAllProject([$('#rb_project_image')]);

	function checkProject(){
		var type = $('#rb_project_type').val();
		switch(type){
			case 'image':
				hideAllProject([$('#rb_project_image')]);
				break;
			case 'video_emb':
				hideAllProject([$('#rb_project_video_emb')]);
				break;
			case 'video_self':
				hideAllProject([$('#rb_project_video_host_1'),$('#rb_project_video_host_2'),$('#rb_project_video_host_3'),$('#rb_project_video_host_4')]);
				break;
			case 'gallery':
				hideAllProject([$('#rb_project_gallery_settings_array')]);
				break;
			case 'audio':
				hideAllProject([$('#rb_project_audio_1'),$('#rb_project_audio_2')]);
				break;
			case 'link':
				hideAllProject([]);
				break;
		}
	}

	function hideAllProject(array){

		$('#rb_project_image').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_video_emb').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_video_emb').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_video_host_1').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_video_host_2').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_video_host_3').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_video_host_4').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_audio_1').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_audio_2').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);
		$('#rb_project_gallery_settings_array').parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeOut(100);

		for(var i=0; i<array.length; i++){
			array[i].parentsUntil('.ot-metabox-wrapper', '.format-settings').stop().fadeIn(100);
		}

	}
 
});  

