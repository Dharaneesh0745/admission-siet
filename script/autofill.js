$(document).ready(function(){
  $("#StudentMobileNo").autocomplete({
      source:function(request,response){
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
                      label: value.StudentMobileno,
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
                      State: value.State,
                      Pincode: value.Pincode,
                      Village: value.Village,
                      SeekingAdmission : value.SeekingAdmission,
                      SchoolName10 : value.SchoolName10LE||value.SchoolName10UG||value.SchoolName10PG,
                      Board : value.BoardUG||value.BoardPG||value.BoardLE,
                      MediumOfInstruction10 : value.MediumOfInstruction10UG||value.MediumOfInstruction10PG||value.MediumOfInstruction10LE,
                      TotalMark10 : value.TotalMark10UG||value.TotalMark10PG||value.TotalMark10LE,
                      SchoolName12 : value.SchoolName12UG||value.SchoolName12PG||value.SchoolName12LE,
                      MediumOfInstruction12 : value.MediumOfInstruction12UG||value.MediumOfInstruction12PG||value.MediumOfInstruction12LE,
                      Group12 : value.Group12UG||value.Group12PG||value.Group12LE,
                      TotalMark12 : value.TotalMark12UG||value.TotalMark12PG||value.TotalMark12LE,
                      PhysicsMark : value.PhysicsMark,
                      ChemistryMark : value.ChemistryMark,
                      MathsMark : value.MathsMark,
                      CutOff : value.CutOff,
                      RegisterNo12 : value.RegisterNo12,
                      Sport : value.Sport,
                      SportName : value.SportName,
                      SportLevel : value.SportLevel
                    };
                  });
                  var result = $.ui.autocomplete.filter(data, request.term);
                  console.log(response);
                  response(result);
              }
          })
      },
      select: function(event,ui){
            $('StudentName').val(ui.item.StudentName);
            $('dob').val(ui.item.dob);
            $('StudentEmailId').val(ui.item.StudentEmailId);
            $('EmisId').val(ui.item.EmisId);
            $('Gender').val(ui.item.Gender);
            $('FatherName').val(ui.item.FatherName);
            $('ParentsMobileNo').val(ui.item.ParentsMobileNo);
            $('FatherOccupation').val(ui.item.FatherOccupation);
            $('Nationality').val(ui.item.Nationality);
            $('Religion').val(ui.item.Religion);
            $('Community').val(ui.item.Community);
            $('P_State').val(ui.item.State);
            $('P_District').val(ui.item.District);
            $('P_Pincode').val(ui.item.Pincode);
            $('P_Village').val(ui.item.Village);
            $('C_State').val(ui.item.State)
            $('C_District').val(ui.item.District);
            $('C_Pincode').val(ui.item.Pincode);
            $('C_Village').val(ui.item.Village);
            $('SchoolName10').val(ui.item.SchoolName10);
            $('Board').val(ui.item.Board);
            $('SeekingAdmissionFor').val(ui.item.SeekingAdmission);
            $('MediumOfInstruction10').val(ui.item.MediumOfInstruction10);
            $('TotalMark10').val(ui.item.TotalMark10);
            $('SchoolName12').val(ui.item.SchoolName12);
            $('MediumOfInstruction12').val(ui.item.MediumOfInstruction12);
            $('Group12').val(ui.item.Group12);
            $('TotalMark12').val(ui.item.TotalMark12);
            $('PhysicsMark').val(ui.item.PhysicsMark);
            $('ChemistryMark').val(ui.item.ChemistryMark);
            $('MathsMark').val(ui.item.MathsMark);
            $('CutOff').val(ui.item.CutOff);
            $('RegisterNo12').val(ui.item.RegisterNo12);
            $('Sport').val(ui.item.Sport);
            $('SportName').val(ui.item.SportName);
            $('SportLevel').val(ui.item.SportLevel);
          }
     })
  })

