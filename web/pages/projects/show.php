<?php 
require 'data/projectsData.php';
if( empty($_GET['r']) || ( ! empty($_GET['r']) && ! array_key_exists($_GET['r'], $projectsData ) ) ){

	$router = new Router();
	$router->show404Error();

}else{ 
	$project = $projectsData[$_GET['r']];
	//var_dump($project);
?>

<div class="bg-overlay">
	<div class="bg"  style="background-image: url('assets/images/projects/<?= $project['img_full'] ?>')"></div>
	<h1><?= $project['title'] ?></h1>
</div>

<div class="content-wrap">

	<div class="container clearfix">

		<div id="section-projects" class="heading-block title-center page-section">
			<span class="text-justify font22"><?= $project['description'] ?></span>
		</div>

		<div class="pricing bottommargin clearfix">

			<div class="content-wrap" style="padding:0;">

				

			</div>

		</div>

	</div>
	
</div>

<?php } ?>