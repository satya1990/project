<?php
/* @var $this ContactController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Contacts',
);

$this->menu=array(
	array('label'=>'Create Contact', 'url'=>array('create')),
	array('label'=>'Manage Contact', 'url'=>array('admin')),
//added	
array('label'=>'Contact list', 'url'=>array('create')),
);
?>

<h1>Contacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


<?php
echo 'dropdown';



//<?php echo $searchForm->dropDownList($model, 'category_id', CHtml::listData(Category::model()->findAll(), 'id', 'name')); ?>