<!DOCTYPE html>
<html>
<head>
	<title>Chat System</title>
	<script type="text/javascript">
		function submitChat()
		{
			if(form1.uname.value==''||form1.msg.value=='')
			{
				alert("all fields are mandatory");

			}
			var uname="form1.uname.value";
			var msg="form1.msg.value";
			var xmlhttp="new"
		}
	</script>
</head>
<body style="background:gray; ">
	<div align="center">
	<form name="form1">
		Enter your name:<input type="text" name="uname"><br>

		Your message:<textarea name="msg"></textarea><br>
		<a href="#" onclick="submitChat()">send</a><br><br><br>
		<div id="chatlogs">
		loading chatlog please wait</div>
	</form>

</div>


</body>
</html>