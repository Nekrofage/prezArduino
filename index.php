<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Introduction à Arduino</title>

		<meta name="description" content="Introduction à Arduino">
		<meta name="author" content="Sam">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="css/reveal.min.css">
		<link rel="stylesheet" href="css/theme/default.css" id="theme">

		<!-- For syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- If the query includes 'print-pdf', include the PDF print sheet -->
		<script>
			if( window.location.search.match( /print-pdf/gi ) ) {
				var link = document.createElement( 'link' );
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = 'css/print/pdf.css';
				document.getElementsByTagName( 'head' )[0].appendChild( link );
			}
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">
				<section>
					<h1>Introduction<br/>à Arduino</h1>
					<h3>L'électronique (presque) facile !</h3>
					<p>
						<small>De&nbsp;<a href="http://hacklab.fr">Sam</a> / <a href="http://twitter.com/nekrofage666">@nekrofage666</a></small>
					</p>
				</section>

                <section>
                        <?php include("arduino.inc.php"); ?>

                        <?php include("atouts.inc.php"); ?>

                        <?php include("pourqui.inc.php"); ?>

                        <?php include("arduinouno.inc.php"); ?>
                        
                        <?php include("caracteristique.inc.php"); ?>
                        
                        <?php include("logiciel.inc.php"); ?>
                        
                        <?php include("langage.inc.php"); ?>
                        
                        <?php include("shield.inc.php"); ?>

                        <?php include("applications.inc.php"); ?>


                </section>

                 <?php include("robot.inc.php"); ?>

                <?php include("exemple_led.inc.php"); ?>

                <?php include("conclusion.inc.php"); ?>

                <?php include("ressource.inc.php"); ?>

                <?php include("lien.inc.php"); ?>

                <?php include("zeend.inc.php"); ?>

			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.min.js"></script>

		<script>

			// Full list of configuration options available here:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,

				theme: Reveal.getQueryHash().theme, // available themes are in /css/theme
				transition: Reveal.getQueryHash().transition || 'default', // default/cube/page/concave/zoom/linear/fade/none

				// Parallax scrolling
				// parallaxBackgroundImage: 'https://s3.amazonaws.com/hakim-static/reveal-js/reveal-parallax-1.jpg',
				// parallaxBackgroundSize: '2100px 900px',

				// Optional libraries used to extend on reveal.js
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true, condition: function() { return !!document.body.classList; } },
					{ src: 'plugin/notes/notes.js', async: true, condition: function() { return !!document.body.classList; } }
				]
			});

		</script>

	</body>
</html>
