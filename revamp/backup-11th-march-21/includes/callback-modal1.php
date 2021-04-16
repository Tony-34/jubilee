<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- Callback Modal -->
  <div class="modal fade callbackModal" id="callbackModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Please enter the phone number and we will call you back soon</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form class="callback-form" id="callback-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                    <p>Fields marked with an <span class="asterisk">*</span> are required</p>
                </div>
                <br>
                <div class="form-group">
                  <label for="phoneNumber">Cell Phone Number <span class="asterisk">*</span> </label>
                  <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="25472000000" required>
                </div>
                <div class="form-group">
                    <label for="email">Email address <span class="asterisk">*</span></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="you@email.com" required>
                  </div>
                  <!-- <div class="form-group">
                    <label>Security Check</label> -->
                    <!-- <button class="g-recaptcha" 
                        data-sitekey="6Lchvk8aAAAAAAOqaW7MS0U8d2df8FJChxT0n8Ee" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button> -->

                  <!-- </div> -->
                  <div class="form-group">

                      <button class="bg-black callback-submit" type="submit">
                          Submit Call Request
                      </button>
                  </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
  <!-- end callback modal -->
  <?php
    function sendmail($email, $phone){
        $to = "Talk2us@jubileekenya.com";
        $subject = "Test Email";
        $txt = "I would very much appreciate the opportunity to speak with you personally to learn more about your products. 
        Please feel free to contact me directly at ".$phone."  or by email at ".$email.".";
        $headers = "From: ".$email."" . "\r\n" .
        "CC:dev@bean.co.ke";
        
        mail($to,$subject,$txt,$headers); 
      echo "<script>swal('Sent', 'We will get back to you soon!', 'success');</script>";
    }
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $phone = $email ="";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $phone = test_input($_REQUEST['phoneNumber']);
      $email = test_input($_REQUEST["email"]);
   
    // echo "<script>alert('".$email."')</script>";
    // sendmail($email, $phone);
  }
    ?>

  