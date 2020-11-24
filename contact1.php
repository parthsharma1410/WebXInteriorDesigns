
<!DOCTYPE html>
<html>
<head>
  <title>Contact us</title>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

h1{
  text-align: center;
  font-size: 40px;
  color: blue;
  
}
p{
  text-align: center;
  font-size: 17px;
}
 form {
            padding: 25px;
            margin: 25px;
            box-shadow: 0 2px 5px #88ac90;
            background: #f5f5f5;
        }

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 9px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: 0;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
  font-weight: bold;
  font-size: 20px;
  width: 20%;
 
}



.container {
  border-radius: 5px;
  background-color:#4CAF50  ;
  padding: 20px;
}
.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
  line-height: 40px;
}
.btn a{
  text-decoration: none;
  color:white;
}

</style>
</head>
<body>  

<h1> Contact Us</h1>
<p>There's nothing we like more than rolling up our sleeves and starting a brand <br> new project.Let's make something great together.</p>

<div class="container">
   <div id="error"></div>
  <form id="form" method="Post" onsubmit="return valid()" action="save.php" >

    <label for="fname">First Name</label>
    <div class="fname" data-error="enter first name">
    <input type="text" id="fname" name="firstname" placeholder="Your first name.." >
    
    <label for="lname">Last Name</label>
    <div class="lname" data-error="enter last name">
    <input type="text" id="lname" name="lastname" placeholder="Your last name.." >
     
    <label for="email">Email</label>
    <div class="email" data-error="enter email">
    <input type="text" id="email" name="e" placeholder="Your email.." >

    <label for="message">Message</label>
    <div class="message" data-error="enter message">
    <textarea id="message" name="m" placeholder="Write your message" style="height:200px" ></textarea>
  
    
    
      <input type="submit" value="Message" class="btn">


  


  </form>
</div>

<div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="490" id="gmap_canvas" src="https://maps.google.com/maps?q=%20India&t=&z=7&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org">putlocker.dancer</a></div><style>.mapouter{position:relative;text-align:right;height:490px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:490px;width:100%;}</style>
<div class="text-block">
  <p>Address<br>Street:Nehru Nagar, Kanjurmarg (east)<br>
     City:Mumbai<br>
     State Full:Maharashtra<br>
     Zip Code:400042<br>
     Phone Number:02225770981
</p>
</div>

</div>
</body>
</html>

