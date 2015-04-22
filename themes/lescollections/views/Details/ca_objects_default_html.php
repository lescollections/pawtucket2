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
					<div class="detailTool"><a href='#' onclick='jQuery("#detailComments").slideToggle(); return false;'><span class="glyphicon glyphicon-comment"></span>Comments (<?php print sizeof($va_comments); ?>)</a></div><!-- end detailTool -->
					<div id='detailComments'>{{{itemComments}}}</div><!-- end itemComments -->
					<div class="detailTool"><span class="glyphicon glyphicon-share-alt"></span>{{{shareLink}}}</div><!-- end detailTool -->
				</div><!-- end detailTools -->
			</div><!-- end col -->
			
			<div class='col-sm-6 col-md-6 col-lg-5'>
				<H4>{{{<unit relativeTo="ca_collections" delimiter="<br/>"><l>^ca_collections.preferred_labels.name</l></unit><ifcount min="1" code="ca_collections"> ➔ </ifcount>}}}{{{ca_objects.preferred_labels.name}}}</H4>
				

				<H6>{{{<unit>^ca_objects.type_id</unit>}}} /
				{{{<ifdef code="ca_objects.dom_antiq">
					^ca_objects.dom_antiq
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_archi">
					^ca_objects.dom_archi
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_trib">
					^ca_objects.dom_trib
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_sci">
					^ca_objects.dom_sci
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_nat">
					^ca_objects.dom_nat
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_mob">
					^ca_objects.dom_mob
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_impr">
					^ca_objects.dom_impr
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_art">
					^ca_objects.dom_art
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_jo">
					^ca_objects.dom_jo
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_img">
					^ca_objects.dom_img
				</ifdef>}}}
				{{{<ifdef code="ca_objects.dom_col">
					^ca_objects.dom_col
				</ifdef>}}}
				</H6>
				<HR>
				
				{{{<ifdef code="ca_objects.measurementSet.measurements">^ca_objects.measurementSet.measurements (^ca_objects.measurementSet.measurementsType)</ifdef><ifdef code="ca_objects.measurementSet.measurements,ca_objects.measurementSet.measurements"> x </ifdef><ifdef code="ca_objects.measurementSet.measurements2">^ca_objects.measurementSet.measurements2 (^ca_objects.measurementSet.measurementsType2)</ifdef>}}}
				
				
				{{{<ifdef code="ca_objects.idno"><H6>Identifiant</H6>^ca_objects.idno<br/></ifdef>}}}
				{{{<ifdef code="ca_objects.refs">
					<H6>Autres références</H6>
					<span class="trimText">^ca_objects.refs.reference</span>
				</ifdef>}}}
				{{{<ifdef code="ca_objects.refs.typref">(^ca_objects.refs.typref)<br/></ifdef>}}} 
				
				{{{<ifdef code="ca_objects.containerID"><H6>Boite/serie</H6>^ca_objects.containerID<br/></ifdef>}}}				
				<HR>

				{{{<ifdef code="ca_objects.description">
					<H6>Description</H6>
					<span class="trimText">^ca_objects.description</span>
				</ifdef>}}}
				{{{<ifdef code="ca_objects.work_dimensions">
					<H6>Dimensions</H6>
					<span class="trimText">^ca_objects.work_dimensions.dimensions_width x ^ca_objects.work_dimensions.dimensions_height x ^ca_objects.work_dimensions.dimensions_depth</span>
				</ifdef>}}}	
				{{{<ifdef code="ca_objects.work_dimensions.dimensions_type"> <span class="trimText">(^ca_objects.work_dimensions.dimensions_type) </span></ifdef>}}} 	
				
				{{{<ifdef code="ca_objects.inscriptions">
					<H6>Inscriptions</H6>
				</ifdef>}}}
				{{{<ifdef code="ca_objects.inscriptions.inscription_transcription"> <span class="trimText">"^ca_objects.inscriptions.inscription_transcription" </span></ifdef>}}} 
				{{{<ifdef code="ca_objects.inscriptions.inscription_place"> <span class="trimText">^ca_objects.inscriptions.inscription_place </span></ifdef>}}} 
				{{{<ifdef code="ca_objects.inscriptions.inscription_type"> <span class="trimText">(^ca_objects.inscriptions.inscription_type) </span></ifdef>}}} 
				
				<HR>
				{{{<ifdef code="ca_objects.biblio">
					<H6>Références bibliographiques</H6>
					<span class="trimText">^ca_objects.biblio</span>
				</ifdef>}}}
				
				<ifdef code="ca_objects.external_link"><H6>Liens externes</H6></ifdef>
				<a href={{{<ifdef code="ca_objects.external_link"> ^ca_objects.external_link.url_entry</ifdef>}}}> {{{<ifdef code="ca_objects.external_link"> ^ca_objects.external_link.url_source</ifdef>}}}</a>				
				
				{{{<ifdef code="ca_objects.ca_objects_location">
					<H6>Emplacement courant</H6>
					<span class="trimText">^ca_objects.ca_objects_location</span>
				</ifdef>}}}
				{{{<ifdef code="ca_objects.custodial_notes">
					<H6>état de conservation</H6>
					<span class="trimText">^ca_objects.custodial_notes</span>
				</ifdef>}}}

				
				{{{<ifdef code="ca_objects.date"><H6>Date</H6>^ca_objects.date.dates_value <i></i></ifdev>}}}
				{{{<ifdef code="ca_objects.date.dates_type">(^ca_objects.date.dates_type) <br/></ifdev>}}}
				{{{<ifdef code="ca_objects.lieu"><H6>Lieu</H6><span class="trimText">^ca_objects.lieu.lieu_name </span></ifdev>}}}
				{{{<ifdef code="ca_objects.lieu.lieu_type"> <span class="trimText">(^ca_objects.lieu.lieu_type) </span></ifdef>}}} 	

				<hr></hr>
					<div class="row">
						<div class="col-sm-6">		
							{{{<ifcount code="ca_entities" min="1" max="1"><H6>Personne liée</H6></ifcount>}}}
							{{{<ifcount code="ca_entities" min="2"><H6>Personnes liées</H6></ifcount>}}}
							{{{<unit relativeTo="ca_entities" delimiter="<br/>"><l>^ca_entities.preferred_labels.displayname</l></unit>}}}
							
							
							{{{<ifcount code="ca_places" min="1" max="1"><H6>Lieu lié</H6></ifcount>}}}
							{{{<ifcount code="ca_places" min="2"><H6>Lieux liés</H6></ifcount>}}}
							{{{<unit relativeTo="ca_places" delimiter="<br/>"><l>^ca_places.preferred_labels.name</l></unit>}}}
							
							{{{<ifcount code="ca_list_items" min="1" max="1"><H6>Terme lié</H6></ifcount>}}}
							{{{<ifcount code="ca_list_items" min="2"><H6>Termes liés</H6></ifcount>}}}
							{{{<unit relativeTo="ca_list_items" delimiter="<br/>">^ca_list_items.preferred_labels.name</unit>}}}
							
							{{{<ifcount code="ca_objects.LcshNames" min="1"><H6>Termes LC</H6></ifcount>}}}
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