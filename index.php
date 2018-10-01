<html><head><title>Demo</title>
<?php
    $assets="utf8,jquery,bootstrap,bust-cache";
    require_once("engine.php");
?>

</head>
<body>
<h3>Test Page</h3>

    <p id="result"></p>

    <script>
    if(typeof $!=="undefined")
        $("#result").append("Successfully loaded jquery using php asset loader!");
    else {
        var body = document.getElementByID('result');
        body[0].innerHTML = "Failed loading. Perhaps you edited engine.php incorrectly."
    }
    </script>
</body></html>