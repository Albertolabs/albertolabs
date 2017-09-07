<div class="content-wrap">

	<div class="container clearfix">

		<div id="section-projects" class="heading-block title-center page-section">
			<h2>Projects</h2>
			<span>What we’ve been working on</span>
		</div>

		<div class="pricing bottommargin clearfix">

			<!-- portfolio items -->		
			<div class="content-wrap" style="padding:0;">

				<ul id="portfolio-filter" class="clearfix">

					<li class="activeFilter"><a href="#" data-filter="*">All projects</a></li>
					<li><a href="#" data-filter=".pf-software">Software</a></li>
					<li><a href="#" data-filter=".pf-websites">Websites</a></li>
					<li><a href="#" data-filter=".pf-mobile-apps">Mobile Apps</a></li>
					<li><a href="#" data-filter=".pf-others">Others</a></li>

				</ul><!-- #portfolio-filter end -->
				<div id="portfolio-shuffle">
					<i class="icon-random"></i>
				</div>
				
				<div class="clear"></div>

				<!-- Portfolio Items -->
				<div id="portfolio" class="clearfix">

					<?php
						require 'data/projectsData.php';
						foreach($projectsData as $key => $project){
							$projectUrl = 'index.php?p=show_project&r=' . $key;
					?>
					<article class="portfolio-item pf-media <?= $project['filters'] ?>">
						<div class="portfolio-image">
							<img src="assets/images/projects/<?= $project['img_thumb'] ?>" title="<?= $project['title'] ?>" alt="<?= $project['title'] ?>" />
							<div class="portfolio-overlay">
								<a href="<?= $projectUrl ?>" title="Ver más sobre <?= $project['title'] ?>" class="right-icon"><i class="icon-line-plus"></i></a>
							</div>
						</div>
						<div class="portfolio-desc">
							<h3>
								<a href="<?= $projectUrl ?>" title="Ver más sobre <?= $project['title'] ?>" class="right-icon"><?= $project['title'] ?></a>
							</h3>
							<span><?= $project['type'] ?></span>
						</div>
					</article>
					<?php } ?>

				</div><!-- #portfolio end -->

			</div><!-- end portfolio items -->

		</div>

	</div>

</div>