<?php
/* @var $this ContactlistController */
/* @var $model Contactlist */

$this->breadcrumbs=array(
	'Contactlists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Contactlist', 'url'=>array('index')),
	array('label'=>'Manage Contactlist', 'url'=>array('admin')),
);
?>

<h1>Create Contactlist</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>