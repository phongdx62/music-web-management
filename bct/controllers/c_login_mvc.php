<?php 
	class C_login 
	{
    	public function page_login()
    	{
        	//model
	        include("models/m_login.php");
	        $m_login = new M_login();
	        $m_login->login();
	        //view
	        include("views/login.php");
    	}
	}			 		
?>
