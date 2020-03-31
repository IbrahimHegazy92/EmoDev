<?php 

session_start();

if(!isset($_SESSION["email"])){
        header("Location: http://Localhost/assignment2/login.php");
}else{
    echo "<h2>مرحبا</h2>".$_SESSION['email']."<br><br>"; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
    body{text-align: center;
background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);  
        color: #FFF;
        }
   .warning{
        list-style: none;
        text-align: justify;
        display: inline-block;
        color: red;
    }
    
        table{
            display: inline-block;
            border: .5px solid #EEE;
            border-radius: 20px;
            background: rgba(0,0,0,0.1)
        }
        table,table th,table td{
            
            text-align: center;
            padding: 5px;
        }
        table td:first-child{color: red;font-size: 25px}
        table td:last-of-type{color: green;font-size: 25px}
         
        .btn{
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


<?php
    
   if(isset($_SESSION["item-price"]) && $_SESSION["amount"] ){ 
    
        $item_price = $_SESSION["item-price"];
        $item_num = $_SESSION["amount"];
        $total; $net;
    
        // price before discount
        $total  = $item_price * $item_num;
        $discount =1;
    
        // price after discount
        if($total < 1000){
        $discount = $total * (10/100);   
        $net = $total - $discount;
        }
        
        else if($total > 1000){
        $discount = $total * (15/100);
        $net = $total - $discount; 
      } 
   }
    else{
   header("Location: http://Localhost/assignment2/index.php");     
    }
?>
    <table>
      <tr>
        <th>السعر قبل الخصم</th>
        <th>السعر بعد الخصم</th>
      </tr>
      <tr>
        <td><?php echo $total;?></td>
        <td><?php echo $net;  ?></td>
      </tr>
      <tr>
          <td><a class="btn" href="index.php">رجوع</a> </td>
          <td><a class="btn"href="logout.php"> تسجيل الخروج </a> </td>
      </tr>
    </table>        
           
           
            
            
              
</body>
</html>

    

   

