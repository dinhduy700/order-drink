<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Product;
use App\Models\Test;
use App\Scopes\IsActive;

class TestController extends Controller
{
    public function defaultAttributeValue(Request $request)
    {
        $user = new User();
        dump(__METHOD__);
        dump($user);

        $user = new User(['status' => 'inactive']);
        dump(__METHOD__);
        dump($user);
    }

    public function bootEloquentTrait()
    {
        $product = new Product();
        $product->name = 'test-bootEloquentTrait-001';
        $product->price = 999;

        $product->save();
    }

    public function appends()
    {
        $product = Product::find(1);

        // $json = $product->toJson();
        dd($product->toArray());
    }

    public function invisileDatabaseColumns()
    {
        // $test = Test::query()->first();
        $test = Test::query()->select('password')->first();

        dd($test);
    }
    public function queryTimeCasting()
    {
        $test = Test::query()
            ->withCasts([
                'status' => 'boolean',
            ])
            ->first();
        dd($test->status);  /* ghi như vầy mới ra boolean */
    }

    public function tappableScope()
    {
        $result = Test::query()
            ->tap(new IsActive)
            ->get();

        dd($result);
    }
}
