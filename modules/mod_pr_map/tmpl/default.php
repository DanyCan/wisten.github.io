<?php 
/*
 * @package Joomla 3.2.2
 * @copyright Copyright (C) 2014 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
	*
 * @module Pranon -PR Map
 * @copyright Copyright (C) Pranon www.pranon.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

defined('_JEXEC') or die;
$document = JFactory::getDocument();

?>
<?php


if(($params->get('heading'))!=null){
            $heading= $params->get('heading');}
			else {
			$heading='';
			}
if(($params->get('desc'))!=null){
            $desc= $params->get('desc');}
			else {
			$desc='';
			}
if(($params->get('map_type'))!=null){
            $map_type= $params->get('map_type');}
			else {
			$map_type='';
			}
			
if(($params->get('map_lat1'))!=null){
            $map_lat1= $params->get('map_lat1');}
			else {
			$map_lat1='';
			}
			
if(($params->get('map_lat2'))!=null){
            $map_lat2= $params->get('map_lat2');}
			else {
			$map_lat2='';
			}

			
if(($params->get('map_lng1'))!=null){
            $map_lng1= $params->get('map_lng1');}
			else {
			$map_lng1='';
			}
			
if(($params->get('map_lng2'))!=null){
            $map_lng2= $params->get('map_lng2');}
			else {
			$map_lng2='';
			}
			

 if(($params->get('sl_text1'))!=null){
            $sl_text1= $params->get('sl_text1');}
			else {
			$sl_text1='';
			}
if(($params->get('sl_text2'))!=null){
            $sl_text2= $params->get('sl_text2');}
			else {
			$sl_text2='';
			}
if(($params->get('sl_text3'))!=null){
            $sl_text3= $params->get('sl_text3');}
			else {
			$sl_text3='';
			}
if(($params->get('sl_text4'))!=null){
            $sl_text4= $params->get('sl_text4');}
			else {
			$sl_text4='';
			}

if(($params->get('sl_text5'))!=null){
            $sl_text5= $params->get('sl_text5');}
			else {
			$sl_text5='';
			}
if(($params->get('sl_text6'))!=null){
            $sl_text6= $params->get('sl_text6');}
			else {
			$sl_text6='';
			}

			


?>

			
	<div id="map"></div>
	
<script>
 /* ==============================================
Google Map Styles
=============================================== */		
window.onload = function () {

			'use strict';

			var latlng = new google.maps.LatLng(<?php echo $map_lat1; ?>,<?php echo $map_lng1; ?>);

			var styles = [ 

						 {
							"featureType": "road",
							"stylers": [
							  { "color": "#000000" }
							]
						  },{
							"featureType": "landscape",
							"stylers": [
							  { "color": "#141414" }
							]
						  },{
							"elementType": "labels.text.fill",
							"stylers": [
							  { "color": "#808080" }
							]
						  },{
							"featureType": "poi",
							"stylers": [
							  { "color": "#161616" }
							]
						  },{
							"elementType": "labels.text",
							"stylers": [
							  { "saturation": 1 },
							  { "weight": 0.1 },
							  { "color": "#7f8080" }
							]
						  },{
						  }
						  
						  ];


			var myOptions = {
				zoom: 16,
				center: latlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				disableDefaultUI: true,
				scrollwheel: false,
				styles: styles
			};
			
			 var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h4>' +
			<?php if($sl_text2!=""){ ?>
			  '<?php echo $sl_text2; ?>'+
			<?php } ?>
			  '</h4>'+
			  '<p>' +
			<?php if($sl_text3!=""){ ?>
			  '<?php echo $sl_text3; ?>' +
			<?php } ?>
			  '</p>'+
			  '</div>';

		  var infowindow = new google.maps.InfoWindow({
			  content: contentString
		  });
			
			var map = new google.maps.Map(document.getElementById('map'), myOptions);
			
			var myLatlng = new google.maps.LatLng(<?php echo $map_lat1; ?>,<?php echo $map_lng1; ?>);
			
			var image = '<?php echo JURI::root(true)?>/images/marker.png';
			var marker = new google.maps.Marker({
				  position: myLatlng,
				  map: map,
				  title: '<?php echo $sl_text1; ?>',
				  icon: image
			  });
			  
			 google.maps.event.addListener(marker, 'click', function() {
				infowindow.open(map,marker);
			  });
			  
			
			 /* ========= Second Marker ========= */

			 // Second Marker Coordination

			 var myLatlngSecond = new google.maps.LatLng(<?php echo $map_lat2; ?>,<?php echo $map_lng2; ?>);

			 // Your Texts

			 var contentStringSecond = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h4>' +
			<?php if($sl_text5!=""){ ?>
			  '<?php echo $sl_text5; ?>'+
			<?php } ?>
			  '</h4>'+
			  '<p>' +
			<?php if($sl_text6!=""){ ?>
			  '<?php echo $sl_text6; ?>' +
			<?php } ?>
			  '</p>'+
			  '</div>';

			  var infowindowSecond = new google.maps.InfoWindow({
				  content: contentStringSecond,
				  });

			 var markerSecond = new google.maps.Marker({
				  position: myLatlngSecond,
				  map: map,
				  title: '<?php echo $sl_text4; ?>',
				  icon: image
			  });

			 google.maps.event.addListener(markerSecond, 'click', function() {
				infowindowSecond.open(map,markerSecond);
			  });

			 /* ========= End Second Marker ========= */
		
		}
	
	

</script>
