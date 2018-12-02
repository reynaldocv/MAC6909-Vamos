<?php
echo "eventos-add";
echo  $_POST["usuario"];
#echo  $_POST["lugar"];
#echo  $_POST["hobbie"];
echo  $_POST["comentario"];

#if ($_POST["usuario"] && $_POST["hobbie"] && $_POST["lugar"] && $_POST["comentario"])
if ($_POST["usuario"] && $_POST["comentario"])
{

	echo "eventos-add";
	require_once "includes/F_functions.php";
	$funciones = new F_functions();
	#$result = $funciones->insert_evento($_POST["usuario"],$_POST["hobbie"],$_POST["lugar"],$_POST["data_evento"],"",$_POST["comentario"]);
	$result = $funciones->insert_evento($_POST["usuario"],"","","","",$_POST["comentario"]);


}
header('Location: index.php');
exit();
?>
