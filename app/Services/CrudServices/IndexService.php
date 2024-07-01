<?php

namespace App\Services\CrudServices;

use App\Services\BaseService;
use App\Services\SearchService;
use Illuminate\Support\Facades\Validator;

class IndexService extends BaseService
{
    public function __invoke($request, $listRequest, $model, $searchableColumns, $relations, $relationSearchableColumn, $listResorse, $filters = [], $sorting = [])
    {
        $validation = new $listRequest();
        $rules = $validation->rules();
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) return $validator->validate();
        // prepare model
        $items = $model::query()->with($relations);

        // $items = Customers::all();
        // if search

        // sort by
        $sortBy = 'id';
        $sort_direction = 'desc';
        if ($request->has('sort_by')) {
            $sortDirValid = ['asc', 'desc'];
            $sort_direction = $request->has('sort_direction') && in_array($request->sort_direction, $sortDirValid)  ? $request->sort_direction : 'desc';
            if ($request->has('sort_by') && in_array($request->sort_by, $sorting)) {
                $sortBy = $request->sort_by;
            }
        }
        $items->orderBy($sortBy, $sort_direction);

        if ($request->has('search')) {
            $search = new SearchService;
            $search($items, $request, $searchableColumns, $relationSearchableColumn);
        }

        if ($filters && count($filters) > 0) {
            foreach ($filters as $filter) {
                if (request()->$filter && request()->$filter != '') {

                    $items = $items->where($filter, request()->$filter);
                }
                if (
                    request()->has('filter.' . $filter) &&
                    request()->filter[$filter] != null &&
                    request()->filter[$filter] != ''
                ) {
                    $items = $items->where($filter, request()->filter[$filter]);
                }
            }
        }

        if ($items) {
            $items = $items->paginate($request->limit ?? 10);
        }

        // resolve collection
        $response = $listResorse::collection($items)->resolve();
        // build response
        $responseData = $this->createPaginationMeta($response, $items->currentPage(), $items->lastPage(), $items->total());
        // return data
        return $this->successResponse($responseData, null, 200);
    }
}
