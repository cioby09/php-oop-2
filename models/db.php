<?php

$products = [
    new Food("Expecial Cane Biscotti Premio", "Biscotti integrali per Cuccioli di tutte le taglie Expecial Dog Piccolini, ottima appetibilità ed elevata qualità garantite Made in Italy.", "400 g", "Cani", "https://arcaplanet.vtexassets.com/arquivos/ids/240047-1800-1800/expecial-cane-biscotti-premio.jpg?v=1770855353&quality=1&width=1800&height=1800", "Biscotti", "Mix di gusti"),
    new Kennels("Cuccia esterna per Cani Eco Lodge", "Cuccia per cani Eco Lodge da esterno ideato per proteggere il tuo amico a quattro zampe.", "1", "Cani", "https://arcaplanet.vtexassets.com/arquivos/ids/225623-1800-1800/p-a-y--canile-eco-lodge-large.jpg?v=1770855232&quality=1&width=1800&height=1800", "Esterno", "Casetta"),
    new Toys("Gioco per Cani Idrante", "Divertente e coloratissimo gioco per cani nella caratteristica forma di un idrante.", "1", "Cani", "https://arcaplanet.vtexassets.com/arquivos/ids/279418-1800-1800/camon-gioco-per-cani-idrante-in-tpr.jpg?v=1767887203&quality=1&width=1800&height=1800", "Giocattolo di gomma", "Foam TPR"),
    new Food("Virtus Kitten Native Seas", "Virtus Kitten Native Seas cibo secco per gattini ricco di salmone per la crescita e il corretto sviluppo.", "850g", "Gatti", "https://arcaplanet.vtexassets.com/arquivos/ids/224343-1800-1800/virtus-native-seas-kitten.jpg?v=1770889891&quality=1&width=1800&height=1800", "Croccantini", "Salmone"),
    new Kennels("Cuccia Montana", "Morbida cuccia per gatto perfetta per il riposo del tuo felino di casa. Misure del prodotto: 40X42X31CM.", "1", "Gatti", "https://arcaplanet.vtexassets.com/arquivos/ids/277880-1800-1800/zolux-cuccia-montana.jpg?v=1770218445&quality=1&width=1800&height=1800", "Interno", "Cuccia morbida"),
    new Toys("Gioco per Gatto Topo Piume", "Gioco per gatti Camon Gioco Topo Piume a forma di topolino, realizzato in fibra di alga. Dentro la confezione ci sono due forme, con un sonaglio per attirare la curiosità", "1", "Gatti", "https://arcaplanet.vtexassets.com/arquivos/ids/254901-1800-1800/Giochi-per-gatto-topolini.jpg?v=1770423184&quality=1&width=1800&height=1800", "Pupazzo", "Fibra di alga"),
];

try {
    $products[0]->setPrice(3.99);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[1]->setPrice(110.00);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[2]->setPrice(9.99);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[3]->setPrice(12.49);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[4]->setPrice(44.90);
} catch (Exception $err) {
    echo $err->getMessage();
}
try {
    $products[5]->setPrice(3.60);
} catch (Exception $err) {
    echo $err->getMessage();
}
