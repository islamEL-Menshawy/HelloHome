$.ajaxSetup({
  headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Subscribe
$('#subscribeBtn').on("click", function () {
    // console.log(id);
    var subscribe = $("#subscribeInput").val();
    var _token = $("#_token").val();
    $.ajax({
        url: "/api/subscribe?email=" + subscribe,
        type: "POST",
        data: {_token: _token},
        beforeSend: function() {

        },
        success: function (data) {
            console.log(data);
            new Notify ({
              title: 'Subscribe',
              text: `Subscribed Successfully`,
              status: 'success',
              autoclose: true,
              autotimeout: 5000,
          });
          $("#subscribeInput").val("");
        },
        error: function(data) {
          new Notify ({
              title: 'Subscribe',
              text: `Something Wrong`,
              status: 'error',
              autoclose: true,
              autotimeout: 5000,
          });
        },
    });
});

// Contact Us
$('#contactUsBtn').on("click", function () {
    var data = $("#contactUsForm").serialize();
    var _token = $("#_token").val();
    $('#contactUsBtn').attr('disabled', true);
    $.ajax({
        url: "/api/contact-us",
        type: "POST",
        data: data,
        beforeSend: function() {

        },
        success: function (data) {
            console.log(data);
            new Notify ({
              title: 'Contact Us',
              text: `Successfully Contact Us`,
              status: 'success',
              autoclose: true,
              autotimeout: 5000,
          });
          $("#contactUsForm")[0].reset();
          $('#contactUsBtn').attr('disabled', false);
        },
        error: function(data) {
          new Notify ({
              title: 'Contact Us',
              text: `Something Wrong`,
              status: 'error',
              autoclose: true,
              autotimeout: 5000,
          });
          $('#contactUsBtn').attr('disabled', false);
        },
    });
});

// Unit Page
$('#intrestsBtn').on("click", function () {
    var fullName = $("#fullName").val();
    var email = $("#email").val();
    var phone_code = $("#tel-keys").val();
    var phone_number = $("#phone_number").val();
    var massage = $("#massage").val();
    var _token = $("#_token").val();
    var unit_url = document.location.href;
    $('#intrestsBtn').attr('disabled', true);
    $.ajax({
        url: "/api/unit-interest",
        type: "POST",
        data: {
          fullName: fullName,
          email: email,
          phone_code: phone_code,
          phone_number: phone_number,
          massage: massage,
          _token: _token,
          unit_url: unit_url
        },
        beforeSend: function() {

        },
        success: function (data) {
            console.log(data);
            new Notify ({
              title: 'Intrests',
              text: `Successfully Contact Us`,
              status: 'success',
              autoclose: true,
              autotimeout: 5000,
          });
          $('#intrestsBtn').attr('disabled', false);
          $("#fullName").val("");
          $("#email").val("");
          $("#tel-keys").val("");
          $("#phone_number").val("");
          $("#massage").val("");
          $("#toggleContactContainer").slideUp(500);
        },
        error: function(data) {
          new Notify ({
              title: 'Intrests',
              text: `Something Wrong`,
              status: 'error',
              autoclose: true,
              autotimeout: 5000,
          });
          $('#intrestsBtn').attr('disabled', false);
        },
    });
});

