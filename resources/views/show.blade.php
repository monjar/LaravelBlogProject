<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<title>Users</title>
</head>
<body>


<table style="width:1920px">
  <tr>
    <th colspan =3>Users</th>
  </tr>
  	@foreach($Users as $user)
    	<tr>
    		<td>
    			{{ $user['firstname'] }}
    		</td>
    		<td>
    			{{ $user['lastname'] }}
    		</td>
    		<td>
    			{{ $user['age'] }}
    		</td>
  	</tr>
    	@endforeach
</table>

</body>
</html>

