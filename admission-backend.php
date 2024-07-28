<?php

@include 'config.php';

if(isset($_POST['submit'])){ 
    $StudentName = $_POST['StudentName'];
    $StudentMobileNo = $_POST['StudentMobileNo'];
    $dob = $_POST['dob'];
    $StudentEmailId = $_POST['StudentEmailId'];
    $EmisId = $_POST['EmisId'];
    $Salutation = $_POST['Salutation'];
    $Gender = $_POST['Gender'];
    $BloodGroup = $_POST['BloodGroup'];
    $Nationality = $_POST['Nationality'];
    $Religion = $_POST['Religion'];
    $Caste = $_POST['Caste'];
    $AadhaarNumber = $_POST['AadhaarNumber'];
    $Community = $_POST['Community'];
    $FirstGraduate = $_POST['FirstGraduate'];
    $SpecialAdmissionQuota = $_POST['SpecialAdmissionQuota'];
    $DifferentlyAbled = $_POST['DifferentlyAbled'];

    //Current Academic info
    $AcademicYearJoining = $_POST['AcademicYearJoining'];
    $StreamType = "Engineering and Technology";
    $CourseType = $_POST['CourseType'];
    $Course = $_POST['Course'];
    $Branch = $_POST['Branch'];
    $MediumOfInstruction = $_POST['MediumOfInstruction'];
    $ModeOfStudy = $_POST['ModeOfStudy'];
    $DateOfAdmission = $_POST['DateOfAdmission'];
    $TypeOfAdmission = $_POST['TypeOfAdmission'];
    $LateralEntry = $_POST['LateralEntry'];
    $Hosteller = $_POST['Hosteller'];

    //Educational Details
    $SeekingAdmissionFor = $_POST['SeekingAdmissionFor'];
    $SchoolName10 = $_POST['SchoolName10'];
    $MediumOfInstruction10 = $_POST['MediumOfInstruction10'];
    $TotalMark10 = $_POST['TotalMark10'];
    $SchoolName12 = $_POST['SchoolName12'];
    $MediumOfInstruction12 = $_POST['MediumOfInstruction12'];
    $Group12 = $_POST['Group12'];
    $MathsMark = $_POST['MathsMark'];
    $PhysicsMark = $_POST['PhysicsMark'];
    $ChemistryMark = $_POST['ChemistryMark'];
    $RegisterNo12 = $_POST['RegisterNo12'];
    $TotalMark12 = $_POST['TotalMark12'];
    $CutOff = $_POST['CutOff'];
    $NameOfDiplomaCourse = $_POST['NameOfDiplomaCourse'];
    $NameOfDiplomaCollege = $_POST['NameOfDiplomaCollege'];
    $PercentageDiploma = $_POST['PercentageDiploma'];
    $NameOfUGCollege = $_POST['NameOfUGCollege'];
    $NameOfUGCourse = $_POST['NameOfUGCourse'];
    $CGPA = $_POST['CGPA'];
    $Sport = $_POST['Sport'];
    $SportName = $_POST['SportName'];
    $SportLevel = $_POST['SportLevel'];

    //Family Information
    $FatherName = $_POST['FatherName'];
    $FatherOccupation = $_POST['FatherOccupation'];
    $ParentsMobileNumber = $_POST['ParentsMobileNumber'];
    $MotherName = $_POST['MotherName'];
    $MotherOccupation = $_POST['MotherOccupation'];
    $Orphan = $_POST['Orphan'];
    $GuardianName = $_POST['GuardianName'];
    $AnnualFamilyIncome = $_POST['AnnualFamilyIncome'];

   //Permanent Address
    $P_Country = $_POST['P_Country'];
    if ($_POST['P_State'] == "OTHER STATES"){
        $P_State = $_POST['P_OtherStateName'];
        $P_District = $_POST['P_OtherDistrictName'];
    }
    else{
       $P_State = $_POST['P_State'];
       $P_District = $_POST['P_District'];
    }
    $P_LocationType = $_POST['P_LocationType'];
    $P_Taluk = $_POST['P_Taluk'];
    $P_Village = $_POST['P_Village'];
    $P_Block = $_POST['P_Block'];
    $P_Pincode = $_POST['P_Pincode'];
    $P_VillagePanchayat = $_POST['P_VillagePanchayat'];
    $P_PostalAddress = $_POST['P_PostalAddress'];

   //Commnication Address
   $C_Country = $_POST['C_Country'];
   if ($_POST['C_State'] == "OTHER STATES"){
    $C_State = $_POST['C_OtherStateName'];
    $C_District = $_POST['C_OtherDistrictName'];
   }
   else{
    $C_State = $_POST['C_State'];
    $C_District = $_POST['C_District'];
   }
   $C_LocationType = $_POST['C_LocationType'];
   $C_Taluk = $_POST['C_Taluk'];
   $C_Village = $_POST['C_Village'];
   $C_Block = $_POST['C_Block'];
   $C_Pincode = $_POST['C_Pincode'];
   $C_VillagePanchayat = $_POST['C_VillagePanchayat'];
   $C_PostalAddress = $_POST['C_PostalAddress'];

   //Bank Account Details
   $AccountNumber = $_POST['AccountNumber'];
   $IfscCode = $_POST['IfscCode'];
   $BankName = $_POST['BankName'];
   $BankBranch = $_POST['BankBranch'];
   $City = $_POST['City'];
//    $BoardUG = $_POST['BoardUG'];
//    $BoardPG = $_POST['BoardPG'];
//    $BoardLE = $_POST['BoardLE'];
//    $SchoolName10UG = $_POST['SchoolName10UG'];
//    $SchoolName12UG = $_POST['SchoolName12UG'];
//    $SchoolName12PG = $_POST['SchoolName12PG'];
//    $SchoolName12LE = $_POST['SchoolName12LE'];
//    $TotalMark10UG = $_POST['TotalMark10UG'];
//    $TotalMark10PG = $_POST['TotalMark10PG'];
//    $TotalMark10LE = $_POST['TotalMark10LE'];
//    $TotalMark12UG = $_POST['TotalMark12UG'];
//    $TotalMark12PG = $_POST['TotalMark12PG'];
//    $TotalMark12LE = $_POST['TotalMark12LE'];
//    $MediumOfInstruction10UG = $_POST['MediumOfInstruction10UG'];
//    $MediumOfInstruction10PG = $_POST['MediumOfInstruction10PG'];
//    $MediumOfInstruction10LE = $_POST['MediumOfInstruction10LE'];
//    $MediumOfInstruction12UG = $_POST['MediumOfInstruction12UG'];
//    $MediumOfInstruction12PG = $_POST['MediumOfInstruction12PG'];
//    $MediumOfInstruction12LE = $_POST['MediumOfInstruction12LE'];
//    $Group12UG = $_POST['Group12UG'];
//    $Group12PG = $_POST['Group12PG'];
//    $Group12LE = $_POST['Group12LE'];
//    $NameOfInstitution = $_POST['NameOfInstitution'];
//    $DeptChoice1UG = $_POST['DeptChoice1UG'];
//    $DeptChoice2UG = $_POST['DeptChoice2UG'];
//    $DeptChoice3UG = $_POST['DeptChoice3UG'];
//    $DeptChoice1PG = $_POST['DeptChoice1PG'];
//    $DeptChoice2PG = $_POST['DeptChoice2PG'];
//    $DeptChoice3PG = $_POST['DeptChoice3PG'];
//    $DeptChoice1LE = $_POST['DeptChoice1LE'];
//    $DeptChoice2LE = $_POST['DeptChoice2LE'];
//    $DeptChoice3LE = $_POST['DeptChoice3LE'];
//    $MathsMark = $_POST['MathsMark'];
//    $PhysicsMark = $_POST['PhysicsMark'];
//    $ChemistryMark = $_POST['ChemistryMark'];
//    $Cutoff = $_POST['Cutoff'];
//    $RegisterNo12 = $_POST['RegisterNo12'];
//    $NameOfDiplomaCourse = $_POST['NameOfDiplomaCourse'];
//    $PercentageDiploma = $_POST['PercentageDiploma'];
//    $NameOfTheCollege = $_POST['NameOfTheCollege'];
//    $NameOfUGcourse = $_POST['NameOfUGcourse'];
//    $CGPA = $_POST['CGPA'];

   $select = " SELECT * FROM umis WHERE MobileNumber = '$StudentMobileNo' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      echo '<span>'."ONLY ONE REGISTRATION!".'</span>';

   }else{

      $insert = "INSERT INTO umis (
         StudName, 
         MobileNumber, 
         StudDOB, 
         StudEmailID, 
         EmisId, 
         Salutation,
         Gender, 
         BloodGroup, 
         Nationality, 
         Religion, 
         Caste, 
         AadhaarNumber, 
         Community, 
         FirstGraduate, 
         SpecialAdmissionQuota, 
         DifferentlyAbled,
         
         AcademicYearJoining,
         Streamtype,
         CourseType,
         Course,
         Branch,
         MediumOfInstruction,
         ModeOfStudy,
         DateOfAdmission,
         TypeOfAdmission,
         LateralEntry,
         Hosteller,

         SeekingAdmissionFor,
         SchoolName10,
         MediumOfInstruction10,
         TotalMark10,
         SchoolName12,
         MediumOfInstruction12,
         Group12,
         MathsMark,
         PhysicsMark,
         ChemistryMark,
         RegisterNo12,
         TotalMark12,
         CutOff,
         NameOfDiplomaCourse,
         NameOfDiplomaCollege,
         PercentageDiploma,
         NameOfUGCollege,
         NameOfUGCourse,
         CGPA,
         Sport,
         SportName,
         SportLevel,

         FatherName, 
         FatherOccupation, 
         ParentsMobileNumber, 
         MotherName, 
         MotherOccupation, 
         Orphan, 
         GuardianName, 
         AnnualFamilyIncome, 

         P_Country, 
         P_State, 
         P_District, 
         P_LocationType, 
         P_Taluk, 
         P_Village, 
         P_Block, 
         P_Pincode,
         P_VillagePanchayat, 
         P_PostalAddress, 

         C_Country, 
         C_State, 
         C_LocationType, 
         C_District, 
         C_Taluk, 
         C_Village, 
         C_Block,
         C_Pincode,, 
         C_VillagePanchayat, 
         C_PostalAddress,
          
         AccountNumber,
         IfscCode, 
         BankName, 
         BankBranch, 
         City
     ) VALUES (
        '$StudentName',
        '$StudentMobileNo',
        '$dob',
        '$StudentEmailId',
        '$EmisId',
        '$Salutation',
        '$Gender',
        '$BloodGroup',
        '$Nationality',
        '$Religion',
        '$Caste',
        '$AadhaarNumber',
        '$Community',
        '$FirstGraduate',
        '$SpecialAdmissionQuota',
        '$DifferentlyAbled',

        '$AcademicYearJoining',
        '$StreamType',
        '$CourseType',
        '$Course',
        '$Branch',
        '$MediumOfInstruction',
        '$ModeOfStudy',
        '$DateOfAdmission',
        '$TypeOfAdmission',
        '$LateralEntry',
        '$Hosteller',

        '$SeekingAdmissionFor',
        '$SchoolName10',
        '$MediumOfInstruction10',
        '$TotalMark10',
        '$SchoolName12',
        '$MediumOfInstruction12',
        '$Group12',
        '$MathsMark',
        '$PhysicsMark',
        '$ChemistryMark',
        '$RegisterNo12',
        '$TotalMark12',
        '$CutOff',
        '$NameOfDiplomaCourse',
        '$NameOfDiplomaCollege',
        '$PercentageDiploma',
        '$NameOfUGCollege',
        '$NameOfUGCourse',
        '$CGPA',
        '$Sport',
        '$SportName',
        '$SportLevel',

        '$FatherName',
        '$FatherOccupation',
        '$ParentsMobileNumber',
        '$MotherName',
        '$MotherOccupation',
        '$Orphan',
        '$GuardianName',
        '$AnnualFamilyIncome',

        '$P_Country',
        '$P_State',
        '$P_District',
        '$P_LocationType',
        '$P_Taluk',
        '$P_Village',
        '$P_Block',
        '$P_Pincode',
        '$P_VillagePanchayat',
        '$P_PostalAddress',

        '$C_Country',
        '$C_State',
        '$C_District',
        '$C_LocationType',
        '$C_Taluk',
        '$C_Village',
        '$C_Block',
        '$C_Pincode',
        '$C_VillagePanchayat',
        '$C_PostalAddress',

        '$AccountNumber',
        '$IfscCode',
        '$BankName',
        '$BankBranch',
        '$City'
       
     )";
     
     
        
         mysqli_query($conn, $insert);
         header('location:admission.php');
    }

};

?>