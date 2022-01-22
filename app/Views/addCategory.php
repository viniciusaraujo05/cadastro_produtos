
<!doctype html>
<html ⚡>
<head>
  <title>Webjump | Backend Test | Add Category</title>
  <meta charset="utf-8">

<?php require_once("../core/autoload.php"); ?>
<link  rel="stylesheet" type="text/css"  media="all" href="<?=BASE_URL?>app/views/css/style.css" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800" rel="stylesheet">
<meta name="viewport" content="width=device-width,minimum-scale=1">
<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
<script async src="https://cdn.ampproject.org/v0.js"></script>
<script async custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js"></script>
<script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script></head>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="assets/js/sweet/sweetalert.js"></script>
  <!-- Header -->
<amp-sidebar id="sidebar" class="sample-sidebar" layout="nodisplay" side="left">
  <div class="close-menu">
    <a on="tap:sidebar.toggle">
      <img src="images/bt-close.png" alt="Close Menu" width="24" height="24" />
    </a>
  </div>
  <a href="app/views/dashboard.php"><img src="images/menu-go-jumpers.png" alt="Welcome" width="200" height="43" /></a>
  <div>
    <ul>
      <li><a href="<?=BASE_URL?>app/views/categories.php" class="link-menu">Categorias</a></li>
      <li><a href="<?=BASE_URL?>app/views/products.php" class="link-menu">Produtos</a></li>
    </ul>
  </div>
</amp-sidebar>
<header>
  <div class="go-menu">
    <a on="tap:sidebar.toggle">☰</a>
    <a href="app/views/dashboard.php" class="link-logo"><img src="images/go-logo.png" alt="Welcome" width="69" height="430" /></a>
  </div>
  <div class="right-box">
    <span class="go-title">Administration Panel</span>
  </div>    
</header>  
<!-- Header -->
  <!-- Main Content -->
  <main class="content">
    <h1 class="title new-item">New Category</h1>
    
    <form id="adcCategory">
      <div class="input-field">
        <label for="category-name" class="label">Category Name</label>
        <input type="text" name="CategoryName" id="category-name" class="input-text" />
        
      </div>
      <div class="input-field">
        <label for="category-code" class="label">Category Code</label>
        <input type="text" name="CategoryCode"  id="category-code" class="input-text" />
        
      </div>
      <div class="actions-form">
        <a href="<?=BASE_URL?>app/views/categories.php" class="action back">Back</a>
        <input class="btn-submit btn-action"  type="submit" value="Save" />
      </div>
    </form>
  </main>
  <!-- Main Content -->
  <script type="text/javascript">

$(document).ready(function(){

    //Envia os dados informados para a Controller
    $("#adcCategory").submit(function(event){
        $.ajax({
            dataType: 'json',
            type: "POST",
            url: "http://127.0.0.1/assessment-backend-xp/CategoriaController/cadastro",
            data: $("#adcCategory").serialize(),
            success: function(data){
              console.log(data[0]);
                if(data[0] == true){
                   
                    $('#adcCategory').trigger("reset");

                    swal("OK!","Categoria adicionada com sucesso!", "success" ,{ timer: 3000, button: false});
                    //Depois de 3,5 segundos, o usuário será redirecionado
                    

                }else{
                    swal( "Atenção!", "Erro ao realizar cadastro. Entre em contato com suporte.", "error", { timer: 3000, button: false});
                }
            },
            
            error: function() {
            
              swal( "Atenção!", "Erro ao realizar cadastro. Campos.", "error", { timer: 3000, button: false});
          
            }
        });//AJAX
        return false;
    });//submit
}); //document.ready
</script>
  <!-- Footer -->
<footer>
	<div class="footer-image">
	  <img src="images/go-jumpers.png" width="119" height="26" alt="Go Jumpers" />
	</div>
	<div class="email-content">
	  <span>go@jumpers.com.br</span>
	</div>
</footer>
 <!-- Footer --></body>
</html>
