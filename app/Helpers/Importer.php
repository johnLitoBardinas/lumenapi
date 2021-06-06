<?php

namespace App\Helpers;

use App\Helpers\ImporterInterface;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

/**
 * Purpose of this class is to call to a third party API then store it to the DB
 *
 * In the DB It must have a Interface to follow so that it can change
 */
class Importer extends ServiceProvider implements ImporterInterface
{
    protected $url;

    public function __construct(string $url)
    {
      $this->url = $url;
    }

    protected $fields = [
        'first_name',
        'last_name',
        'email',
        'username',
        'gender',
        'city',
        'phone'
    ];

    /**
     * Fetch Data from the external URL
     */
    public function fetch()
    {
        try {
            return Http::get($this->url)->body();
        } catch (\Throwable $exception) {
            new \Exception('Their is a problem connecting to the API Server');
        }
    }

    /**
     * Load data from the Lumen-doctrine/ Database ?
     */
    public function load()
    {
        # code...
        return 'Test';
    }

    /** Save data to the database ?  */
    public function save()
    {
        return 'Saving Data into the DB';
    }

}
