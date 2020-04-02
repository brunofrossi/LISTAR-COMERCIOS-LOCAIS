-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 02/04/2020 às 20:58
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lista_tel`
--
CREATE DATABASE IF NOT EXISTS `lista_tel` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `lista_tel`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comercio`
--

CREATE TABLE `comercio` (
  `idcomercio` int(11) NOT NULL,
  `nome_fantasia` varchar(155) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `aprovado` tinyint(4) DEFAULT 0,
  `ranking` double DEFAULT 0,
  `segmento_idsegmento` int(11) NOT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `CEP` varchar(10) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `observacao` text NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `comercio`
--

INSERT INTO `comercio` (`idcomercio`, `nome_fantasia`, `telefone`, `instagram`, `facebook`, `aprovado`, `ranking`, `segmento_idsegmento`, `rua`, `numero`, `complemento`, `CEP`, `site`, `imagem`, `email`, `senha`, `bairro`) VALUES
(1, 'Instituto Federal de Educação, Ciência e Tecnologia do Sudeste de Minas Gerais - Campus Muriaé', '(32) 3696-2850', 'https://www.instagram.com/ifsudestemgmuriae/', 'https://www.facebook.com/ifsudestemgmuriaee', 1, 0, 13, 'Avenida Coronel Monteiro de Castro', '550', NULL, '36884-036', 'https://www.ifsudestemg.edu.br/muriae', 'logoif.png', '', '', ''),
(2, 'Teste', '(32) 98812-3625', 'http://www.instagram.com/diegorossi_0', 'http://www.facebook.com/diegorossi0', 1, 0, 1, 'Rua José Pinto de Souza', '55', '', '36881-056', 'http://www.diegorossi.com.br', '02042019524573001912_575973919815278_3200540973766944123_n.jpg', '', '', ''),
(3, 'Teste 2', '(32) 98812-3625', 'http://www.instagram.com/diegorossi_0', 'http://www.facebook.com/diegorossi0', 1, 0, 5, 'Rua José Pinto de Souza', '55', '', '36881-056', 'http://www.diegorossi.com.br', '020420201101832361.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionamento`
--

CREATE TABLE `funcionamento` (
  `idfuncionamento` int(11) NOT NULL,
  `idcomercio` int(11) NOT NULL,
  `dia_semana` int(11) NOT NULL,
  `abertura` varchar(10) NOT NULL,
  `fechamento` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela `segmento`
--

CREATE TABLE `segmento` (
  `idsegmento` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `segmento`
--

INSERT INTO `segmento` (`idsegmento`, `nome`) VALUES
(1, 'Alimentos e Bebidas'),
(2, 'Arte e Antiguidades'),
(3, 'Artigos Religiosos'),
(5, 'Automóveis e Veículos'),
(6, 'Bebês e Cia'),
(7, 'Brindes / Materiais Promocionais'),
(8, 'Brinquedos e Games'),
(9, 'Casa e Decoração'),
(10, 'Colecionáveis'),
(11, 'Construção e Ferramentas'),
(12, 'Cosméticos e Perfumaria'),
(13, 'Cursos e Educação'),
(14, 'Eletrodomésticos'),
(15, 'Eletrônicos'),
(16, 'Emissoras'),
(17, 'Empregos'),
(18, 'Empresas de Telemarketing'),
(19, 'Esporte e Lazer'),
(20, 'Flores, Cestas e Presentes'),
(21, 'Fotografia'),
(22, 'Igrejas / Templos / Instituições Religiosas'),
(23, 'Indústria, Comércio e Negócios'),
(24, 'Informática'),
(25, 'Instrumentos Musicais'),
(26, 'Joalheria'),
(27, 'Lazer'),
(28, 'Livros'),
(29, 'Moda e Acessórios'),
(30, 'Motéis'),
(31, 'Outros Serviços'),
(32, 'Papelaria e Escritório'),
(33, 'Pet Shop'),
(34, 'Saúde'),
(35, 'Serviço Advocatícios'),
(36, 'Serviços Administrativos'),
(37, 'Serviços Artísticos'),
(38, 'Serviços de Abatedouros / Matadouros'),
(39, 'Serviços de Aeroportos'),
(40, 'Serviços de Agências'),
(41, 'Serviços de Aluguel / Locação'),
(42, 'Serviços de Armazenagem'),
(43, 'Serviços de Assessorias'),
(44, 'Serviços de Assistência Técnica / Instalações '),
(45, 'Serviços de Associações'),
(46, 'Serviços de Bancos de Sangue'),
(47, 'Serviços de Bibliotecas'),
(48, 'Serviços de Cartórios'),
(49, 'Serviços de Casas Lotéricas'),
(50, 'Serviços de Confecções'),
(51, 'Serviços de Consórcios'),
(52, 'Serviços de Consultorias'),
(53, 'Serviços de Cooperativas'),
(54, 'Serviços de Despachante'),
(55, 'Serviços de Engenharia'),
(56, 'Serviços de Estacionamentos'),
(57, 'Serviços de joalheiros'),
(58, 'Serviços de limpeza'),
(59, 'Serviços de Loja de Conveniência'),
(60, 'Serviços de Mão de Obra'),
(61, 'Serviços de Órgão Públicos'),
(62, 'Serviços de Pesquisas'),
(63, 'Serviços de Saúde / Bem Estar'),
(64, 'Serviços de Seguradoras'),
(65, 'Serviços de Segurança'),
(66, 'Serviços de Sinalização'),
(67, 'Serviços de Traduções'),
(68, 'Serviços de Transporte'),
(69, 'Serviços de Utilidade Pública'),
(70, 'Serviços em Agricultura / Pecuária / Piscicultura'),
(71, 'Serviços em Alimentação'),
(72, 'Serviços em Arte'),
(73, 'Serviços em Cine / Foto / Som'),
(74, 'Serviços em Comunicação'),
(75, 'Serviços em Construção'),
(76, 'Serviços em Ecologia / Meio Ambiente'),
(77, 'Serviços em Eletroeletrônica / Metal Mecânica'),
(78, 'Serviços em Festas / Eventos'),
(79, 'Serviços em Informática'),
(80, 'Serviços em Internet'),
(81, 'Serviços em Jóias / Relógios / Óticas'),
(82, 'Serviços em Telefonia'),
(83, 'Serviços em Veículos'),
(84, 'Serviços Esotéricos / Místicos'),
(85, 'Serviços Financeiros'),
(86, 'Serviços Funerários'),
(87, 'Serviços Gerais'),
(88, 'Serviços Gráficos / Editoriais'),
(89, 'Serviços para Deficientes'),
(90, 'Serviços para Escritórios'),
(91, 'Serviços para Roupas'),
(92, 'Serviços Sociais / Assistenciais'),
(93, 'Sex Shop'),
(94, 'Shopping Centers'),
(95, 'Tabacaria'),
(96, 'Telefonia'),
(97, 'Turismo');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `comercio`
--
ALTER TABLE `comercio`
  ADD PRIMARY KEY (`idcomercio`),
  ADD KEY `fk_comercio_segmento` (`segmento_idsegmento`);

--
-- Índices de tabela `funcionamento`
--
ALTER TABLE `funcionamento`
  ADD PRIMARY KEY (`idfuncionamento`),
  ADD KEY `fkcomercio` (`idcomercio`);

--
-- Índices de tabela `segmento`
--
ALTER TABLE `segmento`
  ADD PRIMARY KEY (`idsegmento`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `comercio`
--
ALTER TABLE `comercio`
  MODIFY `idcomercio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `funcionamento`
--
ALTER TABLE `funcionamento`
  MODIFY `idfuncionamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `segmento`
--
ALTER TABLE `segmento`
  MODIFY `idsegmento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `comercio`
--
ALTER TABLE `comercio`
  ADD CONSTRAINT `fk_comercio_segmento` FOREIGN KEY (`segmento_idsegmento`) REFERENCES `segmento` (`idsegmento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `funcionamento`
--
ALTER TABLE `funcionamento`
  ADD CONSTRAINT `fkcomercio` FOREIGN KEY (`idcomercio`) REFERENCES `comercio` (`idcomercio`);


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata para tabela comercio
--

--
-- Metadata para tabela funcionamento
--

--
-- Metadata para tabela segmento
--

--
-- Metadata para o banco de dados lista_tel
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
