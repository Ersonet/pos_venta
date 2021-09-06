<?php
spl_autoload_register(function($class){
	if (file_exists("Config/APP/".$class.".php")) {
		require_once "Config/APP/".$class.".php";
	}
})

?>