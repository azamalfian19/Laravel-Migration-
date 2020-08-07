<!DOCTYPE html>
<html>
<head>
<title>Halaman form</title>
</head>
<body>
	<div>
		<h1>Buat Account Baru!</h1>
		<h3> Sign Up Form </h3>
	</div>
	<div>
		<form action="/welcome" method="POST">
			@csrf
		
			<label for="firstname">First Name : </label><br><br>
				<input type="text" placeholder ="User Name" id="firstname" name="firstname" value="{{old('first')}}"><br><br>
			<label for="lastname">Last Name : </label><br><br>
				<input type="text" placeholder ="User Name" id="lastname" name="lastname" value="{{old('last')}}"><br><br>
			<label> Gender : </label><br><br>
				<input type="radio"  name="gender"   value="0"> Male   <br>
				<input type="radio"  name="gender"   value="1"> Female <br>
				<input type="radio"  name="gender"   value="2"> Other  <br><br>
			<label> Nationality : </label><br><br>
				<select>
					<option value=" indonesia"> Indonesia  	</option> <br>
					<option value=" korea"> korea 			</option> <br>
					<option value=" amerika"> Amerika 		</option> <br>
					<option value=" jepang"> Jepang 		</option> <br>
				</select><br><br>
			<label> Language Spoken : </label><br><br>
				<input type="checkbox"  name="bahasa" > Bahasa Indonesia   	<br>
				<input type="checkbox"  name="bahasa" > English   			<br>
				<input type="checkbox"  name="bahasa" > Other  			<br><br>
			<label for="bio">Bio : </label><br><br>
				<textarea cols="70" rows="8" placeholder ="Ketik Di sini" id="bio" name="bio"></textarea><br>
			<input type="submit" nama="submit"  value="Sign Up">
		</form>
	</div>
</body>
</html>