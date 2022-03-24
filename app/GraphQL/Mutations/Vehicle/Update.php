<?php

namespace App\GraphQL\Mutations\Vehicle;

use App\Models\Vehicle;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Update
{
    /**
     * Return a value for the field.
     *
     * @param  @param  null  $root Always null, since this field has no parent.
     * @param  array<string, mixed>  $args The field arguments passed by the client.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Shared between all fields.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Metadata for advanced query resolution.
     * @return mixed
     */
    public function __invoke($root, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $vehicle = Vehicle::find($args['id']);

        $vehicle->update([
            'user_id' => $args['user_id'],
            'type' => $args['type'],
            'tonnage' => $args['tonnage']
        ]);

        return [
            'message' => 'Vehicle Updated Successfully',
            'vehicle' => $vehicle
        ];
    }
}
