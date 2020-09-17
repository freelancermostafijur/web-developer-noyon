<?php 

if( isset($_POST['contact_submit']) ){
    
    $full_name = $_POST['full_name'];
    $email_address = $_POST['Email_address'];
    $phone_number = $_POST['phone_number'];
    $subject = $_POST['subject'];
    $message = $_POST['contact_message'];

    $all_messege = "
           <div style='width:650px; background: #eaeaea; padding: 30px 35px;'> 
           <div style='width: 550px; background: #fff; margin: auto;padding: 20px 35px; border: 1px solid #ddd;'> 
           
               <div> 
               
                  <div style='border-bottom: 1px solid #ddd; padding: 0 0 5px 0;'> 
                      <span style='width: 250px;'>
                        <h1>Logo</h1>
                      </span>
                  </div>

                   <h4>Name:          <span style='color: blue; font-style: italic;'> $full_name  </span></h4>
                   <h4>E-mail Address: <span style='color: blue; font-style: italic;'> $email_address  </span></h4>
                   <h4>Phone No :     <span style='color: blue; font-style: italic;'> $phone_number  </span></h4>
                   <h4>Subject :      <span style='color: blue; font-style: italic;'> $subject  </span></h4><br>
                   <h4>Messege :                                                     <p>$message </p></h4>
               
               </div>

         </div>
         </div>
    ";
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

    $mail = mail('mostafijur34bd@gmail.com', 'My Web Site', $all_messege , $headers);
        if($mail){
            $success = "Your Mail has been sent successfully";
        }
}

?>