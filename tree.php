<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="jquery.js" type="text/javascript"></script>
<script src="common.js" type="text/javascript"></script>
<script src="jquery.cookie.js" type="text/javascript"></script>
<script src="jquery.tree.js" type="text/javascript"></script>
<link href="tree.css" rel="stylesheet" type="text/css" />
<link href="icon.css" rel="stylesheet" type="text/css" />
<link href="table.css" rel="stylesheet" type="text/css" />
<title>Tree Example</title>
</head>
<body>
<div class="tree">
<div>Дерево анализов</div>
<ul class="Container">
</ul>
</div>
<script>
(function($){
	$(document).ready(function(){
		if(_el=$('div.tree')) _el.tree({"id":"treeanl", "load":"tree.inc"});
	});
})(jQuery);
</script>
</body>
</html>