<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MemoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
    	factory(App\Memo::class)->create([
    		'memo' => 'test'
    	]);
        $this->seeInDatabase('memos', ['memo' => 'test']);
    }
}
