<html>
    <body>
        <?php
            $c1 = $_POST["QI1"]*10;
            $c2 = $_POST["QI2"]*50;
            $c3 = $_POST["QI3"]*500;
            echo "Reciept: ";
            echo "<br><b>Item 1: </b><br> Quantity: " . $_POST["QI1"] . ", Price: $10, Total sub: " . $c1;
            echo "<br><b>Item 2: </b><br> Quantity: " . $_POST["QI2"] . ", Price: $50, Total sub: " . $c2;
            echo "<br><b>Item 3: </b><br> Quantity: " . $_POST["QI3"] . ", Price: $500, Total sub: " . $c3;
        ?>
    </body>
</html>
