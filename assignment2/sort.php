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
    <title>عرض المنتجات</title>
    <style>
    body{text-align: center;
background: rgb(238,174,202);
background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
        color: #FFF;
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
        margin-bottom: 10px;
        }
    table{
        background-color:rgba(0,0,0,.3);
        border-radius: 10px;
        text-align: justify;
        padding: 10px;
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
 
    <div class='result'>
        <table width ='100' height='50'>
          <thead>عرض كل المنتجات</thead>
           <tr>
            <th>الاسم</th>
            <th>السعر</th>
            </tr>       
<?php
if (isset($_SESSION['products'])){
    foreach($_SESSION['products'] as $product => $price ){
                 echo "
                <tr>
                <td> $product </td>
                <td> $price   </td>
                </tr> ";        
    }
}      
?>
        </table>
    </div>
<!-- Sort By Name ascending -->
    <div class='result'>
        <table width ='100' height='50'>
          <thead>ترتيب بالاسم تصاعدى</thead>
           <tr>
            <th>الاسم</th>
            <th>السعر</th>
            </tr>       
<?php
if (isset($_SESSION['products'])){
    
     ksort($_SESSION['products']);
    foreach($_SESSION['products'] as $product => $price ){
                 echo "
                <tr>
                <td> $product </td>
                <td> $price   </td>
                </tr> ";        
    }
}      
?>
        </table>
    </div>
    <!-- Sort By Name descending -->
    <div class='result'>
        <table width ='100' height='50'>
          <thead>ترتيب بالاسم تنازلى</thead>
           <tr>
            <th>الاسم</th>
            <th>السعر</th>
            </tr>       
<?php
if (isset($_SESSION['products'])){
   
     krsort($_SESSION['products']);
    foreach($_SESSION['products'] as $product => $price ){
                 echo "
                <tr>
                <td> $product </td>
                <td> $price   </td>
                </tr> ";        
    }
}      
?>
        </table>
    </div>
   <!-- Sort By price ascending -->
    <div class='result'>
        <table width ='100' height='50'>
          <thead>ترتيب بالسعر تصاعدى</thead>
           <tr>
            <th>الاسم</th>
            <th>السعر</th>
            </tr>       
<?php
if (isset($_SESSION['products'])){
    
     asort($_SESSION['products']);
    foreach($_SESSION['products'] as $product => $price ){
                 echo "
                <tr>
                <td> $product </td>
                <td> $price   </td>
                </tr> ";        
    }
}      
?>
        </table>
    </div>
     <!-- Sort By price ascending -->
    <div class='result'>
        <table width ='100' height='50'>
          <thead>ترتيب بالسعر تنازلى</thead>
           <tr>
            <th>الاسم</th>
            <th>السعر</th>
            </tr>       
<?php
if (isset($_SESSION['products'])){
  
     arsort($_SESSION['products']);
    foreach($_SESSION['products'] as $product => $price ){
                 echo "
                <tr>
                <td> $product </td>
                <td> $price   </td>
                </tr> ";        
    }
}      
?>
        </table>
    </div>
    
  <div>
      <a class="btn" href="index.php">رجوع</a> 
  </div>  
    
    
    
    
</body>
</html>






