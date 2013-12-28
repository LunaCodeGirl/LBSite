<?php

add_action( 'admin_init', 'rb_meta_boxes' );

global $sidebars_array;

function rb_meta_boxes() {

    $sidebars = ot_get_option('rb_sidebars');
    $sidebars_array = array();
    $sidebars_k = 0;
    if(!empty($sidebars)){
        foreach($sidebars as $sidebar){
            $sidebars_array[$sidebars_k++] = array(
                'label' => $sidebar['title'],
                'value' => $sidebar['id']
            );
        }
    }

  $rb_meta_box_tagline = array(
    'id'        => 'rb_meta_box_tagline',
    'title'     => 'Tagline',
    'desc'      => '',
    'pages'     => array( 'page', 'portfolio' ),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'rb_meta_box_tagline_set',
        'label'       => 'Tagline',
        'desc'        => 'Choose a tagline for the current page. You can use a <span> object to make highlights.',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        )
      )
    );

  $rb_meta_box_sidebar = array(
    'id'        => 'rb_meta_box_sidebar',
    'title'     => 'Layout',
    'desc'      => 'If you chose the sidebar layout, please choose a sidebar from the list below. Sidebars can be created in the Theme Options and configured in the Theme Widgets.',
    'pages'     => array( 'page' ),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'rb_meta_box_sidebar_layout',
        'label'       => 'Layout',
        'desc'        => '',
        'std'         => 'full-width',
        'type'        => 'radio_image',
        'class'       => ''
        ),
      array(
        'id'          => 'rb_meta_box_sidebar_set',
        'label'       => 'Sidebar',
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'class'       => '',
        'choices'    => $sidebars_array
        )
      )
    );

  $rb_meta_box_slider_home = array(
    'id'        => 'rb_meta_box_slider_home',
    'title'     => 'Slider',
    'desc'      => '',
    'pages'     => array( 'page'),
    'context'   => 'side',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'rb_meta_box_slider_home_set',
        'label'       => 'Slider ID',
        'desc'        => 'Write the slider id (alias) which will be used for this page. Please configure sliders inside the Revolution Slider admin panel!',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        )
      )
    );

  $rb_meta_box_video = array(
    'id'        => 'rb_meta_box_video',
    'title'     => 'Video',
    'desc'      => '',
    'pages'     => array( 'videofolio' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'rb_meta_box_video_code',
        'label'       => 'Video embedding code',
        'desc'        => 'Insert the embedding code if you\'re using videos from Vimeo or YouTube',
        'std'         => '',
        'type'        => 'textarea-simple',
        'class'       => '',
        )/*,
      array(
        'id'          => 'rb_meta_box_video_text',
        'label'       => 'Self hosted video',
        'desc'        => 'For self hosted videos you need the video in two formats: .mp4 and .ogv. You also need a .jpg video poster and you have to specify the height of the video(considering that the maximum width will be 960px). <br /><br />If you write inside these fields, the video above will be overwritten so you\'ll only have one video inside your project.',
        'std'         => '',
        'type'        => 'textblock-titled',
        'class'       => '',
        ),
      array(
        'id'          => 'rb_meta_box_video_file1',
        'label'       => 'MP4 Path',
        'desc'        => 'Upload an .mp4 video file or write a link to one.',
        'std'         => '',
        'type'        => 'upload',
        'class'       => '',
        ),
      array(
        'id'          => 'rb_meta_box_video_file2',
        'label'       => 'OGV Path',
        'desc'        => 'Upload an .ogv video file or write a link to one.',
        'std'         => '',
        'type'        => 'upload',
        'class'       => '',
        ),
      array(
        'id'          => 'rb_meta_box_video_file3',
        'label'       => 'Image Poster',
        'desc'        => 'Upload a .jpg image file or write a link to one.',
        'std'         => '',
        'type'        => 'upload',
        'class'       => '',
        ),
      array(
        'id'          => 'rb_meta_box_video_height',
        'label'       => 'Height',
        'desc'        => 'Write the video height here (in px).',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        ),*/
      )
    );

  $rb_meta_box_home = array(
    'id'        => 'rb_meta_box_home',
    'title'     => 'Homepage Options',
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'rb_home_slider_show',
        'label'       => 'Display Slider',
        'desc'        => 'Choose wheter you want to display a slider on the homepage or not.',
        'std'         => 'no',
        'type'        => 'radio',
        'class'       => '',
        'choices'     => array(
        	array(
        		'label'	=> 'Yes',
        		'value'	=> 'yes'
        	),
        	array(
        		'label'	=> 'No',
        		'value'	=> 'no'
        	)
        )
      ),

      array(
        'id'          => 'rb_home_slider_setup',
        'label'       => 'Slider Setup',
        'desc'        => 'This is a slider which supports both images & videos. Please make sure that all of your images/videos share the same size!',
        'std'         => '',
        'type'        => 'list-item',
        'class'       => 'rb_slider',
        'choices'     => array(),
        'settings'    => array(
          array(
            'id'      => 'rb_slide_type',
            'label'   => 'Slide Type',
            'desc'    => 'Choose the slide\'s type',
            'std'     => '',
            'type'    => 'select',
            'class'   => 'rb_slide_type',
            'choices' => array(
            	array(
            		'label'	=> 'Image',
            		'value'	=> 'image'
            	),
            	array(
            		'label'	=> 'Embedded Video',
            		'value'	=> 'emb_video'
            	),
            	array(
            		'label'	=> 'Self Hosted Video',
            		'value'	=> 'self_video'
            	)
            )
          ),

          /* Image type */

          array(
            'id'      => 'rb_slide_image',
            'label'   => 'Image',
            'desc'    => 'Upload an image.',
            'std'     => '',
            'type'    => 'upload',
            'class'   => 'rb_slide_image',
            'choices' => array()
          ),
          array(
            'id'      => 'rb_slide_caption',
            'label'   => 'Caption',
            'desc'    => 'Write a short caption for the current image.',
            'std'     => '',
            'type'    => 'text',
            'class'   => 'rb_slide_image',
            'choices' => array()
          ),

          /* Embedded video type */

          array(
            'id'      => 'rb_slide_video_code',
            'label'   => 'Video Code',
            'desc'    => 'Paste the video embedding code inside this field.',
            'std'     => '',
            'type'    => 'textarea',
            'class'   => 'rb_slide_emb',
            'choices' => array()
          ),

          /* Self hosted video type */

          array(
            'id'      => 'rb_slide_video_1',
            'label'   => 'MP4 File',
            'desc'    => 'Upload an .mp4 video file or paste a link to one.',
            'std'     => '',
            'type'    => 'upload',
            'class'   => 'rb_slide_hosted',
            'choices' => array()
          ),

          array(
            'id'      => 'rb_slide_video_2',
            'label'   => 'OGV File',
            'desc'    => 'Upload an .ogv video file or paste a link to one.',
            'std'     => '',
            'type'    => 'upload',
            'class'   => 'rb_slide_hosted',
            'choices' => array()
          ),

          array(
            'id'      => 'rb_slide_video_3',
            'label'   => 'Poster File',
            'desc'    => 'Upload a poster image for the player or paste a link to one.',
            'std'     => '',
            'type'    => 'upload',
            'class'   => 'rb_slide_hosted',
            'choices' => array()
          )
        )
      )
    )
  );

    $rb_meta_box_folio = array(
    'id'        => 'rb_meta_box_folio',
    'title'     => 'Project Meta',
    'desc'      => '',
    'pages'     => array( 'portfolio' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(

          array(
            'id'      => 'rb_post_date',
            'label'   => 'Date',
            'desc'    => 'Write the date when you released this project.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),

          array(
            'id'      => 'rb_post_skill',
            'label'   => 'Skills',
            'desc'    => 'Write the skills involved in this project.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),

          array(
            'id'      => 'rb_post_client',
            'label'   => 'Client',
            'desc'    => 'Write the client of this project.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),

          array(
            'id'      => 'rb_post_link',
            'label'   => 'Link',
            'desc'    => 'Write a link to the project.',
            'std'     => '',
            'type'    => 'text',
            'class'   => '',
            'choices' => array()
          ),

      
    )
  );

    $post_id = isset($_GET['post']) ? $_GET['post'] : (isset($_POST['post_ID']) ? $_POST['post_ID'] : 'no');
    $template_file = $post_id != 'no' ? get_post_meta($post_id,'_wp_page_template',TRUE) : 'no';

    if($template_file == 'template-slider-full.php' || $template_file == 'template-slider-fit.php') {
    	ot_register_meta_box($rb_meta_box_slider_home);
    } else { 
        ot_register_meta_box($rb_meta_box_tagline);
        ot_register_meta_box($rb_meta_box_sidebar);
    }

    ot_register_meta_box($rb_meta_box_folio);
    ot_register_meta_box($rb_meta_box_video);


}

?>