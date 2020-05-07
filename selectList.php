<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Select list</title>
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
<script>
	.slectetd{
		color:green;
	}
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$("li").eq(2).addclass("selected")
	});
</script>
</head>

<body>
<li>
	<div>
		<li><a>hello</a></li>
		<li><a>hello</a></li>
		<li><a>hello</a></li>
		<li><a>hello</a></li>
	</div>
</li>
</body>
</html>
