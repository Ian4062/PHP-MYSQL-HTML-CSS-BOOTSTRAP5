<?php include "db_con.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Pure PHP MYSQL App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</head>
<style>
    button {
        background-color: skyblue;
    }
    h1 {
        text-align: center;
    }
    .container-fluid {
        margin: 15px;
        border: 1px solid black;
        width: 300px    ;
    }
</style>
<body>
    <h1>User Management System</h1>
    <div class="container-fluid">
        <h4>Add New User</h4>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="username">Full Name</label><br>
                <input type="text" name="fullname" placeholder="Enter Full Name">
            </div>
            <div class="mb-3">
                <label for="email">Email Address</label><br>
                <input type="text" name="email" placeholder="Enter Email Address">
            </div>
            <div class="btn-submit mb-3" >
                <button name="Submit">Submit</button>
            </div>
        </form>
    </div>
    <br>
    <br>
    <thead class="table-border">
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Joined</th>
        <th>Action</th>
    </thead>

    <?php
    if (isset($_POST['fullname'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];

    $query = $conn->query("INSERT INTO users (name, email)VALUES('$fullname', '$email')");
    }
    ?>
</body>
</html>
