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
					$mm = trim($_POST["element_2_1"]);
					$jj = trim($_POST["element_2_2"]);
					$aa = trim($_POST["element_2_3"]);
					
					$filename = "user/".$login."_vma.txt";
					$vma = trim($_POST["vma"]);
					
					$fp = fopen($filename, "a+");
					fputs($fp, $vma.",".$mm.$jj.$aa);
					fputs($fp, "\n");				
					fclose($fp);
				
					?>
						<h1>Welcome in your Running Application.</h1></br>
						<?php echo "<p><a href='change_data.php?login=".$login." '>Data</a> Change your data (VMA, cardiac frequence...)</p></br>"; ?>
						<?php echo "<p><a href='change_objectif.php?login=".$login." '>Objectifs</a> Change your objectifs! Get ready for your next challenge!</p></br>"; ?>
						<?php echo "<p><a href='new_training.php?login=".$login." '>New jogging</a> Every time you run, fill this section and go to the graph section check your progress.</p></br>"; ?>
						<?php echo "<p><a href='new_vma.php?login=".$login." '>New VMA test</a> Make a new VMA test weekly to improve your performance.</p></br>"; ?>
						
					<?php
				?>
				</article>
                <aside>
				<?php echo "<p><a href='lol.php?login=".$login." '>Temperature</a></p>"; ?>
				<?php echo "<p><a href='lol.php?login=".$login." '>Weight</a></p>"; ?>
				<?php echo "<p><a href='lol.php?login=".$login." '>Cardiac Frequence</a></p>"; ?>
				<?php echo "<p><a href='lol.php?login=".$login." '>VMA/Week</a></p>"; ?>
				<?php echo "<p><a href='lol.php?login=".$login." '>Kilometers/Week</a></p>"; ?>
				<?php echo "<p><a href='lol.php?login=".$login." '>Speed (km/h)</a></p>"; ?>
				<?php echo "<p><a href='lol.php?login=".$login." '>Duration of running</a></p>"; ?>
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
