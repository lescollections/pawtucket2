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
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
        <a href="/"><H1>Maison Losseau 
            <small>Catalogue des collections</small></H1></a>
<?php
        print $this->render("Front/gallery_set_links_html.php");
?>
        </div> <!--end col-sm-4-->  
        <div class="col-sm-8 col-sm-offset-1">

<?php
		print $this->render("Front/featured_set_slideshow_html.php");
?>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-sm-8 col-sm-offset-3">
            <p class="front_page">
                Depuis plusieurs mois, la Province de Hainaut conduit un important travail de restauration et de mise en valeur de la Maison Losseau, joyau d'architecture Art Nouveau situé au coeur de Mons.
            </p>
        </div><!--end col-sm-8-->
	</div><!-- end row -->
</div> <!--end container-->