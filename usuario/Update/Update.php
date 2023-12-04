<?php 
    include('../conexao/conexao.php');
    include('../Login/login.php');

    if(isset($_POST['update'])){
        $id = $_SESSION['id'];
        $foto = $_POST['foto'];
        $image = $_FILES['image'];
        $nome = mysqli_real_escape_string($mysqli, trim($_POST['nome']));
        $cpf = mysqli_real_escape_string($mysqli, trim($_POST['cpf']));
        $telefone = mysqli_real_escape_string($mysqli, trim($_POST['telefone']));
        $email = mysqli_real_escape_string($mysqli, trim($_POST['email']));
        $cep = mysqli_real_escape_string($mysqli, trim($_POST['cep']));
        $estado = mysqli_real_escape_string($mysqli, trim($_POST['estado']));
        $cidade = mysqli_real_escape_string($mysqli, trim($_POST['cidade']));
        $bairro = mysqli_real_escape_string($mysqli, trim($_POST['bairro']));
        $logradouro = mysqli_real_escape_string($mysqli, trim($_POST['logradouro']));
        $numero = mysqli_real_escape_string($mysqli, trim($_POST['numero']));
        $complemento = mysqli_real_escape_string($mysqli, trim($_POST['complemento']));

        if($image !== null){
            preg_match("/\.(png|jpg|jpeg){1}$/i", $image["name"], $ext);
            if($ext == true){
                $nome_arquivo = md5(uniqid(time())) . "." . $ext[1];

                $caminho_arquivo = "../cadastro/fotoUsuario/" . $nome_arquivo;
    
                move_uploaded_file($image["tmp_name"], $caminho_arquivo);

                $updateImage = "UPDATE tbUsuario SET fotoUsuario = '$caminho_arquivo' WHERE idUsuario = '$id'";
                if($mysqli->query($updateImage) == true){
                    header("Location: ../perfil-usuario/configuracoes.php#edit");
                }else{
                    echo "Erro ao inserir os dados";
                    $mysqli->error;
                }
            }
        }else{
            $sqlFoto = "UPDATE tbUsuario SET fotoUsuario = '$foto' WHERE idUsuario = '$id'";
            if($mysqli->query($sqlFoto) == true){
                header("Location: ../perfil-usuario/configuracoes.php#edit");
            }else{
                echo "Erro ao inserir os dados";
                $mysqli->error;
            }
        }

        $sql = "UPDATE tbUsuario SET nomeUsuario = '$nome', cpfUsuario = '$cpf', emailUsuario = '$email', cepUsuario = '$cep', estadoUsuario = '$estado', cidadeUsuario = '$cidade', bairroUsuario = '$bairro', logradouroUsuario = '$logradouro', numLocalUsuario = '$numero', complementoUsuario = '$complemento' WHERE idUsuario = '$id'";
        if($mysqli->query($sql) == true){
            $sqlTelefone = "UPDATE tbTelefoneUsuario SET numTelefoneUsuario = '$telefone' WHERE idUsuario = '$id'";
            if($mysqli->query($sqlTelefone) == true){
                header("Location: ../perfil-usuario/configuracoes.php#edit");
            }else{
                echo "Erro ao inserir os dados";
                $mysqli->error;
            }
        }
    }
?>
