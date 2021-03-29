<!DOCTYPE html>

<?php

/*
echo("<pre>");
    print_r($_POST);
echo("<pre>"); */


    
    //note: PHP script has been removed since website is still active. Once 2021 camp has concluded, script will be added back.
   

    

?>

<!--start of page-->
<html lang="en">
    



<head>   
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>GenCyberTacoma Apply</title>
        <link type="text/css" rel="stylesheet" href="gencybercssFeb16.css">
</head>
    
<body>
<header>
    <div class = "top-header">
    
    </div>
    <!--navigation menu>-->    
    
    <nav>
    <ul>

        <li><a class="active" href="index.html"><b>HOME</b></a></li>
        
        <li><a href="campinfo.html"><b>CAMP INFO</b></a></li>
    
        <li><a href="FrequentlyAskedQuestions.html"><b>FAQ</b></a></li> 
    
        <li><a href="application.php"><b>APPLY</b></a></li>     
    
    </ul>
</nav>
    <!--menu>-->  
    
    
</header>
<!--body (This is in the middle white box)-->

    

<!--section 1-->
<div class = "ApplyFormat">
<h1 class="title">Apply Now!</h1>
<p>Please fill out all fields. The webpage will notify you once a succesful application has been complete.</p>





<form method="POST" name="genCyberForm" action="application.php">    
    
  <label for="firstname"> First Name of Child :<span class="required">*</span></label>
  <input type="text" id="firstname" name="firstname" required placeholder="First Name of Child" class="inputcss"><br><br>

  <label for="lastname">Last Name of Child:<span class="required">*</span></label>
  <input type="text" id="lastname" name="lastname" required placeholder="Last Name of Child" class="inputcss"><br><br>
    
  <label for="age">Age of child:<span class="required">*</span></label>
  <input type="number" id="age" name="age" required placeholder="Age of Child" class="inputcss"><br><br>

  <label for="email">Contact Email:<span class="required">*</span></label>
  <input type="email" id="email" name="email" required placeholder="Email to Contact" class="inputcss"><br><br>
    
    
    <!--Mail Address-->
    
    <label for="address">Mailing Address:<span class="required">*</span></label>
    <input type="text" id="address" name="address" required placeholder="1444 Market Street" class="inputcss">
    
    <label for= "zipCode">5-digit Zip Code:<span class="required">*</span></label>
    <input type="text" id="zipcode" name="zipcode" required placeholder="10001" class="inputcss" pattern="[0-9]{5}">
    
    <!--Primary Contact-->
    
    <label for= "primaryContact">Primary Guardian Contact Name:<span class="required">*</span></label>
    <input type="text" id="primaryContactName" name="primaryContactName" required placeholder="John Doe" class = "inputcss">
    
    <label for= "primaryContactNum">Primary Guardian Contact Number <i>(Format: 123-456-7890)</i>:<span class="required">*</span></label>
    <input type="tel" id="primaryContactNumber" name="primaryContactNumber" required placeholder="253-111-1111" class= "inputcss" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
    
      <label for="primQuery">Work or Cell Number:<span class="required">*</span></label>
  
    <select id="primContactWH" name="pContactWorkorHome" class="dropdowncss">
    <option value="Work">Work</option>
    <option value="Home">Cell</option>
  </select> <br><br>
    
    <!--Secondary Contact-->
    
    <label for= "secondaryContact">Secondary Guardian Contact Name:</label>
    <input type="text" id="secondaryContactName" name="secondaryContactName" placeholder="John Doe" class="inputcss">
    
        <label for= "SecondaryContactNum">Secondary Guardian Contact Number: <i>(Format: 123-456-7890)</i>:</label>
    <input type="tel" id="secondaryContactNumber" name="secondaryContactNumber" placeholder="253-111-1111" class= "inputcss" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
    
    <label for="secQuery">Work or Cell Number:</label>
  
    <select id="secContactWH" name="sContactWorkorHome" class="dropdowncss">
    <option value="None"> None</option>
    <option value="Work">Work</option>
    <option value="Home">Cell</option>
  </select> <br><br>
    
    <label for="campQuery">Camp 1 or Camp 2:<span class="required">*</span></label>
  
    <select id="campSelect" name="campOneorTwo" class="dropdowncss">
    <option value="(Camp 1: July 12-16)">Camp 1: July 12-16</option>
    <option value="(Camp 2: August 23-27)">Camp 2: August 23-27</option>
  </select> <br><br>
    
    <!--Submit-->
    <p><span class="required">*</span> = required fields</p>
  <input type="submit" value="Submit"> 
    
</form>
    
  
    

    


</div>
     <footer>
        <p>GenCyber Tacoma &#169;</p>
        <p>Event hosted by UW Tacoma Faculty and Staff</p>
        <p>Sponsored by the National Security Agency and National Science Foundation</p>
    </footer>

</body>
</html>
<!--end of page-->


