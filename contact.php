<?php
  
if($_POST)
  {
    $visitor_name = "";
    $visitor_email = "";
    $email_title = "";
    $concerned_department = "";
    $visitor_message = "";
    $email_body = "<div>";
      
    if(isset($_POST['visitor_name'])) 
     {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$visitor_name."</span>
                        </div>";
     }
 
    if(isset($_POST['visitor_email']))
     {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                        </div>";
     }
      
    if(isset($_POST['email_title'])) 
     {
        $email_title = filter_var($_POST['email_title'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$email_title."</span>
                        </div>";
     }
      
    if(isset($_POST['concerned_department'])) 
     {
        $concerned_department = filter_var($_POST['concerned_department'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Concerned Department:</b></label>&nbsp;<span>".$concerned_department."</span>
                        </div>";
     }
      
    if(isset($_POST['visitor_message']))
     {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$visitor_message."</div>
                        </div>";
     }
      
    if($concerned_department == "CSE")
     {
        $recipient = "harshasripathireddy@gmail.com";
     }
    else if($concerned_department == "ECE")  
     {
        $recipient = "harshasripathireddy@gmail.com";
     }
    else if($concerned_department == "EEE")   
     {
        $recipient = "harshasripathireddy@gmail.com";
     }
    else 
     {
        $recipient = "harshasripathireddy@gmail.com";
     }
      
 }
    $headers  = "from: vishnuvardhan11858@gmail.com"
      
  ?>