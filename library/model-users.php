<?php

function usersFetchAll()
{
	return  [
		[
			'id' => 24,
			'email' => 'student1@test.com',
			'password' => 'cc03e747a6afbbcbf8be7668acfebee5',
			'name' => 'Student1',
		],
		[
			'id' => 25,
			'email' => 'student2@test.com',
			'password' => 'cc03e747a6afbbcbf8be7668acfebee5',
			'name' => 'Student2',
		],
		[
			'id' => 35,
			'email' => 'zorica.mijatovic@cubes.rs',
			'password' => 'cubes123',
			'name' => 'Zorica Mijatovic',
		],
	];
}

function usersFetchOneById($id)
{
	foreach (usersFetchAll() as $user) {
		if ($user['id'] == $id) {
			return $user;
		}
	}

	return null;
}


function usersFetchOneByEmail($email)
{
	foreach (usersFetchAll() as $user) {
		if ($user['email'] == $email) {
			return $user;
		}
	}

	return null;
}


function usersCheckCredentials($email, $password)
{
	$user = usersFetchOneByEmail($email);

	if (!$user) {
		//nema usera sa prosledjenim email-om
		return false;
	}

	if ($user['password'] !== md5($password)) {
		//uneti password i korisnikov password se ne slazu
		return false;
	}

	return true;
}
