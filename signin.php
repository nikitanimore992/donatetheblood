<?php 

	//include header file
	include ('include/header.php');
	
// Email input check
	if(isset($_POST['email']) && !empty($_POST['email'])){
		$email=$_POST['email'];
	}else{
		
	}

	// passowrd input filed

	if(isset($_POST['password']) && !empty($_POST['password'])){
		$password=$_POST['password'];
		$password = md5($password);
	}else{
		
	}
	// log in query 

	if(isset($email) && isset($password)){
		$con=new mysqli("localhost", "root", "", "donatetheblood");
		$sql = "SELECT * FROM donor WHERE password = '$password' OR email='$email' ";
		$result = mysqli_query($con , $sql);
		$con->query($sql);
		$con->close();
		if(mysqli_num_rows($result)>0){
				while($row = mysqli_fetch_assoc($result)){
						$_SESSION['user_id'] = $row['id'];
						$_SESSION['name'] = $row['name'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['user_id'] = $row['id'];

						header('Location: user/index.php');
				}
		}
	}
?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
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
</style>
 <div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">SignIn</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>SignIn</h3>
		<hr class="red-bar">
		<!-- Erorr Messages -->

			<form action="" method="post" >
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" name="email" class="form-control" placeholder="Email">
		</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="password" placeholder="Password" class="form-control">

				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'include/footer.php' ?>
