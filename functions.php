<?php
/*
* Shortcode: [ga_map width='500' height='220' long='54.578592' lat='-5.934293' zoom='14']
*
*/ 

add_shortcode('ga_map', 'ga_map_shortcode');
function ga_map_shortcode($atts){  
  $width = intval($atts['width']);
  $height = intval($atts['height']);
  $long = trim($atts['long']);
  $lat = trim($atts['lat']);  
  $zoom = trim($atts['zoom']);  
return '
<div id="bhmap" style="clear:both; display:block; margin:20px 0; width:'.$width.'px; height:'.$height.'px;"></div>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript">                
   var map = new google.maps.Map(document.getElementById(\'bhmap\'), {
     zoom: '.$zoom.',
     center: new google.maps.LatLng('.$long.','.$lat.'),
     mapTypeId: google.maps.MapTypeId.ROADMAP
   });
   marker = new google.maps.Marker({
       position: new google.maps.LatLng('.$long.','.$lat.', '.$zoom.'),
       map: map
     });
 
</script>
';
}
?>