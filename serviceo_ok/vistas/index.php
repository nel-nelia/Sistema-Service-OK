<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gmaps - Multiple</title>
  <link rel="stylesheet" href="css/jquery.gmaps.css">
  
  <style>
    .gmaps {
      height: 400px;
      width: 100%;
      background-color: #ccc;
      margin-top: 10px;
      position: relative;
    }
  </style>

</head>
<body>
    
    <h1>Map Multiple</h1>


    <div data-key="AIzaSyAHUMaudNC3W-f3XO7NXbXBJP7wytJF4SI"
      data-zoom="4"
      role="map"
      class="gmaps">
        
        <div
          data-id="1"
          data-lat="-25.363"
          data-lng="131.044" 
          class="marker">
          <div class="map-card">
            <h1>This is my title</h1>
            <p>Address: Fake street, #445, Stgo.</p>
            <p>Phone: +56753223344</p>
            <p>e-Mail: fake@email.com</p>
          </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.gmaps.js"></script>

    <script>
      $(document).ready(function(){
        $('.gmaps').gmaps();
      });
    </script>

  </body>
</html>