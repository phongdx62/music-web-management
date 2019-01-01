<?php 
    session_start();
    if($_SESSION["level"] == 2)
    {
        include("../models/m_musician.php");
        $musician = new musician();
        require("templates/header.php");
        require("templates/search_ad.php");
        if (isset($_REQUEST['ok'])) 
        {
            $key = addslashes(stripslashes($_GET['key']));
 
            if (empty($key)) {
                echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
            } 
            else
            {       
                $musician->m_search_musician($key);      
            }
                echo"</table>";
            echo"</div>";
        }
        else
        {
            echo"<div style='height: 40px;'>";
                echo"<a style='color: #FF33FF;' href='add_list_musician.php'>Thêm nhạc sĩ</a>";
            echo"</div>";
            require("templates/table_musician.php");   
            $musician->m_list_musician();
                echo"</table>";
            echo"</div>";   
        }
        $musician->disconnect();
    	require("templates/footer.php");   
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }    
?>