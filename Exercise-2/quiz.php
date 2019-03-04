<?php
echo "<ul>";
echo "Question: " . $_GET["Q1"] . "<br> Answer Selected: " . $_GET["A1"] . "<br> Correct Answer: Option 1" . "<br>";
echo "Question: " . $_GET["Q2"] . "<br> Answer Selected: " . $_GET["A2"] . "<br> Correct Answer: Option 1" . "<br>";
echo "Question: " . $_GET["Q3"] . "<br> Answer Selected: " . $_GET["A3"] . "<br> Correct Answer: Option 1" . "<br>";
echo "Question: " . $_GET["Q4"] . "<br> Answer Selected: " . $_GET["A4"] . "<br> Correct Answer: Option 1" . "<br>";
echo "Question: " . $_GET["Q5"] . "<br> Answer Selected: " . $_GET["A5"] . "<br> Correct Answer: Option 1" . "<br>";
echo "</ul>";
$a1 = $_REQUEST("A1");
$a2 = $_REQUEST("A2");
$a3 = $_REQUEST("A3");
$a4 = $_REQUEST("A4");
$a5 = $_REQUEST("A5");
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
echo "<p> The total score is: " . ($cor_count/5)*100;
?>