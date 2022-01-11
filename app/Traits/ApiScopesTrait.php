<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Builder;

trait ApiScopesTrait{
    //Query Scope
    public function scopeIncluded(Builder $query)
    {

        if (empty(request('included'))) {
            return;
        }

        $relations = explode(',', request('included'));
        $allowIncluded = collect($this->allowIncluded);

        foreach ($relations as $key => $relationship) {
            
            if(!$allowIncluded->contains($relationship)){
                unset($relations[$key]);
            }

        }

        return $query->with($relations);
    }

    public function scopeGetOrPaginate(Builder $query)
    {
        if (request()->has('per_page')) {
            $perPage = intval(request('per_page'));

            return $query->paginate($perPage);
        }

        return $query->get();
    }

    public function scopeSort(Builder $query){
        if (empty(request('sort'))) {
            return;
        }

        $sortFields = explode(',', request('sort'));
        $allowSort = collect($this->allowSort);

        foreach ($sortFields as $key => $sortField) {
         
            $direction = 'asc';

            if (substr($sortField, 0, 1) == '-') {
                $direction = 'desc';
                $sortField = substr($sortField, 1);
            }

            if($allowSort->contains($sortField)){
                return $query->orderBy($sortField, $direction);
            }

        }
    }

    public function scopeFilter(Builder $query){
        if (empty(request('filter'))) {
            return;
        }

        $filters = request('filter');
        $allowFilter = collect($this->allowFilter);

        foreach ($filters as $key => $filter) {
            if($allowFilter->contains($key)){
                return $query->where($key, 'LIKE', '%' . $filter . '%');
            }
        }
    }
}