<? 
$q1 = $q2 = $q3 = $q4 = $q5 = $q6 = $q7 = "";
$q1Error = $q2Error = $q3Error = $q4Error = $q5Error = $q6Error = $q7Error = "";
$validate = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["q1"])) {
    $q1Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q1 = test_input($_POST["q1"]);
    $validate = true;
  }
  if (empty($_POST["q2"])) {
    $q2Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q2 = test_input($_POST["q2"]);
    $validate = true;
  }
  if (empty($_POST["q3"])) {
    $q3Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q3 = test_input($_POST["q3"]);
    $validate = true;
  }
  if (empty($_POST["q4"])) {
    $q4Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q4 = test_input($_POST["q4"]);
    $validate = true;
  }
  if (empty($_POST["q5"])) {
    $q5Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q5 = test_input($_POST["q5"]);
    $validate = true;
  }
  if (empty($_POST["q6"])) {
    $q6Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q6 = test_input($_POST["q6"]);
    $validate = true;
  }
  if (empty($_POST["q7"])) {
    $q7Error = "Dit veld is niet ingevuld";
    $validate = false;
  } else {
    $q7 = test_input($_POST["q7"]);
    $validate = true;
  }
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>MadLibs</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header><p class="title">Mad Libs</p></header>
	<div class="page">
		<nav>
			<ul>
				<li><a href="Mad-Libs.php">Er heerst paniek...</a></li>
				<li><a href="Mad-Libs2.php">Onkunde</a></li>
			</ul>
		</nav>
			<div class="inputForm">
			<?php
		if ($validate == false) { ?>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<br>
					<p>Welk dier zou jij nooit als huisdier willen hebben?</p>
						<input type="text" name="q1"> 
						<span class="error">* <?php echo $q1Error;?></span><br>
					<p>Wie is de belangrijkste persoon in je leven?</p>
						<input type="text" name="q2"> 
						<span class="error">* <?php echo $q2Error;?></span><br>
					<p>In welk land zou je graag willen wonen?</p>
						<input type="text" name="q3">
						<span class="error">* <?php echo $q3Error;?></span><br>
					<p>Wat doe je als je je verveeld?</p>
						<input type="text" name="q4">
						<span class="error">* <?php echo $q4Error;?></span><br>
					<p>Met welk speelgoed speelde je als kind het meest?</p>
						<input type="text" name="q5">
						<span class="error">* <?php echo $q5Error;?></span><br>
					<p>Bij welke docent spijbel je het liefst</p>
						<input type="text" name="q6">
						<span class="error">* <?php echo $q6Error;?></span><br>
					<p>Als je 100.000,- euro had, wat zou je dan kopen?</p>
						<input type="text" name="q7"> 
						<span class="error">* <?php echo $q7Error;?></span><br>
					<p>Wat is je favorite bezigheid?</p>
						<input type="text" name="q8">
						<span class="error">* <?php echo $q8Error;?></span><br>
					<div class="submit"><input type="submit" id="submit"></div>
				</form>

				<?php } 
	?>
		<?php
			if ($validate == true) {
				include 'verhaal.php';
				}
		 ?>
			</div>
		<footer>
			<p>© jonathan van loo | 99052897 | 2019</p>
		</footer>
	</div>
</body>
</html>