$(document).ready(function () {
    $("#StudentMobileNo").keyup(function () {
      var StudentMobileNo = $(this).val();
      // alert(number)
      $.ajax({
        type: "POST",
        url: "./duplicate-admission.php",
        data: {
          StudentMobileNo: StudentMobileNo,
        },
        success: function (response) {
          // console.log(response);
          $("#avail").html(response);
        },
      });
    });
  });
  