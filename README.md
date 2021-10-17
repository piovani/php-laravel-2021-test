# PHP Laravel 2021 Test

### Requisitos de Negócio:

- [X] Criar estrutura de banco de dados:
    * [X] Cliente (nome, email, data_nascimento, cpf);
    * [X] Endereco (logradouro, numero, complemento, bairro, cep, cidade, latitude, longitude);
- [X] Importar um arquivo CSV de cliente (s);
- [X] Parsear (validar) endereço (logradouro, número, complemento, bairro, cep, cidade);
- [X] Buscar GeoLocalização (GeoCoding) utilizando API do Google;
- [X] Salvar em Banco de dados;
- [X] Exibir em um grid os dados importados no BD;
- [X] Exportar dados do Grid em csv;


### Requisitos Técnicos:

- [X] Controle de versionamento (GIT)
- [X] PHP 7+;
- [X] Utilizar Composer para libs externas;
- [X] Framework;
- [X] Mysql;
- [X] Front Bootstrap;


### Extras:

- [X] Exportar dados em formato CSV;
- [X] Upload de CSV via AJAX;


### O que se espera: 

- [X] Utilização de Design Patterns (https://www.php-fig.org/psr/)
- [X] Desenvolvimento da Lógica para leitura do CSV;
- [X] Validação e cleanup dos dados (Parse do endereço);
- [X] Buscar geocoding;
- [X] Estruturação da tabela;
- [X] Salvar dados no BD;


### Diferenciais;

- [ ] Dependency Injector (ex: Pimple)
- [X] Docker
- [ ] Template Engine (ex: Twig)
- [X] Importar CSV a partir de linha de comando (https://laravel.com/docs/5.6/artisan#writing-commands)
