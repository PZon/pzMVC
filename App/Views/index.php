<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>output escaping</title>
</head>
<body>
 <h1>Welcome</h1>
 <p>Hello from the view</p><br>
 <?php
  if($_SERVER['REQUEST_METHOD']==='POST'){
	  echo "Hello, ".htmlspecialchars($_POST['name']);
  }
 ?>
 <form method="post">
  <div>
   <label for="name">NAME:</label>
   <input id="name" name="name" autofocus /> 
  </div>
  <div>
   <button type="submit">Submit</button>
  </div>
 </form>
 <p>Hello <?= htmlspecialchars($name);?></p>
 <ul>
  <?php
   foreach($colors as $color){
	   echo '<li>'.htmlspecialchars($color).'</li>';
   }
   ?>
 </ul>
</body>
</html>