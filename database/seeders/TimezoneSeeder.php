<?php

namespace Database\Seeders;

use App\Models\Timezone;
use Illuminate\Database\Seeder;

class TimezoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timezone::truncate();

        foreach ($this->timezones() as $tzs) {
            foreach ($tzs as $timezones) {
                foreach ($timezones as $timezone) {
                    Timezone::create([
                        'label' => $timezone['label'],
                        'value' => $timezone['value'],
                    ]);
                }
            }
        }
    }

    protected function timezones()
    {
        return [
            [
                '(GMT-11:00)' => [
                    [
                        'value' => 'Pacific/Midway',
                        'label' => '(GMT-11:00) Pacific/Midway',
                    ],
                    ['value' => 'Pacific/Niue', 'label' => '(GMT-11:00) Pacific/Niue'],
                    [
                        'value' => 'Pacific/Pago_Pago',
                        'label' => '(GMT-11:00) Pacific/Pago_Pago',
                    ],
                ],
            ],
            [
                '(GMT-10:00)' => [
                    [
                        'value' => 'Pacific/Honolulu',
                        'label' => '(GMT-10:00) Pacific/Honolulu',
                    ],
                    [
                        'value' => 'Pacific/Johnston',
                        'label' => '(GMT-10:00) Pacific/Johnston',
                    ],
                    [
                        'value' => 'Pacific/Rarotonga',
                        'label' => '(GMT-10:00) Pacific/Rarotonga',
                    ],
                    [
                        'value' => 'Pacific/Tahiti',
                        'label' => '(GMT-10:00) Pacific/Tahiti',
                    ],
                ],
            ],
            [
                '(GMT-09:30)' => [
                    [
                        'value' => 'Pacific/Marquesas',
                        'label' => '(GMT-09:30) Pacific/Marquesas',
                    ],
                ],
            ],
            [
                '(GMT-09:00)' => [
                    ['value' => 'America/Adak', 'label' => '(GMT-09:00) America/Adak'],
                    [
                        'value' => 'Pacific/Gambier',
                        'label' => '(GMT-09:00) Pacific/Gambier',
                    ],
                ],
            ],
            [
                '(GMT-08:00)' => [
                    [
                        'value' => 'America/Anchorage',
                        'label' => '(GMT-08:00) America/Anchorage',
                    ],
                    [
                        'value' => 'America/Juneau',
                        'label' => '(GMT-08:00) America/Juneau',
                    ],
                    ['value' => 'America/Nome', 'label' => '(GMT-08:00) America/Nome'],
                    [
                        'value' => 'America/Yakutat',
                        'label' => '(GMT-08:00) America/Yakutat',
                    ],
                    [
                        'value' => 'Pacific/Pitcairn',
                        'label' => '(GMT-08:00) Pacific/Pitcairn',
                    ],
                ],
            ],
            [
                '(GMT-07:00)' => [
                    [
                        'value' => 'America/Chihuahua',
                        'label' => '(GMT-07:00) America/Chihuahua',
                    ],
                    [
                        'value' => 'America/Dawson',
                        'label' => '(GMT-07:00) America/Dawson',
                    ],
                    [
                        'value' => 'America/Dawson_Creek',
                        'label' => '(GMT-07:00) America/Dawson_Creek',
                    ],
                    [
                        'value' => 'America/Hermosillo',
                        'label' => '(GMT-07:00) America/Hermosillo',
                    ],
                    [
                        'value' => 'America/Los_Angeles',
                        'label' => '(GMT-07:00) America/Los_Angeles',
                    ],
                    [
                        'value' => 'America/Mazatlan',
                        'label' => '(GMT-07:00) America/Mazatlan',
                    ],
                    [
                        'value' => 'America/Phoenix',
                        'label' => '(GMT-07:00) America/Phoenix',
                    ],
                    [
                        'value' => 'America/Tijuana',
                        'label' => '(GMT-07:00) America/Tijuana',
                    ],
                    [
                        'value' => 'America/Vancouver',
                        'label' => '(GMT-07:00) America/Vancouver',
                    ],
                    [
                        'value' => 'America/Whitehorse',
                        'label' => '(GMT-07:00) America/Whitehorse',
                    ],
                ],
            ],
            [
                '(GMT-06:00)' => [
                    [
                        'value' => 'America/Belize',
                        'label' => '(GMT-06:00) America/Belize',
                    ],
                    [
                        'value' => 'America/Boise',
                        'label' => '(GMT-06:00) America/Boise',
                    ],
                    [
                        'value' => 'America/Cambridge_Bay',
                        'label' => '(GMT-06:00) America/Cambridge_Bay',
                    ],
                    [
                        'value' => 'America/Costa_Rica',
                        'label' => '(GMT-06:00) America/Costa_Rica',
                    ],
                    [
                        'value' => 'America/Denver',
                        'label' => '(GMT-06:00) America/Denver',
                    ],
                    [
                        'value' => 'America/Edmonton',
                        'label' => '(GMT-06:00) America/Edmonton',
                    ],
                    [
                        'value' => 'America/El_Salvador',
                        'label' => '(GMT-06:00) America/El_Salvador',
                    ],
                    [
                        'value' => 'America/Guatemala',
                        'label' => '(GMT-06:00) America/Guatemala',
                    ],
                    [
                        'value' => 'America/Inuvik',
                        'label' => '(GMT-06:00) America/Inuvik',
                    ],
                    [
                        'value' => 'America/Managua',
                        'label' => '(GMT-06:00) America/Managua',
                    ],
                    [
                        'value' => 'America/Merida',
                        'label' => '(GMT-06:00) America/Merida',
                    ],
                    [
                        'value' => 'America/Mexico_City',
                        'label' => '(GMT-06:00) America/Mexico_City',
                    ],
                    [
                        'value' => 'America/Monterrey',
                        'label' => '(GMT-06:00) America/Monterrey',
                    ],
                    [
                        'value' => 'America/Regina',
                        'label' => '(GMT-06:00) America/Regina',
                    ],
                    [
                        'value' => 'America/Shiprock',
                        'label' => '(GMT-06:00) America/Shiprock',
                    ],
                    [
                        'value' => 'America/Swift_Current',
                        'label' => '(GMT-06:00) America/Swift_Current',
                    ],
                    [
                        'value' => 'America/Tegucigalpa',
                        'label' => '(GMT-06:00) America/Tegucigalpa',
                    ],
                    [
                        'value' => 'America/Yellowknife',
                        'label' => '(GMT-06:00) America/Yellowknife',
                    ],
                    [
                        'value' => 'Pacific/Galapagos',
                        'label' => '(GMT-06:00) Pacific/Galapagos',
                    ],
                ],
            ],
            [
                '(GMT-05:00)' => [
                    [
                        'value' => 'America/Bogota',
                        'label' => '(GMT-05:00) America/Bogota',
                    ],
                    [
                        'value' => 'America/Cancun',
                        'label' => '(GMT-05:00) America/Cancun',
                    ],
                    [
                        'value' => 'America/Cayman',
                        'label' => '(GMT-05:00) America/Cayman',
                    ],
                    [
                        'value' => 'America/Chicago',
                        'label' => '(GMT-05:00) America/Chicago',
                    ],
                    [
                        'value' => 'America/Coral_Harbour',
                        'label' => '(GMT-05:00) America/Coral_Harbour',
                    ],
                    [
                        'value' => 'America/Eirunepe',
                        'label' => '(GMT-05:00) America/Eirunepe',
                    ],
                    [
                        'value' => 'America/Guayaquil',
                        'label' => '(GMT-05:00) America/Guayaquil',
                    ],
                    [
                        'value' => 'America/Indiana/Knox',
                        'label' => '(GMT-05:00) America/Indiana/Knox',
                    ],
                    [
                        'value' => 'America/Indiana/Tell_City',
                        'label' => '(GMT-05:00) America/Indiana/Tell_City',
                    ],
                    [
                        'value' => 'America/Jamaica',
                        'label' => '(GMT-05:00) America/Jamaica',
                    ],
                    ['value' => 'America/Lima', 'label' => '(GMT-05:00) America/Lima'],
                    [
                        'value' => 'America/Menominee',
                        'label' => '(GMT-05:00) America/Menominee',
                    ],
                    [
                        'value' => 'America/North_Dakota/Center',
                        'label' => '(GMT-05:00) America/North_Dakota/Center',
                    ],
                    [
                        'value' => 'America/North_Dakota/New_Salem',
                        'label' => '(GMT-05:00) America/North_Dakota/New_Salem',
                    ],
                    [
                        'value' => 'America/Panama',
                        'label' => '(GMT-05:00) America/Panama',
                    ],
                    [
                        'value' => 'America/Port-au-Prince',
                        'label' => '(GMT-05:00) America/Port-au-Prince',
                    ],
                    [
                        'value' => 'America/Rainy_River',
                        'label' => '(GMT-05:00) America/Rainy_River',
                    ],
                    [
                        'value' => 'America/Rankin_Inlet',
                        'label' => '(GMT-05:00) America/Rankin_Inlet',
                    ],
                    [
                        'value' => 'America/Resolute',
                        'label' => '(GMT-05:00) America/Resolute',
                    ],
                    [
                        'value' => 'America/Rio_Branco',
                        'label' => '(GMT-05:00) America/Rio_Branco',
                    ],
                    [
                        'value' => 'America/Winnipeg',
                        'label' => '(GMT-05:00) America/Winnipeg',
                    ],
                    [
                        'value' => 'Pacific/Easter',
                        'label' => '(GMT-05:00) Pacific/Easter',
                    ],
                ],
            ],
            [
                '(GMT-04:00)' => [
                    [
                        'value' => 'America/Anguilla',
                        'label' => '(GMT-04:00) America/Anguilla',
                    ],
                    [
                        'value' => 'America/Antigua',
                        'label' => '(GMT-04:00) America/Antigua',
                    ],
                    [
                        'value' => 'America/Aruba',
                        'label' => '(GMT-04:00) America/Aruba',
                    ],
                    [
                        'value' => 'America/Barbados',
                        'label' => '(GMT-04:00) America/Barbados',
                    ],
                    [
                        'value' => 'America/Blanc-Sablon',
                        'label' => '(GMT-04:00) America/Blanc-Sablon',
                    ],
                    [
                        'value' => 'America/Boa_Vista',
                        'label' => '(GMT-04:00) America/Boa_Vista',
                    ],
                    [
                        'value' => 'America/Campo_Grande',
                        'label' => '(GMT-04:00) America/Campo_Grande',
                    ],
                    [
                        'value' => 'America/Caracas',
                        'label' => '(GMT-04:00) America/Caracas',
                    ],
                    [
                        'value' => 'America/Cuiaba',
                        'label' => '(GMT-04:00) America/Cuiaba',
                    ],
                    [
                        'value' => 'America/Curacao',
                        'label' => '(GMT-04:00) America/Curacao',
                    ],
                    [
                        'value' => 'America/Detroit',
                        'label' => '(GMT-04:00) America/Detroit',
                    ],
                    [
                        'value' => 'America/Dominica',
                        'label' => '(GMT-04:00) America/Dominica',
                    ],
                    [
                        'value' => 'America/Grand_Turk',
                        'label' => '(GMT-04:00) America/Grand_Turk',
                    ],
                    [
                        'value' => 'America/Grenada',
                        'label' => '(GMT-04:00) America/Grenada',
                    ],
                    [
                        'value' => 'America/Guadeloupe',
                        'label' => '(GMT-04:00) America/Guadeloupe',
                    ],
                    [
                        'value' => 'America/Guyana',
                        'label' => '(GMT-04:00) America/Guyana',
                    ],
                    [
                        'value' => 'America/Havana',
                        'label' => '(GMT-04:00) America/Havana',
                    ],
                    [
                        'value' => 'America/Indiana/Marengo',
                        'label' => '(GMT-04:00) America/Indiana/Marengo',
                    ],
                    [
                        'value' => 'America/Indiana/Petersburg',
                        'label' => '(GMT-04:00) America/Indiana/Petersburg',
                    ],
                    [
                        'value' => 'America/Indiana/Vevay',
                        'label' => '(GMT-04:00) America/Indiana/Vevay',
                    ],
                    [
                        'value' => 'America/Indiana/Vincennes',
                        'label' => '(GMT-04:00) America/Indiana/Vincennes',
                    ],
                    [
                        'value' => 'America/Indiana/Winamac',
                        'label' => '(GMT-04:00) America/Indiana/Winamac',
                    ],
                    [
                        'value' => 'America/Indianapolis',
                        'label' => '(GMT-04:00) America/Indianapolis',
                    ],
                    [
                        'value' => 'America/Iqaluit',
                        'label' => '(GMT-04:00) America/Iqaluit',
                    ],
                    [
                        'value' => 'America/Kentucky/Monticello',
                        'label' => '(GMT-04:00) America/Kentucky/Monticello',
                    ],
                    [
                        'value' => 'America/La_Paz',
                        'label' => '(GMT-04:00) America/La_Paz',
                    ],
                    [
                        'value' => 'America/Louisville',
                        'label' => '(GMT-04:00) America/Louisville',
                    ],
                    [
                        'value' => 'America/Manaus',
                        'label' => '(GMT-04:00) America/Manaus',
                    ],
                    [
                        'value' => 'America/Marigot',
                        'label' => '(GMT-04:00) America/Marigot',
                    ],
                    [
                        'value' => 'America/Martinique',
                        'label' => '(GMT-04:00) America/Martinique',
                    ],
                    [
                        'value' => 'America/Montreal',
                        'label' => '(GMT-04:00) America/Montreal',
                    ],
                    [
                        'value' => 'America/Montserrat',
                        'label' => '(GMT-04:00) America/Montserrat',
                    ],
                    [
                        'value' => 'America/Nassau',
                        'label' => '(GMT-04:00) America/Nassau',
                    ],
                    [
                        'value' => 'America/New_York',
                        'label' => '(GMT-04:00) America/New_York',
                    ],
                    [
                        'value' => 'America/Nipigon',
                        'label' => '(GMT-04:00) America/Nipigon',
                    ],
                    [
                        'value' => 'America/Pangnirtung',
                        'label' => '(GMT-04:00) America/Pangnirtung',
                    ],
                    [
                        'value' => 'America/Port_of_Spain',
                        'label' => '(GMT-04:00) America/Port_of_Spain',
                    ],
                    [
                        'value' => 'America/Porto_Velho',
                        'label' => '(GMT-04:00) America/Porto_Velho',
                    ],
                    [
                        'value' => 'America/Puerto_Rico',
                        'label' => '(GMT-04:00) America/Puerto_Rico',
                    ],
                    [
                        'value' => 'America/Santo_Domingo',
                        'label' => '(GMT-04:00) America/Santo_Domingo',
                    ],
                    [
                        'value' => 'America/St_Barthelemy',
                        'label' => '(GMT-04:00) America/St_Barthelemy',
                    ],
                    [
                        'value' => 'America/St_Kitts',
                        'label' => '(GMT-04:00) America/St_Kitts',
                    ],
                    [
                        'value' => 'America/St_Lucia',
                        'label' => '(GMT-04:00) America/St_Lucia',
                    ],
                    [
                        'value' => 'America/St_Thomas',
                        'label' => '(GMT-04:00) America/St_Thomas',
                    ],
                    [
                        'value' => 'America/St_Vincent',
                        'label' => '(GMT-04:00) America/St_Vincent',
                    ],
                    [
                        'value' => 'America/Thunder_Bay',
                        'label' => '(GMT-04:00) America/Thunder_Bay',
                    ],
                    [
                        'value' => 'America/Toronto',
                        'label' => '(GMT-04:00) America/Toronto',
                    ],
                    [
                        'value' => 'America/Tortola',
                        'label' => '(GMT-04:00) America/Tortola',
                    ],
                ],
            ],
            [
                '(GMT-03:00)' => [
                    [
                        'value' => 'America/Araguaina',
                        'label' => '(GMT-03:00) America/Araguaina',
                    ],
                    [
                        'value' => 'America/Argentina/La_Rioja',
                        'label' => '(GMT-03:00) America/Argentina/La_Rioja',
                    ],
                    [
                        'value' => 'America/Argentina/Rio_Gallegos',
                        'label' => '(GMT-03:00) America/Argentina/Rio_Gallegos',
                    ],
                    [
                        'value' => 'America/Argentina/Salta',
                        'label' => '(GMT-03:00) America/Argentina/Salta',
                    ],
                    [
                        'value' => 'America/Argentina/San_Juan',
                        'label' => '(GMT-03:00) America/Argentina/San_Juan',
                    ],
                    [
                        'value' => 'America/Argentina/San_Luis',
                        'label' => '(GMT-03:00) America/Argentina/San_Luis',
                    ],
                    [
                        'value' => 'America/Argentina/Tucuman',
                        'label' => '(GMT-03:00) America/Argentina/Tucuman',
                    ],
                    [
                        'value' => 'America/Argentina/Ushuaia',
                        'label' => '(GMT-03:00) America/Argentina/Ushuaia',
                    ],
                    [
                        'value' => 'America/Asuncion',
                        'label' => '(GMT-03:00) America/Asuncion',
                    ],
                    [
                        'value' => 'America/Bahia',
                        'label' => '(GMT-03:00) America/Bahia',
                    ],
                    [
                        'value' => 'America/Belem',
                        'label' => '(GMT-03:00) America/Belem',
                    ],
                    [
                        'value' => 'America/Buenos_Aires',
                        'label' => '(GMT-03:00) America/Buenos_Aires',
                    ],
                    [
                        'value' => 'America/Catamarca',
                        'label' => '(GMT-03:00) America/Catamarca',
                    ],
                    [
                        'value' => 'America/Cayenne',
                        'label' => '(GMT-03:00) America/Cayenne',
                    ],
                    [
                        'value' => 'America/Cordoba',
                        'label' => '(GMT-03:00) America/Cordoba',
                    ],
                    [
                        'value' => 'America/Fortaleza',
                        'label' => '(GMT-03:00) America/Fortaleza',
                    ],
                    [
                        'value' => 'America/Glace_Bay',
                        'label' => '(GMT-03:00) America/Glace_Bay',
                    ],
                    [
                        'value' => 'America/Godthab',
                        'label' => '(GMT-03:00) America/Godthab',
                    ],
                    [
                        'value' => 'America/Goose_Bay',
                        'label' => '(GMT-03:00) America/Goose_Bay',
                    ],
                    [
                        'value' => 'America/Halifax',
                        'label' => '(GMT-03:00) America/Halifax',
                    ],
                    [
                        'value' => 'America/Jujuy',
                        'label' => '(GMT-03:00) America/Jujuy',
                    ],
                    [
                        'value' => 'America/Maceio',
                        'label' => '(GMT-03:00) America/Maceio',
                    ],
                    [
                        'value' => 'America/Mendoza',
                        'label' => '(GMT-03:00) America/Mendoza',
                    ],
                    [
                        'value' => 'America/Moncton',
                        'label' => '(GMT-03:00) America/Moncton',
                    ],
                    [
                        'value' => 'America/Montevideo',
                        'label' => '(GMT-03:00) America/Montevideo',
                    ],
                    [
                        'value' => 'America/Paramaribo',
                        'label' => '(GMT-03:00) America/Paramaribo',
                    ],
                    [
                        'value' => 'America/Recife',
                        'label' => '(GMT-03:00) America/Recife',
                    ],
                    [
                        'value' => 'America/Santarem',
                        'label' => '(GMT-03:00) America/Santarem',
                    ],
                    [
                        'value' => 'America/Santiago',
                        'label' => '(GMT-03:00) America/Santiago',
                    ],
                    [
                        'value' => 'America/Sao_Paulo',
                        'label' => '(GMT-03:00) America/Sao_Paulo',
                    ],
                    [
                        'value' => 'America/Thule',
                        'label' => '(GMT-03:00) America/Thule',
                    ],
                    [
                        'value' => 'Antarctica/Palmer',
                        'label' => '(GMT-03:00) Antarctica/Palmer',
                    ],
                    [
                        'value' => 'Antarctica/Rothera',
                        'label' => '(GMT-03:00) Antarctica/Rothera',
                    ],
                    [
                        'value' => 'Atlantic/Bermuda',
                        'label' => '(GMT-03:00) Atlantic/Bermuda',
                    ],
                    [
                        'value' => 'Atlantic/Stanley',
                        'label' => '(GMT-03:00) Atlantic/Stanley',
                    ],
                ],
            ],
            [
                '(GMT-02:30)' => [
                    [
                        'value' => 'America/St_Johns',
                        'label' => '(GMT-02:30) America/St_Johns',
                    ],
                ],
            ],
            [
                '(GMT-02:00)' => [
                    [
                        'value' => 'America/Miquelon',
                        'label' => '(GMT-02:00) America/Miquelon',
                    ],
                    [
                        'value' => 'America/Noronha',
                        'label' => '(GMT-02:00) America/Noronha',
                    ],
                    [
                        'value' => 'Atlantic/South_Georgia',
                        'label' => '(GMT-02:00) Atlantic/South_Georgia',
                    ],
                ],
            ],
            [
                '(GMT-01:00)' => [
                    [
                        'value' => 'America/Scoresbysund',
                        'label' => '(GMT-01:00) America/Scoresbysund',
                    ],
                    [
                        'value' => 'Atlantic/Azores',
                        'label' => '(GMT-01:00) Atlantic/Azores',
                    ],
                    [
                        'value' => 'Atlantic/Cape_Verde',
                        'label' => '(GMT-01:00) Atlantic/Cape_Verde',
                    ],
                ],
            ],
            [
                '(GMT+00:00)' => [
                    [
                        'value' => 'Africa/Abidjan',
                        'label' => '(GMT+00:00) Africa/Abidjan',
                    ],
                    ['value' => 'Africa/Accra', 'label' => '(GMT+00:00) Africa/Accra'],
                    [
                        'value' => 'Africa/Bamako',
                        'label' => '(GMT+00:00) Africa/Bamako',
                    ],
                    [
                        'value' => 'Africa/Banjul',
                        'label' => '(GMT+00:00) Africa/Banjul',
                    ],
                    [
                        'value' => 'Africa/Bissau',
                        'label' => '(GMT+00:00) Africa/Bissau',
                    ],
                    [
                        'value' => 'Africa/Casablanca',
                        'label' => '(GMT+00:00) Africa/Casablanca',
                    ],
                    [
                        'value' => 'Africa/Conakry',
                        'label' => '(GMT+00:00) Africa/Conakry',
                    ],
                    ['value' => 'Africa/Dakar', 'label' => '(GMT+00:00) Africa/Dakar'],
                    [
                        'value' => 'Africa/El_Aaiun',
                        'label' => '(GMT+00:00) Africa/El_Aaiun',
                    ],
                    [
                        'value' => 'Africa/Freetown',
                        'label' => '(GMT+00:00) Africa/Freetown',
                    ],
                    ['value' => 'Africa/Lome', 'label' => '(GMT+00:00) Africa/Lome'],
                    [
                        'value' => 'Africa/Monrovia',
                        'label' => '(GMT+00:00) Africa/Monrovia',
                    ],
                    [
                        'value' => 'Africa/Nouakchott',
                        'label' => '(GMT+00:00) Africa/Nouakchott',
                    ],
                    [
                        'value' => 'Africa/Ouagadougou',
                        'label' => '(GMT+00:00) Africa/Ouagadougou',
                    ],
                    [
                        'value' => 'Africa/Sao_Tome',
                        'label' => '(GMT+00:00) Africa/Sao_Tome',
                    ],
                    [
                        'value' => 'America/Danmarkshavn',
                        'label' => '(GMT+00:00) America/Danmarkshavn',
                    ],
                    [
                        'value' => 'Atlantic/Canary',
                        'label' => '(GMT+00:00) Atlantic/Canary',
                    ],
                    [
                        'value' => 'Atlantic/Faeroe',
                        'label' => '(GMT+00:00) Atlantic/Faeroe',
                    ],
                    [
                        'value' => 'Atlantic/Madeira',
                        'label' => '(GMT+00:00) Atlantic/Madeira',
                    ],
                    [
                        'value' => 'Atlantic/Reykjavik',
                        'label' => '(GMT+00:00) Atlantic/Reykjavik',
                    ],
                    [
                        'value' => 'Atlantic/St_Helena',
                        'label' => '(GMT+00:00) Atlantic/St_Helena',
                    ],
                    [
                        'value' => 'Europe/Dublin',
                        'label' => '(GMT+00:00) Europe/Dublin',
                    ],
                    [
                        'value' => 'Europe/Guernsey',
                        'label' => '(GMT+00:00) Europe/Guernsey',
                    ],
                    [
                        'value' => 'Europe/Isle_of_Man',
                        'label' => '(GMT+00:00) Europe/Isle_of_Man',
                    ],
                    [
                        'value' => 'Europe/Jersey',
                        'label' => '(GMT+00:00) Europe/Jersey',
                    ],
                    [
                        'value' => 'Europe/Lisbon',
                        'label' => '(GMT+00:00) Europe/Lisbon',
                    ],
                    [
                        'value' => 'Europe/London',
                        'label' => '(GMT+00:00) Europe/London',
                    ],
                ],
            ],
            [
                '(GMT+01:00)' => [
                    [
                        'value' => 'Africa/Algiers',
                        'label' => '(GMT+01:00) Africa/Algiers',
                    ],
                    [
                        'value' => 'Africa/Bangui',
                        'label' => '(GMT+01:00) Africa/Bangui',
                    ],
                    [
                        'value' => 'Africa/Brazzaville',
                        'label' => '(GMT+01:00) Africa/Brazzaville',
                    ],
                    ['value' => 'Africa/Ceuta', 'label' => '(GMT+01:00) Africa/Ceuta'],
                    [
                        'value' => 'Africa/Douala',
                        'label' => '(GMT+01:00) Africa/Douala',
                    ],
                    [
                        'value' => 'Africa/Kinshasa',
                        'label' => '(GMT+01:00) Africa/Kinshasa',
                    ],
                    ['value' => 'Africa/Lagos', 'label' => '(GMT+01:00) Africa/Lagos'],
                    [
                        'value' => 'Africa/Libreville',
                        'label' => '(GMT+01:00) Africa/Libreville',
                    ],
                    [
                        'value' => 'Africa/Luanda',
                        'label' => '(GMT+01:00) Africa/Luanda',
                    ],
                    [
                        'value' => 'Africa/Malabo',
                        'label' => '(GMT+01:00) Africa/Malabo',
                    ],
                    [
                        'value' => 'Africa/Ndjamena',
                        'label' => '(GMT+01:00) Africa/Ndjamena',
                    ],
                    [
                        'value' => 'Africa/Niamey',
                        'label' => '(GMT+01:00) Africa/Niamey',
                    ],
                    [
                        'value' => 'Africa/Porto-Novo',
                        'label' => '(GMT+01:00) Africa/Porto-Novo',
                    ],
                    ['value' => 'Africa/Tunis', 'label' => '(GMT+01:00) Africa/Tunis'],
                    [
                        'value' => 'Arctic/Longyearbyen',
                        'label' => '(GMT+01:00) Arctic/Longyearbyen',
                    ],
                    [
                        'value' => 'Europe/Amsterdam',
                        'label' => '(GMT+01:00) Europe/Amsterdam',
                    ],
                    [
                        'value' => 'Europe/Andorra',
                        'label' => '(GMT+01:00) Europe/Andorra',
                    ],
                    [
                        'value' => 'Europe/Belgrade',
                        'label' => '(GMT+01:00) Europe/Belgrade',
                    ],
                    [
                        'value' => 'Europe/Berlin',
                        'label' => '(GMT+01:00) Europe/Berlin',
                    ],
                    [
                        'value' => 'Europe/Bratislava',
                        'label' => '(GMT+01:00) Europe/Bratislava',
                    ],
                    [
                        'value' => 'Europe/Brussels',
                        'label' => '(GMT+01:00) Europe/Brussels',
                    ],
                    [
                        'value' => 'Europe/Budapest',
                        'label' => '(GMT+01:00) Europe/Budapest',
                    ],
                    [
                        'value' => 'Europe/Copenhagen',
                        'label' => '(GMT+01:00) Europe/Copenhagen',
                    ],
                    [
                        'value' => 'Europe/Gibraltar',
                        'label' => '(GMT+01:00) Europe/Gibraltar',
                    ],
                    [
                        'value' => 'Europe/Ljubljana',
                        'label' => '(GMT+01:00) Europe/Ljubljana',
                    ],
                    [
                        'value' => 'Europe/Luxembourg',
                        'label' => '(GMT+01:00) Europe/Luxembourg',
                    ],
                    [
                        'value' => 'Europe/Madrid',
                        'label' => '(GMT+01:00) Europe/Madrid',
                    ],
                    ['value' => 'Europe/Malta', 'label' => '(GMT+01:00) Europe/Malta'],
                    [
                        'value' => 'Europe/Monaco',
                        'label' => '(GMT+01:00) Europe/Monaco',
                    ],
                    ['value' => 'Europe/Oslo', 'label' => '(GMT+01:00) Europe/Oslo'],
                    ['value' => 'Europe/Paris', 'label' => '(GMT+01:00) Europe/Paris'],
                    [
                        'value' => 'Europe/Podgorica',
                        'label' => '(GMT+01:00) Europe/Podgorica',
                    ],
                    [
                        'value' => 'Europe/Prague',
                        'label' => '(GMT+01:00) Europe/Prague',
                    ],
                    ['value' => 'Europe/Rome', 'label' => '(GMT+01:00) Europe/Rome'],
                    [
                        'value' => 'Europe/San_Marino',
                        'label' => '(GMT+01:00) Europe/San_Marino',
                    ],
                    [
                        'value' => 'Europe/Sarajevo',
                        'label' => '(GMT+01:00) Europe/Sarajevo',
                    ],
                    [
                        'value' => 'Europe/Skopje',
                        'label' => '(GMT+01:00) Europe/Skopje',
                    ],
                    [
                        'value' => 'Europe/Stockholm',
                        'label' => '(GMT+01:00) Europe/Stockholm',
                    ],
                    [
                        'value' => 'Europe/Tirane',
                        'label' => '(GMT+01:00) Europe/Tirane',
                    ],
                    ['value' => 'Europe/Vaduz', 'label' => '(GMT+01:00) Europe/Vaduz'],
                    [
                        'value' => 'Europe/Vatican',
                        'label' => '(GMT+01:00) Europe/Vatican',
                    ],
                    [
                        'value' => 'Europe/Vienna',
                        'label' => '(GMT+01:00) Europe/Vienna',
                    ],
                    [
                        'value' => 'Europe/Warsaw',
                        'label' => '(GMT+01:00) Europe/Warsaw',
                    ],
                    [
                        'value' => 'Europe/Zagreb',
                        'label' => '(GMT+01:00) Europe/Zagreb',
                    ],
                    [
                        'value' => 'Europe/Zurich',
                        'label' => '(GMT+01:00) Europe/Zurich',
                    ],
                ],
            ],
            [
                '(GMT+02:00)' => [
                    [
                        'value' => 'Africa/Blantyre',
                        'label' => '(GMT+02:00) Africa/Blantyre',
                    ],
                    [
                        'value' => 'Africa/Bujumbura',
                        'label' => '(GMT+02:00) Africa/Bujumbura',
                    ],
                    ['value' => 'Africa/Cairo', 'label' => '(GMT+02:00) Africa/Cairo'],
                    [
                        'value' => 'Africa/Gaborone',
                        'label' => '(GMT+02:00) Africa/Gaborone',
                    ],
                    [
                        'value' => 'Africa/Harare',
                        'label' => '(GMT+02:00) Africa/Harare',
                    ],
                    [
                        'value' => 'Africa/Johannesburg',
                        'label' => '(GMT+02:00) Africa/Johannesburg',
                    ],
                    [
                        'value' => 'Africa/Kigali',
                        'label' => '(GMT+02:00) Africa/Kigali',
                    ],
                    [
                        'value' => 'Africa/Lubumbashi',
                        'label' => '(GMT+02:00) Africa/Lubumbashi',
                    ],
                    [
                        'value' => 'Africa/Lusaka',
                        'label' => '(GMT+02:00) Africa/Lusaka',
                    ],
                    [
                        'value' => 'Africa/Maputo',
                        'label' => '(GMT+02:00) Africa/Maputo',
                    ],
                    [
                        'value' => 'Africa/Maseru',
                        'label' => '(GMT+02:00) Africa/Maseru',
                    ],
                    [
                        'value' => 'Africa/Mbabane',
                        'label' => '(GMT+02:00) Africa/Mbabane',
                    ],
                    [
                        'value' => 'Africa/Tripoli',
                        'label' => '(GMT+02:00) Africa/Tripoli',
                    ],
                    [
                        'value' => 'Africa/Windhoek',
                        'label' => '(GMT+02:00) Africa/Windhoek',
                    ],
                    ['value' => 'Asia/Amman', 'label' => '(GMT+02:00) Asia/Amman'],
                    ['value' => 'Asia/Beirut', 'label' => '(GMT+02:00) Asia/Beirut'],
                    [
                        'value' => 'Asia/Damascus',
                        'label' => '(GMT+02:00) Asia/Damascus',
                    ],
                    ['value' => 'Asia/Gaza', 'label' => '(GMT+02:00) Asia/Gaza'],
                    [
                        'value' => 'Asia/Jerusalem',
                        'label' => '(GMT+02:00) Asia/Jerusalem',
                    ],
                    ['value' => 'Asia/Nicosia', 'label' => '(GMT+02:00) Asia/Nicosia'],
                    [
                        'value' => 'Europe/Athens',
                        'label' => '(GMT+02:00) Europe/Athens',
                    ],
                    [
                        'value' => 'Europe/Bucharest',
                        'label' => '(GMT+02:00) Europe/Bucharest',
                    ],
                    [
                        'value' => 'Europe/Chisinau',
                        'label' => '(GMT+02:00) Europe/Chisinau',
                    ],
                    [
                        'value' => 'Europe/Helsinki',
                        'label' => '(GMT+02:00) Europe/Helsinki',
                    ],
                    [
                        'value' => 'Europe/Kaliningrad',
                        'label' => '(GMT+02:00) Europe/Kaliningrad',
                    ],
                    ['value' => 'Europe/Kiev', 'label' => '(GMT+02:00) Europe/Kiev'],
                    [
                        'value' => 'Europe/Mariehamn',
                        'label' => '(GMT+02:00) Europe/Mariehamn',
                    ],
                    ['value' => 'Europe/Riga', 'label' => '(GMT+02:00) Europe/Riga'],
                    ['value' => 'Europe/Sofia', 'label' => '(GMT+02:00) Europe/Sofia'],
                    [
                        'value' => 'Europe/Tallinn',
                        'label' => '(GMT+02:00) Europe/Tallinn',
                    ],
                    [
                        'value' => 'Europe/Uzhgorod',
                        'label' => '(GMT+02:00) Europe/Uzhgorod',
                    ],
                    [
                        'value' => 'Europe/Vilnius',
                        'label' => '(GMT+02:00) Europe/Vilnius',
                    ],
                    [
                        'value' => 'Europe/Zaporozhye',
                        'label' => '(GMT+02:00) Europe/Zaporozhye',
                    ],
                ],
            ],
            [
                '(GMT+03:00)' => [
                    [
                        'value' => 'Africa/Addis_Ababa',
                        'label' => '(GMT+03:00) Africa/Addis_Ababa',
                    ],
                    [
                        'value' => 'Africa/Asmera',
                        'label' => '(GMT+03:00) Africa/Asmera',
                    ],
                    [
                        'value' => 'Africa/Dar_es_Salaam',
                        'label' => '(GMT+03:00) Africa/Dar_es_Salaam',
                    ],
                    [
                        'value' => 'Africa/Djibouti',
                        'label' => '(GMT+03:00) Africa/Djibouti',
                    ],
                    [
                        'value' => 'Africa/Kampala',
                        'label' => '(GMT+03:00) Africa/Kampala',
                    ],
                    [
                        'value' => 'Africa/Khartoum',
                        'label' => '(GMT+03:00) Africa/Khartoum',
                    ],
                    [
                        'value' => 'Africa/Mogadishu',
                        'label' => '(GMT+03:00) Africa/Mogadishu',
                    ],
                    [
                        'value' => 'Africa/Nairobi',
                        'label' => '(GMT+03:00) Africa/Nairobi',
                    ],
                    [
                        'value' => 'Antarctica/Syowa',
                        'label' => '(GMT+03:00) Antarctica/Syowa',
                    ],
                    ['value' => 'Asia/Aden', 'label' => '(GMT+03:00) Asia/Aden'],
                    ['value' => 'Asia/Baghdad', 'label' => '(GMT+03:00) Asia/Baghdad'],
                    ['value' => 'Asia/Bahrain', 'label' => '(GMT+03:00) Asia/Bahrain'],
                    ['value' => 'Asia/Kuwait', 'label' => '(GMT+03:00) Asia/Kuwait'],
                    ['value' => 'Asia/Qatar', 'label' => '(GMT+03:00) Asia/Qatar'],
                    ['value' => 'Asia/Riyadh', 'label' => '(GMT+03:00) Asia/Riyadh'],
                    [
                        'value' => 'Europe/Istanbul',
                        'label' => '(GMT+03:00) Europe/Istanbul',
                    ],
                    ['value' => 'Europe/Minsk', 'label' => '(GMT+03:00) Europe/Minsk'],
                    [
                        'value' => 'Europe/Moscow',
                        'label' => '(GMT+03:00) Europe/Moscow',
                    ],
                    [
                        'value' => 'Europe/Simferopol',
                        'label' => '(GMT+03:00) Europe/Simferopol',
                    ],
                    [
                        'value' => 'Europe/Volgograd',
                        'label' => '(GMT+03:00) Europe/Volgograd',
                    ],
                    [
                        'value' => 'Indian/Antananarivo',
                        'label' => '(GMT+03:00) Indian/Antananarivo',
                    ],
                    [
                        'value' => 'Indian/Comoro',
                        'label' => '(GMT+03:00) Indian/Comoro',
                    ],
                    [
                        'value' => 'Indian/Mayotte',
                        'label' => '(GMT+03:00) Indian/Mayotte',
                    ],
                ],
            ],
            [
                '(GMT+04:00)' => [
                    ['value' => 'Asia/Baku', 'label' => '(GMT+04:00) Asia/Baku'],
                    ['value' => 'Asia/Dubai', 'label' => '(GMT+04:00) Asia/Dubai'],
                    ['value' => 'Asia/Muscat', 'label' => '(GMT+04:00) Asia/Muscat'],
                    ['value' => 'Asia/Tbilisi', 'label' => '(GMT+04:00) Asia/Tbilisi'],
                    ['value' => 'Asia/Yerevan', 'label' => '(GMT+04:00) Asia/Yerevan'],
                    [
                        'value' => 'Europe/Samara',
                        'label' => '(GMT+04:00) Europe/Samara',
                    ],
                    ['value' => 'Indian/Mahe', 'label' => '(GMT+04:00) Indian/Mahe'],
                    [
                        'value' => 'Indian/Mauritius',
                        'label' => '(GMT+04:00) Indian/Mauritius',
                    ],
                    [
                        'value' => 'Indian/Reunion',
                        'label' => '(GMT+04:00) Indian/Reunion',
                    ],
                ],
            ],
            [
                '(GMT+04:30)' => [
                    ['value' => 'Asia/Kabul', 'label' => '(GMT+04:30) Asia/Kabul'],
                    ['value' => 'Asia/Tehran', 'label' => '(GMT+04:30) Asia/Tehran'],
                ],
            ],
            [
                '(GMT+05:00)' => [
                    [
                        'value' => 'Antarctica/Mawson',
                        'label' => '(GMT+05:00) Antarctica/Mawson',
                    ],
                    ['value' => 'Asia/Aqtau', 'label' => '(GMT+05:00) Asia/Aqtau'],
                    ['value' => 'Asia/Aqtobe', 'label' => '(GMT+05:00) Asia/Aqtobe'],
                    [
                        'value' => 'Asia/Ashgabat',
                        'label' => '(GMT+05:00) Asia/Ashgabat',
                    ],
                    [
                        'value' => 'Asia/Dushanbe',
                        'label' => '(GMT+05:00) Asia/Dushanbe',
                    ],
                    ['value' => 'Asia/Karachi', 'label' => '(GMT+05:00) Asia/Karachi'],
                    ['value' => 'Asia/Oral', 'label' => '(GMT+05:00) Asia/Oral'],
                    [
                        'value' => 'Asia/Samarkand',
                        'label' => '(GMT+05:00) Asia/Samarkand',
                    ],
                    [
                        'value' => 'Asia/Tashkent',
                        'label' => '(GMT+05:00) Asia/Tashkent',
                    ],
                    [
                        'value' => 'Asia/Yekaterinburg',
                        'label' => '(GMT+05:00) Asia/Yekaterinburg',
                    ],
                    [
                        'value' => 'Indian/Kerguelen',
                        'label' => '(GMT+05:00) Indian/Kerguelen',
                    ],
                    [
                        'value' => 'Indian/Maldives',
                        'label' => '(GMT+05:00) Indian/Maldives',
                    ],
                ],
            ],
            [
                '(GMT+05:30)' => [
                    [
                        'value' => 'Asia/Calcutta',
                        'label' => '(GMT+05:30) Asia/Calcutta',
                    ],
                    ['value' => 'Asia/Colombo', 'label' => '(GMT+05:30) Asia/Colombo'],
                ],
            ],
            [
                '(GMT+05:45)' => [
                    [
                        'value' => 'Asia/Katmandu',
                        'label' => '(GMT+05:45) Asia/Katmandu',
                    ],
                ],
            ],
            [
                '(GMT+06:00)' => [
                    [
                        'value' => 'Antarctica/Vostok',
                        'label' => '(GMT+06:00) Antarctica/Vostok',
                    ],
                    ['value' => 'Asia/Almaty', 'label' => '(GMT+06:00) Asia/Almaty'],
                    ['value' => 'Asia/Bishkek', 'label' => '(GMT+06:00) Asia/Bishkek'],
                    ['value' => 'Asia/Dhaka', 'label' => '(GMT+06:00) Asia/Dhaka'],
                    ['value' => 'Asia/Kashgar', 'label' => '(GMT+06:00) Asia/Kashgar'],
                    ['value' => 'Asia/Omsk', 'label' => '(GMT+06:00) Asia/Omsk'],
                    [
                        'value' => 'Asia/Qyzylorda',
                        'label' => '(GMT+06:00) Asia/Qyzylorda',
                    ],
                    ['value' => 'Asia/Thimphu', 'label' => '(GMT+06:00) Asia/Thimphu'],
                    ['value' => 'Asia/Urumqi', 'label' => '(GMT+06:00) Asia/Urumqi'],
                    [
                        'value' => 'Indian/Chagos',
                        'label' => '(GMT+06:00) Indian/Chagos',
                    ],
                ],
            ],
            [
                '(GMT+06:30)' => [
                    ['value' => 'Asia/Rangoon', 'label' => '(GMT+06:30) Asia/Rangoon'],
                    ['value' => 'Indian/Cocos', 'label' => '(GMT+06:30) Indian/Cocos'],
                ],
            ],
            [
                '(GMT+07:00)' => [
                    [
                        'value' => 'Antarctica/Davis',
                        'label' => '(GMT+07:00) Antarctica/Davis',
                    ],
                    ['value' => 'Asia/Bangkok', 'label' => '(GMT+07:00) Asia/Bangkok'],
                    ['value' => 'Asia/Hovd', 'label' => '(GMT+07:00) Asia/Hovd'],
                    ['value' => 'Asia/Jakarta', 'label' => '(GMT+07:00) Asia/Jakarta'],
                    [
                        'value' => 'Asia/Krasnoyarsk',
                        'label' => '(GMT+07:00) Asia/Krasnoyarsk',
                    ],
                    [
                        'value' => 'Asia/Novosibirsk',
                        'label' => '(GMT+07:00) Asia/Novosibirsk',
                    ],
                    [
                        'value' => 'Asia/Phnom_Penh',
                        'label' => '(GMT+07:00) Asia/Phnom_Penh',
                    ],
                    [
                        'value' => 'Asia/Pontianak',
                        'label' => '(GMT+07:00) Asia/Pontianak',
                    ],
                    ['value' => 'Asia/Saigon', 'label' => '(GMT+07:00) Asia/Saigon'],
                    [
                        'value' => 'Asia/Vientiane',
                        'label' => '(GMT+07:00) Asia/Vientiane',
                    ],
                    [
                        'value' => 'Indian/Christmas',
                        'label' => '(GMT+07:00) Indian/Christmas',
                    ],
                ],
            ],
            [
                '(GMT+08:00)' => [
                    ['value' => 'Asia/Brunei', 'label' => '(GMT+08:00) Asia/Brunei'],
                    [
                        'value' => 'Asia/Choibalsan',
                        'label' => '(GMT+08:00) Asia/Choibalsan',
                    ],
                    [
                        'value' => 'Asia/Chongqing',
                        'label' => '(GMT+08:00) Asia/Chongqing',
                    ],
                    ['value' => 'Asia/Harbin', 'label' => '(GMT+08:00) Asia/Harbin'],
                    [
                        'value' => 'Asia/Hong_Kong',
                        'label' => '(GMT+08:00) Asia/Hong_Kong',
                    ],
                    ['value' => 'Asia/Irkutsk', 'label' => '(GMT+08:00) Asia/Irkutsk'],
                    [
                        'value' => 'Asia/Kuala_Lumpur',
                        'label' => '(GMT+08:00) Asia/Kuala_Lumpur',
                    ],
                    ['value' => 'Asia/Kuching', 'label' => '(GMT+08:00) Asia/Kuching'],
                    ['value' => 'Asia/Macau', 'label' => '(GMT+08:00) Asia/Macau'],
                    [
                        'value' => 'Asia/Makassar',
                        'label' => '(GMT+08:00) Asia/Makassar',
                    ],
                    ['value' => 'Asia/Manila', 'label' => '(GMT+08:00) Asia/Manila'],
                    [
                        'value' => 'Asia/Shanghai',
                        'label' => '(GMT+08:00) Asia/Shanghai',
                    ],
                    [
                        'value' => 'Asia/Singapore',
                        'label' => '(GMT+08:00) Asia/Singapore',
                    ],
                    ['value' => 'Asia/Taipei', 'label' => '(GMT+08:00) Asia/Taipei'],
                    [
                        'value' => 'Asia/Ulaanbaatar',
                        'label' => '(GMT+08:00) Asia/Ulaanbaatar',
                    ],
                    [
                        'value' => 'Australia/Perth',
                        'label' => '(GMT+08:00) Australia/Perth',
                    ],
                ],
            ],
            [
                '(GMT+08:30)' => [
                    [
                        'value' => 'Asia/Pyongyang',
                        'label' => '(GMT+08:30) Asia/Pyongyang',
                    ],
                ],
            ],
            [
                '(GMT+08:45)' => [
                    [
                        'value' => 'Australia/Eucla',
                        'label' => '(GMT+08:45) Australia/Eucla',
                    ],
                ],
            ],
            [
                '(GMT+09:00)' => [
                    ['value' => 'Asia/Dili', 'label' => '(GMT+09:00) Asia/Dili'],
                    [
                        'value' => 'Asia/Jayapura',
                        'label' => '(GMT+09:00) Asia/Jayapura',
                    ],
                    ['value' => 'Asia/Seoul', 'label' => '(GMT+09:00) Asia/Seoul'],
                    ['value' => 'Asia/Tokyo', 'label' => '(GMT+09:00) Asia/Tokyo'],
                    ['value' => 'Asia/Yakutsk', 'label' => '(GMT+09:00) Asia/Yakutsk'],
                    [
                        'value' => 'Pacific/Palau',
                        'label' => '(GMT+09:00) Pacific/Palau',
                    ],
                ],
            ],
            [
                '(GMT+09:30)' => [
                    [
                        'value' => 'Australia/Darwin',
                        'label' => '(GMT+09:30) Australia/Darwin',
                    ],
                ],
            ],
            [
                '(GMT+10:00)' => [
                    [
                        'value' => 'Antarctica/DumontDUrville',
                        'label' => '(GMT+10:00) Antarctica/DumontDUrville',
                    ],
                    [
                        'value' => 'Asia/Vladivostok',
                        'label' => '(GMT+10:00) Asia/Vladivostok',
                    ],
                    [
                        'value' => 'Australia/Brisbane',
                        'label' => '(GMT+10:00) Australia/Brisbane',
                    ],
                    [
                        'value' => 'Australia/Lindeman',
                        'label' => '(GMT+10:00) Australia/Lindeman',
                    ],
                    ['value' => 'Pacific/Guam', 'label' => '(GMT+10:00) Pacific/Guam'],
                    [
                        'value' => 'Pacific/Port_Moresby',
                        'label' => '(GMT+10:00) Pacific/Port_Moresby',
                    ],
                    [
                        'value' => 'Pacific/Saipan',
                        'label' => '(GMT+10:00) Pacific/Saipan',
                    ],
                    ['value' => 'Pacific/Truk', 'label' => '(GMT+10:00) Pacific/Truk'],
                ],
            ],
            [
                '(GMT+10:30)' => [
                    [
                        'value' => 'Australia/Adelaide',
                        'label' => '(GMT+10:30) Australia/Adelaide',
                    ],
                    [
                        'value' => 'Australia/Broken_Hill',
                        'label' => '(GMT+10:30) Australia/Broken_Hill',
                    ],
                ],
            ],
            [
                '(GMT+11:00)' => [
                    [
                        'value' => 'Antarctica/Casey',
                        'label' => '(GMT+11:00) Antarctica/Casey',
                    ],
                    ['value' => 'Asia/Magadan', 'label' => '(GMT+11:00) Asia/Magadan'],
                    [
                        'value' => 'Asia/Sakhalin',
                        'label' => '(GMT+11:00) Asia/Sakhalin',
                    ],
                    [
                        'value' => 'Australia/Currie',
                        'label' => '(GMT+11:00) Australia/Currie',
                    ],
                    [
                        'value' => 'Australia/Hobart',
                        'label' => '(GMT+11:00) Australia/Hobart',
                    ],
                    [
                        'value' => 'Australia/Lord_Howe',
                        'label' => '(GMT+11:00) Australia/Lord_Howe',
                    ],
                    [
                        'value' => 'Australia/Melbourne',
                        'label' => '(GMT+11:00) Australia/Melbourne',
                    ],
                    [
                        'value' => 'Australia/Sydney',
                        'label' => '(GMT+11:00) Australia/Sydney',
                    ],
                    [
                        'value' => 'Pacific/Efate',
                        'label' => '(GMT+11:00) Pacific/Efate',
                    ],
                    [
                        'value' => 'Pacific/Guadalcanal',
                        'label' => '(GMT+11:00) Pacific/Guadalcanal',
                    ],
                    [
                        'value' => 'Pacific/Kosrae',
                        'label' => '(GMT+11:00) Pacific/Kosrae',
                    ],
                    [
                        'value' => 'Pacific/Norfolk',
                        'label' => '(GMT+11:00) Pacific/Norfolk',
                    ],
                    [
                        'value' => 'Pacific/Noumea',
                        'label' => '(GMT+11:00) Pacific/Noumea',
                    ],
                    [
                        'value' => 'Pacific/Ponape',
                        'label' => '(GMT+11:00) Pacific/Ponape',
                    ],
                ],
            ],
            [
                '(GMT+12:00)' => [
                    ['value' => 'Asia/Anadyr', 'label' => '(GMT+12:00) Asia/Anadyr'],
                    [
                        'value' => 'Asia/Kamchatka',
                        'label' => '(GMT+12:00) Asia/Kamchatka',
                    ],
                    ['value' => 'Pacific/Fiji', 'label' => '(GMT+12:00) Pacific/Fiji'],
                    [
                        'value' => 'Pacific/Funafuti',
                        'label' => '(GMT+12:00) Pacific/Funafuti',
                    ],
                    [
                        'value' => 'Pacific/Kwajalein',
                        'label' => '(GMT+12:00) Pacific/Kwajalein',
                    ],
                    [
                        'value' => 'Pacific/Majuro',
                        'label' => '(GMT+12:00) Pacific/Majuro',
                    ],
                    [
                        'value' => 'Pacific/Nauru',
                        'label' => '(GMT+12:00) Pacific/Nauru',
                    ],
                    [
                        'value' => 'Pacific/Tarawa',
                        'label' => '(GMT+12:00) Pacific/Tarawa',
                    ],
                    ['value' => 'Pacific/Wake', 'label' => '(GMT+12:00) Pacific/Wake'],
                    [
                        'value' => 'Pacific/Wallis',
                        'label' => '(GMT+12:00) Pacific/Wallis',
                    ],
                ],
            ],
            [
                '(GMT+13:00)' => [
                    [
                        'value' => 'Antarctica/McMurdo',
                        'label' => '(GMT+13:00) Antarctica/McMurdo',
                    ],
                    [
                        'value' => 'Pacific/Auckland',
                        'label' => '(GMT+13:00) Pacific/Auckland',
                    ],
                    [
                        'value' => 'Pacific/Enderbury',
                        'label' => '(GMT+13:00) Pacific/Enderbury',
                    ],
                    [
                        'value' => 'Pacific/Fakaofo',
                        'label' => '(GMT+13:00) Pacific/Fakaofo',
                    ],
                    [
                        'value' => 'Pacific/Tongatapu',
                        'label' => '(GMT+13:00) Pacific/Tongatapu',
                    ],
                ],
            ],
            [
                '(GMT+13:45)' => [
                    [
                        'value' => 'Pacific/Chatham',
                        'label' => '(GMT+13:45) Pacific/Chatham',
                    ],
                ],
            ],
            [
                '(GMT+14:00)' => [
                    ['value' => 'Pacific/Apia', 'label' => '(GMT+14:00) Pacific/Apia'],
                    [
                        'value' => 'Pacific/Kiritimati',
                        'label' => '(GMT+14:00) Pacific/Kiritimati',
                    ],
                ],
            ],
        ];
    }
}
