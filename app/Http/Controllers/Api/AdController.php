<?php

namespace App\Http\Controllers\Api;

use App\DTO\Ad\AdData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Ad\StoreAdRequest;
use App\Http\Requests\Api\Ad\UpdateAdRequest;
use App\Http\Resources\AdResource;
use App\Models\Ad;
use App\Services\Ad\AdService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class AdController extends Controller
{
    public function __construct(private readonly AdService $adService)
    {
        $this->middleware('auth:sanctum')->only(['store', 'update', 'destroy']);
    }

    public function index()
    {
        $ads = Ad::with([
            'translations',
            'category.translations',
            'attributes.attribute.translations'
        ])->get();

        return AdResource::collection($ads);
    }

    public function show(Ad $ad): AdResource
    {
        $ad->load([
            'translations',
            'category.translations',
            'attributes.attribute.translations'
        ]);

        return new AdResource($ad);
    }

    public function store(StoreAdRequest $request): AdResource
    {
        $ad = $this->adService->create(AdData::fromArray($request->validated()));
        return new AdResource($ad);
    }

    public function update(UpdateAdRequest $request, Ad $ad): AdResource
    {
        Gate::authorize('update', $ad);
        $updated = $this->adService->update(AdData::fromArray($request->validated()), $ad);
        return new AdResource($updated);
    }

    public function destroy(Ad $ad): Response
    {
        Gate::authorize('delete', $ad);
        $ad->delete();
        return response()->noContent();
    }
}
