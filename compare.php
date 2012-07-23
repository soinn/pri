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
				<center>
						
						<TABLE border="1">
						
						  <CAPTION><h1> Compare your performance with trainings </h1></CAPTION>
							<TR>
							<TH> Distance/Level </TH>
							<TH> Rookie </TH>
							<TH> Confirmed </TH>
							<TH> Expert </TH>
								</TR>
								<TR>
							<TH> 5 KM </TH>
							<TD> <?php echo "<p><a href='graph/txt_to_html_5rook.php?login=".$login." '>5 Km Rookie</a></p>"; ?> </TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_5conf.php?login=".$login." '>5 Km Confirmed</a></p>"; ?> </TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_5exp.php?login=".$login." '>5 Km Expert</a></p>"; ?> </TD>
								</TR>
								<TR>
							<TH> 10 KM </TH>
							<TD> <?php echo "<p><a href='graph/txt_to_html_10rook.php?login=".$login." '>10 Km Rookie</a></p>"; ?></TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_10conf.php?login=".$login." '>10 Km Confirmed</a></p>"; ?></TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_10exp.php?login=".$login." '>10 Km Expert</a></p>"; ?></TD>
								</TR>
						
								<TR>
							<TH> 21 KM </TH>
							<TD> <?php echo "<p><a href='graph/txt_to_html_21rook.php?login=".$login." '>21 Km Rookie</a></p>"; ?></TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_21conf.php?login=".$login." '>21 Km Confirmed</a></p>"; ?></TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_21exp.php?login=".$login." '>21 Km Expert</a></p>"; ?></TD>
								</TR>
								<TR>
							<TH> 42 KM </TH>
							<TD> <?php echo "<p><a href='graph/txt_to_html_42rook.php?login=".$login." '>Marathon Rookie</a></p>"; ?></TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_42conf.php?login=".$login." '>Marathon Confirmed</a></p>"; ?></TD>
							<TD> <?php echo "<p><a href='graph/txt_to_html_42exp.php?login=".$login." '>Marathon Expert</a></p>"; ?></TD>
								</TR>
							</TABLE>
							</center>
						</article>
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
