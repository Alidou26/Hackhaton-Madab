<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PAVE ENERGY-Service</title>
  	<!--favicon-->
	<link rel="icon" href="logo.png" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="main">
      <div class="container a-container" id="a-container">
        <form class="form" id="a-form">
          <img src="logo.png" alt="" style="width:10rem;;height:10rem;border-radius:50%;">
          <h2 class="form_title title">Bienvenue !</h2>
          <input class="form__input" type="text" placeholder="Pseudo" name="pseudo" required>
          <input class="form__input" type="password" placeholder="Mot de passe" name="mot_de_passe" required>
          <div class="alert alert-warning" role="alert" style="width:100%;font-size:1.2rem;">   </div>
          <button class="form__button button" type="submit">Se Connecter</button>
        </form>
      </div>

      <div class="switch"  style="background-image: url('logo.png');" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title"></h2>
          <p class="switch__description description"></p>
       
        </div>
     
      </div>
    </div>
  </body>
</html>
  <script  src="./script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
        $("#a-form").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: 'connexionAdminAction.php',
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData:false,
            success: function(reponse){
               if(reponse['status'] == 0)
               {
                   window.location.href=reponse['url'];
    
    
               }
    
    
               else {
                $(".alert-warning").show();
                $(".alert-warning").html(reponse['status']);
                setTimeout(function(){$(".alert-warning").hide();},5000);
               }
            
                }
                
            });
    });
  </script>
  <script> 
$(".alert-warning").hide();
</script>
</body>
</html>
