<?php 

$contacts = array(
array('prenom' => 'TOM', 'telephone' => '0240506252'),
array('prenom' => 'Catherine', 'telephone' => '0242506552'),
array('prenom' => 'Karine', 'telephone' => '0240206552')
); 

$contactJSON = json_encode($contacts);
header('Content-Type: text/json');
echo $contactJSON;



