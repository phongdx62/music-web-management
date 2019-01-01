 <?php 
  if(isset($_SESSION["name"]))
  {
    $name = $_SESSION["name"];

    if(isset($_POST["change_fname"]))
    {
      $fname = addslashes(stripslashes($_POST["fname"]));
     
      if(isset($lname))
      {
        $user = new user();
        $sql = "UPDATE user SET fname = '$fname' WHERE username = '$name'";
        $user->query($sql); 
        $user->disconnect();
  
      }
    }

    if(isset($_POST["change_lname"]))
    {
      $lname = addslashes(stripslashes($_POST["lname"]));
     
      if(isset($lname))
      {
        $user = new user();
        $sql = "UPDATE user SET lname = '$lname' WHERE username = '$name'";
        $user->query($sql); 
        $user->disconnect();
  
      }
    }

    if(isset($_POST["change_address"]))
    {
      $address = addslashes(stripslashes($_POST["address"]));
     
      if(isset($address))
      {
        $user = new user();
        $sql = "UPDATE user SET address = '$address' WHERE username = '$name'";
        $user->query($sql); 
        $user->disconnect();
  
      }
    } 

    if(isset($_POST["change_email"]))
    {
      $email = addslashes(stripslashes($_POST["email"]));
     
      if(isset($email))
      {
        $user = new user();
        $sql = "UPDATE user SET email = '$email' WHERE username = '$name'";
        $user->query($sql); 
        $user->disconnect();
  
      }
    }

    if(isset($_POST["change_pass"]))
    {
      $old_pass = md5(addslashes(stripslashes($_POST["old_pass"])));
      $new_pass = md5(addslashes(stripslashes($_POST["new_pass"])));
      $re_pass = md5(addslashes(stripslashes($_POST["re_pass"])));
     
      if(isset($old_pass) && isset($new_pass) && isset($re_pass))
      {
        $user = new user();
        $sql = "SELECT username, password FROM user WHERE username = '$name' ";
        $user->query($sql);
        $data = $user->fetch_assoc();

        if($old_pass != $data["password"])
        {
          $msg = "<p style='color: red;'>* Bạn nhập sai mật khẩu !</p>";
        }
        else 
        {
          if($new_pass != $re_pass)
          {
            $msg = "<p style='color: red;'>* Mật khẩu nhập lại không đúng !</p>";
          }    
          else
          {
            $sql = "UPDATE user SET password = '$new_pass' WHERE username = '$name'";
            $user->query($sql);
            $msg = "<p style='color: #00CC66;'>Đổi mật khẩu thành công.</p> "; 
          }                  
        }
        $user->disconnect();
      }
    }

    $user = new user();
    $sql = "SELECT fname, lname, username, address, email FROM user WHERE username = '$name'";
    $user->query($sql);
    $data = $user->fetch_assoc();
  }
?>    