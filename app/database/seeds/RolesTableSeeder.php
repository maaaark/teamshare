<?php
//app/database/seeds/RolesTableSeeder.php:

class RolesTableSeeder extends Seeder {

    public function run()
    {
        // !!! All existing roles are deleted !!!
        DB::table('role_user')->truncate();
        DB::table('roles')->truncate();

        $user = User::where('email', 'marktomicki@gmail.com')->firstOrFail();
        $roleAdmin = Role::create(['name' => 'admin']);

        $user->roles()->attach($roleAdmin->id);
    }
}