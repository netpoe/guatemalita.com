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
        $this->name = $place['name'];

        $this->id = $place['id'];

        $location = $place['location'];

        $this->city = $location['city'];

        $this->country = $location['country'];

        $this->latitude = $location['latitude'];

        $this->longitude = $location['longitude'];

        $this->street = $location['street'];

        $this->zip = $location['zip'];
    }
}
