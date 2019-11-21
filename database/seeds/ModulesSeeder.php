<?php

use App\modules;
use Illuminate\Database\Seeder;

class ModulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'name' => 'Foundations of Information Systems',
                'code' => 'CIT3021'
            ],
            [
                'name' => 'Advanced Databases',
                'code' => 'CIT3012'
            ],
            [
                'name' => 'Software Implementation',
                'code' => 'CIT4001'
            ],
            [
                'name' => 'Computer Security',
                'code' => 'CIT4020'
            ],
            [
                'name' => 'Database Administration',
                'code' => 'CIT3013'
            ],
            [
                'name' => 'Computing Research Methods',
                'code' => 'RES3024'
            ],
            [
                'name' => 'Operating Systems',
                'code' => 'CIT3002'
            ],
        ];

        foreach ((object) $modules as $module) {

            $newModule = new modules();
            $newModule->name = $module["name"];
            $newModule->code = $module["code"];
            $newModule->save();
        }
    }
}
