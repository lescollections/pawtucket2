<?php
	$pa_set_items = $this->getVar("set_items");
	$pn_set_id = $this->getVar("set_id");
	$ps_label = $this->getVar("label");
	$ps_description = $this->getVar("description");
	$pn_set_item_id = $this->getVar("set_item_id");
?>
<H1><?php print _t("Visite virtuelle"); ?> : <?php print $this->getVar("label")."</H1>"; ?>
    <!-- The StoryMap container can go anywhere on the page. Be sure to
    specify a width and height.  The width can be absolute (in pixels) or
    relative (in percentage), but the height must be an absolute value.
    Of course, you can specify width and height with CSS instead -->
    <div id="mapdiv" style="width: 100%; height: 600px;"></div>

    <!-- Your script tags should be placed before the closing body tag. -->
    <link rel="stylesheet" href="https://cdn.knightlab.com/libs/storymapjs/latest/css/storymap.css">
    <script type="text/javascript" src="https://cdn.knightlab.com/libs/storymapjs/latest/js/storymap-min.js"></script>

    <script>
        // storymap_data can be an URL or a Javascript object
        var storymap_data = "<?php print "http://".__CA_SITE_HOSTNAME__.__CA_URL_ROOT__."/index.php/Storymap/getSetInfosJson/set_id/".$pn_set_id; ?>" ;

        // certain settings must be passed within a separate options object
        var storymap_options = {};

        var storymap = new VCO.StoryMap('mapdiv', storymap_data, storymap_options);
        window.onresize = function(event) {
            storymap.updateDisplay(); // this isn't automatic
        }
    </script>
