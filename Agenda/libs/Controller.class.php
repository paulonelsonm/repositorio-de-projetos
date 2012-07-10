<?php
class Controller {
    
    private $smarty;
    
    var $uses    = array();
    var $models  = array();
    var $inputs  = array();
    var $dir_css;
    var $dir_img;
    var $dir_js;
    var $project;
    var $server;
    var $session ;
    var $name ;
    
    const TYPE_MESSAGE_ERRO    = 1;
    const TYPE_MESSAGE_SUCESSO = 1;
    const TYPE_MESSAGE_ATENCAO = 1;
    
    public function __construct() {
         
        $this->project = 'Agenda/';
        
        $this->dir_css = 'http://'.$_SERVER['SERVER_NAME'].'/'.$this->project.'app/files/css/';
        $this->dir_img = 'http://'.$_SERVER['SERVER_NAME'].'/'.$this->project.'app/files/img/';
        $this->dir_js  = 'http://'.$_SERVER['SERVER_NAME'].'/'.$this->project.'app/files/js/';
        $this->server  = 'http://'.$_SERVER['SERVER_NAME'].'/'.$this->project;
        
        if(!empty($this->models))
        {
            $this->usesModel($this->models);    
        }       
        $this->smartyInfo();
        $this->parse();
        
    }
    private function parse()
    {
	if(!empty ($_REQUEST))
	{
	    foreach($_REQUEST as $key => $value){
		$this->inputs[$key] = $value;
	    }
	}
    }
    
    public function smartyInfo()
    {
        
        $this->smarty = new SmartyBC();
        
        $this->smarty->template_dir = APP . DS . 'view' . DS .$this->name;
        $this->smarty->compile_dir  = APP . DS . 'files' . DS .'cache_view';
        $this->smarty->assign('img'   , $this->dir_img );
        $this->smarty->assign('css'   , $this->dir_css );
        $this->smarty->assign('js'    , $this->dir_js  );
        $this->smarty->assign('server', $this->server  );
        
    }
    
    function assign($name,$value)
    {
        $this->smarty->assign($name,$value);
    }
    function display($template)
    {
        $this->smarty->display($template);
    }
    
    function getTemplate($template)
    {
        return $this->smarty->fetch($template);
    }
    
    private function usesModel($models = array())
    {
        try {
            foreach ($models as $key => $value) {
                 
                    if(file_exists(APP . DS . 'model' . DS . 'Model'.$value . '.php'))
                    {
                        $class = 'Model'.$value;
                        $this->models[$value] = new $class;
                    }else{
                        echo 'Model '.$value.' Não Existente';
                    }
            }
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    function upload($files = array())
    {
        if(is_array($files))
        {
            $type_image = explode('/',$files['type']);
            if($type_image[0] == 'image')
            {
                move_uploaded_file( $files['tmp_name'], IMG . DS . $files['name']);
            }else{
                move_uploaded_file( $files['tmp_name'], FILES . DS . $files['name'] );
            }
        }   
    }
    public function __set($name, $value) {
        $this->models[$name] = $value;
    }
    public function __get($name) {
        if(array_key_exists($name, $this->models))
        {
            return $this->models[$name];
        }
            return null;
    }
    
    public function redirect($url){
        @header('location:' . $this->server . $url);
    }
    
    public function getSession()
    {
        $this->session = Session::getInstance();
    }
    
    public function setErroPage($message)
    {
	 $this->assign('message', '<p class="ui-form-errors">'.$message.'</p>');
    }
    
    public function dateFormat($str_date)
    {
         $date = date_parse_from_format('d/m/Y',$str_date);
         
         if($date['warning_count'] > 0 || $date['error_count'] > 0 )
         {
              return false;
         }else{
              return true;
         }
    }
    
    public function obrigatorios($obrigatorios = array())
    {
         $op = true;
         
         foreach($obrigatorios as $key => $value):
              
              if(empty ($_POST[$value]) || $value == "")
              {
                   $op = false;
              }
              
         endforeach;
         
         return $op;
    }
    
    public function validaUsuario()
    {
         $this->getSession();
         
         if(empty ($this->session->usuario))
         {
              $this->redirect('usuario/logout/');
         }
    }
    
    public function removespecialcharsarray($post = array()){         
         
         foreach($post as $key => $v):
               $post[$key] = str_replace(array(';','&','#','amp39','amp60','amp62'),'', htmlspecialchars(strip_tags($_POST[$key]),ENT_QUOTES));
         endforeach;
         
         return $post;
    }
    
    public function writejson($ar = array()){
        
        header("Content-Type: text/html; charset=iso-8859-1");
        echo json_encode($ar);
    }
}
?>