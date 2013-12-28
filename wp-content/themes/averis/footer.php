
</div>

</div>
	<!--
	##########################
		-	FOOTER	-
	##########################
	-->
	
		<?php 
			if ( function_exists( 'get_option_tree') ) {
				if(get_option_tree( 'aversis_footer_active' )) $aversis_footer_active="on"; else $aversis_footer_active="off";
				if(get_option_tree( 'aversis_subfooter_active' )){ 
						$aversis_subfooter_active="on";
						$subfooter_content = get_option_tree( 'aversis_subfooter_content' );
				}
				else {
					$aversis_subfooter_active="off";
					$subfooter_content="";
				}
			}

			if($aversis_footer_active!="off"){
		?>			
			<div class="container footer_container" id="footer">
				<div id="footer_content">
					<div class="sixteen columns row">								
						
						<div class="four columns alpha">
							<!-- WIDGET SLOT 1	-->
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Slot 1") ) : ?>
								
			                        <div style="margin-bottom:20px"><span class="widget_title">Footer Widget Slot 1</span></div>
			                        <p style="color:#ccc">
			                        	Please configure this Widget in the Admin Panel under Appearance -> Widgets -> Footer Widget Slot 1
			                        </p>
			                        <div class="clear"></div>
			                    
			                <?php endif;?>
						</div>
					
						<div class="footerspacer"></div>
					
						<div class="four columns">
							<!-- WIDGET SLOT 2	-->
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Slot 2") ) : ?>
								
			                        <div style="margin-bottom:20px"><span class="widget_title">Footer Widget Slot 2</span></div>
			                        <p style="color:#ccc">
			                        	Please configure this Widget in the Admin Panel under Appearance -> Widgets -> Footer Widget Slot 2
			                        </p>
			                        <div class="clear"></div>
			                    
			                <?php endif;?>
						</div>
					
						<div class="footerspacer"></div>
							
						<div class="four columns">
							<!-- WIDGET SLOT 3	-->
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Slot 3") ) : ?>
								
			                        <div style="margin-bottom:20px"><span class="widget_title">Footer Widget Slot 3</span></div>
			                        <p style="color:#ccc">
			                        	Please configure this Widget in the Admin Panel under Appearance -> Widgets -> Footer Widget Slot 3
			                        </p>
			                        <div class="clear"></div>
			                    
			                <?php endif;?>
						</div>
					
						<div class="footerspacer"></div>

						<div class="four columns omega">
							<!-- WIDGET SLOT 4	-->
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Widget Slot 4") ) : ?>
								
			                        <div style="margin-bottom:20px"><span class="widget_title">Footer Widget Slot 4</span></div>
			                        <p style="color:#ccc">
			                        	Please configure this Widget in the Admin Panel under Appearance -> Widgets -> Footer Widget Slot 4
			                        </p>
			                        <div class="clear"></div>
			                    
			                <?php endif;?>
						</div>
					
						<div class="footerspacer"></div>

					</div>
				</div>
			</div>  <!-- END OF FOOTER -->
			<?php } ?>

			<?php if($aversis_subfooter_active!="off"){ ?>
			<!--	
			#########################
				-	SUB FOOTER	-	
			##########################
			-->
			<div class="container subfooter_container" id="sub_footer">
				<div id="subfooter_content">
					<div class="sixteen columns row">	
						<div class="subfootertext"><?php echo $subfooter_content; ?></div>
					</div>
				</div>
			</div>
			<?php } 

		// Google Analytics Code
			echo get_option_tree("aversis_analytics_code");
			?>
			<?php wp_footer(); ?>

</body>
</html>