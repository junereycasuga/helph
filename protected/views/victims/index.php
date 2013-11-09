<div class="row">
	<div class="col-md-3">
		<div class="well">
			<!-- <form role="form">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Search Victim Name" name="q">
					<span class="input-group-btn">
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" type="button"></span></button>
					</span>
    			</div>
			</form> -->
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
					<?php echo $form->labelEx($model,'shelter_id'); ?>
					<?php echo $form->dropDownList($model,'shelter_id',EvacuationCenters::getCenters(), array('class'=>'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo $form->labelEx($model,'victim_status'); ?>
					<?php echo $form->dropDownList($model,'victim_status',array(
						'0'=>'Alive',
						'1'=>'Sick',
						'2'=>'Critical',
						'3'=>'Deceased',
						),
						array('class'=>'form-control')); ?>
				</div>
				<div class="form-group">
					<?php echo CHtml::submitButton('Add Victim',array('name'=>'btn-add', 'class'=>'btn btn-primary')); ?>
				</div>
			<?php $this->endWidget(); ?>
		</div>
	</div>
	<div class="col-md-9">
		<div class="row">
			<h3>Victims</h3><hr>
		</div>
		<div class="row">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Age</th>
						<th>Description</th>
						<th>Evacuation Center</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($victims as $data){ ?>
					<tr>
						<td><?php echo $data['victim_name']; ?></td>
						<td><?php echo $data['victim_age']; ?></td>
						<td><?php echo $data['victim_description']; ?></td>
						<td><?php echo $data['shelter_id']; ?></td>
						<td><?php echo $data['victim_status']; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>