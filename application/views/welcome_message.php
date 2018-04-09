<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Melody</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {

        background-image: url('my.JPG');
        background-color: pink;
		background-size: cover;
        font-family:  Apple Chancery;
        font-size: 20px;
        margin: 0px;
        line-height: 24px;
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
    
    table{
        background-color:  #FAFAD2;
        margin : 100px auto ;
        
    }
 

	a {
		color: crimson;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #A0522D;
		background-color: #FAFAD2;
		font-size: 40px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
        text-align:center;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
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
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
    
    table{
        width: 50%;
        margin:250px auto;
        border-style: dotted solid double dashed; 
        
    }
  tr {color: #A0522D;
  padding-bottom: 10px;
}
td {color: #A0522D;
  padding: 10px 10px 0;
  text-align: center;
  
    border-style: dotted;
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

<div id="container">
	<h1>My Melody Restaurant</h1>
	<div id="body">
        <table border="1">
        <tr>
        <td>No</td>
        <td>Table</td>
        <td>Atas nama</td>
        <td>Jam datang</td>
        <td>Opsi</td>
        </tr>
        
        <?php
        $no = 1;
         foreach($hasil as $r){ ?>
        <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $r['kode'] ?></td>
        <td><?php echo $r['username'] ?></td>
        <td><?php echo $r['password']?></td>
        <td>
        <a href="<?php echo site_url('welcome/form_edit/'.$r['kode'])?>"> Edit</a> ||
        <a href="<?php echo site_url('welcome/delete/'.$r['kode'])?>" onclick="return confirm('apakah anda yakin ingin menghapus?')"   > Hapus</a> 
        </td>
        </tr>
         <?php } ?>
        </table>
        
	</div>

	<p class="footer"> My Melody @2018 </p>
</div>

</body>
</html>