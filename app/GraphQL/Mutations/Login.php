<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Login
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {


           $user = User::where(['email'=>$args['email']])->first();
           if($user && Hash::check($args['password'], $user->password)){
            //$token =  $user->createToken('my-app-token')->plainTextToken;

            $token = $user->createToken($args['device'])->plainTextToken;
                return $token;
           }
    }
}
