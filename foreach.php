<?php
$tienda_cafe = array(
    'Americano' => 20,
    'Capichino' => 24,
    'Latte' => 20.3,
    'AmerMocca' => 10
);
foreach ($tienda_cafe as $cafe => $precio) {
    # code...
    echo "Precios del $cafe es $$precio Dolar \n";
}

echo "\n";
?>