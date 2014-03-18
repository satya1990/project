
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

echo 'email'.'<br>';

echo var_dump($_POST);

 $this->endWidget();



?>

