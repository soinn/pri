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
				<?php echo "<form action='display_data_after_vma.php?login=".$login." 'method='post'>"; ?>
					<p></br></br>vVO2MAX: Maximum Aerobic Speed (km / h). </br>Movement speed of a person who consumes 100% of its maximum flow rate of O2 (VO2 max). 
					</br></br>To establish your vVO2MAX without laboratory testing, take the maximum distance runed in 6 minutes, and divide it by 100. 
					</br>We will use the Half Cooper method. 
					</br></br>Example: A runner who runs 1350 meters in 6 minutes will have a vVO2MAX of 1350: 100 = 13.5 km / h</p>
					</br><p><label>vVO2MAX (km/h)</label> : </br><input type="number" name="vma" /></p>
					</br><p><label class="description" for="element_2">Date of the training :</label></br>
					<span>
						<input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_2_1">MM</label>
					</span>
					<span>
						<input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"> /
						<label for="element_2_2">JJ</label>
					</span>
					<span>
						<input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text">
						<label for="element_2_3">AAAA</label>
					</span></br></br>
					<center><input type="submit" value="Confirm" /></center></br>
					<p>Doing this test quickly can help us to improve your training.</p></br></br>
				</form>
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
