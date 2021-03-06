<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Simple PHP Contact Form</title>
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>
  <div class="wrapper">  
    <div id="contact_form">
    <form name="form1" id="ff" method="post" action="insert.php">
    <h1>Responsive HTML5 Contact Form Demo</h1>
	<p>This is a working demo of HTML5 and PHP Responsive Contact Form. The form is so simple, that you can implement it in a few minutes.</p>	
        <label>
		<span>Name*:</span>
        <input type="text" placeholder="Please enter your name" name="name" id="name" required autofocus>
        </label>
        
        <label>
		<span>City*:</span>    
		<input type="text" placeholder="Please enter your city" name="city" id="city" required>
        </label>
        
        <label>
		<span>Phone:</span>
        <input type="tel" placeholder="Please enter your phone" name="phone" id="phone">
        </label>
        
        <label>
		<span>Email*:</span>
        <input type="email" placeholder="youremail@gmail.com" name="email" id="email" required>
      	</label>
      
		<input class="sendButton" type="submit" name="Submit" value="Send">
			
	</form>
	</div>
   </div>

</body>
</html>