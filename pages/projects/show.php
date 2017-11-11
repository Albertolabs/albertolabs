<?php 
require 'data/projectsData.php';
if( empty($_GET['r']) || ( ! empty($_GET['r']) && ! array_key_exists($_GET['r'], $projectsData ) ) ){

	$router = new Router();
	$router->show404Error();

}else{ 
	$project = $projectsData[$_GET['r']];
	//var_dump($project);
?>

<div class="container marginTopBot50">

	<div class="col-md-8 col-md-offset-2">

		<img src="assets/images/projects/<?= $project['img_browser'] ?>" />
		<div class="clearfix"></div>
		
		<hr class="hr_black" />

		<div class="title-center page-section">
			<h2><?= $project['title'] ?></h2>
		</div>

		<hr class="hr_black" />

		<div id="section-projects" class="heading-block noAfter page-section">
			<span class="text-justify font22"><?= $project['description'] ?></span>
		</div>

	</div>

</div>

<?php } ?>