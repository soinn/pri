<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="../style.css" />
<link href="media-queries.css" rel="stylesheet" type="text/css"><title>So Innov - Research & Innovation Project</title>
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
<?php
$login = $_GET['login'];
?>
<div id="graph_android">
<ul>
<li><?php echo "<a href='txt_to_html_temperature.php?login=admin '>Temperature</a>"; ?></li>
<li><?php echo "<a href='txt_to_html_heart.php?login=admin ' >Heart Rate</a>"; ?></li>
<li><?php echo "<a href='txt_to_html_weight.php?login=admin ' >Weight</a>"; ?></li>
<li><?php echo "<a href='txt_to_html_vma.php?login=admin '>vVO2MAX</a>"; ?></li>
<li><?php echo "<a href='txt_to_html_distance.php?login=admin '>Distance</a>"; ?></li>
<li><?php echo "<a href='txt_to_html_speed.php?login=admin ' class='active' >Speed</a>"; ?></li>
<li><?php echo "<a href='txt_to_html_time.php?login=admin '>Time</a>"; ?></li>
</ul></div>
<article>
<h1>Speed Graph</h1></br>
<center><div id="placeholder" style="width:600px;height:300px"></div></center>
</br><p>This the graph of your speed, each point match with one of your training and the speed you recorded during this training.</p>
</br><p>This is time in x-axis and km/h in y-axis.</p>
</br><p id="hoverdata">Mouse hovers at
(<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>


<script type="text/javascript">
$(function () {
var weight = [
