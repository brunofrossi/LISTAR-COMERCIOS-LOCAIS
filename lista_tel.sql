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
SET time_zone = "-03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Estrutura para tabela segmento
--

CREATE TABLE segmento (
  idsegmento int(11) PRIMARY KEY AUTO_INCREMENT,
  nome varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela segmento
--

INSERT INTO segmento (idsegmento, nome) VALUES
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


-- --------------------------------------------------------

--
-- Estrutura para tabela usuario
--

CREATE TABLE usuario (
idusuario int(11) PRIMARY KEY AUTO_INCREMENT,
email varchar(255) NOT NULL,
senha varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura para tabela comercio
--

CREATE TABLE comercio (
  idcomercio int(11) PRIMARY KEY AUTO_INCREMENT,
  nome_fantasia varchar(155) DEFAULT NULL,
  nome_responsavel varchar(155) DEFAULT NULL,
  telefone varchar(45) DEFAULT NULL,
  instagram varchar(255) DEFAULT NULL,
  facebook varchar(255) DEFAULT NULL,
  aprovado tinyint(4) DEFAULT 0,
  ranking double DEFAULT 0,
  rua varchar(100) DEFAULT NULL,
  numero varchar(30) DEFAULT NULL,
  complemento varchar(100) DEFAULT NULL,
  CEP varchar(10) DEFAULT NULL,
  site varchar(255) DEFAULT NULL,
  imagem varchar(255) NOT NULL,
  bairro varchar(100) NOT NULL,
  observacao text NOT NULL,
  usuario_idusuario int(11) NOT NULL,
  segmento_idsegmento int(11) NOT NULL,
  CONSTRAINT fk_comercio_segmento FOREIGN KEY (segmento_idsegmento) REFERENCES segmento (idsegmento) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT fk_comercio_usuario FOREIGN KEY (usuario_idusuario) REFERENCES usuario (idusuario) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela comercio
--
-- --------------------------------------------------------

--
-- Estrutura para tabela funcionamento
--

CREATE TABLE funcionamento (
  idfuncionamento int(11)PRIMARY KEY AUTO_INCREMENT,
  comercio_idcomercio int(11) NOT NULL,
  dia_semana int(11) NOT NULL,
  abertura varchar(10) NOT NULL,
  fechamento varchar(10) NOT NULL,
  CONSTRAINT fkfuncionamento_comercio FOREIGN KEY (comercio_idcomercio) REFERENCES comercio (idcomercio)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;




--
-- Metadata
--
USE phpmyadmin;


--
-- Metadata para o banco de dados lista_tel
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



CREATE TABLE sistema (
  idsistema int(11)PRIMARY KEY AUTO_INCREMENT,
  Titulo_head varchar(150) NOT NULL,
  Titulo_menu varchar(150) NOT NULL,
  Cidade varchar(150) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

