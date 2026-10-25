<?php

namespace Tests\Feature;

use Tests\TestCase;

class LoginPageTest extends TestCase
{
    public function test_login_page_displays_the_campus_sign_in_form(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertViewIs('auth.login')
            ->assertSee('Akses Riset &amp; Fasilitas Kampus', false)
            ->assertSee('name="identifier"', false)
            ->assertSee('autocomplete="current-password"', false)
            ->assertSee('Masuk dengan Akun SSO Kampus');
    }
}
