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
}