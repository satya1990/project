
<?php

ini_set('error_reporting',E_ALL);
ini_set('display_errors','On');

$form=$this->beginWidget('CActiveForm', array(
        'id'=>'contact-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
));

echo 'views/contact/email'.'<br>';

echo var_dump($_POST).'<br>';

echo $form->dropDownList($name,'ename',CHtml::listData(Event::model()->findAll(), 'ename', 'ename'));


echo CHtml::activeTextField($name,'econtact');
echo $name['econtact'];

//echo $form->dropDownList($model1,'ename',CHtml::listData(Contactlist::model()->findAll(), 'ename', 'ename'));

 $this->endWidget();



?>

