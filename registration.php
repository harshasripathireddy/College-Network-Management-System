<html>
<body>
 <style>
   body
   {
     background-image:url("regbg.jpeg") ;
     background-position:center;
     background-size:cover;
     height:;
     margin:0;
     padding:0;
   }
   .reg-form
   {
     text-align:center;
     width:270px;
     margin: auto 0;
     padding:px;
     background-image:;
   }
   .input
   {
     border-radius:10px;
     padding:8px;
     margin:10px 0;
     border:2px solid white;
   }
    button
   {
     border-radius:10px;
     padding:5px;
     width:50%;
     background-color:#f79d00;
   }
 </style>
 <center>
 <div class="reg-form">
<form action="contact.php" method="post">
 <table>
  <tr><div class="elem-group">
    <td align="right"><label for="name"></label></td>
    <td><input type="text" id="name" name="visitor_name" placeholder="Name" pattern=[A-Z\sa-z]{3,20} required></td>
  </div></tr><br><br>
  <tr><div class="elem-group">
    <td align="right"<label for="email"></label></td>
    <td><input type="email" id="email" name="visitor_email" placeholder="Mail_id" required></td>
  </div></tr><br><br>
  <tr><div class="elem-group">
    <td align="right"><label for="department-selection"></label></td>
    <td><select id="department-selection" name="concerned_department" required>
        <option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="ME">ME</option>
        <option value="CE">CE</option>
        <option value="S&H">S&H</option>
    </select></td>
  </div></tr><br><br>
<tr><div class="elem-group">
    <td align="right"><label for="reason"></label></td>
    <td><select id="reason-selection" name="concerned_reason" required>
        <option value="">Select Reason</option>
        <option value="">Need a new device</option>
        <option value="">Problem in a device</option>
    </select></td>
  </div></tr><br><br>

<tr><div class="elem-group">
    <td align="right"><label for="Device-selection"></label></td>
    <td><select id="device-selection" name="concerned_device" required>
        <option value="">Select Device</option>
        <option value="printer">printer</option>
        <option value="projector">projector</option>
        <option value="cc-camera">cc-camera</option>
        <option value="networkswitch">networkswitch</option>
    </select></td>
  </div></tr><br><br>
  
  <tr><div class="elem-group">
    <td align="right"><label for="message"></label></td>
    <td><textarea id="message" name="visitor_message" placeholder="Message"></textarea></td>
  </div></tr><br><br>
  <tr><td></td><td><button type="submit">SUBMIT</button></td></tr>
</table></form></div></center>
</body>
</html>