<?php
$dom = new DomDocument;
$q1 = $dom->getElementById("Q1")->value;
echo "<ul>";
echo "<li> $q1 " . $_GET["Q1"] . "</li>";
echo "<li> Option selected for question 2: " . $_GET["Q2"] . "</li>";
echo "<li> Option selected for question 3: " . $_GET["Q3"] . "</li>";
echo "<li> Option selected for question 4: " . $_GET["Q4"] . "</li>"; 
echo "<li> Option selected for question 5: " . $_GET["Q5"] . "</li>";
echo "</ul>";
?>