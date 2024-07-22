-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jul-2024 às 20:34
-- Versão do servidor: 10.4.32-MariaDB
-- versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `Autor_ID` int(11) NOT NULL,
  `Primeiro_Nome` varchar(100) NOT NULL,
  `Ultimo_Nome` varchar(100) NOT NULL,
  `Data_Aniversario` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`Autor_ID`, `Primeiro_Nome`, `Ultimo_Nome`, `Data_Aniversario`) VALUES
(3, 'victor', 'paiva', '2024-07-17'),
(4, 'zefff', 'nunes', '2024-07-09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `emprestimo`
--

CREATE TABLE `emprestimo` (
  `Emprestimo_ID` int(11) NOT NULL,
  `Livro_ID` int(11) DEFAULT NULL,
  `Leitor_ID` int(11) DEFAULT NULL,
  `Data_Emp` date NOT NULL,
  `Data_Vencimento` date NOT NULL,
  `Data_Entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `emprestimo`
--

INSERT INTO `emprestimo` (`Emprestimo_ID`, `Livro_ID`, `Leitor_ID`, `Data_Emp`, `Data_Vencimento`, `Data_Entrega`) VALUES
(1, 3, 3, '2024-07-03', '2024-07-11', '2024-07-27'),
(2, 3, 3, '2024-07-03', '2024-07-11', '2024-07-25'),
(3, 3, 3, '2024-07-03', '2024-07-12', '2024-07-26'),
(4, 7, 4, '2024-07-04', '2024-07-26', '2024-07-25'),
(5, 4, 8, '2024-07-04', '2024-07-10', '2024-07-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `leitor`
--

CREATE TABLE `leitor` (
  `Leitor_ID` int(11) NOT NULL,
  `Primeiro_nome` varchar(100) NOT NULL,
  `Ultimo_nome` varchar(100) NOT NULL,
  `Data_Aniversario` date DEFAULT NULL,
  `Morada` varchar(255) DEFAULT NULL,
  `Telemovel` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `leitor`
--

INSERT INTO `leitor` (`Leitor_ID`, `Primeiro_nome`, `Ultimo_nome`, `Data_Aniversario`, `Morada`, `Telemovel`, `Email`) VALUES
(3, 'felipe', 'putz', '2024-07-02', 'sdsd', 'sdsd', 'sdsd'),
(4, 'testtttvdvdv', 'fdfdfd', '2024-07-03', 'rererer', '6576767', 'bbbbb'),
(8, 'teste', 'wwwe', '2024-07-02', 'aaaa', 'aaaa', 'aaaaa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `Livro_ID` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Genero` varchar(100) DEFAULT NULL,
  `Ano_Publicacao` int(11) DEFAULT NULL,
  `ISBN` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`Livro_ID`, `Titulo`, `Genero`, `Ano_Publicacao`, `ISBN`) VALUES
(2, 'teste', 'dd', 2021, '455'),
(3, 'teste2', 'novo', 1994, 'dsdd'),
(4, 'eef', 'efe', 444, '3r3r4'),
(7, 'fdfdf', 'dfdf', 3233, 'ffd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro_autor`
--

CREATE TABLE `livro_autor` (
  `Livro_ID` int(11) NOT NULL,
  `Autor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`Autor_ID`);

--
-- Índices para tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD PRIMARY KEY (`Emprestimo_ID`),
  ADD KEY `Livro_ID` (`Livro_ID`),
  ADD KEY `Leitor_ID` (`Leitor_ID`);

--
-- Índices para tabela `leitor`
--
ALTER TABLE `leitor`
  ADD PRIMARY KEY (`Leitor_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`Livro_ID`),
  ADD UNIQUE KEY `ISBN` (`ISBN`);

--
-- Índices para tabela `livro_autor`
--
ALTER TABLE `livro_autor`
  ADD PRIMARY KEY (`Livro_ID`,`Autor_ID`),
  ADD KEY `Autor_ID` (`Autor_ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `Autor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  MODIFY `Emprestimo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `leitor`
--
ALTER TABLE `leitor`
  MODIFY `Leitor_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `Livro_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `emprestimo`
--
ALTER TABLE `emprestimo`
  ADD CONSTRAINT `emprestimo_ibfk_1` FOREIGN KEY (`Livro_ID`) REFERENCES `livro` (`Livro_ID`),
  ADD CONSTRAINT `emprestimo_ibfk_2` FOREIGN KEY (`Leitor_ID`) REFERENCES `leitor` (`Leitor_ID`);

--
-- Limitadores para a tabela `livro_autor`
--
ALTER TABLE `livro_autor`
  ADD CONSTRAINT `livro_autor_ibfk_1` FOREIGN KEY (`Livro_ID`) REFERENCES `livro` (`Livro_ID`),
  ADD CONSTRAINT `livro_autor_ibfk_2` FOREIGN KEY (`Autor_ID`) REFERENCES `autor` (`Autor_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
