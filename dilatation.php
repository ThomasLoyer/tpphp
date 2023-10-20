<html>
    <body>
        Durée écoulée sur terre = 
        <?php
            echo $_POST['dFusee'] / sqrt( 1 - pow($_POST['c'],2) / pow(300_000,2));
        ?>
    </body>
</hmtl>