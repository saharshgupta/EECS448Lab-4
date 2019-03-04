<?php
echo "<html><body><br><h3> Results: </h3><br><ul>";
echo "<br><li><b> Question 1: </b>" . $_GET["Q1"] . "</li><br> <b> Your Answer: </b>" . $_GET["A1"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<br><li><b> Question 2: </b>" . $_GET["Q2"] . "</li><br> <b> Your Answer: </b>" . $_GET["A2"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<br><li><b> Question 3: </b>" . $_GET["Q3"] . "</li><br> <b> Your Answer: </b>" . $_GET["A3"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<br><li><b> Question 4: </b>" . $_GET["Q4"] . "</li><br> <b> Your Answer: </b>" . $_GET["A4"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
echo "<br><li><b> Question 5: </b>" . $_GET["Q5"] . "</li><br> <b> Your Answer: </b>" . $_GET["A5"] . "<br> <b> Correct Answer: Option 1 </b>" . "<br>";
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
$score = $cor_count*100/5;
echo "<p> <b> The total score is: </b> $cor_count/5 </p>";
echo "<p> <b> The Score is: </b> $score  % </p>";
echo "</body></html>";
?>