<?php

namespace App\Http\Controllers\User;
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

 /**
 * @OA\Info(
 *     version="1.0",
 *     title="Example for response examples value"
 * )
 */
class UserController extends Controller
{

    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }
 /**
 * @OA\Post(
 *     path="/api/users",
 *     summary="Create a new user",
 *     tags={"Users"},
 *     @OA\Response(response="201", description="User created successfully"),
 *     @OA\Response(response="401", description="Unauthenticated"),
 * )
 */
public function index()
{
    // Logika untuk mengambil semua data 
    $users = $this->user->getsUser();
        return response()->json(["rows"=>$users]);
}

/**
 * @OA\Post(
 *     path="/api/users",
 *     summary="Create a new user",
 *     tags={"Users"},
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="User ID",
 *         required=true,
 *         @OA\Schema(type="integer")
 *     ),
 *     @OA\Response(response="201", description="User created successfully"),
 *     @OA\Response(response="401", description="Unauthenticated"),
 * )
 */
}
