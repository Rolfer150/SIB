<?php
    session_start();
    if ((!isset($_POST['username'])) || (!isset($_POST['password'])))
	{
		header('Location: log_user.php');
		exit();
	}

    require_once "polaczenie.php";
    $polacz = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($polacz->connect_errno!=0)
	{
		echo "Error: ".$polacz->connect_errno;
	}
	else
	{
	    $username = $_POST['username'];
        $password = $_POST['password'];

        $username = htmlentities($username, ENT_QUOTES, "UTF-8");
		$password = htmlentities($password, ENT_QUOTES, "UTF-8");

        $sql = "SELECT * FROM logowanie_uzytkownik WHERE login='%s' AND haslo='%s'";

        if($rezultat = @$polacz->query(sprintf($sql, mysqli_real_escape_string($polacz,$username), mysqli_real_escape_string($polacz,$password))))
        {
            $ilu_userow = $rezultat->num_rows;
            if($ilu_userow == 1)
            {
                $wiersz = $rezultat->fetch_assoc();
                $_SESSION['username'] = $wiersz['username'];

                unset($_SESSION['blad']);
				$rezultat->free_result();
                header('Location:panel_user.php');
            }
            else
            {				
				$_SESSION['blad'] = '<span style="color:red; margin-left: 200px">Nieprawidłowy login lub hasło!</span>';
				header('Location: log_user.php');				
			}
        }

        $polacz->close();
    }
    ?>