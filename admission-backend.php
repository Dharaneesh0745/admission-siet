
<?php

@include 'config.php';

if(isset($_POST['submit'])){ 
   $StudentName = $_POST['StudentName'];
   $StudentMobileNo = $_POST['StudentMobileNo'];
   $dob = $_POST['dob'];
   $StudentEmailId = $_POST['StudentEmailId'];
   $AadhaarNumber = $_POST['AadhaarNumber'];
   $EmisId = $_POST['EmisId'];
   $Gender = $_POST['Gender'];
   $BloodGroup = $_POST['BloodGroup'];
   $Nationality = $_POST['Nationality'];
   $Religion = $_POST['Religion'];
   $Community = $_POST['Community'];
   $Caste = $_POST['Caste'];
   $FirstGraduate = $_POST['FirstGraduate'];
   $SpecialAdmissionQuota = $_POST['SpecialAdmissionQuota'];
   $DifferentlyAbled = $_POST['DifferentlyAbled'];
   $P_Country = $_POST['P_Country'];
   $P_State = $_POST['P_State'];
   $P_District = $_POST['P_District'];
   $P_LocationType = $_POST['P_LocationType'];
   $P_Taluk = $_POST['P_Taluk'];
   $P_Village = $_POST['P_Village'];
   $P_Block = $_POST['P_Block'];
   $P_Pincode = $_POST['P_Pincode'];
   $P_VillagePanchayat = $_POST['P_VillagePanchayat'];
   $P_PostalAddress = $_POST['P_PostalAddress'];
   $C_Country = $_POST['C_Country'];
   $C_State = $_POST['C_State'];
   $C_District = $_POST['C_District'];
   $C_LocationType = $_POST['C_LocationType'];
   $C_Taluk = $_POST['C_Taluk'];
   $C_Village = $_POST['C_Village'];
   $C_Block = $_POST['C_Block'];
   $C_Pincode = $_POST['C_Pincode'];
   $C_VillagePanchayat = $_POST['C_VillagePanchayat'];
   $C_PostalAddress = $_POST['C_PostalAddress'];
   $FatherName = $_POST['FatherName'];
   $FatherOccupation = $_POST['FatherOccupation'];
   $MotherName = $_POST['MotherName'];
   $MotherOccupation = $_POST['MotherOccupation'];
   $GuardianName = $_POST['GuardianName'];
   $Orphan = $_POST['Orphan'];
   $AnnualFamilyIncome = $_POST['AnnualFamilyIncome'];
   $ParentsMobileNo = $_POST['ParentsMobileNo'];
   $IfscCode = $_POST['IfscCode'];
   $BankName = $_POST['BankName'];
   $BankBranch = $_POST['BankBranch'];
   $City = $_POST['City'];

   $select = " SELECT * FROM umis WHERE MobileNumber = '$StudentMobileNo' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

    //   $error[] = 'mobile already exist!';
      echo '<span class="error-msg">'."error!! dumil".'</span>';

   }else{

      $insert = "INSERT INTO umis (
         EmisId, 
         StudentName, 
         dob, 
         Gender, 
         BloodGroup, 
         Nationality, 
         Religion, 
         Community, 
         Caste, 
         AadhaarNumber, 
         FirstGraduate, 
         SpecialAdmissionQuota, 
         DifferentlyAbled, 
         MobileNumber, 
         P_Country, 
         P_State, 
         P_LocationType, 
         P_District, 
         P_Taluk, 
         P_Village, 
         P_Block, 
         P_VillagePanchayat, 
         P_PostalAddress, 
         C_Country, 
         C_State, 
         C_LocationType, 
         C_District, 
         C_Taluk, 
         C_Village, 
         C_Block, 
         C_VillagePanchayat, 
         C_PostalAddress, 
         FatherName, 
         FatherOccupation, 
         MotherName, 
         MotherOccupation, 
         GuardianName, 
         Orphan, 
         AnnualFamilyIncome, 
         ParentMobileNumber, 
         IfscCode, 
         BankName, 
         BankBranch, 
         City
     ) VALUES (
         '$EmisId',
         '$StudentName',
         '$dob',
         '$Gender',
         '$BloodGroup',
         '$Nationality',
         '$Religion',
         '$Community',
         '$Caste',
         '$AadhaarNumber',
         '$FirstGraduate',
         '$SpecialAdmissionQuota',
         '$DifferentlyAbled',
         '$StudentMobileNo',
         '$P_Country',
         '$P_State',
         '$P_LocationType',
         '$P_District',
         '$P_Taluk',
         '$P_Village',
         '$P_Block',
         '$P_VillagePanchayat',
         '$P_PostalAddress',
         '$C_Country',
         '$C_State',
         '$C_LocationType',
         '$C_District',
         '$C_Taluk',
         '$C_Village',
         '$C_Block',
         '$C_VillagePanchayat',
         '$C_PostalAddress',
         '$FatherName',
         '$FatherOccupation',
         '$MotherName',
         '$MotherOccupation',
         '$GuardianName',
         '$Orphan',
         '$AnnualFamilyIncome',
         '$ParentsMobileNo',
         '$IfscCode',
         '$BankName',
         '$BankBranch',
         '$City'
     )";
     
     
        
         mysqli_query($conn, $insert);
         header('location:login_form.php');
    }

};

?>