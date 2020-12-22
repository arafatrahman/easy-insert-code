

<h3><?php esc_html_e('EASY INSERT CODE', 'easy-insert-code'); ?></h3>
<p><b><?php esc_html_e('Insert code,text or script in Headers,Footers and Body', 'easy-insert-code'); ?> </b></p>


<?php 


if(eic_post('submit')){
    $eicSettins = array(
        'kau-eic-textarea-header' => esc_html(eic_post('kau-eic-textarea-header')),
        'kau-eic-textarea-body' => esc_html(eic_post('kau-eic-textarea-body')),
        'kau-eic-textarea-footer' => esc_html(eic_post('kau-eic-textarea-footer'))
    );
    EIC_setting::saveEic($eicSettins);       

}

 $getEic = EIC_setting::getEic();
 echo eicget( 'kau-eic-textarea-body',$getEic);
 
?>

<div class="eicTabs">
    <button class="eicTablinks" onclick="eicSettings(event, 'eic-header')" id="eicActive"><b><?php esc_html_e('Header Section', 'easy-insert-code'); ?></b></button>
  <button class="eicTablinks" onclick="eicSettings(event, 'eic-body')"><b><?php esc_html_e('Body Section', 'easy-insert-code'); ?></b></button>
              <button class="eicTablinks" onclick="eicSettings(event, 'eic-footer')"><b><?php esc_html_e('Footer Section', 'easy-insert-code'); ?></b></button>
</div>


<form action="options-general.php?page=easy-insert-code" method="post">

<div id="eic-header" class="eicTabcontent" >
  <p><?php esc_html_e('These code , text or scripts will be placed in the', 'easy-insert-code'); ?> <head> <?php esc_html_e('section. of your website', 'easy-insert-code'); ?></p>
                    <textarea name="kau-eic-textarea-header" rows="10" cols="100" ><?php esc_html_e(eicget('kau-eic-textarea-header', $getEic));?></textarea>
</div>

<div id="eic-body" class="eicTabcontent">
  <p><?php esc_html_e('These code , text or scripts will be placed just below the opening', 'easy-insert-code'); ?> <body> <?php esc_html_e('tag on your website', 'easy-insert-code'); ?></p>
                    <textarea name="kau-eic-textarea-body" rows="10" cols="100" ><?php esc_html_e(eicget('kau-eic-textarea-body', $getEic));?></textarea> 
</div>

<div id="eic-footer" class="eicTabcontent">
  <p><?php esc_html_e('These code , text or scripts will be placed in the closing', 'easy-insert-code'); ?> </body> <?php esc_html_e('tag on your website', 'easy-insert-code'); ?></p>
  <textarea name="kau-eic-textarea-footer" rows="10" cols="100" ><?php esc_html_e(eicget('kau-eic-textarea-footer', $getEic));?></textarea>

</div>

 <input name="submit" type="submit" name="Submit" class="button button-primary kau-eic-settings-btn" value="<?php esc_attr_e('Save Settings'); ?>" />
</form>

<script>
document.getElementById("eicActive").click();
</script>
