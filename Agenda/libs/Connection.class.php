<?php
class Connection {
    
    var $data = array();
    private $procedure;
    private $connection;
    private $info = array(
        'drive' => 'mysqli', 
        'server' => 'localhost', 
        'database' => 'scrum',
        'user' => 'root',
        'password' => ''
    );
    
    private function getConnection() {
       return new mysqli($this->info['server'],$this->info['user'],$this->info['password'],$this->info['database']);
    }
    
    private function execute($sql)
    {
        $this->connection = $this->getConnection();
        $collection = array();
        
         if($result = $this->connection->query($sql))
         {
             while ($row = $result->fetch_array(MYSQLI_ASSOC)){
               $collection[] = $row;
             }
             $result->close(); 
             $this->connection->next_result();
             $this->data = array();
         }else{
              
              $collection[]['errors'] =  $this->connection->errno;
         }
         
         $this->connection->close();
         return $collection;
    }
    
    public function prepare_procedure($procedure)
    {
      $this->procedure = "CALL ".$procedure . $this->setData($this->data)." ";
    }
    public function execute_procedure()
    {
       return $this->execute($this->procedure);
    }
    private function setData($data = array()){
        $string = "";
        
        if(count($data))
        {
            $string .= "(";
            $count = 0;
            foreach ($data as $key => $value):
                $string .= "'".$value."'"; 
                if($count < count($data)-1)
                {
                    $string .= ",";
                }
                $count++;
            endforeach;
            $string .= ")";
            return $string;
        }else{
            return "()";
        }
    }
}
?>
