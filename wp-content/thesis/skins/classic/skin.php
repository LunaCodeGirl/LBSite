<?php
/*---:[ Copyright DIYthemes, LLC. Patent pending. All rights reserved. DIYthemes, Thesis, and the Thesis Theme are registered trademarks of DIYthemes, LLC. ]:---*/
/*
	Name: Thesis Classic
	Author: Chris Pearson
	Description: Elegant and versatile, Thesis Classic features clean lines and mathematical precision with an emphasis on typography.
	Version: 1.0
	Class: thesis_classic
*/
class thesis_classic extends thesis_skin {
	function construct() {
		add_filter('thesis_hook_container_num_top', array($this, 'open_bracket'));
		add_filter('thesis_hook_container_num_bottom', array($this, 'close_bracket'));
		add_filter('thesis_comments_intro', array($this, 'comments_intro'));
	}

	function open_bracket() {
		echo '<span class="bracket">{</span>';
	}

	function close_bracket() {
		echo '<span class="bracket">}</span>';
	}

	function comments_intro($text) {
		return "<span class=\"bracket\">{</span> $text <span class=\"bracket\">}</span>";
	}
}