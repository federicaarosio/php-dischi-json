<?php

// Pagina a cui arrivo via api. Espone il file json


// recupero i dati
$discs = file_get_contents('./json/dischi.json');
//avviso il browser che riceverà un .json
header('Content-Type: application/json');
//non devo fare encode, il file è già json
echo $discs;