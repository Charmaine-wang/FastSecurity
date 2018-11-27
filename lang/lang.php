<?php
$languages = [
  'eng' =>
    ['header' =>
              ['firstHeader' => 'FAST SECURITY',
               'veraHeader' => 'Accessories from',
               'featuresHeader' => 'Feeling special with personalized features',
               'timeHeader' => 'Technological'. '<br>'. 'milestones',
               'featureColor' => 'Choose your own colour.',
               'exteriorHeader' => 'Exterior.',
               'interiorHeader' => 'Interior.',
               'folder' => 'Productfolder',
               'registerHeader' => 'create your unique adventures.',
               'downHeader' => 'Continue learning more!',
               'downDesk'=> 'Thank you for registrating.'],
    'navbar' =>
              ['home' => 'Home',
               'exterior' => 'Exterior',
               'interior' => 'Interior',
               'performance' => 'Performance',
               'accessories' => 'Accessories'],
  'content' =>
              ['firstPage' => 'On the go for a future experience',
               'exterior' => 'The FastSecurity motorcycle gets you 132 miles worth of adventure on a single charge. It’s carbon composite body is both lightweight and aerodynamic, in tandem with it’s high-end suspension system - FastSecurity is speed and comfort combined in excellence.',
               'interior' => 'The high-end technology inside of the FastSecurity puts you In front of a robust titanium steering system and on smooth alcantara seating. The integrated AR-glasses lets you experience the world in a new way - all connected to your FastSecurity motorcycle.',
               'register' => 'To recieve more info about FastSecurity™ and local event invites enter your info below',
               'brochure' => 'Download our brouchure below to learn more about Fast Security',],
  'button' =>
              ['btn' => 'Start your journey',
               'reserve' => 'Reserve My Fast Security',
              'btnFollow' => 'Follow fast security',
              'register' => 'Register now',
              'btnBack' => 'Take me back',
              'btnDown' => 'Download your brouchure here']
    ],
  'swe' =>
    ['header' =>
              ['firstHeader' => 'Fast'. '<br>'. 'Security',
               'veraHeader' => 'Tillbehör från.',
               'featuresHeader' => 'Känner speciellt med personliga funktioner.',
               'timeHeader' => 'Teknologiska'. '<br>'. 'milstolpar.',
               'exteriorHeader' => 'Exteriör.',
               'interiorHeader' => 'Interiör.',
               'featureColor' => 'Känner speciellt med personliga funktioner',
               'folder' => 'Produktmapp',
               'registerHeader' => 'skapa dina unika äventyr.',
               'downHeader' => 'Fortsätt lära dig mer!',
               'downDesk'=> 'Tack för registreringen.'],
    'navbar' =>
              ['home' => 'Hem',
               'exterior' => 'Exteriör',
               'interior' => 'Interiör',
               'performance' => 'Prestanda',
               'accessories' => 'Tillbehör'],
  'content' =>
              ['firstPage' => 'På resan för en framtida upplevelse',
               'exterior' => 'FastSecurity motorcykel får dig 132 miles äventyr av ett äventyr på en enda avgift. Det är kolkompositkroppen både lätt och aerodynamiskt, i kombination med det avancerade upphängningssystemet. FastSecurity kombinerar snabbhet och komfort i toppkvalitet.',
               'interior' => 'Den avancerade tekniken inuti FastSecurity sätter dig framför ett robust titansystem och slät alcantara sittplatser. De integrerade AR-glasögonen låter dig uppleva världen på ett nytt sätt - alla anslutna till din FastSecurity-motorcykel.',
               'register' => 'För att få mer information om FastSecurity och lokala evenemangsinbjudningar, skriv in din information nedan',
               'brochure' => 'Ladda ner vår brouchure nedan för att lära dig mer om Fast Security'],
  'button' =>
              ['btn' => 'Börja din resa',
               'reserve' => 'Boka min Fast Security',
              'btnFollow' => 'Följ fast security',
              'register' => 'Registrera nu',
              'btnBack' => 'Ta mig tillbaka',
              'btnDown' => 'Ladda ner din brouchure här']
    ],
  ];


if(isset($_GET['lang'])){
   $lang = trim(filter_var($_GET['lang'], FILTER_SANITIZE_STRING));
 } else {
   $lang = 'eng';
 };


 $header = $languages[$lang]['header'];
 $navbar = $languages[$lang]['navbar'];
 $content = $languages[$lang]['content'];
 $btn = $languages[$lang]['button'];
