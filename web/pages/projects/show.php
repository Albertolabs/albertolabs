<?php 
require 'data/projectsData.php';
if( empty($_GET['r']) || ( ! empty($_GET['r']) && ! array_key_exists($_GET['r'], $projectsData ) ) ){

	$router = new Router();
	$router->show404Error();

}else{ 
	$project = $projectsData[$_GET['r']];
?>

<div class="project-bg-image">
&nbsp;
</div>

<div class="content-wrap">

	<div class="container clearfix">

		<div id="section-projects" class="heading-block title-center page-section">
			<h2><?= $project['title'] ?></h2>
			<span class="text-justify"><?= $project['description'] ?></span>
		</div>

		<div class="pricing bottommargin clearfix">

			<div class="content-wrap" style="padding:0;">

				

			</div>

		</div>

	</div>
	
</div>

<?php } ?>