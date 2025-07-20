<?php

namespace App\Http\Controllers\Api\Auth;

use App\DTO\Auth\LoginData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Http\Resources\UserResource;
use App\Services\Auth\LoginService;
use Illuminate\Http\JsonResponse;

class LoginController extends Controller
{
    public function __construct(private readonly LoginService $loginService) {}

    public function __invoke(LoginRequest $request): JsonResponse
    {
        $dto = LoginData::fromArray($request->validated());
        $data = $this->loginService->login($dto);

        return response()->json([
            'token' => $data['token'],
            'user' => new UserResource($data['user']),
        ]);
    }
}
