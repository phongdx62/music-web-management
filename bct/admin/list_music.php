<?php 
    session_start();
    if($_SESSION["level"] == 2)
    {
        include("../models/m_music.php");
        $music = new music();
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
                $music->m_search_music($key);
            }
                echo"</table>";
            echo"</div>";
        }
        else
        {
            echo"<div style='height: 40px;'>";
                echo"<a style='color: #FF33FF;' href='add_list_music.php'>Thêm bài hát</a>";
            echo"</div>";
            require("templates/table_music.php");
            $music->m_list_music();            
                echo"</table>";
            echo"</div>";   
        }
        $music->disconnect();    
        require("templates/footer.php");   
    }
    else
    {
        ob_start(); 
        header('Location: ../index.php');
        ob_end_flush(); 
    }    
?>