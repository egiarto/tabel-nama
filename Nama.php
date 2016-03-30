<html>
<head>
<script src="jquery-1.8.0.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("th").addClass("orange");
		//add untuk baris ganjil pada tabel
		$("tr:odd").addClass("hijaumuda");
		//even untuk baris genap pada tabel
		$("tr:even").addClass("hijautua");
		$("tr").mouseover(function(){
			$(this).addClass("merahmuda");
		});
		$("tr").mouseout(function(){
			$(this).removeClass("merahmuda");
		});
		$("tr").click(function(){
			$(this).togleClass("birumuda");
		});
	});
</script>
<style type="text/css">
	.hijaumuda{
		background-color: #6F6;
	}
	.hijautua{
		background-color: #0C3;
	}
	.orange{
		background-color: #F60;
	}
	.merahmuda{
		background-color: #F06;
	}
	.birumuda{
		background-color: #09F;
	}
</style>
</head>
<body>
<table width="300" border="0" cellpadding="4">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kota</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Tri Suryono</td>
		<td>Yogyakarta</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Joko Ariwibowo</td>
		<td>Gunungkidul</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Nurhalimah</td>
		<td>Surabaya</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Reti Nurfiatun</td>
		<td>Jakarta</td>
	</tr>
</table>
</body>
</html>