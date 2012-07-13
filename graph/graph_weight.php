<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../style.css" />
<title>So Innov - Research & Innovation Project</title>
<title>So Innov - Research & Innovation Project</title>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="../excanvas.min.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="jquery.js"></script>
<script language="javascript" type="text/javascript" src="jquery.flot.js"></script>
</head>

<body>
<div id="bloc_page">
<header>
<div id="titre_principal">
<h1><li><a href="../index.html">Running App'</a></li></h1>
</div>
</header>
<div id="banniere_image">
<div id="banniere_description">
Improve yourself with Auto-Adaptive System !
<a href="#" class="bouton_rouge"></a>
</div></div>
<section>
<article>
<?php
$login = $_GET['login'];
?>
<h1>Weight Graph</h1>
<div id="placeholder" style="width:600px;height:300px"></div>
<p>lolilol</p>
<p id="hoverdata">Mouse hovers at
(<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>

<script type="text/javascript">

$(function () {

var weight = [
[1, 12], 
[2, 23], 
[3, 24], 
];

var plot = $.plot($("#placeholder"),
[ { data: weight, label: "weight"}], {
series: {
lines: { show: true },
points: { show: true }
},
grid: { hoverable: true, clickable: true },
yaxis: { min: -1.2, max: 50 }
});
function showTooltip(x, y, contents) {
$('<div id="tooltip">' + contents + '</div>').css( {
position: 'absolute',
display: 'none',
top: y + 5,
left: x + 5,
border: '1px solid #fdd',
padding: '2px',
'background-color': '#fee',
opacity: 0.80
}).appendTo("body").fadeIn(200);
}
var previousPoint = null;
$("#placeholder").bind("plothover", function (event, pos, item) {
$("#x").text(pos.x.toFixed(2));
$("#y").text(pos.y.toFixed(2));
if ($("#enableTooltip:checked").length > 0) {
if (item) {
if (previousPoint != item.dataIndex) {
previousPoint = item.dataIndex;
$("#tooltip").remove();
var x = item.datapoint[0].toFixed(2),
y = item.datapoint[1].toFixed(2);
showTooltip(item.pageX, item.pageY,
item.series.label + " of " + x + " = " + y);
}}
else {
$("#tooltip").remove();
previousPoint = null; 
}
}
});
$("#placeholder").bind("plotclick", function (event, pos, item) {
if (item) {
$("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
plot.highlight(item.series, item.datapoint);
}
});
});
</script>


</article>
<aside>
<h1>Graphs</h1>
<?php echo "<p><a href='lol.php?login=".$login." '>Temperature</a></p>"; ?>
<?php echo "<p><a href='graph_weight.php?login=".$login." '>Weight</a></p>"; ?>
<?php echo "<p><a href='lol.php?login=".$login." '>Cardiac Frequence</a></p>"; ?>
<?php echo "<p><a href='lol.php?login=".$login." '>VMA/Week</a></p>"; ?>
<?php echo "<p><a href='lol.php?login=".$login." '>Kilometers/Week</a></p>"; ?>
<?php echo "<p><a href='lol.php?login=".$login." '>Speed (km/h)</a></p>"; ?>
<?php echo "<p><a href='lol.php?login=".$login." '>Duration of running</a></p>"; ?>
</aside>
</section>
<footer>
<div id="tweet">
<h1>Inscription</h1>
<li><a href="../inscription.php">Sign up</a></li>
<p></p>
</div>
<div id="mes_amis">
<h1>Links</h1>
<ul>
<li><a href="#">EPITA</a></li>
<li><a href="#">EPITA Masters</a></li>
<li><a href="#">So Innov</a></li>
</ul></div></footer></div>
</body></html>

