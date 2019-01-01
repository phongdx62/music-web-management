<?php 
	session_start();
	class C_register 
	{
    	public function page_register()
    	{
        	//model
        	$err = array();		
			$err["register"] = $err["re_pass"] = NULL;
	        include("models/m_register.php");
	        $m_register = new M_register();
	        $m_register->register();
	        if(isset($_SESSION['username'])){
	            header("Location: index.php");
	        }
	        //view
	        include("views/register.php");
    	}
	}			 		
?>
