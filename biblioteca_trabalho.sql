-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Dez-2022 às 14:13
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
('Xisto No Espaço', 'Sci-Fi', 2000, 249, 63, 'livros/639f10ea7c270.pdf');

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
  MODIFY `idLivro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

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
