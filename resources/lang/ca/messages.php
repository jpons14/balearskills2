<?php
return [
    'errors' => [
        'comments' => [
            'couldnt' => [
                'created' => 'El comentari no s\'ha pogut crear',
                'updated' => 'El comentari no s\'ha pogut actualitzar',
                'deleted' => 'El comentari no s\'ha pogut eliminar',
            ],
            'needed' => [
                'user' => 'El paràmetre de l\'usuari és necessari',
                'establishment' => 'El paràmetre de l\'establimient és necessari',
                'text' => 'El paràmetre del text és neccessari'
            ],
            'no' => [
                'comments' => 'No hi ha cap comentari'
            ]
        ],
        'cookingTypes' => [
            'couldnt' => [
                'created' => 'El tipus de cuina no s\'ha pogut crear',
                'updated' => 'El tipus de cuina no s\'ha pogut actualitzar',
                'deleted' => 'El tipus de cuina no s\'ha pogut eliminar',
            ],
            'needed' => [
                'name' => 'El paràmetre de l\'usuari és necessari'
            ],
            'no' => [
                'cookingType' => 'No hi ha cap tipus de cuina'
            ]
        ],
        'establishments' => [
            'couldnt' => [
                'created' => 'L\'establiment no s\'ha pogut crear',
                'updated' => 'L\'establiment no s\'ha pogut actualitzar',
                'deleted' => 'L\'establiment no s\'ha pogut eliminar',
            ],
            'needed' => [
                'name' => 'El paràmetre del nom és necessari',
                'description_esp' => 'El paràmetre de la descripció amb español és necessari',
                'description_cat' => 'El paràmetre de la descripció amb català és necessari',
                'timetable_esp' => 'El paràmetre de l\'horari amb español és necessari',
                'timetable_cat' => 'El paràmetre de l\'horari amb català és necessari',
                'city' => 'El paràmetre de la ciutat  és necessari',
                'phone' => 'El paràmetre del telèfon és necessari',
                'web' => 'El paràmetre de la web és necessari',
                'price' => 'El paràmetre del preu és necessari',
                'cookingType' => 'El paràmetre del tipus de cuines és necesari'
            ],
            'no' => [
                'establishment' => 'No hi ha cap establiment'
            ]
        ],
        'photos' => [
            'couldnt' => [
                'created' => 'La foto no s\'ha pogut crear',
                'updated' => 'La foto no s\'ha pogut actualitzar',
                'deleted' => 'La foto no s\'ha pogut eliminar',
            ],
            'needed' => [
                'establishment' => 'El paràmetre del establiment és necessari',
                'name' => 'El paràmetre del nom és necessari',
                'route' => 'El paràmetre de la ruta és necessari',
                'altText' => 'El paràmetre del text alternatiu és necessari',
            ],
            'no' => [
                'photo' => 'No hi ha cap foto'
            ]
        ]
    ],
    'success' => [
        'comments' => [
            'created' => 'Comentari creat correctament',
            'updated' => 'Comentari actualitzat correctament',
            'deleted' => 'Comentari eliminat correctament'
        ],
        'cookingTypes' => [
            'created' => 'Tipus de cuina creat correctament',
            'updated' => 'Tipus de cuina actualitzat correctament',
            'deleted' => 'Tipus de cuina s\'ha eliminat correctament'
        ],
        'establishments' => [
            'created' => 'Establiment creat correctament',
            'updated' => 'Establiment actualitzat correctament',
            'deleted' => 'Establiment eliminat correctament'
        ],
        'photos' => [
            'created' => 'La foto s\'ha creat correctament',
            'updated' => 'La foto s\'ha actualitzat correctament',
            'deleted' => 'La foto s\'ha eliminat correctament'
        ]
    ],
    'menu' => [
        'establishments' => 'Establiments',
        'cookingTypes' => 'Tipus de cuina',
        'comments' => 'Comentaris',
        'photos' => 'Fotos'
    ],
    'toolTip' => [
        'selectMultiple' => 'Apreta Ctrl + click per seleccionar varies opcions'
    ]
];