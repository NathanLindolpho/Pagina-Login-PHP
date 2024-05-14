<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Empresa de Tecnologia</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body {
    font-family: 'Roboto', sans-serif; /* Usei Roboto, uma fonte moderna e clean */
    margin: 0;
    background-color: #121212; /* Fundo escuro para um visual tecnológico */
    color: #fff; /* Texto branco para contraste */
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    background-color: #181818; /* Fundo escuro e elegante */
    color: #fff;
    padding: 15px 0; /* Espaçamento vertical um pouco maior para melhor visualização */
    text-align: center;
    position: relative; /* Posicionamento para o efeito de sombra */
    z-index: 10; /* Garante que o header fique acima dos outros elementos */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Sombra sutil para dar destaque */
}

.logo {
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 0;
    font-family: 'Roboto', sans-serif; /* Usando Roboto para uma fonte moderna e clean */
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
    display: inline-block; /* Alinha os itens do menu na mesma linha */
}

nav li {
    display: inline-block;
    margin: 0 20px; /* Espaçamento maior entre os itens do menu */
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s;
    font-size: 1em; /* Tamanho de fonte maior para melhor legibilidade */
    text-transform: uppercase; /* Letras maiúsculas para um visual mais profissional */
}

nav a:hover {
    color: #ff6600; /* Cor laranja vibrante para o hover */
}
.logo {
    font-size: 2em;
    font-weight: bold;
    margin-bottom: 0;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    text-align: center;
}

nav li {
    display: inline-block;
    margin: 0 10px;
}

nav a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    transition: color 0.3s;
}

nav a:hover {
    color: #ff6600; /* Cor laranja vibrante para o hover */
}

#banner {
    background-color: #181818; /* Fundo escuro */
    color: #fff;
    padding: 50px 0; /* Reduzi o padding */
    text-align: center;
    position: relative;
    overflow: hidden;
}

#banner .banner-content {
    position: relative;
    z-index: 1;
}

#banner h2 {
    font-size: 3.5em; /* Aumentei o tamanho da fonte para um impacto maior */
    font-weight: 900; /* Aumentei o peso da fonte para uma aparência mais forte */
    margin-bottom: 30px; /* Aumentei o espaço entre o título e o texto */
    line-height: 1.2; /* Reduzi o espaçamento entre as linhas para um visual mais compacto */
    text-transform: uppercase; /* Letras maiúsculas para um visual mais profissional */
    letter-spacing: 2px; /* Espaçamento extra entre as letras para melhor legibilidade */
    
}

#banner p {
    font-size: 1.2em;
    line-height: 1.6;
}

#banner .banner-image {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

#banner .banner-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.4;
}

#produtos {
    padding: 50px 0;
}

#produtos .produtos-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
}

.produto {
    background-color: #282828; /* Fundo escuro para os produtos */
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Aumentada a sombra para um efeito mais profundo */
    padding: 20px;
    text-align: center;
}

.produto img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 15px;
}

.produto h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
    color: #ff6600; /* Título em laranja vibrante */
}

#contato {
    background-color: #181818; /* Fundo escuro */
    padding: 50px 0;
}

#contato h2 {
    text-align: center;
    margin-bottom: 30px; /* Aumentei o espaçamento para melhor visualização */
    color: #ff6600; /* Cor laranja vibrante para um toque de destaque */
    font-size: 2.5em; /* Aumentei o tamanho da fonte para um impacto maior */
    font-weight: 900; /* Aumentei o peso da fonte para um visual mais forte */
    text-transform: uppercase; /* Letras maiúsculas para um visual mais profissional */
    letter-spacing: 2px; /* Espaçamento entre as letras para melhor legibilidade */
}


#contato form {
    max-width: 600px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #ff6600; /* Rótulos em laranja vibrante */
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd; /* Borda cinza clara */
    border-radius: 5px;
    box-sizing: border-box;
}

.form-group textarea {
    height: 100px;
}

#contato button {
    background-color: #ff6600; /* Botão em laranja vibrante */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#contato button:hover {
    background-color: #ff4500; /* Cor mais escura no hover */
}

footer {
    background-color: #181818; /* Fundo escuro */
    color: #fff;
    padding: 10px 0; /* Reduzi o padding para um footer mais compacto */
    text-align: center;
}

footer p {
    margin: 0;
}

/* Responsividade */
@media (max-width: 768px) {
    #banner h2 {
        font-size: 2em;
    }

    #banner p {
        font-size: 1em;
    }

    #produtos .produtos-grid {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }

    #contato form {
        max-width: 90%;
    }
}
</style>
<body>
    <header>
        <div class="container">
            <h1>Sua Empresa de Tecnologia</h1>
            <nav>
                <ul>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="banner">
            <div class="container">
            <h2>
    Conectando você ao futuro 

</h2>
                <p>Soluções de tecnologia inovadoras para impulsionar seus negócios.</p>
            </div>
        </section>

        <section id="produtos">
            <div class="container">
                <h2>Nossos Produtos</h2>
                <div class="produtos-grid">
                    <div class="produto">
                        <img src="img/roteador.jpg" alt="Roteador">
                        <h3>Roteadores</h3>
                        <p>Conexões rápidas e estáveis para sua rede.</p>
                    </div>
                    <div class="produto">
                        <img src="img/cabos.jpg" alt="Cabos">
                        <h3>Cabos</h3>
                        <p>Diversos tipos de cabos para atender suas necessidades.</p>
                    </div>
                    <div class="produto">
                        <img src="img/switch.jpg" alt="Switch">
                        <h3>Switches</h3>
                        <p>Gerencie sua rede com eficiência e segurança.</p>
                    </div>
                    <div class="produto">
                        <img src="img/rack.jpg" alt="Rack">
                        <h3>Racks</h3>
                        <p>Organização e proteção para seus equipamentos.</p>
                    </div>
                    <div class="produto">
                        <img src="img/rj45.jpg" alt="RJ-45">
                        <h3>Conectores RJ-45</h3>
                        <p>Conectores de alta qualidade para suas conexões.</p>
                    </div>
                    <div class="produto">
                        <img src="img/rj11.jpg" alt="RJ-11">
                        <h3>Conectores RJ-11</h3>
                        <p>Conectores para telefonia e outros dispositivos.</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contato">
  <div class="container">
    <h2>Entre em Contato</h2>
    <p>Dúvidas, sugestões ou apenas um "oi"? Entre em contato conosco e vamos conversar!</p>

    <div class="contato-detalhes">
      <h3>Encontre-nos</h3>
      <ul>
        <li><i class="fas fa-map-marker-alt"></i> Endereço: Sua Rua, Número - Bairro, Cidade - SP</li>
        <li><i class="fas fa-phone"></i> Telefone: (11) 9999-9999</li>
        <li><i class="fas fa-envelope"></i> Email: contato@suaempresa.com.br</li>
        <li><i class="fas fa-clock"></i> Horário de Atendimento: Segunda à Sexta, das 9h às 18h</li>
      </ul>
    </div>

    <div class="contato-formulario">
      <h3>Fale Conosco</h3>
      <form action="#" method="post">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome" required>
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="assunto">Assunto:</label>
          <select id="assunto" name="assunto" required>
            <option value="">Selecione...</option>
            <option value="duvida">Dúvida</option>
            <option value="sugestao">Sugestão</option>
            <option value="orcamento">Orçamento</option>
            <option value="outro">Outro</option>
          </select>
        </div>

        <div class="form-group">
          <label for="mensagem">Mensagem:</label>
          <textarea id="mensagem" name="mensagem" required></textarea>
        </div>

        <button type="submit">Enviar Mensagem</button>
      </form>
    </div>
  </div>
</section>
</body>
</html>