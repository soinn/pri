// The names of our input and output files
var src  = "../input/temp.csv";
var dest = "../TempChart.html";

// Create some variables
var fso, fin, fout;
var data = new Array();

// Define constants for file access
var forReading   = 1;
var forWriting   = 2;
var forAppending = 8; // not used - given for reference

// Create File System Object and open input and output files
fso  = new ActiveXObject( "Scripting.FileSystemObject" );
fin  = fso.OpenTextFile( src, forReading );
fout = fso.OpenTextFile( dest, forWriting, true );// create file if not found

// Write out header and start of table
fout.WriteLine( htmlHeader() );
fout.WriteLine( "<table>" );

while( !fin.AtEndOfStream )
{
 try 
 {
  var line = fin.ReadLine();

  if( line == "")
    continue;

  if (line == "NO,Tep,Time" )
  {
		
  }
  else
  {
	data = line.split( "," );

	fout.WriteLine( "<tr>" );
	fout.WriteLine( "<td>" + data[2] + "</td>" );
	fout.WriteLine( "<td><input name=\"" + data[0] + "\" id=\"" + data[0] + "\" value=\"" + data[1] + "\"/></td>" );

	fout.WriteLine( "</tr>\r\n" );
  }
 }
 catch( e )
 {
  WScript.Echo( "Error: " + e.description );
 }
}

// Close TABLE
fout.WriteLine( "</table>" );

// Close HTML page
fout.WriteLine( htmlFooter() );

// Close input and output files
fin.Close();
fout.Close();

 

/*******************************
 HTML Header data
********************************/

function htmlHeader()
{
 var title = "TempsHID";
 var head = "<!DOCTYPE html>\r\n<html>\r\n<head>\r\n";

 head += "<title>" + title + "</title>\r\n";
 head += "<meta charset=\"utf-8\" />\r\n";
 head += "<title>Project Research & Innovation</title>\r\n";
 head += "<link href='http://fonts.googleapis.com/css?family=Lobster+Two&v1' rel='stylesheet' type='text/css'/>\r\n";
 head += "	<link href='style.css' rel='stylesheet' type='text/css'/>\r\n";
 head += "	<script language=\"javascript\" src=\"processing-1.2.1.js\" type=\"text/javascript\"></script>\r\n";
 head += "	<script language=\"javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js\" type=\"text/javascript\"></script>\r\n";
 head += "	<script language=\"javascript\" type=\"text/javascript\">\r\n";
 head += "function getNbInput()\r\n{\r\nreturn $('tr').length;\r\n}\r\n\r\n";
 head += "function getNameAtIndex(i)\r\n{\r\nvar elem = $('tr').get(i);return $('td:first-child', elem).text();\r\n}\r\n\r\n";
 head += "function getValAtIndex(i)\r\n{\r\nvar elem = $('tr').get(i);return $('input', elem).val();\r\n}\r\n\r\n";
 head += "$(function()\r\n{\r\n$('canvas').click(function(){$('input').attr(\"disabled\", true);\r\n});\r\n});\r\n\r\n";
 head += "</script>\r\n";


 head += "</head>\r\n<body>\r\n";
 
 return( head );
}

/********************************
 HTML Footer data
*********************************/
function htmlFooter()
{

 var foot = "\r\n";
 foot += "\r\n";
 foot += "<canvas id=\"demo_graph\" data-processing-sources=\"chart.pjs\"></canvas>\r\n";
 foot += "<div style=\"clear: both\"></div>\r\n";
 foot += "</body>\r\n";
 foot += "</html>\r\n";
 

/***
 foot += "<link href=\"css/basic.css\" type=\"text/css\" rel=\"stylesheet\" />";
 foot += "\r\n<link href=\"css/visualize.css\" type=\"text/css\" rel=\"stylesheet\" />";
 foot += "\r\n<link href=\"css/visualize-light.css\" type=\"text/css\" rel=\"stylesheet\" />";

 foot += "\r\n<script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>";
 foot += "\r\n<script type=\"text/javascript\" src=\"js/visualize.js\"></script>";
 foot += "\r\n"
 foot += "\r\n<script type=\"text/javascript\">";
 foot += "\r\n   	$(function(){";
 foot += "\r\n  		$('table').visualize();";
 foot += "\r\n  	});";
 foot += "\r\n</script>";
 foot += "\r\n"
 foot += "\r\n</body>\r\n</html>";
**/
 return( foot );
}