<?php

class Registry{
    
    private static $instance; //haremos que sea singleton asi que solo podra tener una instancia
    private static $dades=array();
    
    static function getInstance(){
        
        if(is_null(self::$instance))
        {
        self::$instance = new self;  
        }else
        {
        return self::$instance;      
        }

    } 
    
    //array asociativo necesitamos la clave y el valor
    static function set($key, $value){
        
        if (!array_key_exists($key, self::$dades)) //array_key_exists comprueba si existe
        {  
            self::$dades[$key] = $value;  
            return true; //si existe le pasamos true
            
        }else
        {  
            return false; //si existe le pasamos false 
        }     
        
    }


    
    //le pasamos la clave y nos retorna el valor
    static function get($key){
        
        //si existe te retorna
        if (array_key_exists($key, self::$dades)) 
        {              
            return self::$dades[$key]; //si existe le pasamos el valor
        }else 
        {              
            return null;  //ni no existe le pasamos null
        }  
        
    }
        
    
}


