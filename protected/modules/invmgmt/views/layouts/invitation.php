<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>


<body>


	<div id="header">
		<div id="logo"><?php echo 'Invitation Mangament'; ?></div>
	</div><!-- header -->



	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


<form>
<?php $name='satya';	
//echo CHtml::activetextField(Cmodel $Contact,$fname);
//echo CHtml::dropDownList($name);
//echo $form->checkBox($model,'label_name',array('value'=>1,'uncheckValue'=>0,));
//echo CHtml::dropDownList('form_id',Forms::model()->findAll());

?>
</form>


	<?php echo $content; ?>

	<div class="clear"></div>


    <a href="http://localhost/amantran/index.php?r=invmgmt/contactlist/email" class="thumbnail" rel="tooltip" data-title="Tooltip">
        <img float=left src=".//.//.//.//.//images/email.jpeg" alt="email-logo"> 
    </a>


    <a href="#" >
        <img float=center width=200 height=200 src="http://localhost/amantran/images/sms.jpeg" alt="sms-logo"> 
    </a>




<a href=#> <img width=200 height=200 float=right src="http://localhost/amantran/images/phonebook.jpeg" alt='phonebook'></a>

<div style="width:auto; font-size:80%; text-align:center;">
<a href="http://localhost/amantran/index.php?r=invmgmt/contact/admin" class="thumbnail" rel="tooltip" data-title="Tooltip">
<img  src="http://localhost/amantran/images/contacts.jpeg" alt="alternate text" style="padding-bottom:0.5em;" /> My Contacts</a></div>


	
</ ?php $model=Contact; CHtml::listData($model, 'email', 'fname') ?>



<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Valuegenix <!img  src="http://localhost/amantran/images/vg.jpg">.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
</div><!-- footer -->

</div><!-- page -->

</body>
</html>
