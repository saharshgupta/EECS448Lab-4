<html>
    <body>
        <?php
            $q1 = $_POST["QI1"];
            $c1 = $q1*10;
            $q2 = $_POST["QI2"];
            $c2 = $q2*50;
            $q3 = $_POST["QI3"];
            $c3 = $q3*500;
            $so = $_POST["shipopt"];
            if($so == 0)
                $st = "Free";
            if($so == 5)
                $st = "Three day";
            if($so == 50)
                $st = "Overnight";
            echo "Reciept: ";
            echo "<br><b>Item 1: </b><br> Quantity: " . $q1 . ", Price: $10, Total sub: " . $c1;
            echo "<br><b>Item 2: </b><br> Quantity: " . $q2 . ", Price: $50, Total sub: " . $c2;
            echo "<br><b>Item 3: </b><br> Quantity: " . $q3 . ", Price: $500, Total sub: " . $c3;

            echo "<table>";
            echo "<tr><td></td> <th> Quantity </th> <th> Price </th> <th> Total cost </th> </tr>";
            echo "<tr> <th> Item 1 </th> <td> $q1 </td> <td> 10 </td> <td> $c1 </td> </tr>";
            echo "<tr> <th> Item 2 </th> <td> $q2 </td> <td> 50 </td> <td> $c2 </td> </tr>";
            echo "<tr> <th> Item 3 </th> <td> $q3 </td> <td> 500 </td> <td> $c3 </td> </tr>";
            echo "<tr> <th> Shipping: </th> <td> $st </td> <td> Cost: $so </td> </tr>";
            echo "</table>";
        ?>
    </body>
</html>
