<!DOCTYPE html>
<html lang="en">
<head>
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCpuVJQiLE2zdqA8tPnhjdN-3lmQvJyUQg&sensor=false">
	</script>
	<script>
	function initialize()
	{
	var mapProp = {
	  center:new google.maps.LatLng(51.508742,-0.120850),
	  zoom:5,
	  mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	var map=new google.maps.Map(document.getElementById("map-canvas"),mapProp);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<meta charset="UTF-8" />
	<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/lib/css/bootstrap.css');
	Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/lib/css/bootstrap.min.css');
	Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/lib/css/helph.css');
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<?php $this->renderPartial('//layouts/header'); ?>
	<div class="container">
		<?php echo $content; ?>
	</div>

	<?php
	Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/assets/js/jquery-1.10.2.min');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/lib/js/bootstrap.min.js');
	?>
</body>
</html>