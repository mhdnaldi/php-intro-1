<?php
// Soal 1
$biodata = [
    "name" => 'Naldi',
    "age" => 23,
    "hobbies" => ["Nonton Anime", "Baca Manga", "Ngoding", "Belajar"],
    "isMarried" => false,
    "schoolList" => [[
        "name" => "SD KEMALA BHAYANGKARI  MEDAN",
        "yearIn" => 2003,
        "yearOut" => 2009,
        "major" => null
    ],[
        "name" => "SMP HARAPAN 1 MEDAN",
        "yearIn" => 2009,
        "yearOut" => 2012,
        "major" => null
    ],[
        "name" => "SMA HARAPAN 1 MEDAN",
        "yearIn" => 2012,
        "yearOut" => 2015,
        "major" => 'IPA'
    ],[
        "name" => "UNIVERSITAS PRIMA INDONESIA MEDAN",
        "yearIn" => 2015,
        "yearOut" => 2019,
        "major" => 'TEKNIK INFORMATIKA'
    ]],
    "skills" => [[
        "skillName" => "ReactJS",
        "level" => "Advance",
    ],[
        "skillName" => "VueJS",
        "level" => "Advance",
    ],[
        "skillName" => "ExpressJS",
        "level" => "Advance",
    ],[
        "skillName" => "Firebase",
        "level" => "Beginner",
    ]],
    "interestInCoding" => true
];
   print_r($biodata);

   // Soal 2

   function averageUnScores($mtk, $bahasaIndonesia, $bahasaInggris, $ipa) {
       $average = ($mtk + $bahasaIndonesia + $bahasaInggris + $ipa) / 4;
       $average = round($average);
       $grade = null;
       print('<br/>');
       echo "Rata-rata {$average} <br/>";

       if($average <= 100 && $average >= 90) {
        echo "Grade A";
       } else if( $average <= 89 && $average >= 80) {
        echo "Grade B";
       } else if($average <= 79 && $average >= 70) {
        echo "Grade C";
       } else if($average <= 69 && $average >= 60 ) {
        echo "Grade D";
       } else if ($average <= 59 && $average >= 0) {
        echo "Grade E";
       };
   };
   averageUnScores(80,90,89,60);

// Soal 3
print('<br/>');

    $printSegitiga = 5;
    for($i = $printSegitiga; $i>=0; $i--) {
        for($j = 1; $j<=$i; $j++) {
            print($j);
        };
        print('<br/>');
    };

// Soal 4
    $data = [
        "id" => 1,
        "name" => 'Naldi',
        "username" => 'Mhdnaldi',
        "email" => "mhd.naldi@yahoo.com",
        "address" => [
            "street" => 'Jl. Brigjend Katamso',
            "suite" => 'No 3',
            "city" => 'Medan',
            "zipCode" => 20158,
        ],
        "phone" => 123,
        "website" => 'mantap-gan.com',
    ];

    ["street" => $a, "city" => $b] = $data['address'];
    print($a);
    print("<br/>");
    print($b);
