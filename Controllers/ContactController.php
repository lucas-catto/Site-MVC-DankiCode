<?php

    namespace Controllers;

    class ContactController extends Controller {

        public function __construct () {

            $this->view = new \Views\ContactView('contact');
        }
        
        public function execute () {
            $this->view->render();
        }
    }
?>
