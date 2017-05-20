function request_ajax(url, data, success)
{
  $.ajax({
    url : url,
    data : data,
    success : success
  })
}

function ganti_url(url)
{
  return url.replace(/\s/g, "-")

}
