<?php
    include './conection.php';
    $query="SELECT* FROM `clients`.`transaction`;";
    $result =mysqli_query($con,$query);
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wClient_idth=device-wClient_idth, initial-scale=1.0">
    <link rel="stylesheet" href="ptstyle.css">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

    <title>performtransiction</title>
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
    <img src="./bg.jpg" alt="" class="bg">
    <section>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>sno</th>
                        <th>sender</th>
                        <th>receiver</th>
                        <th>Transfer amount</th>
                        <th>date_time</th>
                    </tr>
                </thead>
        <?php
          while($rows=mysqli_fetch_assoc($result))
           {  
         ?>
            <tr>
                <td style="color:black; font-size:20px;"><?php echo $rows['sno']; ?></td>
                <td style="color:black; font-size:20px;"><?php echo $rows['sender']; ?></td>
                <td style="color:black; font-size:20px;"><?php echo $rows['receiver']; ?></td>
                <td style="color:black; font-size:20px;"><?php echo $rows['Transfer_amount']; ?></td>
                <td style="color:black; font-size:20px;"><?php echo $rows['date_time']; ?></td>
                 
            </tr>     
        <?php
          }
         ?> 
            </table>
        </div>
    </section>
</body>
</html>