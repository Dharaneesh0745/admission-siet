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
            $('#P_State').val(ui.item.State)
            $('#P_District').val(ui.item.District);
            $('#P_Pincode').val(ui.item.Pincode);
            $('#P_Village').val(ui.item.Village);
            $('#C_State').val(ui.item.State)
            $('#C_District').val(ui.item.District);
            $('#C_Pincode').val(ui.item.Pincode);
            $('#C_Village').val(ui.item.Village);
          }
     })
  })

