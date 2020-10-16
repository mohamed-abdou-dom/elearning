<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        DB::table('categories')->insert(array(
            array(
                'category_name'        => 'development',
                'category_description' => '<p>development is the process of conceiving, specifying, designing, programming, documenting, testing, and bug fixing involved in creating and maintaining applications, frameworks, or other software components.&nbsp;</p><p>Software development is a process of writing and maintaining the source code, but in a broader sense, it includes all that is involved between the conception of the desired software through to the final manifestation of the software, sometimes in a planned and structured process.&nbsp;</p><p>Therefore, software development may include research, new development, prototyping, modification, reuse, re-engineering, maintenance, or any other activities that result in software products.</p>',
                'category_slug'        => 'development',
                'category_image'       => 'development',
                'created_at'           => NOW(),
                'updated_at'           => NOW()
            ),
            array(
                'category_name'        => 'designing',
                'category_description' => '<p>A <strong>design</strong> is a plan or specification for the construction of an object or system or for the implementation of an activity or process, or the result of that plan or specification in the form of a prototype, product or process.</p><p>The verb <i>to design</i> expresses the process of developing a design. In some cases, the direct construction of an object without an explicit prior plan (such as in craftwork, some engineering, coding, and graphic design) may also be considered to be a design activity.</p><p>&nbsp;The design usually has to satisfy certain goals and constraints, may take into account aesthetic, functional, economic, or socio-political considerations, and is expected to interact with a certain environment. Major examples of designs include architectural blueprints, engineering drawings, business processes, circuit diagrams, and sewing patterns.</p>',
                'category_slug'        => 'designing',
                'category_image'       => 'designing',
                'created_at'           => NOW(),
                'updated_at'           => NOW()
            ),
            array(
                'category_name'        => 'information technology',
                'category_description' => '<p><strong>Information technology</strong> (<strong>IT</strong>) is the use of computers to store, retrieve, transmit, and manipulate data or information. IT is typically used within the context of business operations as opposed to personal or entertainment technologies.</p><p>IT is considered to be a subset of information and communications technology (ICT). An <strong>information technology system</strong> (<strong>IT system</strong>) is generally an information system, a communications system or, more specifically speaking, a computer system – including all hardware, software and peripheral equipment – operated by a limited group of users.</p>',
                'category_slug'        => 'information-technology',
                'category_image'       => 'it',
                'created_at'           => NOW(),
                'updated_at'           => NOW()
                )
        ));
    }
}
