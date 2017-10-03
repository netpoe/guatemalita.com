<?php

namespace App\Entities\Facebook;

class Place
{
    public $name;
    public $location;
    public $city;
    public $country;
    public $latitude;
    public $longitude;
    public $street;
    public $zip;
    public $id;

    public function __construct(Array $place)
    {
        $this->name = $place['name'] ?? null;

        $this->id = $place['id'] ?? null;

        $location = $place['location'] ?? null;

        $this->city = $location['city'] ?? null;

        $this->country = $location['country'] ?? null;

        $this->latitude = $location['latitude'] ?? null;

        $this->longitude = $location['longitude'] ?? null;

        $this->street = $location['street'] ?? null;

        $this->zip = $location['zip'] ?? null;
    }
}
