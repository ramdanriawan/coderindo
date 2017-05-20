<?php include "../isi/header.php"; ?>

<div class="gambar">
	<ul>

	</ul>
</div>

<form class="update" action="/request" method="post">
	Judul :
	<input type="text" name="judul" minlength="5"><br>
	Penulis :
	<input type="text" name="penul"><br>
	Isi :
	<textarea name="isi"></textarea><br>
	Tag :
	<input type="text" name="tag" value=""><br>
	<input type="hidden" name="reque_admin" value="update">
	<input type="submit" name="submit"><br>
</form>
<button type="button" class="tambah_gambar" name="Tambah gambar">Tambah Gambar</button>

<script>
function ambil_gambar(title)
{
		var data = $("img[title=" + title + "]")

		var link = data.attr("src")
		var title = data.attr("title")
		var url = "![hallo]("+ link +" \""+ title + "\") "

		$("textarea[name=isi]").append(url)
}

$(document).ready(function($) {
	$(".update").submit(function(event)
	{

	event.preventDefault()

	$.ajax({
		url: "/request/",
		type: "post",
		data: $(this).serialize(),
		success : function(data)
		{
			var data = $.parseJSON(data)

			alert(data.status)
			$(window).attr("location", "/admin/index")
		}
	})

})

$(".tambah_gambar").click(function(){
	$.ajax({
		url : "/request/",
		data : "reque=gambar",
		success : function(data)
		{
			var data = $.parseJSON(data)

			for(var i = 0; i < 2; i++)
			{
				$(".gambar").append("<li>" + "<img src="+data[i].url+" alt="+data[i].alt+" title="+ data[i].title + " onclick=ambil_gambar('"+data[i].title+"')" + " width=300 height=200 />" +"</li>")
			}
		}

	})
})

})
</script>


<?php include "../isi/footer.php"; ?>
