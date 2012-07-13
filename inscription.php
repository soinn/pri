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
				<form action="inscription_done.php" method="post">
					<p>Please register to use our application.</p>
					<p><label>Login</label> : </br><input type="text" name="login" /></p>
					<p><label>Password</label> : </br><input type="password" name="password" /></p>
					
					<p><label>Sexe</label> : </br><input type="radio" name="sexe" value="male" id="male" /> <label for="male">Male</label>
					<input type="radio" name="sexe" value="female" id="female" /> <label for="female">Female</label></p>
					<p><label>Age</label> : </br><input type="number" name="age" /></p>
					<p><label>Weight</label> : </br><input type="number" name="weight" /></p>
					<p><label>Size</label> : </br><input type="number" name="size" /></p>
					<input type="submit" value="Register" />
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
                <div id="tweet">
                    <h1>Inscription</h1>
                    <li><a href="inscription.php">Sign up</a></li>
                    <p></p>
                </div>
                <div id="mes_amis">
                    <h1>Links</h1>
                    <ul>
                        <li><a href="#">EPITA</a></li>
                        <li><a href="#">EPITA Masters</a></li>
                        <li><a href="#">So Innov</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </body>
</html>
