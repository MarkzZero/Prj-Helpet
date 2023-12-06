<?php
    include('./conexao/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cadastro do Usuário</title>
        <link rel="shortcut icon" href="images/logo-azul.png" type="image/x-icon">

        <!-- Link CSS -->
        <link rel="stylesheet" href="css/cadastro.css">
    </head>
    <body>

        <div class="container">
        <img class="patinhas" src="images/patinhas-amarela.png">
        <form action="cadastro/Cadastro.php" id="form-cad" method="post" enctype="multipart/form-data">

                    <div class="area-dados box">
                        <h1>Cadastro do Usuário</h1>

                        <div class="max-width">
                            <div class="imageContainer">
                                <img src="images/foto-user.png" alt="selecionar foto" id="imgPhoto-login">
                            </div>
                            <input type="file" id="flImage-login" name="image">
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-circle-user"></i>
                            <input type="text" required name="nome" id="nome"/>
                            <div class="linha-input"></div>
                            <label>Nome</label>		
                        </div>

                        <div class="input-container">		
                            <i class="fi fi-rr-id-card-clip-alt"></i>
                            <input type="text" required name="cpf" id="cpf"/>
                            <div class="linha-input"></div>
                            <label>CPF</label>
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-phone-call"></i>
                            <input type="telefone" required name="telefone" id="telefone"/>
                            <div class="linha-input"></div>
                            <label>Telefone</label>		
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-envelope"></i>
                            <input type="email" required name="email"id="email"/>
                            <div class="linha-input"></div>
                            <label>Email</label>		
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-lock"></i>
                            <i class="fi fi-rr-eye" id="btn-senha" onclick="mostrarSenha()"></i>
                            <input type="password" id="senha" name="senha" required/>
                            <div class="linha-input"></div>
                            <label>Senha</label>		
                        </div>

                        <div class="input-container">
                            <i class="fi fi-rr-lock"></i>
                            <i class="fi fi-rr-eye" id="btn-conf-senha" onclick="mostrarConfSenha()"></i>
                            <input type="password" id="conf-senha" name="senha_confirma" required/>
                            <div class="linha-input"></div>
                            <label>Confirmar Senha</label>		
                        </div> 
                    </div>
        <ul class="list">
            <li class="item">
                <input type="radio" id="radio_testimonial-1" class="btn-radio" name="basic_carousel" checked="checked" />
                <div class="content-test content_testimonial-1">
                    <div class="area-btn-label">
                        <label class="label_testimonial-2 btn-label" for="radio_testimonial-2">
                            <p>Avançar</p>
                            <i class="fi fi-br-angle-small-right"></i>
                        </label>
                    </div>
                 
                    <div class="area-avancar">
                        <span>Já tem uma conta?</span>
                        <p>Faça seu login para entrar no seu perfil!</p>
                        <img src="images/img-usuario.png">
                        <a href="index.php">Login</a>
                    </div>
                </div>
            </li>
        </div>

            <a href="../index.php"><img class="logo" src="images/logo-azul.png"></a>
            <img class="bolinhas" src="images/enfeite-bolinha.png">

            <li class="item">
                <input type="radio" id="radio_testimonial-2" class="btn-radio" name="basic_carousel"/>
                <div class="content-test content_testimonial-2">
                    <div class="area-voltar">
                        <!--
                        <h2>Continuação</h2>
                        <p>Insira o resto das informações para concluir o cadastro.</p>
                        <img src="images/img-usuario.png">-->


                    </div>
                    <div class="area-complementos">
                        <h2>Endereço</h2>
                        <div class="area-campos">
                            <div class="input-endereco">
                                <i class="fi fi-rr-search-location"></i>
                                <input type="text" id="cep" onblur="pesquisacep(this.value);" onkeyup="formatCEP(this)" required name="cep"/>
                                <div class="linha-input"></div>
                                <label>CEP</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="uf" required name="estado"/>
                                <div class="linha-input"></div>
                                <label>Estado</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="cidade" required name="cidade"/>
                                <div class="linha-input"></div>
                                <label>Cidade</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="bairro" required name="bairro"/>
                                <div class="linha-input"></div>
                                <label>Bairro</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" id="rua" required name="logradouro"/>
                                <div class="linha-input"></div>
                                <label>Logradouro</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" required name="numero"/>
                                <div class="linha-input"></div>
                                <label>Número</label>		
                            </div>

                            <div class="input-endereco">
                                <i class="fi fi-rr-map-marker"></i>
                                <input type="text" name="complemento"/>
                                <div class="linha-input"></div>
                                <label>Complemento</label>		
                            </div>
                        </div>

                        <div class="area-preferencias">
                            <h2>Preferências</h2>

                            <div class="pref">
                                <div class="campo-pref">
                                    <span class="titulo-pref">
                                        <img src="images/preferencias/tipo-pet.png">
                                        <p>Espécie:</p>
                                    </span>
                                    <div class="campos-radio">
                                        <div class="radio-op">
                                            <input type="radio" id="tipoPet" value="opCachorro" name="tipoPet" required/>
                                            <label>Cachorro</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="tipoPet" value="opGato" name="tipoPet" required/>
                                            <label>Gato</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="tipoPet" value="semPreferencia" name="tipoPet" required/>
                                            <label>Sem preferência</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="campo-pref">
                                    <span class="titulo-pref">
                                        <img src="images/preferencias/apadrinhamento.png">
                                        <p>Prefere:</p>
                                    </span>
                                    <div class="campos-radio">
                                        <div class="radio-op">
                                            <input type="radio" id="prefPet" value="opAdotar" name="prefPet" required/>
                                            <label>Adotar</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="prefPet" value="opApadrinhar" name="prefPet" required/>
                                            <label>Apadrinhar</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="prefPet" value="semPreferencia" name="prefPet" required/>
                                            <label for="sem-pref">Sem preferência</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="campo-pref">
                                    <span class="titulo-pref">
                                        <img src="images/preferencias/genero.png">
                                        <p>Gênero:</p>
                                    </span>
                                    <div class="campos-radio">
                                        <div class="radio-op">
                                            <input type="radio" id="GenPet" value="opFemea" name="GenPet" required/>
                                            <label>Fêmea</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="GenPet" value="opMacho" name="GenPet" required/>
                                            <label>Macho</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="GenPet" value="semPrefencia" name="GenPet" required/>
                                            <label>Sem preferência</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="campo-pref">
                                    <span class="titulo-pref">
                                        <img src="images/preferencias/idade.png">
                                        <p>Idade:</p>
                                    </span>
                                    <div class="campos-radio">
                                        <div class="radio-op">
                                            <input type="radio" id="idadePet" value="opFilhote" name="idadePet" required/>
                                            <label>Filhote</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="idadePet" value="opAdulto" name="idadePet" required/>
                                            <label>Adulto</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="idadePet" value="opIdoso" name="idadePet" required/>
                                            <label>Idoso</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="idadePet" value="semPreferencia" name="idadePet" required/>
                                            <label>Sem preferência</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="campo-pref">
                                    <span class="titulo-pref">
                                        <img src="images/preferencias/porte.png">
                                        <p>Porte:</p>
                                    </span>
                                    <div class="campos-radio">
                                        <div class="radio-op">
                                            <input type="radio" id="portePet" value="opPequeno" name="portePet" required/>
                                            <label>Pequeno</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="portePet" value="opMedio" name="portePet" required/>
                                            <label>Médio</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="portePet" value="opGrande" name="portePet" required/>
                                            <label>Grande</label>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" id="portePet" value="semPreferencia" name="portePet" required/>
                                            <label>Sem preferência</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="campo-pref">
                                    <span class="titulo-pref">
                                        <img src="images/preferencias/raca.png">
                                        <p>Raça:</p>
                                    </span>
                                    <div class="campos-radio">
                                        <div class="radio-op">
                                            <input type="radio" name="especie" value="espSemPref" id="esp-sem-pref"/>
                                            <label>Qual?</label>
                                            <select class="select" name="raca" required>
                                                <?php $sql = mysqli_query($mysqli, "SELECT idRaca, nomeRaca FROM tbRaca ORDER BY nomeRaca ASC"); ?>
                                                <option value="" disabled selected>Raça:</option>
                                                <?php
                                                    while ($resultado = mysqli_fetch_array($sql)) {
                                                        echo "<option value='" . $resultado['idRaca'] . "' name='raca'>"  . $resultado['nomeRaca'] . "</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="radio-op">
                                            <input type="radio" name="especie" value="espSemPref" id="esp-sem-pref" />
                                            <label>Sem preferência</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="area-btn">
                            <div class="area-btn-label">
                            <label class="label_testimonial-1 btn-label" for="radio_testimonial-1">
                                <i class="fi fi-br-angle-small-left"></i>
                                <p>Voltar</p>
                            </label>
                        </div>
                                <button type="submit" id="submit">Cadastrar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
        </form>

        <!-- Link JS -->
        <script src="js/script.js"></script>
        <script src="js/cadastro.js"></script>

    </body>
</html>
