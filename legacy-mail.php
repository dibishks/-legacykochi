<?php
//if "email" variable is filled out, send email
 if (isset($_POST['Email']))  {
  //Email information
  $admin_email = "legacykochi@gmail.com";
  $email = $_POST['Email'];
  $name = $_POST['Name'];
  $phone = $_POST['Phone'];
  $comment = $_POST['content'];
  $subject = $name + ' _ ' + $phone;
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
echo "<script>
alert('Thank you for contacting us! We will get back to you soon');
window.location.href='index.html';
</script>";
  //Email response
  }
  ?>
