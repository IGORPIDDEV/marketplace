<?php

namespace App\Http\Controllers\Api\Auth;

use App\DTO\Auth\RegisterData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\RegisterRequest;
use App\Http\Resources\UserResource;
use App\Services\Auth\RegisterService;

class RegisterController extends Controller
{
    public function __construct(private readonly RegisterService $registerService) {}

    public function __invoke(RegisterRequest $request): UserResource
    {
        $dto = RegisterData::fromArray($request->validated());
        $user = $this->registerService->register($dto);

        return new UserResource($user);
    }
}
