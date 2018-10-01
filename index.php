<html><head><title>Demo</title>
<?php
    $assets="utf8,jquery,bootstrap,bust-cache";
    require_once("engine.php");
?>

</head>
<body>

    <script>
    if(typeof $!=="undefined")
        $("body").append("Successfully loaded jquery using php asset loader!");
    else {
        var body = document.getElementsByTagName('body');
        body[0].innerHTML = "Failed loading. Perhaps you edited engine.php incorrectly."
    }
    </script>
</body></html>