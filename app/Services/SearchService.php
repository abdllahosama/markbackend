<?php

namespace App\Services;

class SearchService
{
    /**
     * @param $id
     * @param $quantity
     * @param $type
     * @return void
     */
    public function __invoke($item, $request, $searchableColumns, $relationSearchableColumn): void
    {
        $search = $request->get('search');
        $items = $item->where(function ($query) use ($searchableColumns, $search, $relationSearchableColumn) {
            $i = 1;

            foreach ($searchableColumns as $column) {
                $isFirstColumn = $i === 1;

                if ($isFirstColumn) {
                    $query->whereRaw('LOWER(' . $column . ') like ?', ['%' . strtolower($search) . '%']);
                } else {
                    $query->orWhereRaw('LOWER(' . $column . ') like ?', ['%' . strtolower($search) . '%']);
                }
                // foreach ($relations as $relation) {

                //     $query->orwhereHas($relation, function ($q) use ($relationSearchableColumn, $search) {
                //         $q->where($relationSearchableColumn, 'like', '%' . $search . '%');
                //     });
                // }

                $i++;
            }
        });
    }
}
