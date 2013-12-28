<?php
global $ttso;
$searchbartext = stripslashes($ttso->st_searchbartext);
?>
<form method="get" class="searchform" action="<?php echo home_url(); ?>/">
	<fieldset>
		<input type="text" name="s" class="s" value="<?php echo $searchbartext; ?>" onfocus="if(this.value=='<?php echo $searchbartext; ?>')this.value='';" onblur="if(this.value=='')this.value='<?php echo $searchbartext; ?>';" />
	</fieldset>
</form>