<?php
$faq_question_array = array();
$faq_answer_array = array();

$query = new WP_Query('post_type=faq&posts_per_page=-1');
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();

$faq_question = get_post_meta($post->ID,'faq_question',true);
array_push($faq_question_array,$faq_question);

$faq_answer = get_post_meta($post->ID,'faq_answer',true);
array_push($faq_answer_array,$faq_answer);

endwhile; endif;
?>
  <div class="faq-questions">
  
<?php
if(!empty($faq_question_array)):
$no_of_questions = count($faq_question_array);
$faq_question_reversed_array = array_reverse($faq_question_array);
echo "<ol>";
for($i = 0 ; $i<$no_of_questions; $i++){
$question_no = $i+1;
echo "<li><a id='question_{$question_no}' onClick='scroll_to_answer(\"#answer_{$question_no}\",\"#answer_{$question_no}_text\")' href='#'>{$faq_question_reversed_array[$i]}</a></li>";
}
echo "</ol>";
endif;
?>  
  </div><!-- END faq-questions -->
  
  
  <div class="faq-answers clearfix">
<?php
if(!empty($faq_question_array)):
$faq_answer_reversed_array = array_reverse($faq_answer_array);
for($j = 0 ; $j<$no_of_questions; $j++):
$answer_no = $j+1;
?> 
    <div class="faq-wrap clearfix">
        <div class="faq-number answer_<?php echo $answer_no; ?>"></div><!-- END FAQ-number -->      
        <div class="faq-content">
        <p class="faq-heading" id="answer_<?php echo $answer_no; ?>"><?php echo $faq_question_reversed_array[$j] ?></p>
        <div  class="faq-answer" id="answer_<?php echo $answer_no; ?>_text">
        <?php 
        //use WordPress auto p tags to format the answer
        echo wpautop($faq_answer_reversed_array[$j]);         
        ?>
        </div>
        	<div class="basic-divider"><a class="go_to_top" href="#" onClick="return false;"><?php _e('top', 'framework_localize') ?></a></div>      
        </div><!-- END faq-content -->
    </div><!-- END faq-wrap -->
    
<?php endfor; endif; ?>

		</div><!-- END faq-answers -->