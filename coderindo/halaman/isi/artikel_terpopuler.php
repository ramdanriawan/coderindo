<?php include 'header.php'; ?>
<body>



<div id="artikel">
	<h1>Artikel Terpopuler</h1>
	<div id = isi>

	</div>

	<ul>

	</ul>
</div>

<script>

$(document).ready(function()
{
	$.ajax({
		url : "/request",
		data : "reque=artikel_terpopuler&page=<?php echo !isset($_GET["page"]) ? 1 : $_GET["page"] ; ?>",
		success : function(data)
		{
			var data = $.parseJSON(data)
			for(var i = 0;  i < data.length - 1; i++)
			{
				$("#isi").append(data[i].isi + " <a href='/artikel/" + data[i].tag + "/" + data[i].judul.replace(/\s/g, "-") + "'>" + data[i].judul + "</a><br>")
			}

			var index = data.length - 1
			total = Math.ceil(data[index].total / 2)
			var total_artikel = data.length;

			for (var i = 1; i <= total; i++)
			{
				$("#artikel>ul").append("<li class=page>" + "<a href=/artikel_terpopuler/" + i + "> "+ i + "</a>")
			}
		}
	})
})

</script>
</body>
<?php include "footer.php";
