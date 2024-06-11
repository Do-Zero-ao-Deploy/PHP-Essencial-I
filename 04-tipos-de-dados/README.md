## Tipos de dados no PHP

### Tipos escalares
Os tipos de dados escalares no PHP são inteiro, float, string e booleano.

A documentação do PHP fornece informações detalhadas sobre esses tipos de dados, incluindo suas características e uso.

* *Referências:*
 - PHP.net. (2023). PHP: Types - Manual. php.net. https://www.php.net/manual/en/language.types.intro.php

#### Integer

> Um inteiro (int|integer) é qualquer número inteiro, positivo ou negativo.

* Exemplos:
```php
$idade = 45;
$anoDeNascimento = 1990;
$diaDeNascimento = 25;
$mesDeNascimento = 04;
$item = -45;
```

#### Float (double)

> Um float ou double é um número com pontos decimais, positivo ou negativo.
>
> Também chamados de `double`, `quebrados`, `fracionados` etc.

* Exemplos:
```php
$peso = 120.45;
$altura = 1.85;
$distancia = 1500.50;
$tamanho = 151.15;
$saldo = -125.45;
```

#### String (texto)

> Uma string é uma sequência de caracteres, entre aspas simples (') ou duplas (").

* Exemplos:
```php
$nome = 'Tiago';
$email = 'pedro@mail.com';
$cidade = "Madri";
$peso = '120';
$texto = "Batatiha quando nasce.....
fkdjhfkdjfkdjfkd
dfdfdfdf";
```

#### Boolean (lógico)

> Um booleano é um tipo de dado que pode ter apenas dois valores: verdadeiro (`true`) ou falso (`false`).

```php
$casado = true;
$solteiro = false;
$brasileiro = true;
$resultado = 1 === 1; // true
$resultado2 = 1 !== 1; // false
$resultado3 = 4 > 6; // false
```
