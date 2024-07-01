<<<<<<< HEAD
# Sistema de Receitas

Este é um sistema CRUD simples desenvolvido em PHP com integração ao MySQL para gerenciar receitas.

## Configuração

- Clone o repositório:

  git clone https://github.com/speluca/Sistema-de-Receitas.git

- crie o banco de dados e a tabela necessária utilizando o código abaixo: (`receitas`).

  CREATE TABLE receitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255) NOT NULL,
    descricao TEXT,
    ingredientes TEXT,
    modo_preparo TEXT,
    tempo_preparo INT,
    porcoes INT,
    imagem VARCHAR(255),
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


## Funcionalidades

- **Cadastro (Create)**: Permite adicionar novas receitas ao sistema.
- **Consulta (Read)**: Lista todas as receitas cadastradas.
- **Atualização (Update)**: Permite editar informações de uma receita existente.
- **Exclusão (Delete)**: Permite excluir uma receita do sistema.

## Estrutura do Banco de Dados

- Tabela `receitas`:
- `id` INT (chave primária auto-incremento)
- `titulo` VARCHAR
- `descricao` TEXT
- `ingredientes` TEXT
- `modo_preparo` TEXT
- `tempo_preparo` INT
- `porcoes` INT
- `data_criacao` TIMESTAMP (data automática de criação)

## Executando o Projeto

- Configure seu ambiente local com PHP e MySQL.
- Execute o projeto em um servidor web (ex: Apache).

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para enviar pull requests para melhorias no código.

## Licença

Este projeto está licenciado sob a MIT License - veja o arquivo LICENSE.md para mais detalhes.



=======
# Sistema-de-Receitas
Sistema para cadastro de receitas
>>>>>>> a3ab5bf (Initial commit)
