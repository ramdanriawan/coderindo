<?php include "header.php" ?>
<body>
    <div class="hasil">
      <h1></h1>
    <ul>

    </ul>

    <div class="page">
      <ul>

      </ul>
    </div>
    </div>
</body>

<script>
  $(document).ready(function() {
    $.ajax({
      url : "/request/",
      data : "reque=cari&keywo=<?php echo $_GET["keywo"]; ?>&page=<?php echo !isset($_GET["page"]) ? 1 : $_GET["page"]; ?>",
      success : function (data)
      {

        var judul = $(".hasil>h1")
        var hasil = $(".hasil>ul")
        var page = $(".page>ul")

        if(data == "null")
        {
          judul.html("Pencarian dengan keyword '<?php echo $_GET["keywo"]; ?>' Tidak Ditemukan")
        }
        else
        {
          var data = $.parseJSON(data)
          var total = data.length - 1
          var page_list = Math.ceil(data[total].total / 2)

          judul.html("Ditemukan " + data[total].total + " hasil")

          for(var i = 0; i < total; i++)
          {
            hasil.append("<li>" + data[i].isi +  "<a href='/artikel/" + data[i].tag + "/" + data[i].judul.replace(/\s/g, "-") + "'>" + "detail" + "</a>" +"</li>")
          }

          for(var i = 1; i <= page_list; i++)
          {
              page.append("<li><a href=/cari/<?php echo $_GET["keywo"]; ?>/" + i + ">" + i +"</a>")
          }
        }

      }
    })
  });
</script>
<?php include "footer.php" ?>
