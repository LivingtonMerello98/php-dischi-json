<?php

$albums = [
    [
        "image" => "https://upload.wikimedia.org/wikipedia/en/3/3b/Dark_Side_of_the_Moon.png",
        "album" => "Dark Side of the Moon",
        "location" => "Abbey Road Studios",
        "band" => "Pink Floyd",
        "year" => 1973
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBljlXRSY2eruEQQGu1iH4qJQQGdaIEbNutNplkQfTQPyA8vbK6MD8zxvk56101gI-IB4&usqp=CAU",
        "album" => "A Night at the opera",
        "location" => "Abbey Road Studios",
        "band" => "Queen",
        "year" => 1975
    ],
    [
        "image" => "https://upload.wikimedia.org/wikipedia/commons/b/be/Acdc_backinblack_cover.jpg",
        "album" => "Back in Black",
        "location" => "Compass Point Studios",
        "band" => "AC/DC",
        "year" => 1980
    ],
    [
        "image" => "https://m.media-amazon.com/images/I/81gsnp5BwWL._UF1000,1000_QL80_.jpg",
        "album" => "Thriller",
        "location" => "Westlake Recording Studios",
        "band" => "Michael Jackson",
        "year" => 1982
    ],
    [
        "image" => "https://m.media-amazon.com/images/I/A1kdUpgPYqL._UF1000,1000_QL80_.jpg",
        "album" => "Rumours",
        "location" => "Record Plant",
        "band" => "Fleetwood Mac",
        "year" => 1977
    ],
    [
        "image" => "https://upload.wikimedia.org/wikipedia/en/2/26/Led_Zeppelin_-_Led_Zeppelin_IV.jpg",
        "album" => "Led Zeppelin IV",
        "location" => "Headley Grange",
        "band" => "Led Zeppelin",
        "year" => 1971
    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLZWE4DwtB32k7KZA_uO4k3xb2iqOFoLWqnw&s",
        "album" => "The Wall",
        "location" => "Super Bear Studios",
        "band" => "Pink Floyd",
        "year" => 1979
    ],
    [
        "image" => "https://i.scdn.co/image/ab67616d0000b27341eb08284b8d4eea7777f0ff",
        "album" => "Hotel California",
        "location" => "Criteria Studios",
        "band" => "Eagles",
        "year" => 1976
    ]

];

// Imposto l'intestazione Content-Type a application/json
header('Content-Type: application/json');

//rendo l array in php un json
echo json_encode($albums);
