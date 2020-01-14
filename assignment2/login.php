<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول</title>
<style>
    body{text-align: center;
 background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        color: #FFF
    }
    form{
       
        background-color:rgba(0, 0, 0,0.1);
        border-radius: 25px;
        display: inline-block;
        padding: 20px;
    }
    form *{
        margin-bottom: 15px;
        border-radius: 5px;
        border: 0;
        padding: 5px;  
        background-color: transparent;
        color: #FFF;
        border-bottom: .5px solid #EEE
    }
    .btn:hover{
            border-top: 1px solid #EEE;
        }
    .warning{
        list-style: none;
        text-align: right;
        display: inline-block;
        color: red;
        font-size: 15px;
        background: #F00;
        color: #FFF;
        padding: 10px;
        border-radius: 10px;
        
    }
   
</style>    
</head>
<body dir="rtl">
   
    <div class="login">
    <h1>مرحبا</h1>
   <form method="post" name="frmLogin" action="">
      
        <input type="email" name="email" placeholder="البريد الالكترونى" required> <br>
        <input type="password" name="password" placeholder="كلمة المرور" value="12@#asWE1e2" required><br>
        <input type="submit"  class="btn"name="submit" value="تسجيل الدخول">
    </form>    
    </div>
    
    <?php
    
    if (isset($_POST['submit'])){
        
    $mail = $_POST['email'];
    $password = $_POST['password'];
    
    // Validate password strength
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $chk_mail = false;
    $chk_pass = false;
    
    if (empty($mail) || empty($password)){
        echo "<p class='warning'> Please Enter data</p>";
        return false;
    }
elseif (!empty($mail) && !empty($password)){
        
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
    }else{ $chk_mail = true;}
            
if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
    echo '<ul class="warning">
     <li>كلمة المرور يجب ان تكون 8 احرف على الاقل<li> 
     <li>يجب ان تحتوى على حروف كبيرة , واحد على الاقل<li>
     <li>يجب ان تحتوى على رقم و رمز خاص<li>
     </ul>';
    }
    else{$chk_pass = true;}
    
   }
        if($chk_mail && $chk_pass)
        {
            $_SESSION['email'] = $mail;
            header("Location: http://Localhost/assignment2/index.php");
        }

}
   
   

    
?>
    
    
</body>
</html>