<?php
$languages = [
'eng' =>
  ['hello' => 'Hello',
  'login' => 'Login',
  'register' => 'Register',
  'content' => "History Saab started life in 1937 in Trollhättan, Sweden, as an aeroplane manufacturer to provide aircraft for the Swedish Air Force, just as Europe was steeling itself for another war. The company's full name was Svenska Aeroplan Aktiebolaget, giving the world the acronym Saab. The head office soon moved to the Swedish university town of Linköping, where this massive company has its largest operation today. It was there in 1945, amid various dreams of diversification, that a project to develop motor cars got underway. Today we are starting a new chapter. Fast Security, FS. Is the future car.",
  'exterior' => 'The FastSecurity motorcycle gets you 132 miles worth of adventure on a single charge. It’s carbon composite body is both lightweight and aerodynamic, in tandem with it’s high-end suspension system - FastSecurity is speed and comfort combined in excellence.',
  'interior' => 'The high-end technology inside of the FastSecurity puts you In front of a robust titanium steering system and on smooth alcantara seating. The integrated AR-glasses lets you experience the world in a new way - all connected to your FastSecurity motorcycle.',
  'register' => 'To recieve more info about FastSecurity and local event invites, enter your info below',
  'brochure' => 'Thank you for registrating. Download our brouchure below to learn more about Fast Security',
  'firstPage' =>
            ['firstHeader' => 'On the go for a future experience',
            'btn' => 'Start your journey',
            'navbar' =>
                      ['home' => 'Home',
                      'exterior' => 'Exterior',
                      'interior' => 'Interior',
                      'performance' => 'Performance',
                      'accessories' => 'Accessories'],
              ],
  'weraWang' =>
    ['weraHeader' => 'Accessories from Wera Wang',
    'btn2' => 'Start your journey'],
    'features' =>
      ['featuresHeader' => 'Feeling special with personalized features',
      'btn3' => 'Start your journey',
      'exterior' => 'The FastSecurity motorcycle gets you 132 miles worth of adventure on a single charge. It’s carbon composite body is both lightweight and aerodynamic, in tandem with it’s high-end suspension system - FastSecurity is speed and comfort combined in excellence.',
      'interior' => 'The high-end technology inside of the FastSecurity puts you In front of a robust titanium steering system and on smooth alcantara seating. The integrated AR-glasses lets you experience the world in a new way - all connected to your FastSecurity motorcycle.',
      'featureColor' => 'Choose your own colour.'],

'timeline'=>
              ['timeHeader' => 'Technological milestones',
              '1937' => 'SAAB started in Trollhättan, Sweden',
              '1946' => 'The first SAAB car is born. The SAAB 92',
              '1978' => 'The SAAB 900 marks a new form factor and power.',
              '1997' => 'The SAAB 9-5 is unveiled. A car for a new era.',
              '2010' => 'Second generation SAAB 9-5 is made a reality.',
              '2020' => 'SAAB enters the future with the FastSecurity']


],
'swe' =>
  ['hello' => 'Hej',
  'login' => 'Logga in',
  'register' => 'Registrera',
  'content' => 'Historia Saab startade livet 1937 i Trollhättan som en flygplanstillverkare för att ge flygplan till det svenska flygvapnet, precis som Europa stallade sig för ett annat krig. Bolagets fulla namn var Svenska Aeroplan Aktiebolaget, vilket gav världen akronym Saab. Huvudkontoret flyttade snart till den svenska universitetsstaden Linköping, där detta massiva företag har sin största verksamhet idag. Det var där 1945, bland olika drömmar om diversifiering, att ett projekt för att   utveckla bilar började. Idag börjar vi ett nytt kapitel. Snabb säkerhet, FS. Är framtiden bil.',
  'exterior' => 'FastSecurity motorcykel får dig 132 miles värt äventyr på en enda avgift. Det är kolkomposit Kroppen är både lätt och aerodynamisk, i kombination med sin avancerade upphängningssystem - FastSecurity är snabb och säker komfort kombinerad i excellens.',
  'interior' => 'Den avancerade tekniken inuti av FastSecurity sätter dig Framför en robust titan
  styrsystem och slät alcantara sittplatser. Den integrerade AR-glasögon låter dig uppleva världen på ett nytt sätt - alla anslutna till din FastSecurity-motorcykel.',
  'register' => '
  För att få mer information om FastSecurity och lokala evenemangsinbjudningar, skriv in din information nedan',
  'brochure' => 'Tack för registreringen. Ladda ner vår brouchure nedan för att lära dig mer om snabb säkerhet',
  'timeline'=>
            ['timeHeader' => 'Teknologiska milstolpar',
            '1937' => 'SAAB startade i Trollhättan, Sverige',
            '1946' => 'Den första SAAB bilen är född. SAAB 92',
            '1978' => 'SAAB 900 markerar en ny formfaktor och effekt.',
            '1997' => 'SAAB 9-5 presenteras. En bil för en ny era.',
            '2010' => 'Andra generationens SAAB 9-5 är en realitet.',
            '2020' => 'SAAB går in i framtiden med FastSecurity']
]
];



['productFolder' =>
  ['register' => 'To recieve more info about FastSecurity and local event invites, enter your info below',
  'brochure' => 'Thank you for registrating. Download our brouchure below to learn more about Fast Security',
  'name' => 'Name',
  'email' => 'E-mail',
  'register' => 'Register Now',
  'download' => 'Download your brouchure here',
  'back' => 'Take me back',
  'follow' => 'Follow fast security']
];


['firstPage' =>
  ['firstHeader' => 'On the go for a future experience',
  'btn' => 'Start your journey',
  'navbar' =>
            ['home' => 'Home',
            'exterior' => 'Exterior',
            'interior' => 'Interior',
            'performance' => 'Performance',
            'accessories' => 'Accessories'],
]
];


['weraWang' =>
  ['weraHeader' => 'Accessories from Wera Wang',
  'btn2' => 'Start your journey']
];



['features' =>
  ['featuresHeader' => 'Feeling special with personalized features',
  'btn3' => 'Start your journey',
  'exterior' => 'The FastSecurity motorcycle gets you 132 miles worth of adventure on a single charge. It’s carbon composite body is both lightweight and aerodynamic, in tandem with it’s high-end suspension system - FastSecurity is speed and comfort combined in excellence.',
  'interior' => 'The high-end technology inside of the FastSecurity puts you In front of a robust titanium steering system and on smooth alcantara seating. The integrated AR-glasses lets you experience the world in a new way - all connected to your FastSecurity motorcycle.',
  'featureColor' => 'Choose your own colour.']
];













if(isset($_GET['user_lang'])){
   $lang = trim(filter_var($_GET['user_lang'], FILTER_SANITIZE_STRING));
 } else {
   $lang = 'eng';
 };
