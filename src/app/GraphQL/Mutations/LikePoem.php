<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

/**
 * Class LikePoem
 * @package App\GraphQL\Mutations
 */
class LikePoem
{
    /**
     * @param $rootValue
     * @param array $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return bool
     */
    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $user = auth()->user();
        if ($args['is_like']) {
            $user->likePoems()->syncWithoutDetaching($args['poem_id']);
        } else {
            $user->likePoems()->detach($args['poem_id']);
        }

        return $user->likePoems()->where('poem_id', $args['poem_id'])->exists();
    }
}
