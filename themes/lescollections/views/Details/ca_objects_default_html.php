<?php
	$t_object = $this->getVar("item");
	$va_comments = $this->getVar("comments");
?>
<div class="row">
	<div class='col-xs-12 navTop'><!--- only shown at small screen size -->
		{{{previousLink}}}{{{resultsLink}}}{{{nextLink}}}
	</div><!-- end detailTop -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgLeft">
			{{{previousLink}}}{{{resultsLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
	<div class='col-xs-12 col-sm-10 col-md-10 col-lg-10'>
		<div class="container"><div class="row">
			<div class='col-sm-6 col-md-6 col-lg-5 col-lg-offset-1'>
				{{{representationViewer}}}
				
				<?php print caObjectRepresentationThumbnails($this->request, $this->getVar("representation_id"), $t_object, array("returnAs" => "bsCols", "linkTo" => "carousel", "bsColClasses" => "smallpadding col-sm-3 col-md-3 col-xs-4")); ?>
				<div id="detailTools">
					<div class="detailTool"><a href='#' onclick='jQuery("#detailComments").slideToggle(); return false;'><span class="glyphicon glyphicon-comment"></span><?php print _t("Comments"); ?>(<?php print sizeof($va_comments); ?>)</a></div><!-- end detailTool -->
					<div id='detailComments'>{{{itemComments}}}</div><!-- end itemComments -->
					<div class="detailTool"><span class="glyphicon glyphicon-share-alt"></span>{{{shareLink}}}</div><!-- end detailTool -->
				</div><!-- end detailTools -->
			</div><!-- end col -->
			
			<div class='col-sm-6 col-md-6 col-lg-5'>
				<H4>{{{<unit relativeTo="ca_collections" delimiter="<br/>"><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"> ➔ </ifcount>}}}{{{ca_objects.preferred_labels.name}}}</H4>
				<H6>{{{<unit>^ca_objects.type_id</unit>}}}</H6>
				<HR>
				
				{{{<ifdef code="ca_objects.measurementSet.measurements">^ca_objects.measurementSet.measurements (^ca_objects.measurementSet.measurementsType)</ifdef><ifdef code="ca_objects.measurementSet.measurements,ca_objects.measurementSet.measurements"> x </ifdef><ifdef code="ca_objects.measurementSet.measurements2">^ca_objects.measurementSet.measurements2 (^ca_objects.measurementSet.measurementsType2)</ifdef>}}}
				
				
				{{{<ifdef code="ca_objects.idno"><H6><?php print _t("Identifiant"); ?></H6>^ca_objects.idno<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.containerID"><H6><?php print _t("Box/series"); ?></H6>^ca_objects.containerID<br/></ifdef>}}}

                {{{<ifdef code="ca_objects.work_dimensions"><H6><?php print _t("Dimensions"); ?></H6>^ca_objects.work_dimensions.dimensions_width ^ca_objects.work_dimensions.dimensions_height ^ca_objects.work_dimensions.dimensions_depth ^ca_objects.work_dimensions.dimensions_type<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_art"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_art<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_antiq"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_antiq<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_archi"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_archi<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_jo"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_jo<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_mob"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_mob<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_scitech"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_scitech<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_manuimpri"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_manuimpri<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_imgson"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_imgson<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_col"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_col<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_tribethno"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_tribethno<br/></ifdef>}}}
                {{{<ifdef code="ca_objects.dom_nat"><H6><?php print _t("Domaine"); ?></H6>^ca_objects.dom_nat<br/></ifdef>}}}

                {{{<ifdef code="ca_objects.mat_et_techniques">^ca_objects.mat_et_techniques<br/></ifdef>}}}

				{{{<ifdef code="ca_objects.description">
					<span class="trimText"><br/>^ca_objects.description</span>
				</ifdef>}}}
				
				
				{{{<ifdef code="ca_objects.dateSet.setDisplayValue"><H6><?php print _t("Date"); ?></H6>^ca_objects.dateSet.setDisplayValue<br/></ifdev>}}}
				
				<hr></hr>
					<div class="row">
						<div class="col-sm-6">		
							{{{<ifcount code="ca_entities" min="1" max="1"><H6><?php print _t("Related person"); ?></H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6><?php print _t("Related people"); ?></H6></ifcount>}}}
							{{{<unit relativeTo="ca_entities" delimiter="<br/>"><l>^ca_entities.preferred_labels.displayname</l></unit>}}}
							
							
							{{{<ifcount code="ca_places" min="1" max="1"><H6><?php print _t("Related place"); ?></H6></ifcount>}}}
							{{{<ifcount code="ca_places" min="2"><H6><?php print _t("Related places"); ?></H6></ifcount>}}}
							{{{<unit relativeTo="ca_places" delimiter="<br/>"><l>^ca_places.preferred_labels.name</l></unit>}}}
							
							{{{<ifcount code="ca_list_items" min="1" max="1"><H6><?php print _t("Related Term"); ?></H6></ifcount>}}}
							{{{<ifcount code="ca_list_items" min="2"><H6><?php print _t("Related Terms"); ?></H6></ifcount>}}}
							{{{<unit relativeTo="ca_list_items" delimiter="<br/>">^ca_list_items.preferred_labels.name</unit>}}}
							
							{{{<ifcount code="ca_objects.LcshNames" min="1"><H6><?php print _t("LC Terms"); ?></H6></ifcount>}}}
							{{{<unit delimiter="<br/>">^ca_objects.LcshNames</unit>}}}
						</div><!-- end col -->				
						<div class="col-sm-6 colBorderLeft">
							{{{map}}}
						</div>
					</div><!-- end row -->
			</div><!-- end col -->
		</div><!-- end row --></div><!-- end container -->
	</div><!-- end col -->
	<div class='navLeftRight col-xs-1 col-sm-1 col-md-1 col-lg-1'>
		<div class="detailNavBgRight">
			{{{nextLink}}}
		</div><!-- end detailNavBgLeft -->
	</div><!-- end col -->
</div><!-- end row -->



<script type='text/javascript'>
	jQuery(document).ready(function() {
		$('.trimText').readmore({
		  speed: 75,
		  maxHeight: 120
		});
	});
</script>