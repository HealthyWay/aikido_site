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
        //public $layout = '//frontend/layouts/frontSingle';
	public function actionIndex()
	{
            $this->render('index');
	}
}