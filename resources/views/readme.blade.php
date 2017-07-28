<html>
<head>
</head>
<body>
      YoseTheGame
      <input type="text" id="ship"><button id="dock" onclick="submit()">dock</button>
      <a href="#" id="astroport-name">astroport-name</a>
      <div id="gate-1">first gate<div id="ship-1"></div></div>
      <div id="gate-2">second gate<div id="ship-2">the name of the ship docked at gate 2</div></div>
      <div id="gate-3">third gate<div id="ship-3">the name of the ship docked at gate 3</div></div>
<script>
    function submit(){
      newvalue = document.getElementById('ship').value
      console.log(document.getElementById('ship').value)
      var s= document.getElementById('ship-1');
      s.innerHTML = newvalue;
    }
</script>
</body>
</html>
