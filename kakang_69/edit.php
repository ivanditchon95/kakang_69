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

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    $civil_status = $_POST['civil_status'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $tribe = $_POST['tribe'];
    $religion = $_POST['religion'];
    $date_of_birth = $_POST['date_of_birth'];
    $place_of_birth = $_POST['place_of_birth'];
    $high_school = $_POST['high_school'];
    $year_graduated = $_POST['year_graduated'];
    $high_school_grade = $_POST['high_school_grade'];
    $honors_awards = $_POST['honors_awards'];
    $ncae_grade = $_POST['ncae_grade'];
    $college_last_attended = $_POST['college_last_attended'];
    $terms_year_last_attended = $_POST['terms_and_year_last_attended'];
    $course_major = $_POST['course_major'];
    $year_level = $_POST['year_level'];
    $total_units_earned = $_POST['total_units_earned'];
    $current_mailing_address = $_POST['current_mailing_address'];
    $provincial_mailing_address = $_POST['provincial_mailing_address'];
    $phone_number = $_POST['phone_number'];
    $mobile_number = $_POST['mobile_number'];
    $emailaddress = $_POST['emailaddress'];
    $financial_name1 = $_POST['name1'];
    $relation1 = $_POST['relation1'];
    $amount_monthly_support1 = $_POST['amount_monthly_support1'];
    $financial_name2 = $_POST['name2'];
    $relation2 = $_POST['relation2'];
    $amount_monthly_support2 = $_POST['amount_monthly_support2'];
    $financial_name3 = $_POST['name1'];
    $relation3 = $_POST['relation1'];
    $amount_monthly_support3 = $_POST['amount_monthly_support3'];
    $work_experience = $_POST['work_experience'];
    $father = $_POST['father'];
    $father_occupation = $_POST['father_occupation'];
    $father_contact_number = $_POST['father_contact_number'];
    $mother = $_POST['mother'];
    $mother_occupation = $_POST['mother_occupation'];
    $mother_contact_number = $_POST['mother_contact_number'];
    $guardian = $_POST['guardian'];
    $guardian_occupation = $_POST['guardian_occupation'];
    $guardian_contact_number = $_POST['guardian_contact_number'];
    $living_with_parents = $_POST['living_with_parents'];
    $working_with_guardian = $_POST['working_with_guardian'];
    $number_of_siblings = $_POST['number_of_siblings'];
    $siblings_living_together = $_POST['siblings_living_together'];
    $siblings_name = trim($_POST['siblings_name']);
    $siblings_age = trim($_POST['siblings_age']);
    $siblings_grade_year_occupation = trim($_POST['siblings_grade_year_occupation']);
    $reference1 = $_POST['reference1'];
    $reference_occupation1 = $_POST['reference_occupation1'];
    $reference_contact_number1 = $_POST['reference_contact_number1'];
    $reference2 = $_POST['reference2'];
    $reference_occupation2 = $_POST['reference_occupation2'];
    $reference_contact_number2 = $_POST['reference_contact_number2'];
    $reference3 = $_POST['reference3'];
    $reference_occupation3 = $_POST['reference_occupation3'];
    $reference_contact_number3 = $_POST['reference_contact_number3'];
    $hear = implode(",",$_POST['checkbox']);
    

    $sql = "UPDATE `wolar_application` SET `NAME`='$name',`NICKNAME`='$nickname',`CIVILSTATUS`='$civil_status',`GENDER`='$gender',`AGE`='$age',`TRIBE`='$tribe',`RELIGION`='$religion',`DATE_OF_BIRTH`='$date_of_birth',`PLACE_OF_BIRTH`='$place_of_birth',`HIGH_SCHOOL`='$high_school',`YEAR_GRADUATED_HIGH_SCHOOL`='$year_graduated_high_school',`HIGH_SCHOOL_GRADE`='$high_school_grade',`HONORS_AWARD_RECEIVED`='$honors_awards_received',`NCAE_GRADE`='$ncae_grade',`COLLEGE_UNIVERSITY_LAST_ATTENDED`='$college_last_attended',`TERM_YEAR_LAST_ATTENDED`='$terms_year_last_attended',`COURSE_MAJOR`='$course_major',`YEAR_LEVEL`='$year_level',`WAG_TOTAL_UNITS_EARNED`='$wag_total_units_earned',`CURRENT_ADDRESS`='$current_mailing_address',`PROVINCIAL_ADDRESS`='$provincial_mailing_address',`PHONENUMBER`='$phone_number',`MOBILENUMBER`='$mobile_number',`EMAILADDRESS`='$emailaddress',`FINANCIAL_SUPPORT_NAME1`='$finanial_support_name1',`RELATION1`='$relation1',`MONTHLY_SUPPORT1`='$monthly_support1',`FINANCIAL_SUPPORT_NAME2`='$finanial_support_name2',`RELATION2`='$relation2',`MONTHLY_SUPPORT2`='$monthly_support2',`FINANCIAL_SUPPORT_NAME3`='$finanial_support_name3',`RELATION3`='$relation3',`MONTHLY_SUPPORT3`='$amount_monthly_support3',`WORK_EXPERIENCE`='$work_experience',`FATHER`='$father',`FATHER_OCCUPATION`='$father_occupation',`FATHER_CONTACT_NUMBER`='$father_contact_number',`MOTHER`='$mother',`MOTHER_OCCUPATION`='$mother_occupation',`MOTHER_CONTACT_NUMBER`='$mother_contact_number',`GUARDIAN`='$guardian',`GUARDIAN_OCCUPATION`='$guardian_occupation',`GUARDIAN_CONTACT_NUMBER`='$guardian_contact_number',`LIVING_WITH_PARENTS`='$living_with_parents',`WORKING_WITH_GUARDIAN`='$working_with_guardian',`NUMBER_OF_SIBLINGS`='$number_of_siblings',`ALL_SIBLINGS_LIVING`='$siblings_living_together',`NAME_OF_SIBLINGS`='$siblings_name',`SIBLINGS_AGE`='$siblings_age',`GRADE_YEAR_OCCUPATION`='$siblings_grade_year_occupation',`REF_NAME1`='$reference1',`REF_OCCUPATION1`='$reference_occupation1',`REF_CONTACT_NUMBER1`='$reference_contact_number1',`REF_NAME2`='$reference2',`REF_OCCUPATION2`='$reference_occupation2',`REF_CONTACT_NUMBER2`='$reference_contact_number2',`REF_NAME3`='$reference3',`REF_OCCUPATION3`='$reference_occupation3',`REF_CONTACT_NUMBER3`='$reference_contact_number3',`HEAR`='$hear' WHERE WOLAR_ID = '$id'";
    $query = mysqli_query($con, $sql);
    if(!$query){
        die("Error:" .mysqli_error());
    }
    else{
        echo "<script>alert('Successfully updated')</script>";
        echo "<script>window.open('wolar_information.php','_self')</script>";
    }
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
    <title>Update</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <th colspan="3" style="background-color:#48d35a">Personal Information</th>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" name="name" class="form-control" value="<?php echo $name ?>" ></td>
                </tr>
                <tr>
                    <td><label>Nickname:</label><input type="text" name="nickname" class="form-control" value="<?php echo $nickname ?>"></td>
                    <td><label>Civil status:</label>
                        <select name="civil_status" class="form-control">
                            <option value="<?php echo $civil_status ?>"><?php echo $civil_status ?></option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Separated">Separated</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </td>
                    <td><label>Gender:</label>
                        <select name="gender" class="form-control">
                            <option value="<?php echo $gender ?>"><?php echo $gender ?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Age:</label><input type="number" name="age" class="form-control" value="<?php echo $age ?>"></td>
                    <td><label>Tribe:</label><input type="text" name="tribe" class="form-control" value="<?php echo $tribe ?>"></td>
                    <td><label>Religion:</label><input type="text" name="religion" class="form-control" value="<?php echo $religion ?>"></td>
                </tr>
                <tr>
                    <td><label>Date of birth:</label><input type="date" name="date_of_birth" class="form-control" value="<?php echo $date_of_birth ?>"></td>
                    <td><label>Place of birth:</label><input type="text" name="place_of_birth" class="form-control" value="<?php echo $place_of_birth ?>"></td>
                    <td><label>High school:</label><input type="text" name="high_school" class="form-control" value="<?php echo $high_school ?>"></td>
                </tr>
                <tr>
                    <td><label>Year graduated in high school:</label><input type="number" name="year_graduated" class="form-control" value="<?php echo $year_graduated_high_school ?>"></td>
                    <td><label>High school grade:</label><input type="number" name="high_school_grade" class="form-control" value="<?php echo $high_school_grade ?>"></td>
                    <td><label>Honors/Awards:</label><input type="text" name="honors_awards" class="form-control" value="<?php echo $honors_awards_received ?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><label>NCAE Grade:</label><input type="number" name="ncae_grade" class="form-control" value="<?php echo $ncae_grade ?>"></td>
                </tr>
                <tr>
                    <td colspan=3><i>if you are a fresh graduate of secondary education leave this items blank</i></td>
                </tr>
                <tr>
                    <td colspan="2"><label>College/University last attended:</label><input type="text" name="college_last_attended" class="form-control" value="<?php echo $college_university_last_attended ?>"></td>
                    <td><label>Terms and year last attended:</label><input type="text" name="terms_and_year_last_attended" class="form-control" value="<?php echo $terms_and_year_last_attended ?>"></td>
                </tr>
                <tr>
                    <td><label>Course/Major:</label><input type="text" name="course_major" class="form-control" value="<?php echo $course_major ?>"></td>
                    <td><label>Year level:</label><input type="text" name="year_level" class="form-control" value="<?php echo $year_level ?>"></td>
                    <td><label>Total units earned:</label><input type="number" name="total_units_earned" class="form-control" value="<?php echo $wag_total_units_earned ?>"></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <th colspan="3" style="background-color:#48d35a">Contact Information</th>
                </tr>
                <tr>
                    <td colspan="3"><label>Current mailing address:</label><input type="text" name="current_mailing_address" class="form-control" value="<?php echo $current_mailing_address ?>"></td>
                </tr>
                <tr>
                    <td colspan="3"><label>Provincial mailing address:</label><input type="text" name="provincial_mailing_address" class="form-control" value="<?php echo $provincial_mailing_address ?>"></td>
                </tr>
                <tr>
                    <td><label>Phone number:</label><input type="number" name="phone_number" class="form-control" value="<?php echo $phone_number ?>"></td>
                    <td><label>Mobile number:</label><input type="text" name="mobile_number" class="form-control" value="<?php echo $mobile_number ?>"></td>
                    <td><label>Emailaddress:</label><input type="text" name="emailaddress" class="form-control" value="<?php echo $emailaddress ?>"></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="3" style="background-color:#48d35a"><strong>Possible Financial Support</strong> <i>(Other than your parents. It could be your working siblings, relatives or employer)</i></td>
                </tr>
                <tr>
                    <td><label>Name:</label><input type="text" name="name1" class="form-control" value="<?php echo $finanial_support_name1 ?>"></td>
                    <td><label>Relation:</label><input type="text" name="relation1" class="form-control" value="<?php echo $relation1 ?>"></td>
                    <td><label>Ammount monthly support:</label><input type="text" name="amount_monthly_support1" class="form-control" value="<?php echo $monthly_support1 ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="name2" class="form-control" value="<?php echo $finanial_support_name2 ?>"></td>
                    <td><input type="text" name="relation2" class="form-control" value="<?php echo $relation2 ?>"></td>
                    <td><input type="text" name="amount_monthly_support2" class="form-control" value="<?php echo $monthly_support2 ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="name3" class="form-control" value="<?php echo $monthly_support3 ?>"></td>
                    <td><input type="text" name="relation3" class="form-control" value="<?php echo $monthly_support3 ?>"></td>
                    <td><input type="text" name="amount_monthly_support3" class="form-control" value="<?php echo $monthly_support3 ?>"></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="3" style="background-color:#48d35a"><strong>Work Experience</strong> <i>(Please briefly discuss the nature of your work experiences, if you have any)</i></td>
                </tr>
                <tr>
                    <td><label>Work experience:</label><input type="text" name="work_experience" class="form-control" value="<?php echo $work_experience ?>" required></td>
                </tr>
            </table>
            <table class="table table-striped" style="border: 2px solid #dddcdc">
                <tr>
                    <td colspan="4" style="background-color:#48d35a"><strong>Family Background</strong> <i>(Please Indicate If Deceased)</i></td>
                </tr>
                <tr>
                    <td colspan="2"><label>Name:</label><input type="text" name="father" class="form-control" value="<?php echo $father ?>"></td>
                    <td><label>Occupation:</label><input type="text" name="father_occupation" class="form-control" value="<?php echo $father_occupation ?>"></td>
                    <td><label>Contact number:</label><input type="text" name="father_contact_number" class="form-control" value="<?php echo $father_contact_number ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="mother" class="form-control" value="<?php echo $mother ?>"></td>
                    <td><input type="text" name="mother_occupation" class="form-control" value="<?php echo $mother_occupation ?>"></td>
                    <td><input type="number" name="mother_contact_number" class="form-control" value="<?php echo $mother_contact_number ?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="text" name="guardian" class="form-control" value="<?php echo $guardian ?>"></td>
                    <td><input type="text" name="guardian_occupation" class="form-control" value="<?php echo $guardian_occupation ?>"></td>
                    <td><input type="text" name="guardian_contact_number" class="form-control" value="<?php echo $guardian_contact_number ?>"></td>
                </tr>
                <tr>
                    <td>Living with Parent/s? &nbsp <select name="living_with_parents" class="form-control">
                        <option value="<?php echo $living_with_parents ?>"><?php echo $living_with_parents ?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                    <td>Working with a guardian? &nbsp <select name="working_with_guardian" class="form-control">
                        <option value="<?php echo $working_with_guardian ?>"><?php echo $working_with_guardian ?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></td>
                    <td>Number of siblings: <input type="number" name="number_of_siblings" class="form-control" value="<?php echo $number_of_siblings ?>"></td>
                    <td>All sibling living together? &nbsp <select name="siblings_living_together" class="form-control">
                        <option value="<?php echo $siblings_living_together ?>"><?php echo $siblings_living_together ?></option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select></td>
                </tr>
                <tr>
                    <td colspan="4">Sibling Order Number <i>(if your an only child leave this position blank)</i></td>
                </tr>
                <tr>
                    <td colspan="2">Name of Siblings (From the eldest to youngest) 
                        <textarea name="siblings_name" class="form-control" rows="5" style="text-indent: -7.8em;">
                            <?php echo $name_of_siblings ?>
                        </textarea>
                    </td>
                    <td>Age 
                        <textarea name="siblings_age" class="form-control" rows="5" style="text-indent: -7.8em;">
                            <?php echo $siblings_age ?>
                        </textarea>
                    </td>
                    <td>Grade/Year/Occupation 
                        <textarea name="siblings_grade_year_occupation" class="form-control" rows="5" style="text-indent: -7.8em;">
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
                    <td><label>Name:</label><input type="text" name="reference1" class="form-control" value="<?php echo $reference_name1 ?>"></td>
                    <td><label>Occupation:</label><input type="text" name="reference_occupation1" class="form-control" value="<?php echo $reference_occupation1 ?>"></td>
                    <td><label>Contact number:</label><input type="number" name="reference_contact_number1" class="form-control" value="<?php echo $reference_contact_number1 ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="reference2" class="form-control" value="<?php echo $reference_name2 ?>"></td>
                    <td><input type="text" name="reference_occupation2" class="form-control" value="<?php echo $reference_occupation2 ?>"></td>
                    <td><input type="number" name="reference_contact_number2" class="form-control" value="<?php echo $reference_contact_number2 ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="reference3" class="form-control" value="<?php echo $reference_name3 ?>"></td>
                    <td><input type="text" name="reference_occupation3" class="form-control" value="<?php echo $reference_occupation3 ?>"></td>
                    <td><input type="number" name="reference_contact_number3" class="form-control" value="<?php echo $reference_contact_number3 ?>"></td>
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
                    <td colspan="2"><input type="text" name="hear" class="form-control" value="<?php echo $hear ?>" disabled placeholder="Please check"></td>
                </tr>
                <tr>
                    <td><center>Mark <strong stlye="font-size: 40px;">X</strong> Here</center</td>
                    <td>(Please check as many as possible)</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Office of Student Affairs and Services" ></center></td>
                    <td>1.) Office of Student Affairs and Services</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Faculty of Notre Dame University"></center></td>
                    <td>2.) Faculty of Notre Dame University</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Staff of Notre Dame University"></center></td>
                    <td>3.) Staff of Notre Dame University</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Existing WOLARS" ></center></td>
                    <td>4.) Existing WOLARS</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Administrator of NDU"></center></td>
                    <td>5.) Administrator of NDU</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Radio"></center></td>
                    <td>6.) Radio</td>
                </tr>
                <tr>
                    <td><center><input type="checkbox" name="checkbox[]" value="Bulletin Boards"></td>
                    <td>7.) Bulletin Boards</td>
                </tr>
                <tr>
                    <td></td>
                    <td>8.) Others: Please Specify<br> 
                        <textarea class="form-control" name="checkbox[]"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><button name="update">Update</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>