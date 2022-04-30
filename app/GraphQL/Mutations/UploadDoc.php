<?php

namespace App\GraphQL\Mutations;

class UploadDoc
{
    /**
     * @param  null  $_
     * @param  array<string, mixed>  $args
     */
    public function __invoke($_, array $args)
    {
      $file = $args['image'];
  return $file->storePublicly('public/upload');
    }
}
