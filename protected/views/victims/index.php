<div class="row">
	<div class="col-md-3">
		<div class="well">
			<form action="" role="form">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Victim Name">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" type="button"></span></button>
					</span>
    			</div>
			</form>
			<hr>
			<h4>Add Victim</h4>
			<hr>
			<?php $form=$this->beginWidget('CActiveForm', array(
				'id'=>'add-victim-form',
				'enableClientValidation'=>true,
				'clientOptions'=>array(
					'validateOnSubmit'=>true,
				),
				'htmlOptions'=>array(
					'role'=>'form'
				),
			)); ?>
				<div class="form-group">
					<?php echo $form->labelEx($model,'victim_name'); ?>
					<?php echo $form->textField($model,'victim_name', array('class'=>'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $form->labelEx($model,'victim_age'); ?>
					<?php echo $form->textField($model,'victim_age', array('class'=>'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $form->labelEx($model,'victim_description'); ?>
					<?php echo $form->textArea($model,'victim_description', array('class'=>'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $form->textField($model,'victim_status', array('class'=>'form-control')); ?>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>
	<div class="col-md-9">
	</div>
</div>