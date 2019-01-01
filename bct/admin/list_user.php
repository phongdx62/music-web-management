<?php
    session_start();
    if($_SESSION["level"] == 2)
    {
        include("../models/m_user.php");
        $user = new user();
        require("templates/header.php");
        require("templates/search_ad.php");
        if (isset($_REQUEST['ok'])) 
        {
            $key = addslashes(stripslashes($_GET['key']));
 
            if (empty($key)) 
            {
                echo "<p style= 'color:red;'>* Dữ liệu tìm kiếm không được để trống</p>";
            } 
            else
            {
                $user->m_search_user($key);
            }
                echo"</table>";
            echo"</div>";   
        }
        else
        {
            echo"<div style='height: 40px;'>";
            echo"<a style='color: #FF33FF;' href='send_mail_all.php'>Gửi thư cho tất cả</a>";
            echo"</div>";
            require("templates/table_user.php");      
            $user->m_list_user();                         
                echo"</table>";
            echo"</div>";   
        }
        $user->disconnect();
        require("templates/footer.php"); 
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }	
?>