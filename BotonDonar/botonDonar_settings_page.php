<?php
    global $chk;
    if(isset($_POST['wp_submit'])){
            wph_opt();
    }
    function wp_opt(){
        $hellotxt = $_POST['LinkPagina'];
        global $chk;
        if( get_option('link_pagina') != trim($hellotxt)){
            $chk = update_option( 'link_pagina', trim($hellotxt));
        }
    }
?>
<div class="wrap">
  <div id="icon-options-general" class="icon32"> <br>
  </div>
  <h2>Boton Donar Setting</h2>

  <?php if(isset($_POST['wp_submit']) && $chk):?>
  <div id="message" class="updated below-h2">
    <p>Se actualizo el mensaje correctamente.</p>
  </div>
  <?php endif;?>
  <div class="metabox-holder">
    <div class="postbox">
      <h3><strong>Ingrese link página Donación</strong></h3>
      <form method="post" action="">
        <table class="form-table">
          <tr>
            <th scope="row">Link Página Donación</th>
            <td><input type="text" name="LinkPagina" 
value="<?php echo get_option('link_pagina');?>" style="width:350px;" /></td>
          </tr>
          <tr>
            <th scope="row">&nbsp;</th>
            <td style="padding-top:10px;  padding-bottom:10px;">
<input type="submit" name="wp_submit" value="Save changes" class="button-primary" />
</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
</div>

<?php
function your_function() {
   echo "<div style='color: red;
    font-size: 30px;
    margin: 20px;'>".get_option('link_pagina')."</div>";
}
add_action( 'wp_footer', 'your_function' );
?>