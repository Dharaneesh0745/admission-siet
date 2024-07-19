$(document).ready(function () {
  $("#StudentMobileNo").keyup("focusout", function () {
    var StudentMobileNo = $(this).val();
    // alert(number)
    $.ajax({
      type: "POST",
      url: "duplicate.php",
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
