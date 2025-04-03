insert into categorias (nome) values 
    ('Eletrônicos'), ('Eletrodomésticos'), ('Roupas e Acessórios'), ('Beleza e Cuidados Pessoais'), ('Alimentos e Bebidas'),
    ('Casa e Decoração'), ('Esportes e Lazer'), ('Automotivo'), ('Brinquedos e Jogos'), ('Papelaria e Escritório'), ('Livros e Mídia'),
    ('Música e Instrumentos Musicais'), ('Pet Shop'), ('Ferramentas e Construção'), ('Relógios e Óculos'),
    ('Energia Solar e Sustentabilidade'), ('Segurança e Monitoramento'), ('Viagem e Turismo'),('Serviços Digitais');
    
insert into produtos (nome, descricao, categoria, img, preco) values
    ('iPhone 15','Smartphone com tela OLED de 6,1 polegadas e chip A17.', 1, 'assets/images/iphone15.webp', 5999.00),
    ('Geladeira Samsung 520L', 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.', 2, 'assets/images/gelsamsung.avif', 3499.00),
    ('Tênis Nike Air Max', 'Tênis de corrida com amortecimento Air Max e design moderno.', 3, 'assets/images/tenisnike.webp', 499.90),
    ('Base Líquida L’Oréal', 'Base líquida de alta cobertura com efeito matte e longa duração.', 4, 'assets/images/loreal.jpg', 89.90),
    ('Multivitamínico One a Day','Suplemento diário para melhorar a saúde geral e aumentar a imunidade.', 4,  'assets/images/oneaday.avif', 69.90),
    ('Cerveja Artesanal IPA',  'Cerveja artesanal com sabor intenso e amargor característico.', 5, 'assets/images/ipa.webp', 19.90),
    ('Sofá Retrátil 3 Lugares', 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.', 6, 'assets/images/sofa.jpg', 1599.00),
    ('Bicicleta MTB Aro 29',  'Bicicleta de mountain bike com suspensão dianteira e aro 29.', 7, 'assets/images/bicicleta.webp', 1899.00),
    ('Kit de Faróis LED para Carro', 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', 8, 'assets/images/farol.jpg', 299.00),
    ('Jogo de Tabuleiro Catan', 'Jogo de estratégia onde os jogadores constroem e negociam recursos.', 9, 'assets/images/catan.webp', 249.90),
    ('Caderno Universitário 10 Matérias',  'Caderno espiral com 10 matérias e capa personalizada.', 10, 'assets/images/caderno.png', 19.90),
    ('O Senhor dos Anéis - Edição Especial',  'Edição luxuosa com capa dura e ilustrações exclusivas do clássico de J.R.R. Tolkien.', 11, 'assets/images/senhor.jpg', 149.90),
    ('Violão Yamaha F310', 'Violão acústico de excelente qualidade, ideal para iniciantes.', 12, 'assets/images/violao.webp', 799.90),
    ('Ração Pedigree Sabor Frango',  'Ração seca para cães, sabor frango e com nutrientes balanceados.', 13, 'assets/images/pedigree.jpg', 59.90),
    ('Furadeira Bosch 600W', 'Furadeira elétrica com 600W de potência e velocidade variável.', 14, 'assets/images/furadeira.webp', 299.90),
    ('Relógio Casio G-Shock',  'Relógio digital e resistente a impactos, ideal para aventuras.', 15, 'assets/images/casio.webp', 399.90),
    ('Kit Solar 200W',  'Painel solar de 200W com inversor e bateria para armazenamento.', 16,  'assets/images/solar.webp', 2599.00),
    ( 'Câmera de Segurança Arlo Pro 4', 'Câmera de segurança sem fio com alta definição e visão noturna.', 17, 'assets/images/arlo.webp', 1299.00),
    ('Mala de Viagem Samsonite', 'Mala resistente e leve, com compartimentos para organização.', 18, 'assets/images/mala.webp', 899.00),
    ('Curso de Marketing Digital', 'Curso online de marketing digital com módulos sobre SEO, Ads e redes sociais.', 19, 'assets/images/curso.webp', 499.90);


insert into usuarios (nome, email, telefone, data_nascimento, cpf, genero, foto_perfil) values
    ('João Silva', 'joao.silva@email.com','11999990001', '1990-01-15', '12345678901', 'Masculino', 'joao.jpg'),
    ('Maria Oliveira','maria.oliveira@email.com', '11999990002', '1985-02-20', '12345678902', 'Feminino', 'maria.jpg'),
    ('Carlos Souza','carlos.souza@email.com', '11999990003', '1992-03-25', '12345678903', 'Masculino', 'carlos.jpg'),
    ('Ana Lima','ana.lima@email.com', '11999990004', '1995-04-10', '12345678904', 'Feminino', 'ana.jpg'),
    ('Pedro Santos','pedro.santos@email.com', '11999990005', '1988-05-30', '12345678905', 'Masculino', 'pedro.jpg'),
    ('Juliana Costa','juliana.costa@email.com', '11999990006', '1991-06-12', '12345678906', 'Feminino', 'juliana.jpg'),
    ('Lucas Almeida','lucas.almeida@email.com', '11999990007', '1994-07-05', '12345678907', 'Masculino', 'lucas.jpg'),
    ('Fernanda Rocha','fernanda.rocha@email.com', '11999990008', '1990-08-21', '12345678908', 'Feminino', 'fernanda.jpg'),
    ('Ricardo Mendes','ricardo.mendes@email.com', '11999990009', '1987-09-09', '12345678909', 'Masculino', 'ricardo.jpg'),
    ('Camila Nogueira','camila.nogueira@email.com', '11999990010', '1993-10-14', '12345678910', 'Feminino', 'camila.jpg'),
    ('Eduardo Ramos','eduardo.ramos@email.com', '11999990011', '1989-11-17', '12345678911', 'Masculino', 'eduardo.jpg'),
    ('Bianca Ferreira','bianca.ferreira@email.com', '11999990012', '1996-12-22', '12345678912', 'Feminino', 'bianca.jpg'),
    ('Gustavo Teixeira','gustavo.teixeira@email.com', '11999990013', '1986-01-08', '12345678913', 'Masculino', 'gustavo.jpg'),
    ('Larissa Carvalho','larissa.carvalho@email.com', '11999990014', '1997-02-26', '12345678914', 'Feminino', 'larissa.jpg'),
    ('Marcos Antunes','marcos.antunes@email.com', '11999990015', '1984-03-18', '12345678915', 'Masculino', 'marcos.jpg');

  