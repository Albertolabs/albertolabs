<!-- Go To Top -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts -->
<script type="text/javascript">
	var currRoute = "<?php echo $router->getCurrentRoute(); ?>";
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<?php if(app_env == "dev"){ ?>
<script type="text/javascript" src="assets/js/plugins.js"></script>
<script type="text/javascript" src="assets/js/functions.js"></script>
<script type="text/javascript" src="assets/js/index.js"></script>
<script type="text/javascript" src="assets/js/projects.js"></script>
<script type="text/javascript" src="assets/js/contact.js"></script>
<?php }else{ ?>
<script type="text/javascript" src="assets/js/index.min.js"></script>
<?php } ?>