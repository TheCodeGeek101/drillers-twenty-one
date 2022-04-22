<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
 <style>
      #menu-toggle:checked + #menu{
	  display:block;
      }
</style>
<title>Drillers 21 | Home</title>
<body>
    <x-navbar/>
    <x-footer/>

    <script>
// Grab HTML Elements
const btn = document.querySelector("button.mobile-menu-button");
const menu = document.querySelector(".mobile-menu");

btn.addEventListener("click", () => {
	menu.classList.toggle("hidden");
});
</script>
</body>
</html>
