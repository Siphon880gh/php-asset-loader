<?php

// "bust-cache" => Inserts a unique integer at $cacheOpt 

$presets = array(
    "utf8" => "<meta charset='UTF-8'>",
    "mobile" => "<meta name='viewport' content='width=device-width, initial-scale=1'>",

    "jquery" => "<script src='http://code.jquery.com/jquery-2.1.4.min.js$cacheOpt'></script>",
    "bootstrap" => "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css$cacheOpt'>\n" .
                   "<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js$cacheOpt'></script>",
    "glyphicon" => "<script>console.log('%cGlyphicon is part of Bootstrap. Including Boostrap is sufficient.', 'background: #222; color: #bada55');</script>",
    "fontawesome" => "<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css$cacheOpt'>",
    "angular" => "<script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js$cacheOpt'></script>",
    "handlebars" => "<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.2/handlebars.min.js$cacheOpt'></script>",
    "cycle2" => "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.core.min.js$cacheOpt'></script>\n" .
                "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.flip.min.js$cacheOpt'></script>",
    "jq-mobile" => "<link rel='stylesheet' href='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css$cacheOpt'>\n" .
                   "<script src='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js$cacheOpt'></script>",
    "jq-ui" => "<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js$cacheOpt'></script>",
    "jq-color" => "<script src='https://code.jquery.com/color/jquery.color-2.1.2.min.js$cacheOpt'></script>"
);

?>