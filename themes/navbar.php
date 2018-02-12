<header id="header">

	<div id="header-wrap">

		<div class="container clearfix">

			<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

			<div id="logo">

				<a title="Home" href="#" class="standard-logo">
					<img src="https://www.albertolabs.com/images/logolabs.png" />
				</a>
				
			</div><!-- #logo end -->

			<nav id="primary-menu" class="style-5">

				<ul class="one-page-menu">

					<?php if($router->getCurrentRoute() == 'home'){ ?>
					<li class="current">
						<a href="#" title="Home" data-href="#section-home"><div><i class="icon-home2"></i> Home</div></a>
					</li>
					<li>
						<a href="#" title="Services" data-href="#section-services"><div><i class="icon-desktop"></i> Services</div></a>
					</li>
					<li>
						<a href="index.php?p=projects" title="Projects"><div><i class="icon-beaker"></i> Projects</div></a>
					</li>
					<li>
						<a href="#" title="Contact" data-href="#section-contact"><div><i class="icon-bag"></i> Contact</div></a>
					</li>
					<?php }else{ ?>
					<li>
						<a href="index.php" title="Home"><div><i class="icon-home2"></i> Home</div></a>
					</li>
					<li>
						<a href="index.php#section-services" title="Services"><div><i class="icon-desktop"></i> Services</div></a>
					</li>
					<li class="active">
						<a href="index.php?p=projects" title="Projects"><div><i class="icon-beaker"></i> Projects</div></a>
					</li>
					<li>
						<a href="index.php#section-contact" title="Contact"><div><i class="icon-bag"></i> Contact</div></a>
					</li>
					<?php } ?>

					<li>
						<a href="http://blog.albertolabs.com/" title="Blog"><div><i class="icon-pencil2"></i> Blog</div></a>
					</li>

				</ul>

			</nav><!-- #primary-menu end -->

		</div>

	</div>

</header><!-- #header end -->
<div class="clearfix"></div>