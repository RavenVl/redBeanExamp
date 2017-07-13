<?php
function dump($what){
    echo '<pre>';print_r($what);echo '</pre>' ;
}
require_once ('rb/rb.php');
R::setup('mysql:host=127.0.0.1;dbname=rbtest','root', '' );
R::freeze(false);//режим заморозки на продакшене true
if (!R::testConnection()){
    exit('Нет подключения к базе данных!');
}
//create
//$user = R::dispense('user');
//$user->name = 'Tony';
//$user->age = 28;
//$user->country = 'Russia';
//$user->autorise = true;
//R::store($user);


//read
//$user = R::load('user', 3);
//dump($user);
//$users = R::loadAll('user', array(1,3,4) );
//$users = R::find('user', 'age > ? order by age desc', array(20));
//foreach ( $users as $user) {
//    echo 'Name : ' . $user->name;
//    echo '<br>';
//}
//echo 'Count records  = ' . R::count('user','age>?', array(19));

//update
//$user = R::load('user', 3);
//$user->country ='Kenia';
//R::store($user);

//delete
//$user = R::load('user', 3);
//R::trash($user);

//wipe nuke


R::close();