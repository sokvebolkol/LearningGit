<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Pre final exam</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Battambang" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body class="grey lighten-2">
    <div class="section container" id="add-info">
        <a href="add.php" class="btn-floating orange right">
            <i class="material-icons">add</i>
        </a>
        <br>
        <br>
       <div class="card">
           <div class="card-content">
               <table>
                   <thead>
                       <th>Action</th>
                       <th>ID</th>
                       <th>Name</th>
                       <th>Gender</th>
                       <th>Message</th>
                   </thead>
                   <tbody>
                        <?php 
                            include_once "connection.php";
                            $query = "SELECT * FROM tbl_user ORDER BY user_id ASC";
                            $insert = mysqli_query($conn,$query);

                            foreach($insert as $value):
                        ?>
                        <tr>
                                <td>
                                    <a href="edit.php?id=<?php echo $value['user_id']?>" class="btn-floating btn-small">
                                        <i class="material-icons">create</i>
                                    </a>
                                    <a href="delete.php?id=<?php echo $value['user_id']?>" class="btn-floating red darken-2 btn-small">
                                            <i class="material-icons">delete</i>
                                        </a>
                                </td>
                                <td><?php echo $value['user_id'];?></td>
                                <td><?php echo $value['username'];?></td>
                                <td><?php echo $value['user_gender'];?></td>
                                <td><?php echo $value['user_message'];?></td>
                        </tr>
                            <?php endforeach;?>
                    </tbody>
               </table>
           </div>
       </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>


