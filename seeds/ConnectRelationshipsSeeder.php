<?php

use App\User;
use sanju\LaravelRoles\Models\Role;
use sanju\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class ConnectRelationshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

	    /**
	     * Get Available Permissions
	     *
	     */
		$permissions = Permission::all();

	    /**
	     * Attach Permissions to Roles
	     *
	     */
        $roleAdmin = Role::where('slug', '=', 'admin')->first();
		foreach ($permissions as $permission) {
			$roleAdmin->attachPermission($permission);
		}

    }

}