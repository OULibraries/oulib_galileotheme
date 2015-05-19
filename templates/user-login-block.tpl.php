<?php
/**
 * You can override this template globally, or for specific regions.
 * user-login-block--REGION-NAME.tpl.php will work for specific instances of the block,
 * while this one will work when it's displayed inside of a panel.
 *
 * Note that region-specific override templates MUST live in the theme's directory,
 * not in the module's directory, to be detected.
 */
?>

<div id="user-login-block-container">
  <div id="" class="red">
<div class="row user-login">
	
	<div class="col-md-5 login col-sm-4 col-xs-12">
		<span style="font-size:12px;"><?php print $name; // Display username field ?></span>	</div>
	
	<div class="col-md-5 login col-sm-4 col-xs-9">
		<span style="font-size:12px;"><?php print $pass; // Display Password field ?></span>
	</div>

	<div class="col-md-2 col-sm-2 col-xs-3" style="padding-top:20px;">
		<?php print $submit; // Display submit button ?>
	</div>
	
   <!-- <?php print $links; // Display links ?>  -->
    <?php print $rendered; // Display hidden elements (required for successful login) ?> 
	
</div>

<div>
<div class="col-md-12">
<div class="registration-text"><a href="user/register">Register</a> for an account if you do not have an OUNetID.</div>
</div>
</div>

  </div>
</div>