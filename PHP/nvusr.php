<div class="container2">

    <div class="form2">
        <div class="inputs">
            <label for="nombre">NOMBRE:</label>    
            <input id="nombre" type="name" class="box" placeholder="Ingresa tu nombre">
            
            <label for="apellido">APELLIDOS:</label> 
            <input id="apellido" type="lastname" class="box" placeholder="Ingresa tus apellidos">
            
            <label for="correo">CORREO ELECTRONICO:</label> 
            <input id="correo" type="email" class="box" placeholder="Ingresa tu correo electronico">

            <label for="contraseña">CONTRASEÑA:</label> 
            <input id="contraseña" type="password" class="box" placeholder="Ingresa tu contraseña">
            
            

            <input id="altausuario" type="submit" value="CREAR USUARIO" class="submit">


        </div>
    </div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
              
        
        $('#altausuario').click(function(){
            //Consulta de correos que existen
            <?php
                require_once "Conexion.php";
                $conexion=conexion();
                
                $sql="SELECT EMAIL from USUARIOS";

                $result=mysqli_query($conexion,$sql);
                ?>
                inc = 0;
                correos = [];
                <?php
                //$h = 0;
                while($ver=mysqli_fetch_row($result)){
                    ?>  
                    correos[inc] = "<?php echo $ver[0]; ?>";
                    inc++;
                    <?php
                }
                //$ip = $_SERVER['REMOTE_ADDR'];
                
            ?>
            
            
            nombre = $('#nombre').val();
            apellido = $('#apellido').val();
            correo = $('#correo').val();
            contraseña = $('#contraseña').val();
            
        
            if (nombre == ""){
                alert("Necesitas escribir tu nombre");
            }else if(apellido == ""){
                alert("Necesitas escribir tus apellidos");
            }else if(correo == ""){
                alert("Necesitas escribir tu correo");
            }else if(contraseña == ""){
                alert("Necesitas escribir una contraseña");
            }else{
                
                if (inc == 0){
                    correo_exis = "";
                }else{
                    for (i = 0; i < inc; i++){
                        if (correo == correos[i]){    
                            correo_exis = correos[i];
                            break;
                        }else{
                            correo_exis = "";
                        }
                    }
                }
                

                if(correo_exis == correo){
                    alert("Este correo ya existe, introduce uno diferente");
                }else{
                     
                    if (validateEmail(correo)){
                        agregarUsuarios(nombre,apellido,correo,contraseña);
                    }
                }
            }
        })

	});
    </script>