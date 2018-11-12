<?php 

include 'connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM wolar_application WHERE WOLAR_ID = '$id'";
$query = mysqli_query($con, $sql);
$numRows = mysqli_num_rows($query);
if($numRows > 0){
    $row = mysqli_fetch_array($query);
    $name = $row[1];
    $nickname = $row[2];
    $civil_status = $row[3];
    $gender = $row[4];
    $age = $row[5];
    $tribe = $row[6];   
    $religion = $row[7];
    $date_of_birth = $row[8]; 
    $place_of_birth = $row[9];
    $high_school = $row[10];
    $year_graduated_high_school = $row[11];
    $high_school_grade = $row[12];
    $honors_awards_received = $row[13];
    $ncae_grade = $row[14];
    $college_university_last_attended = $row[15];
    $terms_and_year_last_attended = $row[16];
    $course_major = $row[17];
    $year_level = $row[18];
    $wag_total_units_earned = $row[19];
    $current_mailing_address = $row[20];
    $provincial_mailing_address = $row[21];
    $phone_number = $row[22];
    $mobile_number = $row[23];
    $emailaddress = $row[24];
    $finanial_support_name1 = $row[25];
    $relation1 = $row[26];
    $monthly_support1 = $row[27];
    $finanial_support_name2 = $row[28];
    $relation2 = $row[29];
    $monthly_support2 = $row[30];
    $finanial_support_name3 = $row[31];
    $relation3 = $row[32];
    $monthly_support3 = $row[33];
    $work_experience = $row[34];
    $father = $row[35];
    $father_occupation = $row[36];
    $father_contact_number = $row[37];
    $mother = $row[38];
    $mother_occupation = $row[39];
    $mother_contact_number = $row[40];
    $guardian = $row[41];
    $guardian_occupation = $row[42];
    $guardian_contact_number = $row[43];
    $living_with_parents = $row[44];
    $working_with_guardian = $row[45];
    $number_of_siblings = $row[46];
    $siblings_living_together = $row[47];
    $name_of_siblings = $row[48];
    $siblings_age = $row[49];
    $grade_year_occupation = $row[50];
    $reference_name1 = $row[51];
    $reference_occupation1 = $row[52];
    $reference_contact_number1 = $row[53];
    $reference_name2 = $row[54];
    $reference_occupation2 = $row[55];
    $reference_contact_number2 = $row[56];
    $reference_name3 = $row[57];
    $reference_occupation3 = $row[58];
    $reference_contact_number3 = $row[59];
    $hear = $row[60];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <title>Registration form</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <th colspan="3" style="background-color:#48d35a">Personal Information</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="name" class="form-control" value="<?php echo $name ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="nickname" class="form-control" style="margin-top: 25px;" value="<?php echo $nickname ?>" disabled></td>
                    <td><label>Civil status:</label>
                        <input type="text" name="civil_status" class="form-control" value="<?php echo $civil_status ?>" disabled>
                    </td>
                    <td><label>Gender:</label>
                        <input type="text" name="gender" class="form-control" value="<?php echo $gender ?>" disabled>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="age" class="form-control" value="<?php echo $age ?>" disabled></td>
                    <td><input type="text" name="tribe" class="form-control" value="<?php echo $tribe ?>" disabled></td>
                    <td><input type="text" name="religion" class="form-control" value="<?php echo $religion ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="date" name="date_of_birth" class="form-control" value="<?php echo $date_of_birth ?>" disabled></td>
                    <td><input type="text" name="place_of_birth" class="form-control" value="<?php echo $place_of_birth ?>" disabled></td>
                    <td><input type="text" name="high_school" class="form-control" value="<?php echo $high_school ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="year_graduated" class="form-control" value="<?php echo $year_graduated_high_school ?>" disabled/></td>
                    <td><input type="text" name="high_school_grade" class="form-control" value="<?php echo $high_school_grade ?>" disabled></td>
                    <td><input type="text" name="honors_awards" class="form-control" value="<?php echo $honors_awards_received ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="number" name="ncae_grade" class="form-control" value="<?php echo $ncae_grade ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan=3><i>if you are a fresh graduate of secondary education leave this items blank</i></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="college_last_attended" class="form-control" value="<?php echo $college_university_last_attended ?>" disabled></td>
                    <td><input type="text" name="terms_and_year_last_attended" class="form-control" value="<?php echo $terms_and_year_last_attended ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="course_major" class="form-control" value="<?php echo $course_major ?>" disabled></td>
                    <td><input type="text" name="year_level" class="form-control" value="<?php echo $year_level ?>" disabled></td>
                    <td><input type="number" name="total_units_earned" class="form-control" value="<?php echo $wag_total_units_earned ?>" disabled></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <th colspan="3" style="background-color:#48d35a">Contact Information</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="current_mailing_address" class="form-control" value="<?php echo $current_mailing_address ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="provincial_mailing_address" class="form-control" value="<?php echo $provincial_mailing_address ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="phone_number" class="form-control" value="<?php echo $phone_number ?>" disabled></td>
                    <td><input type="text" name="mobile_number" class="form-control" value="<?php echo $mobile_number ?>" disabled></td>
                    <td><input type="text" name="emailaddress" class="form-control" value="<?php echo $emailaddress ?>" disabled></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="3" style="background-color:#48d35a"><strong>Possible Financial Support</strong> <i>(Other than your parents. It could be your working siblings, relatives or employer)</i></td>
                </tr>
                <tr>
                    <td><input type="text" name="name1" class="form-control" value="<?php echo $finanial_support_name1 ?>" disabled></td>
                    <td><input type="text" name="relation1" class="form-control" value="<?php echo $relation1 ?>" disabled></td>
                    <td><input type="text" name="amount_monthly_support1" class="form-control" value="<?php echo $monthly_support1 ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="name2" class="form-control" value="<?php echo $finanial_support_name2 ?>" disabled></td>
                    <td><input type="text" name="relation2" class="form-control" value="<?php echo $relation2 ?>" disabled></td>
                    <td><input type="text" name="amount_monthly_support2" class="form-control" value="<?php echo $monthly_support2 ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="name3" class="form-control" value="<?php echo $monthly_support3 ?>" disabled></td>
                    <td><input type="text" name="relation3" class="form-control" value="<?php echo $monthly_support3 ?>" disabled></td>
                    <td><input type="text" name="amount_monthly_support3" class="form-control" value="<?php echo $monthly_support3 ?>" disabled></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="3" style="background-color:#48d35a"><strong>Work Experience</strong> <i>(Please briefly discuss the nature of your work experiences, if you have any)</i></td>
                </tr>
                <tr>
                    <td><input type="text" name="" class="form-control" value="<?php echo $work_experience ?>" disabled></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="4" style="background-color:#48d35a"><strong>Family Background</strong> <i>(Please Indicate If Deceased)</i></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="father" class="form-control" value="<?php echo $father ?>" disabled></td>
                    <td><input type="text" name="father_occupation" class="form-control" value="<?php echo $father_occupation ?>" disabled></td>
                    <td><input type="text" name="father_contact_number" class="form-control" value="<?php echo $father_contact_number ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="mother" class="form-control" value="<?php echo $mother ?>" disabled></td>
                    <td><input type="text" name="mother_occupation" class="form-control" value="<?php echo $mother_occupation ?>" disabled></td>
                    <td><input type="number" name="mother_contact_number" class="form-control" value="<?php echo $mother_contact_number ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="guardian" class="form-control" value="<?php echo $guardian ?>" disabled></td>
                    <td><input type="text" name="guardian_occupation" class="form-control" value="<?php echo $guardian_occupation ?>" disabled></td>
                    <td><input type="text" name="guardian_contact_number" class="form-control" value="<?php echo $guardian_contact_number ?>" disabled></td>
                </tr>
                <tr>
                    <td>Living with Parent/s? &nbsp <input type="text" name="living_with_parents" class="form-control" value="<?php echo $living_with_parents ?>" disabled>
                    <td>Working with a guardian? &nbsp <input type="text" name="living_with_parents" class="form-control" value="<?php echo $working_with_guardian ?>" disabled></td>
                    <td>Number of siblings: <input type="number" name="number_of_siblings" class="form-control" value="<?php echo $number_of_siblings ?>" disabled></td>
                    <td>All sibling living together? &nbsp <input type="text" name="siblings_living_together" class="form-control" value="<?php echo $siblings_living_together ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="4">Sibling Order Number <i>(if your an only child leave this position blank)</i></td>
                </tr>
                <tr>
                    <td colspan="2">Name of Siblings (From the eldest to youngest) 
                        <textarea name="siblings_name" class="form-control" col="" rows="5" disabled style="text-indent: -7.8em;">
                            <?php echo $name_of_siblings ?>
                        </textarea>
                    </td>
                    <td>Age 
                        <textarea name="siblings_age" class="form-control" rows="5" style="text-indent: -7.8em;" disabled>
                            <?php echo $siblings_age ?>
                        </textarea>
                    </td>
                    <td>Grade/Year/Occupation 
                        <textarea name="siblings_grade_year_occupation" class="form-control" col="" rows="5" disabled disabled style="text-indent: -7.8em;">
                            <?php echo $grade_year_occupation ?>
                        </textarea>
                    </td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="3" style="background-color:#48d35a"><strong>Character References</strong> <i>(Known to NDU but not related to you)</i></td>
                </tr>
                <tr>
                    <td><input type="text" name="reference1" class="form-control" value="<?php echo $reference_name1 ?>" disabled></td>
                    <td><input type="text" name="reference_occupation1" class="form-control" value="<?php echo $reference_occupation1 ?>" disabled></td>
                    <td><input type="text" name="reference_contact_number1" class="form-control" value="<?php echo $reference_contact_number1 ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="reference2" class="form-control" value="<?php echo $reference_name2 ?>" disabled></td>
                    <td><input type="text" name="reference_occupation2" class="form-control" value="<?php echo $reference_occupation2 ?>" disabled></td>
                    <td><input type="text" name="reference_contact_number2" class="form-control" value="<?php echo $reference_contact_number2 ?>" disabled></td>
                </tr>
                <tr>
                    <td><input type="text" name="reference3" class="form-control" value="<?php echo $reference_name3 ?>" disabled></td>
                    <td><input type="text" name="reference_occupation3" class="form-control" value="<?php echo $reference_occupation3 ?>" disabled></td>
                    <td><input type="text" name="reference_contact_number3" class="form-control" value="<?php echo $reference_contact_number3 ?>" disabled></td>
                </tr>
                <tr>
                    <td colspan="3"><i>Do not forget to attatched the Sealed Letter of Recommendation of the above persons attesting your character</i></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="4" style="background-color:#48d35a"><strong>Where did you hear about NDU WOLAR</strong></td>
                </tr>
                <tr>
                    <td><input type="text" name="hear" class="form-control" value="<?php echo $hear ?>" disabled></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>