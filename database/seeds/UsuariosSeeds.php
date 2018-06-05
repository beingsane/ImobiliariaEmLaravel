<?php

use App\User;
use Illuminate\Database\Seeder;

class UsuariosSeeds extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$usuario = new User();
		$usuario->name = "Sandro Torres";
		$usuario->email = "sj.torres@live.com";
		$usuario->password = bcrypt("123456");
		$usuario->save();
	}
}
