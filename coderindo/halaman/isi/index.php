<!--  header -->
<?php include "header.php"; ?>

<div id="content-wrapper">
<!--  isi artikel di sini -->

</div>


<script>

request_ajax("/request/", "reque=tampilkan_semua&page=<?php  echo !isset($_GET["page"]) ? 1 :  $_GET["page"] ?>", function (data)
{
	var data = $.parseJSON(data)
	var index = data.length - 1
	total = Math.ceil(data[index].total / 2)
	var total_artikel = data.length;

	for(var i = 0; i < total_artikel - 1; i++)
	{
		var url = data[i].judul
		url = url.replace(/\s/g, "-")
    if(i == total_artikel - 2)
    {
  		var data_isi = `<div class="post-homepage"> <h2> <a href="/artikel/${data[i].tag}/${url}" title="${data[i].judul}">${data[i].judul}</a></h2> <div class="label-post"> <a href="#">${data[i].tag}</a> </div> <div class="post-preview">${data[i].isi}</div> <div class="read-more"> <a href="/artikel/${data[i].tag}/${url}">Lanjutkan Membaca</a> </div> </div><div id="page-home-artikel">
        <a href="#">MORE POST</a>
      </div>`
  		$("#content-wrapper").append(data_isi)
    }
    else
    {
      var data_isi = `<div class="post-homepage"> <h2> <a href="/artikel/${data[i].tag}/${url}" title="${data[i].judul}">${data[i].judul}</a></h2> <div class="label-post"> <a href="#">${data[i].tag}</a> </div> <div class="post-preview">${data[i].isi}</div> <div class="read-more"> <a href="/artikel/${data[i].tag}/${url}">Lanjutkan Membaca</a> </div> </div>`
  		$("#content-wrapper").append(data_isi)
    }
	}
	for (var i = 1; i < total; i++)
	{
		$("#artikel>ul").append(`<li class=page><a href=/index/${i}>${i}</a>`)
	}
	})

request_ajax("/request/", "reque=artikel_terpopuler&page=<?php  echo !isset($_GET["page"]) ? 1 :  $_GET["page"] ?>", function(data){
	var data = $.parseJSON(data)

	for(var i = 0; i < data.length -1; i++)
	{
		var data = `<li><a href="#">Judul Post Terkait Dengan Post Dihalaman ini</a></li>`
		$(".related-list>").append("<b>" + data[i].tag + "</b><br>" + data[i].isi + " <a href='/artikel/" + data[i].tag + "/" + ganti_url(data[i].judul) + "'>" + "detail" + "</a><br>")
	}
})




</script>

<!--  footer -->
<?php  include "footer.php" ?>
