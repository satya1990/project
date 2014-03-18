<?php
/* @var $this ContactlistController */
/* @var $model Contactlist */

$this->breadcrumbs=array(
	'Contactlists'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Contactlist', 'url'=>array('index')),
	array('label'=>'Create Contactlist', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contactlist-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contactlists</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<form name='fname'>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'contactlist-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
'selectableRows'=>2,//If 0-rows cannot be selected. 1-only one row can be selected >=2 multiple rows can be selected.
	'columns'=>array(
//this array for checkboxes		
array(
'name'=>'select',
'value'=>'$data->active', // your table id
'class'=>'CCheckBoxColumn',),
		'fname',
		'lname',
		'email',
		'mobile',
		'address',
			),

)		); 

?>


<input type=submit action="http://localhost/amantran/reccheck.php" method='post' />


</form>
