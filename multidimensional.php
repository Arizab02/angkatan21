<?php

$array =
    [
        'sarang 1' =>
        [
            'sarang a' => "nilai i"
        ],
        'sarang 2' =>
        [
            'sarang b' => "nilai ii"
        ],
        'sarang 3' =>
        [
            'sarang c' => "nilai iii"
        ]
    ];

$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar',
            'ayam goreng',
            'ayam sambal',
            'ayam kecap'
        ],
        'ikan' => [
            'ikan bakar',
            'ikan goreng',
            'ikan sambal',
            'ikan kecap'
        ],
        'sapi' => [
            'sapi bakar',
            'sapi goreng',
            'sapi sambal',
            'sapi kecap'
        ],
        'kambing' => [
            'kambing bakar',
            'kambing goreng',
            'kambing sambal',
            'kambing kecap'
        ]
    ],
    "minuman" => [
        'es' => [
            'es teh',
            'es jeruk',
            'es anggur',
            "masirmas",
            "teh sisri",
            "es teh anget",
            "soda gembira"
        ],
    ],
];

foreach ($menu as $index => $key) {
    echo $index;
    echo "\n";
    foreach ($key as $index => $item) {
        if (is_array($item)) {
            echo "\n";
            echo $index;
            echo "\n" . "====================================" . "\n";
            foreach ($item as $index => $item) {
                echo ($item);
                echo "\n";
            }
        } elseif (!is_array($item)) {
            echo ($item);
            echo "\n";
        }
    }
}

// echo "*\n";
// echo "**\n";
// echo "***\n";
// echo "****\n";
// echo "*****\n";
