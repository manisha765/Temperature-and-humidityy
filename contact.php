<?php
include("insert.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <title>Contact Us</title>
    <link rel="stylesheet" href="contact3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,700;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
      <h1>Connect With Us</h1>
      <p>
        We would love to respond to your queries and help you succeed.
        <br />Feel free to get in touch with us!
      </p>
      <div class="contact-box">
        <div class="contact-left">
          <h3>Send Your Request</h3>
          <form action = "<?php echo $_SERVER['REQUEST_URI'];?>"  method ="post">
            <div class="input-row">
              <div class="input-group">
                <label>Name</label>
                <input type="text" placeholder="Amarjot Singh Phull"
                name = "Name" />
              </div>

              <div class="input-group">
                <label>Phone</label>
                <input type="text" placeholder="+91 8149721552" 
                name = "Phone_no"/>
              </div>
            </div>
            <div class="input-row">
              <div class="input-group">
                <label>E-mail</label>
                <input type="email" placeholder="phullsinghamarjot@gmail.com"
                name = "email" />
              </div>

              <div class="input-group">
                <label>Subject</label>
                <input type="text" placeholder="Product Demo" 
                name = "subject"/>
              </div>
            </div>

            <label>Message</label>
            <textarea rows="05" placeholder="Your Message" name = "message"></textarea>

            <button name="submit" value="submit" type="submit" >SEND</button>
          </form>

        </div>
  <!-- <button name="details" value="details" type="details" 
           onclick target="_blank">details</button> -->
          <!-- <a href= "miniprojectnew/details.php">
           <button>CONTACT DATA</button> 
       -->

        <div class="contact-right">
          <h3>Reach Us</h3>
          <table>
            <tr>
              <td>Email</td>
              <td>weatherycontact@gmail.com</td>
            </tr>
            <tr>
              <td>Phone</td>
              <td>+91 9702721250</td>
            </tr>
            <tr>
              <td>Address</td>
              <td>
                Fifth Avenue, Ground Floor ,3rd cross <br />
                Park layout , Ghule Road , Mirzapur<br />
                Maharashtra 421202
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

<?php

if ($_POST['submit'])
{
 $Name = $_POST['Name'];
 $Phone_no = $_POST['Phone_no'];
 $email = $_POST['email'];
 $message =$_POST['message'];
 $subject = $_POST['subject'];
  
 echo "Arrived at server";


 $query = "INSERT INTO enquiry values('$Name','$Phone_no','$email','$message','$subject')";
  $data = mysqli_query($conn,$query);

if($data)
{
  
  echo "data inserted into database";

}
else 
{
    echo "failed";
}

}
?>



