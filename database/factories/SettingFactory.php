<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Setting::created([
        //     'appname' => 'Akauting ',
        //     'nameCompany' => 'PT.INTEK',
        //     'phoneCompany' => '08636762',
        //     'emailCompany' => 'intek@example.com',
        //     'addressCompany' => 'jalan batu 5 polres',
        //     'descCompany' => 'perusahan yang bergerak dibidang jasa  '
        //     // 'logoCompany' => ''
        // ]);
        return [
            'appname' => 'Akauting ',
            'nameCompany' => 'PT.INTEK',
            'phoneCompany' => '08636762',
            'emailCompany' => 'intek@example.com',
            'addressCompany' => 'jalan batu 5 polres',
            'descCompany' => 'perusahan yang bergerak dibidang jasa  '
        ];
    }
}
