$(document).ready(function() {
    $('#StudentMobileNo').on('keyup', function() {
      fetchstudentdata();
    });
});

function updateCourseOptions(courseType) {

    if (courseType) {
        // Fetch courses based on courseType
        $.ajax({
            url: './autofill-php/get-courses.php', // Adjust URL to your server-side script
            type: 'GET',
            data: { CourseType: courseType },
            success: function(response) {
                try {
                    var courses = JSON.parse(response);
                    // console.log(courses);
                    if (courses.error) {
                        console.error(courses.error);
                    } else {
                        // Populate the Course dropdown
                        courses.forEach(function(course) {
                            $('#courseType').append(`<option value="${course.name}">${course.name}</option>`);
                        });
                    }
                } catch (e) {
                    console.error("Invalid JSON response");
                    console.error(response);
                }
            },
            error: function(xhr, status, error) {
                console.log("ERROR:");
                console.error('AJAX Error: ' + status + error);
            }
        });
    }
}

function updateBranchOptions(course) {

    if (course) {
        // Fetch courses based on courseType
        $.ajax({
            url: './autofill-php/get-branches.php', // Adjust URL to your server-side script
            type: 'GET',
            data: { Course: course },
            success: function(response) {
                try {
                    var Branches = JSON.parse(response);
                    // console.log(Branches);
                    if (Branches.error) {
                        console.error(Branches.error);
                    } else {
                        // Populate the Course dropdown
                        Branches.forEach(function(branch) {
                            $('#branch').append(`<option value="${branch.name}">${branch.name}</option>`);
                        });
                    }
                } catch (e) {
                    console.error("Invalid JSON response");
                    console.error(response);
                }
            },
            error: function(xhr, status, error) {
                console.log("ERROR:");
                console.error('AJAX Error: ' + status + error);
            }
        });
    }
}

function fetchstudentdata() {
  var StudentMobileNo = $('#StudentMobileNo').val();
  $.ajax({
      url: './update-autocomplete.php',
      type: 'GET',
      data: { StudentMobileNo: StudentMobileNo },
      success: function(response) {
          try {
              var data = JSON.parse(response);
              if (data.error) {
                  console.error(data.error);
                  // alert(data.error);
                } else {
                    console.log(data);
                    $('#StudentName').val(data.StudName);
                    $('#StudentEmailId').val(data.StudEmailID);
                    $('#dob').val(data.StudDOB);
                    $('#EmisId').val(data.EmisId);
                    $('#Salutation').val(data.Salutation);
                    $('#Gender').val(data.Gender);
                    $('#BloodGroup').val(data.BloodGroup);
                    $('#Nationality').val(data.Nationality);
                    $('#Religion').val(data.Religion);
                    $('#Caste').val(data.Caste);
                    $('#AadhaarNumber').val(data.AadhaarNumber);
                    $('#Community').val(data.Community);
                    if (data.FirstGraduate === "yes") {
                        $('#FirstGraduateYes').prop('checked', true);
                    } else if (data.FirstGraduate === "no") {
                        $('#FirstGraduateNo').prop('checked', true);
                    }
                    if (data.SpecialAdmissionQuota === "yes") {
                        $('#SpecialAdmissionQuotaYes').prop('checked', true);
                    } else if (data.FirstGraduate === "no") {
                        $('#SpecialAdmissionQuotaNo').prop('checked', true);
                    }
                    if (data.DifferentlyAbled === "yes") {
                        $('#DifferentlyAbledYes').prop('checked', true);
                    } else if (data.FirstGraduate === "no") {
                        $('#DifferentlyAbledNo').prop('checked', true);
                    }
                    //CURRENT ACADEMIC INFORMATION
                    $('#AcademicYearJoining').val(data.AcademicYearJoining);
                    setTimeout(function() {
                        $('#course').val(data.CourseType);
                    }, 500); // Adjust the timeout as necessary
                    updateCourseOptions(data.CourseType);
                    setTimeout(function() {
                        $('#courseType').val(data.Course);
                    }, 500); // Adjust the timeout as necessary
                    updateBranchOptions(data.Course);
                    setTimeout(function() {
                        $('#branch').val(data.Branch);
                    }, 500); // Adjust the timeout as necessary
                    $('#MediumOfInstruction').val(data.MediumOfInstruction);
                    $('#ModeOfStudy').val(data.ModeOfStudy);
                    $('#DateOfAdmission').val(data.DateOfAdmission);
                    $('#Source').val(data.TypeOfAdmission);
                    setTimeout(function() {
                        $('#counsellingNumber').val(data.counsellingNumber);
                    }, 500); // Adjust the timeout as necessary
                    if (data.LateralEntry === "yes") {
                        $('#LateralEntry').prop('checked', true);
                    } else if (data.FirstGraduate === "no") {
                        $('#LateralEntry').prop('checked', true);
                    }
                    if (data.Hosteller === "yes") {
                        $('#Hosteller').prop('checked', true);
                    } else if (data.Hosteller === "no") {
                        $('#Hosteller').prop('checked', true);
                    }
                    //SEEKING ADMISSION FOR
                    $('#educationLevel').val(data.SeekingAdmissionFor);
                    $('#SchoolName10').val(data.SchoolName10);
                    $('#Board10').val(data.Board10);
                    $('#MediumOfInstruction10').val(data.MediumOfInstruction10);
                    $('#TotalMark10').val(data.TotalMark10);
                    $('#SchoolName12').val(data.SchoolName12);
                    $('#MediumOfInstruction12').val(data.MediumOfInstruction12);
                    $('#Group12').val(data.Group12);
                    $('#PhysicsMark').val(data.PhysicsMark);
                    $('#ChemistryMark').val(data.ChemistryMark);
                    $('#MathsMark').val(data.MathsMark);
                    $('#RegisterNo12').val(data.RegisterNo12);
                    $('#TotalMark12').val(data.TotalMark12);
                    $('#CutOff').val(data.CutOff);
                    $('#NameOfDiplomaCourse').val(data.NameOfDiplomaCourse);
                    $('#NameOfDiplomaCollege').val(data.NameOfDiplomaCollege);
                    $('#PercentageDiploma').val(data.PercentageDiploma);
                    $('#NameOfUGCollege').val(data.NameOfUGCollege);
                    $('#NameOfUGCourse').val(data.NameOfUGCourse);
                    $('#CGPA').val(data.CGPA);
                    $('#Sport').val(data.Sport);
                    $('#SportName').val(data.SportName);
                    $('#SportLevel').val(data.SportLevel);
                    //FAMILY DETAILS
                    $('#FatherName').val(data.FatherName);
                    $('#FatherOccupation').val(data.FatherOccupation);
                    $('#ParentsMobileNo').val(data.ParentsMobileNumber);
                    $('#MotherName').val(data.MotherName);
                    $('#MotherOccupation').val(data.MotherOccupation);
                    $('#Orphan').val(data.Orphan);
                    $('#GuardianName').val(data.GuardianName);
                    $('#AnnualFamilyIncome').val(data.AnnualFamilyIncome);
                    //PERMANENT ADDRESS
                    $('#P_Country').val(data.P_Country);
                    $('#P_State').val(data.P_State);
                    $('#P_District').val(data.P_District);
                    $('#P_LocationType').val(data.P_LocationType);
                    $('#P_Taluk').val(data.P_Taluk);
                    $('#P_Village').val(data.P_Village);
                    $('#P_Block').val(data.P_Block);
                    $('#P_Pincode').val(data.P_Pincode);
                    $('#P_VillagePanchayat').val(data.P_VillagePanchayat);
                    $('#P_PostalAddress').val(data.P_PostalAddress);
                    //COMMUNICATION ADDRESS
                    $('#C_Country').val(data.C_Country);
                    $('#C_State').val(data.C_State);
                    $('#C_LocationType').val(data.C_LocationType);
                    $('#C_District').val(data.C_District);
                    $('#C_Taluk').val(data.C_Taluk);
                    $('#C_Village').val(data.C_Village);
                    $('#C_Block').val(data.C_Block);
                    $('#C_Pincode').val(data.C_Pincode);
                    $('#C_VillagePanchayat').val(data.C_VillagePanchayat);
                    $('#C_PostalAddress').val(data.C_PostalAddress);
                    //BANK
                    $('#AccountNumber').val(data.AccountNumber);
                    $('#IfscCode').val(data.IfscCode);
                    $('#BankName').val(data.BankName);
                    $('#BankBranch').val(data.BankBranch);
                    $('#City').val(data.City);

              }
          } catch (e) {
              console.error("Invalid JSON response");
              console.error(response);
          }
      },
      error: function(xhr, status, error) {
          console.log("ERROR:");
          console.error('AJAX Error: ' + status + error);
      }
  });
}
