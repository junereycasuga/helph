<?php

/**
 * 
 */
class VictimsController extends Controller
{
    public function actionIndex()
    {
    	$model = new Victims;
    	$victims = $model->findAll();

    	if(isset($_POST['Victims']) && isset($_POST['btn-add'])){
    		$model->attributes = $_POST['Victims'];
    		if($model->validate() && $model->save()){
    			Yii::app()->user->setFlash('msg', 'Victim details successfully added');
    			Yii::app()->user->setFlash('msgClass','alert alert-success');
    		} else {
    			Yii::app()->user->setFlash('msg', 'Victim details saving failed');
    			Yii::app()->user->setFlash('msgClass', 'alert alert-error');
    		}
    	}

    	$this->render('index', array(
    		'model'=>$model,
    		'victims'=>$victims));   
    }

	// -----------------------------------------------------------
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}