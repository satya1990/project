<?php
/* @var $this ContactlistController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contactlists',
);

$this->menu=array(
	array('label'=>'Create Contactlist', 'url'=>array('create')),
	array('label'=>'Manage Contactlist', 'url'=>array('admin')),
);
?>

<h1>Contactlists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
