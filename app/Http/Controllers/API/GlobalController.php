<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use Illuminate\Http\JsonResponse;
use App\Models\Compound;
use App\Models\Location;
use App\Models\Type;
use App\Models\Unites;

class GlobalController extends BaseController
{
    public function switchStatus(int $id, string $model): JsonResponse
    {
        switch ($model){
            case 'type':
                $data = Type::findOrFail($id);
                $data->isActive = !$data->isActive;
                $data->save();
                break;
            case 'location':
                $data = Location::findOrFail($id);
                $data->isActive = !$data->isActive;
                $data->save();
                break;
            case 'compound':
                $data = Compound::findOrFail($id);
                $data->isActive = !$data->isActive;
                $data->save();
                break;
            case 'unite':
                $data = Unites::findOrFail($id);
                $data->isActive = !$data->isActive;
                $data->save();
                break;
        }
        return $this->sendResponse("",$model." status updated");

    }
}
