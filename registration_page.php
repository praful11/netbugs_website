

<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: lightgray;  
}  
.container { 
    width:50%;
    margin-left: 300px; 
    padding: 50px;  
  background-color: lightblue;  
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: lightgray;  

  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: grey;  
  color: white; 
  font-size: 22px;
  border-radius: 30px; 
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 50%;  
  opacity: 0.9; 
margin-left:140px; 
  
}  
.registerbtn:hover {  
  opacity: 1;  
} 
.logo{
    margin-left: 450px;
} 
.label{
    font-size: 18px;
  border-radius: 30px; 
  padding: 10px 10px;  
  margin: -1% ;  
  border: none;  
  cursor: pointer; 
  }
.cols {
    #ft-form fieldset > .two-cols > * {
  display: block;
  margin-bottom: 1.5rem
}
#ft-form fieldset > .two-cols > :last-child {
  margin-bottom: 0
}
@media only screen and (min-width:640px) {
  #ft-form fieldset > .two-cols {
    display: flex;
    align-items: flex-end
  }
  #ft-form fieldset > .two-cols > * {
    display: block;
    margin-right: 1.5rem;
    margin-top: 0;
    margin-bottom: 0;
    flex: 1
  }
  #ft-form fieldset > .two-cols > :last-child {
    margin-right: 0
  }


 
</style>  
</head>  
<body>  
<form  action="insertdata.php" method="post"> 
    <div class="logo">
        <a href="index.php"><img src="assets/images/logo.png" alt="Mega business"></a>
    </div> 
  <div class="container">  
  <center>  <h1> Student Registration Form</h1> </center>  
  <hr>  
  
  <label> Firstname </label>   
<input type="text" name="firstname" placeholder= "Firstname" size="15" required />   
<label> Middlename: </label>   
<input type="text" name="middlename" placeholder="Middlename" size="15" required />   
<label> Lastname: </label>    
<input type="text" name="lastname" placeholder="Lastname" size="15"required />   
<div class="flex-parent jc-center">
<label>   
Course :  
</label>   
  
<select name="course">  
<option value="Course">Course</option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
<label>   
    Year Of Graduation :  
    </label>   
      
    <select name="yearofgraduation">  
    <option value="Year Of Graduation">Year Of Graduation</option>  
    <option value="2016">2016</option>  
    <option value="2017">2017</option>  
    <option value="2018">2018</option>  
    <option value="2019">2019</option>  
    <option value="2020">2020</option>  
    <option value="2021">2021</option>  
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>   
    </select>  
  
        
</div>  
<div>
  <label>   
        Status :  
        </label>   
        <select name="status">  
        <option value="Status"> Status</option>  
        <option value="freshers">Fresher</option>  
        <option value="EXPERIENCE">Experiance</option>  
        </select>
  <label>
        Date of birth
        <input type="date" name="dateofbirth">
      </label>
</div>
<div>  
<label>   
Gender :  
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone :  
</label>  

<input type="text" name="phoneno" placeholder="Phone no"  value="+91" size="2"/>   
  
Current Address :  
<textarea cols="80" rows="5" name="currentaddress" placeholder="Current Address" value="address" required>  
</textarea>  
<div class="two-cols1">
<label>
        Curriculum vitae
        <input type="file" name="Curriculum vitae" accept=".doc,.docx,.pdf">
      </label>
    </div>
    <p>Possible file types: DOC, PDF. Maximum file size: 10 MB.</p>

 
   
    <button type="submit" class="registerbtn"><a href="thankyou.php">Submit</a></button>    
</form>  
</body>  
</html>