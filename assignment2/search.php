 <?php 
session_start();

if(!isset($_SESSION['email'])){
  header("Location: http://Localhost/assignment2/login.php");
}
  else{  
    echo "<h2>مرحبا</h2> ".$_SESSION['email']."<br><br>"; 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>بحث عن منتج</title>
    <style>
    body{text-align: center;
background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        color: #FFF;
        }
    form{
        background-color:rgba(0,0,0,.3);
        border-radius: 10px;
        display: inline-block;
        padding: 20px;
        border: 2px solid #EEE;
    }
    form *{
        display: inline-block;
        margin-bottom: 5px;
        background-color: transparent;
        color: #FFF;
        
    }
    form input{
            border: 0;
            border-bottom: .5px solid #FFF 
        }    
    .warning{
        text-align: justify;
        display: inline-block;
        color: red;
    }
    .btn{
            margin-top: 20px;
           display: inline-block;
           background-color: transparent;
            padding: 2px;
            text-decoration: none;
            border-bottom: 1px solid #EEE;
            border-radius: 5px;
            color:#FFF;
            width: 80px;
            font-size: 12
        }     
        .btn:hover{
            border-top: 1px solid #EEE;
        }
    .result{
            display: inline-block;
        }
    table{
        background-color:rgba(0,0,0,.3);
        border-radius: 10px;
        text-align: justify;
        padding: 10px
        }
        table th{
            border-bottom: .5px solid;
            padding: 3px
        }    
        table td{
            padding: 5px;
        }
     </style>
</head>
<body dir="rtl">
  
    <form  action="" method="post" >
    <label for="item-name">بحث عن منتج</label><br>
    <input type="text" name="item-name" required><br>
    <input type="submit" name="submit" class="btn" value="بحث">
    <a href="index.php" class="btn">رجوع</a>
    </form><br>

      
<?php
    $Pname="";
    $Pprice="";    
    
if (isset($_POST['submit']) && isset($_POST['item-name']) && isset($_SESSION['products'])){
    $Allproducts = $_SESSION['products'];
    $searchWord=$_POST['item-name']; 
    $res = findItem($searchWord,$Allproducts);
    $Pname = $res;
    $Pprice = $Allproducts[$Pname];
}
// Return the index that we searched for
  function findItem($str, $array) {
  foreach ($array as $key => $value) {
     if (strpos($key, $str) !== false) {
        return $key;
     }
  }
  return false;
}
    
?>
    <div class="result">
        <table width ="100" height="50">
           <tr>
            <th>الاسم</th>
            <th>السعر</th>
            </tr>
            <tr>
                <td><?php echo $Pname; ?></td>
                <td><?php echo $Pprice; ?></td>
                
            </tr>
        </table>
    </div>
</body>
</html>






