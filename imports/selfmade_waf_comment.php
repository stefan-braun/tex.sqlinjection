// SQL Injections verhindern
foreach($_GET as $key => $value){
	if(!strpos($value, "DECLARE")){die();}
}
foreach($_POST as $key => $value){
	if(!strpos($value, "DECLARE")){die();}
}