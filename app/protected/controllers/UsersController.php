<?php

class UsersController extends Controller
{
	public $layout = 'admin';
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array(
						'index',
						'message'
				),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	public function actionIndex()
	{
			$this->pageTitle = 'Internet Nation - Users';
		  $this->render('index');
	}
	public function actionMessage($id)
	{
			$this->pageTitle = 'Internet Nation - User Messages';
			$this->render('message',['id'=>$id]);
	}
}
