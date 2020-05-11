<!DOCTYPE html>
<html>
<head>
  
  <style>
  /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }
  .filter{
	  align:center;
	 padding: 9% 25%;
  }
  </style>
</head>
<body>
  <form class="form-inline" >
  <section class="filter">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-primary dropdown-toggle" type="submit">Find a dog </button>
	 <button class="btn btn-primary dropdown-toggle" type="submit">Find a cat</button>
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Find Other Pets
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Search..">
      <li><a href="#">Rabbits</a></li>
      <li><a href="#">Small&Furry</a></li>
      <li><a href="#">Scales,Fins,&Other</a></li>
      <li><a href="#">Birds</a></li>
      <li><a href="#">Horses</a></li>
      <li><a href="#">Barnyard</a></li>
    </ul>
	</section>
  </form>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>
