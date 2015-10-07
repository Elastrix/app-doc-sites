<!DOCTYPE HTML>
<!--
	Strata by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Elastrix Apps</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" style="width:98%;"/>
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
					<h1 class="logo">
					<a href="http://elastrix.io" target="_blank">
						<img src="http://elastrix.io/content/images/2015/09/elastrix-logo-white.png" style="width:98%;"/>
					</a>
					</h1>
				<h1><strong>Ghost</strong> on NGINX with<br />
				Ghost, Ubuntu 14.04, NGINX, and MySQL 5.5<br/>
				with Webmin included for administration.<br />
				Hand crafted by <a href="http://elastrix.io" target="_blank">Elastrix</a>.</h1>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Congratulations! Your App is ready!</h2>
						</header>
						<p>Our battle tested, scablable and performance tweaked LEMP stack with Ghost is perfect for development all the way to production ready 
						applications and websites. Ghost is pre-configured and installed as an Ubuntu Upstart service and served through NGINX for stability and speed. There are also security enhancements and log scanning enabled for known exploits and security enhancements. 
						It features Ubuntu 14.04, Node.js 12.x, Ghost, NGINX, PHP file upload limit increases as well as sendmail for sending email from your instance. 
						It also includes MySQL 5 and PHP5 with Webmin pre-installed and configured for full service and easy server administration from your browser.</p>
						<ul>
							<li>Login via ssh with the key you used to start your instance and username 'ubuntu' i.e. 
							<br/><code>ssh -i mykey.pem ubuntu@<?=$_SERVER['HTTP_HOST']?></code>
							</li>
							<li>Run the following command: <br/><code>sudo elastrix -s</code>
								<ol>
									<li>Create a Webmin user you can login to <a target="_blank" href="https://<?=$_SERVER['HTTP_HOST']?>:10000">Webmin</a> admin with. Please be sure your EC2 security group includes port <strong>10000 inbound TCP</strong>. Please note you will need to accept the certificate since it is self signed initially.
									<li>Update your root MySQL password.</li>
									<li>Update your ghost MySQL password.</li>
									<li>Update your ghost public URL
									<br/>This will automatically detect this EC2 instance public hostname which you can choose to use during setup (http://<?=$_SERVER['HTTP_HOST'];?>), or you will have the option to enter your own address.
									</li>
									<li>Enable your Ghost site with NGINX and disable this one.</li>
								</ol>
							</li>
						</ul>
						<p>That's it! Your instance is ready to use!</p>
						<ul class="actions">
							<li><a href="mailto:support@elastrix.io?subject=Ghost with NGINX Support Request" target="_blank" class="button">Get Support</a></li>
							<li><a href="http://www.elastrix.io/ghost-nginx/" target="_blank" class="button">Documentation</a></li>
							<li><a href="http://docs.ghost.org/" target="_blank" class="button">Ghost Docs</a></li>
							<li><a href="https://<?=$_SERVER['HTTP_HOST'];?>:10000" target="_blank" class="button">Webmin</a></li>
						</ul>
					</section>

				<!-- Two -->
					<section id="three">
						<h2>More Apps</h2>
						<div class="row">
							<article class="3u 12u$(xsmall) work-item">
								<a href="http://www.elastrix.io/wordpress-apache/" class="image fit thumb">
								<img src="https://images-na.ssl-images-amazon.com/images/I/41dww-BdA-L._SS150.jpg" alt=" WordPress Apache" /></a>
								<h3>WordPress [Apache]</h3>
								<p>WordPress running on NGINX with pre-configured PHP, PHP-FPM, NGINX, sendmail and more.</p>
							</article>
							<article class="3u 12u$(xsmall) work-item">
								<a href="http://www.elastrix.io/wordpress-nginx/" class="image fit thumb">
								<img src="https://images-na.ssl-images-amazon.com/images/I/4117Bq34MtL._SS150.jpg" alt="WordPress NGINX" /></a>
								<h3>WordPress [NGINX]</h3>
								<p>WordPress running on NGINX for super speed, pre-configured with PHP-FPM, sendmail, and performance tweaks.</p>
							</article>
							<article class="3u 12u$(xsmall) work-item">
								<a href="http://www.elastrix.io/lamp-webmin/" class="image fit thumb">
								<img src="https://images-na.ssl-images-amazon.com/images/I/41nFR0m7GnL._SS150.jpg" alt="WordPress NGINX" /></a>
								<h3>LAMP Stack</h3>
								<p>Our battle tested, scalable and performance tweaked LAMP stack is perfect for development all the way to product ready applications and websites.</p>
							</article>
							<article class="3u$ 12u$(xsmall) work-item">
								<a href="http://www.elastrix.io/elastrix-media-server/" class="image fit thumb">
								<img src="https://images-na.ssl-images-amazon.com/images/I/41hKg%2BFkYnL._SS150.jpg" alt="WordPress NGINX" /></a>
								<h3>Elastrix Media Server</h3>
								<p>The Elastrix Media Server (EMS) includes an out-of-the-box powerful media platform that you can use to build and host your own WebRTC media application server using Kurento Media Server.</p>
							</article>
						</div>
						<ul class="actions">
							<li><a href="http://www.elastrix.io/tag/applications/" target="_blank" class="button">Find More Apps</a></li>
						</ul>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="http://twitter.com/elastrixio" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="http://github.com/elastrix" class="icon fa-github"><span class="label">Github</span></a></li>
					<li><a href="http://facebook.com/elastrixio" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					<li><a href="mailto:info@elastrix.io" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Elastrix</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
