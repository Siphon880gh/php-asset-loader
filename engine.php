<?php
// Explode asssets
$assets = str_replace(" ", "", $assets);
$assets = strtolower($assets);
$assets = explode(",", $assets);
$assets = array_filter($assets); // removes empty elements

// Cache settings
$bustCache = "bust-cache";
$isBustCache = array_search( $bustCache, $assets);
$cacheOpt = "";
if($isBustCache!==false) {
    $cacheOpt = sprintf("?v=%d", rand(0, 999));
    $assets = array_diff($assets, array($bustCache));
}

// Load in asset presets
$presets = array();
require("presets.php");

for($i=0; $i<count($assets); $i++) {
    $asset = $assets[$i];

    if(array_key_exists($asset, $presets)) {
        if($i === count($assets) - 1)
            echo $presets[ $asset ];
        else
            echo sprintf("%s\n", $presets[ $asset ]);
    } // if
};

?>