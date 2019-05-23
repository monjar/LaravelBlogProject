<html>

	<head>
		<title>Blogs List</title>
	</head>
	<body>
		@foreach ( $data as $key=>$value )
		<h1>
			Title : {{$value -> title}}
		</h1>
		<p>
			{{$value -> body}}
		</p>
		@endforeach
		
		<a href="/blog/list"><button type="button">List</button> </a> 
		
		 
	</body>

</html>
