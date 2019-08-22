# array-to-csv
Library to generate .csv files from an associative array.

## Usage
```php
<?php

$array = [
    ['a' => 1, 'b' => 2, 'c' => 3],
    ['a' => 4, 'b' => 5, 'c' => 6]
];

ArrayToCsv::generate($array, 'output.csv');

```
