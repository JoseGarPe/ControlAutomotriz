<!-- Modal -->

         <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Nombre completo.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" aria-describedby="usernameHelp">
                <small id="usernameHelp" class="form-text text-muted">Nombre de usuario.</small>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass" aria-describedby="passwordHelp">
                <small id="passwordHelp" class="form-text text-muted">Debe contener 6-8 digitos, que comprendan entre Mayusculas y minusculas, numeros y caracteres especiales ["/","@","#","$","%"].</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tipo de usuario</label>
                <select name="id_tipo_usuario" id="id_tipo_usuario" class="form-control">
                  <?php 
                     require_once "../../class/usuarioModel.php";
                     $NivelA = new User();
                     $ListUsua = $NivelA->selectTipoUsuario();
                     foreach ((array)$ListUsua as $row) {
                      echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                     }
                  ?>
                </select>
                </div>
            
            <div class="form-group">
               <button type="button" id="guardar" class="btn btn-success">Guardar</button>  
            </div>
        </form>


<script>
document.getElementById('guardar').addEventListener('click', enviarInformacion);
                      function enviarInformacion(){

                        var nombre=document.getElementById('nombre').value;
                        var usuario=document.getElementById('usuario').value;
                        var pass=document.getElementById('pass').value;
                        var id_tipo_usuario=document.getElementById('id_tipo_usuario').value;

                        var formData = new FormData();
                        formData.append('name', nombre);
                        formData.append('user', usuario);
                        formData.append('pass', pass);
                        formData.append('id_tipo_usuario', id_tipo_usuario);
                        var xhr = new XMLHttpRequest();
                        xhr.onreadystatechange = function(){
                          if (this.readyState == 4 && this.status == 200) {
                            /*
                              UNA VEZ VERIFICADA QUE NUESTRA PETICIÓN HAYA RESULTADO EXITOSA
                              MANDAMOS LOS DATOS AL END POINT PARA GUARDARLOS EN LA BASE DE DATOS
                            */
                              var array = JSON.parse(this.response);
                              if (array.type == "success") {
                                alertaEspecial(array.tittle, "<h4>"+array.text+"</h4>", array.type, array.url);
                              }else{
                                alerta(array.tittle, "<h4>"+array.text+"</h4>", array.type);
                              }
                          }
                        };
                        /*
                          DEFINIMOS EL TIPO DE METODO Y LA URL DEL END POINT ESPECIFICO
                          LUEGO MANDAMOS LOS HEADERS NECESARIOS PARA NUESTRA API
                          Y POR ULTIMO EN LA FUNCION SEND, MANDAMOS LOS DATOS NECESARIOS PARA QUE NOS RETORNE EL TOKE
                          EN ESTE CASO EL CLIENTE Y EL ID
                        */
                        //xhr.open("POST", "https://pruebafiado.000webhostapp.com/sitioWeb/php/controladores/variablesSesiones.php", true);
                        xhr.open("POST", `http://${server}/ControlAutomotriz/controllers/userController.php?accion=guardar`, true);
                        xhr.send(formData);
                      }
                       
</script>