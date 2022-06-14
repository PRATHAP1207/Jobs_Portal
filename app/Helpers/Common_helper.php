<?php

function CityData($city,$countryName){ 
  //print_r($countryName);
    $country= array('1'=>'Bangalore','2'=>'Chennai');
    
    $countryMax=(countryData($countryName));
   // print_r($countryMax);
    if(isset($country[$city])){
			          
    return $country[$city].", ". $countryMax;
}
}
function countryData($country){
  $countryValues= array('1'=>'India','2'=>'USA');
  if(isset($countryValues[$country])){
    return $countryValues[$country];
  }
}
function JobType($type){
  $JobTypes= array('1'=>'Full Time','2'=>'Part Time');
  if(isset($JobTypes[$type])){
    return $JobTypes[$type];
  }
}
function DescriptionDetails($empdata,$mode){
    $Common_model=new \App\Models\Common_model();
      //print_r($mode);
    $getEdu['eduData']=$Common_model->getEducation($empdata,$mode);
        // print_r($getEdu);
       return $getEdu ;
}


function getWorkLocation(){
  $location=[
    ['id' => '1', "name" => "Remote"],
    ["id"=> '2' , "name" => "Onsite"]
];
        return $location;
}

?>