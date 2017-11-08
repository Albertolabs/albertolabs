<?php require 'autoload.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

	<?php include 'themes/header.php'; ?>

	<body class="stretched">

		<div id="wrapper" class="clearfix">

			<?php include 'themes/navbar.php'; ?>

			<section id="content">

				<?php $router->loadRoute(); ?>
				
			</section><!-- #content end -->

			<?php include 'themes/footer.php'; ?>			

		</div><!-- #wrapper end -->

		<?php include 'themes/footer_scripts.php'; ?>

	</body>

</html>