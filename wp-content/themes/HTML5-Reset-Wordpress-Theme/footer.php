		
		</div><!-- End of content Div -->
		
		<div class="clear"></div>
		
	</div><!-- End of wrap Div -->
	
		
	<footer id="footer" class="source-org vcard copyright"> 
		
		<div id="footer-inner">
						
			<div id="copyright">
				
				&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
				
			</div>

		</div>
			
	</footer>


	<?php wp_footer(); ?>


	<!-- here comes the javascript -->
	
	<!-- jQuery is called via the Wordpress-friendly way via functions.php -->
	
	<!-- this is where we put our custom functions -->
	<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>
	
	<!-- Asynchronous google analytics; this is the official snippet.
		 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.-->
		 
	<script>
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32046705-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	
</body>

</html>