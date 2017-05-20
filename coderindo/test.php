<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="/library/libraryjs/jquery/jquery.js"></script>


    <title>Test</title>
  </head>
  <body>
<div class="list_gambar">
<ul>

</ul>
</div>

    <img src="/gambar/tag/judul_artikel/coderindo.png" onclick="lali('cek')" alt="gambar" title="cek"/>
    <img src="/gambar/tag/judul_artikel/ll.png" onclick="lali('ll')" alt='gambar' title="ll" />

<form action="" method="post">

    <textarea name="isi" rows="8" cols="80"></textarea>

    <input type="submit">
  </form>
<input type="submit" class=upload>
  <script>

      function lali(title)
      {
          var data = $("img[title=" + title + "]")

          var link = data.attr("src")
          var title = data.attr("title")
          var url = "![hallo]("+ link +" \""+ title + '\"){:.foo}'

          $("textarea[name=isi]").append(url)
      }


  </script>
  </body>
</html>

<?php include "library/libraryphp/parsedown/Parsedown.php";

$parsedown = new Parsedown();
echo $parsedown->text("
$_POST[isi]
");
?>
