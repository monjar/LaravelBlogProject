<html>

	<head>
		<title>Blogs List</title>
	</head>
	<body>
		<h1>Blogs:</h1>
		<ul>
			@foreach ( $data as $key=>$value )
				<li>
					Blog #{{$value -> id}} 
					Title: 
					 <a href="/blog/show/{{$value -> id}}">{{$value -> title}}</a> 
					 
					
				
				</li>
			@endforeach
		</ul>
		
		<a href="/blog/add"><button type="button">Add</button> </a> 
	</body>

</html>
