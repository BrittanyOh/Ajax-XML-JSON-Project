// call ajax
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "booklist.php";
var asynchronous = true;

ajax.open(method, url, asynchronous);
// sendindg ajax request
ajax.send();

// receiving response from booklist.php
ajax.onreadystatechange = function()
{
  if (this.readyState == 4 && this.status == 200)
  {
    alert(this.responseText);
  }
}
