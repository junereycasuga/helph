<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<?php if(Yii::app()->user->hasFlash('msg')): ?>
		<div class="<?php echo Yii::app()->user->getFlash('msgClass'); ?>">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<?php echo Yii::app()->user->getFlash('msg'); ?>
		</div>
	<?php endif; ?>
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>