<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<script type="text/javascript">
	
	function getinfo(){
		var req ;
		if(window.XMLHttpRequest)
		 req = new XMLHttpRequest();
		 else 
		 req = new ActivateXOpject("Microsoft.XMLHTTP");
		 
		 req.onreadystatechange = function(){
			 if(req.readystate == 4 & req.status == 200 )
			 document.getElementById("ajax").innerHTML = req.responseText;
		 }
		req.open("GET","getinfo.php",true);
		reg.sent();
		}
	
</script>
<span id="ajax" >

</span>

<button type="button" onclick="getinfo()" > get </button>
</body>
</html>