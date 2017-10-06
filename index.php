<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online chatting</title>
<script src="jquery-latest.js" type="text/javascript"></script>
<script src="BootStrap/bootstrap.min.js" type="text/javascript"></script>
<script src="BootStrap/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="BootStrap/bootstrap.min.css"/>
<style>
		#chat{
			margin-left:5%;
			margin-right:5%;
		width:auto;
		}
		.h-scroll{
			height:40%;
			width:78%;
			margin-left:5%;
			margin-right:5%;
			position:fixed;
			border:solid #add8e6 2px;
			overflow:scroll;	
		}
</style>
<script type="text/javascript">
function submitChat(){
	if(form1.uname.value==''||form1.msg.value=='')
	{
		alert("Please enter your name as wll as message");
		return;
	}
	var uname=form1.uname.value;
	var msg=form1.msg.value;
	var xmlhttp=new XMLHttpRequest();
	
	xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState==4&&xmlhttp.status==200)
			{
				document.getElementById('chatlogs').innerHTML=xmlhttp.responseText;			
			}
	
	}
	xmlhttp.open('GET','insert.php?uname='+uname+'&msg='+msg,true);
	xmlhttp.send();
}
</script>
</head>

<body>
<div class="head">
<center><font size="+3">Welcome To Group Chatt</font></center>
</div>
<div class="chatsection"><!-- Starts here //-->
<div class="form-group" id="chat">
<form name="form1">
<label for="usr">Enter yout name:</label><input type="text" class="form-control" id="usr" name="uname" required />
<label for="comment">Enter your chatt:</label><textarea class="form-control" rows="4" id="comment" name="msg" required></textarea>
</form>
<br/>
<a href="#" class="btn btn-info" role="button" onclick="submitChat();">Send</a><br/><br/>
<div id="chatlogs" class="col-lg-10 h-scroll">
Chatt is Loading Plaese Wait...
</div>
</div>
<script type="text/javascript"> <!-- Here is the Cahrt is loaded from database viz Ajax call using jQuery //-->
    $(document).ready(function () {
    setInterval(function() {
        $.get("logs.php", function (result) {
            $('#chatlogs').html(result);
        });
    }, 1555);
});
</script>
</div><!-- ending chatting section //-->
</body>
</html>
