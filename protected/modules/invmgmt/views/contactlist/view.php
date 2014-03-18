<?php
/* @var $this ContactlistController */
/* @var $model Contactlist */

$this->breadcrumbs=array(
	'Contactlists'=>array('index'),
	$model->email,
);

$this->menu=array(
	array('label'=>'List Contactlist', 'url'=>array('index')),
	array('label'=>'Create Contactlist', 'url'=>array('create')),
	array('label'=>'Update Contactlist', 'url'=>array('update', 'id'=>$model->email)),
	array('label'=>'Delete Contactlist', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->email),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contactlist', 'url'=>array('admin')),
);
?>

<h1>View Contactlist #<?php echo $model->email; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'econtact',
		'fname',
		'lname',
		'email',
		'mobile',
		'address',
	),
)); ?>
