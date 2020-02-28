<html>
 Name: <input type="text" name="name" id='name' ><br><br>
    Address: <input type="text" name="address" id='address'><br><br>
    Phone Number: <input type="text" name="phone_number" ><br><br>
    E-mail: <input type="text" name="email" id='email'><br><br>
    <input type="button" onclick="mtData()" value="Submit"><br>
</html>



<script>
function mtData() {
  var name =  $("#name").val();
  var address =  $("#address").val();
  var phone_number =  $("#phone_number").val();
  var email =  $("#email").val();
    $.ajax({
  method: "POST",
  url: "edit.php",
  data: { name: name, address: address, phone_number:phone_number,email:email }
})
  .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });
}
</script>