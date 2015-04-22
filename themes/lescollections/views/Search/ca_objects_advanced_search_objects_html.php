<div class="container">
	<div class="row">
		<div class="col-sm-8 ">
			<h1>Recherche avancée</h1>

<?php			
	print "<p>Entrez vos termes recherchés dans les champs ci-dessous.</p>";
?>

{{{form}}}
	
	<div class='advancedContainer'>
		<div class="advancedSearchField">
			Titre:<br/>
			{{{ca_objects.preferred_labels.name%width=220px}}}
		</div>
		<div class="advancedSearchField">
			Identifiant:<br/>
			{{{ca_objects.idno%width=210px}}}
		</div>
		<div class="advancedSearchField">
			Mots clés:<br/>
			{{{_fulltext%width=200px&height=25px}}}
			{{{_fulltext:boolean}}}
		</div>
		<div class="advancedSearchField">
			Type:<br/>
			{{{ca_objects.type_id}}}
		</div>
		<div class="advancedSearchField">
			Date ou période <i>(e.g. 1970-1979)</i>:<br/>
			{{{ca_objects.dates.dates_value%width=200px&height=40px&useDatePicker=0}}}
		</div>
		
		<div class="advancedSearchField">
			Collection: <br/>
			{{{ca_collections.preferred_labels%restrictToTypes=collection%width=200px&height=40px}}}
		</div>
	</div>	
	
	<br style="clear: both;"/>
	
	<div style="float: right; margin-left: 20px;">{{{reset%label=Réinitialiser}}}</div>
	<div style="float: right;">{{{submit%label=Chercher}}}</div>
{{{/form}}}

		</div>
		<div class="col-sm-4" style='border-left:1px solid #ddd;'>
			<h1>Liens</h1>
			<p> <i> ici, il faut mettre des liens utiles </i></p>
		</div><!-- end col -->
	</div><!-- end row -->
</div><!-- end container -->