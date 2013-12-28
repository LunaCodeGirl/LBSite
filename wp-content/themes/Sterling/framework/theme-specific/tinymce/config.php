<?php
// Accordions
$tt_shortcodes['accordions'] = array(
	'params' => array(),
	'shortcode' => '[accordion_set] {{child_shortcode}}[/accordion_set]',
	'no_preview' => true,
	
	// can be cloned and re-arranged
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'type' => 'text',
				'label' => __('Accordion Title', 'framework_localize'),
				'desc' => __('Add the title for this accordion section.', 'framework_localize'),
				'std' => ''
			),
			
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Accordion Content', 'framework_localize'),
				'desc' => __('Enter the content for this accordion section.', 'framework_localize'),
			),
			
			'active' => array(
			'type' => 'select',
			'label' => __('Active Accordion?', 'framework_localize'),
			'desc' => __('Should this accordion section be active by default?', 'framework_localize'),
			'options' => array(
				'no' => 'No',
				'yes' => 'Yes',
			)),
		),
		'shortcode' => '[accordion title="{{title}}" active="{{active}}"] {{content}} [/accordion] ',
		'clone_button' => __('Add Another Accordion Slide', 'framework_localize')
	)
);






// Notification Boxes
$tt_shortcodes['notifications'] = array(
	'params' => array(		
		'style' => array(
			'type' => 'select',
			'label' => __('Style', 'framework_localize'),
			'desc' => __('Select a style for this notification box.', 'framework_localize'),
			'options' => array(
				'success' => 'Success',
				'error' => 'Error',
				'warning' => 'Warning',
				'tip' => 'Tip',
				'neutral' => 'Neutral',
			)
		),
		
		'size' => array(
			'std' => '12px',
			'type' => 'text',
			'label' => __('Font Size', 'framework_localize'),
			'desc' => __('Enter the font size for this notification box.', 'framework_localize')
	),
		
		
		'content' => array(
				'std' => 'Insert your text here.',
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
				'desc' => __('Enter the content for this notification box.', 'framework_localize'),
			)),
		
	'shortcode' => '[notification style="{{style}}" font_size="{{size}}"] {{content}} [/notification]',
);








// Buttons
$tt_shortcodes['button'] = array(
	'params' => array(
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'framework_localize'),
			'desc' => __('Select the button size.', 'framework_localize'),
			'options' => array(
				'small' => 'Small',
				'large' => 'Large'
			)
		),
		
		'color' => array(
			'type' => 'select',
			'label' => __('Button Color', 'framework_localize'),
			'desc' => __('Select the button color.', 'framework_localize'),
			'options' => array(
				'black' => 'Black',
				'blue' => 'Blue',
				'green' => 'Green',
				'grey' => 'Grey',
				'navy' => 'Navy',
				'orange' => 'Orange',
				'purple' => 'Purple',
				'red' => 'Red',
				'teal' => 'Teal',
				'white' => 'White',	
			)
		),
		
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button Text', 'framework_localize'),
			'desc' => __('Enter the text for this button.', 'framework_localize')
	),
	
	'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button URL', 'framework_localize'),
			'desc' => __('Enter the URL for this button. ie: http://www.google.com', 'framework_localize')
		),
		
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'framework_localize'),
			'desc' => __('Select where the button should open.', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			)),
			
			'button_lightbox_content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Content', 'framework_localize'),
			'desc' => __('Enter the full URL to the content you wish to display in a Lightbox. (Simply ignore if you do not wish to open any content in a Lightbox)', 'framework_localize')
	),
	
	'button_lightbox_description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Description', 'framework_localize'),
			'desc' => __('This descriptive text is displayed within the Lightbox.', 'framework_localize')
	),
			
			
			
			),
		
	'shortcode' => '[button url="{{url}}" class="button" size="{{size}}" color="{{color}}" target="{{target}}" lightbox_content="{{button_lightbox_content}}" lightbox_description="{{button_lightbox_description}}"] {{content}} [/button]',
);







// Columns
$tt_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ',
	'no_preview' => true,
	
	
	// can be cloned and re-arrange
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'framework_localize'),
				'desc' => '',
				'options' => array(
					'one_half' => 'One Half',
					'one_third' => 'One Third',
					'one_fourth' => 'One Fourth',
					'one_fifth' => 'One Fifth',				
					'two_thirds' => 'Two Thirds',
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'framework_localize'),
				'desc' => 'Be sure to add a [column_break] shortcode between rows of columns.',
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Another Column', 'framework_localize')
	)
);












// Dividers
$tt_shortcodes['dividers'] = array(
	'params' => array(
		'divider_style' => array(
			'type' => 'select',
			'label' => __('Divider Style', 'framework_localize'),
			'desc' => __('Select the divider style that you\'d like to insert.', 'framework_localize'),
			'options' => array(
				'hr-dotted' => 'Dotted - Single line',
				'hr-dotted-double' => 'Dotted - Double line',
				'hr-solid' => 'Solid - Single line',
				'hr-solid-double' => 'Solid - Double line',
			)
		),
	),
		
	'shortcode' => '[divider style="{{divider_style}}"]',
);








// Icons
$tt_shortcodes['icons'] = array(
	'params' => array(
		
		'style' => array(
			'type' => 'select',
			'label' => __('Icon', 'framework_localize'),
			'desc' => __('Select your desired icon', 'framework_localize'),
			'options' => array(
				'icon-alarm' => 'Alarm',
				'icon-arrow-down-a' => 'Arrow Down',
				'icon-arrow-down-b' => 'Arrown Down 2',
				'icon-arrow-up-a' => 'Arrow Up',
				'icon-arrow-up-b' => 'Arrown Up 2',
				'icon-calculator' => 'Calculator',
				'icon-calendar-day' => 'Calendar - Day',
				'icon-calendar-month' => 'Calendar - Month',
				'icon-camera' => 'Camera',
				'icon-cart-add' => 'Cart - Ecommerce',
				'icon-caution' => 'Caution',
				'icon-cellphone' => 'Cell Phone',
				'icon-chat' => 'Chat (speech bubble)',
				'icon-chat-2' => 'Chat 2 (speech bubble)',
				'icon-checklist' => 'Checklist',
				'icon-checkmark' => 'Checkmark',
				'icon-clipboard' => 'Clipboard',
				'icon-clock' => 'Clock',
				'icon-gear' => 'Cog (sprocket)',
				'icon-contacts' => 'Contacts',
				'icon-crate' => 'Crate (wooden box)',
				'icon-database' => 'Database',
				'icon-document-edit' => 'Document edit',			
				'icon-dvd' => 'DVD',
				'icon-email-send' => 'Email',
				'icon-flag' => 'Flag',
				'icon-games' => 'Games',
				'icon-globe' => 'Globe',
				'icon-globe-download' => 'Globe - download',
				'icon-globe-upload' => 'Globe - upload',
				'icon-drive' => 'Hard Drive (HDD)',
				'icon-hdtv' => 'HDTV',
				'icon-heart' => 'Heart',		
				'icon-history' => 'History',
				'icon-home' => 'Home',
				'icon-info' => 'Info',
				'icon-laptop' => 'Laptop',
				'icon-light-on' => 'Lightbulb',
				'icon-lock-closed' => 'Lock',
				'icon-magnify' => 'Magnifying Glass',
				'icon-megaphone' => 'Megaphone',
				'icon-money' => 'Money',
				'icon-movie' => 'Movie',
				'icon-mp3' => 'MP3 Player',
				'icon-ms-word' => 'MS Word Document',
				'icon-music' => 'Music',
				'icon-network' => 'Network',
				'icon-news' => 'News',
				'icon-notebook' => 'Notebook',
				'icon-pdf' => 'PDF Document',
				'icon-photos' => 'Photos',	
				'icon-notebook' => 'Notebook',
				'icon-refresh' => 'Refresh',
				'icon-rss' => 'RSS',
				'icon-shield-blue' => 'Shield (blue)',
				'icon-shield-green' => 'Shield (green)',
				'icon-smart-phone' => 'Smartphone',
				'icon-star' => 'Star',
				'icon-support' => 'Support',	
				'icon-tools' => 'Tools',
				'icon-user-group' => 'Users',
				'icon-vcard' => 'vCard',
				'icon-video-camera' => 'Video Camera',
				'icon-x' => 'X'
			)
		),
		
		'content' => array(
			'type' => 'textarea',
			'label' => __('Content', 'framework_localize'),
			'desc' => __('Enter the content to be displayed next to the icon.', 'framework_localize'),
			'std' => '',
	),
	
	'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Icon URL', 'framework_localize'),
			'desc' => __('Enter the icon\'s URL. (leave blank to disable linking).', 'framework_localize')
		),
		
		
		'target' => array(
			'type' => 'select',
			'label' => __('Icon Target', 'framework_localize'),
			'desc' => __('Select where the icon should open. (ignore if linking is disabled)', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			)),
			

'icon_lightbox_content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Content', 'framework_localize'),
			'desc' => __('Enter the full URL to the content you wish to display in a Lightbox. (Simply ignore if you do not wish to open any content in a Lightbox)', 'framework_localize')
	),
	
	'icon_lightbox_description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Description', 'framework_localize'),
			'desc' => __('This descriptive text is displayed within the Lightbox.', 'framework_localize')
	),
			
			
			
			
			),
		
	'shortcode' => '[icon style="{{style}}" url="{{url}}" target="{{target}}" lightbox_content="{{icon_lightbox_content}}" lightbox_description="{{icon_lightbox_description}}"] {{content}} [/icon]',
);











// Image Frames
$tt_shortcodes['image-frames'] = array(
	'params' => array(		
		'size' => array(
			'type' => 'select',
			'label' => __('Size', 'framework_localize'),
			'desc' => __('Select the image frame size.', 'framework_localize'),
			'options' => array(
				'full-banner' => 'Full Width - Banner Frame (940 x 161)',
				'full-half' => 'Full Width - [one_half] Frame (445 x 273)',
				'full-third' => 'Full Width - [one_third] Frame (280 x 179)',
				'full-third-short' => 'Full Width - [one_third] Short Frame (280 x 124)',
				'full-fourth' => 'Full Width - [one_fourth] Frame (197 x 133)',
				'null1' => '',
				'full-third-portrait' => 'Full Width - [one_third] Portrait Frame (280 x 354)',
				'full-fourth-portrait' => 'Full Width - [one_fourth] Portrait Frame (183 x 277)',
				'null2' => '',
				'small-banner' => 'Half Width - Banner Frame (620 x 161)',
				'small-half' => 'Half Width - [one_half] Frame (300 x 186)',
				'small-third' => 'Half Width - [one_third] Frame (183 x 120)',
				'small-fourth' => 'Half Width - [one_fourth] Frame (125 x 89)',			
			)
		),
		
		
		'path' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Path', 'framework_localize'),
			'desc' => __('Enter the full URL to the image you wish to display. (the image will be automatically re-sized)', 'framework_localize')
	),
	
	
	'description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Description', 'framework_localize'),
			'desc' => __('Add descriptive text to help boost your site\'s SEO. (this is converted to an image Alt tag)', 'framework_localize')
	),
	
	'link_to_page' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Link this Image', 'framework_localize'),
			'desc' => __('Enter the full URL of the page you\'d like to link to. (simply leave blank to disable linking)', 'framework_localize')
	),
	
	'target' => array(
			'type' => 'select',
			'label' => __('Link Target', 'framework_localize'),
			'desc' => __('Select where the link should open.', 'framework_localize'),
			'options' => array(
				'_self' => '_self',
				'_parent' => '_parent',
				'_blank' => '_blank',
				'_top' => '_top',
			))
	
	
	),
		
	'shortcode' => '[image_frame size="{{size}}" image_path="{{path}}" description="{{description}}" link_to_page="{{link_to_page}}" target="{{target}}"]',
	'no_preview' => true,
);










// Lightbox Image Frames
$tt_shortcodes['lightbox-image-frames'] = array(
	'params' => array(		
		'size' => array(
			'type' => 'select',
			'label' => __('Size', 'framework_localize'),
			'desc' => __('Select the image lightbox frame size.', 'framework_localize'),
			'options' => array(
				'full-banner' => 'Full Width - Banner Frame (940 x 161)',
				'full-half' => 'Full Width - [one_half] Frame (445 x 273)',
				'full-third' => 'Full Width - [one_third] Frame (280 x 179)',
				'full-third-short' => 'Full Width - [one_third] Short Frame (280 x 124)',
				'full-fourth' => 'Full Width - [one_fourth] Frame (197 x 133)',
				'null1' => '',
				'full-third-portrait' => 'Full Width - [one_third] Portrait Frame (280 x 354)',
				'full-fourth-portrait' => 'Full Width - [one_fourth] Portrait Frame (183 x 277)',
				'null2' => '',
				'small-banner' => 'Half Width - Banner Frame (620 x 161)',
				'small-half' => 'Half Width - [one_half] Frame (300 x 186)',
				'small-third' => 'Half Width - [one_third] Frame (183 x 120)',
				'small-fourth' => 'Half Width - [one_fourth] Frame (125 x 89)',
			)
		),
		
		
		'path' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Image Path', 'framework_localize'),
			'desc' => __('Enter the full URL to the image you wish to display. (the image will be automatically re-sized)', 'framework_localize')
	),
	
	'lightbox_content' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Content', 'framework_localize'),
			'desc' => __('Enter the full URL to the content you wish to display in a Lightbox. <br><br>Examples:<br>
			- Image: http://www.yoursite.com/images/image-1.jpg<br>
			- YouTube: http://www.youtube.com/watch?v=VKS08be78os<br>
			- Vimeo: http://vimeo.com/8245346<br>
			- i-Frame: http://www.apple.com?iframe=true&width=850&height=500<br>
			- Flash: http://www.yoursite.com/files/design.swf?width=792&height=294', 'framework_localize')
	),
	
	'description' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Description', 'framework_localize'),
			'desc' => __('Add descriptive text to help boost your site\'s SEO. (this is displayed within the lightbox and converted to an image Alt tag)', 'framework_localize')
	),
	
	'group' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Lightbox Group', 'framework_localize'),
			'desc' => __('Enter a group name if you wish to group this item with other Lightbox items. (ie. group_1). Simply leave blank if you do not wish to group this item.', 'framework_localize')
	),
	
	
	),

	'shortcode' => '[lightbox_image size="{{size}}" image_path="{{path}}" lightbox_content="{{lightbox_content}}" group="{{group}}" description="{{description}}"]',
	'no_preview' => true,
);










// Tabs
$tt_shortcodes['tabs'] = array(
	'params' => array(
	'style' => array(
			'type' => 'select',
			'label' => __('Tabset Style', 'framework_localize'),
			'desc' => __('Select your desired tabset style', 'framework_localize'),
			'options' => array(
				'vertical' => 'Vertical',
				'horizontal' => 'Horizontal',
			))),
	'shortcode' => '[tabset style="{{style}}"] {{child_shortcode}}[/tabset]',
	'no_preview' => true,
	
	// can be cloned and re-arranged
	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'type' => 'text',
				'label' => __('Tab Title', 'framework_localize'),
				'desc' => __('Add the title for this tab.', 'framework_localize'),
				'std' => ''
			),
			
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Tab Content', 'framework_localize'),
				'desc' => __('Enter the content for this tab.', 'framework_localize'),
			),
			
			'active' => array(
			'type' => 'select',
			'label' => __('Active Tab?', 'framework_localize'),
			'desc' => __('Should this tab be active by default?', 'framework_localize'),
			'options' => array(
				'no' => 'No',
				'yes' => 'Yes',
			)),
		),
		'shortcode' => '[tab title="{{title}}" active="{{active}}"] {{content}} [/tab] ',
		'clone_button' => __('Add Another Tab', 'framework_localize')
	)
);













// Text Styles
$tt_shortcodes['text-styles'] = array(
	'params' => array(
		'text_style' => array(
			'type' => 'select',
			'label' => __('Text Style', 'framework_localize'),
			'desc' => __('Select the text style that you\'d like to insert.', 'framework_localize'),
			'options' => array(
				'large-callout' => 'Large Callout Text',
			)
		),
		
		'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Content', 'framework_localize'),
				'desc' => __('Enter the content to be styled.', 'framework_localize'),
			),
	),
		
	'shortcode' => '[text style="{{text_style}}"] {{content}} [/text]',
);


?>