<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Admin system</title>
    <!-- <?php require('style.css'); ?> -->
</head>

<body>
    <div class="row">


        <div class="col-md-10">
            <h2>टि-वान ट्रेड विराटनगर, मुनालपथ </h2>
        </div>
        <div class="col-md-2">
            <button class="btn btn-success" style="margin-top:10px;  "><a href=display.php style="  text-decoration: none; color:white"> डाटा हेर्नुहोस् </a></button>
        </div>
    </div>
    <div class="container" style=" margin-left: 32%;">
        <div class="container-fluid">
            <form action="" method="POST">
                <?php

                include 'dbconn.php';
                $id = $_GET['id'];

                $selectquery = " select * from staffreport where Cid = $id";
                $query = mysqli_query($con, $selectquery);
                $result = mysqli_fetch_assoc($query);


                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $contact = $_POST['contact'];
                    $email = $_POST['email'];
                    $sector = $_POST['sector'];

                    $updatequery = " Update staffreport set Cid=$id, name='$name' , contact_no='$contact', Email='$email', sector='$sector' where Cid=$id ";

                    $query = mysqli_query($con, $updatequery);

                    if ($query) {
                ?>
                        <script>
                            alert('अपडेट भयो');
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            alert('अपडेट भएन ');
                        </script>
                <?php
                    }
                }



                ?>
                <div class="form-group" style="margin-left: 50px;">
                    <label>पुरा नाम</label>
                    <input type="text" name="name" placeholder="यहाँ नाम लेख्नुहोस " value="<?php echo $result['name']   ?>">
                    <label>सम्पर्क नं </label>
                    <input type="text" name="contact" placeholder="फोन नम्बर यहाँ लेख्नुहोस" value="<?php echo $result['contact_no']   ?>">
                    <label>ईमेल </label>
                    <input type="text" name="email" placeholder="यहाँ ईमेल लेख्नुहोस " value="<?php echo $result['Email']   ?>">
                    <label>सेक्टर </label>
                    <input type="text" name="sector" placeholder="यहाँ सेक्टर लेख्नुहोस " value="<?php echo $result['sector']   ?>">
                </div>
                <input type="submit" name="submit" value="अपडेट गर्नुहोस " id="btn" style="  margin-left: 150px; width:auto;">
            </form>

        </div>
    </div>
</body>

</html>