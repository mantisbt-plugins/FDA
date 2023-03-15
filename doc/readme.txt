Mantis FDA
=====================

Function
---------
Check password once again upon submitting/updating a ticket

Requirements
-------------
Made for and tested against Mantis version 2.x

Installation
------------
Do ensure to define a signal in bug_report_page.php
Add the following lines :
	<?php
	event_signal( 'EVENT_FDA_FORM1'); 
	?>
Just before :
		<input <?php echo helper_get_tab_index() ?> type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo lang_get( 'submit_report_button' ) ?>" />

Do ensure to define a signal in bug_report.php
Add the following line :
	event_signal( 'EVENT_FDA_FORM2'); 
Just after :
	form_security_validate( 'bug_report' );

Do ensure to define a signal in bug_update_page.php	
Add the following lines :
	<?php
	event_signal( 'EVENT_FDA_FORM1'); 
	?>
Just after :
if( $t_top_buttons_enabled ) {
?>
<div class="widget-toolbox padding-8 clearfix">


and also just after:
if( $t_top_buttons_enabled ) {
?>
<div class="widget-toolbox padding-8 clearfix">


Do ensure to define a signal in bug_update.php
Add the following line :
	event_signal( 'EVENT_FDA_FORM2'); 
Just after :
	form_security_validate( 'bug_update' );
	

The rest is like any other plugin. 

In the doc directory you find the 4 files with the changes applied already.
Be aware, these are the files for Mantis 2.21

After copying to your webserver :
- Start mantis ad administrator
- Select manage
- Select manage Plugins
- Select Install behind FDA 2.01


