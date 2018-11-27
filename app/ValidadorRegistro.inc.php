<?php
class ValidadorRegistro{
    private $aviso_inicio;
    private $aviso_cierre;
    
    private $nombre;
    private $email;
    private $clave;
    private $error_nombre;
    private $error_email;
    private $error_clave;
    private $error_clave1;
    
    public function __construct($nombre, $email, $clave, $clave1){
        $this -> aviso_inicio = "<br><div class= 'alert alert-danger' role ='alert'>";
        $this -> aviso_cierre = "</div>";

        $this -> nombre = "";
        $this -> email = "";
        $this -> clave ="";
        
        $this -> error_nombre = $this -> validar_nombre($nombre);
        $this -> error_email = $this -> validar_email($email);       
        $this -> error_clave = $this -> validar_clave($clave);
        $this -> error_clave1 = $this -> validar_clave1($clave, $clave1);
    
        if($this -> error_clave === "" && $this -> error_clave1 === ""){
            $this -> clave = $clave;
        }
    }
    

    private function variable_iniciada($variable){
        if(isset($variable) && !empty($variable)){
            return true;
        } else {
            return false;
        }
    }
    private function validar_nombre($nombre){
        if (!$this -> variable_iniciada($nombre)){
            return "Debe de ingresar un nombre de usuario";
        } else {
            $this -> nombre = $nombre;
        }
        if (strlen ($nombre) < 6){
            return "El nombre debe de posser mas de 6 caracteres";
        }
        if (strlen ($nombre) > 24){
            return "El nombre no debe de posser mas de 24 caracteres";
        }
        return "";
    }
    
    private function validar_email($email){
        if(!$this -> variable_iniciada($email)){
            return "Debe de ingresar un correo electronico";
        } else {
            $this -> email = $email;
        }
        return "";
    }
    private function validar_clave($clave){
        if (!$this -> variable_iniciada($clave)){
            return "Debe de ingresar una contraseña";
        }
        return "";
    }
    private function validar_clave1($clave, $clave1){
        if(!$this -> variable_iniciada($clave)){
            return "Falta ingresar una de las contraseñas"; 
        }
        
        if(!$this -> variable_iniciada($clave1)){
            return "Debe de repetir la contraseña";
        }
        if ($clave !== $clave1) {
            return "Las dos contraseñas deben de ser iguales"; 
        }
        return "";
        }
    
        
    public function obtener_nombre() {
            return $this -> nombre;
            
    }
    public function obtener_email() {
        return $this -> email;
        
    }
    public function obtener_clave(){
        return $this -> clave;
    }
    public function obtener_error_email() {
        return $this -> error_email;
        
    } 
    
        
    public function obtener_error_clave() {
        return $this -> error_clave;
        
    }
    
    public function obtener_error_clave1() {
        return $this -> error_clave1;
        
    }
    public function mostrar_nombre() {
        if($this -> nombre !== ""){
            echo 'value = "' . $this -> nombre . '"';
        }
        
    }
    public function mostrar_error_nombre(){
        if($this -> error_nombre !== "" ){
           echo $this -> aviso_inicio . $this -> error_nombre . $this -> aviso_cierre; 
        }
    }
    public function mostrar_email() {
        if($this -> nombre !== ""){
            echo 'value = "' . $this -> email . '"';
        }
    }
    public function mostrar_error_email(){
        if($this -> error_email !== "" ){
           echo $this -> aviso_inicio . $this -> error_email . $this -> aviso_cierre; 
        }
    }
    public function mostrar_error_clave(){
        if($this -> error_clave !== "" ){
           echo $this -> aviso_inicio . $this -> error_clave . $this -> aviso_cierre; 
        }
    }
    public function mostrar_error_clave1(){
        if($this -> error_clave1 !== "" ){
           echo $this -> aviso_inicio . $this -> error_clave1 . $this -> aviso_cierre; 
        }
    }
    public function registro_valido(){
        if($this -> error_nombre === "" &&
                $this -> error_email === "" &&
                $this -> error_clave === "" &&
                $this -> error_clave1 === ""){
            return true;
        } else {
            return false;
        }
    }
    
}
?>
