# PHP Senior Test

### Requisitos de Negócio:

- [X] Criar estrutura de banco de dados:
    * [X] Cliente (nome, email, data_nascimento, cpf);
    * [X] Endereco (logradouro, numero, complemento, bairro, cep, cidade, latitude, longitude);
- [X] Importar um arquivo CSV de cliente (s);
- [X] Parsear (validar) endereço (logradouro, número, complemento, bairro, cep, cidade);
- [X] Buscar GeoLocalização (GeoCoding) utilizando API do Google;
- [X] Salvar em Banco de dados;
- [ ] Exibir em um grid os dados importados no BD;
- [ ] Exportar dados do Grid em csv;


### Requisitos Técnicos:

- [X] Controle de versionamento (GIT)
- [X] PHP 7+;
- [X] Utilizar Composer para libs externas;
- [X] Framework;
- [X] Mysql;
- [ ] Front Bootstrap;


### Extras:

- [ ] Exportar dados em formato CSV;
- [ ] Upload de CSV via AJAX;


### O que se espera: 

- [ ] Utilização de Design Patterns (https://www.php-fig.org/psr/)
- [X] Desenvolvimento da Lógica para leitura do CSV;
- [ ] Validação e cleanup dos dados (Parse do endereço);
- [ ] Buscar geocoding;
- [ ] Estruturação da tabela;
- [X] Salvar dados no BD;


### Diferenciais;

- [ ] Dependency Injector (ex: Pimple)
- [X] Docker
- [ ] Template Engine (ex: Twig)
- [X] Importar CSV a partir de linha de comando (https://laravel.com/docs/5.6/artisan#writing-commands)
