<?php

require 'Mustache/Autoloader.php';
Mustache_Autoloader::register();
$m = new Mustache_Engine;
?>

<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.css" type="text/css"> </head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-faded">
    <div class="container"> <a class="navbar-brand" href="#">Navbar</a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
          <li class="nav-item"> <a class="nav-link" href="#">Link</a> </li>
          <li class="nav-item"> <a class="nav-link disabled" href="#">Disabled</a> </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="bg-primary text-center d-flex h-100 align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="display-1 text-white">COVER</h1>
          <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipisici elit.</p> <a href="#" class="btn btn-lg btn-secondary">Button</a> </div>
      </div>
    </div>
  </div>
  <div class="py-5 section text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-primary">HEADING</h1>
          <p class="lead">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5  section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th>Nom</th>
                <th>Prenom</th>
              </tr>
            </thead>
            <tbody>
              <?php

              $template = '
                {{#content}}
                  <tr>
                  <td>{{nom}}</td>
                  <td>{{prenom}}</td>
                  </tr>
                {{/content}}
              ';

              $responseJson = file_get_contents('https://www.wavemakeronline.com/run-39kysdsr0k/Service/services/ServiceBDD/Personne');
              $listPersonne = json_decode($responseJson);

              echo $m->render($template, $listPersonne);
              
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-faded py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class=" pi-item">COMPANY</h1>
          <p> <strong>Company name, Inc.</strong> <br>795 Folsom Ave, Suite 600 <br>San Francisco, CA 94107 <br> <abbr title="Phone">P:</abbr>(123) 456-7890 </p>
        </div>
        <div class="col-md-6">
          <h1 class="pi-item">CONTACT</h1>
          <form>
            <fieldset class="form-group"> <label for="exampleInputEmail1">Your name</label> <input class="form-control" id="exampleInputEmail1" placeholder="Your name" type="text"> </fieldset>
            <fieldset class="form-group"> <label for="exampleInputEmail1">Email address</label> <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email"> </fieldset> <button type="submit" class="btn btn-primary">Submit</button> </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
  <script src="https://pingendo.com/assets/bootstrap/bootstrap-4.0.0-alpha.6.min.js"></script>
</body>

</html>