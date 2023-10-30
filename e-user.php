
<?php 
include("config/database.php");
// Get all user
$sql="SELECT * FROM users";
$result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <?php include("include/alert.php") ?>
        <h2>Edit User</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result->num_rows>0){

                


                while ($row = mysqli_fetch_assoc($result)) {

                

                
                ?>
                <tr>
                    <td><?php 
                    echo $row['username'];
                    ?></td>
                    <td><?php 
                    echo date("d-m-Y H:i:A",strtotime($row['created_at']));
                    ?></td>
                    <td>15-05-2023, 10:33am
                        <td>
                            <a href="e-user.php?id=$row['id'];
                    ?>" class="button edit">Edit</a>
                            <a href="" class="button delete">Delete</a>
                        </td>
                    </td>
                </tr>
                <?php }
            }else{
                echo "<tr><td colspan='3'>No Record Found</td></tr>";
            }
            ?>

           
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="add-user.php" class="footerbtn">Add User</a>

            <a href="logout.php" class="footerbtn">Logout</a>
        </div>
    </section>

</body>

</html>