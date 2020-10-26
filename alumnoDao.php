<?php
require_once './alumno.php';
class AlumnoDao{
    private $pdo;

    public function __construct(){
        include 'connection.php';
        $this->pdo=$pdo;
    }

    public function mostrar(){
        $query = "SELECT * FROM `tbl_alumno`";
        $sentencia=$this->pdo->prepare($query);
        $sentencia->execute();

        $lista_alumnos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        //creamos la tabla con los usuarios usando solo los campos que nos piden
        foreach ($lista_alumnos as $alumno) {
            $id=$alumno['id_alumno'];
            echo "<tr><td><a href='./modificar_alumno.php?id={$id}'>Modificar</a><br>";
            echo "<a href='./zona.admin.php?id_alumno={$id}'>Eliminar</a>";

            // echo $id;
            echo "<td>{$alumno['nombre_alumno']}</td>";
            echo "<td>{$alumno['apellidop_alumno']}</td>";
            echo "<td>{$alumno['apellidom_alumno']}</td><tr>";
        }
	}
	
	public function filtros(){
		// include './connection.php';
    	$sql1="SELECT * FROM tbl_alumno WHERE nombre_alumno LIKE '%{$_POST['nombre_alumno']}%' AND apellidop_alumno LIKE '%{$_POST['apellidop_alumno']}%'";
		$sentencia=$this->pdo->prepare($sql1);
		$sentencia->execute();

		$lista_alumno=$sentencia->fetchAll(PDO::FETCH_ASSOC);

		foreach ($lista_alumno as $alumno) {
			$id=$alumno["id_alumno"]." ";
			echo "<tr><td><a href='./modificar_alumno.php?id={$id}'>Modificar</a><br>";
            echo "<a href='./zona.admin.php?id_alumno={$id}'>Eliminar</a>";
		/*	echo $id;*/
		//$enviar=$enviar."'>Modificar</a>";
			echo "<td>{$alumno['nombre_alumno']}</td>";
			echo "<td>{$alumno['apellidop_alumno']}</td>";
			echo "<td>{$alumno['apellidom_alumno']}</td><tr>";
    	}
   	}

    public function insertar(){
    	try {
    		include './connection.php';
			$stmt=$pdo->prepare("INSERT INTO tbl_alumno (`id_alumno`,`nombre_alumno`,`apellidop_alumno`,`apellidom_alumno`, `grupo_alumno`, `email_alumno`, `passwd_alumno`) VALUES (NULL, ?, ?, ?, ?, ?, ?);")	;
			$nombre=$_POST['nombre_alumno'];
			$apellido1=$_POST['apellidop_alumno'];
			$apellido2=$_POST['apellidom_alumno'];
			$grupo=$_POST['grupo_alumno'];
			$email=$_POST['email_alumno'];
			$passwd=md5($_POST['passwd_alumno']);
			$stmt->bindParam(1,$nombre);
			$stmt->bindParam(2,$apellido1);
			$stmt->bindParam(3,$apellido2);
			$stmt->bindParam(4,$grupo);
			$stmt->bindParam(5,$email);
			$stmt->bindParam(6,$passwd);
			$stmt->execute();
			header("Location:./zona.admin.php");
		} catch (Exception $ex){
			$pdo->rollback();
			echo $ex->getMessage();
		}


    }

    public function borrar(){
		include './connection.php';

		try {
			$pdo->beginTransaction();
			$id=$_GET['id_alumno'];
			//echo $id;

			// Comprobamos que el alumno tenga alguna nora
			$query = "SELECT * FROM `tbl_nota` WHERE `id_alumno` = ?";
			$sentencia=$pdo->prepare($query);
			$sentencia->bindParam(1,$id);
			$sentencia->execute();
			$lista_notas=$sentencia->fetch(PDO::FETCH_ASSOC);
			// Que no hay ninguna nota pues eliniamos al alumno del tiron que tine alguna nota puesta pues se elimina la nota y despues el alumno.
			if ($lista_notas!="") {
				$query="DELETE FROM `tbl_alumno` WHERE `id_alumno` = ?";
				$sentencia=$pdo->prepare($query);
				$sentencia->bindParam(1,$id);
				$sentencia->execute();
			} else {
				$query="DELETE FROM `tbl_nota` WHERE `id_alumno` = ?";
				$sentencia=$pdo->prepare($query);
				$sentencia->bindParam(1,$id);
				$sentencia->execute();

				$query="DELETE FROM `tbl_alumno` WHERE `id_alumno` = ?";
				$sentencia=$pdo->prepare($query);
				$sentencia->bindParam(1,$id);
				$sentencia->execute();
			}

		$pdo->commit();
		header("Location: ./zona.admin.php");

	} catch (Exception $e) {
		$pdo->rollBack();
		echo $e;
	}
	}
	
}
?>