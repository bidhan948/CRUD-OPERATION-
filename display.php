<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <title>स्टाफ रिपोर्ट </title>
</head>

<body>
    <h2>स्टाफ रिपोर्ट को सुची </h2>
    <table class="table mt-5 table-light" style="width:80%; margin-left:170px;  ">
        <thead>
            <tr>
                <th scope="col">सी.नं</th>
                <th scope="col">नाम</th>
                <th scope="col">सम्पर्क नम्बर</th>
                <th scope="col">ईमेल</th>
                <th scope="col">सेक्टर</th>
                <th scope="col">अपरेसन </th>
                <th scope="col"> </th>


 
            </tr>
        </thead>
        <tbody>
            <?php
            

            include 'dbconn.php';

            $selectquery = "select * from staffreport";
            $query = mysqli_query($con,$selectquery);

            while($result = mysqli_fetch_assoc($query))
            {


            ?>
            <tr>
                <th scope="row"><?php echo $result['Cid']   ?>  </th>
                <td><?php echo $result['name']   ?>  </td>
                <td><?php echo $result['contact_no']   ?>  </td>
                <td><?php echo $result['Email']   ?>  </td>
                <td><?php echo $result['sector']   ?>  </td>
                <td> <a href="update.php?id=<?php echo $result['Cid'] ?>"><i class="far fa-edit"></i> </a></td>
                <td><a href="delete.php?id=<?php echo $result['Cid']   ?>"><i class="fas fa-trash-alt"></i> </a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>