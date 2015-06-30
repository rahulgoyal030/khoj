<!DOCTYPE html>
<html>
<head>
	<title>khoj!</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> ></script> 
	<link rel="stylesheet" href="design.css">

</head>
<body>
<div class="body"></div>
<script type="text/javascript" src="index.js">
    
</script>




<h1 id="heading">khoj!</h1>

<div id="home" class="menu">

<button type="submit" id="show"> &#9776; </button>
<div id="menu1">
 <ul>
     <li><p  class="content">Home</p></li>
     <li><p  class="content">News</p></li>
  	 <li><p  class="content">about</p></li>
     <li><p  id="logout" class="content">logout</p></li>
 </ul>
</div>
    <div class="questionTag">
     <div id="question" >this is the firts question tell me the answer</div>
    </div>
    <form method="post" action="check.php">
	<input type="text" placeholder="Enter your answer ......"  id="answer" name="answer"><br>
	<button type="submit" id="result">Submit</button>
	</form>

	
</div>


</body>
</html>