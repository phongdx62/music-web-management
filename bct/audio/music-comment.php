
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    
    <!-- add styles and scripts -->
    <link href="audio/demo.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="http://www.thuthuatweb.net/wp-content/themes/HostingSite/favicon.ico" type="image/x-ico"/>
    <script type="text/javascript" src="audio/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="audio/js/jquery-ui-1.8.21.custom.min.js"></script>
    <script type="text/javascript" src="audio/js/main.js"></script>
</head>
<body>

    <div class="example">

        <div class="player">
            <div class="pl"></div>
            <div class="title"></div>
            <div class="artist"></div>
            <div class="cover"></div>
            <div class="controls">
                <div class="play"></div>
                <div class="pause"></div>
                <div class="rew"></div>
                <div class="fwd"></div>
            </div>
            <div class="volume"></div>
            <div class="tracker"></div>
        </div>
        <ul class="playlist hidden">
            <?php  
                if(!empty($_GET['id']) && isset($_GET['id']))
                {
                    $id = addslashes($_GET['id']);

                    $sql = "SELECT id, song, singer, img, mp3 FROM music WHERE id = '". $id ."'";
                    $music->query($sql);
                    $data = $music->fetch_assoc();
                    $singer = "<p style='color: red;'>$data[singer] </p>";
                    $song = "<p style='color: red;'>$data[song] </p>";
                }        
            ?>
            <li audiourl="../public/core/<?php echo $data[mp3]; ?>" cover="../public/core/<?php echo $data[img]; ?>" artist="<?php echo $data['singer']; ?>"><?php echo $data['song']; ?></li>       
        </ul>

    </div>
    
<div class="footer-bar">
    <span class="article-wrapper">
        <span class="article-label">Xem Bài Viết: </span>
        <span class="article-link"><a href="http://www.thuthuatweb.net/javacript/html5-audio-player-voi-playlist-don-gian-bang-jquery.html">HTML5 Audio player với playlist đơn giản bằng jQuery</a></span>
    </span>
    
</div>
<?php  
    $conn = mysqli_connect("localhost", "root", "", "quan_ly_web_nhac_") or die ("error");
    mysqli_set_charset($conn,"utf8");

    if(isset($_SESSION["name"]) && isset($_GET['id']))
    {
        $id = $_GET["id"];
        $name = $_SESSION["name"];
        if(isset($_REQUEST["cm"]))
        {
            $msg = $_POST["content"];
            $sql = "SELECT userid, username FROM users  
                    WHERE username = '$name' ";
            
            $kq = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($kq);
            $uid = $data["userid"];

            $sql = "INSERT INTO comment (userid, msg, id) VALUES ('$uid', '$msg', '$id')";
            $kq = mysqli_query($conn, $sql);
        }       

?>
    

        <link rel="stylesheet" href="public/core/css/style-comment.css">

            <fieldset style="width: 500px; margin-left: 20px;">
                <legend>Binh luan</legend>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td></td>
                            <td><textarea class="com-mess" name="content"  cols="30" rows="10" ></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><input class="com-submit" type="submit" value="Gui" name="cm"></td>
                        </tr>
                    </table>
                </form>
            </fieldset>

    

    <?php
        $sql = "SELECT msg FROM comment cm
                INNER JOIN users us
                ON cm.userid = us.userid
                WHERE us.username = '$name'";
        $kq = mysqli_query($conn, $sql);
        
        while ($data = mysqli_fetch_assoc($kq)) 
        {
    ?>
        <fieldset style="width: 500px; margin-left: 20px; padding: 0 0 8px 2px;">
            <legend></legend>
            <ul>            
                <li>
                    <img src="./public/core/image/loveuself.jpg" width="52" >
                    <div>
                        <b><?php echo $name ?></b><small>&nbsp; 30/12/2018 &nbsp;<a href="#">tra loi</a></small>
                        <p><?php echo $data['msg'] ?></p>
                    </div>
                </li>
            </ul>
        </fieldset>
<?php
        }
    }
    else    
    {
?>  
        <fieldset style="width: 500px; margin-left: 20px;">
                <legend>Binh luan</legend>
                
                    <table>
                        <tr>
                            <td></td>
                            <td><textarea  cols="30" rows="10" ></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td><button name="ok">Gui</button></td>
                        </tr>
                    </table>
                
            </fieldset> 
<?php               
    }
    if(isset($_REQUEST["ok"]))
    {
        echo "Ban can dang nhap de thuc hien chuc nang binh luan";
    }
?>