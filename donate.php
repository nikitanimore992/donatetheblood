

<?php 
 //include header file
 include ('include/header.php');

if (isset($_POST["submit"]))
{
  $name=$_POST["name"];
  $blood_group=$_POST["blood_group"];
  $gender=$_POST["gender"];
  $day=$_POST["day"];
  $month=$_POST["month"];
  $year=$_POST["year"];
  $email=$_POST["email"];
  $contact_no=$_POST["contact_no"];
  $city=$_POST["city"];
  $password=$_POST["password"];

}
?>

<?php
 if (isset($_POST["submit"]))
 {

  $con=new mysqli("localhost", "root", "", "donatetheblood");
  $DonerDOB = $year."_".$month."_".$day;	
  $password = md5($password);
  $sql="insert into donor(name,gender,email,city,dob,contact_no,save_life_date,password,blood_group)  
  values('$name','$gender','$email','$city','$DonerDOB','$contact_no','0','$password', '$blood_group') ";
  $con->query($sql);
  $con->close();

  echo "<script>";
  echo "alert('Record Save!!!')";
  echo "</script>";
 }

   
?>

<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;
		
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Donate</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>



<div class="container size">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
					<h3>SignUp</h3>
					<hr class="red-bar">				
          <!-- Error Messages -->

				<form class="form-group" action="" method="post" novalidate="">
					<div class="form-group">
						<label for="fullname">Full Name</label>
						<input type="text" name="name" id="fullname" placeholder="Full Name" required pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control">
						
					</div>
					<!--full name-->

					<div class="form-group">
              <label for="name">Blood Group</label><br>
              <select class="form-control demo-default" id="blood_group" name="blood_group" required>
                <option value="">---Select Your Blood Group---</option>
				
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
              </select>
            </div><!--End form-group-->
			
					<div class="form-group">
				              <label for="gender">Gender</label><br>
				              		Male<input type="radio" name="gender" id="gender" value="Male" style="margin-left:10px; margin-right:10px;" checked>
				              		Female<input type="radio" name="gender" id="gender" value="Female" style="margin-left:10px;" >
				    </div><!--gender-->
					
				    <div class="form-inline">
						
              <label for="name">Date of Birth</label><br>
              <select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;" required>
               
			  <option value="">---Date---</option>
                <option value="01" >01</option>
				<option value="02" >02</option>
				<option value="03" >03</option>
				<option value="04" >04</option>
				<option value="05" >05</option>
				<option value="06" >06</option>
				<option value="07" >07</option> 
				<option value="08" >08</option>
				<option value="09" >09</option>
				<option value="10" >10</option>
				<option value="11" >11</option>
				<option value="12" >12</option>
				<option value="13" >13</option>
				<option value="14" >14</option>
				<option value="15" >15</option>
				<option value="16" >16</option>
				<option value="17" >17</option>
				<option value="18" >18</option>
				<option value="19" >19</option>
				<option value="20" >20</option>
				<option value="21" >21</option>
				<option value="22" >22</option>
				<option value="23" >23</option>
				<option value="24" >24</option>
				<option value="25" >25</option>
				<option value="26" >26</option>
				<option value="27" >27</option>
				<option value="28" >28</option>
				<option value="29" >29</option>
				<option value="30" >30</option>
				<option value="31" >31</option>
              </select>
              <select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;" required>
                <option value="">---Month---</option>
				
                <option value="01" >January</option>
				<option value="02" >February</option>
				<option value="03" >March</option>
				<option value="04" >April</option>
				<option value="05" >May</option>
				<option value="06" >June</option>
				<option value="07" >July</option>
				<option value="08" >August</option>
				<option value="09" >September</option>
				<option value="10" >October</option>
				<option value="11" >November</option>
				<option value="12" >December</option>
              </select>
              <select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;" required>
                <option value="">---Year---</option>
			
				<option value="1965" >1965</option>
				<option value="1966" >1966</option>
				<option value="1967" >1967</option>
				<option value="1968" >1968</option>
				<option value="1969" >1969</option>
				<option value="1970" >1970</option>
				<option value="1971" >1971</option>
				<option value="1972" >1972</option>
				<option value="1973" >1973</option>
				<option value="1974" >1974</option>
				<option value="1975" >1975</option>
				<option value="1976" >1976</option>
				<option value="1977" >1977</option>
				<option value="1978" >1978</option>
				<option value="1979" >1979</option>
				<option value="1980" >1980</option>
				<option value="1981" >1981</option>
				<option value="1982" >1982</option>
				<option value="1983" >1983</option>
				<option value="1984" >1984</option>
				<option value="1985" >1985</option>
				<option value="1986" >1986</option>
				<option value="1987" >1987</option>
				<option value="1988" >1988</option>
				<option value="1989" >1989</option>
				<option value="1990" >1990</option>
				<option value="1991" >1991</option>
				<option value="1992" >1992</option>
				<option value="1993" >1993</option>
				<option value="1994" >1994</option>
				<option value="1995" >1995</option>
				<option value="1996" >1996</option>
				<option value="1997" >1997</option>
				<option value="1998" >1998</option>
				<option value="1999" >1999</option>
				<option value="2001" >2001</option>
				<option value="2002" >2002</option>
				<option value="2003" >2003</option>
				<option value="2004" >2004</option>
				<option value="2005" >2005</option>
				<option value="2006" >2006</option>
				<option value="2007" >2007</option>
				<option value="2008" >2008</option>
				<option value="2009" >2009</option>
				<option value="2010" >2010</option>
				<option value="2011" >2011</option>
				<option value="2012" >2012</option>
				<option value="2013" >2013</option>
				<option value="2014" >2014</option>
				<option value="2015" >2015</option>
              </select>
		
            </div><!--End form-group-->
			
				    <div class="form-group">
						<label for="fullname">Email</label>
						<input type="text" name="email" id="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email" class="form-control">
					</div>
					
					<div class="form-group">
              <label for="contact_no">Contact No</label>
              <input type="text" name="contact_no" placeholder="03********" class="form-control" required pattern="^\d{11}$" title="11 numeric characters only" maxlength="11">
			
			</div><!--End form-group-->
			
					<div class="form-group">
              <label for="city">City</label>
              <select name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --</option>
	<option value="BHopal" >Bhopal</option>
	<option value="Indore" >Indore</option>
	<option value="Jabalpur" >Jabalpur</option>
	<option value="Gwalior" >Gwalior</option>
	<option value="Ujjain" >Ujjain</option>
	<option value="Sagar" >Sagar</option>
	<option value="Dewas" >Dewas</option>
	<option value="Satna" >Satna</option>
	<!-- <optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup> -->
	<option value="Ratlam" >Ratlam</option>
	<option value="Rewa" >Rewa</option>
	<option value="Katni" >Katni</option>
	<option value="Singrouli" >Singrouli</option>
	<option value="Burhanpur" >Burhanpur</option>
	<option value="Morena" >Morena</option>
	<option value="Khandwa" >Khandwa</option>
	<option value="Bhind" >Bhind</option>
	<option value="Chindiwara" >Chindiwara</option>
	<option value="Guna" >Guna</option>
	<option value="Shivpuri" >Shivpuri</option>
	<option value="Vidisha" >Vidisha</option>
	<option value="chatterPur" >chatterPur</option>
	<option value="Damoh" >Damoh</option>
	<option value="Madsaur" >Madsaur</option>
	<option value="Khargone" >Khargone</option>
	<option value="Neemach" >Neemach</option>
	<option value="Pithampur" >Pithampur</option>
	<option value="Narmadapuram" >Narmadapuram</option>
	<option value="Itarsi" >Itarsi</option>
	<option value="Sehore" >Sehore</option>
	<option value="Betul" >Betul</option>
	<option value="Seoni" >Seoni</option>
	<option value="Datia" >Datia</option>
	<option value="Nagda" >Nagda</option>
	<option value="Shahdol" >Shahdol</option>
	<option value="Harda" >Harda</option>
</select>
	     
</div><!--city end-->
			
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" name="password" value="" placeholder="Password" class="form-control" required pattern="{6,}">
            </div><!--End form-group-->
            <div class="form-group">
              <label for="password">Confirm Password</label>
              <input type="password" name="c_password" value="" placeholder="Confirm Password" class="form-control" required pattern="{6,}">
			
			</div><!--End form-group-->
			
            <div class="form-inline">
              <input checked="" type="checkbox" name="term" value="true" required style="margin-left:10px;">
              <span style="margin-left:10px;"><b>I am agree to donate my blood and show my Name, Contact Nos. and E-Mail in Blood donors List</b></span>
            </div><!--End form-group-->
			
					<div class="form-group">
						<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned" style="margin-top: 20px;">SignUp</button>
					</div>
				</form>
		</div>
	</div>
</div>

<?php 
  //include footer file
  include ('include/footer.php');
?>
