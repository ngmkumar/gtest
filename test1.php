<!DOCTYPE html>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
<a href="http://jquery.com">default click action is prevented</a>
<div id="log"></div>
<script>
$("a").click(function(event) {
event.preventDefault();
$('<div/>')
.append('default ' + event.type + ' prevented')
.appendTo('#log');
});
</script>
</body>
</html>