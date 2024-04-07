-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/04/2024 às 16:40
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetolivros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `generolivro`
--

CREATE TABLE `generolivro` (
  `id_genero` int(11) NOT NULL,
  `genero` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `generolivro`
--

INSERT INTO `generolivro` (`id_genero`, `genero`) VALUES
(1, 'Romance'),
(2, 'Ação'),
(3, 'Aventura'),
(4, 'Ficção'),
(5, 'Terror'),
(6, 'Drama'),
(7, 'Outros');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `nomeLivro` text DEFAULT NULL,
  `autor` text DEFAULT NULL,
  `sinopse` text DEFAULT NULL,
  `urlImg` text DEFAULT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `genero` varchar(60) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `nomeLivro`, `autor`, `sinopse`, `urlImg`, `estado`, `genero`, `id_usuario`) VALUES
(2, 'Milk and Honey', 'Rupi Kaur', 'O livro está dividido em quatro capítulos e cada capítulo tem um propósito diferente. Lida com uma dor diferente. Cura uma dor de cabeça diferente. Milk and Honey leva os leitores por uma jornada pelos momentos mais amargos da vida e encontra neles doçura, porque há doçura em todos os lugares, se você estiver disposto a olhar.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTC4Ie0oEzEJF8OoAxdWLM_GZ3ESFlf0KuZgpN0iui5ERZ4dBM7', 'Novo', 'Outros', NULL),
(3, 'Thinking, Fast and Slow', 'Daniel Kahneman', 'O best-seller do \"New York Times\", aclamado por autores como Steven D. Levitt, co-autor de Freakonomics, Nassim Nicholas Taleb, autor de Cisne Negro, e Richard Thaler, co-autor de Nudge, \"Thinking Fast and Slow\" oferece uma visão totalmente nova do caminho. nossas mentes funcionam e como tomamos decisões. Por que há mais chances de acreditarmos em algo se estiver em negrito? Por que é mais provável que os juízes neguem a liberdade condicional antes do almoço? Por que presumimos que uma pessoa bonita será mais competente? A resposta está nas duas maneiras pelas quais fazemos escolhas: pensamento rápido e intuitivo e pensamento lento e racional. Este livro revela como nossas mentes são enganadas por erros e preconceitos (mesmo quando pensamos que estamos sendo lógicos) e oferece técnicas práticas para um pensamento mais lento e inteligente. Isso permitirá que você tome melhores decisões no trabalho, em casa e em tudo o que fizer.', 'https://static01.nyt.com/images/2021/02/23/sports/23mlb-book-1/merlin_183954006_5524c977-4aea-4bb2-a26a-a8b86909b366-mediumSquareAt3X.jpg', 'Usado', 'Outros', NULL),
(10, 'O Ladrão de Raios - Percy Jackson e os Olimpianos', 'Rick Riordan', 'Primeiro volume da saga Percy Jackson e os olimpianos, O ladrão de raios esteve entre os primeiros lugares na lista das séries mais vendidas do The New York Times.\r\n\r\nO autor conjuga lendas da mitologia grega com aventuras no século XXI. Nelas, os deuses do Olimpo continuam vivos, ainda se apaixonam por mortais e geram filhos metade deuses, metade humanos, como os heróis da Grécia antiga. Marcados pelo destino, eles dificilmente passam da adolescência. Poucos conseguem descobrir sua identidade.\r\n\r\nO garoto-problema Percy Jackson é um deles. Tem experiências estranhas em que deuses e monstros mitológicos parecem saltar das páginas dos livros direto para a sua vida. Pior que isso: algumas dessas criaturas estão bastante irritadas. Um artefato precioso foi roubado do Monte Olimpo e Percy é o principal suspeito. Para restaurar a paz, ele e seus amigos – jovens heróis modernos – terão de fazer mais do que capturar o verdadeiro ladrão: precisam elucidar uma traição mais ameaçadora que fúria dos deuses.', 'https://img.olx.com.br/images/50/506487377621486.jpg', 'Novo', 'Aventura', 1),
(11, 'Harry Potter e a Pedra Filosofal', 'J. K. Rowling', 'Harry Potter é um garoto órfão que vive infeliz com seus tios, os Dursleys. Ele recebe uma carta contendo um convite para ingressar em Hogwarts, uma famosa escola especializada em formar jovens bruxos. Inicialmente, Harry é impedido de ler a carta por seu tio, mas logo recebe a visita de Hagrid, o guarda-caça de Hogwarts, que chega para levá-lo até a escola. Harry adentra um mundo mágico que jamais imaginara, vivendo diversas aventuras com seus novos amigos, Rony Weasley e Hermione Granger.', 'https://www.capitaoonigiri.com.br/wp-content/uploads/2023/06/Harry-Potter-pedra-filosofal-capa-dura-1-scaled.jpg', 'Usado', 'Ficcao', 1),
(12, 'Stalking Jack the Ripper', 'Kerri Maniscalco', 'Audrey Rose não é a típica donzela inglesa do século xix. Quando ninguém está vendo, a jovem realiza autópsias no laboratório de seu tio, contrariando a vontade de seu pai e todas as expectativas da sociedade. Ela pode não saber fazer um penteado elaborado, mas faz uma incisão em Y num cadáver como ninguém. Seus estudos em medicina forense a levam na trilha do misterioso Jack, cujos assassinatos brutais derivados de uma terrível sede de sangue amedrontam a cidade. E Audrey Rose, empoderada desde o berço, quer fazer justiça às vítimas - ​​mulheres sem voz e marginalizadas por uma sociedade extremamente sexista. Na companhia de Thomas Cresswell, o aprendiz convencido e irritante de seu tio, ela decide seguir seus instintos e os rastros de sangue do notório assassino. Afinal, nenhum homem foi capaz de descobrir sua identidade. Esse é um trabalho para uma mulher.', 'https://isleofbooks.files.wordpress.com/2019/10/stalking-jack-the-ripper-kerri-maniscalco-isle-of-books.jpg', 'Novo', 'Terror', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `senha` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Flavia', 'user@teste.com.br', '$2y$10$74VLL.Jrmu2Ld5BnQZP0oewWZv/pCLLRnipk4eA7Zw0iOVhXN4J3m'),
(7, 'Teste', 'teste@teste.com', '$2y$10$qe285Dpzw.wCVR3HNRLWOuHkPm30CJHM7os9797GJV5pDksEKzHMq');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `generolivro`
--
ALTER TABLE `generolivro`
  ADD PRIMARY KEY (`id_genero`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `generolivro`
--
ALTER TABLE `generolivro`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `livros`
--
ALTER TABLE `livros`
  ADD CONSTRAINT `livros_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
