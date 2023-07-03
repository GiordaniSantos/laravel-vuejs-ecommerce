<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Constraint\Count;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brStates = [
            "AC" => 'Acre',
            "AL" => 'Alagoas',
            "AP" => 'Amapá',
            "AM" => 'Amazonas',
            "BA" => 'Bahia',
            "CE" => 'Ceará',
            "ES" => 'Espírito Santo',
            "GO" => 'Goiás',
            "MA" => 'Maranhão',
            "MT" => 'Mato Grosso',
            "MS" => 'Mato Grosso do Sul',
            "MG" => 'Minas Gerais',
            "PA" => 'Pará',
            "PB" => 'Paraíba',
            "PR" => 'Paraná',
            "PE" => 'Pernambuco',
            "PI" => 'Piauí',
            "RJ" => 'Rio de Janeiro',
            "RN" => 'Rio Grande do Norte',
            "RS" => 'Rio Grande do Sul',
            "RO" => 'Rondônia',
            "RR" => 'Roraima',
            "SC" => 'Santa Catarina',
            "SP" => 'São Paulo',
            "SE" => 'Sergipe',
            "TO" => 'Tocantins',
            "DF" => 'Distrito Federal',

        ];
        $countries = [
            ['code' => 'geo', 'name' => 'Georgia', 'states' => null],
            ['code' => 'ind', 'name' => 'India', 'states' => null],
            ['code' => 'bra', 'name' => 'Brasil', 'states' => json_encode($brStates)],
            ['code' => 'ger', 'name' => 'Germany', 'states' => null],
        ];
        Country::insert($countries);
    }
}