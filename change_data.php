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
					<?php $login = $_GET['login'];
					echo "<h1><li><a href='display_data2.php?login=".$login." '>Running App'</a></li></h1>"; ?>
                </div>
            </header>
            
            <div id="banniere_image">
                <div id="banniere_description">
                    Improve yourself with Auto-Adaptive System !
                    <a href="#" class="bouton_rouge"></a>
                </div>
            </div>
            
            <section>
                <article>
				<?php
					$login = $_GET['login'];
				?>
				<?php echo "<form action='display_data_without_pass.php?login=".$login." 'method='post'>"; ?>
					</br></br><p>Please fill this informations.</p></br>
					<p>vVO2MAX: Maximum Aerobic Speed (km / h).</br> Movement speed of a person who consumes 100% of its maximum flow rate of O2 (VO2 max).</br> 
					To establish your vVO2MAX without laboratory testing, take the maximum distance runed in 6 minutes, and divide it by 100.</br> 
					We will use the Half Cooper method.</br> 
					Example: A runner who runs 1350 meters in 6 minutes will have a vVO2MAX of 1350: 100 = 13.5 km / h</p></br>
					<p><label>vVO2MAX (km/h)</label> : </br><input type="number" name="vma" /></p></br>	
					<p><label>Cardiac Frequence Max (puls/min)</label> : </br><input type="number" name="fmax" /></p></br>
					<p><label>Cardiac Frequence Normal(puls/min)</label> : </br><input type="number" name="fnormal" /></p></br>
					<p><label>Sport level</label> : </br><input type="radio" name="level" value="beginner" id="beginner" /> <label for="beginner">Beginner</label></br>
					<input type="radio" name="level" value="confirmed" id="confirmed" /> <label for="confirmed">Confirmed</label></br>
					<input type="radio" name="level" value="expert" id="expert" /> <label for="expert">Expert</label></p></br>
					<center><input type="submit" value="Confirm" /></center>
					</br>
				</form>
				<center><a href="heartdown.php">Please click here if you want to connect your heart rate monitor with this site</a></center>
				<br>
				</article>
                <aside>
                    <h1>About us</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor"><img src="images/epita.png" alt="EPITA" /></p>
                    <p>We are 4 students in EPITA (2 from Masters and 2 from GITM).</p>
                    <p>This project is the result of 2 months of work for the Research & Innovation Project.</p>
                    <p><img src="images/facebook.png" alt="Facebook" /><img src="images/twitter.png" alt="Twitter" /><img src="images/vimeo.png" alt="Vimeo" /><img src="images/flickr.png" alt="Flickr" /><img src="images/rss.png" alt="RSS" /></p>
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
