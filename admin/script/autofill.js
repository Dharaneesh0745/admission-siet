$(document).ready(function(){
  $("#StudentMobileNo").autocomplete({
      source:function(request,response){
        console.log("WOO!")
          $.ajax({
              type: 'POST',
              url: './autocomplete.php',
              dataType: 'json',
              data: {
                term:request.term
              },
              success: function (data) {
                  data = $.map(data, function(value,key){
                    return{
                      label: value.StudentMobileNo,
                      StudentName: value.StudentName,
                      dob: value.dob,
                      StudentEmailId: value.StudentEmailId,
                      EmisId: value.EmisId,
                      Gender: value.Gender,
                      FatherName: value.FatherName,
                      ParentsMobileNo: value.ParentsMobileNo,
                      FatherOccupation: value.FatherOccupation,
                      Nationality: value.Nationality,
                      Religion: value.Religion,
                      Community: value.Community,
                      District: value.District,
                      State: value.State,
                      Pincode: value.Pincode,
                      Village: value.Village,
                      ApproachedBy: value.ApproachedBy,
                      FacultyName: value.FacultyName,
                      RecommendedStudentName: value.RecommendedStudentName,
                      RecommendedStudentYear: value.RecommendedStudentYear,
                      RecommendedStudentDepartment: value.RecommendedStudentDepartment,
                      SeekingAdmission: value.SeekingAdmission,
                      BoardUG: value.BoardUG,
                      BoardPG: value.BoardPG,
                      BoardLE: value.BoardLE,
                      SchoolName10UG: value.SchoolName10UG,
                      //SchoolName10PG: value.SchoolName10PG,
                      //SchoolName10LE: value.SchoolName10LE,
                      SchoolName12UG: value.SchoolName12UG,
                      SchoolName12PG: value.SchoolName12PG,
                      SchoolName12LE: value.SchoolName12LE,
                      TotalMark10UG: value.TotalMark10UG,
                      TotalMark10PG: value.TotalMark10PG,
                      TotalMark10LE: value.TotalMark10LE,
                      TotalMark12UG: value.TotalMark12UG,
                      TotalMark12PG: value.TotalMark12PG,
                      TotalMark12LE: value.TotalMark12LE,
                      MediumOfInstruction10UG: value.MediumOfInstruction10UG,
                      MediumOfInstruction10PG: value.MediumOfInstruction10pg,
                      MediumOfInstruction10LE: value.MediumOfInstruction10le,
                      MediumOfInstruction12UG: value.MediumOfInstruction12UG,
                      MediumOfInstruction12PG: value.MediumOfInstruction12PG,
                      MediumOfInstruction12LE: value.MediumOfInstruction12LE,
                      Group12UG: value.Group12UG,
                      Group12PG: value.Group12PG,
                      Group12LE: value.Group12LE,
                      NameOfInstitution: value.NameOfInstitution,
                      DeptChoice1UG: value.DeptChoice1UG,
                      DeptChoice1PG: value.DeptChoice1PG,
                      DeptChoice1LE: value.DeptChoice1LE,
                      DeptChoice2UG: value.DeptChoice2UG,
                      DeptChoice2PG: value.DeptChoice2PG,
                      DeptChoice2LE: value.DeptChoice2LE,
                      DeptChoice3UG: value.DeptChoice3UG,
                      DeptChoice3PG: value.DeptChoice3PG,
                      DeptChoice3LE: value.DeptChoice3LE,
                      PhysicsMark: value.PhysicsMark,
                      ChemistryMark: value.ChemistryMark,
                      MathsMark: value.MathsMark,
                      CutOff: value.CutOff,
                      RegisterNo12: value.RegisterNo12,
                      Cgpa: value.CGPA,
                      NameOfUGCourse: value.NameOfUGcourse,
                      NameOfDiplomaCourse: value.NameOfDiplomaCourse,
                      PercentageDiploma: value.PercentageDiploma,
                      NameOfTheCollege: value.NameOfTheCollege,
                      Sport: value.Sport,
                      SportName: value.SportName,
                      SportLevel: value.SportLevel
                    };
                  });
                  var result = $.ui.autocomplete.filter(data, request.term);
                  // console.log(response);
                  response(result);
              }
          })
      },
      select: function(event,ui){
            $('#StudentName').val(ui.item.StudentName);
            $('#dob').val(ui.item.dob);
            $('#StudentEmailId').val(ui.item.StudentEmailId);
            $('#EmisId').val(ui.item.EmisId);
            $('#Gender').val(ui.item.Gender);
            $('#FatherName').val(ui.item.FatherName);
            $('#ParentsMobileNo').val(ui.item.ParentsMobileNo);
            $('#FatherOccupation').val(ui.item.FatherOccupation);
            $('#Nationality').val(ui.item.Nationality);
            $('#Religion').val(ui.item.Religion);
            $('#Community').val(ui.item.Community);
            $('#State').val(ui.item.State)
            $('#District').val(ui.item.District);
            $('#Pincode').val(ui.item.Pincode);
            $('#Village').val(ui.item.Village);
            $('#SeekingAdmission').val(ui.item.SeekingAdmission);
            $('#ApproachedBy').val(ui.item.ApproachedBy);
            $('#FacultyName').val(ui.item.FacultyName);
            $('#RecommendedStudentName').val(ui.item.RecommendedStudentName);
            $('#RecommendedStudentYear').val(ui.item.RecommendedStudentYear);
            $('#RecommendedStudentDepartment').val(ui.item.RecommendedStudentDepartment);
            $('#BoardUG').val(ui.item.BoardUG);
            $('#BoardPG').val(ui.item.BoardPG);
            $('#BoardLE').val(ui.item.BoardLE);
            $('#SchoolName10UG').val(ui.item.SchoolName10UG);
            $('#SchoolName12UG').val(ui.item.SchoolName12UG);
            $('#SchoolName12PG').val(ui.item.SchoolName12PG);
            $('#SchoolName12LE').val(ui.item.SchoolName12LE);
            $('#TotalMark10UG').val(ui.item.TotalMark10UG);
            $('#TotalMark10PG').val(ui.item.TotalMark10PG);
            $('#TotalMark10LE').val(ui.item.TotalMark10LE);
            $('#TotalMark12UG').val(ui.item.TotalMark12UG);
            $('#TotalMark12PG').val(ui.item.TotalMark12PG);
            $('#TotalMark12LE').val(ui.item.TotalMark12LE);
            $('#MediumOfInstruction10UG').val(ui.item.MediumOfInstruction10UG)
            $('#MediumOfInstruction10PG').val(ui.item.MediumOfInstruction10PG)
            $('#MediumOfInstruction10LE').val(ui.item.MediumOfInstruction10LE)
            $('#MediumOfInstruction12UG').val(ui.item.MediumOfInstruction12UG)
            $('#MediumOfInstruction12PG').val(ui.item.MediumOfInstruction12PG)
            $('#MediumOfInstruction12LE').val(ui.item.MediumOfInstruction12LE)
            $('#Group12UG').val(ui.item.Group12UG);
            $('#Group12PG').val(ui.item.Group12PG);
            $('#Group12LE').val(ui.item.Group12LE);
            $('#NameOfInstitution').val(ui.item.NameOfInstitution);
            $('#DeptChoice1UG').val(ui.item.DeptChoice1UG);
            $('#DeptChoice2UG').val(ui.item.DeptChoice2UG);
            $('#DeptChoice3UG').val(ui.item.DeptChoice3UG);
            $('#DeptChoice1PG').val(ui.item.DeptChoice1PG);
            $('#DeptChoice2PG').val(ui.item.DeptChoice2PG);
            $('#DeptChoice3PG').val(ui.item.DeptChoice3PG);
            $('#DeptChoice1LE').val(ui.item.DeptChoice1LE);
            $('#DeptChoice2LE').val(ui.item.DeptChoice2LE);
            $('#DeptChoice3LE').val(ui.item.DeptChoice3LE);
            $('#MathsMark').val(ui.item.MathsMark);
            $('#PhysicsMark').val(ui.item.PhysicsMark);
            $('#ChemistryMark').val(ui.item.ChemistryMark);
            $('#Cutoff').val(ui.item.Cutoff);
            $('#RegisterNo12').val(ui.item.RegisterNo12);
            $('#NameOfDiplomaCourse').val(ui.item.NameOfDiplomaCourse);
            $('#PercentageDiploma').val(ui.item.PercentageDiploma);
            $('#NameOfTheCollege').val(ui.item.NameOfTheCollege);
            $('#NameOfUGcourse').val(ui.item.NameOfUGcourse);
            $('#CGPA').val(ui.item.CGPA);
            $('#Sport').val(ui.item.Sport);
            $('#SportName').val(ui.item.SportName);
            $('#SportLevel').val(ui.item.SportLevel);

          }
     })
  })

