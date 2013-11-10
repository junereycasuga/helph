<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/lib/css/bootstrap.min.css');
	Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/lib/css/helph.css');
	?>
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<?php $this->renderPartial('//layouts/header'); ?>
	<?php if(Yii::app()->controller->id == 'site' && Yii::app()->controller->action->id == 'index'){ ?>
	<div id="mapContainer">
		<div id="googleMap"></div>
	</div>
	<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/gmap.js'); ?>
	<?php } else { ?>
	<div class="container">
		<?php echo $content; ?>
	</div>
	<?php } ?>

	<?php
	Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery-1.10.2.min');
	Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/lib/js/bootstrap.min.js');
	?>
</body>
</html>