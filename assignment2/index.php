 <?php 

session_start();
// add all site products to session
$_SESSION['products'] = array("tshirt"=>200 , "shirt"=>80 ,"pantalon"=>220 ,"shoes"=>120 ,"short"=>90 , "jacket"=>60 ,"glasses"=>80 , "sunglasses"=>100);
/////////////////////////////////////////////////////////////////
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
    <title>لوحة تحكم العميل</title>
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
        padding: 10px;
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
            margin-top: 5px;
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
    <a href="discount.php" class="btn">حساب الخصم</a>
    <a href="search.php" class="btn">بحث</a>
    <a href="add.php" class="btn">اضافة منتج</a>
    <a href="delete.php" class="btn">حذف منتج</a>
    <a href="update.php" class="btn">تعديل منتج</a>
    <a href="sort.php" class="btn">عرض المنتجات</a>
    <a href="logout.php" class="btn">تسجيل الخروج</a>
   
    </form><br>
    
 
   
</body>
</html>






