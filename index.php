<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My School</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>List of Student</h2>
        <a class="btn btn-primary" href="/myschool/create.php" role="button">New Student</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Create at</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $servername="localhost";
                $username="root";
                $password="";
                $database="myschool";

                //create connection
                $connection = new mysqli($servername, $username, $password, $database);


                //cheak connection
                if($connection-> connect_error){
                    die("Connection failed: ".$connection->connect_error);

                }

                //read all row database table
                $sql= "SELECT * FROM student";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid Query: ".$connection->error);

                }

                // read data of each row

                while ($row = $result->fetch_assoc()){
                    echo"
                    <tr>
                    <td>$row[id]</td>
                    <td>$row[name]</td>
                    <td>$row[email]</td>
                    <td>$row[phone]</td>
                    <td>$row[address]</td>
                    <td>$row[created_at]</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href= '/myschool/edit.php?id=$row[id]'> Edit</a>
                        <a class='btn btn-danger btn-sm' href= '/myschool/delete.php?id=$row[id]'> Delete</a>
                    </td>
                </tr>

                    ";
                }
                
                ?>



                
            </tbody>
        </table>

    </div>

    
</body>
</html>