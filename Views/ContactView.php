<?php
    namespace Views;

    class ContactView {

        private $file_name;
    
        public function __construct ($file_name) {
            $this->file_name = $file_name;
        }

        public function render () {
            include('pages/' . $this->file_name . '.php');
        }
    }
?>
