<html>
<head>
<title>halaman awal operasi crud</title>
<style>
div.container {
	width: 100%;
	border: 1px solid gray;
}

header, footer{
	padding: 1em;
	color: white;
	background-color: brown;
	clear: left;
	text-align: center;
}

nav {
	float: left;
	max-width: 160px;
	margin: 0;
	padding: 1cm;
}

nav ul {
	list-style-type: none:
	padding: 0;
}
nav ul a {
	text-decoration: none;
}

article {
	margin-left:170px;
	border-left: 1px solid gray;
	padding: 1em;
	overflow: hidden;
}

</style>

<script>
	funtion edit_id(id) {
	if (confirm('sure to edit?')){
		window.location.herf = 'edit.php?edit_id='+id;
		}
	}

funtion delete_id(id){
	if(confirm('sure to delete?')){
		window.location.herf='index.php?delete_id='+id;
		}
	}
</script>
</head>
<body>

<div class="container">

<header>
	<h1>operasi crud</h1>
</header>

<nav>
	<ul>
	<li><b>menu</b></li>
	<li><a href="#">Menu 1</a></li>
	<li><a href="#">Menu 2</a></li>
	<li><a href="#">Menu 3</a></li>
	</ul>
</nav>

<aticle>
<table border="1" width="75%" align="center">

<tr>
	<th><a href="tambah.php"><button
	type="submit">+tambah</button></a>
	</td>
</tr>
<tr>
	<td>No</td>
	<td>nama</td>
	<td>nim</td>
	<td>alamat</td>
	<td>aksi</td>
</tr>
<?php
	$sql_query = "SELECT * FROM mahasiswa";
	$result_set = mysql_query($sql_query);
	
	if (mysql_num_rows($result_set)>0){
		while ($row = mysql_fetch_row($result_set)){
?>
<tr>
	<td><?php echo $row[1]; ?></td>
	<td><?php echo $row[2]; ?></td>
	<td><?php echo $row[3]; ?></td>
	<td><a herf= "javascript:edit_id('<?php echo $row[0];?>')">edit</a></td>
	<td><a herf= "javascript:delete_id('<?php echo $row[0];?>')">delete</a></td>
</tr>
<?php
		}
	}
	else{
	
?>
<tr>
<td colspan="5">Data tidak ditemukan.</td>
</tr>
<?php
}
?>
</table>
</article>
<footer>nama-nim</footer>
</div>
</body>
</html>	