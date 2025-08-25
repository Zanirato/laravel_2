<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NA REDE - Peixaria</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-dark: #306EBF;
            --primary: #347EBF;
            --secondary-light: #91B7D9;
            --accent-blue: #82D0D9;
            --accent-green: #B6BF6F;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f8f9fa;
            color: #333;
            background-color: #306EBF;
            line-height: 1.6;
            padding-top: 20px;
        }
        
        .header {
            background: linear-gradient(135deg, #447CC5, var(--primary));
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .logo{
            height: 70px;
        }
        .navbar-brand {
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }
        
        .logo-text {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
        }
        
        .logo-subtitle {
            font-size: 0.8rem;
            font-weight: 400;
            color: var(--accent-blue);
        }
        
        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            transition: all 0.3s;
        }
        
        .nav-link:hover,
        .nav-link.active {
            color: white !important;
            transform: translateY(-2px);
        }
        
        .btn-whatsapp {
            background-color: var(--accent-green);
            color: white;
            border: none;
            font-weight: 600;
            padding: 0.5rem 1.2rem;
            border-radius: 50px;
            transition: all 0.3s;
            white-space: nowrap;
        }
        
        .btn-whatsapp:hover {
            background-color: #9dab5a;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            color: white;
        }
        
        @media (max-width: 991px) {
            .navbar-collapse {
                background: linear-gradient(135deg, var(--primary-dark), var(--primary));
                padding: 1rem;
                border-radius: 0 0 10px 10px;
            }
            
            .header-cta {
                margin-top: 1rem;
                text-align: center;
            }
        }

        .sobre-nos {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://i.pinimg.com/originals/e9/04/15/e904152f727d70e777066bd122c7f2dd.gif');
            background-position: center; 
            background-size: cover;  
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .sobre-nos h2 {
            font-weight: 700;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }
        
        .sobre-nos p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1rem;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            background: white;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        
        .card-img-container {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
        }
        
        .card-img-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-dark);
            font-weight: bold;
            text-align: center;
            padding: 10px;
        }
        
        .card-title {
            color: var(--primary-dark);
            font-weight: 600;
        }
        
        .card-footer {
            background-color: var(--accent-blue);
            color: white;
            font-weight: 600;
            border-top: none;
        }
        
        section h3 {
            color: #f0f0f0;
            margin-bottom: 20px;
            font-weight: 600;

            padding-bottom: 10px;
            display: inline-block;
        }

        img{
            max-width: 100%;
            height: auto;
        }
        
        .form-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .form-control, input[type="text"], input[type="email"], input[type="tel"] {
            border: 1px solid var(--secondary-light);
            border-radius: 5px;
            padding: 10px 15px;
            margin-bottom: 15px;
            width: 100%;
            transition: border 0.3s;
        }
        
        .form-control:focus, input[type="text"]:focus, input[type="email"]:focus, input[type="tel"]:focus {
            border-color: var(--accent-green);
            outline: none;
            box-shadow: 0 0 0 3px rgba(182, 191, 111, 0.2);
        }
        
        label {
            font-weight: 500;
            color: var(--primary);
            margin-bottom: 5px;
            display: block;
        }
        
        .btn-primary {
            background-color: #306EBF;
            color: #c2d9edff;
            border: none;
            border-radius: 25px;
            padding: 10px 25px;
            font-weight: 600;
            transition: background-color 0.3s;
        }
        
        .btn-primary:hover {
            background-color: #c2d9edff;
            color: #306EBF;
        }
        
        .footer {
            background: linear-gradient(135deg, #447CC5, #347EBF);
            color: white;
            padding: 30px 0;
            text-align: center;
            margin-top: 50px;
            border-radius: 10px;
        }
        
        .footer small {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        .container {
            max-width: 1200px;
        }
        
        @media (max-width: 768px) {
            .sobre-nos {
                padding: 30px 15px;
            }
            
            .sobre-nos p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-0 mb-2">
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <img src="{{ asset('peixe.png') }}" alt="Logo NA REDE" class="logo mb-1">
                    <a class="navbar-brand" href="#">
                        <span class="logo-text">NA PESCA</span>
                        <span class="logo-subtitle">Peixaria & Frutos do Mar</span>
                    </a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sobre">Sobre Nós</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#produtos">Produtos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contatos">Contato</a>
                            </li>
                        </ul>
                        
                        <div class="header-cta ms-lg-3">
                            <a href="https://wa.me/5511999999999" target="_blank" class="btn btn-whatsapp">
                                <i class="bi bi-whatsapp me-2"></i>Peça pelo WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- SOBRE NÓS -->
        <section id="sobre" class="sobre-nos" id="sobre">
            <h2>Sobre Nós</h2>
            <p>Nossa história começa com um simples desejo: levar o frescor do mar à mesa de cada família. Fundada por amantes da pesca que sonhavam em compartilhar esse sabor autêntico, nossa peixaria nasceu da paixão pelo oceano e pelo cuidado com cada detalhe.

Desde os primeiros dias, nosso foco foi a qualidade inegociável: peixes cuidadosamente selecionados, frutos do mar fresquinhos e atendimento acolhedor, como aquele de quem entrega o peixe à família. Essa dedicação virou tradição e, hoje, nossa clientela satisfeita é nossa maior recompensa.

Valorizamos tanto os produtores quanto você. Por trás de cada peixe, há pescadores e fornecedores locais que garantem a origem consciente e a preservação dos hábitos sustentáveis. Assim, além de saborear um produto excepcional, você nos ajuda a cuidar do oceano.

Mais do que uma peixaria, somos um elo entre o mar e sua mesa – confiável, transparente e apaixonada pelo que faz. Aqui, cada compra é um pequeno ato de conexão com algo maior: o ritmo da natureza, o trabalho de quem pesca e o prazer de uma refeição feita com carinho.</p>
        </section>

        <!-- CARDS DE PEIXE -->
        <div id="produtos" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-container">
                        <div class="card-img-placeholder">
                            <img src="{{ asset('salmao_1.jpg') }}" alt="salmao">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Salmão Fresco</h5>
                        <p class="card-text">Salmão do Atlântico, pescado de forma sustentável, perfeito para grelhar ou assar.</p>
                    </div>
                    <div class="card-footer">
                        <span class="fw-bold">R$ 45,90/kg</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-container">
                        <div class="card-img-placeholder">
                            <img src="{{ asset('atum.jpg') }}" alt="Atum">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Atum Premium</h5>
                        <p class="card-text">Atum de alto mar, ideal para sashimi ou grelhado rapidamente.</p>
                    </div>
                    <div class="card-footer">
                        <span class="fw-bold">R$ 59,90/kg</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-img-container">
                        <div class="card-img-placeholder">
                            <img src="{{ asset('camarao.jpg') }}" alt="Camarão Rosa">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Camarão Rosa</h5>
                        <p class="card-text">Camarão fresco, descascado e limpo, pronto para preparar.</p>
                    </div>
                    <div class="card-footer">
                        <span class="fw-bold">R$ 72,90/kg</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- FORMULÁRIO DE CONTATO/COMPRA -->
        <section id="contato" class="mb-5">
            <h3>Entre em Contato</h3>
            <form class="form-card" action="#" method="POST">
                <div class="mb-3">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" id="name" placeholder="Digite seu nome" required>
                </div>
                
                <div class="mb-3">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Digite seu email" required>
                </div>
                
                <div class="mb-3">
                    <label for="phone">Telefone:</label>
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="Digite seu telefone" required>
                </div>
                
                <div class="mb-3">
                    <label for="address">Endereço:</label>
                    <input type="text" id="address" name="address" placeholder="Digite seu endereço" required>
                </div>
                
                <div class="mb-3">
                    <label for="message">Mensagem:</label>
                    <textarea class="form-control" id="message" name="message" rows="3" placeholder="Digite sua mensagem ou pedido especial"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </section>
    </div>

    <!-- FOOTER -->
    <footer class="footer" id="contatos">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Horário de Funcionamento</h5>
                    <p>Seg-Sex: 8h-19h<br>Sáb: 8h-14h</p>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                    <h5>Contato</h5>
                    <p>(11) 3368-6746<br>contato@naredepeixaria.com.br</p>
                </div>
                <div class="col-md-4">
                    <h5>Siga-nos</h5>
                    <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-white"><i class="bi bi-whatsapp"></i></a>
                </div>
            </div>
            <hr class="my-1" style="border-color: rgba(255,255,255,0.1);">
            <small>&copy; 2025 NA REDE Peixaria. Todos os direitos reservados.</small>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script simples para demonstrar o funcionamento do formulário
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Obrigado pelo seu contato! Em breve retornaremos.');
            this.reset();
        });
    </script>
</body>
</html>