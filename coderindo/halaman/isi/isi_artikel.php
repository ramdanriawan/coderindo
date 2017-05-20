<?php
include "header.php";
include "koneksi_artikel.php";
?>

<body>

<?php
echo <<<EOD

<h1>$row->judul</h1>
<div class="content">$row->isi</div>

EOD;
?>



	</pre>
<h2>Ini Related Post</h2>
<div id=related_post>
	<div class="related_post">
	<ol>

	</ol>

	</div>
</div>

<script>

request_ajax("/request/", "reque=related_post&tag=<?php  echo $_GET["tag"]; ?>", function (data)
{
  var data = $.parseJSON(data)

  var index = data.length - 1
  total = Math.ceil(data[index].total / 2)
  var total_artikel = data.length;

  for(var i = 0; i < total_artikel - 1; i++)
  {
    $(".related_post>ol").append(" <li><a href='/artikel/" + data[i].tag + "/" + ganti_url(data[i].judul) + "'>" + data[i].judul + "</a></li>")

  }
})

</script>
<?php include "footer.php" ?>
