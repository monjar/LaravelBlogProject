<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid purple;
  text-align : center;
}
</style>
<title>Add a new blog</title>
</head>
<body>
	<h2> Add a new Blog</h2>
	<form method = "POST"  action = "{{ url ('blog/add') }}">
		{{ csrf_field() }}
		Title:   <input type = "text" name = "title"/><br/>
		Body:    <textarea name = "body"></textarea><br/>
		<input type = "Submit"  value = "go"/>
	</form>
	<a href= "/blog/list"><button type="button">back</button> </a> 

</body>
</html>

