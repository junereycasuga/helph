<?php

/**
 * 
 */
class VictimsController extends Controller
{
	public function loadModel($id){
		$model = VIctims::model()->findByPk($id);

		return $model;
	}

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
}