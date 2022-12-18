-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2022 às 18:29
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_trabalho`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL,
  `Nome` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`idAutor`, `Nome`) VALUES
(1, 'Abdi Nazemian'),
(2, 'Abigail Dean'),
(3, 'Agustina Bazterrica'),
(4, 'Alexandria Bellefleur'),
(5, 'Alice Oseman'),
(6, 'Alison Cochrun'),
(7, 'Allison Pataki'),
(8, 'Ana C. Alves'),
(9, 'André Aciman'),
(10, 'Anne Frank'),
(11, 'António Barreto'),
(12, 'Arquelana'),
(13, 'Ashley Herring Blake'),
(14, 'Bolu Babalola'),
(15, 'Brian Zepka'),
(16, 'Caíto Mainier'),
(17, 'Caleb Carr'),
(18, 'Casey McQuiston'),
(19, 'Clara Alves'),
(20, 'Clare Lydon'),
(21, 'Colleen Hoover'),
(22, 'Daniel Takata Gomes'),
(23, 'David Graeber'),
(24, 'Dhonielle Clayton'),
(25, 'Diogo Lara'),
(26, 'DjiEm'),
(27, 'Doug Magee'),
(28, 'Doug Stanton'),
(29, 'Elayne Baeta'),
(30, 'Elena Armas'),
(31, 'Emily Henry'),
(32, 'Estelle Laure'),
(33, 'Evandson Sousa'),
(34, 'Fabrício de Andrade Felício'),
(35, 'Frederico Elboni'),
(36, 'Gabriel Nascimento'),
(37, 'Gary Chapman'),
(38, 'Isaac Rosa'),
(39, 'Isabel Meziat'),
(40, 'Izabela Wagner'),
(41, 'James Joyce'),
(42, 'Jb Campos'),
(43, 'Jennifer Egan'),
(44, 'Jessica Batista'),
(45, 'Jessica Goodman'),
(46, 'João Victor Pires'),
(47, 'José Saramago'),
(48, 'Juan Villoro'),
(49, 'Juliana Dantas'),
(50, 'Kacen Callender'),
(51, 'Kelly Quindlen'),
(52, 'Laura Schroff'),
(53, 'Laurent Binet'),
(54, 'Leah Johnson'),
(55, 'Leonid Andreiev'),
(56, 'Lília Uzêda'),
(57, 'Lilian Jackson Braun'),
(58, 'Lima Barreto'),
(59, 'Lloyd Jones'),
(60, 'Lois McMaster Bujold'),
(61, 'Lolita Pille'),
(62, 'Louis Begley'),
(63, 'Lúcia Machado de Almeida'),
(64, 'Lynn Sholes'),
(65, 'Margaret George'),
(66, 'Maria Dezonne Pacheco Fernandes'),
(67, 'Maria Freitas'),
(68, 'Martin E. P. Seligman'),
(69, 'Mia Sheridan'),
(70, 'Michael Arruda'),
(71, 'Monja Coen'),
(72, 'Natasha Bowen'),
(73, 'Nathalie Somers'),
(74, 'Nina Melga'),
(75, 'Norberto Bobbio'),
(76, 'Patrick Modiano'),
(77, 'Pedro Rhuas'),
(78, 'Rachel Vincent'),
(79, 'Raíssa Selvaticci'),
(80, 'Ray Tavares'),
(81, 'Ricardo Molina'),
(82, 'Robbie Couch'),
(83, 'Robert Gerwarth'),
(84, 'Robert Greene'),
(85, 'Rosemary Sullivan'),
(86, 'Sam Eastland'),
(87, 'Scott McEwen'),
(88, 'Sergio Capparelli'),
(89, 'Sophie Gonzales'),
(90, 'Startup da Real'),
(91, 'Stephen King'),
(92, 'Taylor Jenkins Reid'),
(93, 'Thomas Sowell'),
(94, 'Trajano Vieira'),
(95, 'Vera Lúcia Marinzeck de Carvalho'),
(96, 'Victoria Mendes'),
(97, 'Vitor Martins'),
(98, 'Vladimir Ilitch Lênin'),
(99, 'José Falero'),
(100, 'Itamar Vieira Junior'),
(101, 'Jorge Amado'),
(102, 'Stênio Gardel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Titulo` varchar(200) NOT NULL,
  `Genero` varchar(100) NOT NULL,
  `Ano` int(4) NOT NULL,
  `idLivro` int(11) NOT NULL,
  `idAutor` int(11) NOT NULL,
  `Pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Titulo`, `Genero`, `Ano`, `idLivro`, `idAutor`, `Pdf`) VALUES
('A Auto-Estradas', 'Thriller', 1981, 198, 91, 'livros/6399c755928fc.pdf'),
('A Casa De Doces', 'Sci-Fi', 2022, 199, 43, 'livros/6399c880d5091.pdf'),
('A Caverna', 'Novel', 2000, 200, 47, 'livros/6399c9807f7a9.pdf'),
('A Dança da Morte', 'Horror', 1978, 201, 91, 'livros/6399c9fcf3f1a.PDF'),
('A Conspiração do Graal', 'Novel', 2005, 202, 64, 'livros/6399ca006fd8a.PDF'),
('A Garota Que Adorava Tom Gordon', 'Novel', 1999, 203, 91, 'livros/6399ca7d64214.PDF'),
('A Hora do Lobisomem', 'Horror', 1983, 204, 91, 'livros/6399ca8031023.pdf'),
('A Incendiária', 'Horror', 1980, 205, 91, 'livros/6399cb08e3fe8.pdf'),
('A Jogada do Amor', 'Romantic comedy', 2022, 206, 51, 'livros/6399cb0ad4e88.pdf'),
('A Maldição', 'Horror', 1984, 207, 91, 'livros/6399cb6f6257a.PDF'),
('A Longa Marcha', 'Novel', 1979, 208, 91, 'livros/6399cb712dca0.PDF'),
('A Maldição do Cigano', 'Fiction', 1984, 209, 91, 'livros/6399cbff79152.pdf'),
('A Mansão da Pedra Torta', 'Novel', 2015, 210, 95, 'livros/6399cc015ba57.pdf'),
('A Metade Negra', 'Horror', 1989, 211, 91, 'livros/6399ccd2cc0d5.pdf'),
('A Mesa dos Jogadores ', 'Thriller', 2022, 212, 45, 'livros/6399ccd49713f.pdf'),
('A Metade Sombria', 'Horror', 1989, 213, 91, 'livros/6399ce9734e20.pdf'),
('A Pequena Caixa de Gwendy', 'Horror', 2017, 214, 91, 'livros/6399ce9997f04.pdf'),
('A Planta', 'Horror', 1982, 215, 91, 'livros/6399cee741abb.pdf'),
('Achados e Perdidos', 'Thriller', 2016, 216, 91, 'livros/6399cee9160d6.pdf'),
('Angústia', 'Horror', 1987, 217, 91, 'livros/6399d629d96aa.pdf'),
('Antes que você diga sim', 'LGBTQIA+ Fiction', 2021, 218, 20, 'livros/6399d62b96266.pdf'),
('Ao Cair da Noite', 'Thriller', 2008, 219, 91, 'livros/6399d650a078b.PDF'),
('Os Supridores', 'Detective Fiction', 2020, 221, 99, 'livros/6399db5040ab0.pdf'),
('A Palavra Que Resta', 'LGBTQIA+ Fiction', 2021, 222, 102, 'livros/6399dcb3cdf1c.pdf'),
('Capitães da Areia', 'Novel', 1937, 223, 101, 'livros/6399dd2a6ac4d.pdf'),
('Torto Arado', 'Fiction', 2019, 224, 100, 'livros/6399e05e2a023.pdf'),
('Aprenda a Ser Otimista', 'Selfhelp', 2019, 225, 68, 'livros/6399e11972799.pdf'),
('Aprenda a Viver o Agora', 'Selfhelp', 2019, 226, 71, 'livros/6399e11b1aba8.pdf'),
('Ascensão', 'Thriller', 2018, 227, 91, 'livros/6399e1696226a.pdf'),
('As Cinco Linguagens do Amor', 'Psychology', 1992, 228, 37, 'livros/6399e16d801ab.pdf'),
('Belas adormecidas', 'Fantastic literature', 2017, 229, 91, 'livros/6399e1c815d42.pdf'),
('Billy Summers', 'Detective Fiction', 2021, 230, 91, 'livros/6399e1ca2295b.pdf'),
('Blaze', 'Detective Fiction', 2007, 231, 91, 'livros/6399e353c013b.PDF'),
('Buick 8', 'Novel', 2002, 232, 91, 'livros/6399e35b981aa.pdf'),
('Cão Raivoso', 'Psychological terror', 1981, 233, 91, 'livros/6399e363efc18.pdf'),
('Zona Morta', 'Horror', 1979, 247, 91, 'livros/639f03e0eed59.pdf'),
('Xisto No Espaço', 'Sci-Fi', 2000, 249, 63, 'livros/639f10ea7c270.pdf'),
('Carrie, a estranha', 'Horror', 1974, 250, 91, 'livros/639f4436da223.pdf'),
('Celular', 'Supernatural Fiction', 2014, 251, 1, 'livros/639f44b7096e2.pdf'),
('Christine', 'Thriller', 1983, 252, 91, 'livros/639f44d642996.pdf'),
('Com Sangue', 'Horror', 2020, 253, 91, 'livros/639f452255b8a.pdf'),
('Conectadas ', 'LGBTQIA+ Fiction', 2019, 254, 19, 'livros/639f4591cd3f9.pdf'),
('Corações na Atlântida', 'Drama', 1999, 255, 91, 'livros/639f45934509c.pdf'),
('Dança Macabra', 'Fantastic literature', 1981, 256, 91, 'livros/639f4594d6cff.pdf'),
('De Férias Com Você', 'Novel', 2022, 257, 31, 'livros/639f45ba2181a.pdf'),
('Desbloqueie o Poder da Sua Mente', 'Selfhelp', 2018, 258, 70, 'livros/639f467da054f.pdf'),
('Depois da Meia-Noite', 'Supernatural Fiction', 1980, 259, 91, 'livros/639f468366025.pdf'),
('Depois', 'Thriller', 2021, 260, 91, 'livros/639f4689a7f60.pdf'),
('Desespero', 'Horror', 1996, 261, 91, 'livros/639f46eb6dd87.PDF'),
('Dezesseis', 'Sci-Fi', 2018, 262, 78, 'livros/639f47254117f.pdf'),
('Dora Bruder ', 'Biography', 1997, 263, 76, 'livros/639f4737836e4.pdf'),
('É Assim que Começa', 'Fiction', 2022, 264, 21, 'livros/639f47a7a40f3.pdf'),
('Duma Key', 'Novel', 2008, 265, 91, 'livros/639f47a955b6b.pdf'),
('Elizabeth I: o Anoitecer de um Reinado', 'Novel', 2012, 266, 65, 'livros/639f47ac20934.pdf'),
('Enquanto Eu Não Te Encontro', 'LGBTQIA+ Fiction', 2021, 267, 77, 'livros/639f486219b64.pdf'),
('Ensaio Sobre a Lucidez', 'Fiction', 2004, 268, 47, 'livros/639f48668f734.pdf'),
('Escrito em Algum Lugar', 'LGBTQIA+ Fiction', 2022, 269, 97, 'livros/639f486b15716.pdf'),
('Eu Beijei Shara Wheeler', 'LGBTQIA+ Fiction', 2022, 270, 18, 'livros/639f48dd1f622.pdf'),
('Etereos – o Despertar', 'Novel', 2014, 271, 56, 'livros/639f48dee27a1.pdf'),
('Escuridão Total Sem Estrelas', 'Horror', 2010, 272, 91, 'livros/639f48e0978ca.PDF'),
('O Diário de Anne Frank', 'Biography', 1947, 273, 10, 'livros/639f494d569d7.pdf'),
('O Alienista', 'Mistery', 1994, 274, 17, 'livros/639f4983172ee.pdf'),
('It – A Coisa', 'Horror', 1986, 275, 91, 'livros/639f49b1919a5.pdf'),
('Insônia', 'Fantastic literature', 1994, 276, 91, 'livros/639f4a0e61264.pdf'),
('Hhhh ', 'Fiction', 2010, 277, 53, 'livros/639f4a3cdf65f.PDF'),
('Felix Para Sempre', 'LGBTQIA+ Fiction', 2021, 278, 1, 'livros/639f4ab1e960b.pdf'),
('Franz Kafka: o Mundo Prodigioso que Tenho Na Cabeça', 'Biography', 2008, 279, 1, 'livros/639f4ab3f2ed8.pdf'),
('Garota A ', 'Thriller', 2021, 280, 1, 'livros/639f4ab690934.pdf'),
('No Silêncio do Mar', 'Drama', 2019, 281, 49, 'livros/639f4af411e71.pdf'),
('Quem Traiu Anne Frank?', 'History', 2022, 282, 85, 'livros/639f4b5ea2a4a.pdf'),
('Os Sete Maridos de Evelyn Hugo', 'LGBTQIA+ Fiction', 2017, 283, 92, 'livros/639f4b99008c2.pdf'),
('Os Sete Enforcados', 'Psychological terror', 1908, 284, 55, 'livros/639f4bdddd4c0.PDF'),
('Racismo Linguístico', 'Social Science', 2019, 285, 36, 'livros/639f4c7216005.pdf'),
('Nunca Diga Adeus ', 'Thriller', 2011, 286, 27, 'livros/639f4cbc047cd.PDF'),
('O Amor Não é Óbvio', 'LGBTQIA+ Fiction', 2019, 287, 29, 'livros/639f4ce90c803.pdf'),
('O Carrasco de Hitler', 'Biography', 2015, 288, 83, 'livros/639f4d2e31884.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Senha` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Email`, `Senha`, `admin`) VALUES
(1, 'admin@gmail.com', '555', 1),
(3, 'a@b.com', '123', 0),
(5, 'testando@gmail.com', '1234', 0),
(6, 'reidadiamba420@gmail.com', 'mine1234', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`idLivro`),
  ADD KEY `idautor` (`idAutor`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `livro`
--
ALTER TABLE `livro`
  ADD CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
