<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <header>
        <?php
        include "topo.php";
        ?>
    </header>

    <section id="main">

        <?php
        include('conexao.php');

        if (isset($_POST["f_login"])) {
            $user = $_POST["f_user"];
            $senha = $_POST["f_senha"];

            $sql = "SELECT * FROM tb_colaboradores WHERE user_name='$user' AND senha='$senha'";
            $res =  mysqli_query($con, $sql);
            if (!$res) {
                printf("Error: %s\n", mysqli_error($con));
                exit();
            }
            $ret = mysqli_fetch_array($res);

            if ($ret == 0) {
                echo "<p class='logErro'>Login incorreto</p>";
            } else {
                $chave1 = "abcdefhijklmnopqrstuvwxyz";
                $chave2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                $chave3 = "0123456789";
                $chave = str_shuffle($chave1 . $chave2 . $chave3);
                $tamChave = strlen($chave);

                $num = "";

                $qtd = rand(20, 50);

                for ($i = 0; $i < $qtd; $i++) {
                    $pos = rand(0, $tamChave);
                    $num .= substr($chave, $pos, 1);
                }

                session_start();
                $_SESSION['numlogin'] = $num;
                $_SESSION['username'] = $user;
                $_SESSION['acesso'] = $ret['acesso'];
                header("Location:gestao.php?num=$num");
            }
        }

        mysqli_close($con);

        ?>

        <form action="login.php" method="post" name="f_login" id="f_login">
            <label for="">Utilizador</label>
            <input type="text" name="f_user">
            <label for="">Senha</label>
            <input type="password" name="f_senha">
            <input type="submit" value="Login" name="f_login">
        </form>

    </section>

</body>

</html>