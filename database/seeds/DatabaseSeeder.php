<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Serie;
use App\Part;
use App\Spare;
use App\Subpart;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Spare::class, 5)->create();

        Brand::create([
            'name' => 'Toyota'
        ])
            ->series()
            ->saveMany([
                new Serie([
                    'name' => 'Prius'
                ]),
                new Serie([
                    'name' => 'Vios'
                ])
            ]);


        Brand::create([
            'name' => 'Honda'
        ])
            ->series()
            ->saveMany([
                new Serie([
                    'name' => 'Accord'
                ]),
                new Serie([
                    'name' => 'City'
                ])
            ]);

        Part::create([
            'name' => 'Brake',
        ]);

        Part::create([
            'name' => 'Tire',
        ])
            ->subparts()
            ->saveMany([
                new Subpart([
                    'name' => 'Sub Part A'
                ]),
                new Subpart([
                    'name' => 'Sub Part B'
                ]),
                new Subpart([
                    'name' => 'Sub Part C'
                ])
            ]);

        Part::create([
            'name' => 'Engine',
        ]);
    }
}
