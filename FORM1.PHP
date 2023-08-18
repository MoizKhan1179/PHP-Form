<?php 

include('connection.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h1>Form Validation</h1>
    <form action="FORM1.php" class="form-group" method="post">
    <div class="container">
        
        <label for="ID">ID</label>
        <input type="number" name="ID" class="form-control">
        <br>
        <label for="name">Name</label>
        <input type="text" name="Name" class="form-control">
        <br>
        <br>
        <label for="age">Age</label>
        <input type="number" name="Age" class="form-control">
        <br>      
        <br>
        <label for="gender">Gender</label>
        <input type="text" name="Gender" class="form-control">
        <br>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">submit</button>



        
    </form>


    <?php 
    
    if(isset($_POST['submit'])){
           
        $ID = $_POST ['ID'];
        $Name = $_POST ['Name'];
        $Age = $_POST ['Age'];
        $Gender = $_POST ['Gender'];


        $query = "INSERT INTO `stdinfo`(`ID`,`Name`, `Age`, `Gender`) VALUES ('$ID','$Name', '$Age','$Gender')";

        $result = mysqli_query($conn, $query);



    }
    
    ?>

    </div>

</body>
</html>