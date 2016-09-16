<?php

namespace App\Repositories\Eloquent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Contracts\Repositories\TourUserRepository;
use App\Models\TourUser;
use App\Validators\TourUserValidator;

/**
 * Class TourUserRepositoryEloquent
 * @package namespace App\Repositories\Eloquent;
 */
class TourUserRepositoryEloquent extends BaseRepository implements TourUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return TourUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
