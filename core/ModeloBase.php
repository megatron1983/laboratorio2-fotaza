<?php
class ModeloBase extends EntidadBase{
    private $table;
        
    public function __construct($table) {
        $this->table=(string) $table;
        parent::__construct($table);
    }

    public function ejecutarSql($query){
        $query=$this->db()->query($query);
        if($query==true){
            if($query->num_rows>1){
                while($row = $query->fetch_object()) {
                    $resultSet[]=$row;
                }
            }elseif($query->num_rows==1){
                if($row = $query->fetch_object()) {
                    $resultSet=$row;
                }
            }else{
                $resultSet=true;
            }
        }else{
            $resultSet=false;
        }
        
        return $resultSet;
    }
    
    //Aqui podemos montarnos metodos para los modelos de consulta
    
}
?>


