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
<h1>Training Plan for 21Km in 12 Weeks (Confirmed)</h1></br>
<center><div id="placeholder" style="width:600px;height:300px"></div></center>
</br><p>This the graph of your distance, each point match with one of your training and the distance you recorded during this training.</p>
</br><p>This is days in x-axis and kilometers in y-axis.</p>
</br><p id="hoverdata">Mouse hovers at
(<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>


<script type="text/javascript">
$(function () {
var weight = [
[1, 4
], 
[2, 2.5
], 
[3, 0
], 
[4, 7
], 
[5, 0
], 
[6, 8
], 
[7, 5
], 
[8, 4
], 
[9, 1.5
], 
[10, 4
], 
[11, 7
], 
[12, 0
], 
[13, 10
], 
[14, 6
], 
[15, 4
], 
[16, 2.5
], 
[17, 7
], 
[18, 5
], 
[19, 0
], 
[20, 11
], 
[21, 5
], 
[22, 4
], 
[23, 2
], 
[24, 0
], 
[25, 7
], 
[26, 0
], 
[27, 11
], 
[28, 5
], 
[29, 4
], 
[30, 2.5
], 
[31, 8
], 
[32, 5
], 
[33, 0
], 
[34, 12
], 
[35, 7
], 
[36, 4
], 
[37, 2.5
], 
[38, 8
], 
[39, 7
], 
[40, 0
], 
[41, 13
], 
[42, 7
], 
[43, 4
], 
[44, 3
], 
[45, 8
], 
[46, 7
], 
[47, 0
], 
[48, 15
], 
[49, 7
], 
[50, 4
], 
[51, 2.5
], 
[52, 10
], 
[53, 5
], 
[54, 0
], 
[55, 16
], 
[56, 7
], 
[57, 4
], 
[58, 3.5
], 
[59, 7
], 
[60, 7
], 
[61, 0
], 
[62, 17
], 
[63, 0
], 
[64, 4
], 
[65, 3
], 
[66, 8
], 
[67, 5
], 
[68, 0
], 
[69, 19
], 
[70, 5
], 
[71, 4
], 
[72, 3.5
], 
[73, 0
], 
[74, 5
], 
[75, 0
], 
[76, 8
], 
[77, 5
], 
[78, 0
], 
[79, 7
], 
[80, 2.5
], 
[81, 3.5
], 
[82, 0
], 
[83, 0
], 
[84, 21.1], 
];
var weighty = [
[1, 2
], 
[2, 5
], 
[3, 6
], 
[4, 7
], 
[5, 4
], 
[6, 9], 
];
var weight2 = weight;
var nbr_valeur = weight.length;
for (i = 0; i < nbr_valeur; i++)
{
var jour = Math.floor(weight[i][0] / 100);
var mois = weight[i][0] % 100;
weight2[i][0] = mois + (jour / 30);}
var plot = $.plot($("#placeholder"),
[ { data: weight2, label: "21km"}, { data: weighty, label: "You" }], {
series: {
lines: { show: true },
points: { show: true }},
grid: { hoverable: true, clickable: true },
yaxis: { min: -1, max: 22 }});
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
<?php echo "<p><a href='txt_to_html_temperature.php?login=vmb '>Temperature Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_weight.php?login=vmb '>Weight Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_heart.php?login=vmb '>Heart Rate Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_vma.php?login=vmb '>VMA Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_distance.php?login=vmb '>Distance Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_speed.php?login=vmb '>Speed Graph</a></p>"; ?>
<?php echo "<p><a href='txt_to_html_time.php?login=vmb '>Time Graph</a></p>"; ?>
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
