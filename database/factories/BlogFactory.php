<?php

use Faker\Generator as Faker;

$factory->define(App\blog::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->text(20), //添加生成标题填充20个英文字符
        'body' =>$faker->text, //添加内容，默认200个英文字符
    ];
});
