-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2023 às 14:53
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hackaton`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `locais_descarte`
--

CREATE TABLE `locais_descarte` (
  `id_local` int(10) NOT NULL,
  `nome_emp` varchar(100) NOT NULL,
  `desc_locais` varchar(300) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `referencia` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `horario_func` varchar(100) NOT NULL,
  `id_segmento` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `locais_descarte`
--

INSERT INTO `locais_descarte` (`id_local`, `nome_emp`, `desc_locais`, `endereco`, `referencia`, `telefone`, `horario_func`, `id_segmento`) VALUES
(1, 'ECOPONTO DO CITY PETRÓPOLIS', '', 'Avenida São Pedro, nº 1200, City Petrópolis, CEP 14.409-593, Franca/SP', '', '(16) 3030-2985', 'Segunda a Sábado das 07h às 19h e Domingo das 08h às 14h', 1),
(2, 'ATERRO DE GALHOS', 'O resíduo deverá ser levado pelo munícipe para o Aterro de Galhos', 'Av. Sidney Romeu de Andrade', 'Após a penitenciária, próximo à pista de aeromodelismo/Clube de Comerciários, atrás do Posto Paineirão', '', 'Segunda a sexta-feira das 8h às 16h30', 2),
(3, 'ECOPONTO DO CITY PETRÓPOLIS', '', 'Avenida São Pedro, nº 1200, City Petrópolis, CEP 14.409-593, Franca/SP', '', '(16) 3030-2985', 'Avenida São Pedro, nº 1200, City Petrópolis, CEP 14.409-593, Franca/SP', 3),
(4, 'AGENDAMENTO', 'O munícipe deverá agendar a coleta ligando na Secretaria Municipal de Meio Ambiente', '', '', '(16) 3711-9440', '', 3),
(5, 'ECOPONTO DO CITY PETRÓPOLIS', '', 'Avenida São Pedro, nº 1200, City Petrópolis, CEP 14.409-593, Franca/SP', '', '(16) 3030-2985', 'Segunda a Sábado das 07h às 19h e Domingo das 08h às 14h', 4),
(6, 'COOPERFRAN (Cooperativa de Materiais Recicláveis)', '', 'Rua Tristão de Almeida, 565, Distrito Industrial, CEP 14.406-105, Franca/SP', '', '(16) 3721-4354', '', 4),
(7, 'COLETA SELETIVA', 'Acondicionar os materiais recicláveis em sacos plásticos e colocá-los na calçada no dia correto', 'Verificar no site o dia que a Coleta Seletiva passa no bairro', '', '', '', 4),
(8, 'RECICLE CERTO', 'Ecoponto RECICLE CERTO (UNI-FACEF – somente Lixo Eletrônico)', 'Av. Alonso Y Alonso, 2400, São José, CEP 14.401-426, Franca/SP', '', '(16) 99143-3165', '', 5),
(9, 'FUNDAÇÃO ALLAN KARDEC (Oficina Inspiração - Reciclagem de Eletrônicos)', '', 'Rua José Marques Garcia, 675, Cidade Nova, CEP 14.401-080, Franca/SP', 'A entrada é pela Rua Antonio Rodrigues Neto', '(16) 98114-9525 (Renata) / (16) 99969-0648', '', 5),
(10, 'EMDEF', '', '', '', '(16) 3707-1321', '', 6),
(11, 'LOGÍSTICA REVERSA', 'Aqualuz', 'Avenida Brasil, 696 - Vila Aparecida', '', '', '', 7),
(12, 'LOGÍSTICA REVERSA', 'Atacadão', 'Avenida Rio Negro, 1200 - São Miguel', '', '', '', 7),
(13, 'LOGÍSTICA REVERSA', 'Hidromar', 'Rua Roza Gonzales Meneghetti, nº 2481, Chácara Santo Antônio', '', '', '', 7),
(14, 'LOGÍSTICA REVERSA', 'Hidromar', 'Avenida Chico Júlio, nº 3520, Vila Chico Júlio', '', '', '', 7),
(15, 'LOGÍSTICA REVERSA', 'Hidromar', 'Avenida Dr. Ismael Alonso Y Alonso, nº 2.901, São José', '', '', '', 7),
(16, 'LOGÍSTICA REVERSA', 'Makro', 'Avenida Reynaldo Chioca, s/n - Parque Progresso', '', '', '', 7),
(17, 'Ecoponto de Pneus RECICLANIP', 'Grandes quantidades: borracharias, oficinas, empresas - PJ: O resíduo deverá ser levado pelo munícipe para o Aterro Sanitário Municipal, próximo à EMDEF', 'Rodovia Prefeito Fábio Talarico (SP-345), Km 43, Distrito Industrial', '', '(16) 3707-1300', '', 8),
(18, 'Ecoponto de Pneus RECICLANIP', 'Pequenas quantidades (até 4 pneus):\r\nO munícipe deverá agendar a coleta ligando na Secretaria Municipal de Meio Ambiente', '', '', '(16) 3711-9440', '', 8),
(19, 'RECICLE CERTO', 'Ecoponto RECICLE CERTO (UNI-FACEF – somente Lixo Eletrônico)', 'Av. Alonso Y Alonso, 2400, São José, CEP 14.401-426, Franca/SP', '', '(16) 99143-3165', '', 9),
(20, 'PONTOS DE RECOLHIMENTO', 'Makro', 'Avenida Reynaldo Chioca, s/n - Parque Progresso', '', '', '', 9),
(21, 'PONTOS DE RECOLHIMENTO', 'Atacadão', 'Avenida Rio Negro, 1200 - São Miguel', '', '', '', 9),
(22, 'PONTOS DE RECOLHIMENTO', 'Rede Droga Raia', 'Todas', '', '', '', 9),
(23, 'PONTOS DE RECOLHIMENTO', 'Casas Bahia', 'Rua Major Claudiano, 1848, Centro', '', '', '', 9),
(24, 'PONTOS DE RECOLHIMENTO', 'Drogaria São Paulo', 'Av Presidente Vargas 108 e 118, Cidade Nova / Av. Vereador Bernadino Pucci, 2081 e 2091 , Vila Santo', '', '', '', 9),
(25, 'PONTOS DE RECOLHIMENTO', 'SENAC Franca', 'Rua Alfredo Lopés Pinto, 1345, Vila Teixeira', '', '', '', 9),
(26, 'PONTOS DE RECOLHIMENTO', 'ALGAR Franca Shopping', '', '', '', '', 9),
(27, 'PONTOS DE RECOLHIMENTO', 'ALGAR Franca Shopping', '', '', '', '', 9),
(28, 'PONTOS ESPALHADOS', 'Rede Droga Raia', '', '', '', '', 10),
(29, 'PONTOS ESPALHADOS', 'Todas UBS', '', '', '', '', 10),
(30, 'PONTOS ESPALHADOS', 'Drogaria São Paulo ', 'Av. Presidente Vargas, 108 e 118, Cidade Nova / Av. Vereador Bernardino Pucci, 2081 e 2091, Vila San', '', '', '', 10),
(31, 'AZ TINTAS (Loja 1)', '', 'Av. Presidente Vargas, 901, Cidade Nova, CEP 14.401-120, Franca/SP', '', '(16) 3707-4700 / (16) 99624-7725', '', 12),
(32, 'AZ TINTAS (Loja 2)', '', 'Av. Dr. Ismael Alonso y Alonso, 2901, São José, CEP 14.403-430, Franca/SP', '', '(16) 3722-1011 / (16) 99639-2043', '', 12);

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `idlogin` int(11) NOT NULL,
  `email_user` varchar(100) DEFAULT NULL,
  `senha_user` varchar(100) DEFAULT NULL,
  `nome_user` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`idlogin`, `email_user`, `senha_user`, `nome_user`) VALUES
(2, 'eduardo@gmail.com', '1234', 'eduardo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos_doacao`
--

CREATE TABLE `produtos_doacao` (
  `idproduto` int(10) NOT NULL,
  `nome_prod` varchar(50) NOT NULL,
  `tipo_id` int(10) NOT NULL,
  `descricao_prod` varchar(300) NOT NULL,
  `idimagem` int(10) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `segmentos`
--

CREATE TABLE `segmentos` (
  `id_segmento` int(10) NOT NULL,
  `nome_segmento` varchar(100) NOT NULL,
  `tipo_segmento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `segmentos`
--

INSERT INTO `segmentos` (`id_segmento`, `nome_segmento`, `tipo_segmento`) VALUES
(1, 'Resíduos de Construção Civil (RCC)', 'Tijolos, Concretos, Gesso'),
(2, 'Resíduos “Verdes”', 'Galhos, Poda, Grama'),
(3, 'Inservíveis', 'Sofá, colchão, guarda-roupa'),
(4, 'Resíduos Recicláveis', 'Vidro, Papel, Papelão, Plástico, Metal, Isopor, Cápsula de Café'),
(5, 'Resíduos Eletrônicos', 'Computadores, Notebooks, Tablets, Celulares, Eletrodomésticos, Equipamentos de Som e Imagem'),
(6, 'Resíduos de Couro', 'Aparas, Serragem, Sapatos'),
(7, 'Lâmpadas', 'Lâmpadas'),
(8, 'Pneus', 'Pneus'),
(9, 'Pilhas e Baterias (Pequenas Quantidades)', 'Pilhas e Baterias (Pequenas Quantidades)'),
(10, 'Resíduos de Serviços de Saúde (RSS) ', 'Medicamentos vencidos, Agulhas, Seringas, Gaze'),
(11, 'Resíduos Perigosos', 'Tintas, Solventes, Químicos'),
(12, 'Latas de tinta métalicas vazias', 'Latas de tinta métalicas vazias'),
(13, 'MDF, Compensado', 'MDF, Compensado');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `locais_descarte`
--
ALTER TABLE `locais_descarte`
  ADD PRIMARY KEY (`id_local`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idlogin`);

--
-- Índices de tabela `produtos_doacao`
--
ALTER TABLE `produtos_doacao`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices de tabela `segmentos`
--
ALTER TABLE `segmentos`
  ADD PRIMARY KEY (`id_segmento`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `locais_descarte`
--
ALTER TABLE `locais_descarte`
  MODIFY `id_local` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `produtos_doacao`
--
ALTER TABLE `produtos_doacao`
  MODIFY `idproduto` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `segmentos`
--
ALTER TABLE `segmentos`
  MODIFY `id_segmento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
