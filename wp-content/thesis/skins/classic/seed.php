<?php
function thesis_generate_skin_option_boxes(){
	update_option('thesis_classic_boxes', array (
  'thesis_html_container' => 
  array (
    'thesis_html_container_1348009564' => 
    array (
      'id' => 'header',
      '_name' => 'Header',
    ),
    'thesis_html_container_1348009571' => 
    array (
      'class' => 'columns-3',
      '_admin' => 
      array (
        'open' => true,
      ),
      '_name' => '3 Columns',
    ),
    'thesis_html_container_1348009575' => 
    array (
      'id' => 'footer',
      '_name' => 'Footer',
    ),
    'thesis_html_container_1348010954' => 
    array (
      'class' => 'c1',
      '_admin' => 
      array (
        'open' => true,
      ),
      '_name' => 'Column 1',
    ),
    'thesis_html_container_1348010964' => 
    array (
      'class' => 'c2',
      '_name' => 'Column 2',
    ),
    'thesis_html_container_1348079576' => 
    array (
      'class' => 'c3',
      '_name' => 'Column 3',
    ),
    'thesis_html_container_1348093642' => 
    array (
      'id' => 'container',
      '_admin' => 
      array (
        'open' => true,
      ),
      '_name' => 'Container',
    ),
    'thesis_html_container_1348165494' => 
    array (
      'html' => 'p',
      'class' => 'byline',
      '_name' => 'Byline',
    ),
    'thesis_html_container_1348174194' => 
    array (
      'html' => 'p',
      'hook' => 'num',
      '_name' => 'Num Comments Wrapper',
    ),
    'thesis_html_container_1348608649' => 
    array (
      'id' => 'archive_intro',
      'class' => 'post_box top',
      '_name' => 'Archive Intro',
    ),
    'thesis_html_container_1348701154' => 
    array (
      'class' => 'archive_nav',
      '_name' => 'Archive Nav',
    ),
    'thesis_html_container_1348715143' => 
    array (
      'class' => 'post_nav',
      '_name' => 'Post Nav',
    ),
    'thesis_html_container_1348841704' => 
    array (
      'html' => 'p',
      'class' => 'comment_head',
      '_name' => 'Comment Head',
    ),
    'thesis_html_container_1348886177' => 
    array (
      'class' => 'headline_area',
      '_name' => 'Headline Area',
    ),
  ),
  'thesis_wp_nav_menu' => 
  array (
    'thesis_wp_nav_menu_1348009742' => 
    array (
      'menu' => '3',
      '_name' => 'Nav Menu',
    ),
  ),
  'thesis_post_box' => 
  array (
    'thesis_post_box_1348010947' => 
    array (
      '_name' => 'Home Post Box',
    ),
    'thesis_post_box_1348607689' => 
    array (
      '_name' => 'Single Post Box',
    ),
  ),
  'thesis_post_headline' => 
  array (
    'thesis_post_box_1348010947_thesis_post_headline' => 
    array (
      'html' => 'h2',
      'link' => 
      array (
        'on' => true,
      ),
      '_parent' => 'thesis_post_box_1348010947',
    ),
  ),
  'thesis_wp_widgets' => 
  array (
    'thesis_wp_widgets_1348079687' => 
    array (
      '_name' => 'Widgets 1',
    ),
    'thesis_wp_widgets_1348079695' => 
    array (
      '_name' => 'Widgets 2',
    ),
  ),
  'thesis_post_author' => 
  array (
    'thesis_post_box_1348010947_thesis_post_author' => 
    array (
      'intro' => 'by',
      '_parent' => 'thesis_post_box_1348010947',
    ),
    'thesis_post_box_1348607689_thesis_post_author' => 
    array (
      'intro' => 'by',
      '_parent' => 'thesis_post_box_1348607689',
    ),
  ),
  'thesis_post_date' => 
  array (
    'thesis_post_box_1348010947_thesis_post_date' => 
    array (
      'intro' => 'on',
      '_parent' => 'thesis_post_box_1348010947',
    ),
    'thesis_post_box_1348607689_thesis_post_date' => 
    array (
      'intro' => 'on',
      '_parent' => 'thesis_post_box_1348607689',
    ),
  ),
  'thesis_archive_content' => 
  array (
    'thesis_archive_content' => 
    array (
      'class' => 'post_content',
    ),
  ),
  'thesis_previous_posts_link' => 
  array (
    'thesis_previous_posts_link' => 
    array (
      'html' => 'span',
      'text' => '← Previous Entries',
    ),
  ),
  'thesis_next_posts_link' => 
  array (
    'thesis_next_posts_link' => 
    array (
      'html' => 'span',
      'text' => 'Next Entries →',
    ),
  ),
  'thesis_previous_post_link' => 
  array (
    'thesis_previous_post_link' => 
    array (
      'html' => 'p',
      'intro' => 'Previous Post:',
    ),
  ),
  'thesis_next_post_link' => 
  array (
    'thesis_next_post_link' => 
    array (
      'html' => 'p',
      'intro' => 'Next Post:',
    ),
  ),
  'thesis_comments' => 
  array (
    'thesis_comments_1348716667' => 
    array (
      '_name' => 'Comments',
    ),
  ),
  'thesis_comment_avatar' => 
  array (
    'thesis_comments_1348716667_thesis_comment_avatar' => 
    array (
      'size' => '44',
      '_parent' => 'thesis_comments_1348716667',
    ),
  ),
  'thesis_comment_date' => 
  array (
    'thesis_comments_1348716667_thesis_comment_date' => 
    array (
      'separator' => 'at',
      '_parent' => 'thesis_comments_1348716667',
    ),
  ),
  'thesis_comment_form' => 
  array (
    'thesis_comment_form_1348843091' => 
    array (
      '_name' => 'Comment Form',
    ),
  ),
));
}
function thesis_generate_skin_option_templates(){
	update_option('thesis_classic_templates', array (
  'home' => 
  array (
    'boxes' => 
    array (
      'thesis_html_body' => 
      array (
        0 => 'thesis_html_container_1348093642',
      ),
      'thesis_html_container_1348093642' => 
      array (
        0 => 'thesis_wp_nav_menu_1348009742',
        1 => 'thesis_html_container_1348009564',
        2 => 'thesis_html_container_1348009571',
        3 => 'thesis_html_container_1348009575',
      ),
      'thesis_html_container_1348009564' => 
      array (
        0 => 'thesis_site_title',
        1 => 'thesis_site_tagline',
      ),
      'thesis_html_container_1348009571' => 
      array (
        0 => 'thesis_html_container_1348010954',
        1 => 'thesis_html_container_1348010964',
        2 => 'thesis_html_container_1348079576',
      ),
      'thesis_html_container_1348010954' => 
      array (
        0 => 'thesis_wp_loop',
        1 => 'thesis_html_container_1348701154',
      ),
      'thesis_wp_loop' => 
      array (
        0 => 'thesis_post_box_1348010947',
      ),
      'thesis_post_box_1348010947' => 
      array (
        0 => 'thesis_html_container_1348886177',
        1 => 'thesis_post_box_1348010947_thesis_post_content',
        2 => 'thesis_html_container_1348174194',
      ),
      'thesis_html_container_1348886177' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_headline',
        1 => 'thesis_html_container_1348165494',
      ),
      'thesis_html_container_1348165494' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_author',
        1 => 'thesis_post_box_1348010947_thesis_post_date',
        2 => 'thesis_post_box_1348010947_thesis_post_edit',
      ),
      'thesis_html_container_1348174194' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_num_comments',
      ),
      'thesis_html_container_1348701154' => 
      array (
        0 => 'thesis_next_posts_link',
        1 => 'thesis_previous_posts_link',
      ),
      'thesis_html_container_1348010964' => 
      array (
        0 => 'thesis_wp_widgets_1348079687',
      ),
      'thesis_html_container_1348079576' => 
      array (
        0 => 'thesis_wp_widgets_1348079695',
      ),
      'thesis_html_container_1348009575' => 
      array (
        0 => 'thesis_attribution',
        1 => 'thesis_wp_admin',
      ),
      'thesis_post_box_1348607689' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_headline',
        1 => 'thesis_post_box_1348607689_thesis_post_author',
        2 => 'thesis_post_box_1348607689_thesis_post_edit',
        3 => 'thesis_post_box_1348607689_thesis_post_content',
      ),
      'thesis_comments_1348716667' => 
      array (
        0 => 'thesis_comments_1348716667_thesis_comment_author',
        1 => 'thesis_comments_1348716667_thesis_comment_date',
        2 => 'thesis_comments_1348716667_thesis_comment_edit',
        3 => 'thesis_comments_1348716667_thesis_comment_text',
        4 => 'thesis_comments_1348716667_thesis_comment_reply',
      ),
      'thesis_comment_form_1348843091' => 
      array (
        0 => 'thesis_comment_form_1348843091_thesis_comment_form_title',
        1 => 'thesis_comment_form_1348843091_thesis_comment_form_cancel',
        2 => 'thesis_comment_form_1348843091_thesis_comment_form_name',
        3 => 'thesis_comment_form_1348843091_thesis_comment_form_email',
        4 => 'thesis_comment_form_1348843091_thesis_comment_form_url',
        5 => 'thesis_comment_form_1348843091_thesis_comment_form_comment',
        6 => 'thesis_comment_form_1348843091_thesis_comment_form_submit',
      ),
    ),
  ),
  'archive' => 
  array (
    'boxes' => 
    array (
      'thesis_html_body' => 
      array (
        0 => 'thesis_html_container_1348093642',
      ),
      'thesis_html_container_1348093642' => 
      array (
        0 => 'thesis_wp_nav_menu_1348009742',
        1 => 'thesis_html_container_1348009564',
        2 => 'thesis_html_container_1348009571',
        3 => 'thesis_html_container_1348009575',
      ),
      'thesis_html_container_1348009564' => 
      array (
        0 => 'thesis_site_title',
        1 => 'thesis_site_tagline',
      ),
      'thesis_html_container_1348009571' => 
      array (
        0 => 'thesis_html_container_1348010954',
        1 => 'thesis_html_container_1348010964',
        2 => 'thesis_html_container_1348079576',
      ),
      'thesis_html_container_1348010954' => 
      array (
        0 => 'thesis_html_container_1348608649',
        1 => 'thesis_wp_loop',
        2 => 'thesis_html_container_1348701154',
      ),
      'thesis_html_container_1348608649' => 
      array (
        0 => 'thesis_archive_title',
        1 => 'thesis_archive_content',
      ),
      'thesis_wp_loop' => 
      array (
        0 => 'thesis_post_box_1348010947',
      ),
      'thesis_post_box_1348010947' => 
      array (
        0 => 'thesis_html_container_1348886177',
      ),
      'thesis_html_container_1348886177' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_headline',
        1 => 'thesis_html_container_1348165494',
      ),
      'thesis_html_container_1348165494' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_author',
        1 => 'thesis_post_box_1348010947_thesis_post_date',
        2 => 'thesis_post_box_1348010947_thesis_post_edit',
      ),
      'thesis_html_container_1348701154' => 
      array (
        0 => 'thesis_next_posts_link',
        1 => 'thesis_previous_posts_link',
      ),
      'thesis_html_container_1348010964' => 
      array (
        0 => 'thesis_wp_widgets_1348079687',
      ),
      'thesis_html_container_1348079576' => 
      array (
        0 => 'thesis_wp_widgets_1348079695',
      ),
      'thesis_html_container_1348009575' => 
      array (
        0 => 'thesis_attribution',
        1 => 'thesis_wp_admin',
      ),
      'thesis_html_container_1348174194' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_num_comments',
      ),
      'thesis_post_box_1348607689' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_headline',
        1 => 'thesis_post_box_1348607689_thesis_post_author',
        2 => 'thesis_post_box_1348607689_thesis_post_edit',
        3 => 'thesis_post_box_1348607689_thesis_post_content',
      ),
      'thesis_comments_1348716667' => 
      array (
        0 => 'thesis_comments_1348716667_thesis_comment_author',
        1 => 'thesis_comments_1348716667_thesis_comment_date',
        2 => 'thesis_comments_1348716667_thesis_comment_edit',
        3 => 'thesis_comments_1348716667_thesis_comment_text',
        4 => 'thesis_comments_1348716667_thesis_comment_reply',
      ),
      'thesis_comment_form_1348843091' => 
      array (
        0 => 'thesis_comment_form_1348843091_thesis_comment_form_title',
        1 => 'thesis_comment_form_1348843091_thesis_comment_form_cancel',
        2 => 'thesis_comment_form_1348843091_thesis_comment_form_name',
        3 => 'thesis_comment_form_1348843091_thesis_comment_form_email',
        4 => 'thesis_comment_form_1348843091_thesis_comment_form_url',
        5 => 'thesis_comment_form_1348843091_thesis_comment_form_comment',
        6 => 'thesis_comment_form_1348843091_thesis_comment_form_submit',
      ),
    ),
  ),
  'custom_1348591137' => 
  array (
    'title' => 'Landing Page',
    'boxes' => 
    array (
      'thesis_html_body' => 
      array (
        0 => 'thesis_html_container_1348093642',
      ),
      'thesis_html_container_1348093642' => 
      array (
        0 => 'thesis_wp_nav_menu_1348009742',
        1 => 'thesis_html_container_1348009564',
        2 => 'thesis_html_container_1348010954',
        3 => 'thesis_html_container_1348009575',
      ),
      'thesis_html_container_1348009564' => 
      array (
        0 => 'thesis_site_title',
        1 => 'thesis_site_tagline',
      ),
      'thesis_html_container_1348010954' => 
      array (
        0 => 'thesis_wp_loop',
      ),
      'thesis_wp_loop' => 
      array (
        0 => 'thesis_post_box_1348607689',
      ),
      'thesis_post_box_1348607689' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_headline',
        1 => 'thesis_post_box_1348607689_thesis_post_content',
      ),
      'thesis_html_container_1348009575' => 
      array (
        0 => 'thesis_attribution',
        1 => 'thesis_wp_admin',
      ),
      'thesis_html_container_1348165494' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_author',
        1 => 'thesis_post_box_1348607689_thesis_post_date',
        2 => 'thesis_post_box_1348607689_thesis_post_edit',
      ),
      'thesis_html_container_1348009571' => 
      array (
        0 => 'thesis_html_container_1348010964',
        1 => 'thesis_html_container_1348079576',
      ),
      'thesis_html_container_1348010964' => 
      array (
        0 => 'thesis_wp_widgets_1348079687',
      ),
      'thesis_html_container_1348079576' => 
      array (
        0 => 'thesis_wp_widgets_1348079695',
      ),
      'thesis_post_box_1348010947' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_edit',
        1 => 'thesis_post_box_1348010947_thesis_post_date',
        2 => 'thesis_post_box_1348010947_thesis_post_author',
        3 => 'thesis_post_box_1348010947_thesis_post_headline',
        4 => 'thesis_post_box_1348010947_thesis_post_content',
      ),
    ),
  ),
  'single' => 
  array (
    'boxes' => 
    array (
      'thesis_html_body' => 
      array (
        0 => 'thesis_html_container_1348093642',
      ),
      'thesis_html_container_1348093642' => 
      array (
        0 => 'thesis_wp_nav_menu_1348009742',
        1 => 'thesis_html_container_1348009564',
        2 => 'thesis_html_container_1348009571',
        3 => 'thesis_html_container_1348009575',
      ),
      'thesis_html_container_1348009564' => 
      array (
        0 => 'thesis_site_title',
        1 => 'thesis_site_tagline',
      ),
      'thesis_html_container_1348009571' => 
      array (
        0 => 'thesis_html_container_1348010954',
        1 => 'thesis_html_container_1348010964',
        2 => 'thesis_html_container_1348079576',
      ),
      'thesis_html_container_1348010954' => 
      array (
        0 => 'thesis_wp_loop',
        1 => 'thesis_html_container_1348715143',
      ),
      'thesis_wp_loop' => 
      array (
        0 => 'thesis_post_box_1348607689',
        1 => 'thesis_comments_intro',
        2 => 'thesis_comments_1348716667',
        3 => 'thesis_comment_form_1348843091',
      ),
      'thesis_post_box_1348607689' => 
      array (
        0 => 'thesis_html_container_1348886177',
        1 => 'thesis_post_box_1348607689_thesis_post_content',
      ),
      'thesis_html_container_1348886177' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_headline',
        1 => 'thesis_html_container_1348165494',
      ),
      'thesis_html_container_1348165494' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_author',
        1 => 'thesis_post_box_1348607689_thesis_post_date',
        2 => 'thesis_post_box_1348607689_thesis_post_edit',
      ),
      'thesis_comments_1348716667' => 
      array (
        0 => 'thesis_comments_1348716667_thesis_comment_avatar',
        1 => 'thesis_html_container_1348841704',
        2 => 'thesis_comments_1348716667_thesis_comment_text',
        3 => 'thesis_comments_1348716667_thesis_comment_reply',
        4 => 'thesis_comments_1348716667_thesis_comment_edit',
      ),
      'thesis_html_container_1348841704' => 
      array (
        0 => 'thesis_comments_1348716667_thesis_comment_author',
        1 => 'thesis_comments_1348716667_thesis_comment_date',
      ),
      'thesis_comment_form_1348843091' => 
      array (
        0 => 'thesis_comment_form_1348843091_thesis_comment_form_cancel',
        1 => 'thesis_comment_form_1348843091_thesis_comment_form_title',
        2 => 'thesis_comment_form_1348843091_thesis_comment_form_name',
        3 => 'thesis_comment_form_1348843091_thesis_comment_form_email',
        4 => 'thesis_comment_form_1348843091_thesis_comment_form_url',
        5 => 'thesis_comment_form_1348843091_thesis_comment_form_comment',
        6 => 'thesis_comment_form_1348843091_thesis_comment_form_submit',
      ),
      'thesis_html_container_1348715143' => 
      array (
        0 => 'thesis_next_post_link',
        1 => 'thesis_previous_post_link',
      ),
      'thesis_html_container_1348010964' => 
      array (
        0 => 'thesis_wp_widgets_1348079687',
      ),
      'thesis_html_container_1348079576' => 
      array (
        0 => 'thesis_wp_widgets_1348079695',
      ),
      'thesis_html_container_1348009575' => 
      array (
        0 => 'thesis_attribution',
        1 => 'thesis_wp_admin',
      ),
      'thesis_post_box_1348010947' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_edit',
        1 => 'thesis_post_box_1348010947_thesis_post_date',
        2 => 'thesis_post_box_1348010947_thesis_post_author',
        3 => 'thesis_post_box_1348010947_thesis_post_headline',
        4 => 'thesis_post_box_1348010947_thesis_post_content',
      ),
    ),
  ),
  'page' => 
  array (
    'boxes' => 
    array (
      'thesis_html_body' => 
      array (
        0 => 'thesis_html_container_1348093642',
      ),
      'thesis_html_container_1348093642' => 
      array (
        0 => 'thesis_wp_nav_menu_1348009742',
        1 => 'thesis_html_container_1348009564',
        2 => 'thesis_html_container_1348009571',
        3 => 'thesis_html_container_1348009575',
      ),
      'thesis_html_container_1348009564' => 
      array (
        0 => 'thesis_site_title',
        1 => 'thesis_site_tagline',
      ),
      'thesis_html_container_1348009571' => 
      array (
        0 => 'thesis_html_container_1348010954',
        1 => 'thesis_html_container_1348010964',
        2 => 'thesis_html_container_1348079576',
      ),
      'thesis_html_container_1348010954' => 
      array (
        0 => 'thesis_wp_loop',
      ),
      'thesis_wp_loop' => 
      array (
        0 => 'thesis_post_box_1348607689',
      ),
      'thesis_post_box_1348607689' => 
      array (
        0 => 'thesis_html_container_1348886177',
        1 => 'thesis_post_box_1348607689_thesis_post_content',
      ),
      'thesis_html_container_1348886177' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_headline',
      ),
      'thesis_html_container_1348010964' => 
      array (
        0 => 'thesis_wp_widgets_1348079687',
      ),
      'thesis_html_container_1348079576' => 
      array (
        0 => 'thesis_wp_widgets_1348079695',
      ),
      'thesis_html_container_1348009575' => 
      array (
        0 => 'thesis_attribution',
        1 => 'thesis_wp_admin',
      ),
      'thesis_html_container_1348165494' => 
      array (
        0 => 'thesis_post_box_1348607689_thesis_post_author',
        1 => 'thesis_post_box_1348607689_thesis_post_date',
        2 => 'thesis_post_box_1348607689_thesis_post_edit',
      ),
      'thesis_post_box_1348010947' => 
      array (
        0 => 'thesis_post_box_1348010947_thesis_post_edit',
        1 => 'thesis_post_box_1348010947_thesis_post_date',
        2 => 'thesis_post_box_1348010947_thesis_post_author',
        3 => 'thesis_post_box_1348010947_thesis_post_headline',
        4 => 'thesis_post_box_1348010947_thesis_post_content',
      ),
      'thesis_comments_1348716667' => 
      array (
        0 => 'thesis_html_container_1348841704',
        1 => 'thesis_comments_1348716667_thesis_comment_author',
        2 => 'thesis_comments_1348716667_thesis_comment_date',
        3 => 'thesis_comments_1348716667_thesis_comment_edit',
        4 => 'thesis_comments_1348716667_thesis_comment_text',
        5 => 'thesis_comments_1348716667_thesis_comment_reply',
      ),
      'thesis_comment_form_1348843091' => 
      array (
        0 => 'thesis_comment_form_1348843091_thesis_comment_form_title',
        1 => 'thesis_comment_form_1348843091_thesis_comment_form_cancel',
        2 => 'thesis_comment_form_1348843091_thesis_comment_form_name',
        3 => 'thesis_comment_form_1348843091_thesis_comment_form_email',
        4 => 'thesis_comment_form_1348843091_thesis_comment_form_url',
        5 => 'thesis_comment_form_1348843091_thesis_comment_form_comment',
        6 => 'thesis_comment_form_1348843091_thesis_comment_form_submit',
      ),
    ),
  ),
));
}
function thesis_generate_skin_option_packages(){
	update_option('thesis_classic_packages', array (
  'thesis_package_nav' => 
  array (
    'thesis_package_nav_1347990561' => 
    array (
      '_name' => 'Nav Menu',
      '_ref' => 'menu',
      'font-size' => '12',
      'text-transform' => 'uppercase',
      'letter-spacing' => '1',
      'link' => '111',
      'link-bg' => 'eee',
      'link-hover-bg' => 'ddd',
      'link-current-bg' => 'fff',
      'padding-top' => '9',
      'padding-right' => '11',
      'padding-bottom' => '9',
      'padding-left' => '11',
    ),
  ),
  'thesis_package_columns' => 
  array (
    'thesis_package_columns_1348079804' => 
    array (
      '_name' => '3 Columns',
      '_ref' => '3cols',
      '_selector' => '.columns-3',
      '_css' => '.columns-3 { background: url(\\\'images/dot-ddd.gif\\\') 513px 0 repeat-y; }
.columns-3 > .c2, .columns-3 > .c3 { padding-top: $single; }
.columns-3 > .c3 { border-left: 1px dotted $bc1; }',
      'columns' => '3',
      '1-width' => '513',
      '1-float' => 'left',
      '2-width' => '223',
      '2-float' => 'left',
      '2-padding-right' => '11',
      '2-padding-left' => '11',
      '3-width' => '223',
      '3-float' => 'left',
      '3-padding-right' => '11',
      '3-padding-left' => '11',
    ),
  ),
  'thesis_package_post_format' => 
  array (
    'thesis_package_post_format_1348080857' => 
    array (
      '_name' => 'Post Box',
      '_ref' => 'post',
      '_css' => '.post_box { padding: $single $single 0 $half; border-top: 1px dotted $bc2; }
.top { border-top: 0; }
.headline_area { margin-bottom: $single; }
.headline a, .byline a:hover, .num_comments { color: $c1; }
.headline a:hover { color: $links; }
.byline { font-size: 11px; color: $c2; }
.byline a { color: $c2; border-bottom: 1px solid $bc1; }
.author_by, .date_on { font-style: italic; }
.post_author, .post_date, .post_edit { text-transform: uppercase; letter-spacing: 1px; }
.post_edit { margin-left: 6px; }
.post_content h4 { font-weight: bold; }
.post_content a { text-decoration: underline; }
.post_content a:hover { text-decoration: none; }
.num_comments_link { color: $c3; text-decoration: none; }
.num_comments_link:hover { text-decoration: underline; }
.bracket, .num_comments { font-size: $single; }
.bracket { color: $c6; }',
      'text-font-size' => '14',
      'list-style-type' => 'square',
      'list-indent' => 
      array (
        'on' => true,
      ),
      'typography' => '480',
    ),
  ),
  'thesis_package_basic' => 
  array (
    'thesis_package_basic_1348091749' => 
    array (
      '_name' => 'Body',
      '_ref' => 'body',
      'font-family' => 'georgia',
      'color' => '$c1',
    ),
    'thesis_package_basic_1348093016' => 
    array (
      '_name' => 'Site Tagline',
      '_ref' => 'tagline',
      '_selector' => '#site_tagline',
      'font-size' => '16',
      'line-height' => '1.375em',
      'color' => '$c2',
    ),
    'thesis_package_basic_1348093203' => 
    array (
      '_name' => 'Site Title',
      '_ref' => 'title',
      '_selector' => '#site_title',
      '_css' => '#site_title a { color: $c1; }
#site_title a:hover { color: $links; }',
      'font-size' => '36',
      'font-weight' => 'bold',
      'typography' => '937',
    ),
    'thesis_package_basic_1348581489' => 
    array (
      '_name' => 'Header',
      '_ref' => 'header',
      '_selector' => '#header',
      'border-width' => '0 0 3px 0',
      'border-style' => 'double',
      'border-color' => '$bc1',
      'padding-top' => '$single',
      'padding-right' => '$half',
      'padding-bottom' => '$single',
      'padding-left' => '$half',
    ),
    'thesis_package_basic_1348594994' => 
    array (
      '_name' => 'Footer',
      '_ref' => 'footer',
      '_selector' => '#footer',
      '_css' => '#footer a { color: $c2; border-bottom: 1px solid $bc1; }
#footer a:hover { color: $c1; }',
      'font-size' => '12',
      'text-align' => 'right',
      'color' => '$c2',
      'border-width' => '3px 0 0 0',
      'border-style' => 'double',
      'border-color' => '$bc1',
      'padding-top' => '$half',
      'padding-right' => '$half',
      'padding-bottom' => '$half',
      'padding-left' => '$half',
      'typography' => '937',
    ),
    'thesis_package_basic_1348602837' => 
    array (
      '_name' => 'Container',
      '_ref' => 'container',
      '_selector' => '#container',
      'box-sizing' => 'border-box',
      'width' => '959',
      'margin-top' => '$single',
      'margin-right' => 'auto',
      'margin-left' => 'auto',
    ),
    'thesis_package_basic_1348608713' => 
    array (
      '_name' => 'Archive Intro',
      '_ref' => 'archive_intro',
      '_selector' => '#archive_intro',
      '_css' => '.archive_title { margin-bottom: $single; }
#archive_intro:empty { display: none; }',
      'border-width' => '0 0 2px 0',
      'border-style' => 'solid',
      'border-color' => '$bc1',
    ),
    'thesis_package_basic_1348701187' => 
    array (
      '_name' => 'Archive Nav',
      '_ref' => 'archive_nav',
      '_selector' => '.archive_nav',
      '_css' => '.archive_nav { clear: both; }
.archive_nav .next_posts { float: right; }
.archive_nav a:hover { text-decoration: underline; }
.archive_nav:after { content: \\".\\"; display: block; height: 0; clear: both; visibility: hidden; }
.archive_nav:empty { display: none; }',
      'font-size' => '11',
      'text-transform' => 'uppercase',
      'letter-spacing' => '2',
      'border-width' => '2px 0 0 0',
      'border-style' => 'solid',
      'border-color' => '$bc1',
      'padding-top' => '$single',
      'padding-right' => '$single',
      'padding-bottom' => '$single',
      'padding-left' => '$half',
    ),
    'thesis_package_basic_1348715191' => 
    array (
      '_name' => 'Post Nav',
      '_ref' => 'post_nav',
      '_selector' => '.post_nav',
      '_css' => '.post_nav { clear: both; }
.post_nav a:hover { text-decoration: underline; }',
      'font-size' => '14',
      'border-width' => '2px 0 0 0',
      'border-style' => 'solid',
      'border-color' => '$bc1',
      'padding-top' => '$single',
      'padding-right' => '$single',
      'padding-bottom' => '$single',
      'padding-left' => '$half',
      'typography' => '480',
    ),
    'thesis_package_basic_1348802788' => 
    array (
      '_name' => 'Comments Intro',
      '_ref' => 'comments_intro',
      '_selector' => '.comments_intro',
      '_css' => '.comments_intro a { text-decoration: underline; }
.comments_intro a:hover { text-decoration: none; }',
      'font-size' => '14',
      'color' => '$c3',
      'margin-top' => '$double',
      'margin-bottom' => '$half',
      'padding-right' => '$single',
      'padding-left' => '$half',
    ),
    'thesis_package_basic_1348854210' => 
    array (
      '_name' => 'Form Title',
      '_ref' => 'cf_title',
      '_selector' => '#comment_form_title',
      'font-size' => '18',
      'color' => '$c3',
      'border-width' => '0 0 1px 0',
      'border-style' => 'dotted',
      'border-color' => '$bc2',
      'margin-top' => '$double',
      'margin-right' => '-$single',
      'margin-left' => '-$half',
      'padding-right' => '$single',
      'padding-bottom' => '$half',
      'padding-left' => '$half',
    ),
    'thesis_package_basic_1348854486' => 
    array (
      '_name' => 'Comment Form',
      '_ref' => 'comment_form',
      '_selector' => '#commentform',
      '_css' => '#commentform label { display: block; }
#commentform p { margin-bottom: 1em; }
#commentform p a { text-decoration: underline; }
#commentform p a:hover { text-decoration: none; }
#commentform p .required { color: $c5; }
.comment_moderated { font-weight: bold; }
#commentform .input_text { width: 50%; }
#commentform textarea.input_text { width: 100%; }
.comment #commentform { padding-right: 0; padding-left: 0; }
.comment #comment_form_title { margin-top: 0; }',
      'font-size' => '14',
      'margin-bottom' => '$double',
      'padding-right' => '$single',
      'padding-left' => '$half',
      'typography' => '480',
    ),
    'thesis_package_basic_1348854844' => 
    array (
      '_name' => 'Cancel',
      '_ref' => 'cancel',
      '_selector' => '#cancel-comment-reply-link',
      '_css' => '#cancel-comment-reply-link { border-top-color: #fa5a5a; border-left-color: #fa5a5a; float: right; }',
      'font-size' => '11',
      'line-height' => '1em',
      'text-transform' => 'uppercase',
      'letter-spacing' => '1',
      'color' => 'fff',
      'background-color' => '$bg3',
      'border-width' => '2',
      'border-style' => 'solid',
      'border-color' => 'ac0000',
      'padding-top' => '5px',
      'padding-right' => '7px',
      'padding-bottom' => '5px',
      'padding-left' => '7px',
    ),
    'thesis_package_basic_1348855243' => 
    array (
      '_name' => 'Login Alert',
      '_ref' => 'login_alert',
      '_selector' => '.login_alert',
      'font-weight' => 'bold',
      'background-color' => '$bg1',
      'border-width' => '1px',
      'border-style' => 'solid',
      'border-color' => '$bc1',
    ),
    'thesis_package_basic_1348881019' => 
    array (
      '_name' => 'Reply, Edit',
      '_ref' => 'reply_edit',
      '_selector' => '.comment-reply-link, .comment_edit',
      '_css' => '.comment-reply-link:hover, .comment_edit:hover { text-decoration: underline; }',
      'font-size' => '11',
      'text-transform' => 'uppercase',
      'letter-spacing' => '1',
      'color' => '$c2',
    ),
    'thesis_package_basic_1348983394' => 
    array (
      '_name' => 'Closed',
      '_ref' => 'comments_closed',
      '_selector' => '.comments_closed',
      'font-size' => '14',
      'color' => '$c2',
      'margin-bottom' => '$single',
      'padding-right' => '$single',
      'padding-left' => '$half',
      'typography' => '480',
    ),
  ),
  'thesis_package_links' => 
  array (
    'thesis_package_links_1348180779' => 
    array (
      '_name' => 'Default Links',
      '_ref' => 'links',
      'link' => '$links',
      'link-decoration' => 'none',
    ),
  ),
  'thesis_package_wp_nav' => 
  array (
    'thesis_package_wp_nav_1348267619' => 
    array (
      '_name' => 'Menu',
      '_ref' => 'menu',
      'font-size' => '12',
      'text-transform' => 'uppercase',
      'letter-spacing' => '1',
      'link' => '$c1',
      'link-bg' => '$bg1',
      'link-hover-bg' => '$bg2',
      'link-current-bg' => 'fff',
      'padding-top' => '9',
      'padding-right' => '$half',
      'padding-bottom' => '9',
      'padding-left' => '$half',
      'border-type' => 'tabbed',
      'border-width' => '1',
      'border-color' => '$bc1',
    ),
  ),
  'thesis_package_wp_widgets' => 
  array (
    'thesis_package_wp_widgets_1348355558' => 
    array (
      '_name' => 'Widgets',
      '_ref' => 'widgets',
      '_css' => '.widget li a:hover, .widget p a { text-decoration: underline; }
.widget p a:hover { text-decoration: none; }
.search-form .input_text { width: 100%; }',
      'text-font-size' => '13',
      'text-margin-bottom' => '36',
      'subhead-margin-bottom' => '8',
      'list-style-type' => 'none',
      'list-item-margin' => 'half',
      'typography' => '201',
    ),
  ),
  'thesis_package_wp_comment' => 
  array (
    'thesis_package_wp_comment_1348769068' => 
    array (
      '_name' => 'Comments',
      '_ref' => 'comments',
      '_css' => '#comments { list-style: none; margin-bottom: $double; }
.children .comment { padding-top: 0; padding-right: 0; }
.comment .avatar { float: right; margin-left: $half; }
.comment_date, .comment_edit { font-size: 12px; line-height: $single; margin-left: $half; }
.comment > .comment_head { margin-bottom: $half; }
.children .comment > .comment_head { margin-bottom: 0; }',
      'text-font-size' => '14',
      'subhead-font-size' => '16',
      'subhead-font-weight' => 'bold',
      'subhead-line-height' => '$single',
      'list-style-type' => 'square',
      'list-indent' => 
      array (
        'on' => true,
      ),
      'typography' => '480',
      'comments-border-width' => '0 0 1px 0',
      'comments-border-style' => 'dotted',
      'comments-border-color' => '$bc1',
      'comments-padding-top' => '$single',
      'comments-padding-right' => '$single',
      'comments-padding-left' => '$half',
      'nested-border-width' => '0 0 0 1px',
      'nested-border-style' => 'solid',
      'nested-border-color' => '$bc1',
      'nested-margin-top' => '$single',
      'nested-padding-left' => '$single',
    ),
  ),
  'thesis_package_input' => 
  array (
    'thesis_package_input_1348865259' => 
    array (
      '_name' => 'Input',
      '_ref' => 'input',
      '_selector' => '.input_text',
      '_css' => '.input_text { border-right-color: $bc1; border-bottom-color: $bc1; }
.input_text:focus { border-right-color: $bc7; border-bottom-color: $bc7; }
textarea.input_text { line-height: $single; }',
      'font-family' => 'georgia',
      'font-size' => '14',
      'line-height' => '1em',
      'color' => '$c1',
      'background-color' => '$bg1',
      'box-sizing' => 'border-box',
      'border-width' => '1px',
      'border-style' => 'solid',
      'border-color' => '$bc6',
      'padding-top' => '3px',
      'padding-right' => '3px',
      'padding-bottom' => '3px',
      'padding-left' => '3px',
      'focus-background-color' => 'fff',
      'focus-border-color' => '$bc4',
    ),
    'thesis_package_input_1348869729' => 
    array (
      '_name' => 'Submit',
      '_ref' => 'submit',
      '_selector' => '.input_submit',
      '_css' => '.input_submit { border-top-color: $bc7; border-left-color: $bc7; cursor: pointer; overflow: visible; }
.input_submit:hover { color: $c4; }',
      'font-family' => 'georgia',
      'font-size' => '16',
      'font-weight' => 'bold',
      'line-height' => '1em',
      'background-image' => 'images/submit-bg.gif',
      'border-width' => '3',
      'border-style' => 'double',
      'border-color' => '$bc5',
      'padding-top' => '5',
      'padding-right' => '6',
      'padding-bottom' => '5',
      'padding-left' => '6',
    ),
  ),
  'thesis_package_wp_comments' => 
  array (
    'thesis_package_wp_comments_1348876315' => 
    array (
      '_name' => 'Comments',
      '_ref' => 'comments',
      '_css' => '#comments { list-style-type: none; margin-bottom: $double; border-top: 1px dotted $bc2; }
.children .comment { padding-top: 0; padding-right: 0; padding-bottom: 0; }
.comment .avatar { float: right; margin-left: $half; }
.comment .comment_head { margin-bottom: $half; }
.children .comment_head { margin-bottom: 0; }
.comment_date { font-size: 12px; color: $c2; margin-left: $half; }
.comment_edit { float: right; }
.comment_date a { color: $c2; }
.comment_text a, .comment_head a:hover { text-decoration: underline; }
.comment_text a:hover { text-decoration: none; }',
      'text-font-size' => '14',
      'subhead-font-size' => '16',
      'subhead-font-weight' => 'bold',
      'subhead-line-height' => '$single',
      'list-style-type' => 'square',
      'list-indent' => 
      array (
        'on' => true,
      ),
      'typography' => '480',
      'comments-border-width' => '0 0 1px 0',
      'comments-border-style' => 'dotted',
      'comments-border-color' => '$bc2',
      'comments-padding-top' => '$single',
      'comments-padding-right' => '$single',
      'comments-padding-bottom' => '$single',
      'comments-padding-left' => '$half',
      'nested-border-width' => '0 0 0 1px',
      'nested-border-style' => 'solid',
      'nested-border-color' => '$bc1',
      'nested-margin-top' => '$single',
      'nested-padding-left' => '$single',
      'author-background-color' => 'e7f8fb',
      'nested-author-background-color' => 'transparent',
      'nested-author-border-width' => '0 0 0 2px',
      'nested-author-border-style' => 'solid',
      'nested-author-border-color' => 'bde0e6',
    ),
  ),
));
}
function thesis_generate_skin_option_snippets(){
	update_option('thesis_classic_snippets', array (
  'snippet_1348169063' => 
  array (
    'name' => 'Color 2',
    'ref' => 'c2',
    'css' => 'color: $c2;',
  ),
  'snippet_1348186034' => 
  array (
    'name' => 'Color 1',
    'ref' => 'c1',
    'css' => 'color: $c1;',
  ),
  'snippet_1348186045' => 
  array (
    'name' => 'Color 4',
    'ref' => 'c4',
    'css' => 'color: $c4;',
  ),
));
}
function thesis_generate_skin_option_vars(){
	update_option('thesis_classic_vars', array (
  'var_1349036755' => 
  array (
    'name' => 'Text 1',
    'ref' => 'c1',
    'css' => '#111',
  ),
  'var_1349036771' => 
  array (
    'name' => 'Text 2',
    'ref' => 'c2',
    'css' => '#888',
  ),
  'var_1349039257' => 
  array (
    'name' => 'Text 3',
    'ref' => 'c3',
    'css' => '#666',
  ),
  'var_1349039300' => 
  array (
    'name' => 'Text 4',
    'ref' => 'c4',
    'css' => '#090',
  ),
  'var_1349039403' => 
  array (
    'name' => 'Text 5',
    'ref' => 'c5',
    'css' => '#d00',
  ),
  'var_1349039415' => 
  array (
    'name' => 'Text 6',
    'ref' => 'c6',
    'css' => '#ccc',
  ),
  'var_1349039427' => 
  array (
    'name' => 'Border 1',
    'ref' => 'bc1',
    'css' => '#ddd',
  ),
  'var_1349039450' => 
  array (
    'name' => 'Border 2',
    'ref' => 'bc2',
    'css' => '#bbb',
  ),
  'var_1349039460' => 
  array (
    'name' => 'Border 3',
    'ref' => 'bc3',
    'css' => '#eee',
  ),
  'var_1349039471' => 
  array (
    'name' => 'Border 4',
    'ref' => 'bc4',
    'css' => '#777',
  ),
  'var_1349039480' => 
  array (
    'name' => 'Border 5',
    'ref' => 'bc5',
    'css' => '#999',
  ),
  'var_1349039496' => 
  array (
    'name' => 'BG 1',
    'ref' => 'bg1',
    'css' => '#eee',
  ),
  'var_1349039516' => 
  array (
    'name' => 'BG 2',
    'ref' => 'bg2',
    'css' => '#ddd',
  ),
  'var_1349039523' => 
  array (
    'name' => 'BG 3',
    'ref' => 'bg3',
    'css' => '#d00',
  ),
  'var_1349039554' => 
  array (
    'name' => 'single',
    'ref' => 'single',
    'css' => '22px',
  ),
  'var_1349039577' => 
  array (
    'name' => 'half',
    'ref' => 'half',
    'css' => '11px',
  ),
  'var_1349039585' => 
  array (
    'name' => 'double',
    'ref' => 'double',
    'css' => '44px',
  ),
  'var_1349039761' => 
  array (
    'name' => 'Links',
    'ref' => 'links',
    'css' => '#2361a1',
  ),
  'var_1349043738' => 
  array (
    'name' => 'Border 6',
    'ref' => 'bc6',
    'css' => '#aaa',
  ),
  'var_1349043753' => 
  array (
    'name' => 'Border 7',
    'ref' => 'bc7',
    'css' => '#ccc',
  ),
));
}
function thesis_generate_skin_option_css(){
	update_option('thesis_classic_css', '&body
&links
&container
&menu
&header
&title
&tagline
&3cols
&post
&post_nav
&comments_intro
&comments_closed
&comments
&reply_edit
&comment_form
&cf_title
&input
&submit
&cancel
&login_alert
&widgets
&archive_intro
&archive_nav
&footer');
}

wp_cache_flush();
