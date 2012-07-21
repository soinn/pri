<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
				<link href="media-queries.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <title>So Innov - Research & Innovation Project</title>
    </head>
    
    <!--[if IE 6 ]><body class="ie6 old_ie"><![endif]-->
    <!--[if IE 7 ]><body class="ie7 old_ie"><![endif]-->
    <!--[if IE 8 ]><body class="ie8"><![endif]-->
    <!--[if IE 9 ]><body class="ie9"><![endif]-->
    <!--[if !IE]><!--><body><!--<![endif]-->
        <div id="bloc_page">
            <header>
                <div id="titre_principal">
                    <h1><li><a href="index.html">Running App'</a></li></h1>
                </div>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Improve yourself with Auto-Adaptive System !
                    <a href="#" class="bouton_rouge"></a>
                </div>
            </div>
            
            <section>
				<?php
					$login = $_GET['login'];
				?>
						<div id="graph_android">
						   <ul>
							  <li><?php echo "<a href='graph/txt_to_html_temperature.php?login=".$login." '>Temperature</a>"; ?></li>
							  <li><?php echo "<a href='graph/txt_to_html_heart.php?login=".$login." ' >Heart Rate</a>"; ?></li>
							  <li><?php echo "<a href='graph/txt_to_html_weight.php?login=".$login." '>Weight</a>"; ?></li>
							  <li><?php echo "<a href='graph/txt_to_html_vma.php?login=".$login." '>vVO2MAX</a>"; ?></li>
							  <li><?php echo "<a href='graph/txt_to_html_distance.php?login=".$login." '>Distance</a>"; ?></li>
							  <li><?php echo "<a href='graph/txt_to_html_speed.php?login=".$login." '>Speed</a>"; ?></li>
							  <li><?php echo "<a href='graph/txt_to_html_time.php?login=".$login." '>Time</a>"; ?></li>
						   </ul>
						</div>
					
						<article>
						<h1>Cardio Trainings</h1></br>
						
						<?php
						$folder = "cardio_images/";
						$dossier = opendir($folder);
						$number_of_folder = 0;
						
						while ($Fichier = readdir($dossier)) 
						{
						  if ($Fichier != "." && $Fichier != "..") 
						  {
							$nomFichier = $folder."/".$Fichier;
							
							if (substr($nomFichier, -4) == ".png")
							{
								$img = substr($nomFichier, 15, strlen($nomFichier) - 4);
							
								echo "Training of ".$img."<BR>"."<BR>";
								echo "<img src=\"$nomFichier\">"."<BR>";
								
								$number_of_folder = $number_of_folder + 1;
							}
						  }
						}
						
						if ($number_of_folder == 0)
						{
							echo "<p>No cardio training done yet.</p></br>";
						}
						
						closedir($dossier);
						
						?>
						</br>
						</article>
						<aside>
						<h1><center>Graphs & other data</center></h1>
						<?php echo "<p><a href='graph/txt_to_html_temperature.php?login=".$login." '>Temperature Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_weight.php?login=".$login." '>Weight Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_heart.php?login=".$login." '>Heart Rate Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_vma.php?login=".$login." '>vVO2MAX Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_distance.php?login=".$login." '>Distance Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_speed.php?login=".$login." '>Speed Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_time.php?login=".$login." '>Time Graph</a></p>"; ?>
						</aside>
					
            </section>
            
            <footer>
			<center>
                <div id="mes_amis">
                    <h1>Inscription</h1>
					<ul>
						<li><a href="inscription.php">Sign up</a></li>
						<li><a href="inscription.php">Contact us</a></li>
						<li><a href="http://en.wikipedia.org/wiki/Complex_adaptive_system">Auto Adaptive Systems</a></li>
					</ul>
					<p></p>
                </div>
                <div id="mes_amis">
                    <h1>Links</h1>
                    <ul>
                        <li><a href="http://www.epita.fr/">EPITA</a></li>
                        <li><a href="http://www.epita.fr/masters/">EPITA Masters</a></li>
                        <li><a href="so-innov.fr">So Innov</a></li>
                    </ul>
                </div>
				</center>
            </footer>
        </div>
    </body>
</html>
