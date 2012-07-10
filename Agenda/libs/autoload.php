<?php
class AutoLoad{
    public function __construct() {
        spl_autoload_register(array($this,'loader'));
    }
    private function loader($class)
    {
        if(substr($class, 0,5) == 'Model')
        {
            if(file_exists(ROOT . DS . 'app' . DS . 'model' . DS . $class . '.php'))
            {
                include ROOT . DS . 'app' . DS . 'model' . DS . $class . '.php';
            }
        }elseif(substr($class, 0,10) == 'Controller'){
            if($class == 'Controller')
            {
                include_once ROOT . DS . 'libs' . DS . $class . '.class.php';
            }else{
                if(file_exists(ROOT . DS . 'app' . DS . 'controller' . DS . $class . '.php'))
                {
                    include_once ROOT . DS . 'app' . DS . 'controller' . DS . $class . '.php';   
                }
            }
        }else{
            if(file_exists(ROOT . DS . 'libs' . DS . $class . '.class.php'))
            {
                include_once ROOT . DS . 'libs' . DS . $class . '.class.php';
            }
        }
    }
}
new AutoLoad();
?>
