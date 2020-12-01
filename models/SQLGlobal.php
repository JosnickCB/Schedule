<?php
	require '../db/Database.php';

	class SQLGlobal{
		function _construct(){}

		public static function selectArray($consulta){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute();
			return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}

		public static function selectArrayFiltro($consulta,$datos){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute($datos);
			return $resultado->fetchAll(PDO::FETCH_ASSOC);
		}

		public static function selectObject($consulta){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute();
			return $resultado->fetch(PDO::FETCH_ASSOC);
		}

		public static function selectObjectFiltro($consulta,$datos){
			$resultado = Database::getInstance()->getDb()->prepare($consulta);
			$resultado->execute($datos);
			return $resultado->fetch(PDO::FETCH_ASSOC);
		}

		public static function cud($consulta){
			$sentencia = Database::getInstance()->getDb()->prepare($consulta);
			return $sentencia->execute(); //devuelve el numero de filas afectads
		}

		public static function cudFiltro($consulta,$datos){
			$sentencia = Database::getInstance()->getDb()->prepare($consulta);
			return $sentencia->execute($datos); //devuelve el numero de filas afectadas
		}

	}
	
?>