PHP Asset Loader
===
By Weng Fei Fung. A quicker way to load assets than using webpack, bower, or others. Pass an asset name to engine.php and it would echo the line that loads the asset. You may modify what echos from those names and also add your own asset names. 

For example, passing the name "jquery" echoes `<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>`.


Installation:
---
Download engine.php and presets.php.

Use
---
```
<?php
    $assets="utf8,jquery,bootstrap,bust-cache";
    require_once("engine.php");
?>
```

Preset Assets
--
You can modify or add to them at presets.php
```
- "bust-cache" => Inserts a unique integer at $cacheOpt 
- "utf8" => "<meta charset='UTF-8'>",
- "mobile" => "<meta name='viewport' content='width=device-width, initial-scale=1'>",
- "jquery" => "<script src='http://code.jquery.com/jquery-2.1.4.min.js$cacheOpt'></script>",
- "bootstrap" => "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css$cacheOpt'>  
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js$cacheOpt'></script>",
- "glyphicon" => "<script>console.log('%cGlyphicon is part of Bootstrap. Including Boostrap is sufficient.', 'background: #222; color: #bada55');</script>",
- "fontawesome" => "<link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css$cacheOpt'>",
- "angular" => "<script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js$cacheOpt'></script>",
- "handlebars" => "<script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.0.2/handlebars.min.js$cacheOpt'></script>",
- "cycle2" => "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.core.min.js$cacheOpt'></script>  
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/20140415/jquery.cycle2.flip.min.js$cacheOpt'></script>",
- "jq-mobile" => "<link rel='stylesheet' href='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css$cacheOpt'>\n"  
<script src='http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js$cacheOpt'></script>",
- "jq-ui" => "<script src='https://code.jquery.com/ui/1.11.4/jquery-ui.min.js$cacheOpt'></script>",
- "jq-color" => "<script src='https://code.jquery.com/color/jquery.color-2.1.2.min.js$cacheOpt'></script>"
```