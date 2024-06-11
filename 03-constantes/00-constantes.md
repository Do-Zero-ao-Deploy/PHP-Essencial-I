## Constantes

São identificadores de posição na memória do computador.

NÃO podem ter seus dados alterados.

Uma vez definidos, seus valores persistem.


### Definição de constantes

* **Forma 1**: Usando refencia `const` seguido no nome da constante, o simbolo de `=` seguido do valor

```php
const VERSION = '1.5.1';
const DEBUG_ON = true;
const CONST_1 = [];
const CONST_2 = 123;
const CONST_3 = null;
```

* **Forma 2**: Usando a função `define` que espera 2 parâmetros: nome da constante e valor;

```php
define('VERSION', '1.5.1');
define('DEBUG_ON', true);
define('CONST_1', []);
define('CONST_2', 123);
define('CONST_3', null);
```

### Quando usar `define` e quando usar `const`?

* Exemplo 1:
```php
define('CONST_1', []); // Ok! Funciona
const CONST_2 = []; // Ok! Funciona

if (1 == 1) {
    define('CONST_3', []); // Ok! Funciona
    const CONST_4 = []; // Erro!  Não funciona
}
```

* Exemplo 2:
```php
define('VALUES', 'Abc is a test'); // Ok! Funciona (Escopo global)

class Abc
{
    // define('VALUES', [1, 2, 3]); // Erro! Não funciona
    const VALUES = [1, 2, 3]; // Ok! Funciona (Escopo da classe)
}
```
