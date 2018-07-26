<html>
<Head>
<title>FORM</title>
<link rel = "stylesheet" type = "text/css" href = "aaa.css">
<script type="text/javascript" src="scripts/aaaa.js"></script>
</head>
<body>
<H1> ENTER DETAILS </h1>
<div id="wrapper">
<form method="post" action = "aa.php" name ="fform" id="fform">
<div id="name_div">
<label> Name: </label>   
<input type="text" name="name" id="name" class="textInput" > 
<div id="name_error"></div>
<div id="email_div">   
<label> E-mail: </label>   
<input type="email" name="email" class="textInput">
<div id="email_error"></div>
<div id="dob_div">     
<label> Dob: </label>  
<input type="date" name="dob" id = "dob" class="textInput">
<div id="dob_error"></div>
<div id="add_div">    
<label>ADD: </label>  
<textarea name="comment" rows="5" cols="40" class="textInput" ></textarea>  
<div id="add_error"></div> 
<div id="gender_div">
<label>Gender: </label> 
<input type="radio" name="gender" value="female" >Female
<input type="radio" name="gender" value="male" >Male
<input type="radio" name="gender" value="other" >Other
<div id="gender_error"></div>
<div id="stream_div">     
<label>Stream: </label> 
<input type = "checkbox" name="chkbox[]" value="CSE">CSE
<input type = "checkbox" name="chkbox[]" value="ME">ME
<input type = "checkbox" name="chkbox[]" value="EEE">EEE
<div id="stream_error"></div>
<div id="city_div">    
<label>City: </label> 
<input type="text" name="city" class="textInput">
<div id="city_error"></div>
<div id="zc_div">     
<label>Zip code: </label> 
<input type="text" name="zc" class="textInput" >  
<div id="zc_error"></div>   
<label>Country: </label>  
<select name="c" >
<option value="IND">IND</option>
<option value="UK">UK</option>
<option value="USA">USA</option>
</select>
<label>Rating: </label>  
<select name="r" >
<option value="80">Good</option>
<option value="45">Bad</option>
<option value="25">Poor</option>
</select>
<div>     
<input type="button" id="register" name="register" value="Sign Up" class="btn" onClick="return checking()">
</div>        
</form>
</div>
</body>
</html>