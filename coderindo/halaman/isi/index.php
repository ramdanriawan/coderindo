

<div id="main-header">

    <div id="header-wrapper">

		<div id="logo-box">

		</div>

        <a href="/"><img src="/gambar/logo.png" /></a>

        <div id="menu-wrapper">

        <ul id="menu-utama">
  		<li class="home"><a href="/">Home</a></li>
  		<li class="about"><a href="about.html">About</a></li>
  		<li class="contact"><a href="contact.html">Contact</a></li>
		</ul>

        </div>

    </div>

</div>

<div id="navbar-wrapper">

	<div id="navbar-bottom">
        <ul id="nav-bot">
  		<li><a href="#">Jquery</a></li>
  		<li><a href="#">PHP</a></li>
  		<li><a href="#">HTML</a></li>
  		<li><a href="#">CSS</a></li>
  		<li><a href="#">C#</a></li>
  		<li><a href="#">C++</a></li>
  		<li><a href="#">Java</a></li>
  		<li><a href="#">Python</a></li>
  		<li><a href="#">MYSQL</a></li>
		</ul>

	<form>
  	<input class="search" type="text" placeholder="Search..." required>
 	<input class="button" type="button" value="">
	</form>
    </div>

</div>

<div id="content-wrapper">



<div id="page-home-artikel">
<a href="#">MORE POST</a>
</div>

</div>

<div id="footer-wrapper">

<div id="footer-container">

	<div id="about-footer">

    <span class="titlefoot1">CODER</span><span class="titlefoot2">INDO</span>
    <p class="text-foot">
    Web untuk belajar koding dengan bahasa
	indonesia yang disertai dengan gambar, video,
	dan bahan pembelajaran lain.
	<br/><br/>
	Happy Koding!
	</p>

    </div>

    <div id="menu-footer">
     <ul id="nav-foot">
  		<li><a href="#">Penulis</a></li>
  		<li><a href="#">FAQ</a></li>
  		<li><a href="#">Disclaimer</a></li>
		</ul>
    </div>

    <div id="subscription-box">

    <span class="subscript-title">
    Subscription
    </span>
    <p class="text-foot">
    Dengan berlangganan anda akan mendapatkan notifikasi pembaruan
	artikel kami melalui email anda
	</p>
	<form>
  	<input class="email-subs" type="text" placeholder="Your Email" required>
 	<input class="submitemail" type="button" value="Submit">
	</form>

    </div>

</div>

<div id="copyright-footer">
<p> &copy; 2017 Coder Indo All rights reserved | Designed by ASPXXIII </p>
</div>

</div>


</body>
</html>

<?php include "header.php";?>
<body>

<div id="artikel">
<div id="isi">
<h1>Artikel Terbaru</h1>
</div>
	<ul>

	</ul>
</div>


<div id="hot">
<h1>Artikel Populer</h1>
	<div class="artikel_terpopuler">


	</div>
	<div class = more>
		<a href="/artikel_terpopuler" title="artikel terpopuler">Lihat Lebih Banyak</a>
	</div>
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
		var data_isi = '<div class="post-homepage"> <h2> <a href="/artikel/' + data[i].tag + "/" + url + '" title=" '+data[i].judul+' ">' + data[i].judul + '</a></h2> <div class="label-post"> <a href="#">'+data[i].tag+'</a> </div> <div class="post-preview"> ' + data[i].isi + '</div> <div class="read-more"> <a href="/artikel/' + data[i].tag + "/" + url + ' ">Lanjutkan Membaca</a> </div> </div>'
		$("#content-wrapper").append(data_isi)

	}
	for (var i = 1; i < total; i++)
	{
		$("#artikel>ul").append("<li class=page>" + "<a href=/index/" + i + "> "+ i + "</a>")
	}
	})

request_ajax("/request/", "reque=artikel_terpopuler&page=<?php  echo !isset($_GET["page"]) ? 1 :  $_GET["page"] ?>", function(data){
	var data = $.parseJSON(data)

	for(var i = 0; i < data.length -1; i++)
	{
		$(".artikel_terpopuler").append("<b>" + data[i].tag + "</b><br>" + data[i].isi + " <a href='/artikel/" + data[i].tag + "/" + ganti_url(data[i].judul) + "'>" + "detail" + "</a><br>")
	}
})




</script>
<?php  include "footer.php" ?>
