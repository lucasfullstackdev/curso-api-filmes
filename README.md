<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<h1 align="center">API Filmes</h1>
<h4 align="center">Uma API REST para gerenciamento de Filmes</h4>

## Sobre o projeto
Repositório oficial do curso [Aprenda Laravel na prática](https://aprendalaravelnapratica.jellycode.com.br/).

Aqui abordamos os prinicipais pontos do melhor framework do mercado PHP
- Models
- Routes
- Controllers
- Eloquent ORM
- Migrations
- POO
- Modelagem do Banco de Dados

## Por que este projeto?
- Este projeto faz parte da minha série de cursos focados na capacitação e direcionamento de desenvolvedores que gostariam de dar o próximo passo, adquirir mais confiança no seu trabalho, conseguir promoção ou fazer transição de carreira
- A construção de API's faz parte da rotina de um desenvolvedor back-end, então esse projeto serviu como uma simulação da rotina real de um desenvolvedor back-end atuando com LARAVEL.

## Sobre a modelagem do Banco de Dados
- O desafio consistia na construção de uma API REST utilizando LARAVEL que permitisse o gerenciamento de filmes.
- Para o desafio foram criadas as seguintes tabelas:
	- genero
	- classificacao
	- ator
	- diretor
	- filme
	- filme_ator
	- filme_diretor
	- filme_genero

# Sobre as Rotas
## Gênero
```php
Method: GET
Url: /api/v1/generos

- Para listar todos os gêneros
```

```php
Method: GET
Url: /api/v1/generos/{id}

- Para listar um gênero em específico
```

```php
Method: POST
Url: /api/v1/generos

- Para Adicionar um novo gênero
- Parameters:
	-	ds_genero (string)
```

```php
Method: PUT/PATCH
Url: /api/v1/generos/{id}

- Para Atualizar um gênero
- Parameters:
	-	ds_genero (string)
```

```php
Method: DELETE
Url: /api/v1/generos/{id}
```

## Classificacao
```php
Method: GET
Url: /api/v1/classificacoes

- Para listar todos as classificações
```

```php
Method: GET
Url: /api/v1/classificacoes/{id}

- Para listar uma classificação em específico
```

```php
Method: POST
Url: /api/v1/classificacoes

- Para Adicionar uma nova classificação
- Parameters:
	- ds_classificacao (string)
	- ds_observacao (text)
	- ds_violencia (text)
	- ds_sexo_nudez (text)
	- ds_drogas  (text)
```

```php
Method: PUT/PATCH
Url: /api/v1/classificacoes/{id}

- Para Atualizar uma classificação
- Parameters:
	- ds_classificacao (string)
	- ds_observacao (text)
	- ds_violencia (text)
	- ds_sexo_nudez (text)
	- ds_drogas  (text)
```

```php
Method: DELETE
Url: /api/v1/classificacoes/{id}
```

## Ator
```php
Method: GET
Url: /api/v1/atores

- Para listar todos os atores
```

```php
Method: GET
Url: /api/v1/atores/{id}

- Para listar um ator em específico
```

```php
Method: POST
Url: /api/v1/atores

- Para Adicionar um novo ator
- Parameters:
	-	nm_ator (string)
```

```php
Method: PUT/PATCH
Url: /api/v1/atores/{id}

- Para Atualizar um ator
- Parameters:
	-	nm_ator (string)
```

```php
Method: DELETE
Url: /api/v1/atores/{id}
```

## Diretor
```php
Method: GET
Url: /api/v1/diretores

- Para listar todos os diretores
```

```php
Method: GET
Url: /api/v1/diretores/{id}

- Para listar um diretor em específico
```

```php
Method: POST
Url: /api/v1/diretores

- Para Adicionar um novo diretor
- Parameters:
	-	nm_diretor (string)
```

```php
Method: PUT/PATCH
Url: /api/v1/diretores/{id}

- Para Atualizar um diretor
- Parameters:
	-	nm_diretor (string)
```

```php
Method: DELETE
Url: /api/v1/diretores/{id}
```

## Filme
```php
Method: GET
Url: /api/v1/filmes

- Para listar todos os filmes
```

```php
Method: GET
Url: /api/v1/filmes/{id}

- Para listar um filme em específico
```

```php
Method: POST
Url: /api/v1/filmes

- Para Adicionar um novo filme
- Parameters:
	- titulo (string)
	- dt_lancamento (datetime)
	- duracao (string)
	- classificacao_id (int)(foreign key)
```

```php
Method: PUT/PATCH
Url: /api/v1/filmes/{id}

- Para Atualizar um filme
- Parameters:
	- titulo (string)
	- dt_lancamento (datetime)
	- duracao (string)
	- classificacao_id (int)(foreign key)
```

```php
Method: DELETE
Url: /api/v1/filmes/{id}
```

## Filme Ator
```php
Method: GET
Url: /api/v1/filmes/{id}/atores

- Para listar todos os atores de um filme em específico
```

```php
Method: GET
Url: /api/v1/filmes/{id}/atores/{idAtor}

- Para listar um ator em específico de um determinado filme
```

```php
Method: POST
Url: /api/v1/filmes/{id}/atores

- Para Adicionar um novo ator
- Parameters:
	- ator_id (int)(foreign key)
```

```php
Method: PUT/PATCH
Url: /api/v1/filmes/{id}/atores/{idAtor}

- Não implementado, foi preferido a remoção do ator e a posterior adição do novo ator, realizando assim uma troca
```

```php
Method: DELETE
Url: /api/v1/filmes/{id}/atores/{idAtor}
```


## Filme Diretor
```php
Method: GET
Url: /api/v1/filmes/{id}/diretores

- Para listar todos os diretores de um filme em específico
```

```php
Method: GET
Url: /api/v1/filmes/{id}/diretores/{idDiretor}

- Para listar um diretor em específico de um determinado filme
```

```php
Method: POST
Url: /api/v1/filmes/{id}/diretores

- Para Adicionar um novo diretor
- Parameters:
	- diretor_id (int)(foreign key)
```

```php
Method: PUT/PATCH
Url: /api/v1/filmes/{id}/diretores/{idDiretor}

- Não implementado, foi preferido a remoção do diretor e a posterior adição do novo diretor, realizando assim uma troca
```

```php
Method: DELETE
Url: /api/v1/filmes/{id}/diretores/{idDiretor}
```

## Setup
1. Clone o repositório
2. Instale o [composer](https://getcomposer.org/download/)
3. Acesse a raiz do projeto
4. Com o console aberto, execute o comando: `composer install`
5. Após a instalação de todas as dependências necessárias, execute o comando: `cp .env.example .env` (para gerar o arquivo .env)
6. Execute o comando: `php artisan key:generate`
7. Com o seu ambiente de desenvolvimento rodando, crie uma nova base de dados com o nome: `api_filme`
8. Para a criação das tabelas e dos registros de teste, execute o comando: `php artisan migrate:fresh --seed`
9. Após toda a configuração necessária, execute o comando: `php artisan serve`
10. O projeto deve estar disponível no endereco: [localhost:8000/api/v1/](http://localhost:8000/api/v1/) 

## Observações importantes
- É aconselhável que você tenha em sua máquia o [postman](https://www.postman.com/) para que possa fazer os devidos testes sobre as rotas disponíveis nesta API.

## Dependências e suas versões
- PHP 7.4.3 +
- Extensão de PHP: mysqli | curl | mbstring
- LARAVEL 8x+
- Versão do servidor: 10.4.11-MariaDB

## Considerações finais
- API ainda passará por alterações, esta API não representa uma amostra real, devendo ser utilizada apenas para se ter uma noção sobre como funciona um API REST.
- Qualquer dúvida ou sugestão, entre em contato pelo e-mail: contato@jellycode.com.br
