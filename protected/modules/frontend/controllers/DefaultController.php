<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
            $this->layout = 'frontend/layouts/frontSingle';
            $this->render('index');
	}
}