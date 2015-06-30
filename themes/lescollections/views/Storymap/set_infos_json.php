<?php
/**
 * Created by PhpStorm.
 * User: gautier
 * Date: 29/06/15
 * Time: 22:39
 */

//print json_encode($this->getVar('set_infos'));
$t_set = $this->getVar("set");
$pn_set_id = $this->getVar("set_id");
$label = $this->getVar("label");
$description = $this->getVar("description");
$description = str_replace(array("\r\n", "\r", "\n"), "", $description);
$num_items = $this->getVar("num_items");
$set_first_item = $this->getVar("set_item");

$set_items = $this->getVar("set_items");
$set_objects = $this->getVar("set_objects");
$set_representation_url = $set_first_item["representation_url"];

?>
{
"storymap": {
    "language": "fr",
    "slides": [
        {
            "type": "overview",
            "date": "1790-2010",
            "text": {
                "headline": "<?php print mb_strtoupper($label); ?>",
                "text": "<?php print $description; ?>"
            },
            "media": {
                "url":              "<?php print $set_representation_url; ?>"
            }
        }
<?php
foreach($set_items as $set_item) :
    $va_object = $set_objects[$set_item["row_id"]];
    //var_dump($set_objects[$vn_object_id]);
    //die();
?>
    ,
    {
        "date": "<?php print $va_object["date"]; ?>",
        "text": {
            "headline": "<?php print $set_item["name"]; ?>",
            "text": "<?php print $va_object["description"]."<a href='".__CA_URL_ROOT__."/index.php/Detail/objects/".$set_item["row_id"]."'>Afficher</a>"; ?>"
        },
        "location": {
            "name": "<?php print $va_object["placename"]; ?>",
            "lat": <?php print $va_object["latitude"]; ?>,
            "lon": <?php print $va_object["longitude"]; ?>,
            "zoom": <?php print $va_object["zoom"]; ?>,
            "line": <?php print $va_object["line"]; ?>
    },
        "media": {
            "url": "<?php print $set_item["representation_url_iconlarge"]; ?>",
            "credit": "<?php print $va_object["media_credit"]; ?>",
            "caption": "<?php print $va_object["media_caption"]; ?>"
        }
    }
<?php
    //die();
endforeach;
?>

        ]
    }
}
<?php exit(); ?>