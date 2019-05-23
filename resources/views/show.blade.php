<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid purple;
  text-align : center;
}
</style>
<title>Users</title>
</head>
<body>


<table style="width:1680px" color = "blue">
  <tr>
    <th colspan =4>Users</th>
  </tr>
  <tr>
    <th >Row</th>
    <th >First Name</th>
    <th >Last Name</th>
    <th >Age</th>
  </tr>
  	@foreach($Users as $key => $user)
    	<tr>
    		<td>
    			{{ $key+1 }}
    		</td>
    		@foreach($user as $var)
    		<td>
    			{{ $var }}
    		</td>
    		@endforeach
  	</tr>
    	@endforeach
</table>

</body>
</html>

