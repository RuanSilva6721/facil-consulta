# Fácil Consulta

Teste em Laravel.

```bash
Usuário default para a autenticação do JWT
email: RuanAdmin@gmail.com,
password: password
```


## Iniciando

Clone o projeto, usando o comando abaixo (usando HTTPS):

```bash

git clone https://github.com/RuanSilva6721/facil-consulta.git
```

duplique o arquivo `.env.example` e renomeie um deles para `.env`.


Inicie o Docker em sua máquina e depois execute para subir o container da aplicação e subir o db mysql:

```bash

cd facil-consulta
./vendor/bin/sail up -d
```

Depois de clonar e iniciar, acesse o container e instale as dependências com os comandos abaixo (para isso, utilize o [Composer](https://getcomposer.org/) ):

```bash
./vendor/bin/sail shell
composer install
```

Execute o comando abaixo para que as tabelas sejam criadas no banco de dados:

```bash

./vendor/bin/sail artisan migrate
```

Para ver o projeto em execução, acesse [http://localhost](http://localhost) .

Caso queira adicionar dados fictícios para o seu usuário no banco:

```bash

./vendor/bin/sail artisan db:seed
```

## Construído com 
- [Laravel](https://laravel.com/)