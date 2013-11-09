<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
	    	<a class="navbar-brand" href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo Yii::app()->createUrl('victims/index'); ?>">Victims</a></li>
				<li><a href="#">Evacuation Centers</a></li>
				<li><a href="#">Donations</a></li>
			</ul>	
		</div>
	</div>
</nav>