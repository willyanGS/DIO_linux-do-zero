<html>

<head>
<title>Exemplo PHP</title>
</head>
<body>

<?php
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=iso-8859-1');


echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = '54.234.153.24';  # AWS server
$username = 'root';
$password = 'Senha123';
$database = 'banco_teste';


// Create connection
$link = new mysqli($servername, $username, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    printf('Connect failed: %s\n', mysqli_connect_error());
    exit();
}


// Random values
$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));
$host_name = gethostname();

// DB query
$query = "INSERT INTO dados (id_usuario, nome, sobrenome, endereco, cidade, host) VALUES ('$valor_rand1' , '$valor_rand2', '$valor_rand2', '$valor_rand2', '$valor_rand2','$host_name')";

if ($link->query($query) === TRUE) {
  echo 'New record created successfully';
} else {
  echo 'Error: ' . $link->error;
}

?>
</body>
</html>