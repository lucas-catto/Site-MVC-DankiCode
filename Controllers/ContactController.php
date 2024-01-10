<?php

    namespace Controllers;

    class ContactController extends Controller {

        public function __construct () {

            $this->view = new \Views\MainView('contact');
        }
        
        public function execute () {
            $this->view->render(array('title'=>'Contact'));
        }
    }
?>
