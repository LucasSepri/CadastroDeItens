CREATE DATABASE projeto;
USE projeto;

CREATE TABLE user(
cd INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(20) NOT NULL,
foto VARCHAR(120) NULL);

CREATE TABLE categoria(
cd INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(200),
foto VARCHAR( 200 )); 

CREATE TABLE produto(
cd INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100),
descricao VARCHAR(200),
valor DECIMAL(10,2),
foto VARCHAR(200),
id_categoria INT,
FOREIGN KEY (id_categoria) REFERENCES categoria(cd)
);

INSERT INTO `categoria` (`cd`, `nome`, `foto`) VALUES
(1, 'Salgados', 'imgs/coxinha.png'),
(2, 'Bebidas', 'imgs/drink-icon.png');

INSERT INTO `produto` (`cd`, `nome`, `descricao`, `valor`, `foto`, `id_categoria`) VALUES
(1, 'Coxinha', 'asd', 6.58, 'imgs/coxinha.png', 1),
(2, 'Coxinha', 'aa', 9.59, 'imgs/refrigerante-coca-cola-pet-2l-927.jpg', 2),
(3, 'Coxinha', '2', 6.58, 'imgs/transferir.jpg', 2),
(4, 'asdas', '2', 6.58, 'imgs/08_37_34_881_Cachorro_Quente_com_Leite_em_P_M_rcia_Cadore_Borin_620.webp', 2),
(5, 'Coxinha', 'asda', 6.58, 'imgs/08_37_34_881_Cachorro_Quente_com_Leite_em_P_M_rcia_Cadore_Borin_620.webp', 1),
(6, 'Coxinha', 'adsd', 12.00, 'imgs/refrigerante-coca-cola-pet-2l-927.jpg', 2),
(7, 'Coxinha', 'adsd', 12.00, 'imgs/refrigerante-coca-cola-pet-2l-927.jpg', 2),
(8, 'Coxinha', 'adsd', 12.00, 'imgs/refrigerante-coca-cola-pet-2l-927.jpg', 2),
(9, 'Coxinha', 'adsd', 12.00, 'imgs/refrigerante-coca-cola-pet-2l-927.jpg', 2);

--