<?php
echo "<html><body><br><h3> Results: </h3><ul>";
echo "<br><li><b> Question 1: </b>" . $_POST["Q1"] . "</li><br> <b> Your Answer: </b>" . $_POST["A1"] . "<br> <b> Correct Answer: Topeka </b>" . "<br>";
echo "<br><li><b> Question 2: </b>" . $_POST["Q2"] . "</li><br> <b> Your Answer: </b>" . $_POST["A2"] . "<br> <b> Correct Answer: Pacific Ocean </b>" . "<br>";
echo "<br><li><b> Question 3: </b>" . $_POST["Q3"] . "</li><br> <b> Your Answer: </b>" . $_POST["A3"] . "<br> <b> Correct Answer: 61 </b>" . "<br>";
echo "<br><li><b> Question 4: </b>" . $_POST["Q4"] . "</li><br> <b> Your Answer: </b>" . $_POST["A4"] . "<br> <b> Correct Answer: 13 </b>" . "<br>";
echo "<br><li><b> Question 5: </b>" . $_POST["Q5"] . "</li><br> <b> Your Answer: </b>" . $_POST["A5"] . "<br> <b> Correct Answer: 2472 </b>" . "<br>";
echo "</ul>";
$a1 = $_POST["A1"];
$a2 = $_POST["A2"];
$a3 = $_POST["A3"];
$a4 = $_POST["A4"];
$a5 = $_POST["A5"];
$cor_count = 0;
if($a1=="Option 3") {
    $cor_count++;
}
if($a2=="Option 1"){
    $cor_count++;
}
if($a3=="Option 2"){
    $cor_count++;
}
if($a4=="Option 3"){
    $cor_count++;
}
if($a5=="Option 4"){
    $cor_count++;
}
$score = $cor_count*100/5;
echo "<p> <b> The total score is: </b> $cor_count/5 </p>";
echo "<p> <b> The Score is: </b> $score  % </p>";
echo "</body></html>";
?>