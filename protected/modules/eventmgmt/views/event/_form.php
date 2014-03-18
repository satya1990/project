<?php
/* @var $this EventController */
/* @var $model Event */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),   
)); ?>

	
	<?php echo $form->errorSummary($model); ?>
	<table border=1>
	<div class="row">
	<tr>
	<td><h4>
		<?php echo $form->labelEx($model,'Event'); ?>
	</h4>	</td>
	<td>
		<?php echo $form->textField($model,'ename',array('size'=>20,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ename'); ?>
	</td>
	</tr>
	</div>
	
	<div class="row">
	<tr>
	<td><h4>
		<?php echo $form->labelEx($model,'Date'); ?>
		
	</h4></td>
	<td>
		<?php
			$this->widget('zii.widgets.jui.CJuiDatePicker', array(

			'model'=>$model,
			'attribute'=>'edate',
			// additional javascript options for the date picker plugin
			'options' => array(
			'showAnim' => 'fold',
			'dateFormat'=>'dd-mm-yy',
			),
			'htmlOptions' => array(
			'style' => 'height:20px;'
		),
		));
		?>		
	</td>
	</tr>
	</div>

	<div class="row">
	<tr>
	<td><h4>

		<?php echo $form->labelEx($model,'Time'); ?>
	</h4></td>
	<td>
		<?php echo $form->textField($model,'etime',array('size'=>20,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'etime'); ?>
	</td>
	</tr>
	</div>

	<div class="row">
	<tr>
	<td><h4>

		<?php echo $form->labelEx($model,'Venue'); ?>
	</h4></td>
	<td>
		<?php echo $form->textArea($model,'evenue',array('rows'=>3, 'cols'=>31)); ?>	
		
		<?php echo $form->error($model,'evenue'); ?>
	</td>
	</tr>
	</div>

	<div class="row">
	<tr>
	<td><h4>
		<?php echo $form->labelEx($model,'Contact'); ?>
	</h4></td>
	<td>
		<?php echo $form->textField($model,'econtact',array('size'=>20,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'econtact'); ?>
	</td>
	</tr>
	</div>


 </table>
	<?
	 echo $form->fileField($model, 'name');
	 echo $form->error($model, 'name'); 
	?>
	
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

</div>

<?php $this->endWidget(); ?>

<!-- form -->
