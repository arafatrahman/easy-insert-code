

<h3><?php esc_html_e('WP INSERT CODE', 'wp-insert-code-headers-and-footers'); ?></h3>
<p><b><?php esc_html_e('Insert code,text or script in Headers,Footers and Body', 'wp-insert-code-headers-and-footers'); ?> </b></p>


<?php 


if(KAU_POST('submit')){
    $wpicSettins = array(
        'kau-wpic-textarea-header' => KAU_POST('kau-wpic-textarea-header'),
        'kau-wpic-textarea-body' => KAU_POST('kau-wpic-textarea-body'),
        'kau-wpic-textarea-footer' => KAU_POST('kau-wpic-textarea-footer')
    );
    wpic_setting::saveWpic($wpicSettins);       

}

 $getWpic = wpic_setting::getWpic();
 
?>

<div class="wpicTabs">
    <button class="wpicTablinks" onclick="wpicSettings(event, 'wpic-header')" id="wpicActive"><b><?php esc_html_e('Header Section', 'wp-insert-code-headers-and-footers'); ?></b></button>
  <button class="wpicTablinks" onclick="wpicSettings(event, 'wpic-body')"><b><?php esc_html_e('Body Section', 'wp-insert-code-headers-and-footers'); ?></b></button>
              <button class="wpicTablinks" onclick="wpicSettings(event, 'wpic-footer')"><b><?php esc_html_e('Footer Section', 'wp-insert-code-headers-and-footers'); ?></b></button>
</div>


<form action="options-general.php?page=kau-wp-insert-code" method="post">

<div id="wpic-header" class="wpicTabcontent" >
  <p><?php esc_html_e('These code , text or scripts will be placed in the', 'wp-insert-code-headers-and-footers'); ?> <head> <?php esc_html_e('section. of your website', 'wp-insert-code-headers-and-footers'); ?></p>
                    <textarea name="kau-wpic-textarea-header" rows="10" cols="120" ><?php echo kauget('kau-wpic-textarea-header', $getWpic);?></textarea>
</div>

<div id="wpic-body" class="wpicTabcontent">
  <p><?php esc_html_e('These code , text or scripts will be placed just below the opening', 'wp-insert-code-headers-and-footers'); ?> <body> <?php esc_html_e('tag on your website', 'wp-insert-code-headers-and-footers'); ?></p>
                    <textarea name="kau-wpic-textarea-body" rows="10" cols="120" ><?php echo kauget('kau-wpic-textarea-body', $getWpic);?></textarea> 
</div>

<div id="wpic-footer" class="wpicTabcontent">
  <p><?php esc_html_e('These code , text or scripts will be placed in the closing', 'wp-insert-code-headers-and-footers'); ?> </body> <?php esc_html_e('tag on your website', 'wp-insert-code-headers-and-footers'); ?></p>
  <textarea name="kau-wpic-textarea-footer" rows="10" cols="120" ><?php echo kauget('kau-wpic-textarea-footer', $getWpic);?></textarea>

</div>

 <input name="submit" type="submit" name="Submit" class="button button-primary kau-wpic-settings-btn" value="<?php esc_attr_e('Save Settings'); ?>" />
</form>

<script>
document.getElementById("wpicActive").click();
</script>
