<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/news/create')
                    ->assertSee('Admin Panel')
                    ->assertSee('Create/update news')
                    ->assertSee('Category')
                    ->select('category_id', 'havahava')
                    ->press('Save')
                    ->assertSee('The selected title is invalid.')
                    ->assertSee('News Title')
                    ->assertSee('Content')
                    ->assertSee('Submit');

        });
    }
}
