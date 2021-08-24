/* (function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        680: {
          items: 2,
          nav: false,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }
    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
 */
$(document).ready(function () {
  // Handler for .ready() called.
  $('html, body').animate({
      scrollTop: $('.to-scrol').offset().top
  }, 'slow');
});

function validateSignForm() {


  var name = document.regform.uname.value;
  var email = document.regform.uemail.value;
  var password = document.regform.pass.value;
  var re_password = document.regform.re_pass.value;



  if (name == null || name == "") {
      alert("name can't be blank");
      return false;
  } else if (email == null || email == "") {
      alert("email can't be blank");
      return false;
  } else if (password == null || password == "") {
      alert("password can't be blank");
      return false;
  } 
else if (password.length<5) {
      alert("password can't be less than 5 character");
      return false;
  } 
else if (/^[a-zA-Z0-9- ]*$/.test(password) == true) {
      alert("password must contain special character");
      return false;
  } 

else if (password == password.toUpperCase() || password == password.toLowerCase() ) {
      alert("password must contain one upper case and one lower case character");
      return false;
  } 
else if (re_password == null || re_password == "") {
      alert("repeat password can't be blank");
      return false;
  }
else if (password != re_password) {
      alert("password didn't matched");
      return false;
  }

}

function validateMechanicForm() {


  var owner_name = document.reviewform.owner_name.value;
  var garage_name = document.reviewform.garage_name.value;
  var phone = document.reviewform.phone.value;
  var operating_hours = document.reviewform.operating_hours.value;
  var address = document.reviewform.address.value;
  var speciality = document.reviewform.speciality.value;
  var homeServices = document.reviewform.homeServices.value;
  



    if (owner_name == null || owner_name == "") {
        alert("owner name can't be blank");
        return false;
    } 
    else if (garage_name == null || garage_name == "") {
        alert("garage name can't be blank");
        return false;
    } 
    else if (phone == null || phone == "") {
          alert("contact can't be blank");
          return false;
      } 
    else if (operating_hours == null || operating_hours == "") {
          alert("operating hours can't be blank");
          return false;
      } 
    else if (address == null || address == "") {
          alert("address can't be blank");
          return false;
      } 
    else if (speciality == null || speciality == "") {
          alert("speciality can't be blank");
          return false;
      } 
      else if (homeServices == null || homeServices == "") {
        alert("home services can't be blank");
        return false;
    } 

  }

  function validateReviewForm() {


    var name = document.regform.garage_name.value;
    var experince = document.regform.experince.value;
  
  
  
    if (name == null || name == "") {
        alert("name can't be blank");
        return false;
    } else if (experince == null || experince == "") {
        alert("experince can't be blank");
        return false;
    } 
  
  }


  function validateContactForm() {


    var name = document.regform.uname.value;
    var email = document.regform.uemail.value;
    var phone = document.regform.uphone.value;
    var message = document.regform.umessage.value;
  
  
  
    if (name == null || name == "") {
        alert("name can't be blank");
        return false;
    } else if (email == null || email == "") {
        alert("email can't be blank");
        return false;
    } 
      else if (phone == null || phone == "") {
        alert("phone can't be blank");
        return false;
    }
      else if (message == null || message == "") {
        alert("message can't be blank");
        return false;
    }
  
  }