<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/cadastro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Cadastro</title>
</head>

<body>
    <div id="container">
        <div id="dados">

            <form id="form-cad">

                <div class="imageContainer">
                    <img src="images/select-img-branco.png" alt="selecionar foto" id="imgPhoto-login">
                </div>

                <div class="input-dados">
                    <i class="bi bi-person"></i>
                    <input type="text" class="input" placeholder="Nome completo" />
                </div>

                <div class="input-dados">
                    <i class="bi bi-envelope"></i>
                    <input type="text" class="input" placeholder="Email" />
                </div>

                <div class="input-dados">
                    <i class="bi bi-telephone"></i>
                    <input type="text" class="input" placeholder="Telefone" />
                </div>

                <div class="input-dados">
                    <i class="bi bi-lock"></i>
                    <input type="text" class="input" placeholder="Senha" />
                    <i class="bi bi-eye"></i>
                </div>

                <div class="input-dados">
                    <i class="bi bi-lock"></i>
                    <input type="text" class="input" placeholder="Confirme a senha" />
                    <i class="bi bi-eye"></i>
                </div>


                <button class="cadastrar">
                    Cadastre-se
                </button>

            </form>
        </div>
        <div id="complementos">

        <img src="images/bolinhas2-adm.png" id="bolinhas">
            <div id="endereço">
                <h2>Endereço</h2>

                <form id="form-end">
                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="CEP" />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="Logradouro" />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="Estado" />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="Numero" />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="Cidade" />
                    </div>


                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="Complemento" />
                    </div>

                    <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="Bairro" />
                    </div>


                </form>
            </div>

            <div id="num">
                <h2>Contato</h2>
                <div class="campo-comp">
                        <i class="bi bi-house-door"></i>
                        <input type="text" class="input" placeholder="telefone" />
                    </div>
            </div>
            <div id="prefere">
                <h2>Preferencias</h2>

                <form id="formPrefere">
                    <div class="coluna">
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/tipo.png" class="icons-form"/>
                                <label class="titulos">Tipo de pet</label>
                            </div>
                            <br>
                            <input type="radio" id="tipoPet" name="tipoPet" />
                            <label>Gato</label>
                            <input type="radio" id="tipoPet" name="tipoPet"/>
                            <label>Cachorro</label>
                            <input type="radio" id="tipoPet" name="tipoPet"/>
                            <label>Sem preferencia</label>
                        </div>
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/genero.png" class="icons-form"/>
                                <label class="titulos">Gênero</label>
                            </div>
                            <br>
                            <input type="radio" id="GenPet" name="GenPet" />
                            <label>Macho</label>
                            <input type="radio" id="GenPet" name="GenPet"/>
                            <label>Fêmea</label>
                            <input type="radio" id="GenPet" name="GenPet"/>
                            <label>Sem preferencia</label>
                        </div>
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/porte.png" class="icons-form"/>
                                <label class="titulos">Porte</label>
                            </div>
                            <br>
                            <input type="radio" id="portePet" name="portePet" />
                            <label>Pequeno</label>
                            <input type="radio" id="PortePet" name="portePet"/>
                            <label>Médio</label>
                            <input type="radio" id="portePet" name="portePet"/>
                            <label>Grande</label>
                            <input type="radio" id="portePet" name="portePet"/>
                            <label>Sem preferencia</label>
                        </div>
                    </div>
                   <div class="coluna">
                       
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/prefere.png" class="icons-form"/>
                                <label class="titulos">Prefere</label>
                            </div>
                            <br>
                            <input type="radio" id="prefPet" name="prefPet" />
                            <label>Adotar</label>
                            <input type="radio" id="prefPet" name="prefPet"/>
                            <label>Apadrinhar</label>
                            <input type="radio" id="prefPet" name="prefPet"/>
                            <label>Sem preferencia</label>
                        </div>
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/idade.png" class="icons-form"/>
                                <label class="titulos">Idade</label>
                            </div>
                            <br>
                            <input type="radio" id="idadePet" name="idadePet" />
                            <label>Filhote</label>
                            <input type="radio" id="idadePet" name="idadePet"/>
                            <label>Adulto</label>
                            <input type="radio" id="idadePet" name="idadePet"/>
                            <label>Idoso</label>
                            <input type="radio" id="idadePet" name="idadePet"/>
                            <label>Sem preferencia</label>
                        </div>
                       
                        <div class="separador">
                            <div class="area-titulo">
                                <img src="images/raça.png" class="icons-form"/>
                                <label class="titulos">Raça</label>
                            </div>
                            <br>
                       
                                <select class="select">
                                    <option value="1"> Opção 1 </option>
                                    <option value="2"> Opção 2 </option>
                                    <option value="3"> Opção 3 </option>
                                    <option value="4"> Opção 4 </option>
                                </select>
                            <br>
                            <input type="radio" id="idadePet" name="idadePet"/>
                            <label>Indefinida</label>
                            
                            <input type="radio" id="idadePet" name="idadePet"/>
                            <label>Sem preferencia</label>
                        </div>
                   </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>