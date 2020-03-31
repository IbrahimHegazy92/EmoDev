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
    <title>اضافة منتج</title>
    <style>
    body{text-align: center;
background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        color: #FFF;
        }
        .container{
          margin: 0 auto;
            display: inline-block;
        }
        .left{float: left;
        display: inline-block}
        .right{float: right;
        display: inline-block;
        margin-left: 10px}
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
        color: red;
        display: block;
        position: absolute;
        bottom: 190px;
        left:45%
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
        table{
        background-color:rgba(0,0,0,.3);
        border-radius: 10px;
        text-align: justify;
        padding: 10px;
            display: inline-block;
           
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
     <div class="container">
      <div class="right">
    <form  action="" method="post" >
    <label for="item-price">اسم المنتج</label><br>
    <input type="text" name="item-name" required><br>
    <label for="amount">السعر</label><br>
    <input type="text" name="item_price" required><br>
    <input class="btn" type="submit" name="submit" value="اضافة">
    <a href="index.php" class="btn">رجوع</a>
   
    </form>
    </div>
    <div class="left">
    <table>
        
        
        <tbody>
           <tr>
           <th>اسم</th>
           <th>سعر</th>
           </tr> 
        
<?php
    
 if (isset($_POST['submit'])){
     
     $item_name = $_POST["item-name"];
     $item_price = $_POST["item_price"];
     
 if( empty($item_name) || empty($item_price)){
        echo "<p class='warning'>من فضلك ادخل القيمة</p>";
    }elseif(!is_numeric($item_price)){
        echo "<p class='warning'> يجب ادخال القيم بالرقم وليس نص</p> ";
    }
 elseif( $item_price < 0 ){
         echo "<p class='warning'>السعر او الكمية لا تقبل عدد سالب </p>";
     }
     
elseif(!is_null($item_name) && !is_null($item_price)){  
      
    if (isset($_SESSION['products'])){
    
    // new array that has added item 
    $newItem= array();
    $newItem[$item_name]=$item_price;
    $_SESSION['newItem'] = $newItem; 
    $_SESSION['products']+=$_SESSION['newItem'];     
 
//echo "<script>alert('تم اضافة العنصر بنجاح')</script> ";
            
    foreach($_SESSION['products'] as $key => $value){
            echo "
                <tr>
                <td> $key </td>
                <td> $value   </td>
                </tr> ";       
    }   
   }   
  }    
 }
   
?>
 </tbody>
    </table>
  </div>
  </div>
</body>
</html>






