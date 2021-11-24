<?php


require 'config.php';

class BD_PDO
{

	public $tot_reg;
	public $ultimo_id;

	public function getConection()
	{
		try {
			$conexion = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME . ";", DB_USER, DB_PASS);
			
		} catch (PDOException $e) {
			echo "Failed to get DB handle: " . $e->getMessage();
			exit;
		}
		return $conexion;
	}

	/**
	 * Function to get all rows of the query
	 */
	public function getQuery($query)
	{
		$cnn = $this->getConection();
		$sql = $cnn->prepare($query);
		$sql->execute();
		$data = $sql->fetchAll(PDO::FETCH_ASSOC);
		return $data;
		$cnn = null;
	}


	/**
	 * Function to get only one row of the query
	 */
	public function getOnlyRow($query)
	{
		$cnn = $this->getConection();
		$sql = $cnn->prepare($query);
		$sql->execute();
		$data = $sql->fetch(PDO::FETCH_ASSOC);
		return $data;
		$cnn = null;
	}

	/**
	 * Function to insert in database
	 */
	public function insertQuery($query)
	{
		try {
			$cnn = $this->getConection();
			$sql = $cnn->prepare($query);
			$sql->execute();
			$sql = $sql->rowCount();
			return $sql;
		} catch (PDOException $e) {
			echo "Failed to get DB handle: " . $e->getMessage();
			exit;
		}
	}

	public function Ejecutar_Instruccion($consulta_sql)
	{
		# code...
		$conexion = $this->getConection();
		$rows = array();

		$query = $conexion->prepare($consulta_sql);
		if (!$query) {
			return "Error al mostrar";
		} else {
			$query->execute();
			$this->tot_reg = $query->rowCount();
			while ($result = $query->fetch()) {
				$rows[] = $result;
			}
			return $rows;
		}
	}

	public function Tot_registros()
	{
		return $this->tot_reg;
	}

	public function Ultimo_id()
	{
		return $this->ultimo_id;
	}

	public function Llenar_Combo($tabla_foranea, $id_foraneo, $campo_foraneo, $tabla_combo, $campo_id_primario)
	{
		$conexion = $this->getConection();
		$query = $conexion->prepare("SELECT * FROM " . $tabla_foranea . "
		 WHERE " . $campo_foraneo . "=:id");
		$query->bindParam(':id', $id_foraneo);
		if (!$query) {
			return "Error al mostrar";
		} else {
			$query->execute();
			$foranea = $query->fetch();
		}
		$query2 = $conexion->prepare("SELECT * FROM " . $tabla_combo);
		$query2->execute();
		while ($result = $query2->fetch()) {
			if ($foranea[$campo_id_primario] == $result[$campo_id_primario])
				$select = "selected";
			else
				$select = "";
			$cadena = $cadena . '<option value="' . $result[0] . '" ' . $select . '>' . $result[1] . '</option>';
		}
		return $cadena;
	}

	public function Llenar_Combo2($tabla_combo, $llave_primaria, $campo_visualizar)
	{
		$cadena = '';
		$conexion = $this->getConection();
		$query = $conexion->prepare("SELECT * FROM " . $tabla_combo);
		$query->execute();
		while ($result = $query->fetch()) {
			$cadena = $cadena . '<option value="' . $result[$llave_primaria] .
				'">' . $result[$campo_visualizar] . '</option>';
		}
		return $cadena;
	}
}

?>
