<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>
    <title>home</title>
</head>

<body>

<button type="button" href="add.php">Add New User</button></br>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> 
        <th>from</th> 
        <th>action</th>
    </tr>
    <?php
    while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['for']."</td>";
        echo "<td><button href='edit.php?id=$user_data[id]'>Edit</button>  <button href='delete.php?id=$user_data[id]'>Delete</button></td></tr>";
    }
    ?>
    </table>
