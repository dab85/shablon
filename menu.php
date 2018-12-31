<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->


 
 
  </head>
<body>
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Меню</h4>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#" id = "general">Главная </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" id="about">О Нас</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="#" id = "contacts">Контакты</a>
      </li>
    
    </ul>
    </div>
  </div>
<nav class="navbar navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 <a class="navbar-brand" href="#" id = "brand">Мой сайт</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
   
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

</div>
<script type="text/javascript">
$(document).ready(function(){
$.ajax({
		type: "POST",
		url: "getitem.php",
		// передача в качестве строки
		// кодирование выполняется "вручную"
		data: {punkt:"home"},
		success: function(data){
			$("#cont").html(data);
		}
	});
	return false;	
});
$("#brand").click(function() {
		$.ajax({
		type: "POST",
		url: "getitem.php",
		// передача в качестве строки
		// кодирование выполняется "вручную"
		data: {punkt:"home"},
		success: function(data){
			$("#cont").html(data);
		}
	});
	return false;
});
$("#about").click(function() {
		$.ajax({
		type: "POST",
		url: "getitem.php",
		// передача в качестве строки
		// кодирование выполняется "вручную"
		data: {punkt:"about"},
		success: function(data){
			$("#cont").html(data);
		}
	});
	return false;
});
$("#general").click(function() {
		$.ajax({
		type: "POST",
		url: "getitem.php",
		// передача в качестве строки
		// кодирование выполняется "вручную"
		data: {punkt:"home"},
		success: function(data){
			$("#cont").html(data);
		}
	});
	return false;
});
$("#contacts").click(function() {
		$.ajax({
		type: "POST",
		url: "getitem.php",
		// передача в качестве строки
		// кодирование выполняется "вручную"
		data: {punkt:"contact"},
		success: function(data){
			$("#cont").html(data);
		}
	});
	return false;
});
</script>
    
</body>
</html>