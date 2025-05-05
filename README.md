# Gerenciador de Clientes


> Este projeto é uma solução para o desafio técnico proposto pela PBSoft, desenvolvido utilizando o framework Laravel.

### Tecnologias utilizadas

- [Laravel](https://laravel.com/) – Framework PHP para desenvolvimento web
- [PHP](https://www.php.net/) – Linguagem de programação
- [Composer](https://getcomposer.org/) – Gerenciador de dependências PHP
- [MySQL](https://www.mysql.com/) – Sistema de gerenciamento de banco de dados
- [Vite](https://vitejs.dev/) – Ferramenta de build frontend


## Desenvolvimento

O projeto ainda está em desenvolvimento

- [x] Criação de cliente
- [x] Validação descritiva dos erros
- [x] Validação de formulário através do request no back-end
- [x] Listagem de clientes

## Pré-requisitos

- PHP >= 8.0
- Composer
- Node.js e NPM
- MySQL (ou outro banco de dados de sua preferência)

## Instalando pbsoft-challenge

Para instalar o pbsoft-challenge, siga estas etapas:

Siga os passos abaixo para rodar o projeto localmente:

```bash
# Clone o repositório
git clone https://github.com/Murillou/pbsoft-challenge.git

# Acesse a pasta do projeto
cd pbsoft-challenge

# Instale as dependências PHP
composer install

# Copie o arquivo de variáveis de ambiente e configure com suas credenciais
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Execute as migrações
php artisan migrate

# Instale as dependências frontend
npm install

# Compile os arquivos com Vite
npm run dev

# Inicie o servidor
php artisan serve
```

### Desenvolvido com 💙 por Murillo Vinícius

