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
<h1>Weight Graph</h1></br>
<center><div id="placeholder" style="width:600px;height:300px"></div></center>
</br><p>This the graph of your weight, each point match with one of your training and the weight you recorded during this training.</p>
</br><p>This is time in x-axis and kilograms in y-axis.</p>
</br><p id="hoverdata">Mouse hovers at
(<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>


<script type="text/javascript">
$(function () {
var weight = [
[28.31,  20819], 
[28.88,  20824], 
[30.13,  20829], 
[30.88,  20834], 
[31.50,  20839], 
[31.88,  20844], 
[31.88,  20849], 
[31.88,  20854], 
[31.88,  20859], 
[31.88,  20904], 
[32.38,  20909], 
[32.69,  20914], 
[32.81,  20919], 
[33.00,  20924], 
[33.19,  20929], 
[33.25,  20934], 
[33.31,  20939], 
[33.44,  20944], 
[33.50,  20949], 
[33.56,  20954], 
[33.56,  20959], 
[33.56,  21004], 
[33.56,  21009], 
[33.56,  21014], 
[33.56,  21019], 
[33.56,  21024], 
[33.56,  21029], 
[33.56,  21034], 
[33.56,  21039], 
[33.56,  21044], 
[33.56,  21049], 
[33.56,  21054], 
[33.31,  21059], 
[32.88,  21104], 
[32.63,  21109], 
[32.31,  21114], 
[31.88,  21119], 
[31.88,  21124], 
[31.75,  21129], 
[31.50,  21134], 
[31.25,  21139], 
[31.13,  21144], 
];
var weight2 = weight;
var nbr_valeur = weight.length;
for (i = 0; i < nbr_valeur; i++)
{
var jour = Math.floor(weight[i][0] / 100);
var mois = weight[i][0] % 100;
weight2[i][0] = mois + (jour / 30);}
var plot = $.plot($("#placeholder"),
[ { data: weight2, label: "weight"}], {
series: {
lines: { show: true },
points: { show: true }},
grid: { hoverable: true, clickable: true },
yaxis: { min: -1, max: 150 }});
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
