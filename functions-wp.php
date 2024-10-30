<?php

function WPBOXAFF_scripts() {
global $post;

      //=========
    if( has_shortcode( $post->post_content, 'affordability-calc-wppluginbox') ) {


//------------ PLAYER-----

wp_enqueue_script( 'wpboxaff_js1', plugins_url('/JS/a81368914c.js', __FILE__) ); 
wp_enqueue_script( 'wpboxaff_js2', plugins_url('/lib/js/formatters.js?v=1.3', __FILE__) ); 

wp_enqueue_script( 'wpboxaff_js3', plugins_url('/lib/js/highcharts.js', __FILE__), array('jquery'),'2.1',0 );  //0: not in footer
wp_enqueue_script( 'wpboxaff_js4', plugins_url('/lib/js/jstat.min.js', __FILE__), array('jquery'),'2.1',0 ); 
wp_enqueue_script( 'wpboxaff_js5', plugins_url('/lib/js/formula.min.js', __FILE__), array('jquery'),'2.1',0 ); 

wp_enqueue_script( 'wpboxaff_js6', plugins_url('/lib/js/chart.js', __FILE__), array('jquery'),'2.1',1 ); 
wp_enqueue_script( 'wpboxaff_js7', plugins_url('/lib/js/script.js', __FILE__), array('jquery'),'2.1',1 ); 

// wp_enqueue_style( 'wpboxaff_css1', plugins_url('/lib/css/icons.css', __FILE__) );
wp_enqueue_style( 'wpboxaff_css2', plugins_url('/lib/css/skin.css', __FILE__) );
wp_enqueue_style( 'wpboxaff_css3', plugins_url('/lib/css/main-css.css', __FILE__) );


//--------------------        


    }

      //=========
 }


 function WPBOXAFF_appi($arr){ // [id,label,classes]

$id = $arr[0];
$label = $arr[1];

if(isset($arr[4])){$value = $arr[4];}else{$value = '';}

if(isset($arr[2])){$hac_class = $arr[2];}else{$hac_class = '';}
if( isset($arr[3]) && $arr[3] == '1' ){$readonly = 'readonly';$hac_read_class= ' hac-readonly';$value = '-';}else{$readonly = '';$hac_read_class='';}



    $ht = '

<div class="hac-input-div '.$hac_class.'">
    <div id="label-'.$id.'">'.$label.'</div>
    <div><input type="text" class="hac-ti '.$hac_read_class.'" name="hac-'.$id.'" id="hac-'.$id.'" placeholder="Enter" '.$readonly.' value="'.$value.'"></div>
</div>

    ';
    return $ht;
}


function WPBOXAFF_defaults(){ // [id,label,classes]
$settings = file_get_contents(__DIR__.'/Pages/json.php');
$settings = json_decode($settings,true);
return $settings;
}
 
function hac_detect($string,$txt2detect){
if (strpos($string, $txt2detect) !== false) { return true; }
return false;
} 

 function WPBOXAFF_initiate($atts, $content = null){

    extract(shortcode_atts(array(
      "id" => '1',    
   ), $atts));
   

//============= PLAYER CONTENT ==========
ob_start();
include 'lib/index.php';
$output = ob_get_clean();
return $output;
//====================================== 


   
}

?>