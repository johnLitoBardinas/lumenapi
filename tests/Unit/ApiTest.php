<?php

class ApiTest extends TestCase
{
    /** @test */
    public function that_customers_endpoint_exists()
    {
        $this->get('/customers');
        $this->assertResponseStatus(200);
    }

    /** @test */
    public function that_customers_endpoint_with_query_parameter_exists()
    {
        $this->get('/customers/1');
        $this->assertResponseStatus(200);
    }

}
