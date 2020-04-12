<?php

/**
 * Plugin Name:       Boton Donar Fundación Cigarra
 * Plugin URI:        https://www.cigarra.org
 * Description:       Plugin boton flotante donar página web
 * Version:           1.0
 * Author:            John López
 * Author URI:        https://github.com/johnalbh
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       botonDonar-plugin
 * Domain Path:       /languages
 */


add_action('wp_footer', 'bps_call_button');
/*add_action('admin_menu', 'admin_menu');*/

/*function admin_menu() {
    add_menu_page( 'Boton Donar', 'Boton Donar Ahora', 'manage_options', 'boton_donar', 'mt_setting_page' );
}



function mt_setting_page(){
    echo "<h2>" . __('Configuración Boton Donar Ahora') . "</h2>";
    include_once('botonDonar_settings_page.php');
}*/


function bps_call_button()
{ ?>

    <a href="http://www.cigarra.org/wps/portal/#donarAhora">
        <div id="call-me">
            <img src="http://www.cigarra.org/wps/portal/wp-content/uploads/2020/04/donaahora.png">
        </div>
    </a>

<?php
}

