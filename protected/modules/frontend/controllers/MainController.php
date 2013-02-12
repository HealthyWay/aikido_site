<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author almir
 */
class MainController extends Controller
{
        public $layout = '/layouts/frontMain';
	public function actionIndex()
	{
            $this->render('index', array('model' => new ModelSubscribers));
	}
}