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
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	
		<link rel="stylesheet" href="bower_components/demo-console/index.css">
    		<link rel="stylesheet" href="bower_components/ekko-lightbox/dist/ekko-lightbox.min.css">
	
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
					<h1 class="logo">
					<a href="http://elastrix.io" target="_blank">
						Elastrix
					</a>
					</h1>
				<h1><a href="#kurento"><strong>Kurento</strong></a> with <a href="#nginx">NGINX</a> and Webmin<br />
				on Ubuntu 14.04, with Node.js, OpenCV, FFMPEG, MySQL 5.5, PHP5, and Turn Server.<br/>
				with Webmin included for administration.<br />
				Hand crafted by <a href="http://elastrix.io" target="_blank">Elastrix</a>.</h1>
			</header>

		<!-- Main -->
			<div id="main">

				<!-- One -->
					<section id="one">
						<header class="major">
							<h2>Congratulations! Your App is ready to go!</h2>
						</header>
						<p>Our battle tested, scablable Elastrix Media Server is perfect for development all the way to production ready media
						applications and websites that want to take advantage of the Kurento Media Server and WebRTC. Broadcast WebRTC video feeds, record peer2peer feeds, or provide rich one to one video calls easily with the power of Kurento. OpenCV is also available for biometric applications and facial recognition. 
						The server features Ubuntu 14.04, NGINX 1.4.6, Node.js 0.10.40, OpenCV 2.4.10, Java 7, MySQL 5.5, PHP with file upload limit increases as well as sendmail for sending email from your instance. 
						It also includes Webmin pre-installed and configured for full service and easy server administration from your browser.</p>
						<ul>
							<li>Login via ssh with the key you used to start your instance and username 'ubuntu' i.e. 
							<br/><code>ssh -i mykey.pem ubuntu@<?=$_SERVER['HTTP_HOST']?></code>
							</li>
							<li>Run the following command: <br/><code>sudo ./setup.sh</code>
								<ol>
									<li>Create a Webmin user you can login to <a target="_blank" href="https://<?=$_SERVER['SERVER_NAME']?>:10000">Webmin</a> admin with.
									<li>Update your root MySQL password.</li>
								</ol>
							</li>
						</ul>
						<p>That's it! Your instance is ready to use!</p>
						<ul class="actions">
							<li><a href="mailto:support@elastrix.io?subject=EMS Support Request" target="_blank" class="button">Get Support</a></li>
							<li><a href="https://<?=$_SERVER['SERVER_NAME'];?>:10000" target="_blank" class="button">Webmin</a></li>
							<li><a href="http://www.kurento.org/docs/" target="_blank" class="button">Kurento Docs</a></li>
                <li><a href="http://manpages.ubuntu.com/manpages/trusty/man1/turnserver.1.html" target="_blank" class="button
">Turn Server Manual</a></li>

						</ul>
					</section>


<section id="kurento">

	<h2>Kurento</h2>
	<div class="row">
		<article>
			<p>
			<a href="https://kurento.com">Kurento</a> is a powerful media server application that allows you to stream WebRTC media through filters and utilize modules to multicast, record, and deliver media. It allows you to harness the power of WebRTC on the client, and utilize the server to distribute live and recorded media, as well as augment media streams in realtime. The kurento service is easily managed via upstart:
<pre>sudo service kurento-media-server-6.0 restart</pre>
<br/>
Kurento is very modular, so you can easily extend it with your own applications, or utilize built-in modules. Please see <a href="http://www.kurento.org/docs/" target="_blank">The Kurento Documentation</a> for usage and tutorials.
There is a preconfigured tutorial located as the default NGINX site available in <code>~/webroot/kurento</code>. After you run setup.sh you can access it at your root server url and begin immediately!
			</p>
			<p>
			The Elastrix Media Server also includes a built in Turnserver for NAT traversal. There isn't much you have to do here unless you want to customize the ports and authentication. The <code>~./setup.sh</code> application will walk you through configuring everything in terms of updating the host and authentication. If you want to further customize the turnserver configuration you can directly edit <code>/etc/turnserver.conf</code> and <code>/etc/turnuserdb.conf</code>. If you want to change the authentication, or further customize, please see the manual by running the following command <code>man turnserver</code>.
			</p>
		</article>
	</div>
</section>

                                        <section id="nginx">
                                                <h2>NGINX</h2>
                                                <div class="row">
                                                        <article>
                                                                <p>
You can use the <code>nginx_modsite.sh</code> script to easily list, enable, and disable NGINX sites (like this one).
                                                                </p>
<h2>How it Works</h2>
                                                                <pre>
# To list all the sites
$ sudo nginx_modsite -l

# To enable site "test_website"
$ sudo nginx_modsite -e test_website

# To disable site "test_website"
$ sudo nginx_modsite -d test_website
</pre>
                                                                <p>

                                                                </p>
                                                        </article>
                                                </div>
                                        </section>


				<!-- Two -->
					<section id="three">
						<h2>Related Apps</h2>
						<div class="row">
							<article class="4u 12u$(xsmall) work-item">
								<a href="https://aws.amazon.com/marketplace/pp/B01458ASA4/ref=_ptnr_ems" class="image fit thumb">
								<img src="http://www.elastrix.io/images/elastrix-ghost.png" alt="Ghost NGINX"/></a>
								<h3>Ghost [NGINX]</h3>
								<p>Ghost running on NGINX with pre-configured NGINX, sendmail and more.</p>
							</article>
							<article class="4u 12u$(xsmall) work-item">
								<a href="https://aws.amazon.com/marketplace/pp/B013TM4FVK/ref=_ptnr_ems" class="image fit thumb">
								<img src="http://www.elastrix.io/images/elastrix-bug-wp-nginx.png" alt="WordPress NGINX" /></a>
								<h3>WordPress [NGINX]</h3>
								<p>WordPress running on NGINX for super speed, pre-configured with PHP-FPM, sendmail, and performance tweaks.</p>
							</article>

							<article class="4u$ 12u$(xsmall) work-item">
                                                                <a href="https://aws.amazon.com/marketplace/pp/B013JBB23A/ref=_ptnr_ems" class="image fit thumb">
                                                                <img src="http://elastrix.io/images/elastrix-bug-wp-apache.png" alt="WordPress Apache" /></a>
                                                                <h3>WordPress [Apache]</h3>
                                                                <p>WordPress running on Apache, pre-configured with PHP, MySQL, sendmail, and performance tweaks.</p>
                                                        </article>

						</div>
						<ul class="actions">
							<li><a href="http://elastrix.io/" target="_blank" class="button">More</a></li>
						</ul>
					</section>

				<!-- Four -->
				<!--
					<section id="four">
						<h2>Elements</h2>

						<section>
							<h4>Text</h4>
							<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
							This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
							This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
							<hr />
							<header>
								<h4>Heading with a Subtitle</h4>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<header>
								<h5>Heading with a Subtitle</h5>
								<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
							</header>
							<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
							<hr />
							<h2>Heading Level 2</h2>
							<h3>Heading Level 3</h3>
							<h4>Heading Level 4</h4>
							<h5>Heading Level 5</h5>
							<h6>Heading Level 6</h6>
							<hr />
							<h5>Blockquote</h5>
							<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
							<h5>Preformatted</h5>
							<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
						</section>

						<section>
							<h4>Lists</h4>
							<div class="row">
								<div class="6u 12u$(xsmall)">
									<h5>Unordered</h5>
									<ul>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
									<h5>Alternate</h5>
									<ul class="alt">
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Sagittis adipiscing lorem eleifend.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ul>
								</div>
								<div class="6u$ 12u$(xsmall)">
									<h5>Ordered</h5>
									<ol>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
										<li>Dolor pulvinar etiam magna etiam.</li>
										<li>Etiam vel felis at lorem sed viverra.</li>
										<li>Felis enim feugiat dolore viverra.</li>
									</ol>
									<h5>Icons</h5>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
										<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
										<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
									</ul>
								</div>
							</div>
							<h5>Actions</h5>
							<ul class="actions">
								<li><a href="#" class="button special">Default</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions small">
								<li><a href="#" class="button special small">Small</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<div class="row">
								<div class="6u 12u$(small)">
									<ul class="actions vertical">
										<li><a href="#" class="button special">Default</a></li>
										<li><a href="#" class="button">Default</a></li>
									</ul>
								</div>
								<div class="6u$ 12u$(small)">
									<ul class="actions vertical small">
										<li><a href="#" class="button special small">Small</a></li>
										<li><a href="#" class="button small">Small</a></li>
									</ul>
								</div>
								<div class="6u 12u$(small)">
									<ul class="actions vertical">
										<li><a href="#" class="button special fit">Default</a></li>
										<li><a href="#" class="button fit">Default</a></li>
									</ul>
								</div>
								<div class="6u$ 12u$(small)">
									<ul class="actions vertical small">
										<li><a href="#" class="button special small fit">Small</a></li>
										<li><a href="#" class="button small fit">Small</a></li>
									</ul>
								</div>
							</div>
						</section>

						<section>
							<h4>Table</h4>
							<h5>Default</h5>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>

							<h5>Alternate</h5>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Name</th>
											<th>Description</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Item One</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Two</td>
											<td>Vis ac commodo adipiscing arcu aliquet.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Three</td>
											<td> Morbi faucibus arcu accumsan lorem.</td>
											<td>29.99</td>
										</tr>
										<tr>
											<td>Item Four</td>
											<td>Vitae integer tempus condimentum.</td>
											<td>19.99</td>
										</tr>
										<tr>
											<td>Item Five</td>
											<td>Ante turpis integer aliquet porttitor.</td>
											<td>29.99</td>
										</tr>
									</tbody>
									<tfoot>
										<tr>
											<td colspan="2"></td>
											<td>100.00</td>
										</tr>
									</tfoot>
								</table>
							</div>
						</section>

						<section>
							<h4>Buttons</h4>
							<ul class="actions">
								<li><a href="#" class="button special">Special</a></li>
								<li><a href="#" class="button">Default</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button big">Big</a></li>
								<li><a href="#" class="button">Default</a></li>
								<li><a href="#" class="button small">Small</a></li>
							</ul>
							<ul class="actions fit">
								<li><a href="#" class="button special fit">Fit</a></li>
								<li><a href="#" class="button fit">Fit</a></li>
							</ul>
							<ul class="actions fit small">
								<li><a href="#" class="button special fit small">Fit + Small</a></li>
								<li><a href="#" class="button fit small">Fit + Small</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#" class="button special icon fa-download">Icon</a></li>
								<li><a href="#" class="button icon fa-download">Icon</a></li>
							</ul>
							<ul class="actions">
								<li><span class="button special disabled">Special</span></li>
								<li><span class="button disabled">Default</span></li>
							</ul>
						</section>

						<section>
							<h4>Form</h4>
							<form method="post" action="#">
								<div class="row uniform 50%">
									<div class="6u 12u$(xsmall)">
										<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
									</div>
									<div class="6u$ 12u$(xsmall)">
										<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
									</div>
									<div class="12u$">
										<div class="select-wrapper">
											<select name="demo-category" id="demo-category">
												<option value="">- Category -</option>
												<option value="1">Manufacturing</option>
												<option value="1">Shipping</option>
												<option value="1">Administration</option>
												<option value="1">Human Resources</option>
											</select>
										</div>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="demo-priority-low" name="demo-priority" checked>
										<label for="demo-priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(small)">
										<input type="radio" id="demo-priority-normal" name="demo-priority">
										<label for="demo-priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u(small)">
										<input type="radio" id="demo-priority-high" name="demo-priority">
										<label for="demo-priority-high">High Priority</label>
									</div>
									<div class="6u 12u$(small)">
										<input type="checkbox" id="demo-copy" name="demo-copy">
										<label for="demo-copy">Email me a copy of this message</label>
									</div>
									<div class="6u$ 12u$(small)">
										<input type="checkbox" id="demo-human" name="demo-human" checked>
										<label for="demo-human">I am a human and not a robot</label>
									</div>
									<div class="12u$">
										<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
									</div>
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Send Message" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						<section>
							<h4>Image</h4>
							<h5>Fit</h5>
							<div class="box alt">
								<div class="row 50% uniform">
									<div class="12u$"><span class="image fit"><img src="images/fulls/05.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/thumbs/04.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/thumbs/05.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/thumbs/06.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/thumbs/03.jpg" alt="" /></span></div>
									<div class="4u"><span class="image fit"><img src="images/thumbs/02.jpg" alt="" /></span></div>
									<div class="4u$"><span class="image fit"><img src="images/thumbs/01.jpg" alt="" /></span></div>
								</div>
							</div>
							<h5>Left &amp; Right</h5>
							<p><span class="image left"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
							<p><span class="image right"><img src="images/avatar.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
						</section>

					</section>
				-->

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
			<script src="bower_components/adapter.js/adapter.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src="bower_components/co/co.js"></script>
			<script src="bower_components/demo-console/index.js"></script>
    			<script src="bower_components/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    			<script src="bower_components/kurento-client/js/kurento-client.js"></script>
    			<script src="bower_components/kurento-utils/js/kurento-utils.js"></script>
			<script src="assets/js/kurento.js"></script>
	</body>
</html>
