
<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $StudentName = $_POST['StudentName'];
   $StudentMobileNo = $_POST['StudentMobileNo'];
   $dob = $_POST['dob'];
   $StudentEmailId = $_POST['StudentEmailId'];
   $EmisId = $_POST['EmisId'];
   $Gender = $_POST['Gender'];
   $FatherName = $_POST['FatherName'];
   $ParentsMobileNo = $_POST['ParentsMobileNo'];
   $FatherOccupation = $_POST['FatherOccupation'];
   $Nationality = $_POST['Nationality'];
   $Religion = $_POST['Religion'];
   $Community = $_POST['Community'];
   $District = $_POST['District'];
   $State = $_POST['State'];
   $Pincode = $_POST['Pincode'];
   $Village = $_POST['Village'];
   $ApproachedBy = $_POST['ApproachedBy'];
   $FacultyName = $_POST['FacultyName'];
   $RecommendedStudentName = $_POST['RecommendedStudentName'];
   $RecommendedStudentYear = $_POST['RecommendedStudentYear'];
   $RecommendedStudentDepartment = $_POST['RecommendedStudentDepartment'];
   $SeekingAdmission = $_POST['SeekingAdmission'];
   if ($_POST['SeekingAdmission'] == "UG"){
      $SchoolName10 = $_POST['SchoolName10UG'];
      $Board10 = $_POST['BoardUG'];
      $SchoolName12 = $_POST['SchoolName12UG'];
      $TotalMark10 = $_POST['TotalMark10UG'];
      $TotalMark12 = $_POST['TotalMark12UG'];
      $MediumOfInstruction10 = $_POST['MediumOfInstruction10UG'];
      $MediumOfInstruction12 = $_POST['MediumOfInstruction12UG'];
      $Group12 = $_POST['Group12UG'];
      $DeptChoice1 = $_POST['DeptChoice1UG'];
      $DeptChoice2 = $_POST['DeptChoice2UG'];
      $DeptChoice3 = $_POST['DeptChoice3UG'];
   }
   else if ($_POST['SeekingAdmission'] == "LE"){
      $SchoolName10 = $_POST['SchoolName10LE'];
      $Board10 = $_POST['BoardLE'];
      $SchoolName12 = $_POST['SchoolName12LE'];
      $TotalMark10 = $_POST['TotalMark10LE'];
      $TotalMark12 = $_POST['TotalMark12LE'];
      $MediumOfInstruction10 = $_POST['MediumOfInstruction10LE'];
      $MediumOfInstruction12 = $_POST['MediumOfInstruction12LE'];
      $Group12 = $_POST['Group12LE'];
      $DeptChoice1 = $_POST['DeptChoice1LE'];
      $DeptChoice2 = $_POST['DeptChoice2LE'];
      $DeptChoice3 = $_POST['DeptChoice3LE'];
   }
   else if ($_POST['SeekingAdmission'] == "PG"){
      $SchoolName10 = $_POST['SchoolName10PG'];
      $Board10 = $_POST['BoardPG'];
      $SchoolName12 = $_POST['SchoolName12PG'];
      $TotalMark10 = $_POST['TotalMark10PG'];
      $TotalMark12 = $_POST['TotalMark12PG'];
      $MediumOfInstruction10 = $_POST['MediumOfInstruction10PG'];
      $MediumOfInstruction12 = $_POST['MediumOfInstruction12PG'];
      $Group12 = $_POST['Group12PG'];
      $DeptChoice1 = $_POST['DeptChoice1PG'];
      $DeptChoice2 = $_POST['DeptChoice2PG'];
      $DeptChoice3 = $_POST['DeptChoice3PG'];
   }
   $MathsMark = $_POST['MathsMark'];
   $PhysicsMark = $_POST['PhysicsMark'];
   $ChemistryMark = $_POST['ChemistryMark'];
   $Cutoff = $_POST['Cutoff'];
   $RegisterNo12 = $_POST['RegisterNo12'];
   $NameOfDiplomaCourse = $_POST['NameOfDiplomaCourse'];
   $NameOfInstitution = $_POST['NameOfInstitution'];
   $PercentageDiploma = $_POST['PercentageDiploma'];
   $NameOfTheCollege = $_POST['NameOfTheCollege'];
   $NameOfUGcourse = $_POST['NameOfUGcourse'];
   $CGPA = $_POST['CGPA'];
   $Sport = $_POST['Sport'];
   $SportName = $_POST['SportName'];
   $SportLevel = $_POST['SportLevel'];

   $select = " SELECT * FROM enquiryform2 WHERE StudentMobileNo = '$StudentMobileNo' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

    //   $error[] = 'mobile already exist!';
     // echo '<span class="error-msg">'."error!! dumil".'</span>';
     $update_query = "UPDATE enquiryform2 SET StudentName = '{$_POST['StudentName']}', dob = '{$_POST['dob']}', StudentEmailId = '{$_POST['StudentEmailId']}', EmisId = '{$_POST['EmisId']}', Gender = '{$_POST['Gender']}', FatherName = '{$_POST['FatherName']}', ParentsMobileNo = '{$_POST['ParentsMobileNo']}', FatherOccupation = '{$_POST['FatherOccupation']}', Nationality = '{$_POST['Nationality']}', Religion = '{$_POST['Religion']}', Community = '{$_POST['Community']}', State = '{$_POST['State']}', Pincode = '{$_POST['Pincode']}', Village = '{$_POST['Village']}', ApproachedBy = '{$_POST['ApproachedBy']}', FacultyName = '{$_POST['FacultyName']}', RecommendedStudentName = '{$_POST['RecommendedStudentName']}', RecommendedStudentYear = '{$_POST['RecommendedStudentYear']}', RecommendedStudentDepartment = '{$_POST['RecommendedStudentDepartment']}', SeekingAdmission = '{$_POST['SeekingAdmission']}', BoardUG = '{$_POST['BoardUG']}', BoardPG = '{$_POST['BoardPG']}', BoardLE = '{$_POST['BoardLE']}', SchoolName10UG = '{$_POST['SchoolName10UG']}', SchoolName12UG = '{$_POST['SchoolName12UG']}', SchoolName12PG = '{$_POST['SchoolName12PG']}', SchoolName12LE = '{$_POST['SchoolName12LE']}', TotalMark10UG = '{$_POST['TotalMark10UG']}', TotalMark10PG = '{$_POST['TotalMark10PG']}', TotalMark10LE = '{$_POST['TotalMark10LE']}', TotalMark12UG = '{$_POST['TotalMark12UG']}', TotalMark12PG = '{$_POST['TotalMark12PG']}', TotalMark12LE = '{$_POST['TotalMark12LE']}', MediumOfInstruction10UG = '{$_POST['MediumOfInstruction10UG']}', MediumOfInstruction10PG = '{$_POST['MediumOfInstruction10PG']}', MediumOfInstruction10LE = '{$_POST['MediumOfInstruction10LE']}', MediumOfInstruction12UG = '{$_POST['MediumOfInstruction12UG']}', MediumOfInstruction12PG = '{$_POST['MediumOfInstruction12PG']}', MediumOfInstruction12LE = '{$_POST['MediumOfInstruction12LE']}', Group12UG = '{$_POST['Group12UG']}', Group12PG = '{$_POST['Group12PG']}', Group12LE = '{$_POST['Group12LE']}', NameOfInstitution = '{$_POST['NameOfInstitution']}', DeptChoice1UG = '{$_POST['DeptChoice1UG']}', DeptChoice2UG = '{$_POST['DeptChoice2UG']}', DeptChoice3UG = '{$_POST['DeptChoice3UG']}', DeptChoice1PG = '{$_POST['DeptChoice1PG']}', DeptChoice2PG = '{$_POST['DeptChoice2PG']}', DeptChoice3PG = '{$_POST['DeptChoice3PG']}', DeptChoice1LE = '{$_POST['DeptChoice1LE']}', DeptChoice2LE = '{$_POST['DeptChoice2LE']}', DeptChoice3LE = '{$_POST['DeptChoice3LE']}', MathsMark = '{$_POST['MathsMark']}', PhysicsMark = '{$_POST['PhysicsMark']}', ChemistryMark = '{$_POST['ChemistryMark']}', Cutoff = '{$_POST['Cutoff']}', RegisterNo12 = '{$_POST['RegisterNo12']}', NameOfDiplomaCourse = '{$_POST['NameOfDiplomaCourse']}', PercentageDiploma = '{$_POST['PercentageDiploma']}', NameOfTheCollege = '{$_POST['NameOfTheCollege']}', NameOfUGcourse = '{$_POST['NameOfUGcourse']}', CGPA = '{$_POST['CGPA']}', Sport = '{$_POST['Sport']}', SportName = '{$_POST['SportName']}', SportLevel = '{$_POST['SportLevel']}' WHERE StudentMobileNo = '$StudentMobileNo' ";

      mysqli_query($conn, $update_query);
      // echo '<script>openPopup("Update successful!");</script>';
      header('location:updated.html');

   }else{

      $insert = "INSERT INTO enquiryform2(
         StudentName, 
         StudentMobileNo, 
         dob,
         StudentEmailId, 
         EmisId, 
         Gender, 
         FatherName, 
         ParentsMobileNo, 
         FatherOccupation, 
         Nationality, 
         Religion, 
         Community, 
         District, 
         State, 
         Pincode, 
         Village, 
         ApproachedBy, 
         FacultyName, 
         RecommendedStudentName, 
         RecommendedStudentYear, 
         RecommendedStudentDepartment, 
         SeekingAdmission, 
         Board10, 
         SchoolName10, 
         SchoolName12, 
         TotalMark10, 
         TotalMark12, 
         MediumOfInstruction10, 
         MediumOfInstruction12, 
         Group12, 
         NameOfInstitution, 
         DeptChoice1, 
         DeptChoice2, 
         DeptChoice3, 
         MathsMark, 
         PhysicsMark, 
         ChemistryMark, 
         Cutoff, 
         RegisterNo12, 
         NameOfDiplomaCourse, 
         PercentageDiploma, 
         NameOfTheCollege, 
         NameOfUGcourse, 
         CGPA, 
         Sport, 
         SportName, 
         SportLevel) 
VALUES(
         '$StudentName', 
         '$StudentMobileNo', 
         '$dob', 
         '$StudentEmailId', 
         '$EmisId', 
         '$Gender', 
         '$FatherName', 
         '$ParentsMobileNo', 
         '$FatherOccupation', 
         '$Nationality', 
         '$Religion', 
         '$Community', 
         '$District', 
         '$State', 
         '$Pincode', 
         '$Village', 
         '$ApproachedBy', 
         '$FacultyName', 
         '$RecommendedStudentName', 
         '$RecommendedStudentYear', 
         '$RecommendedStudentDepartment', 
         '$SeekingAdmission', 
         '$Board10', 
         '$SchoolName10', 
         '$SchoolName12', 
         '$TotalMark10', 
         '$TotalMark12', 
         '$MediumOfInstruction10', 
         '$MediumOfInstruction12', 
         '$Group12', 
         '$NameOfInstitution', 
         '$DeptChoice1', 
         '$DeptChoice2', 
         '$DeptChoice3', 
         '$MathsMark', 
         '$PhysicsMark', 
         '$ChemistryMark', 
         '$Cutoff', 
         '$RegisterNo12', 
         '$NameOfDiplomaCourse', 
         '$PercentageDiploma', 
         '$NameOfTheCollege', 
         '$NameOfUGcourse', 
         '$CGPA', 
         '$Sport', 
         '$SportName', 
         '$SportLevel')";

         mysqli_query($conn, $insert);
         header('location:updated.html');
    }

};


?>