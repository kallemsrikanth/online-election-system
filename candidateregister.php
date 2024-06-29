 <!doctype html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8">
<title>Online Polling System</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<style>
h1
{
		text-align:left;
		padding-top:30px;
		padding-left:35px;
}
</style>
<div id="wrapper">
<header>
	<img src="projectposter1.png" />
</header>	
		<nav>
		<ul>
		<li id="main"><a href="test.html">Home</a></li> 
		<li id="main"><a href="">Registration &#9662;</a>
			<ul class="dropdown">
                <li><a href="candidateregister.php">Candidate</a></li>
                <li><a href="register.html">Voter</a></li>
            </ul>
		</li>
		<li id="main"><a href="voterlgn.html">Voter Login</a></li>
		<li id="main"><a href="adminlgn.html">Admin Login</a></li>
		<li id="main"><a href="candidatelgn.html">Candidate Login</a></li>
		<li id="main"><a href="contact-us.html">Contact</a></li> 
		</ul>
	</nav>
<aside>
	
</aside>
<aside id="aside2">
</aside>
<section>
<h1>Candidate Registration</h1>
<form id="form1" method="post" action="candidateregister1.php" enctype="multipart/form-data" >
	<table border="0" width="100%" />
	<tr><td width="20%" /><b>Candidate Id</td><td><input name="cid" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Username</td><td><input name="cuname" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Party Name</td><td><input name="cpname" type="text" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />	
	<tr><td width="20%" /><b>Email</td><td><input name="cemail" type="email" placeholder="name@domain.com" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Mobile No</td><td><input name="cmobile" type="tel" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Password</td><td><input name="cpass" type="password" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off" required/></td><br />
	<tr><td width="20%" /><b>Image</td><td><input type="file" name="image" style="width:300px; height:20px; -webkit-border-radius:5px;" autocomplete="off"/></td><br />
	</table>
	<button type="submit"  value="Register" style="-webkit-border-radius:10px; height:30px; width:100px;">Register</button><br />

</form>	
</section>
<footer>

</footer>
</div>
</body>
</html>