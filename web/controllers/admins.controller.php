<?php

class AdminsController
{
    /*=============================================
    Login Administradores
    =============================================*/
    public function login()
    {
        if (isset($_POST["loginAdminEmail"])) {

            echo '<script>
                fncMatPreloader("on");
            </script>';

            //validacion lado servidor de los campos
            if (preg_match('/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["loginAdminEmail"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["loginAdminPassword"])) {

                
                //login con la APi
                $url = "admins?login=true&suffix=admin";
                $method = "POST";
                $fields = array(
                    "email_admin" => $_POST["loginAdminEmail"],
                    "password_admin" => $_POST["loginAdminPassword"]
                );
                $login = CurlController::request($url, $method, $fields);
                // echo '<pre>'; print_r($login); echo '</pre>';

                //crea la variable de sesion
                if ($login->status == 200) {
                    $_SESSION["admin"] = $login->results[0];

                    echo '<script>
                        location.reload();
                    </script>';
                }else{
                    $error=null;
                    if($login->results == "Wrong email"){
                        $error = "El correo electrónico no existe"; 
                    }else{
                        $error = "La contraseña es incorrecta";
                    }

                    echo '<div class="alert alert-danger mt-3">'.$error.'</div>

                    
                    <script>
                        //fncSweetAlert("error","Error al ingresar: '.$error.'", "");
                        fncToastr("error","Error al ingresar: '.$error.'");
                        fncMatPreloader("off");
                        fncFormatInputs();
                    </script>
                    ';
                }
            } else {
                echo '<div class="alert alert-danger mt-3">Error de sisntaxis en los campos</div>

                    <script>
                        
                        fncToastr("error","Error en la sintaxis de los campos");
                        fncMatPreloader("off");
                        fncFormatInputs();
                    </script>
                    ';
            }
        }


    }
    /*=============================================
    Recuperar contraseña
    =============================================*/
    public function resetPassword(){

		if(isset($_POST["resetPassword"])){

			echo '<script>

				fncMatPreloader("on");
				fncSweetAlert("loading", "", "");

			</script>';

			/*=============================================
			Validamos la sintaxis de los campos
			=============================================*/	

			if(preg_match( '/^[.a-zA-Z0-9_]+([.][.a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["resetPassword"] )
			){

				/*=============================================
				Preguntamos primero si el usuario está registrado
				=============================================*/	

				$url = "admins?linkTo=email_admin&equalTo=".$_POST["resetPassword"]."&select=id_admin";
				$method = "GET";
				$fields = array();

				$admin = CurlController::request($url,$method,$fields);
				
				if($admin->status == 200){

					function genPassword($length){

						$password = "";
						$chain = "0123456789abcdefghijklmnopqrstuvwxyz";

						$password = substr(str_shuffle($chain),0,$length);

						return $password;

					}

					$newPassword = genPassword(11);

					$crypt = crypt($newPassword, '$2a$07$azybxcags23425sdg23sdfhsd$');
							
					/*=============================================
					Actualizar contraseña en base de datos
					=============================================*/
					$url = "admins?id=".$admin->results[0]->id_admin."&nameId=id_admin&token=no&except=password_admin";
					$method = "PUT";
					$fields = "password_admin=".$crypt;

					$updatePassword = CurlController::request($url,$method,$fields);

					if($updatePassword->status == 200){	

						$subject = 'Solicitud de nueva contraseña - Ecommerce';
						$email = $_POST["resetPassword"];
						$title ='SOLICITUD DE NUEVA CONTRASEÑA';
						$message = '<h4 style="font-weight: 100; color:#999; padding:0px 20px"><strong>Su nueva contraseña: '.$newPassword.'</strong></h4>
							<h4 style="font-weight: 100; color:#999; padding:0px 20px">Ingrese nuevamente al sitio con esta contraseña y recuerde cambiarla en el panel de perfil de usuario</h4>';
						$link = TemplateController::path().'admin';

						$sendEmail = TemplateController::sendEmail($subject, $email, $title, $message, $link);

						if($sendEmail == "ok"){

							echo '<script>

									fncFormatInputs();
									fncMatPreloader("off");
									fncToastr("success", "Su nueva contraseña ha sido enviada con éxito, por favor revise su correo electrónico");

								</script>
							';

						}else{

							echo '<script>

								fncFormatInputs();
								fncMatPreloader("off");
								fncNotie("error", "'.$sendEmail.'");

								</script>
							';

						}
					}

				}else{

					echo '<script>

							fncFormatInputs();
							fncMatPreloader("off");
							fncNotie("error", "El correo no existe en la base de datos");

						</script>
					';

				}

			}


		}


	}
}                
