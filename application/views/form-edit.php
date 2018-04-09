<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form edit</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

			body {
         margin: 0;
        padding:0;
        background-image: url('my.JPG');
        background-color: pink;
		background-size: cover;
        background-position: center;
        font-family:  Apple Chancery;
	}
    .login-box{
        font: 95% Arial, Helvetica, sans-serif;
         max-width: 400px;
         margin: 50px auto;
         padding: 30px;
        
    }
    .avatar{
        width:100px;
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50%;
        left: calc(50%-50px);
    }
    .login-box p{
        color:sienna;
        margin:0;
        padding: 0;
        font-weight: bold;
    }
    
      .login-box input{
        
        width:100%;
        margin-bottom: 20px;
    }
    
      .login-box input[type="text"], input[type="password"]{
        
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        height: 40px;
        color: cyan;
        font-size: 16px;
    }
    
    .login-box input[type="submit"]{
        
        border: none;
        outline: none;
        height: 40px;
        background: #87CEFA;
        color: pink;
        font-size: 18px;
        border-radius: 20px;
    }
    
     .login-box input[type="submit"]:hover{
        cursor: pointer;
        background: bisque;
        color: #000;
    }
    
    .login-box a{
        text-decoration: none;
        font-size: 14px;
        color: #fff;
    }
    
     .login-box a:hover {
        color: #39dc79;
    }
    
    
    
    .navbar{
        text-align:  center;
        width:  100%;
        background: #87CEFA;
    }
    .navbar ul {
        margin:0;
        padding:0;
        list-style: none;
        position: relative;
    }
    .navbar ul li a{
        display: block;
        padding: 25px;
        color: white;
        text-decoration:none;
        width:150px;
    }
    .navbar ul:after {
       content: ""; clear:both;
       display: block; 
    }
    
    .navbar ul li{
        float: left;
        list-style:none;
        
    }
    
    .navbar ul ul{
        display:none;
    }
    .navbar ul li:hover > ul{
        display:block;
    }
    
    .navbar ul li:hover{
        
        background: bisque;
        transition: 0.9s;
    }
    
    .navbar ul li:hover a{
    color:white;    
    }
    
    .navbar ul ul{
        background: bisque;
        padding:0;
        margin: 0;
        position:absolute; top:100%;
        
    }
    
    .navbar ul ul li {
        
        float:none;
        position:relative;
    }
    
    .navbar ul ul li a{
        padding:25px;
        color: white;
        width: 300px;
        text-align: left;
    }
    .navbar ul ul li a:hover {
        background:crimson;
        color:bisque;
        transition: 0.9s;   
    }
    li {
        font-size: 20px;
    }
 

	a {
		color: crimson;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
	   font-family: Apple Chancery;
		color: #A0522D;
		font-size: 30px;
		font-weight: normal;
		margin: 0;
		padding: 0 0 20px;
        text-align:center;
        background-color: #FAFAD2;
	}
    
	
	p.footer{
	   background-color: #87CEFA ;
       color: crimson;
		text-align: center;
		font-size: 15px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	</style>
</head>
<body>

<div class="navbar">
<ul>
<li><a href="http://localhost/codeigniter/">Home</a></li>
<li><a href="<?php echo site_url('welcome/form_input')?>">Create reservation</a></li>
<li class="login"><a href="#">Login</a></li>
</ul>
</div>

	<div class="login-box">
    
     <?php if($dataEdit){
        $id = $dataEdit->kode;
        $kode = $dataEdit->kode;
        $username = $dataEdit->username;
        $password = $dataEdit->password;}
        else{
           $kode = "";
        $username = "";
        $password = "";  
            
        }
        
      ?>
	<h1>Edit Reservation</h1> 
    <form action="<?php echo site_url('welcome/update/'.$id )?>" method="POST">
    <p>Table</p>
    <input type="text"  name="kode" value="<?php echo $kode ?>"/><br>
    <p>Nama</p>
    <input type="text" name="username" value="<?php echo $username ?>"/><br>
    <p>Jam Datang</p>
    <input type="text" name="password" value="<?php echo $password ?>"/> <br>
    <input type="submit" name="simpan" value="Simpan"/> <br >
    </form>	
      <a href="<?php echo site_url('welcome/index')?>"><--Prev</a> 
	</div>

	<p class="footer"> My Melody @2018 </p>

</body>
</html>