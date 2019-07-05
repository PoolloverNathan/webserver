<?php $headerHeight = $headerHeight ?? (1/8); ?>
<style>
/* Header and body */
header {
	height: <?= $headerHeight ?>%;
	color:rgba(37, 7, 39, <?php if ($fixedHeader = 2) {print "0.80";} else {print ""}); ?>
	width:100%;
	position:<?php if ($fixedHeader > 0) {print "fixed";} else {print "absolute";} ?>;
	left:0px;
	top:0px;
}
header button {
	color:rgba(59,32,60,1)
}
body {
	height:<?= 100 - $headerHeight ?>%;
	color: rgba(65, 34, 67, 1);
	width: 100%;
}
html {height: 100%; width: 100%; left: 0px; top: 0px}
</style>

<style> /* Alignments */
.ealign.acenter {
	margin-left: auto;
	margin-right:auto;
}
.talign.acenter {
	text-align: center;
}
img.ealign.acenter {
	display: block;
}
:root, :not(:root) {
	overflow: auto;
}
</style>