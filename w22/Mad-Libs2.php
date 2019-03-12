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
					<p>Wat zou je graag willen kunnen?</p>
						<input type="text" name="q1">
						<span class="error">* <?php echo $q1Error;?></span><br>
					<p>Met welke persoon kun je goed opschieten?</p>
						<input type="text" name="q2">
						<span class="error">* <?php echo $q2Error;?></span><br>
					<p>Wat is je favorite getal?</p>
						<input type="text" name="q3">
						<span class="error">* <?php echo $q3Error;?></span><br>
					<p>Wat heb je altijd bij als je op vakantie gaat?</p>
						<input type="text" name="q4">
						<span class="error">* <?php echo $q4Error;?></span><br>
					<p>Wat is je beste persoonlijke eigenschap?</p>
						<input type="text" name="q5">
						<span class="error">* <?php echo $q5Error;?></span><br>
					<p>Wat is je slechtste persoonlijke eigenschap</p>
						<input type="text" name="q6">
						<span class="error">* <?php echo $q6Error;?></span><br>
					<p>Wat is het ergste dat je kan overkomen?</p>
						<input type="text" name="q7">
						<span class="error">* <?php echo $q7Error;?></span><br>
					<div class="submit"><input type="submit"></div>
				</form>

				<?php } 
	?>
		<?php
			if ($validate == true) {
				include 'onkunde.php';
				}
		 ?>
			</div>
			
		<footer>
			<p>© jonathan van loo | 99052897 | 2019</p>
		</footer>
	</div>
</body>
</html>