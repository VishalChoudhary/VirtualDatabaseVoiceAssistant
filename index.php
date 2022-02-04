<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montaga&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <title>Virtual Database Voice Assistant</title>
</head>

<body >   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Marico</a>
  </nav>

  <img src="p1.png" width="200" height="170" />

  <section class="my-5">
      <div class="py-5">
        <h1 class="text-center">Virtual Database Voice Assistant</h1>
      </div>


      <div class="w-50 m-auto">
      <form action="data.php" method="post">
      
      <div class="form-group">
        <label>Voltage</label>
        <input type="text" name="voltage" class="form-control" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Current</label>
        <input type="text" name="current" class="form-control" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Frequency</label>
        <input type="text" name="frequency" class="form-control" autocomplete="off">
      </div>

      <div class="form-group">
        <label>Speed</label>
        <input type="text" name="speed" class="form-control" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
      
      </form>

      </div>
      </section>

    <footer style="position: absolute; bottom: 0; width: 100%;">
      <p class="p-3 bg-dark text-white temp text-center">&copy; ShivErWebsite</p>
    </footer>
      

  </body>
  </html>