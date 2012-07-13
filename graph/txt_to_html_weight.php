
function txt_to_html_weight()
{
	var src  = "arnaud_weight.txt";
	var dest = "graph_weight.php";

	var fso, fin, fout;
	var data = new Array();

	var forReading   = 1;
	var forWriting   = 2;
	var forAppending = 8;

	fso  = new ActiveXObject( "Scripting.FileSystemObject" );
	fin  = fso.OpenTextFile( src, forReading );
	fout = fso.OpenTextFile( dest, forWriting, true );

	fout.WriteLine( htmlHeader() );

	fout.WriteLine( htmlbody() );

	fout.WriteLine( "<script type=\"text/javascript\">\r\n" );
	fout.WriteLine( "$(function () {\r\n" );
	fout.WriteLine( "var weight = [" );

	while( !fin.AtEndOfStream )
	{
	 try 
	 {
	  var line = fin.ReadLine();

	  if( line == "")
		continue;

		data = line.split( "," );
		fout.WriteLine( "[" + data[2] + ", " + data[1] + "], ");
	 }
	 catch( e )
	 {
	  WScript.Echo( "Error: " + e.description );
	 }
	}

	fout.WriteLine( "];\r\n" );
	fout.WriteLine( htmlscript() );
	fout.WriteLine( htmlFooter() );
	fin.Close();
	fout.Close();
	
	alert("FFFUUUU");
}
 

/*******************************
 HTML Header data
********************************/

function htmlHeader()
{
	var head = "<!DOCTYPE html>\r\n<html>\r\n<head>\r\n";
	head += "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">\r\n<link rel=\"stylesheet\" href=\"../style.css\" />\r\n"
	head += "<title>So Innov - Research & Innovation Project</title>\r\n";
	head += "<title>So Innov - Research & Innovation Project</title>\r\n";
	head += "<!--[if lte IE 8]><script language=\"javascript\" type=\"text/javascript\" src=\"../excanvas.min.js\"></script><![endif]-->\r\n";
	head += "<script language=\"javascript\" type=\"text/javascript\" src=\"jquery.js\"></script>\r\n";
	head += "<script language=\"javascript\" type=\"text/javascript\" src=\"jquery.flot.js\"></script>\r\n";
	head += "</head>\r\n"
 return( head );
}

/*******************************
 HTML body data
********************************/

function htmlbody()
{
	var body = "<body>\r\n";
	body += "<div id=\"bloc_page\">\r\n";
	body += "<header>\r\n";
	body += "<div id=\"titre_principal\">\r\n";
	body += "<h1><li><a href=\"../index.html\">Running App'</a></li></h1>\r\n";
	body += "</div>\r\n";
	body += "</header>\r\n";
	body += "<div id=\"banniere_image\">\r\n";
	body += "<div id=\"banniere_description\">\r\n";
	body += "Improve yourself with Auto-Adaptive System !\r\n";
	body += "<a href=\"#\" class=\"bouton_rouge\"></a>\r\n";
	body += "</div></div>\r\n";
	body += "<section>\r\n";
	body += "<article>\r\n";
	body += "<?php\r\n";
	body += "$login = $_GET['login'];\r\n";
	body += "?>\r\n";
	body += "<h1>Weight Graph</h1>\r\n";
	body += "<div id=\"placeholder\" style=\"width:600px;height:300px\"></div>\r\n";
	body += "<p>lolilol</p>\r\n";
	body += "<p id=\"hoverdata\">Mouse hovers at\r\n";
	body += "(<span id=\"x\">0</span>, <span id=\"y\">0</span>). <span id=\"clickdata\"></span></p>\r\n";

 return( body );
}

/*******************************
 HTML script data
********************************/

function htmlscript()
{					
	var script = "var plot = $.plot($(\"#placeholder\"),\r\n";
	script += "[ { data: weight, label: \"weight\"}], {\r\n";
	script += "series: {\r\n";
	script += "lines: { show: true },\r\n";
	script += "points: { show: true }\r\n";
	script += "},\r\n";
	script += "grid: { hoverable: true, clickable: true },\r\n";
	script += "yaxis: { min: -1.2, max: 50 }\r\n";
	script += "});\r\n";
	script += "function showTooltip(x, y, contents) {\r\n";
	script += "$('<div id=\"tooltip\">' + contents + '</div>').css( {\r\n";
	script += "position: 'absolute',\r\n";
	script += "display: 'none',\r\n";
	script += "top: y + 5,\r\n";
	script += "left: x + 5,\r\n";
	script += "border: '1px solid #fdd',\r\n";
	script += "padding: '2px',\r\n";
	script += "'background-color': '#fee',\r\n";
	script += "opacity: 0.80\r\n";
	script += "}).appendTo(\"body\").fadeIn(200);\r\n";
	script += "}\r\n";
	script += "var previousPoint = null;\r\n";
	script += "$(\"#placeholder\").bind(\"plothover\", function (event, pos, item) {\r\n";
	script += "$(\"#x\").text(pos.x.toFixed(2));\r\n";
	script += "$(\"#y\").text(pos.y.toFixed(2));\r\n";
	script += "if ($(\"#enableTooltip:checked\").length > 0) {\r\n";
	script += "if (item) {\r\n";
	script += "if (previousPoint != item.dataIndex) {\r\n";
	script += "previousPoint = item.dataIndex;\r\n";
	script += "$(\"#tooltip\").remove();\r\n";
	script += "var x = item.datapoint[0].toFixed(2),\r\n";
	script += "y = item.datapoint[1].toFixed(2);\r\n";
	script += "showTooltip(item.pageX, item.pageY,\r\n";
	script += "item.series.label + \" of \" + x + \" = \" + y);\r\n";
	script += "}}\r\n";
	script += "else {\r\n";
	script += "$(\"#tooltip\").remove();\r\n";
	script += "previousPoint = null; \r\n";
	script += "}\r\n";
	script += "}\r\n";
	script += "});\r\n";
	script += "$(\"#placeholder\").bind(\"plotclick\", function (event, pos, item) {\r\n";
	script += "if (item) {\r\n";
	script += "$(\"#clickdata\").text(\"You clicked point \" + item.dataIndex + \" in \" + item.series.label + \".\");\r\n";
	script += "plot.highlight(item.series, item.datapoint);\r\n";
	script += "}\r\n";
	script += "});\r\n";
	script += "});\r\n";
	script += "</script>\r\n";
					
 return( script );
}

/********************************
 HTML Footer data
*********************************/
function htmlFooter()
{
	var foot = "\r\n";
	foot += "</article>\r\n";
	foot += "<aside>\r\n";
	foot += "<h1>Graphs</h1>\r\n";
	foot += "<?php echo \"<p><a href='lol.php?login=\".$login.\" '>Temperature</a></p>\"; ?>\r\n";
	foot += "<?php echo \"<p><a href='graph_weight.php?login=\".$login.\" '>Weight</a></p>\"; ?>\r\n";
	foot += "<?php echo \"<p><a href='lol.php?login=\".$login.\" '>Cardiac Frequence</a></p>\"; ?>\r\n";
	foot += "<?php echo \"<p><a href='lol.php?login=\".$login.\" '>VMA/Week</a></p>\"; ?>\r\n";
	foot += "<?php echo \"<p><a href='lol.php?login=\".$login.\" '>Kilometers/Week</a></p>\"; ?>\r\n";
	foot += "<?php echo \"<p><a href='lol.php?login=\".$login.\" '>Speed (km/h)</a></p>\"; ?>\r\n";
	foot += "<?php echo \"<p><a href='lol.php?login=\".$login.\" '>Duration of running</a></p>\"; ?>\r\n";
	foot += "</aside>\r\n";
	foot += "</section>\r\n";
	foot += "<footer>\r\n";
	foot += "<div id=\"tweet\">\r\n";
	foot += "<h1>Inscription</h1>\r\n";
	foot += "<li><a href=\"../inscription.php\">Sign up</a></li>\r\n";
	foot += "<p></p>\r\n";
	foot += "</div>\r\n";
	foot += "<div id=\"mes_amis\">\r\n";
	foot += "<h1>Links</h1>\r\n";
	foot += "<ul>\r\n";
	foot += "<li><a href=\"#\">EPITA</a></li>\r\n";
	foot += "<li><a href=\"#\">EPITA Masters</a></li>\r\n";
	foot += "<li><a href=\"#\">So Innov</a></li>\r\n";
	foot += "</ul></div></footer></div>\r\n";
	foot += "</body></html>\r\n";
             

	return( foot );
}

function lol()
{
alert("ABC");
}