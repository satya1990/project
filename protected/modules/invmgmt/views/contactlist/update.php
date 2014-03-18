<?php
/* @var $this ContactlistController */
/* @var $model Contactlist */

$this->breadcrumbs=array(
	'Contactlists'=>array('index'),
	$model->email=>array('view','id'=>$model->email),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contactlist', 'url'=>array('index')),
	array('label'=>'Create Contactlist', 'url'=>array('create')),
	array('label'=>'View Contactlist', 'url'=>array('view', 'id'=>$model->email)),
	array('label'=>'Manage Contactlist', 'url'=>array('admin')),
);
?>

<h1>Update Contactlist <?php echo $model->email; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>