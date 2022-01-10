<?php  
    $leeftijd = 13;
?>
<html>
<head>
</head>
<body>

    <div id="IsMeerderJarig">
        <?php
            if($leeftijd < 18 ){
                echo "<h3>Je moet minimaal 18 jaar zijn om deze site te mogen bekijken</h3>";
            }
        ?>
    </div>

</body>
</html>