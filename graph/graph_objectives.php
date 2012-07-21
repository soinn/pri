<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../style.css" />
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
<h1>Training Plan for 5Km in 8 Weeks (Rookie)</h1></br>
<center><div id="placeholder" style="width:600px;height:300px"></div></center>
</br><p>This the graph of your distance, each point match with one of your training and the distance you recorded during this training.</p>
</br><p>This is days in x-axis and kilometers in y-axis.</p>
</br><p id="hoverdata">Mouse hovers at
(<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>


<script type="text/javascript">
$(function () {
var weight = [
[1, 0
], 
[2, 2.5
], 
[3, 1
], 
[4, 2.5
], 
[5, 0
], 
[6, 3.5
], 
[7, 2.5
], 
[8, 0
], 
[9, 3.5
], 
[10, 1
], 
[11, 2.5
], 
[12, 0
], 
[13, 4
], 
[14, 2.5
], 
[15, 0
], 
[16, 3.5
], 
[17, 1
], 
[18, 2.5
], 
[19, 0
], 
[20, 4
], 
[21, 2.5
], 
[22, 0
], 
[23, 4
], 
[24, 1
], 
[25, 2.5
], 
[26, 0
], 
[27, 5
], 
[28, 2
], 
[29, 0
], 
[30, 5
], 
[31, 1
], 
[32, 2.5
], 
[33, 0
], 
[34, 6
], 
[35, 2
], 
[36, 0
], 
[37, 5.75
], 
[38, 1
], 
[39, 2.5
], 
[40, 0
], 
[41, 7
], 
[42, 2
], 
[43, 0
], 
[44, 5
], 
[45, 1
], 
[46, 2.5
], 
[47, 0
], 
[48, 7
], 
[49, 2
], 
[50, 0
], 
[51, 5
], 
[52, 1
], 
[53, 3.5
], 
[54, 0
], 
[55, 0
], 
[56, 5], 
];
var weighty = [
[1, 0], 
[2, 42], 
[3, 42], 
[4, 42], 
[5, 00], 
];
var weight2 = weight;
var nbr_valeur = weight.length;
for (i = 0; i < nbr_valeur; i++)
{
var jour = Math.floor(weight[i][0] / 100);
var mois = weight[i][0] % 100;
weight2[i][0] = mois + (jour / 30);}
var plot = $.plot($("#placeholder"),
[ { data: weight2, label: "5km"}, { data: weighty, label: "You" }], {
series: {
lines: { show: true },
points: { show: true }},
grid: { hoverable: true, clickable: true },
yaxis: { min: -1, max: 10 }});
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
previousPoint = null;}}
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
<h1><center>Graphs & other data</center></h1>
<?php echo "<p><a href='txt_to_html_temperature.php?login=admin '>Temperature Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_weight.php?login=admin '>Weight Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_heart.php?login=admin '>Heart Rate Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_vma.php?login=admin '>VMA Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_distance.php?login=admin '>Distance Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_speed.php?login=admin '>Speed Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_time.php?login=admin '>Time Graph</a></p>"; ?>
</aside>
</section>
<footer><center>
<div id="mes_amis">
<h1>Inscription</h1><ul>
<li><a href="../inscription.php">Sign up</a></li>
<li><a href="inscription.php">Contact us</a></li>
<li><a href="http://en.wikipedia.org/wiki/Complex_adaptive_system">Auto Adaptive Systems</a></li>
</ul><p></p>
</div>
<div id="mes_amis">
<h1>Links</h1>
<ul>
<li><a href="http://www.epita.fr/">EPITA</a></li>
<li><a href="http://www.epita.fr/masters/">EPITA Masters</a></li>
<li><a href="so-innov.fr">So Innov</a></li>
</ul></div></footer></div></center>
</body></html>
