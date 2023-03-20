<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
    body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	width: 350px;
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
}
.login label{
	color: #573b8a;
}
.text-danger{
    text-align: center;
    text-transform: capitalize;
    color: red;
}
.form-control{
	width: auto;
}
</style>
</head>
<body>
	<div class="main">

			<div class="login">
            <?php echo form_open('Users/succhk') ?>
					<label for="chk" aria-hidden="true">Login</label>
					<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'uname','value'=>set_value('uname')]); ?>
                    <?php echo form_error('uname',"<div class='text-danger'>","</div>") ?>
                    <?php echo form_password(['class'=>'form-control','type'=>'password','placeholder'=>'Enter Password','name'=>'pass']) ?>
                    <?php echo form_error('pass',"<div class='text-danger'>","</div>") ?>
                    <button type="submit" >Submit</button>
				<?php echo form_close() ?>
			</div>
	</div>
</body>
</html>