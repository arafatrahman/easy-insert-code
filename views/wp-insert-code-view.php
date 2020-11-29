

<h3>WP INSERT CODE</h3>
<p><b>Insert code,text or script in Headers,Footers and Body </b></p>


<?php 

if ( isset($_POST['submit'] ) ) {
  wpic_setting::saveWpic($_POST);
 }

 $getWpic = wpic_setting::getWpic();
 
?>

<div class="wpicTabs">
    <button class="wpicTablinks" onclick="wpicSettings(event, 'wpic-header')" id="wpicActive"><b>Header Section</b></button>
  <button class="wpicTablinks" onclick="wpicSettings(event, 'wpic-body')"><b>Body Section</b></button>
              <button class="wpicTablinks" onclick="wpicSettings(event, 'wpic-footer')"><b>Footer Section</b></button>
</div>


<form action="options-general.php?page=kau-wp-insert-code" method="post">

<div id="wpic-header" class="wpicTabcontent" >
  <p>These code , text or scripts will be placed in the <head> section. of your website</p>
                    <textarea name="kau-wpic-textarea-header" rows="10" cols="100" ><?php echo kauget('kau-wpic-textarea-header', $getWpic);?></textarea>
</div>

<div id="wpic-body" class="wpicTabcontent">
  <p>These code , text or scripts will be placed just below the opening <body> tag on your website</p>
                    <textarea name="kau-wpic-textarea-body" rows="10" cols="100" ><?php echo kauget('kau-wpic-textarea-body', $getWpic);?></textarea> 
</div>

<div id="wpic-footer" class="wpicTabcontent">
  <p>These code , text or scripts will be placed in the closing </body> tag on your website</p>
  <textarea name="kau-wpic-textarea-footer" rows="10" cols="100" ><?php echo kauget('kau-wpic-textarea-footer', $getWpic);?></textarea>

</div>

 <input name="submit" type="submit" name="Submit" class="button button-primary kau-wpic-settings-btn" value="<?php esc_attr_e('Save Settings'); ?>" />
</form>

<script>
document.getElementById("wpicActive").click();
</script>
