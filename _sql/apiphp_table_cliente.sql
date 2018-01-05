
-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `cpf` bigint(11) NOT NULL,
  `senha` varchar(246) NOT NULL,
  `nome` varchar(246) NOT NULL,
  `telefone` bigint(11) NOT NULL,
  `email` varchar(246) NOT NULL,
  `nascimento` date NOT NULL,
  `cep` bigint(11) NOT NULL,
  `logradouro` varchar(246) NOT NULL,
  `num` bigint(11) NOT NULL,
  `complemento` varchar(246) NOT NULL,
  `bairro` varchar(246) NOT NULL,
  `cidade` varchar(246) NOT NULL,
  `estado` varchar(246) NOT NULL,
  `rg` bigint(11) NOT NULL,
  `expedicao` date NOT NULL,
  `orgao_expeditor` varchar(246) NOT NULL,
  `estado_civil` varchar(246) NOT NULL,
  `categoria` varchar(246) NOT NULL,
  `empresa` varchar(246) DEFAULT NULL,
  `profissao` varchar(246) NOT NULL,
  `renda_bruta` bigint(11) NOT NULL
) ;

--
-- RELATIONSHIPS FOR TABLE `cliente`:
--

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`cpf`, `senha`, `nome`, `telefone`, `email`, `nascimento`, `cep`, `logradouro`, `num`, `complemento`, `bairro`, `cidade`, `estado`, `rg`, `expedicao`, `orgao_expeditor`, `estado_civil`, `categoria`, `empresa`, `profissao`, `renda_bruta`) VALUES
(10030856780, '123456', 'joao', 22998897559, 'joao@gmail.com', '1990-05-06', 28625630, 'rua teste', 1, 'casa fundos', 'centro', 'nova friburgo', 'ES', 1992000, '2012-01-10', 'sptc', 'solteira', 'empregado', NULL, 'engenheiro', 5000),
(10730856780, '123mudar', 'izabela', 22998897559, 'izabelabastos2@gmail.com', '1990-05-06', 28625630, 'rua teste', 1, 'casa fundos', 'centro', 'nova friburgo', 'ES', 1992797, '2012-01-10', 'sptc', 'solteira', 'empregado', NULL, 'engenheiro', 5000);
