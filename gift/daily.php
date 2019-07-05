<?php require "../core.php" ?>
<?php
$cookie = explode(":", explode(";", ($_COOKIE["gift"] ?? "0:0:0:0;0:0:0:0;0:0:0:0;0:0:0:0"))[0]); // visits, expepoch, redeemGifts, maxVisits - [0] means daily
$visits = $cookie[0]; $expepoch = $cookie[1]; $redeemGifts = $cookie[2]; $maxVisits = $cookie[3]
$nowepoch = new DateTime();
$nowepoch = $nowepoch->format("U");
if ($nowepoch > $expepoch) {;
	$expepoch = DateTime("12:00 am");
	$expepoch->modify("+1 day");
	$expepoch = $expepoch->format("U");
	$visits++;
};
$exp = new DateTime("9999-12-31 23:59:59.999999");
$exp = $exp->format("U");
while($visits >= $maxVisits) {
	$visits-= $maxVisits;
	$redeemGifts++;
	$maxVisits*=1.1;
}

?>
<?php include "../styles.php"; ?>
<a href="/gift/"><button onclick="void(0);" /></a>
<div id="bar" class="ealign acenter"><div class="ealign aleft" style="height: 100%; width: <?= ($visits/$maxVisits) * 100 ?>%; color: green;" /> </div>
