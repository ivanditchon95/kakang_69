<?php 
include_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <title>Evaluation form</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div class="panel" style="border: 1px solid #d4d4d6; margin-top: 10px;">
                <div class="panel-heading" style="text-align: center;">Alumni Relations, Job Placement, Scholarship Linkages Office<br>Notre Dame University</div>
                <div class="panel-body">
                    <p style="text-align:center; font-size: 20px;"><b>EVALUATION TOOL FOR WORKING SCHOLARS</b></p>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="evaluator">Evaluator:</label>
                            <input type="text" name="evaluator" id="evaluator" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="designation">Designation:</label>
                            <input type="text" name="designation" id="designation" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="position">Position:</label>
                            <input type="text" name="position" id="position" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="office">Office:</label>
                            <input type="text" name="office" id="office" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date_of_evaluation">Date of Evaluation:</label>
                            <input type="text" name="date_of_evaluation" id="date_of_evaluation" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <label for="month">For the month of:</label>
                            <input type="text" name="month" id="month" class="form-control" required>
                        </div>
                    </div>
                    <div class="row" style="margin-top:15px;">
                        <p><b style="font-size:18px;">Directions:</b>  &nbspBelow are characteristics and tasks expected of a working scholar. Please assess the extent
                        to which the scholar exhibits these characteristics and have carried out these tasks by encircling one of the figures in the scale.</p>
                    </div>
                    <div class="row">
                        <table>
                            <tr>
                                <td style="font-size: 18px; font-weight: bold;">Scale:</td>
                                <td class="col-md-5" style="font-weight:bold;">1  -  Poor</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="col-md-6" style="font-weight:bold;">2 - Below Satisfactory</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="col-md-6" style="font-weight:bold;">3 - Satisfactory</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="col-md-6" style="font-weight:bold;">4 - Very Satisfactory</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="col-md-6" style="font-weight:bold;">5 - Excellent</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row" style="margin-top:15px;">
                    <?php 
                    include_once 'db.php';
                    $sql = "SELECT * FROM evaluation_tool WHERE EVALUATION_TYPE = 1";
                    $query = mysqli_query($con, $sql);
                    $num_rows = mysqli_num_rows($query);
                    if($num_rows > 0){ ?>
                        <table class="table table-striped">
                            <tr>
                                <td><i><strong>PERFORMANCE FACTORS</strong></i></td>
                                <td></td>
                            </tr>
                <?php   while($row = mysqli_fetch_array($query)){
                            $result = $row['CHARACTERISTIC'];  ?>
                            <tr>
                                    <td><?php echo $result; ?></td>
                                    <td><select name="scale" id="scale" class="form-control" required>
                                        <option>--select--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                            </tr>
                <?php   }
                    }   ?>
                        </table>
        <?php    $sql = "SELECT * FROM evaluation_tool WHERE EVALUATION_TYPE = 2";
                    $query = mysqli_query($con, $sql);
                    $num_rows = mysqli_num_rows($query);
                    if($num_rows > 0){ ?>
                        <table class="table table-striped">
                            <tr>
                                <td><i><strong>PERSONAL/INTERPERSONAL QUALITIES AND MOTIVATION</strong></i></td>
                                <td></td>
                            </tr>
                <?php   while($row = mysqli_fetch_array($query)){
                            $result = $row['CHARACTERISTIC']; ?>
                            <tr>
                                <td><?php echo $result; ?></td>
                                <td><select name="scale" id="scale" class="form-control" required>
                                        <option>--select--</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select></td>
                            </tr>
                <?php   } 
                    }    ?>
                        </table>
                    </div>
                    <div class="row" style="margin-left: 10px; margin-right: 10px;">
                        <strong>Other comments:</strong><textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="row" style="margin-left: 10px;">
                        <input type="checkbox">Terms and aggreement
                        <button class="btn btn-primary" style="float: right; margin-right: 10px;">Evaluate</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>