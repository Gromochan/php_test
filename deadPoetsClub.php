<?php
$who = [
        "H.P.Lovecraft" => ["books" =>["Call of Cthulhu" => 1982 , "The Shadow over Innsmouth" => 1936], "other" => ["email" => "darkAndEdgy@uspeakblehorror.com", "birthday" => 1890]],

        "Leo Tolstoy" => ["books"=>["War and Peace" => 1869 , "Anna Karenina"  => 1877], 
        "other" =>["email" => "IamLeoTolstoy@ThoLongerTheBetter.org", "birthday" => 1828],
        ],

        "Anton Chekhov" => ["books"=>["Fat and Thin" => 1883, "The Lady With the Dog" => 1899],
        "other" =>["email" => "Check@myforehead.ru", "birthday" => 1860]]
    ];

foreach($who as $key => $value){
  $author = $key;
  $email = $value['other']['email'];
  $birthday = $value["other"]["birthday"];
  echo "$author $email $birthday \n";
  
};
foreach($who as $key => $value){
  foreach($value["books"] as $key => $value){
    $name = $key;
    $year = $value;
    echo $name." ".$author." ".$value."\n";
  };
};
