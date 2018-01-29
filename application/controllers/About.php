<?php
/**
 * Created by PhpStorm.
 * User: victo
 * Date: 2018-01-24
 * Time: 11:43 AM
 */

class About extends Application
{
    public function index()
    {
//		$this->data['pagebody'] = 'welcome_message';
//		$this->render();
        //$this->load->view('about');
        $this->data['pagebody'] = 'about';
        $this->render();

    }
}