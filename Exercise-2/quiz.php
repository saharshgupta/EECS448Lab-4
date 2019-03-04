<?php
echo "<html><body><ul>";
echo "<b> Question: </b>" . $_GET["Q1"] . "<br> <b> Answer Selected: </b>" . $_GET["A1"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<b> Question: </b>" . $_GET["Q2"] . "<br> <b> Answer Selected: </b>" . $_GET["A2"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<b> Question: </b>" . $_GET["Q3"] . "<br> <b> Answer Selected: </b>" . $_GET["A3"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<b> Question: </b>" . $_GET["Q4"] . "<br> <b> Answer Selected: </b>" . $_GET["A4"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<b> Question: </b>" . $_GET["Q5"] . "<br> <b> Answer Selected: </b>" . $_GET["A5"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "</ul>";
$a1 = $_GET["A1"];
$a2 = $_GET["A2"];
$a3 = $_GET["A3"];
$a4 = $_GET["A4"];
$a5 = $_GET["A5"];
$cor_count = 0;
if($a1=="Option 1") {
    $cor_count++;
}
if($a2=="Option 1"){
    $cor_count++;
}
if($a3=="Option 1"){
    $cor_count++;
}
if($a4=="Option 1"){
    $cor_count++;
}
if($a5=="Option 1"){
    $cor_count++;
}
echo "<p> <b> The total score is: </b> $cor_count/5 </p>";
echo "</body></html>";
?>