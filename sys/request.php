<?php

    class Request{
        
        static private $query=array();
        static private $cont;
        static private $action;
        static private $param=array();


        static function retrieve(){
            self::$query =  explode('/',$_SERVER['REQUEST_URI']); //separamos url por barras y metemos en array
            return self::$query;
            
            
        }
        static function getCont(){
        //cogemos controlador priemra palabra array_shift
            //self::$cont = self::$query[2];
            
            if(empty(self::$query[2]))
            {
            self::$cont='CONTROLADOR';   
            return self::$cont;     
            }else
            {
            self::$cont = self::$query[2];   
            return self::$cont;   
            }
            
            
            
        }
        static function getAction(){
        //cogemos accion segunda palabra
            //self::$action = self::$query[3];
            
            if(empty(self::$query[3]))
            {
             self::$action='ACTION';  
            return self::$action;
            }else
            {
            self::$action = self::$query[3];
            return self::$action;
            }
            

            
        }
        
        static function getParams(){
        //cogemos parametros parametro con su valor lo guardamos en array
        //a partir de 4 son valores
        //solo con las barras tienen que ser pares y se tienen que ir guardando en dos arrays diferentes
        $max = count(self::$query);
        $cont=0;
        $cont2=0;
        
        for($cont=4;$cont<$max; $cont++)
        { 
        self::$param[$cont2]=self::$query[$cont];
        $cont2++;   
        }
        
        $cont3=0;
        
        $cont3=count(self::$param);//vemos el tamaño del array
        
        if(($cont3%2)==0)//comprobar que es par
        {
            
        return self::$param;
   
        }else
        {   
        return -1;   
        }
        
 
   
        } 
        

        
        
    }