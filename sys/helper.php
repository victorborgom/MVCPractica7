<?php
	// if could be in another file
	//now the section for autoloading classes
	//first of all nullify previous autoload
	spl_autoload_register(null, false);

	spl_autoload_register('KAutoloader::Sysloader');
        spl_autoload_register('KAutoloader::ContLoader');
        spl_autoload_register('KAutoloader::ModLoader');
        spl_autoload_register('KAutoloader::TplLoader');
        spl_autoload_register('KAutoloader::ViewLoader');
	//this class helps in class autoload
	class KAutoloader{
		static function SysLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'sys' .DS. $Filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}
		static function ContLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app' .DS. 'controllers'. $Filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}		
                static function ModLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app' .DS. 'models'. $Filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}
                
                static function TplLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app' .DS. 'tpl'. $Filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}		
                static function ViewLoader($class){
			$Filename = strtolower($class) . '.php';
			$file =ROOT.'app' .DS. 'views'. $Filename;
			if (!file_exists($file))
			{
				return false;
			}
			include $file;
		}


		}
		
            class Coder{

                static function code($var){
                    echo '<pre>'.$var.'</pre>';
                    }
                static function code_var($var){
                            echo '<pre>'.var_dump($var).'</pre>';
                    }
            }


	




