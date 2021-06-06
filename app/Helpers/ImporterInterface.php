<?php

namespace App\Helpers;

interface ImporterInterface {
    public function fetch();
    public function load();
}