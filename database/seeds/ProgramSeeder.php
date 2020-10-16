<?php

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->delete();
        DB::table('programs')->insert(array(
            array(
                'program_name'        => 'php web development',
                'program_description' => 'this is description for php web development',
                'program_slug'        => 'php-web-development',
                'program_image'       => 'php-web-development',
                'category_id'         => 1,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'python web development',
                'program_description' => 'this is description for python web development',
                'program_slug'        => 'python-web-development',
                'program_image'       => 'python-web-development',
                'category_id'         => 1,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'full-stack web development',
                'program_description' => 'this is description for full-stack web development',
                'program_slug'        => 'full-stack-web-development',
                'program_image'       => 'full-stack-web-development',
                'category_id'         => 1,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'mean-stack web development',
                'program_description' => 'this is description for mean-stack web development',
                'program_slug'        => 'mean-stack-web-development',
                'program_image'       => 'mean-stack-web-development',
                'category_id'         => 1,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'graphic design diploma',
                'program_description' => 'this is description for graphic design diploma',
                'program_slug'        => 'graphic-design-diploma',
                'program_image'       => 'graphic-design-diploma',
                'category_id'         => 2,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'game design diploma',
                'program_description' => 'this is description for game design diploma',
                'program_slug'        => 'game-design-diploma',
                'program_image'       => 'game-design-diploma',
                'category_id'         => 2,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'web design diploma',
                'program_description' => 'this is description for web design diploma',
                'program_slug'        => 'web-design-diploma',
                'program_image'       => 'web-design-diploma',
                'category_id'         => 2,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'network and security',
                'program_description' => 'this is description for network and security',
                'program_slug'        => 'network-and-security',
                'program_image'       => 'network-security',
                'category_id'         => 3,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
            ),
            array(
                'program_name'        => 'operating systems',
                'program_description' => 'this is description for operating systems',
                'program_slug'        => 'operating-systems',
                'program_image'       => 'operating-systems',
                'category_id'         => 3,
                'created_at'          => NOW(),
                'updated_at'          => NOW()
                )
        ));
    }
}
