<html>
<?php $login = $_GET['login']; ?>
<?php echo "<META http-equiv='refresh' content='2;URL=graph_objectives.php'>";?>
<p>Génération du graphe</p>
<?php 

unlink ("graph_objectives.php");

$fp = fopen("graph_objectives.php","w+");

fputs($fp, "<!DOCTYPE html>\r\n<html>\r\n<head>\n");
fputs($fp, "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n<link rel=\"stylesheet\" href=\"../style.css\" />\n");
fputs($fp, "<title>So Innov - Research & Innovation Project</title>\n");
fputs($fp, "<!--[if lte IE 8]><script language=\"javascript\" type=\"text/javascript\" src=\"../excanvas.min.js\"></script><![endif]-->\n");
fputs($fp, "<script language=\"javascript\" type=\"text/javascript\" src=\"jquery.js\"></script>\n");
fputs($fp, "<script language=\"javascript\" type=\"text/javascript\" src=\"jquery.flot.js\"></script>\n");
fputs($fp, "</head>\n");


fputs($fp, "<body>\n");
fputs($fp, "<div id=\"bloc_page\">\n");
fputs($fp, "<header>\n");
fputs($fp, "<div id=\"titre_principal\">\n");
fputs($fp, "<h1><li><a href=\"../index.html\">Running App'</a></li></h1>\n");
fputs($fp, "</div>\n");
fputs($fp, "</header>\n");
fputs($fp, "<div id=\"banniere_image\">\n");
fputs($fp, "<div id=\"banniere_description\">\n");
fputs($fp, "Improve yourself with Auto-Adaptive System !\n");
fputs($fp, "<a href=\"#\" class=\"bouton_rouge\"></a>\n");
fputs($fp, "</div></div>\n");
fputs($fp, "<section>\n");
fputs($fp, "<article>\n");
fputs($fp, "<?php\n");
fputs($fp, "?>\n");
fputs($fp, "<h1>Training Plan for 5Km in 8 Weeks (Confirmed)</h1></br>\n");
fputs($fp, "<center><div id=\"placeholder\" style=\"width:600px;height:300px\"></div></center>\n");
fputs($fp, "</br><p>This the graph of your distance, each point match with one of your training and the distance you recorded during this training.</p>\n");
fputs($fp, "</br><p>This is days in x-axis and kilometers in y-axis.</p>\n");
fputs($fp, "</br><p id=\"hoverdata\">Mouse hovers at\n");
fputs($fp, "(<span id=\"x\">0</span>, <span id=\"y\">0</span>). <span id=\"clickdata\"></span></p>\n");
fputs($fp, "\n");
fputs($fp, "\n");

fputs($fp, "<script type=\"text/javascript\">\n");
fputs($fp, "$(function () {\n");
fputs($fp, "var weight = [\n");

$txt = "../objectives/5kmconf.txt";
$fd =  fopen($txt,"r");

while(!feof($fd)) 
{
	$ligne = fgets($fd,255);
	
	if ($ligne == "")
	{
	}
	else
	{
	$ligne = substr($ligne,0,strlen($ligne));
	$data=explode(",", $ligne);

	$lol = "[".$data[0].", ".$data[1]."], ";

	fputs($fp, $lol);
	fputs($fp, "\n");
	}
		
}
fclose($fd);
fputs($fp, "];\n");

fputs($fp, "var weight2 = weight;\n");
fputs($fp, "var nbr_valeur = weight.length;\n");
fputs($fp, "for (i = 0; i < nbr_valeur; i++)\n");
fputs($fp, "{\n");
fputs($fp, "var jour = Math.floor(weight[i][0] / 100);\n");
fputs($fp, "var mois = weight[i][0] % 100;\n");
fputs($fp, "weight2[i][0] = mois + (jour / 30);}\n");


fputs($fp, "var plot = $.plot($(\"#placeholder\"),\n");
fputs($fp, "[ { data: weight2, label: \"distance\"}], {\n");
fputs($fp, "series: {\n");
fputs($fp, "lines: { show: true },\n");
fputs($fp, "points: { show: true }},\n");
fputs($fp, "grid: { hoverable: true, clickable: true },\n");
fputs($fp, "yaxis: { min: -1, max: 12 }});\n");
fputs($fp, "function showTooltip(x, y, contents) {\n");
fputs($fp, "$('<div id=\"tooltip\">' + contents + '</div>').css( {\n");
fputs($fp, "position: 'absolute',\n");
fputs($fp, "display: 'none',\n");
fputs($fp, "top: y + 5,\n");
fputs($fp, "left: x + 5,\n");
fputs($fp, "border: '1px solid #fdd',\n");
fputs($fp, "padding: '2px',\n");
fputs($fp, "'background-color': '#fee',\n");
fputs($fp, "opacity: 0.80\n");
fputs($fp, "}).appendTo(\"body\").fadeIn(200);\n");
fputs($fp, "}\n");
fputs($fp, "var previousPoint = null;\n");
fputs($fp, "$(\"#placeholder\").bind(\"plothover\", function (event, pos, item) {\n");
fputs($fp, "$(\"#x\").text(pos.x.toFixed(2));\n");
fputs($fp, "$(\"#y\").text(pos.y.toFixed(2));\n");
fputs($fp, "if ($(\"#enableTooltip:checked\").length > 0) {\n");
fputs($fp, "if (item) {\n");
fputs($fp, "if (previousPoint != item.dataIndex) {\n");
fputs($fp, "previousPoint = item.dataIndex;\n");
fputs($fp, "$(\"#tooltip\").remove();\n");
fputs($fp, "var x = item.datapoint[0].toFixed(2),\n");
fputs($fp, "y = item.datapoint[1].toFixed(2);\n");
fputs($fp, "showTooltip(item.pageX, item.pageY,\n");
fputs($fp, "item.series.label + \" of \" + x + \" = \" + y);\n");
fputs($fp, "}}\n");
fputs($fp, "else {\n");
fputs($fp, "$(\"#tooltip\").remove();\n");

fputs($fp, "previousPoint = null;}}\n");
fputs($fp, "});\n");
fputs($fp, "$(\"#placeholder\").bind(\"plotclick\", function (event, pos, item) {\n");
fputs($fp, "if (item) {\n");
fputs($fp, "$(\"#clickdata\").text(\"You clicked point \" + item.dataIndex + \" in \" + item.series.label + \".\");\n");
fputs($fp, "plot.highlight(item.series, item.datapoint);\n");
fputs($fp, "}\n");
fputs($fp, "});\n");
fputs($fp, "});\n");
fputs($fp, "</script>\n");

fputs($fp, "</article>\n");
fputs($fp, "<aside>\n");
fputs($fp, "<h1><center>Graphs & other data</center></h1>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_temperature.php?login=$login '>Temperature Graph</a></p>\"; ?>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_weight.php?login=$login '>Weight Graph</a></p>\"; ?>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_heart.php?login=$login '>Heart Rqapl
ate Graph</a></p>\"; ?>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_vma.php?login=$login '>VMA Graph</a></p>\"; ?>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_distance.php?login=$login '>Distance Graph</a></p>\"; ?>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_speed.php?login=$login '>Speed Graph</a></p>\"; ?>\n");
fputs($fp, "<?php echo \"<p><a href='txt_to_html_time.php?login=$login '>Time Graph</a></p>\"; ?>\n");
fputs($fp, "</aside>\n");
fputs($fp, "</section>\n");
fputs($fp, "<footer><center>\n");
fputs($fp, "<div id=\"mes_amis\">\n");
fputs($fp, "<h1>Inscription</h1><ul>\n");
fputs($fp, "<li><a href=\"../inscription.php\">Sign up</a></li>\n");
fputs($fp, "<li><a href=\"inscription.php\">Contact us</a></li>\n");
fputs($fp, "<li><a href=\"http://en.wikipedia.org/wiki/Complex_adaptive_system\">Auto Adaptive Systems</a></li>\n");
fputs($fp, "</ul><p></p>\n");
fputs($fp, "</div>\n");
fputs($fp, "<div id=\"mes_amis\">\n");
fputs($fp, "<h1>Links</h1>\n");
fputs($fp, "<ul>\n");
fputs($fp, "<li><a href=\"http://www.epita.fr/\">EPITA</a></li>\n");
fputs($fp, "<li><a href=\"http://www.epita.fr/masters/\">EPITA Masters</a></li>\n");
fputs($fp, "<li><a href=\"so-innov.fr\">So Innov</a></li>\n");
fputs($fp, "</ul></div></footer></div></center>\n");
fputs($fp, "</body></html>\n");

fclose($fp);

?>
</html>