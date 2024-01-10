<?php
    namespace Views;

    class MainView {

        private $file_name;
        private $header;
        private $footer;
    
        public function __construct ($file_name, $header = 'header', $footer = 'footer') {
            
            $this->file_name = $file_name;
            $this->header    = $header;
            $this->footer    = $footer;
        }

        public function render ($arr = []) {
            include('pages/templates/' . $this->header    . '.php');
            include('pages/'           . $this->file_name . '.php');
            include('pages/templates/' . $this->footer    . '.php');
        }
    }
?>
