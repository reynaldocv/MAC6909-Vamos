<?php
#echo "..F_functions..";

require_once "BaseDatos.php";

Class F_functions{

	public function login($_email,$_pass)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from usuario where ".
			 " email='".$_email."' and ".
			 " password='".$_pass."' ";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function existe_usuario($_id_facebook)
	{


		$conexion=new BaseDatos();


		$conexion->conectar();

		$sql="select * from usuario where ".
			 " id_facebook='".$_id_facebook."' ";
		echo $sql;
		$result = mysqli_query($conexion->conexion,$sql);
		if ($result->num_rows>=1)
		{
			return True;
		}
		return False;
	}
	public function existe_usuario_email($_email)
	{
		$conexion=new BaseDatos();

		$conexion->conectar();

		$sql="select * from usuario where ".
			 " email='".$_email."' ";
		echo $sql;
		$result = mysqli_query($conexion->conexion,$sql);
		if ($result->num_rows>=1)
		{
			return True;
		}
		return False;
	}
	public function registrar_usuario($id_fb,$email,$nombre,$apellidos,$sexo,$foto)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="INSERT INTO `usuario` (`id_facebook`, `email`, `nombre`, `apellidos`, `sexo`, `foto`)".
			 " VALUES ('".$id_fb."', '".$email."', '".$nombre."', '".$apellidos."','".$sexo."','".$foto."')";
		echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}

	public function registrar_usuario_hobbie($em,$desc,$h1,$h2,$h3,$h4)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="INSERT INTO `usuariohobbie` (`email`,`desc`, `h1`, `h2`, `h3`, `h4`)".
			 " VALUES ('".$em."', '".$desc."', '".$h1."', '".$h2."', '".$h3."','".$h4."')";
		echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function get_usuario_hobbie($_email)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from usuariohobbie where ".
			 " email='".$_email."' ";
		#echo $sql;
		$result = mysqli_query($conexion->conexion,$sql);
		if ($result->num_rows)
		{
			$row=mysqli_fetch_array($result);
			return $row;
		}
		else
		{
			return "Error";
		}
	}
	public function registrar_usuario_($email,$nombre,$apellidos,$sexo,$pass)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="INSERT INTO `usuario` (`email`, `nombre`, `apellidos`, `sexo`, `foto`, `password`, empresa)".
			 " VALUES ('".$email."', '".$nombre."', '".$apellidos."','".$sexo."','".$sexo.".png','".$pass."', 0)";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function insert_evento($_id_usuario,$_id_hobbie,$_id_lugar,$_data_e,$_max,$_comentario)
	{
		$_max=0;
		$_id_hobbie=1;
		$_id_lugar=1;
		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="INSERT INTO evento(`id_usuario`, `id_hobbie`,".
			" `id_lugar`, `data_evento`, `max_`, `comentario`,".
			" `data_public`) VALUES ('".$_id_usuario."', '".$_id_hobbie."', '".$_id_lugar."', '".date("Y-m-d H:i:s")."', '".$_max."', '".$_comentario."', '".date("Y-m-d H:i:s")."')";
		echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function list_evento()
	{


		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from evento e, usuario u where e.id_usuario=u.id_usuario and empresa=0 order by id_evento desc";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function list_eventos()
	{


		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from evento";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function list_evento_empresa()
	{


		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from evento e, usuario u where e.id_usuario=u.id_usuario and empresa=1 order by id_evento desc";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function list_evento_usuario($_id_usuario)
	{
		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from evento where id_usuario='".$_id_usuario."' order by id_evento desc";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function list_evento_complement($_id_usuario)
	{


		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from evento where id_usuario!='".$_id_usuario."' order by id_evento desc";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}
	public function nombre_usuario($_id_usuario)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from usuario where ".
			 " id_usuario=".$_id_usuario." ";
		#echo $sql;
		$result = mysqli_query($conexion->conexion,$sql);
		if ($result->num_rows)
		{
			$row=mysqli_fetch_array($result);
			return $row["nombre"]." ".$row["apellidos"];
		}
		else
		{
			return "Error";
		}
	}
	public function list_usuario($_id_usuario)
	{
		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from usuario where id_usuario!='".$_id_usuario."' and empresa=0  limit 0,20";
		#echo $sql;
		return mysqli_query($conexion->conexion,$sql);
	}

	public function foto($_id_usuario)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from usuario where ".
			 " id_usuario=".$_id_usuario." ";
		#echo $sql;
		$result = mysqli_query($conexion->conexion,$sql);
		if ($result->num_rows)
		{
			$row=mysqli_fetch_array($result);
			return $row["foto"];
		}
		else
		{
			return "Error";
		}
	}
	public function perfil($_email)
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from usuario where ".
			 " email='".$_email."' ";
		#echo $sql;
		$result = mysqli_query($conexion->conexion,$sql);
		if ($result->num_rows)
		{
			$row=mysqli_fetch_array($result);
			return $row;
		}
		else
		{
			return "Error";
		}
	}
	public function hobbie()
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from hobbie where tipohobbie=1";
		#echo $sql;
		$rpta=array();
		$result = mysqli_query($conexion->conexion,$sql);
		while ($row=mysqli_fetch_array($result))
		{
			$rpta[$row["id_hobbie"]]=$row["hobbie"];
		}
		return $rpta;
	}
	public function all_hobbie()
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from hobbie";
		#echo $sql;
		$rpta=array();
		$result = mysqli_query($conexion->conexion,$sql);
		while ($row=mysqli_fetch_array($result))
		{
			$rpta[$row["id_hobbie"]]=$row["hobbie"];
		}
		return $rpta;
	}

	public function hobbie_()
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from hobbie where tipohobbie<>1";
		#echo $sql;
		$rpta=array();
		$result = mysqli_query($conexion->conexion,$sql);
		while ($row=mysqli_fetch_array($result))
		{
			$rpta[$row["id_hobbie"]]=$row["hobbie"];
		}
		return $rpta;
	}
	public function lugar()
	{

		$conexion=new BaseDatos();
		$conexion->conectar();
		$sql="select * from lugar";
		#echo $sql;
		$rpta=array();
		$result = mysqli_query($conexion->conexion,$sql);
		while ($row=mysqli_fetch_array($result))
		{
			$rpta[$row["id_lugar"]]=$row["lugar"];
		}
		return $rpta;
	}



}

?>
