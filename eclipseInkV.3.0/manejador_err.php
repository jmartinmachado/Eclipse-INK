<?
	error_reporting(0);
	function Manejador_ERR ($errno, $errmsg, $archivo, $lineanum, $vars) {
	$dt = date("Y-m-d H:i:s (T)");
	$errortype = array (
		1 => "Error",
		2 => "Warning",
		4 => "Parsing Error",
		8 => "Notice",
		16 => "Core Error",
		32 => "Core Warning",
		64 => "Compile Error",
		128 => "Compile Warning",
		256 => "User Error",
		512 => "User Warning",
		1024=> "User Notice"
	);
	$user_errors = array(E_USER_ERROR, E_USER_WARNING, E_USER_NOTICE);
	$err = "<error>\n";
	$err .= "\t<fecha>".$dt."</fecha>\n";
	$err .= "\t<errornum>".$errno."</errornum>\n";
	$err .= "\t<errortype>".$errortype[$errno]."</errortype>\n";
	$err .= "\t<errormsg>".$errmsg."</errormsg>\n";
	$err .= "\t<script>".$archivo."</script>\n";
	$err .= "\t<scriptlineanum>".$lineanum."</scriptlineanum>\n";
	if (in_array($errno, $user_errors))
		$err .= "\t<vartrace>".wddx_serialize_value($vars,"Variables")."</vartrace>\n";
		$err .= "</error>\n\n";
		error_log($err, 3, "error.log");
		#*if ($errno == E_USER_ERROR)
		#mail("phpdev@example.com","Critical User Error",$err);
	}
	$Manejador_de_Error = set_error_handler("Manejador_ERR");
?>