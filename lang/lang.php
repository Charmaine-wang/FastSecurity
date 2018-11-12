<?php
$languages = [
'eng' =>
['hello' => 'Hello',
'login' => 'Login',
'register' => 'Register',
'content' => "History Saab started life in 1937 in Trollhättan, Sweden, as an aeroplane manufacturer to provide aircraft for the Swedish Air Force, just as Europe was steeling itself for another war. The company's full name was Svenska Aeroplan Aktiebolaget, giving the world the acronym Saab. The head office soon moved to the Swedish university town of Linköping, where this massive company has its largest operation today. It was there in 1945, amid various dreams of diversification, that a project to develop motor cars got underway. Today we are starting a new chapter. Fast Security, FS. Is the future car."
],
'swe' =>
['hello' => 'Hej',
'login' => 'Logga in',
'register' => 'Registrera',
'content' => 'Historia Saab startade livet 1937 i Trollhättan som en flygplanstillverkare för att ge flygplan till det svenska flygvapnet, precis som Europa stallade sig för ett annat krig. Bolagets fulla namn var Svenska Aeroplan Aktiebolaget, vilket gav världen akronym Saab. Huvudkontoret flyttade snart till den svenska universitetsstaden Linköping, där detta massiva företag har sin största verksamhet idag. Det var där 1945, bland olika drömmar om diversifiering, att ett projekt för att utveckla bilar började. Idag börjar vi ett nytt kapitel. Snabb säkerhet, FS. Är framtiden bil.'
]
];

if(isset($_GET['user_lang'])){
   $lang = trim(filter_var($_GET['user_lang'], FILTER_SANITIZE_STRING));
 } else {
   $lang = 'eng';
 };
