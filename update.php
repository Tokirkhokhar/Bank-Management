<?php
 
    include './conection.php';
    $Client_ids = $_GET['Client_id'];
    $query="SELECT* FROM `clients`.`clients` where Client_id=$Client_ids;";
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
                        <th>Client_id</th>
                        <th>name</th>
                        <th>E-mail</th>
                        <th>Bank Balance</th>
  
                    </tr>
                </thead>
                <?php
                  $rows=mysqli_fetch_assoc($result);
                  {
                ?>
                <tr>
                    <td style="color:black; font-size:20px;"><?php echo $rows['Client_id']; ?></td>
                    <td style="color:black; font-size:20px;"><?php echo $rows['Name']; ?></td>
                    <td style="color:black; font-size:20px;"><?php echo $rows['E-mail']; ?></td>
                    <td style="color:black; font-size:20px;"><?php echo $rows['Bank Balance']; ?></td>
                    
                </tr>     
            <?php
              }
             ?> 
            </table>
            <br><br><br>
            <form action="" method="post">
                <label for="to">Transfer To:</label>
                <select id="to" name="to" class="form-control" required>
                    <option value="" disabled selected>Choose</option>
                    <?php
                    // include 'config.php';
                    $sid = $_REQUEST['Client_id'];
                    $sql = "SELECT* FROM `clients`.`clients` where Client_id!=$sid";
                    $result =mysqli_query($con,$sql);
                    if (!$result) {
                        echo "Error " . $sql . "<br>" . mysqli_error($con);
                    }
                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                        <option class="table" value="<?php echo $rows['Client_id']; ?>">

                            <?php echo $rows['Name']; ?> (Balance:
                            <?php echo $rows['Bank Balance']; ?> )

                        </option>
                     <?php
                     }
                    ?>
                    
            </div>
            </select>
            <br>
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
            <div class="text-center">
                <button class="btn mt-3 waves-effect waves-dark" onclick="doalert();" style="background-color:rgb(219, 125, 125); " name="submit" type="submit" id="submit"  >Transfer</button>
            </div>
            <br>
        </form>
      </div>
    </section>

</body>
<script>
    function doalert() {
        alert("Your transection is successfully Done!!") 
    }
</script>
</html>

<?php

 include './conection.php';
  if($_POST['submit']){
      echo "yes";
  }
  else{
      echo "no";
  }
 if (isset($_POST['submit'])) {
    echo "yes";
    $from = $_GET['Client_id'];
 
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT*  from `clients`.`clients` where Client_id=$from";
    $query = mysqli_query($con, $sql);
    if($sql){
        echo "false";
    }
    else{
        echo "false";
    }
    $sql1 = mysqli_fetch_array($query); // returns array from which the amount is to be transferred.
  
    // check input of negative value by user
    if (($amount) < 0) {
        echo '<script>';
        echo ' alert("Please enter correct amount.")';  // showing an alert box.
        echo '</script>';
    }

    // check insufficient balance.
    else if ($amount > $sql1['Bank Balance']) {
        echo '<script>';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }

    // constraint to check zero values
    else if ($amount == 0) {

        echo "<script>";
        echo "alert('Oops! Zero value cannot be transferred')";
        echo "</script>";
    }else {
        $sql = "SELECT * from `clients`.`clients` where Client_id=$to";
        $query = mysqli_query($con, $sql);
        $sql2 = mysqli_fetch_array($query);

        $sender = $sql1['Name'];
        $receiver = $sql2['Name'];

        // deducting amount from sender's account
        $newbalance = $sql1['Bank Balance'] - $amount;
        $sql = "UPDATE clients set Bank Balance=$newbalance where Client_id=$from";
        mysqli_query($con, $sql);

        // adding amount to reciever's account
        $newbalance = $sql2['Bank Balance'] + $amount;
        $sql = "UPDATE clients set Bank Balanc e=$newbalance where Client_id=$to";
        mysqli_query($con, $sql);


        $sql = "INSERT INTO transaction(`sender`, `receiver`, ` Bank Balanc `) VALUES ('$sender','$receiver','$amount')";
   
        $query = $con->query($sql);

        if ($query) {
            echo "<script> alert('Transaction Successful !!');
                                     window.location='transactionhistory.php';
                           </script>";
        }

        $newbalance = 0;
        $amount = 0;
    }
}

?>
