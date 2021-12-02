<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chat Javascript chimall</title>
    <!--BOOTSTRAP-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">

    <!-- FONT AWESOME -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"
  integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
  crossorigin="anonymous"></script>



    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="main.css">


</head>
<body>
    <!--TITULO-->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand mx-auto" href="/">
          CHAT JAVASRCIPT 
        </a>
      </nav>

      <div class="card col-md-4 mt-5 mx-auto" id="nickWrap">
        <div class="card-header">
          <h3>INGRESA  TU NOMBRE:</h3> 
        </div>
        <p id="nickError"></p>
        <div class="card-body">
            <form id="nickForm">
                <input type="text" id="nickname" class="form-conrol">
                <button type="submit" class="btn btn-dark bnt-block mt-2">
                    <i class="fas fa-location-arrow"></i> Enviar
                </button>
            </form>
        </div>
      </div>

    <!--CONTAINER-->
      <div class="container" id="contentWrap">
        <div class="row mt-2">
        <div class="col-md-6 offset-md-1">
           <div class="card">
            <div class="card-header">
                <g4>Charlemos</g4>
            </div>

            <div id="chat" class="card-body"></div>
            <form id="message-form" class="card.footer">
                <div class="input-group">
                <input type="text" id="message" class="formm-control">
                <div class="inut-group-append">
                <button type="submit" class="btn btn-dark">
                <i class="fas fa-location-arrow"></i> enviar
                 </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        
        <div class="col-md-3">
          <div class="card">
            <div class="card-header">
        <h3>Usuarios</h3>
        </div>
        <div class="card-body">
            <div id="usernames"></div>
        </div>
    </div>
</div>  
</div> 
</div>     
           
      <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"></script>

    <script src="socket.io.js" charset="utf-8"></script>
    <script src="main.js" charset="utf-8"></script>

</body>
</html>
