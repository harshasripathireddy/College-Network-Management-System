<html >
<head>
<style>
   body
   {
     background-image:url("regbg.jpg");
     background-position:center;
     background-size:cover;
font-family: Arial, Helvetica, sans-serif;
   
   }
  .reg-form
   {
     text-align:center;
     width:600px;
     margin:0% auto 0;
     padding:0px;
    background-color:#607161;
     background-image:;
   }
   .input
   {
     border-radius:100px;
     padding:8px;
     margin:10px 0;
     border:2px solid rgb(168,166,166);
   }
    button
   { 
     
     border-radius:4px;
     padding:5px 15px;
     width:50%;
     color:white;
     background-color:#4caf50;
     cursor: pointer;
   }
 </style>
</head>
<body>
<div class="container">
<form action="rega.php" method="post">
			
<table align="center">
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
    <td><select id="department-selection" name="concerned_department" required style="color:#607161">>
        <option value="">Select Department    </option>
        <option value="CSE">CSE</option>
        <option value="ECE">ECE</option>
        <option value="EEE">EEE</option>
        <option value="ME">ME</option>
        <option value="CE">CE</option>
        <option value="S&H">S&H</option>
    </select></td>
  </div></tr><br><br>
<tr><div class="elem-group">
    <td align="right"><label for="reason-selection"></label></td>
    <td><select id="reason-selection" name="concerned_reason" required style="color:#607161">
        <option value="">Select Reason       </option>
        <option value="Need a new device">Need a new device</option>
        <option value="Problem in a device">Problem in a device</option>
    </select></td>
  </div></tr><br><br>

<tr><div class="elem-group">
    <td align="right"><label for="Device-selection"></label></td>
    <td><select id="device-selection" name="concerned_device" required style="color:#607161">>
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
  <tr><td></td><td><button type="submit">Submit</button></td></tr>
</table></form></div></center>

</div>
</body>
</html>
