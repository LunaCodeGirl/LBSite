<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button URL', 'textdomain'),
			'desc' => __('Add the button\'s url eg http://example.com', 'textdomain')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Color', 'textdomain'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'textdomain'),
			'options' => array(
				'yellow' => 'Yellow ',
				'red' => 'Red',
				'blue' => 'Blue',
				'apple' => 'Apple Green',
				'green' => 'Green',
				'candy' => 'Candy',
				'orange' => 'Orange',
				'lightgrey' => 'Light Gray',
				'darkgrey' => 'Dark Gray'
			)
		),/*
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'textdomain'),
			'desc' => __('Select the button\'s size', 'textdomain'),
			'options' => array(
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large'
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __('Button Type', 'textdomain'),
			'desc' => __('Select the button\'s type', 'textdomain'),
			'options' => array(
				'round' => 'Round',
				'square' => 'Square'
			)
		),*/
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'textdomain'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'textdomain'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'textdomain'),
			'desc' => __('Add the button\'s text', 'textdomain'),
		)
	),
	'shortcode' => '[zilla_button url="{{url}}" style="{{style}}" size="{{size}}" type="{{type}}" target="{{target}}"] {{content}} [/zilla_button]',
	
	'popup_title' => __('Insert Button Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Spacer Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['spacer'] = array(
	'no_preview' => true,
	'params' => array(
		'height' => array(
			'std' => '20px',
			'type' => 'text',
			'label' => __('Height of the Spacer', 'textdomain'),
			'desc' => __('Creates a space area of this height', 'textdomain')
		)
	),
	'shortcode' => '[spacer height="{{height}}"]',
	
	'popup_title' => __('Insert Spacer Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Quote Area
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['quote'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'std' => 'Title',
			'type' => 'text',
			'label' => __('Quote Area Title', 'textdomain'),
			'desc' => __('Headline on top of your quote area', 'textdomain')
		),
		'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Quote Area Content', 'textdomain'),
				'desc' => __('Add the quote area content.', 'textdomain'),
		),
		'button_text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button Text', 'textdomain'),
			'desc' => __('Leave Blank for no button text', 'textdomain')
		),
		'button_icon' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button Icon', 'textdomain'),
			'desc' => __('Leave Blank for no Icon (+ blank text = no button)', 'textdomain')
		),
		'button_link' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Button Link URL', 'textdomain'),
			'desc' => __('URL to call when clicking the button', 'textdomain')
		)
	),
	'shortcode' => '[quote_area title="{{title}}" button_text="{{button_text}}" button_link="{{button_link}}" button_icon="{{button_icon}}"]{{content}}[/quote_area]',
	'popup_title' => __('Insert Quote Area Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Teaser Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['teaser'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[teaser_list rownumber="4" title="My Teaser"] {{child_shortcode}}  [/teaser_list]',
    'popup_title' => __('Insert Teaser Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
		'image' => array(
			'type' => 'text',
			'label' => __('Teaser Image', 'textdomain'),
			'desc' => __('Add the Image URL that will go above the Teaser content', 'textdomain'),
			'std' => 'Image URL'
		),
		'title' => array(
			'type' => 'text',
			'label' => __('Teaser Content Title', 'textdomain'),
			'desc' => __('Add the Headline that will go above the Teaser content', 'textdomain'),
			'std' => 'Title'
		),
		'url' => array(
			'std' => '#',
			'type' => 'text',
			'label' => __('Button URL', 'textdomain'),
			'desc' => __('Add the Teaser\'s url eg http://example.com', 'textdomain')
		),
		'content' => array(
			'std' => 'Content',
			'type' => 'textarea',
			'label' => __('Teaser Content', 'textdomain'),
			'desc' => __('Add the Teaser content. Will accept HTML', 'textdomain')
		)
		),
        'shortcode' => '[teaser_item href="{{url}}" image="{{image}}" title="{{title}}"] {{content}} [/teaser_item]',
        'clone_button' => __('Add Teaser', 'textdomain')
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Toggle Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['toggle'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => __('Toggle Content Title', 'textdomain'),
			'desc' => __('Add the title that will go above the toggle content', 'textdomain'),
			'std' => 'Title'
		),
		'content' => array(
			'std' => 'Content',
			'type' => 'textarea',
			'label' => __('Toggle Content', 'textdomain'),
			'desc' => __('Add the toggle content. Will accept HTML', 'textdomain'),
		),
		'state' => array(
			'type' => 'select',
			'label' => __('Toggle State', 'textdomain'),
			'desc' => __('Select the state of the toggle on page load', 'textdomain'),
			'options' => array(
				'open' => 'Open',
				'closed' => 'Closed'
			)
		),
		
	),
	'shortcode' => '[zilla_toggle title="{{title}}" state="{{state}}"] {{content}} [/zilla_toggle]',
	'popup_title' => __('Insert Toggle Content Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[zilla_tabs] {{child_shortcode}}  [/zilla_tabs]',
    'popup_title' => __('Insert Tab Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'textdomain'),
                'desc' => __('Title of the tab', 'textdomain'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'textdomain'),
                'desc' => __('Add the tabs content', 'textdomain')
            )
        ),
        'shortcode' => '[zilla_tab title="{{title}}"] {{content}} [/zilla_tab]',
        'clone_button' => __('Add Tab', 'textdomain')
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$zilla_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'textdomain'),
				'desc' => __('Select the type, ie width of the column.', 'textdomain'),
				'options' => array(
					'one_half' => 'One Half',
					'one_half_last' => 'One Half Last',
					'one_third' => 'One Third',
					'one_third_last' => 'One Third Last',
					'two_third' => 'Two Thirds',
					'two_third_last' => 'Two Thirds Last',
					'one_fourth' => 'One Fourth',
					'one_fourth_last' => 'One Fourth Last',
					'one_fifth' => 'One Fifth',
					'one_fifth_last' => 'One Fifth Last',
					'one_sixth' => 'One Sixth',
					'one_sixth_last' => 'One Sixth Last',
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'textdomain'),
				'desc' => __('Add the column content.', 'textdomain'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'textdomain')
	)
);

?>