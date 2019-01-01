<?php 
    session_start();
    if($_SESSION["level"] == 2)
    {
        include("../models/m_singer.php");
        $singer = new singer();
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
                $singer->m_search_singer($key);      
            }
                echo"</table>";
            echo"</div>";
        }
        else
        {
            echo"<div style='height: 40px;'>";
                echo"<a style='color: #FF33FF;' href='add_list_singer.php'>Thêm ca sĩ</a>";
            echo"</div>";
            require("templates/table_singer.php");   
            $singer->m_list_singer();
                echo"</table>";
            echo"</div>";   
        }
        $singer->disconnect();
    	require("templates/footer.php");   
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }    
?>