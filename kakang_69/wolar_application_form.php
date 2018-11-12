<?php

include 'connection.php';

if(isset($_POST['register'])){
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
	$siblings_name = $_POST['siblings_name'];
	$siblings_age = $_POST['siblings_age'];
	$siblings_grade_year_occupation = $_POST['siblings_grade_year_occupation'];
	$reference1 = $_POST['reference1'];
	$reference_occupation1 = $_POST['reference_occupation1'];
	$reference_contact_number1 = $_POST['reference_contact_number1'];
	$reference2 = $_POST['reference2'];
	$reference_occupation2 = $_POST['reference_occupation2'];
	$reference_contact_number2 = $_POST['reference_contact_number2'];
	$reference3 = $_POST['reference3'];
	$reference_occupation3 = $_POST['reference_occupation3'];
	$reference_contact_number3 = $_POST['reference_contact_number3'];
	$checkbox = implode(",", $_POST['checkbox']);

	$sql = "INSERT INTO `wolar_application`(`WOLAR_ID`, `NAME`, `NICKNAME`, `CIVILSTATUS`, `GENDER`, `AGE`, `TRIBE`, `RELIGION`, `DATE_OF_BIRTH`, `PLACE_OF_BIRTH`, `HIGH_SCHOOL`, `YEAR_GRADUATED_HIGH_SCHOOL`, `HIGH_SCHOOL_GRADE`, `HONORS_AWARD_RECEIVED`, `NCAE_GRADE`, `COLLEGE_UNIVERSITY_LAST_ATTENDED`, `TERM_YEAR_LAST_ATTENDED`, `COURSE_MAJOR`, `YEAR_LEVEL`, `WAG_TOTAL_UNITS_EARNED`, `CURRENT_ADDRESS`, `PROVINCIAL_ADDRESS`, `PHONENUMBER`, `MOBILENUMBER`, `EMAILADDRESS`, `FINANCIAL_SUPPORT_NAME1`, `RELATION1`, `MONTHLY_SUPPORT1`, `FINANCIAL_SUPPORT_NAME2`, `RELATION2`, `MONTHLY_SUPPORT2`, `FINANCIAL_SUPPORT_NAME3`, `RELATION3`, `MONTHLY_SUPPORT3`, `WORK_EXPERIENCE`, `FATHER`, `FATHER_OCCUPATION`, `FATHER_CONTACT_NUMBER`, `MOTHER`, `MOTHER_OCCUPATION`, `MOTHER_CONTACT_NUMBER`, `GUARDIAN`, `GUARDIAN_OCCUPATION`, `GUARDIAN_CONTACT_NUMBER`, `LIVING_WITH_PARENTS`, `WORKING_WITH_GUARDIAN`, `NUMBER_OF_SIBLINGS`, `ALL_SIBLINGS_LIVING`, `NAME_OF_SIBLINGS`, `SIBLINGS_AGE`, `GRADE_YEAR_OCCUPATION`, `REF_NAME1`, `REF_OCCUPATION1`, `REF_CONTACT_NUMBER1`, `REF_NAME2`, `REF_OCCUPATION2`, `REF_CONTACT_NUMBER2`, `REF_NAME3`, `REF_OCCUPATION3`, `REF_CONTACT_NUMBER3`, `HEAR`) VALUES (NULL,'$name','$nickname','$civil_status','$gender','$age','$tribe','$religion','$date_of_birth','$place_of_birth','$high_school','$year_graduated','$high_school_grade','$honors_awards','$ncae_grade','$college_last_attended','$terms_year_last_attended','$course_major','$year_level','$total_units_earned','$current_mailing_address','$provincial_mailing_address','$phone_number','$mobile_number','$emailaddress','$financial_name1','$relation1','$amount_monthly_support1','$financial_name2','$relation2','$amount_monthly_support2','$financial_name3','$relation3','$amount_monthly_support3','$work_experience','$father','$father_occupation','$father_contact_number','$mother','$mother_occupation','$mother_contact_number','$guardian','$guardian_occupation','$guardian_contact_number','$living_with_parents','$working_with_guardian','$number_of_siblings','$siblings_living_together','$siblings_name','$siblings_age','$siblings_grade_year_occupation','$reference1','$reference_occupation1','$reference_contact_number1','$reference2','$reference_occupation2','$reference_contact_number2','$reference3','$reference_occupation3','$reference_contact_number3', '$checkbox')";
	$query = mysqli_query($con, $sql);
	if(!$query){
		die("Error" .mysqli_error());
	}
	else{
		echo "<script>alert('Successfully inserted')</script>";
		echo "<script>window.open('admin_index.html','_self')</script>";
	}
}

?>