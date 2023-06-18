<?php
require('vendor/autoload.php');

    use App\Core\Routing\Route;
    Route::get('get','upload');
    Route::post('post','upload');
   echo '<pre>';
   print_r(Route::routes());
   echo '</pre>';
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<form id="upload" action="" method="post" enctype="multipart/form-data">
    <input id="file" type="file" >
    <input type="submit" value="submit">
</form>
</body>
</html>

<script src="Assets/js/jquery-3.7.0.min.js"></script>
<script>


$('#upload').submit(function (event) {
var formData = {
  file: $("#file").val()
};
$.ajax({
  type: "POST",
  url: "server.php",
  data: formData,
  dataType : 'JSON',
  success : function(response)
  {
    console.log(response);
  }
});
event.preventDefault();
});

</script>