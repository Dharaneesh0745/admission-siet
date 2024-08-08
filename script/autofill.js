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
                      State: value.State,
                      District: value.District, 
                      Pincode: value.Pincode,
                      Village: value.Village,
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
            if(ui.item.state != "TamilNadu"){
              $('#P_State').val("OTHER STATES");
              $('#C_State').val("OTHER STATES");
              $('#P_OtherStateName').val(ui.item.State);
              $('#C_OtherStateName').val(ui.item.State);
              $('#P_OtherStateDistrictName').val(ui.item.District);
              $('#C_OtherStateDistrictName').val(ui.item.District);
              
            }
            else{
              $('#P_State').val("TAMILNADU");
              $('#C_State').val("TAMILNADU");
              $('#P_District').val(ui.item.District);
              $('#C_District').val(ui.item.District);
            }
            $('#P_Pincode').val(ui.item.Pincode);
            $('#P_Village').val(ui.item.Village);
            $('#C_Pincode').val(ui.item.Pincode);
            $('#C_Village').val(ui.item.Village);
          }
     })
  })

