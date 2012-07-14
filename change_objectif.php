<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
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
                <article>
				<?php
					$login = $_GET['login'];
				?>
				<?php echo "<form action='display_data_after_changing_objectives.php?login=".$login." 'method='post'>"; ?>
					<p>Please fill this informations.</p>
					<p>For example, if you will running a Marathon in 6 months and you want to do the Marathon in 4 hours. Fill the 'Delay' with 180 days, 
					the 'Course' with 42 km and the 'Time' with 240 minutes.</p>

					<p>
					<label for="course">Select the kind of course you want to do:</label><br/>
					<select name="course" id="course">
					<option value="5">5 km</option>
					<option value="10">10 km</option>
					<option value="21">Semi-Marathon (21 km)</option>
					<option value="42">Marathon (42 km)</option>
					</select>
					</p>	
					<p><label>Delay (days)</label> : </br><input type="number" name="delay" /></p>
					<p><label>Time(minutes)</label> : </br><input type="number" name="time" /></p>
					<input type="submit" value="Done" />
				</form>
				<p>And just let the Running App' shows you the way to success!</p>
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
