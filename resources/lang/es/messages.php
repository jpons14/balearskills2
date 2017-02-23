<?php
return [
    'errors' => [
        'comments' => [
            'couldnt' => [
                'created' => 'El comentario no ha podido ser creado',
                'updated' => 'El comentario no se ha podido actualizar',
                'deleted' => 'El comentario no se ha podido eliminar',
            ],
            'needed' => [
                'user' => 'El parámetro del usuario es necesario',
                'establishment' => 'El parámetro del establimiento es necesario',
                'text' => 'El parámetro del texto es necesario'
            ],
            'no' => [
                'comments' => 'No hay ningún comentario'
            ]
        ],
        'cookingTypes' => [
            'couldnt' => [
                'created' => 'El tipo de cocina no ha podido ser creado',
                'updated' => 'El tipo de cocina no se ha podido actualizar',
                'deleted' => 'El tipo de cocina no se ha podido eliminar',
            ],
            'needed' => [
                'name' => 'El parámetro del nombre del tipo de cocina es necesario'
            ],
            'no' => [
                'cookingType' => 'No hay ningún tipo de cocina'
            ]
        ],
        'establishments' => [
            'couldnt' => [
                'created' => 'El establecimiento no ha podido ser creado',
                'updated' => 'El establecimiento no se ha podido actualizar',
                'deleted' => 'El establecimiento no se ha podido eliminar',
            ],
            'needed' => [
                'name' => 'El parámetro del nombre del establecimiento es necesario',
                'description_esp' => 'El parámetro de la descripción en español del establecimiento es necesario',
                'description_cat' => 'El parámetro de la descripción en català es necesario',
                'timetable_esp' => 'El parámetro del horario en español del establecimiento es necesario',
                'timetable_cat' => 'El parámetro del horario en català del establecimiento es necesario',
                'city' => 'El parámetro de la ciudad del establecimiento es necesario',
                'phone' => 'El parámetro del teléfono del establecimiento es necesario',
                'web' => 'El parámetro de la web del establecimiento es necesario',
                'price' => 'El parámetro del precio del establecimiento es necesario',
                'cookingType' => 'El parámetro de tipos de cocina del establecimiento es necesario'
            ],
            'no' => [
                'establishment' => 'No hay ningún establecimiento'
            ]
        ],
        'photos' => [
            'couldnt' => [
                'created' => 'La foto no ha podido ser creada',
                'updated' => 'La foto no se ha podido actualizar',
                'deleted' => 'La foto no se ha podido eliminar',
                'push' => 'La foto no se ha podido subir'
            ],
            'needed' => [
                'establishment' => 'El parámetro del establecimiento de la foto es necesario',
                'name' => 'El parámetro del nombre de la foto es necesario',
                'route' => 'El parámetro de la ruta de la foto es necesario',
                'altText' => 'El parámetro del texto alternativo de la foto es necesario',
            ],
            'no' => [
                'photo' => 'No hay ninguna foto'
            ]
        ]
    ],
    'success' => [
        'comments' => [
            'created' => 'Comentario creado correctamente',
            'updated' => 'Comentario actualizado correctamente',
            'deleted' => 'Comentario eliminado correctamente'
        ],
        'cookingTypes' => [
            'created' => 'Tipo de cocina creado correctamente',
            'updated' => 'Tipo de cocina actualizado correctamente',
            'deleted' => 'Tipo de cocina se eliminado correctamente'
        ],
        'establishments' => [
            'created' => 'Establimiento creado correctamente',
            'updated' => 'Establimiento actualizado correctamente',
            'deleted' => 'Establimiento eliminado correctamente'
        ],
        'photos' => [
            'created' => 'Foto creada correctamente',
            'updated' => 'Foto actualizada correctamente',
            'deleted' => 'Foto eliminada correctamente'
        ]
    ],
    'menu' => [
        'establishments' => 'Establecimientos',
        'cookingTypes' => 'Tipos de cocina',
        'comments' => 'Comentarios',
        'photos' => 'Foto'
    ],
    'toolTip' => [
        'selectMultiple' => 'Apreta Ctrl + click para seleccionar varias opciones'
    ]
];