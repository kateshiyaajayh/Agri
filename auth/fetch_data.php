<?php
include_once('db_config.php');
$q = "select * from `registation`";
$user = mysqli_query($con,$q);
?>
<div class="table-responsive">
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>password</th>
            <th>mobile</th>
            <th>Profile Picture</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        <?php
        while($row = mysqli_fetch_assoc($user)){
        ?>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><?php echo $row['mobile'];?></td>
            <td><img src="uploads/profile_picture/<?php echo $row['profile_picture'];?>" width="50" height="50"></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id'];?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id'];?>">Delete</a>
                <a href="view.php?id=<?php echo $row['id'];?>">View</a>
            </td>
        </tr>

        <?php
        }
        ?>

    </tbody>
</table>
</div>