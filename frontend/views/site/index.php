<?php

use Faker\Factory as Faker;
use common\models\UserTest;


$this->title = 'Test';
?>
<?php
$users = createUser(10000);
// table name, column names, column values
Yii::$app->db->createCommand()->batchInsert('user_test',
    ['login', 'password', 'first_name', 'last_name', 'email'],
    $users)->execute(Yii::$app->db->close());


function createUser($countUser)
{
    $arrUser = [];
    $faker = Faker::create('ru_RU');
    for ($i = 0; $i < $countUser; $i++) {
        $arrUser[] =
            [
                'login' => $faker->userName,
                'password ' => password_hash($faker->md5, PASSWORD_DEFAULT),
                'first_name ' => $faker->firstNameMale,
                'last_name ' => $faker->lastName,
                'email ' => $faker->email,
            ];
    }
    return $arrUser;
}


//for ($i = 0; $i < 10000; $i++):
//    $userTest = new UserTest();
//    $userTest->login = $faker->userName;
//    $userTest->password = password_hash($faker->md5, PASSWORD_DEFAULT);
//    $userTest->first_name = $faker->firstNameMale;
//    $userTest->last_name = $faker->lastName;
//    $userTest->email = $faker->email;
//    $userTest->save();
//endfor;
//