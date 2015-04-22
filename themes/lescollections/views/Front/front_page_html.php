<?php
/** ---------------------------------------------------------------------
 * themes/default/Front/front_page_html : Front page of site 
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2013 Whirl-i-Gig
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
 * @package CollectiveAccess
 * @subpackage Core
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License version 3
 *
 * ----------------------------------------------------------------------
 */
		print $this->render("Front/featured_set_slideshow_html.php");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<H1>Louis Floutier</H1>
<blockquote>
			<p>Louis Benjamin Hughes Floutier, artiste peintre, est né le 31 mars 1882 à Toulouse où il suit une première formation artistique de cinq ans à l’école des Beaux Arts de Toulouse dans l’atelier de peinture de Monsieur Laborde. Il intègre l’Académie des beaux-arts de Paris dans l’atelier de Monsieur Cormon le 3 novembre 1903. Premier logiste au Grand prix de Rome.
</p><p>
Il participe à la première Guerre Mondiale, comme engagé volontaire au 13e Régiment d Artillerie et 1er Génie, comme camoufleur.
</p><p>
Il s'installe au Pays basque, et participe en 1919 à la fondation des Poteries de Ciboure avec Lukas et Villotte.
</p><p>
À partir de 1922 il se concentre sur les paysages basques. Il décède à Saint Jean de Luz le 26 octobre 1936.</p>
</blockquote>
		</div><!--end col-sm-8-->
		<div class="col-sm-4">
<?php
		print $this->render("Front/gallery_set_links_html.php");
?>
		</div> <!--end col-sm-4-->	
	</div><!-- end row -->
</div> <!--end container-->
