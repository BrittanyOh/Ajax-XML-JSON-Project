// call ajax
var ajax = new XMLHttpRequest();
var method = "GET";
var url = "booklist.php";
var asynchronous = true;
var genre = [];
var radiovalue;

ajax.open(method, url, asynchronous);
// sendindg ajax request
ajax.send();

$(document).ready(function(){
  //LIST BOOKS BY CATEGORY
    $("list-books").click(function(){
            $("book-data").load("booklist.php", {
              
            });
    });
});
