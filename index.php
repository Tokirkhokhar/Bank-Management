<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

    <title>Basic Banking site</title>
</head>
<body>
    <!-- Nav bar -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
            <a href="#" class="navbar-brand">The Spark Foundation Bank</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="performtransiction.php" class="nav-link">Transiction</a></li>
                <li class="nav-item"><a href="transactionhistory.php" class="nav-link">Tansformation History</a></li>
            </ul>
            </div>
        </nav>
    <!-- /Nav bar -->
    <!-- background -->
    <img src="./bg.jpg" alt="" class="bg">
    <!-- /background -->
  
   <div class="main">
     <div class="container1">
         <div class="card">
             <div class="content">
             <img src="./rpslogo.png" alt="" class="logo1" >
             <a href="performtransiction.php"><button class="btn" ><b style="color: rgb(0, 0, 0); font-size: 20px;">perfom Transiction </b></button></a>
             </div>
         </div>
     </div>
     <div class="container1">
         <div class="card">
             <div class="content">
                 <h2>Welcome To TSF Bank!</h2>
                 <img src="./banklogo1.png" alt="" class="logo">
             </div>
         </div>
     </div>
     <div class="container1">
         <div class="card">
             <div class="content">
                <img src="./logo2.png" alt="" class="logo2" >
                <button class="btn button"><b style="color: rgb(12, 12, 12); font-size: 20px;"> <a href="transactionhistory.php"> Transiction History </b></button></a>
             </div>
         </div>
     </div>
    </div>
   </body>
</html>