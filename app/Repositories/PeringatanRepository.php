<?php

namespace App\Repositories;

use App\Models\Peringatan;
use App\Repositories\BaseRepository;

/**
 * Class PeringatanRepository
 * @package App\Repositories
 * @version May 24, 2021, 9:40 am UTC
*/

class PeringatanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kota',
        'isi'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Peringatan::class;
    }
}
