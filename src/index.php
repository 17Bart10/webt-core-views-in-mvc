<?php

$template = file_get_contents("template.html");
$template2 = file_get_contents("index.html");

$hotels = array(
    array(
        "url" => "https://imgs.search.brave.com/MlstYjH43f_4dQZfpNk06EizzM8inXzceSHRogi1IJo/rs:fit:800:600:1/g:ce/aHR0cDovL3d3dy5l/YXJ0aGlucGljdHVy/ZXMuY29tL3dvcmxk/L2dlcm1hbnkvYmVy/bGluL2hvdGVsX2hp/bHRvbl84MDB4NjAw/LmpwZw",
        "title" => "Hotel Hilton",
        "description" => "Willkommen im Hilton! Unser Hotel bietet luxuriöse Zimmer und Suiten mit modernen Annehmlichkeiten und spektakulärem Blick auf die Stadt. Entspannen Sie in unserem Wellnessbereich oder trainieren Sie im Fitnessstudio. Genießen Sie feinste Küche in unseren Restaurants und veranstalten Sie erfolgreiche Meetings in unseren voll ausgestatteten Tagungsräumen. Unsere zentrale Lage bietet Ihnen einfachen Zugang zu den Sehenswürdigkeiten der Stadt und macht uns zur perfekten Wahl für Geschäfts- und Urlaubsreisende gleichermaßen."
    ),
    array(
        "url" => "https://imgs.search.brave.com/31ba9iNKrV6r2y6Tn3pVs3H2waZtt9hqOs0SMY73Hlo/rs:fit:800:600:1/g:ce/aHR0cDovL3d3dy5l/YXJ0aGlucGljdHVy/ZXMuY29tL3dvcmxk/L3R1cmtleS9tYXJt/YXJpcy9ibHVlX2Jh/eXNfaG90ZWxfJTI2/X2FwYXJ0bWVudHNf/ODAweDYwMC5qcGc",
        "title" => "Hotel Brixton",
        "description" => "Willkommen im Hotel Brixton! Unser charmantes Boutique-Hotel bietet gemütliche Zimmer und Suiten im Herzen der Stadt. Entspannen Sie in unserer gemütlichen Lounge oder erkunden Sie die Umgebung mit unseren Fahrrädern. Genießen Sie köstliche Speisen aus der Region in unserem Restaurant und lassen Sie sich von unserem freundlichen Personal umsorgen. Unsere zentrale Lage macht uns zum idealen Ausgangspunkt für Stadterkundungen."
    ),
    array(
        "url" => "https://imgs.search.brave.com/KO0NALnua-x3KXEtA_u3Pb3slZ328b1MZB0l8p4oNnY/rs:fit:800:600:1/g:ce/aHR0cDovL3d3dy5l/YXJ0aGlucGljdHVy/ZXMuY29tL3dvcmxk/L3R1cmtleS9tYXJt/YXJpcy9wcmVzdGln/ZV9ob3RlbF8lMjZf/YXBhcnRfODAweDYw/MC5qcGc",
        "title" => "Hotel Kontinental",
        "description" => "Willkommen im Hotel Kontinental! Wir bieten elegante Zimmer und Suiten mit zeitlosem Design und modernen Annehmlichkeiten. Entspannen Sie im Wellnessbereich oder trainieren Sie im Fitnessstudio. Unser Restaurant serviert köstliche Gerichte aus der regionalen und internationalen Küche. Unser engagiertes Personal steht Ihnen jederzeit zur Verfügung und sorgt dafür, dass Ihr Aufenthalt unvergesslich wird. Unsere Lage im Herzen der Stadt ermöglicht es Ihnen, die Sehenswürdigkeiten und Attraktionen bequem zu erreichen."
    )
);

$a = array();

foreach ($hotels as $hotel) {

    $erg = str_replace('!!hotelIMG!!', $hotel['url'], $template);
    $erg = str_replace('!!hotelTitle!!', $hotel['title'], $erg);
    $erg = str_replace('!!hotelDESC!!', $hotel['description'], $erg);
    $a[] = $erg;
}



$erg2 = str_replace('!!hotelPASTE!!',implode(' ', $a) , $template2);

echo $erg2;


