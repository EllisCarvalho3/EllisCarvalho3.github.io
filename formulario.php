<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="imagens/favicon.png" type="image/x-icon">
    <title>Portfolio</title> 
</head>
<body> 

    <nav class="menu">
        <div class="logo-img">
            <img src="imagens/teste_logo2.png" alt="logo2">
        </div>
        <div class="header">
            <div class="header-links">
                <div class="panqueca">
                <a href="index.html">Início</a>
                    <a href="about.html">Sobre</a>
                    <a href="certifications.html">Certificados</a>
                    <a href="social.html">Social</a>
                    <a href="formulario.php">Cadastro</a>
                </div>
        </div> 
    </nav>

    <section class="section-about" id="section-about">
        <div class="tamanho-video">
        <div class="contact-text">
                    <h1>Contate-nos!</h1>
        </div>
            <video autoplay muted loop id="myVideo">
                <source src="videos/cadastrotalvez.mp4" type="video/mp4">
              </video>
        </div>
    </section>

    <section class="formulario" id="formulario">
    <main>
    <div class="box-cadastro">
                <div class="titulo">
                    <h2>CADASTRO</h2>
                </div>
                <form action="formulario.php" class="formulario-registro" method="post">

               <div class="grupo-nome-sexo-data">
                <div class="input-nome-sexo-data">
                        <label for="">Nome</label>
                        <input type="text" placeholder="Digite seu nome completo..." name="nome" minlength="4" maxlength="60" required>
                    </div>

                    <div class="input-nome-sexo-data">
                    <label for="sexo">Sexo</label><br>
            <input type="radio" id="masculino" name="sexo" value="Masculino">
            <label for="masculino">Masculino</label>
            <input type="radio" id="feminino" name="sexo" value="Feminino">
            <label for="feminino">Feminino</label>
                    </div>

                     <div class="input-nome-sexo-data" >
                        <label for="data">Data de nascimento</label><br>
                        <input type="date" id="data" name="data" required>
                        </div>
               </div> 

                     <div class="grupo-cpf-email-telefone">
                        <div class="input-cpf-email-telefone">
                            <label for="cpf">CPF</label>
                            <input type="text" id="cpf" name="cpf" required placeholder="Digite seu CPF..." maxlength="14">
                        </div>

                        <div class="input-cpf-email-telefone">
                        <label for="email">E-mail</label> <br>
                        <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" required> <br>
                        </div>

                        <div class="input-cpf-email-telefone">
                        <label for="telefone">Telefone/WhatsApp</label> <br>
                        <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone..." pattern="[0-9]{10,11}"> 
                        </div>
                </div>

                        <div class="grupo-cidade-uf-pais">
                            <div class="input-cidade-uf-pais">
                            <label for="cidade">Cidade</label>
                            <input type="text" id="cidade" name="cidade" required placeholder="Digite sua cidade...">
                            </div>

                            <div class="input-cidade-uf-pais">
                            <label for="estado">UF</label>
                                    <select id="estado" name="uf" required>
                                    <option value="acre">Acre (AC)</option>
                                    <option value="alagoas">Alagoas (AL)</option>    
                                    <option value="amapa">Amapá (AP)</option>
                                    <option value="amazonas">Amazonas (AM)</option>
                                    <option value="bahia">Bahia (BA)</option>
                                    <option value="ceara">Ceará (CE)</option>
                                    <option value="espirito santo">Espírito Santo (ES)</option>
                                    <option value="goias">Goiás (GO)</option>
                                    <option value="maranhao">Maranhão (MA)</option>
                                    <option value="mato grosso">Mato Grosso (MT)</option>
                                    <option value="mato grosso do sul">Mato Grosso do Sul (MS)</option>
                                    <option value="minas gerais">Minas Gerais (MG)</option>
                                    <option value="para">Pará (PA)</option>
                                    <option value="paraiba">Paraíba (PB)</option>
                                    <option value="parana">Paraná (PR)</option>
                                    <option value="pernambuco">Pernambuco (PE)</option>
                                    <option value="piaui">Piauí (PI)</option>
                                    <option value="rio de janeiro">Rio de Janeiro (RJ)</option>    
                                    <option value="rio grande do norte">Rio Grande do Norte (RN)</option>
                                    <option value="rio grande do sul">Rio Grande do Sul (RS)</option>
                                    <option value="rondonia">Rondônia (RO)</option>
                                    <option value="roraima">Roraima (RR) </option>
                                    <option value="santa catarina">Santa Catarina (SC)</option>
                                    <option value="sao paulo">São Paulo (SP)</option>
                                    <option value="sergipe">Sergipe (SE)</option>
                                    <option value="tocantins">Tocantins (TO)</option>
                                    </select>
                            </div>

                            <div class="input-cidade-uf-pais">
                            <label for="nacionalidade">Nacionalidade</label>
                            <input type="text" id="nacionalidade" name="nacionalidade" required placeholder="Digite sua nacionalidade...">
                            </div>

                            
                        </div>

                        <div class="grupo-endereco-bairro-aptidoes">
                            <div class="input-endereco-bairro-aptidoes">
                            <label for="endereco">Endereço</label>
                              <input type="text" id="endereco" name="endereco" required
                            placeholder="Digite seu endereço...">
                            </div>

                            <div class="input-endereco-bairro-aptidoes">
                            <label for="bairro">Bairro</label>
                        <input type="text" id="bairro" name="bairro" required
                            placeholder="Digite seu bairro...">
                            </div>
                        </div>

                    <div class="grupo-area-profissional">
                        <div class="input-area-profissional">

                            <label>Área profissional</label>

                            <div class="checkbox-ap1">
                            <input type="checkbox" id="analista de dados" name="areaprofissional[]" value="Analista de Dados">
                                <label for="analista de dados">Analista de Dados</label><br>

                                <input type="checkbox" id="designer grafico" name="areaprofissional[]" value="Designer Gráfico">
                                <label for="designer grafico">Designer Gráfico</label><br>

 
                                <input type="checkbox" id="marketing digital" name="areaprofissional[]" value="Marketing Digital">
                                <label for="marketing digital">Marketing Digital</label><br>
                                </div>

                                <div class="checkbox-ap2">
                                      <input type="checkbox" id="psicologo" name="areaprofissional[]" value="Psicólogo">
                                <label for="Psicólogo">Psicólogo</label><br>


                                <input type="checkbox" id="biologo" name="areaprofissional[]" value="Biólogo">
                                <label for="biologo">Biólogo</label><br>


                                <input type="checkbox" id="nutricionista" name="areaprofissional[]" value="Nutricionista">
                                <label for="nutricionista">Nutricionista</label><br>
                                </div>

                            </div>
                        </div>
                        
                            <label>Áreas de interesse</label>

                            <div class="checkbox-ap1">
                            <input type="checkbox" id="UX/UI Design e prototipagem" name="areaprofissional[]" value="Fundamentos de Atuação">
                                <label for="UX/UI Design e prototipagem">UX/UI Design e prototipagem</label><br>

                                <input type="checkbox" id="Inteligência Artificial e Machine Learning" name="areaprofissional[]" value="Inteligência Artificial e Machine Learning">
                                <label for="Inteligência Artificial e Machine Learning">Inteligência Artificial e Machine Learning</label><br>


                                <input type="checkbox" id="Automação de processos e macros" name="areaprofissional[]" value="Automação de processos e macros">
                                <label for="Automação de processos e macros">Automação de processos e macros</label><br>
                                </div>

                                <div class="checkbox-ap2">
                                      <input type="checkbox" id="Manutenção e montagem de computadores" name="areaprofissional[]" value="Manutenção e montagem de computadores">
                                <label for="Manutenção e montagem de computadores">Manutenção e montagem de computadores</label><br>


                                <input type="checkbox" id="Neurociência e aprendizado" name="areaprofissional[]" value="Neurociência e aprendizado">
                                <label for="Neurociência e aprendizado">Neurociência e aprendizado</label><br>


                                <input type="checkbox" id="Oratória e comunicação persuasiva" name="areaprofissional[]" value="Oratória e comunicação persuasiva">
                                <label for="Oratória e comunicação persuasiva">Oratória e comunicação persuasiva</label><br><br>
                                </div> 
                              
                                <input type="submit" value="Salvar"> <br><br>
                                <input type="reset" value="Limpar"> <br>

                            </div>

</div>
</div>             
                </form>
            </div>
        </main>
        
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
</section>

    <section class="section-tabel" id="section-tabel">
    <div class="tabela">

    <h1>CONFIRA SEUS DADOS</h1>

    <?php
    // verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // coleta os dados do formulário
        $nome = htmlspecialchars($_POST['nome']);
        $sexo = isset($_POST['sexo']) ? htmlspecialchars($_POST['sexo']) : "Não informado";
        $data = htmlspecialchars($_POST['data']);
        $cpf = htmlspecialchars($_POST ['cpf']);
        $email = htmlspecialchars($_POST['email']);
        $telefone = htmlspecialchars($_POST['telefone']);
        $cidade = htmlspecialchars($_POST['cidade']);
        $nacionalidade = htmlspecialchars($_POST['nacionalidade']);
        $endereco = htmlspecialchars($_POST['endereco']);
        $bairro = htmlspecialchars($_POST['bairro']);
        
        //  tabela com os dados preenchidos
         echo "<table>
         <tr>
             <th>Nome</th>
             <td>$nome</td>
         </tr>
         <tr>
             <th>Sexo</th>
             <td>$sexo</td>
         </tr>
         <tr>
             <th>Data de nascimento</th>
             <td>$data</td>
         </tr>
         <tr>
             <th>CPF</th>
             <td>$cpf</td>
         </tr>
         <tr>
             <th>E-mail</th>
             <td>$email</td>
         </tr>
          <tr>
             <th>Telefone</th>
             <td>$telefone</td>
         </tr>
         <tr>
             <th>Cidade</th>
             <td>$cidade</td>
         </tr>
         
         <tr>
             <th>Nacionalidade</th>
             <td>$nacionalidade</td>
         </tr> 
         <tr>
             <th>Endereço</th>
             <td>$endereco</td>
         </tr>
         <tr>
             <th>Bairro</th>
             <td>$bairro</td>
         </tr>
         
     </table>";
     
 } else {
     echo "<p>Erro: Você não pode acessar seu cadastro antes de realizá-lo. Tente novamente.</p>";
 }
 ?>


<br>
<br>
<br>
  

</section>

<!-- <?php 
    echo $_POST['nome'];
    echo $_POST['data'];
    echo $_POST['cpf'];
    echo $_POST['telefone'];
    echo $_POST['cidade'];
    echo $_POST['nacionalidade'];
    echo $_POST['endereco'];
    echo $_POST['bairro'];
    ?> -->

<footer>
    <span class="footer-title">E&S Studio</span>
    <ul class="socials">
        <li><a href="https://wa.me/qr/KNIVFKKZMUUXH1"><i class="bi bi-whatsapp"></i></a></li>
        <li><a href="https://pt-br.facebook.com/"><i class="bi bi-facebook"></i></a></li>
        <li><a href="https://x.com/"><i class="bi bi-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/elliscarv/"><i class="bi bi-instagram"></i></a></li>
    </ul>
    <div class="info">
        <ul>
            <li class="footer-list_header">Oferece</li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Serviços</a></li>
            <li><a href="#">Categorias</a></li>
            <li><a href="contact.php">Contato</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Documentos</li>
            <li><a href="#">Sobre</a></li>
            <li><a href="#">Políticas de Privacidade</a></li>
            <li><a href="#">Termos de Serviço</a></li>
            <li><a href="#">Cookies</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Para você</li>
            <li><a href="#">Manuais</a></li>
            <li><a href="#">Tutoriais</a></li>
            <li><a href="#">Dicas e Truques</a></li>
            <li><a href="#">F&Q</a></li>
        </ul>

        <ul>
            <li class="footer-list_header">Trabalhe conosco</li>
            <li><a href="#">Afiliar</a></li>
            <li><a href="#">Colaborações</a></li>
            <li><a href="#">Patrocinadores</a></li>
            <li><a href="#">Parcerias</a></li>
    </div>
    <p>Copyright &copy 2025 E&S Studio. Todos os diereitos reservados. </p>
</footer>

</body>
</html>