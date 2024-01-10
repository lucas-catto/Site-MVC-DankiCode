<?php

    class Application {
        
        public function execute () {
            
            $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'Home';

            $url = ucfirst($url);

            $url .= 'Controller';
            
            if (file_exists('Controllers/' . $url . '.php')) {

                echo "Loading class: ". $url;

                $class_name = 'Controllers\\' . $url;

                $controller = new $class_name;
                $controller->execute();
            }
            else {
                die("This Controller doesn't exists.");
            }
        }
    }
?>
