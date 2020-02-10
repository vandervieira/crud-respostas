# crud-respostas
Crud para coleta, edição e inserção de textos.

## Características
* Adicionar, editar e remover respostas.
* Edição em HTML.
* Sistema de trigger para backup das respostas editadas/excluídas.


### Requisitos
O que você precisa para utilizar o crud e como instalá-lo.

`` 
PHP 7
``
``
MySQL 5.7 
``
### Configurando
Importar o banco que está presente no caminho:

``
data/banco-triggers.sql
``

Após isso configure os dados de conexão ao banco de dados:

``
includes/config/db.php
``

### Construído com:
* [DataTables](https://datatables.net/) - Utiliado para exibir as respostas
* [BootStrap](https://getbootstrap.com/) - Melhora do front end
* [Summernote](https://summernote.org/) - Edição HTML dos textos

### Autor 

* **Vander Vieira** - *Trabalho inicial* - [VanderVieira](https://github.com/vandervieira)
