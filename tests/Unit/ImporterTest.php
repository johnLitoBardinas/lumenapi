<?php

use App\Providers\Importer;

class DataImporterTest extends TestCase
{
    // protected $data_importer;

    // protected function setUp(): void {
    //     parent::setUp();
    //     $this->data_importer = app(Data_Importer::class);
    // }

    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function that_console_command_exists()
    {
    }

    /** @test */
    public function that_data_importer_can_perform_api_call()
    {
        $mocked = Mockery::mock(Importer::class);
        $mocked->shouldReceive('fetch')->once()->andReturn('fetched');

        dd($mocked);

        // $apiEndpoint = 'https://randomuser.me';
        // $importer = Mockery::mock();
        // $importer->shouldReceive('fetch')->withArgs($apiEndpoint)->andReturn([
        //     'result' => [],
        //     'info'   => []
        // ]);
    }

    public function that_data_importer_can_save_to_db_customers_from_api_call()
    {
        # code...
    }

    public function that_data_importer_can_update_existing_user_email_automatically()
    {
        # code...
    }
}


/***
Missing concept that not yet understand.

1. Mocking the API Test
2. Laravel Doctrine shit
3. Executing the command then saving it to the laravel doctrine or any Database with minimal impact in the codebase.


 */