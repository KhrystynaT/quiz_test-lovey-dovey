<!DOCTYPE html>
<html>
<head>
<title>Love Test</title>
</head>
<body>
<h1>Welcome to the Love Test!</h1>
<p>Select the correct answer for each question and get a reward.</p>
<p>Your reward is @name in @country.</p>
<form method="post" action="">
<?php
$questions = array(
"What is my favorite part of your body?",
"What made me fall in love with you?",
"How I love to be called?",
"What I am scared of?",
"What is my favorite surrah?",
);

$answers = array(
array("a" => "eyes", "b" => "hands", "c" => "lips", "d" => "neck"),
array("a" => "linkedin message", "b" => "instagram reel", "c" => "promised a job", "d" => "after the nikah"),
array("a" => "ruhi", "b" => "khrystyna", "c" => "my wife", "d" => "hubiya"),
array("a" => "jealousy", "b" => "anger", "c" => "losing you", "d" => "all of the above"),
array("a" => "al-Fatiha", "b" => "al-Kahf", "c" => "Luqman", "d" => "al-Fajr")
);

$correct_answers = array("a", "b", "d", "d", "c");

$score = 0;

for ($i = 0; $i < count($questions); $i++) {
echo "<p>".$questions[$i]."</p>";
echo "<input type='radio' name='q".$i."' value='a'> a) ".$answers[$i]["a"]."<br>";
echo "<input type='radio' name='q".$i."' value='b'> b) ".$answers[$i]["b"]."<br>";
echo "<input type='radio' name='q".$i."' value='c'> c) ".$answers[$i]["c"]."<br>";
echo "<input type='radio' name='q".$i."' value='d'> d) ".$answers[$i]["d"]."<br>";
}

if ($_POST) {
for ($i = 0; $i < count($questions); $i++) {
$user_answer = $_POST["q".$i];
if ($user_answer == $correct_answers[$i]) {
$score++;
}
}
echo "<p>Congratulations, you finished the quiz!</p>";
echo "<p>Your score is: ".$score." out of ".count($questions)."</p>";
if ($score == count($questions)) {
echo "<p>Congratulations! You answered all questions correctly! Enjoy your reward and have a great time in @country with @name!</p>";
} else {
echo "<p>Unfortunately, you didn't answer all questions correctly. Spend more time with your wife to know her better.</p>";
}
}
?>
<input type="submit" value="Finish the test">
</form>

</body>
</html>

