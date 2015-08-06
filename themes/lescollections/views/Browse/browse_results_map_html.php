<?php
/* ----------------------------------------------------------------------
 * views/Browse/browse_results_images_html.php : 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of 
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
 *
 * This source code is free and modifiable under the terms of 
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */
 	
	AssetLoadManager::register('timeline');
	
	$qr_res 			= $this->getVar('result');				// browse results (subclass of SearchResult)
	$va_facets 			= $this->getVar('facets');				// array of available browse facets
	$va_criteria 		= $this->getVar('criteria');			// array of browse criteria
	$vs_browse_key 		= $this->getVar('key');					// cache key for current browse
	$va_access_values 	= $this->getVar('access_values');		// list of access values for this user
	$vn_hits_per_block 	= (int)$this->getVar('hits_per_block');	// number of hits to display per block
	$vn_start		 	= (int)$this->getVar('start');			// offset to seek to before outputting results
	
	$va_views			= $this->getVar('views');
	$vs_current_view	= $this->getVar('view');
	$va_view_icons		= $this->getVar('viewIcons');
	$vs_current_sort	= $this->getVar('sort');
	
	$t_instance			= $this->getVar('t_instance');
	$vs_table 			= $this->getVar('table');
	$vs_pk				= $this->getVar('primaryKey');
	
	
	$va_options			= $this->getVar('options');
	$vs_extended_info_template = caGetOption('extendedInformationTemplate', $va_options, null);

	$vb_ajax			= (bool)$this->request->isAjax();

    $va_view_info = $va_views[$vs_current_view];
	
?>
<?php
//
// map
//
if (!is_array($va_map_attributes = caGetOption('map_attributes', $va_options, array())) || !sizeof($va_map_attributes)) {
if ($vs_map_attribute = caGetOption('map_attribute', $va_options, false)) { $va_map_attributes = array($vs_map_attribute); }
}

//if(is_array($va_map_attributes) && sizeof($va_map_attributes)) {
$o_map = new GeographicMap("100%", 500, 'map');

$qr_res->seek($vn_start);

$vn_c=0;
$vn_map_counting=0;
/*
 * Demo point
 *
 $point = new GeographicMapItem(
    array(
        "latitude" => "48.804722",
        "longitude" => "2.121782",
        "label" => "palais de versailles",
        "content" => "description",
        "color" => "#123456"
    )
);
$o_map->addMapItem($point);
*/

while($qr_res->nextHit()) {
    $data = $qr_res->get($va_view_info['data'], array('coordinates' => true, 'returnAsArray' => true));


    if ($data) {
        $data = reset($data);
        $o_map_item = new GeographicMapItem(
          array(
              "latitude" => $data["georeference"]["latitude"],
              "longitude" => $data["georeference"]["longitude"],
              "label" => "label-".$vn_c,
              "content" => $qr_res->getWithTemplate(caGetOption('title_template', $va_view_info['display'], null)),
              "color" => $va_view_info["display"]["color"]
          )
        );
        $o_map->addMapItem($o_map_item);
        $vn_map_counting++;
    }

    $vn_c++;
    if ($vn_c > 2000) { break; }
}

$o_map->fitExtentsToMapItems();
?>
<h3><?php print $vn_map_counting; ?> <small>objets ont des coordonnées géographiques</small></h3>
<?php
    print $o_map->render('HTML');
