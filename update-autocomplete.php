<?php

@include 'config.php';

if (isset($_GET['StudentMobileNo'])) {
    $StudentMobileNo = $_GET['StudentMobileNo'];
    
    $sql = "SELECT StudName, 
         StudentMobileNo, 
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
         Board10,
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
         C_Pincode, 
         C_VillagePanchayat, 
         C_PostalAddress,
          
         AccountNumber,
         IfscCode, 
         BankName, 
         BankBranch, 
         City FROM umis WHERE StudentMobileNo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $StudentMobileNo);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode($data);
    } else {
        echo json_encode(["error" => "No data found"]);
    }
    $stmt->close();
} else {
    echo json_encode(["error" => "StudentMobileNo not provided"]);
}

?>
