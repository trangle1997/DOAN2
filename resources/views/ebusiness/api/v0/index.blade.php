

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="col-md-12"></div>
	
	<ul class="list-inline">
		@foreach($sanpham as $sp)
		<li class="list-inline-items">{{ $sp->ten }}</li>
		@endforeach
	</ul>
</body>
</html>