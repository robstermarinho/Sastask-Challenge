# Sastask

Plataforma que propõe atividades personalizadas por professores para alunos de diferentes níveis.

## Configurando o projeto

### Instalação de componentes

Para instalar os componentes necessários para a aplicação execute os seguintes comandos no diretório root:

```
composer install
```
abra a pasta `public/app` e execute o comando:
```
bower update
```

### Environment variables

Crie um aquivo `.env` no diretório root e especifique algumas 
variáveis de ambiente, banco de dados, etc, como no aquivo `.env.example`:

```
APP_NAME="SAS Tasks"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_HOST=mongo
DB_PORT=27017
DB_DATABASE=sas
DB_USERNAME=
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

FILESYSTEM_DRIVER=images


```

### Gere uma nova APP_KEY:

Execute o seguinte comando: 

```
php artisan key:generate
```

# Docker

Esta aplicação utiliza o Docker para configuração do ambiente. Para rodar os containers vá até a pasta `dock` e crie um arquivo `.env` com base no arquivo `env-example` e defina as seguintes
variáveis como true:

```
WORKSPACE_INSTALL_NODE=true 
WORKSPACE_INSTALL_MONGO=true
PHP_FPM_INSTALL_MONGO=true
```

Depois execute o seguinte comando:

```
docker-compose up -d nginx mongo
```

Não esqueça de configurar o compartilhamento do diretório do projeto no Docker em Docker -> Preferences... -> File Sharing.

Para entrar no workspace da aplicação execute o comando:

```
docker-compose exec --user=laradock workspace bash
```


### Database and Seed

Este app fornece algumas migrations e seed para as tabelas do banco.
Execute o seguinte comando dentro do workspace gerado pelo docker para criar as tabelas no banco de dados e alimenta-las:

```
php artisan migrate
php artisan db:seed
```

O processo de seeding cria alguns usuários do tipo aluno no banco de dados com base nas informaçoes obtidas pela API da marvel (http://gateway.marvel.com) que fornece informaçoes sobre os personagens. Você pode logar com qualquer usuário aluno utilizando a senha secret ou com o seguinte usuário pré-configurado:

| User | Role | Password
| ------ | ------ | ------ |
| xavier@sas.com | TEACHER_USER | secret |



Verifique o depoly da aplicação no endereço abaixo em seu browser:

```
127.0.0.1
```
