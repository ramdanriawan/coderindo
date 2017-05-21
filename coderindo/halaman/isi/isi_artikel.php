<?php
// header
include "header.php";
include "koneksi_artikel.php";

// isi artikel
echo <<<EOD


<!-------- CONTENT --------->


<div id="content-wrapper">

  <div id="cleft-wrapper">

    <div id="post-box">

    <h2> <a href="$_SERVER[REQUEST_URI]">$row->judul</a></h2>

    <div class="label-post"><a href="#">$row->tag</a></div>

    <div id="isi-post">
    $row->isi
    </div>

    </div>

    <div id="author-wrapper">

    <img src="/gambar/author.png"/>

    <span class="title-author">Penulis :</span> <span class="author-name"> Andi Saputra </span>

    <p class="about-author">
    Developer muda yang memiliki perusahaan di 5 negara besar yaitu
	Amerika, Inggris, Singapura, Indonesia, dan Korea.
    </p>

    </div>

    <div id="post-next-prev">
    	<a class="prev" href="#"> Post Sebelumnya </a>
        <a class="next" href="#"> Post Selanjutnya </a>
    </div>

  </div>

    <div id="label-container">

    <h3> Tag </h3>

    <ul class="label-list">
    <li><a href="#">Jquery</a></li>
  		<li><a href="#">PHP</a></li>
  		<li><a href="#">HTML</a></li>
  		<li><a href="#">CSS</a></li>
  		<li><a href="#">C#</a></li>
  		<li><a href="#">C++</a></li>
  		<li><a href="#">Java</a></li>
  		<li><a href="#">Python</a></li>
  		<li><a href="#">MYSQL</a></li>
  		<li><a href="#">Editor</a></li>
  		<li><a href="#">Aplikasi</a></li>
  		<li><a href="#">Desain</a></li>
  		<li><a href="#">Pengertian</a></li>
  		<li><a href="#">Video</a></li>
    </ul>

    </div>

    <div id="sidebar-wrapper">

    <h3> Related Post </h3>

    <ul class="related-list">


    </ul>

    </div>


</div>

EOD;

?>
<script>

request_ajax("/request/", "reque=related_post&tag=<?php  echo $_GET["tag"]; ?>", function (data)
{
  var data = $.parseJSON(data)

  var index = data.length - 1
  total = Math.ceil(data[index].total / 2)
  var total_artikel = data.length;

  for(var i = 0; i < total_artikel - 1; i++)
  {
    var data_isi = `${data[i].judul}`

    $(".related-list").append(`<li><a href=/artikel/${data[i].tag}/${ganti_url(data[i].judul)}>${data_isi}</a></li>`)

  }
})

</script>

<!--  footer -->
<?php include 'footer.php'; ?>
