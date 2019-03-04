<?php
echo "<html><body><br><h3> Results: </h3><ul>";
echo "<li><b> Question 1: </b>" . $_POST["Q1"] . "</li><b> Your Answer: </b>" . $_POST["A1"] . "<br> <b> Correct Answer: Topeka </b>" . "<br>";
echo "<br><li><b> Question 2: </b>" . $_POST["Q2"] . "</li><b> Your Answer: </b>" . $_POST["A2"] . "<br> <b> Correct Answer: Pacific Ocean </b>" . "<br>";
echo "<br><li><b> Question 3: </b>" . $_POST["Q3"] . "</li><b> Your Answer: </b>" . $_POST["A3"] . "<br> <b> Correct Answer: 61 </b>" . "<br>";
echo "<br><li><b> Question 4: </b>" . $_POST["Q4"] . "</li><b> Your Answer: </b>" . $_POST["A4"] . "<br> <b> Correct Answer: 13 </b>" . "<br>";
echo "<br><li><b> Question 5: </b>" . $_POST["Q5"] . "</li><b> Your Answer: </b>" . $_POST["A5"] . "<br> <b> Correct Answer: 2472 </b>" . "<br>";
echo "</ul>";
$a1 = $_POST["A1"];
$a2 = $_POST["A2"];
$a3 = $_POST["A3"];
$a4 = $_POST["A4"];
$a5 = $_POST["A5"];
$cor_count = 0;
if($a1=="Topeka") {
    $cor_count++;
}
if($a2=="Pacific Ocean"){
    $cor_count++;
}
if($a3=="61"){
    $cor_count++;
}
if($a4=="13"){
    $cor_count++;
}
if($a5=="2472"){
    $cor_count++;
}
$score = $cor_count*100/5;
echo "<p> <b> Number of correct answers/5: </b> $cor_count/5 </p>";
echo "<p> <b> The Score (%): </b> $score  % </p>";
echo "</body></html>";
?>