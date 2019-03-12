<?php

$menu =  [
    "administrador"=>[
        "nombre"=>"Administrador",
        "url"=>"#",
        "class"=>"otra_clase",
        "submenu"=>[
            [
                "nombre"=>"Dashboard",
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador",       
                "class"=>"",         
            ],[
                "nombre"=>"Usuarios",
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/usuarios",       
                "class"=>"",         
            ],[
                "nombre"=>"DIVIDER"
            ],[
                "nombre"=>"Importar",
                "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/importar",       
                "class"=>"",         
            ]
        ]
    ],
    "casas"=>[
        "nombre"=>"Casas",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/casas",       
        "class"=>"",
    ],
    "ninos"=>[
        "nombre"=>"Niños y niñas",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/ninos",
        "class"=>"",
    ],
    "inventario"=>[
        "nombre"=>"Productos",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/productos",       
        "class"=>"",
    ]
];


$modulos =  [
    "casas"=>[
        "nombre"=>"Casas",
        "url_marco"=>"casas/lista.php",
        "controlador"=>"app/controlador/admin_mdeamor/casas.php",
        "controlador_ws"=>"app/controlador/admin_mdeamor/casasws.php",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/casas",       
        "class"=>"",
    ],
    "ninos"=>[
        "nombre"=>"Niños y niñas",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/ninos",
        "class"=>"",
    ],
    "inventario"=>[
        "nombre"=>"Productos",
        "url"=>$jmyWeb->url_inicio(['return'=>true])."administrador/productos",       
        "class"=>"",
    ]
];