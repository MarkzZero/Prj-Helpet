<?php

include('./config/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/logo-azul.png" type="image/x-icon">
    <title>Cadastro</title>
</head>

<body>
    <div id="container">
        <div id="dados">

            <form action="cadastro/Cadastro.php " id="form-cad" method="post" enctype="multipart/form-data">

                <div class="imageContainer">
                    <img src="images/select-img-branco.png" alt="selecionar foto" id="imgPhoto-login">
                </div>

                <div class="input-dados">
                    <i class="bi bi-person"></i>
                    <input type="text" name="nome" class="input" placeholder="Nome completo"  required/>
                </div>

                <div class="input-dados">
                    <i class="bi bi-envelope"></i>
                    <input type="text" name="email" class="input" placeholder="Email"  required/>
                </div>

                <div class="input-dados">
                    <i class="bi bi-telephone"></i>
                    <input type="text" name="telefone" class="input" placeholder="Telefone"  required/>
                </div>

                <div class="input-dados">
                    <i class="bi bi-lock"></i>
                    <input type="password" id="senha"  name="senha" class="input" placeholder="Senha" required/>
                    <i class="bi-eye-fill" id="btn-senha" onclick="mostrarSenha()"></i>
                </div>

                <div class="input-dados">
                    <i class="bi bi-lock"></i>
                    <input type="password" id="confir" name="senha_confirma" class="input" placeholder="Confirme a senha" required/>
                    <i class="bi-eye-fill" id="btn-senha2" onclick="mostrarSenha2()"></i>
                </div>

                <input  type="submit" id="submit" class="cadastrar" value="Cadastre-se">

            
        </div>
        <div id="complementos">

            <img src="images/bolinhas2-adm.png" id="bolinhas">
            <div id="endereço">
                <h2>Endereço</h2>

                <div id="form-end">
                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" name="cep" class="input" placeholder="CEP" required />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" id="rua" name="logradouro" class="input" placeholder="Logradouro" required/>
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" id="uf" name="estado" class="input" placeholder="Estado" required/>
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" name="numero" class="input" placeholder="Numero" required/>
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" id="cidade" name="cidade" class="input" placeholder="Cidade" required />
                    </div>


                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" name="complemento" class="input" placeholder="Complemento" />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" id="bairro" name="bairro" class="input" placeholder="Bairro" required/>
                    </div>



            </div>
            <br><br>
</div>
            <div id="prefere">
                <h2>Preferencias</h2>

                <div id="formPrefere">
                    <div class="coluna">
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/tipo.png" class="icons-form" />
                                <label class="titulos">Tipo de pet</label>
                            </div>
                            <br>
                            <input type="radio" id="tipoPet" value="opGato" name="tipoPet" required/>
                            <label>Gato</label>
                            <input type="radio" id="tipoPet" value="opCachorro" name="tipoPet" required/>
                            <label>Cachorro</label>
                            <input type="radio" id="tipoPet" value="semPreferencia" name="tipoPet" required/>
                            <label>Sem preferencia</label>
                        </div>
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/genero.png" class="icons-form" />
                                <label class="titulos">Gênero</label>
                            </div>
                            <br>
                            <input type="radio" id="GenPet" value="opMacho" name="GenPet" required />
                            <label>Macho</label>
                            <input type="radio" id="GenPet" value="opFemea" name="GenPet" required/>
                            <label>Fêmea</label>
                            <input type="radio" id="GenPet" value="semPrefencia" name="GenPet" required/>
                            <label>Sem preferencia</label>
                        </div>
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/porte.png" class="icons-form" />
                                <label class="titulos">Porte</label>
                            </div>
                            <br>
                            <input type="radio" id="portePet" value="opPequeno" name="portePet" required/>
                            <label>Pequeno</label>
                            <input type="radio" id="PortePet" value="opMedio" name="portePet" required/>
                            <label>Médio</label>
                            <input type="radio" id="portePet" value="opGrande" name="portePet" required/>
                            <label>Grande</label>
                            <input type="radio" id="portePet" value="semPreferencia" name="portePet" required />
                            <label>Sem preferencia</label>
                        </div>
                    </div>
                    <div class="coluna">

                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/prefere.png" class="icons-form" />
                                <label class="titulos">Prefere</label>
                            </div>
                            <br>
                            <input type="radio" id="prefPet" value="opAdotar" name="prefPet" required/>
                            <label>Adotar</label>
                            <input type="radio" id="prefPet" value="opApadrinhar" name="prefPet" required/>
                            <label>Apadrinhar</label>
                            <input type="radio" id="prefPet" value="semPreferencia" name="prefPet" required/>
                            <label>Sem preferencia</label>
                        </div>
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/idade.png" class="icons-form" />
                                <label class="titulos">Idade</label>
                            </div>
                            <br>
                            <input type="radio" id="idadePet" value="opFilhote" name="idadePet" required/>
                            <label>Filhote</label>
                            <input type="radio" id="idadePet" value="opAdulto" name="idadePet" required/>
                            <label>Adulto</label>
                            <input type="radio" id="idadePet" value="opIdoso" name="idadePet" required/>
                            <label>Idoso</label>
                            <input type="radio" id="idadePet" value="semPreferencia" name="idadePet" required/>
                            <label>Sem preferencia</label>
                        </div>

                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/raça.png" class="icons-form" />
                                <label class="titulos">Raça</label>
                            </div>
                            <br>

                            <select class="select" name="raca" required>
                                <?php $sql = mysqli_query($mysqli, "SELECT idRaca, nomeRaca FROM tbRaca ORDER BY nomeRaca ASC"); ?>
                                <option value="" disabled selected>Raça:</option>
                                <?php
                                while ($resultado = mysqli_fetch_array($sql)) {
                                    echo "<option value='" . $resultado['idRaca'] . "' name='raca'>"  . $resultado['nomeRaca'] . "</option>";
                                }
                                ?>
                            </select>
                            <br>

                            <input type="radio" id="idadePet" name="idadePet" />
                            <label>Sem preferencia</label>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="js/script.js"></script>

</body>

</html>