<html>
<link href="style.css" rel="stylesheet">
    <body>
        <?php
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            $q1 = $_POST["QI1"];
            $c1 = $q1*10;
            $q2 = $_POST["QI2"];
            $c2 = $q2*50;
            $q3 = $_POST["QI3"];
            $c3 = $q3*500;
            $so = $_POST["shipopt"];
            if($so == 0)
                $st = "Free 7 day";
            if($so == 5)
                $st = "Three day";
            if($so == 50)
                $st = "Overnight";
            $tc = $c1 + $c2+ $c3 + $so;
            echo "Hello $user, your password is: $pass";
            echo "<h3> Reciept: </h3>";
            echo "<table>";
            echo "<tr><th></th> <th> Quantity </th> <th> Price </th> <th> Cost </th> </tr>";
            echo "<tr> <th> Item 1 </th> <td> $q1 </td> <td> 10 </td> <td> $c1 </td> </tr>";
            echo "<tr> <th> Item 2 </th> <td> $q2 </td> <td> 50 </td> <td> $c2 </td> </tr>";
            echo "<tr> <th> Item 3 </th> <td> $q3 </td> <td> 500 </td> <td> $c3 </td> </tr>";
            echo "<tr> <th> Shipping: </th> <td colspan='2'> $st </td> <td> $so </td> </tr>";
            echo "<tr><th></th> <th colspan='2'> Total Cost: </th> <th> $tc </th> </tr>";
            echo "</table>";
        ?>
    </body>
</html>
