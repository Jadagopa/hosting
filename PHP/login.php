

<div class="container1">
    <div class="info">
            <h2>BIENVENIDO DE NUEVO</h2>
            <br>
            <h3>PRESUPUESTO PERSONAL</h3>
    </div> 
    <form class="form">   
        <div class="log">
                <h2>Login</h2>
        </div>  
      <div class="inputs">
            <input id= correo type="email" class="box" placeholder="Ingresa tu correo">
            <input id= contraseña type="password" class="box" placeholder="Ingresa tu contraseña">
            <a id=olvpasw href="#">¿Olvidaste tu contraseña?</a>
            <input id="inicio" type="submit" value="Login" class="submit">
            <br>
            <a id=nvusr href="#">Crear nuevo usuario</a>
        </div>
    </div>
</form>

<script type="text/javascript">
	$(document).ready(function(){
        $('#inicio').click(function(){
            //Validacion de correo y contraseña
            <?php
                require_once "Conexion.php";
                $conexion=conexion();
                
                $sql="SELECT EMAIL, CONTRASEÑA from USUARIOS";

                $result=mysqli_query($conexion,$sql);
                ?>
                inc = 0;
                correos = [];
                contraseñas = [];
                <?php
                //$h = 0;
                while($ver=mysqli_fetch_row($result)){
                    ?>  
                    correos[inc] = "<?php echo $ver[0]; ?>";
                    contraseñas[inc] = "<?php echo $ver[1]; ?>";
                    inc++;
                    <?php
                }
                $ip = $_SERVER['REMOTE_ADDR'];
                
            ?>

            correo = $('#correo').val();
            contraseña = $('#contraseña').val();
            ip = "<?php echo $ip; ?>"

            if (correo == ""){
                alert("Necesitas introducir un correo")
            }else if (contraseña == ""){
                alert("Necesitas introducir tu contraseña")
            }else{
                
                if(inc == 0){
                    alert("Correo incorrecto");
                }else{
                    for (i = 0; i < inc; i++){
                        if (correo == correos[i]){    
                            if (contraseña == contraseñas[i]){
                                agregarConectados(correo,contraseña);
                            }else{
                                alert("Contraseña incorrecta");
                            }
                            break;
                        }
                    }
                }
                
            }
        })
        
        $('#olvpasw').click(function(){
            $('#pag_princ').load('PHP/olvpasw.php');
        })

        $('#nvusr').click(function(){
            $('#pag_princ').load('PHP/nvusr.php');
        })

	});
    </script>