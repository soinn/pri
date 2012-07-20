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
				if (isset($_POST['mot_de_passe']))
				{
					$login = $_POST['login'];
					$password = $_POST['mot_de_passe']."\n";
					$filename = "user/".$login.".txt";
					$login = $login."\n";
					
					if (is_file($filename) == 1)
					{
						$fp = fopen($filename, "r");
						$ligne1 = fgets($fp, 42);
						$ligne2 = fgets($fp, 42);
						fclose($fp);
					}
					else
					{
						$ligne1 = ".";
						$ligne2 = ".";
					}
					
					if ($ligne1 == $login AND $ligne2 == $password)
					{
						?>
						<article>
						<h1>Welcome in your Auto-Adaptive System</h1></br>
						<ul>
						<li><?php echo "<p><a href='change_data.php?login=".$login." '>Data</a> Change your data (VMA, heart rate...)</p></br>"; ?></li>
						<li><?php echo "<p><a href='change_objectif.php?login=".$login." '>Objectifs</a> Change your objectifs! Get ready for your next challenges!</p></br>"; ?></li>
						<li><?php echo "<p><a href='new_training.php?login=".$login." '>New training</a> Every time you run, fill this section and go to the graph section check your progresses.</p></br>"; ?></li>
						<li><?php echo "<p><a href='new_vma.php?login=".$login." '>New VMA test</a> Make a new VMA test weekly to improve your performance.</p></br>"; ?></li>
						</ul>
						</article>
						<aside>
						<h1><center>Graphs & other data</center></h1>
						<?php echo "<p><a href='graph/txt_to_html_temperature.php?login=".$login." '>Temperature Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_weight.php?login=".$login." '>Weight Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_heart.php?login=".$login." '>Heart Rate Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_vma.php?login=".$login." '>VMA Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_distance.php?login=".$login." '>Distance Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_speed.php?login=".$login." '>Speed Graph</a></p>"; ?>
						<?php echo "<p><a href='graph/txt_to_html_time.php?login=".$login." '>Time Graph</a></p>"; ?>
						</aside>
						
						<article>
						<h1><center>Objectives Graphs</center></h1>
						<ul>
						<li><?php echo "<p><a href='graph/txt_to_html_5rook.php'>5 Km Rookie</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_5conf.php'>5 Km Confirmed</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_5exp.php'>5 Km Expert</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_10rook.php'>10 Km Rookie</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_10conf.php'>10 Km Confirmed</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_10exp.php'>10 Km Expert</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_21rook.php'>21 Km Rookie</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_21conf.php'>21 Km Confirmed</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_21exp.php'>21 Km Expert</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_42rook.php'>Marathon Rookie</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_42conf.php'>Marathon Confirmed</a></p>"; ?>
						<li><?php echo "<p><a href='graph/txt_to_html_42exp.php'>Marathon Expert</a></p>"; ?>
						</ul>
						</article>
						
						<article>
						<h1>Equipments</h1>
						<center>
						<TABLE border="1">
						 <TR>
						 <TH> <img src="images/coeur.jpg" alt="ex1" /> </TH>
						 <TH> <img src="images/montre.png" alt="ex1" /> </TH>
						 <TH> <img src="images/thermometre.jpg" alt="ex1" /> </TH>
						 </TR>
						 <TR>
		
						 <TD> <a href="http://gearcrave.com/2009-05-07/pro-form-precision-trainer-xt-heart-monitor/">Buy it!</a></TD>
						<TD> <a href="http://www.polarfrance.fr/fr/produits/optimisez_vos_performances/course_a_pied_multisport/RCX5">Buy it!</a></TD>			
						<TD> <a href="http://www.amazon.com/TEMPer-USB-Thermometer-w-Alerts/dp/B002VA813U">Buy it!</a></TD>
						 </TR>
						</TABLE>
						</center>
						</article>
						<?php
					}
					else
					{
						echo '<p>Incorrect password.</p>';
					}
				}
				else
				{
					echo '<p>Incorrect password.</p>';
				}
				?>
	


				
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
