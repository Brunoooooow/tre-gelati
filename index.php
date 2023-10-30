	<?php
	include("conexao.php");
	?>
	<?php
	// Conexão com o banco de dados (substitua pelas suas informações)
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "filmes";

	$conexao = mysqli_connect($hostname, $username, $password, $database);

	if (!$conexao) {
	    die("Falha na conexão: " . mysqli_connect_error());
	}

	$query = "
	    CREATE TABLE groceries (
	        id INTEGER PRIMARY KEY,
	        name TEXT,
	        quantity INTEGER,
	        aisle INTEGER
	    );
	    
	    INSERT INTO groceries (id, name, quantity, aisle) VALUES (1, 'Polaco', 4, 7);
	    INSERT INTO groceries (id, name, quantity, aisle) VALUES (2, 'José', 1, 2);
	    INSERT INTO groceries (id, name, quantity, aisle) VALUES (3, 'Diego', 2, 2);
	    INSERT INTO groceries (id, name, quantity, aisle) VALUES (4, 'Viera', 1, 12);
	    INSERT INTO groceries (id, name, quantity, aisle) VALUES (5, 'Fernanda', 6, 2);
	    INSERT INTO groceries (id, name, quantity, aisle) VALUES (6, 'Bruno', 1, 4);
		";

	?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Times, sans-serif;
            background-color: #e0b0ff;
            margin: #10;
            padding: 0;
            color: #fff;
        }

        h1 {
            text-align: left;
            color: #af458f;
            margin-top: 10px;
        }


        h1 {
            font-size: 40px;
        }

        h3 {
            font-size: 100px;
        }


        img {
            width: 800px;
            height: auto;
            border-radius: 10px;
        }
    </style>
</head>
<body>
   
    <div class="ranking-container">

        <div class="Venha ">
            <h3>Sabores para todos os gostos</h3>
             <h1>Transformamos momentos em sabores: Nossos picolés e sorvetes são a alegria que derrete na boca e aquece o coração.</h1>
            <img src="https://i.pinimg.com/736x/a7/ae/06/a7ae068c50dd28eb83065d7834573e9a.jpg" alt="Logo da sorveteria">
        </div>
        <!DOCTYPE html>
<html>
<head>
    <title>Página com Botão Estilizado</title>
    <style>
        /* Estilos para o botão */
        button {
            background-color: #4ED4D5; /* Cor de fundo */
            color: #blue; /* Cor do texto */
            padding: 20px 30px; /* Espaçamento interno */
            border: none; /* Sem borda */
            border-radius: 15px; /* Cantos arredondados */
            cursor: pointer; /* Cursor de mão ao passar o mouse */
        }

        /* Estilos ao passar o mouse sobre o botão */
        button:hover {
            background-color: #239EA3; /* Altera a cor de fundo quando o mouse passa por cima */
            button {
         margin-top: 50px;
         margin-left: 150px;
}
}
        }
    </style>
</head>
<body>
    <button onclick="window.location.href='https://eskimo.com.br/'">VER PRODUTOS</button>
</body>
</html>

