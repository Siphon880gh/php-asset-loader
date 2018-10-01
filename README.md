PHP Asset Loader
===
By Weng Fei Fung. I created this tool for web developers to load jquery, bootstrap css, or whatever they define, easily by calling a PHP function. This may serve small scale projects that don't need the time investment in a bundler like webpack or a package manager like bower. Just pass the name of the asset you want to load, like passing "jquery" will echo `<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>`. You can define the assets at presets.php. You can pass multiple names in one line, then my library will echo those multiple lines of code to the assets.


Install
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