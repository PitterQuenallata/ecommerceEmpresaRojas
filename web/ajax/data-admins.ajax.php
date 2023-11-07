<?php

require_once "../controllers/curl.controller.php";
require_once "../controllers/template.controller.php";

class DatatableController
{

    public function data()
    {

        if (!empty($_POST)) {

            /*=============================================
            Capturando y organizando las variables POST de DT
            =============================================*/

            $draw = $_POST["draw"]; //Contador utilizado por DataTables para garantizar que los retornos de Ajax de las solicitudes de procesamiento del lado del servidor sean dibujados en secuencia por DataTables 
            // echo '<pre>$draw '; print_r($draw); echo '</pre>';

            $orderByColumnIndex = $_POST["order"][0]["column"]; //Índice de la columna de clasificación (0 basado en el índice, es decir, 0 es el primer registro)
            // echo '<pre>$orderByColumnIndex '; print_r($orderByColumnIndex); echo '</pre>';

            $orderBy = $_POST["columns"][$orderByColumnIndex]["data"]; //Obtener el nombre de la columna de clasificación de su índice
            // echo '<pre>$orderBy '; print_r($orderBy); echo '</pre>';

            $orderType = $_POST["order"][0]["dir"]; // Obtener el orden ASC o DESC
            // echo '<pre>$orderType '; print_r($orderType); echo '</pre>';

            $start = $_POST["start"]; //Indicador de primer registro de paginación.
            // echo '<pre>$start '; print_r($start); echo '</pre>';

            $length = $_POST["length"]; //Indicador de la longitud de la paginación.
            // echo '<pre>$length '; print_r($length); echo '</pre>';

            /*=============================================
            El total de registros de la data
            =============================================*/

            $url = "admins?select=id_admin";
            $method = "GET";
            $fields = array();

            $response = CurlController::request($url, $method, $fields);

            if ($response->status == 200) {

                $totalData = $response->total;
            } else {

                echo '{"data":[]}';

                return;
            }

            $select = "id_admin,rol_admin,name_admin,email_admin,date_updated_admin";

            /*=============================================
           	Búsqueda de datos
            =============================================*/

            if (!empty($_POST['search']['value'])) {

                if (preg_match('/^[0-9A-Za-zñÑáéíóú ]{1,}$/', $_POST['search']['value'])) {

                    $linkTo = ["name_admin", "email_admin", "rol_admin"];

                    $search = str_replace(" ", "_", $_POST['search']['value']);

                    foreach ($linkTo as $key => $value) {

                        $url = "admins?select=" . $select . "&linkTo=" . $value . "&search=" . $search . "&orderBy=" . $orderBy . "&orderMode=" . $orderType . "&startAt=" . $start . "&endAt=" . $length;

                        $data = CurlController::request($url, $method, $fields)->results;

                        if ($data == "Not Found") {

                            $data = array();
                            $recordsFiltered = 0;
                        } else {

                            $recordsFiltered = count($data);
                            break;
                        }
                    }
                } else {

                    echo '{"data": []}';

                    return;
                }
            } else {

                /*=============================================
	            Seleccionar datos
	            =============================================*/

                $url = "admins?select=" . $select . "&orderBy=" . $orderBy . "&orderMode=" . $orderType . "&startAt=" . $start . "&endAt=" . $length;
                $data = CurlController::request($url, $method, $fields)->results;

                $recordsFiltered = $totalData;
            }

            /*=============================================
            Cuando la data viene vacía
            =============================================*/

            if (empty($data)) {

                echo '{"data": []}';

                return;
            }

            /*=============================================
            Construimos el dato JSON a regresar
            =============================================*/

            $dataJson = '{
				"Draw": ' . intval($draw) . ',
				"recordsTotal": ' . $totalData . ',
				"recordsFiltered": ' . $recordsFiltered . ',
				"data": [';

            foreach ($data as $key => $value) {

                $name_admin = $value->name_admin;
                $email_admin = $value->email_admin;
                $rol_admin = $value->rol_admin;
                $date_updated_admin = $value->date_updated_admin;

                $actions = "<div class='btn-group'>
									<a href='/admin/administradores/gestion?admin=" . base64_encode($value->id_admin) . "' class='btn bg-dark border-0 rounded-pill mr-2 btn-sm px-3'>
										<i class='fas fa-pencil-alt text-white'></i>
									</a>
									<button class='btn btn-danger border-0 rounded-pill mr-2 btn-sm px-3 deleteItem' rol='admin' table='admins' column='admin' idItem='" . base64_encode($value->id_admin) . "'>
										<i class='fas fa-trash-alt text-white'></i>
									</button>
								</div>";

                $actions = TemplateController::htmlClean($actions);

                $dataJson .= '{ 
						"id_admin":"' . ($start + $key + 1) . '",
						"name_admin":"' . $name_admin . '",
						"email_admin":"' . $email_admin . '",
						"rol_admin":"' . $rol_admin . '",
						"date_updated_admin":"' . $date_updated_admin . '",
						"actions":"' . $actions . '"
					},';
            }

            $dataJson = substr($dataJson, 0, -1); // este substr quita el último caracter de la cadena, que es una coma, para impedir que rompa la tabla

            $dataJson .= ']}';

            echo $dataJson;
        }
    }
}

/*=============================================
Activar función DataTable
=============================================*/

$data = new DatatableController();
$data->data();
