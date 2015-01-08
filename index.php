<?php
    //first phase
    ini_set('display_errors','on');
    include 'constants.php';//meter los defines del helper
    require 'sys/helper.php';

    
    //COMPROBACIONES REGISTRY
    $conf = Registry::getInstance(); //hay que hacerlo antes de iniciar el core
    
    if(Registry::set('coche', 'rojo')==true)
    {
    echo"CREADO";
    }else
    {
      echo"YA EXISTE";
    }
    
    echo"<br><br>";
    
    if(Registry::set('coche', 'rojo')==true)
    {
    echo"CREADO";
    }else
    {
      echo"YA EXISTE";
    }
    
    echo"<br><br>";

    
    if(Registry::get('coche')!=null)
    {
    echo Registry::get('coche');
    }else
    {
    echo "NULL";
    }
    
    echo"<br><br>";
    if(Registry::get('moto')!=null)
    {
    echo Registry::get('coche');
    }else
    {
    echo "NULL";
    }
    

    
    echo"<br><br>";
    

    Core::init();
    
