let form = document.getElementById('formulaire')
let submitForm = document.getElementById('submitForm')

$(document).ready(function() {
   
    $('#submitForm').on('click', function() {
      var email = $('#email').val();
      if(email!=""){
        /*  $("#butsave").attr("disabled", "disabled"); */
          $.ajax({
              url: "/userData",
              type: "POST",
              data: {
                  _token: $("#csrf").val(),
                  type: 1,
                  name: name,
                  email: email,
                  phone: phone,
                  city: city
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);
                  var dataResult = JSON.parse(dataResult);
                  if(dataResult.statusCode==200){
                    window.location = "/userData";				
                  }
                  else if(dataResult.statusCode==201){
                     alert("Error occured !");
                  }
                  
              }
          });
      }
      else{
          alert('Please fill all the field !');
      }
  });
});