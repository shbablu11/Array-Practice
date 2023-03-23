
<?php

//some string functions----------------------------------


//encript-decript password
/**
$password = 'sayed1234';
$encrPass = password_hash($password, PASSWORD_BCRYPT); //PASSWORD_ARGON2ID
//echo $encrPass;

var_dump(password_verify('sayed1234',$encrPass )); //only true or false, not showing pass
*/



//empty()

//eita shudu (name empty) kina check kore > true


/** 
$name ='';
var_dump(empty($name));  

if(empty($name))
{
   echo "true" ;
}
else{
    echo "false" ;
}
*/


//isset()

//eita nam dewa ache (name set) kina check kore > true
//NULL holeo false
 

/**
$name =NULL;
var_dump(isset($name)); 


if(isset($name))
{
   echo "true" ;
}
else{
    echo "false" ;
}
*/


//implode()
//eita array ke string e convert kore

/** 
$array = ['i', 'am', 'sayed'];
echo implode(' ',$array );  //join();
*/



//some array functions --------------------------------


//array()
/** 
$students = array('sayed', 'hossen', 'bablu');
*/

//compact()-------important-------
/** 
$studentName = 'Sayed';
$studentPayment = 5000;
$studentCourse = 'Web Dev';

var_dump(compact('studentName', 'studentPayment', 'studentCourse'));
*/


//count(); ,,, sizeof();
//ekta array te Total koita data ache, seita count kore

/** 
$course = [];
//echo count($course);

if(count($course) != 0)
{
    echo "Yes you confirmed";
}
else
{
    echo "no course selected";
}
*/



//array_diff();
//onek gulu array te difference ber kora hoi, update er jnno use hoi
/** 
$user =['name' => 'Sayed', 'email' => 'sayed@gmail.com'];

$user2 =['name' => 'Bablu', 'email' => 'sayed@gmail.com'];

$difference= array_diff($user2, $user);
print_r($difference);
*/


//pop and push-----from end side

//$arrayName =['a', 'b', 'c'];
//array_pop($arrayName);
//array_push($arrayName, 'd', 'e');


//array_unshift($arrayName, 'd', 'e'); ----- add item start side
//array_shift($arrayName)------delete from start


//array_rand(); use for making question type
/** 
$random= array_rand($arrayName, 2);
shuffle($random);
print_r($random);
*/


//array_reverse(); --- extention check
/** 
$fileName= 'hellow.zip';
$fileParts= explode('.',$fileName );
$reverse= array_reverse($fileParts);
print_r($reverse[0]);
*/


//in_array(); ---- search item in array
/** 
echo in_array('b',$arrayName); //true or fales
echo array_search('b',$arrayName); //for search with specific index details (0,1,2)
*/


//extention checker

/** 
$fileName= 'hellow.png';
$fileParts= explode('.',$fileName );
$reverse= array_reverse($fileParts);
$extention= $reverse[0];
$acceptable=['jpg', 'png', 'svg'];

//var_dump(in_array($extention,$acceptable));

if(in_array($extention,$acceptable))
{
    echo "accepted";
}else{
    echo "wrong file";
}
*/



//array_filter()

/** 
$nums =[12,31,50,205,400, 3];
$filte = array_filter($nums, function($data) //array_filter variable e rakte hoi
{

    if($data > 100)
    {
          if($data % 2 == 0)
          {
            return $data; //then create a new array itself, so need to store in a variable
          }
    }

});


print_r ($filte);
*/


//valid number checker

/** 
$phoneNumber = [
    '01812345678',
    '01787654321',
    '01999',
    '01335435436',
    '011897',
    '01556789012'
];

$validNumber = array_filter($phoneNumber, function($userNumber)
{
    if(strlen($userNumber) == 11)
    {
        return $userNumber;
    }
});

print_r($validNumber);
*/



//array_slice()

/** 
$arrayName =['a', 'b', 'c','d','e'];
$slice= array_slice($arrayName, 1,3); //store in a new variable for regenerated array
//1,3 mane b to d
//1 mane b to end

print_r($slice);
*/