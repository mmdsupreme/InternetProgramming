<?php
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Этот каталог должен содержать каждое из определений фабрики моделей для
| вашего приложение. предоставляют удобный способ генерировать новые
| моделировать экземпляры для тестирования / заполнения базы данных вашего приложения.
|
*/
$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\File::class, function (Faker $faker) {
    $name_file = "public/upload/".hash('md5',$faker->name);
    $email = $faker->safeEmail;
    return [
        'name_file' => $name_file,
        'description' => $faker->text(150),
        'email' => $email,
        'hash_user' => hash('md5',$name_file),
        'hash_file' =>hash('md5',$email),
    ];
});
