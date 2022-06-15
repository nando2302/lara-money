<?php

namespace Database\Seeders;

// use App\Models\Setting;

use App\Models\Setting;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Seeder\SettingSeeder;
// use App\Database\Seeder\SettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('SettingSeeder');
        // \App\Models\User::factory(10)->create();
        // $this->call([
        //     Setting::class,
        // ]);

        $setting = [
            'appname' => 'Akauting ',
            'nameCompany' => 'PT.INTEK',
            'phoneCompany' => '08636762',
            'emailCompany' => 'intek@example.com',
            'addressCompany' => 'jalan batu 5 polres',
            'descCompany' => 'perusahan yang bergerak dibidang jasa',
        ];
        Setting::create($setting);
    }
}
