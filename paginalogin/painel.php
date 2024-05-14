<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua Empresa de Tecnologia</title>
    <link rel="stylesheet" href="style.css">
</head>
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
                <h2>Conectando você ao futuro</h2>
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
                <p>Entre em contato conosco para saber mais sobre nossos produtos e serviços.</p>
                <form action="#" method="post">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>

                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>© 2023 Sua Empresa de Tecnologia. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>