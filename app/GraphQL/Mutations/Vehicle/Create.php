<?php

namespace App\GraphQL\Mutations\Vehicle;

use App\Models\Vehicle;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class Create
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
        $vehicle = Vehicle::create([
            'user_id' => $args['user_id'],
            'registration_number' => $args['registration_number'],
            'year_of_manufacture' => $args['year_of_manufacture'],
            'type' => $args['type'],
            'tonnage' => $args['tonnage']
        ]);

        return [
            'message' => 'Vehicle Created Successfully',
            'vehicle' => $vehicle
        ];
    }
}
