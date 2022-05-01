<?php

namespace App\GraphQL\Mutations;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
final class ArticleMutator
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
    }

    public function create($rootValue, array $args, GraphQLContext $context)
    {
        $article = new \App\Models\Article($args);
        $context->user()->articles()->save($article);

        return $article;
    }
}
