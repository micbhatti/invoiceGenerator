<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>
	@yield('title')
	</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<style type="text/css">
		
		.my-address.table-bordered thead{
	background: #f1f1f1;
}
.table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
	border: 1px solid #000;
}
.table>thead:first-child>tr:first-child>th {
    border-top: 1px solid #000;
}
	</style>
</head>
<body>
	@yield('content')
</body>
</html>