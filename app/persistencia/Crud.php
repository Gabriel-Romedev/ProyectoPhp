<?php

class Crud
{

    protected $tabla;
    protected $conexion;
    protected $wheres = "";
    protected $sql  = null;


    public function __construct($tabla = null)
    {
        $this->conexion = (new Conexion())->conectar();
        $this->tabla = $tabla;
    }
    public function Get()
    {
        try {
            $this->sql = "SELECT * FROM {$this->tabla} {$this->wheres}";
            $sth = $this->conexion->prepare($this->sql);
            $sth->execute();
            return $sth->fetchAll(PDO::FETCH_OBJ);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function first()
    {
        $lista = $this->get();
        if (count($lista) > 0) {
            return $lista[0];
        } else {
            return null;
        }
    }


    public function Insert($obj)
    {
        try {
            $campos = implode("`, `", array_keys($obj));
            $valores = ":" . implode(", :", array_keys($obj));
            $this->sql = "INSERT INTO {$this->tabla} (`{$campos}`) VALUES ({$valores})";
            $this->Ejecutar($obj);
            $id = $this->conexion->lastInsertId();
            return $id;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function Update($obj)
    {
        try {
            $campos = "";
            foreach ($obj as $llave => $valor) {
                $campos .= "`$llave`=:$llave,";
            }
            $campos = rtrim($campos, ",");
            $this->sql = "UPDATE {$this->tabla} SET {$campos} {$this->wheres}";
            $filasAfectadas = $this->ejecutar($obj);
            return $filasAfectadas;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


    public function Delete()
    {
        try {
            $this->sql = "DELETE FROM {$this->tabla} {$this->wheres}";
            $filasAfectadas = $this->ejecutar();
            return $filasAfectadas;
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function Where($llave, $condicion, $valor)
    {
        $this->wheres .= (strpos($this->wheres, "WHERE")) ? "AND" : "WHERE";
        $this->wheres .= "`$llave` $condicion " . ((is_string($valor)) ? "\"$valor\"" : $valor) . " ";
        return $this;
    }

    public function orWhere($llave, $condicion, $valor)
    {
        $this->wheres .= (strpos($this->wheres, "WHERE")) ? "OR" : "WHERE";
        $this->wheres .= "`$llave` $condicion " . ((is_string($valor)) ? "\"$valor\"" : $valor) . " ";
        return $this;
    }



    private function Ejecutar($obj = NULL)
    {
        $sth = $this->conexion->prepare($this->sql);
        if ($obj !== NULL) {
            foreach ($obj as $llave => $valor) {
                if (empty($valor)) {
                    $valor = NULL;
                }
                $sth->bindValue(":$llave", $valor);
            }
        }
        $sth->execute();
        $this->unsetValues();
        return $sth->rowCount();
    }

    private function unsetValues()
    {
        $this->wheres = "";
        $this->sql = null;
    }
}
