### Manipulação de Arrays no PHP

* Link para referências: https://www.php.net/manual/pt_BR/ref.array.php

##### Funções mais utilizadas na manipulação de arrays

<!-- 3 -->
- `in_array` — Checa se um valor existe em um array
- `array_filter` — Filtra elementos de um array utilizando uma função callback
- `count` — Conta todos os elementos de um array ou de um objeto Countable
    - `sizeof` — Sinônimo de count
    - `array_count_values` — Conta as ocorrências de cada valor distinto em um array

<!-- 5 -->
- `array_merge` — Combina um ou mais arrays
    - `array_merge_recursive` — Mescla um ou mais arrays recursivamente
- `key_exists` — Sinônimo de array_key_exists
- `array_values` — Retorna todos os valores de um array
- `array_keys` — Retorna todas as chaves ou uma parte das chaves de um array
- `array_map` — Aplica uma função em todos os elementos dos arrays dados

<!-- 10 -->
- `sort` — Ordena um array em ordem ascendente
    - `asort` — Ordena um array em ordem crescente e mantém a associação de índices
        - `arsort` — Ordena um array em ordem descrescente e mantém a associação de índices
    - `ksort` — Ordena um array pelas chaves em ordem crescente
        - `krsort` — Ordena um array pelas chaves em ordem descrescente
    - `array_multisort` — Ordena múltiplos arrays ou arrays multidimensionais
    - `natcasesort` — Ordena um array utilizando o algoritmo da "ordem natural" sem diferenciar maiúsculas e minúsculas
    - `natsort` — Ordena um array utilizando o algoritmo de "ordem natural"
    - `rsort` — Ordena um array em ordem descrescente
    - `uasort` — Ordena um array com uma função de comparação definida pelo usuário e mantém associações de índices
    - `uksort` — Ordena um array pelas chaves utilizando uma função de comparação definida pelo usuário.
    - `usort` — Ordena um array pelos valores utilizando uma função de comparação definida pelo usuário

- `array_unique` — Remove os valores duplicados de um array
- `array_flip` — Permuta todas as chaves e seus valores associados em um array
- `array_is_list` — Verifica se um array é uma lista

- `array_key_exists` — Verifica se uma chave ou índice existe em um array
- `array_key_first` — Obtém a primeira chave de um array
- `array_key_last` — Obtém a última chave de um array

- `array_shift` — Retira o primeiro elemento de um array
- `array_unshift` — Adiciona um ou mais elementos no início de um array
- `array_pop` — Extrai um elemento do final do array
- `array_push` — Adiciona um ou mais elementos no final de um array

- `array_diff` — Computa as diferenças entre arrays
    - `array_diff_assoc` — Computa a diferença entre arrays com checagem adicional de índice
    - `array_diff_key` — Computa a diferença entre arrays usando as chaves na comparação
    - `array_diff_uassoc` — Computa a diferença entre arrays com checagem adicional de índice que feita por uma função de callback fornecida pelo usuário
    - `array_diff_ukey` — Computa a diferença entre arrays usando uma função callback na comparação de chaves
    - `array_udiff_assoc` — Computa a diferença entre arrays com checagem adicional de índice, compara dados por uma função de callback
    - `array_udiff_uassoc` — Computa a diferença entre arrays com checagem adicional de índice, compara dados e índices por uma função de callback
    - `array_udiff` — Computa a diferença de arrays usando uma função de callback para comparação dos dados

- `array_slice` — Extrai uma parcela de um array
    - `array_splice` — Remove uma parte array e a substitui por outra coisa

- `array_sum` — Calcula a soma dos elementos de um array
- `array_chunk` — Divide um array em pedaços

- `array_pad` — Expande um array para um certo comprimento utilizando um determinado valor
- `list` — Cria variáveis como se fossem arrays


- `compact` — Cria um array contendo variáveis e seus valores
- `extract` — Importa variáveis para a tabela de símbolos a partir de um array

- `shuffle` — Embaralha um array
- `range` — Cria um array contendo uma faixa de elementos
- `array_rand` — Escolhe uma ou mais chaves aleatórias de um array

- Outras funções interessantes:
    - `array_reduce` — Reduz um array para um único valor através de um processo iterativo via callback
    - `array_reverse` — Retorna um array com os elementos na ordem inversa
    - `array_search` — Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
    - `array_column` — Retorna os valores de uma coluna do array informado
    - `array_combine` — Cria um array usando um array para chaves e outro para valores
    - `array_fill` — Preenche um array com valores
        - `array_fill_keys` — Preenche um array com valores, especificando chaves
    - Manipuladores de array/iterables
        - `key` — Retorna uma chave de um array
        - `current` — Retorna o elemento atual em um array
        - `pos` — Sinônimo de current
        - `end` — Define o ponteiro interno de um array para seu último elemento
        - `next` — Avança o ponteiro interno de um array
        - `prev` — Retrocede o ponteiro interno de um array
        - `reset` — Faz o ponteiro interno de um array apontar para o seu primeiro elemento


### Links

- https://www.php.net/manual/pt_BR/ref.array.php
