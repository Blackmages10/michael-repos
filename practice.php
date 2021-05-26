<!DOCTYPE html>
<html>
  <head>
    <title>Gamer Pro</title>
    <link rel="stylesheet" type="text/css" href="style0.css">
    <link rel="shortcut icon" href="2.png">

    <script type="text/javascript">
        function toggleSidebar(){
          document.getElementById("dropdown").classList.toggle('active');
        }
    </script>
  </head>
  <body>

    <div class="dropdown">
      <button class="btn" onclick="toggleSidebar()">dropdown</button>
        <ul id="dropdown" class="drp">
          <li> <a href="#">Item1</a> </li>
          <li> <a href="#">Item2</a> </li>
          <li> <a href="#">Item3</a> </li>
        </ul>
    </div>
  </body>
</html>
