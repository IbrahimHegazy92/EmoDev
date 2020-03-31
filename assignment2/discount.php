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
    <title>حساب الخصم للعميل</title>
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
     </style>
</head>
<body dir="rtl">
  
    <form  action="" method="post" >
    <label for="item-price">سعر المنتج</label><br>
    <input type="text" name="item-price" required><br>
    <label for="amount">العدد</label><br>
    <input type="text" name="amount" required><br>
    <input class="btn" type="submit" name="submit" value="حساب الخصم">
    <a href="index.php" class="btn">رجوع</a>
   
    </form><br>
    
<?php 
 if (isset($_POST['submit'])){
     
     $item_price = $_POST["item-price"];
     $item_num = $_POST["amount"];
     
     if( empty($item_price) || empty($item_price)){
        echo "<p class='warning'>من فضلك ادخل القيمة</p>";
    }elseif(!is_numeric($item_price) || !is_numeric($item_num)){
        echo "<p class='warning'> يجب ادخال القيم بالرقم وليس نص</p> ";
    }
     elseif( $item_price < 0 || $item_num < 0){
         echo "<p class='warning'>السعر او الكمية لا تقبل عدد سالب </p>";
     }
    elseif(!is_null($item_price) && !is_null($item_price)){
     
      $_SESSION['item-price'] = $item_price;      
      $_SESSION['amount'] = $item_num;      
 header("Location: http://Localhost/assignment2/total.php");       
     
      }    
 }
?>
 
   
</body>
</html>






