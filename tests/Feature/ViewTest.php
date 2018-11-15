<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    private $adminPageLogin = 'auth/admin/login';
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAutenticacaoAdminRequerida()
    {
        \App\Models\Users\Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@email.com',
            'password' => bcrypt("123456")
        ]);
        $this->seeInDatabase('admins',['name'=>'Admin User']);
        // $acoesComAutenticacao = [
        //     action('Admin\UnityController@create'),
        //     action('Admin\UnityController@index'),
        //     action('Admin\UnityController@store'),
        // ];
        // foreach ($acoesComAutenticacao as $pg)
	    //     $this->visit('/login')->seePageIs($this->paginaLogin);
    }
}
