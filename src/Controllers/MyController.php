<?php
namespace App\Controllers;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="My First API", version="0.1")
 */


class MyController {

    /**
     * @OA\Get(
     *     path="/api/resource.json",
     *     @OA\Response(response="200", description="An example resource")
     * )
     */
    public function resource() {
        // ...
    }
}