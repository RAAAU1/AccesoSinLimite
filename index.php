<!doctype html>
<html>
    <head>
    <link rel="shortcut icon" href="#" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- FontAwesom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">        
    <!--Sweet Alert 2 -->
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">        
    <!--CSS custom -->  
    <link rel="stylesheet" href="main.css">  
    </head>
    <body>
        <div id="login"> 
            <header>
                <h2 class="text-center text-dark"><span class="badge badge-success">Login</span></h2>
            </header>               
            <div class="container">                
                <div id = "login-row" class="row justify-content-center align-items-center">       
                    <div id="login-column" class="col-md-6">        
                        <div id="login-box" class="col-md-12 bg-light text dark">
                            <form id= "formlogin" class="form" action="" method="post">
                                <h3 class="text-center text dark">Iniciar Secion </h3>
                                <div class="form-grup">
                                    <laber for="usuario" class="text dark"> Usuario </label>
                                    <input type="text" name="usuario" id="usuario" class="form-control">
                                </div>
                                <div class="form-grup">
                                    <laber for="contrasena" class="text dark"> Contraseña </label>
                                    <input type="password" name="contrasena" id="contrasena" class="form-control">
                                </div>
                                <div class="form-grup text-center">
                                    <input type="submit" name="submit" class= "btn btn-dark btn-lg btn-block" value="conectar">
                                </div>
                            </form>
                        </div>
                    </div>  
                </div>                
            </div>        
        </div>        
        <!-- jQuery, Popper.js, Bootstrap JS -->
        <script src="jquery/jquery-3.3.1.min.js"></script>
        <script src="popper/popper.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>         
        <!--Vue.JS -->    
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>              
        <!--Axios -->      
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.15.2/axios.js"></script>    
        <!--Sweet Alert 2 -->        
        <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>      
        <!--Código custom -->          
        <script src="main.js"></script>
        <script src="codigo.js"></script>          
    </body>
</html>