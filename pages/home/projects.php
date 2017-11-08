<div id="section-projects" class="heading-block title-center page-section">
	<h2>Projects</h2>
	<span>Projects we have done recently</span>
</div>

<div class="pricing bottommargin clearfix">

	<!-- portfolio items -->		
	<div class="content-wrap" style="padding:0;">
		
		<div class="clear"></div>

		<!-- Portfolio Items -->
		<div id="portfolio" class="clearfix">

			<?php
				require 'data/projectsData.php';

				$i = 1;
				foreach($projectsData as $key => $project){ $i++;
			?>
			<article class="portfolio-item pf-media <?= $project['filters'] ?>">
				<div class="portfolio-image">
					<img src="assets/images/projects/<?= $project['img_thumb'] ?>" title="<?= $project['title'] ?>" alt="<?= $project['title'] ?>" />
					<div class="portfolio-overlay">
						<a href="<?= $project['route'] ?>" title="Ver más sobre <?= $project['title'] ?>" class="right-icon"><i class="icon-line-plus"></i></a>
					</div>
				</div>
				<div class="portfolio-desc">
					<h3>
						<a href="<?= $project['route'] ?>" title="Ver más sobre <?= $project['title'] ?>" class="right-icon"><?= $project['title'] ?></a>
					</h3>
					<span><?= $project['type'] ?></span>
				</div>
			</article>
			<?php if($i > 8) break; } ?>

		</div><!-- #portfolio end -->

		<br />
		<div class="text-center">
			<a class="button button-3d nomargin" title="Visit website" href="index.php?p=projects">View all projects</a>
		</div>

	</div><!-- end portfolio items -->

</div>

<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>