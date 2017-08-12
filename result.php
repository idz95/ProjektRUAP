<?php include("header.php");

session_start();
if (!isset($_SESSION["mean"])) {
	header("Location: ../index.php");
	exit();
}
// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

echo "<h3>Predicted {$_SESSION['mean']} shares with standard deviation of {$_SESSION['deviation']}.</h3>";

include("footer.php"); ?>
