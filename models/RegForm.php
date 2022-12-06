<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $patronymic
 * @property string $login
 * @property string $email
 * @property string $password
 * @property int $admin 0 клиент 1 админ
 *
 * @property Orders[] $orders
 */
class RegForm extends User
{
    public $password_repeat;
    public $rules;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'login', 'email', 'password','password_repeat','rules'], 'required','message'=>'Поля обязательные для заполнения'],
            [['name','surname','patronymic'], 'match', 'pattern' => '/^[А-Яа-я\s\-]{1,}$/u', 'message'=> 'Только кирилица тире и пробел'],
            [['admin'], 'integer'],
            ['login', 'match', 'pattern' => '/^[A-Za-z]{4,}$/u', 'message'=> 'Только латынские буквы'],
            ['email','unique','message'=>'Email занят'],
            ['login','unique','message'=>'Логин занят'],
            ['email', 'email','message'=>'Некорректный email'],
            ['password_repeat', 'compare', 'compareAttribute' => 'password', 'message'=>'Пароли должны совподать'],
            ['rules', 'boolean'],
            ['rules', 'compare', 'compareValue' => true, 'message'=>'Необходимо согласиться'],
            [['name', 'surname', 'patronymic', 'login', 'email', 'password'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
            'login' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'admin' => 'Admin',
            'password_repeat' => 'Повторите пароль',
            'rules' => 'Даю согласие на обработку данных',
        ];
    }





}
