 <?php

    class Conexion
    {

        private $conexion;
        private $configuracion = [
            "driver" => "mysql",
            "host" => "localhost",
            "database" => "proyect",
            "port" => "3306",
            "username" => "root",
            "password" => "",
            "charset" => "utf8mb4",
        ];

        public function __construct()
        {
        }

        public function conectar()
        {
            try {

                $CONTROLADOR = $this->configuracion["driver"];
                $SERVIDOR = $this->configuracion["host"];
                $BASE_DATOS = $this->configuracion["database"];
                $PUERTO = $this->configuracion["port"];
                $USUARIO = $this->configuracion["username"];
                $CLAVE = $this->configuracion["password"];
                $CODIFICACION = $this->configuracion["charset"];

                $url = "{$CONTROLADOR}:host={$SERVIDOR}:{$PUERTO};"
                    . "dbname={$BASE_DATOS};charset={$CODIFICACION}";
                //Se crea la conexion
                $this->conexion = new PDO($url, $USUARIO, $CLAVE);
                return $this->conexion;
            } catch (\Throwable $th) {
                echo " NO CONECTADO";
            }
        }
    }

    ?>