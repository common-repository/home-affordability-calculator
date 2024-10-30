<?php

function WPBOXAFF_home(){include 'Pages/activation.php';}
function WPBOXAFF_support() {include 'Pages/support.php';}
function WPBOXAFF_settings() {include 'Pages/settings.php';}

function WPBOXAFF_leads() {include 'Pages/leads.php';}
function WPBOXAFF_gopro() {include 'Pages/pro.php';}
function WPBOXAFF_pdf() {include 'Pages/pdf.php';}



function WPBOXAFF_CSSJS() {
    wp_enqueue_style( 'hac_style1', plugins_url('CSS/style.css?v=2.1', __FILE__) );
    wp_enqueue_style( 'hac_style2', plugins_url('JS/tipx/jqu.css', __FILE__) );
    wp_enqueue_style( 'hac_style3', plugins_url('JS/tipx/style.css', __FILE__) );
    wp_enqueue_script( 'jquery-ui-tooltip' );

     wp_enqueue_script('hac_script_1',plugins_url('JS/a81368914c.js', __FILE__)  );
     wp_enqueue_script('hac_script_2',plugins_url('wpbox-admin.js', __FILE__),1 ,1,1 );
    wp_enqueue_script('hac_script_3',plugins_url('JS/feedback.js', __FILE__),1 ,2,1 );

  

}


function hac_get_head(){
  $html = '

<tr style="text-align: center;border-bottom: 1px solid black;">
   <td>Default Label</td>
   <td>New Label</td>
   <td>Default Value</td>
   <td>Show / Hide this input on calculator</td>
</tr>

  ';

  return $html;
}





function WPBOXAFF_menu() {
  

  add_menu_page ( 'Menu', 'Affordibility Calculator Lite', 'manage_options', 'MAINMENUWPBOXAFF', 'WPBOXAFF_home', 'dashicons-admin-home' );
  add_submenu_page ( 'MAINMENUWPBOXAFF', 'WPBOXAFF_settings', 'Settings', 'manage_options','WPBOXAFF_settings' ,'WPBOXAFF_settings', '');
    add_submenu_page ( 'MAINMENUWPBOXAFF', 'WPBOXAFF_pdf', 'PDF & Email', 'manage_options','WPBOXAFF_pdf' ,'WPBOXAFF_pdf', '');

  add_submenu_page ( 'MAINMENUWPBOXAFF', 'WPBOXAFF_settings', 'View Leads', 'manage_options','WPBOXAFF_leads' ,'WPBOXAFF_leads', '');
  add_submenu_page ( 'MAINMENUWPBOXAFF', 'WPBOXAFF_settings', 'Go Pro', 'manage_options','WPBOXAFF_gopro' ,'WPBOXAFF_gopro', '');

  add_submenu_page ( 'MAINMENUWPBOXAFF', 'SupportWPBOXAFF', 'Support', 'manage_options','SupportWPBOXAFF' ,'WPBOXAFF_support', '');

}?>