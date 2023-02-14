<?php
session_start();
// Организуйте хранение паролей и логинов ваших пользователей в отдельном файле.
// Пароли должны храниться в зашифрованном виде.
$persons = [
	['name' => 'Админ', 'login' => 'Admin', 'password' => 'SkillFactory_2023'],
	['name' => 'Анна', 'login' => 'Ann', 'password' => 'Relax_Spa_Top_123'],
	['name' => 'Мария', 'login' => 'Maria', 'password' => 'Mary_0420'],
	['name' => 'Василиса', 'login' => 'Vasilisa', 'password' => '05021991_passworD'],
	['name' => 'Маргарита', 'login' => 'Margo', 'password' => 'Margosha_1613'],
];
