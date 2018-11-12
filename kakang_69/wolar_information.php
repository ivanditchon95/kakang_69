<!DOCTYPE html>
<html>
<head>
	<title>Wolar</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css"/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container-fluid">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
                <h1><strong>WELCOME TO ADMINISTRATION AREA</strong></h1>
                <label for="logout" class="u-pull-right"><a href="logout.php" style="text-decoration: none;">Logout</a></label>
                <a href="wolar_application_form.html"><button class="btn btn-primary">Wolar registration</button></a>
                <a href="wolar_information.php"><button class="btn btn-primary">Wolar informations</button></a>
                <a href="reports.php"><button class="btn btn-primary">Reports</button></a>
                <a href="my_account.php"><button class="btn btn-primary">My account</button></a>
            </div>
            <div class="row" style="margin-top: 40px;">
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM wolar_application";
                $query = mysqli_query($con, $sql);
                $numRows = mysqli_num_rows($query); ?>
                <table class="table table-striped" border="1">
                    <tr>
                        <th style="background-color: #7fefca;">Name</th>
                        <th style="background-color: #7fefca;">Nickname</th>
                        <th style="background-color: #7fefca;">Civil status</th>
                        <th style="background-color: #7fefca;">Gender</th>
                        <th style="background-color: #7fefca;">Age</th>
                        <th style="background-color: #7fefca;">Tribe</th>
                        <th style="background-color: #7fefca;">Action</th>
                    </tr>
                <?php   while($row = mysqli_fetch_array($query)){ ?>
                            <tr>
                                <td><?php echo $row[1] ?></td>
                                <td><?php echo $row[2] ?></td>
                                <td><?php echo $row[3] ?></td>
                                <td><?php echo $row[4] ?></td>
                                <td><?php echo $row[5] ?></td>
                                <td><?php echo $row[6] ?></td>
                                <td>
                                    <a href="view_application_details.php?id=<?php echo $row['WOLAR_ID'] ?>"><button class="btn btn-primary"><span class="glyphicon glyphicon-folder-open"></span> View all details</button></a>
                                    <a href="evaluate.php?id=<?php echo $row[0] ?>"><button class="btn btn-success"><span class="glyphicon glyphicon-stats"></span> Evaluate</button></a>
                                    <a href="edit.php?id=<?php echo $row[0] ?>"><button class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> EDIT</button></a>
                                    <a href="delete.php?id=<?php echo $row[0] ?>"><button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> DELETE</button></a>
                                </td>
                            </tr>
                <?php   } ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>