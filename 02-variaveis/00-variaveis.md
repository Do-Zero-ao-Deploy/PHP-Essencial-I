## Variáveis

São identificadores de posição na memória do computador.

Podem ter seus dados alterados.


### Regras para nomenclatura de variáveis

- Podem ser usadas todas as letras maiúsculas ou minúsculas, números e o underscore `_`;
- Não pode começar com número, mas podem haver quantos números quiser, depois do 1º caractere.

Exemplos:

```php
// Corretas
$meunome = '...';
$MEUNOME = '...';
$MEU_NOME = '...';
$_meuNOME = '...';
$meuNome = '...';
$_1234 = '...';
$a1234 = '...';

// Incorretas
$1234_ = '...';
$1abc = '...';
$@abc = '...';
$%abc = '...';
$%abc = '...';
```

```php
// a-zA-Z0-9_
```

## Escopo de variáveis

<!--  -->

### Globais

<!--  -->

### Super Globais

- $_GET
- $_POST
- $_REQUEST
- $_FILES
- $_SERVER
- $_ENV
- $_SESSION
- $_COOKIE
- $_GLOBALS
