<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->delete();
        DB::table('courses')->insert(array(
            array(
                'course_name'        => 'html',
                'course_description' => '<h3><strong>what is html :</strong></h3><ul><li>HTML stands for Hyper Text Markup Language</li><li>HTML is the standard markup language for creating Web pages</li><li>HTML describes the structure of a Web page</li><li>HTML consists of a series of elements</li><li>HTML elements tell the browser how to display the content</li><li>HTML elements label pieces of content such as \"this is a heading\", \"this is a paragraph\", \"this is a link\", etc.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>html attributes</li><li>html elements</li><li>html images</li><li>html tables</li><li>html lists</li><li>html forms</li><li>html media</li><li>html graphics</li></ul>',
                'course_slug'        => 'html',
                'course_image'       => 'html',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'css',
                'course_description' => '<h3><strong>what is css:</strong></h3><ul><li><strong>CSS</strong> stands for <strong>C</strong>ascading <strong>S</strong>tyle <strong>S</strong>heets</li><li>CSS describes <strong>how HTML elements are to be displayed on screen, paper, or in other media</strong></li><li>CSS <strong>saves a lot of work</strong>. It can control the layout of multiple web pages all at once</li><li>External stylesheets are stored in <strong>CSS files</strong></li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>css colors</li><li>css borders</li><li>css transforms</li><li>css responsive</li><li>box-sizing</li><li>css grid</li><li>css flexbox</li><li>css transforms</li></ul>',
                'course_slug'        => 'css',
                'course_image'       => 'css',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'javascript',
                'course_description' => '<h3><strong>what is javascript:</strong></h3><p>&nbsp; &nbsp; &nbsp; JavaScript Can Change HTML Content</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>js conditions</li><li>js loops</li><li>js functions</li><li>js events</li><li>js forms</li><li>js objects</li><li>js classes</li><li>js async</li><li>js bom</li><li>js dom</li></ul>',
                'course_slug'        => 'javascript',
                'course_image'       => 'javascript',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'jquery',
                'course_description' => '<h3><strong>what is jquery:</strong></h3><ul><li>jQuery is a JavaScript Library.</li><li>jQuery greatly simplifies JavaScript programming.</li><li>jQuery is easy to learn.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>jquery events</li><li>jquery effects</li><li>jquery html</li><li>jquery traversing</li><li>jquery ajax</li><li>jquery misc</li></ul>',
                'course_slug'        => 'jquery',
                'course_image'       => 'jquery',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'bootstrap',
                'course_description' => '<h3><strong>what is bootstrap:</strong></h3><ul><li>Bootstrap 4 is the newest version of bootstrap, which is the most popular HTML, CSS, and JavaScript framework for developing responsive, mobile-first websites.</li><li>Bootstrap 4 is completely free to download and use!</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li><strong>build many objects</strong></li><li><strong>responsive design</strong></li><li><strong>grid</strong></li><li><strong>make themes</strong></li></ul>',
                'course_slug'        => 'bootstrap',
                'course_image'       => 'bootstrap',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'php',
                'course_description' => '<h3><strong>what is php:</strong></h3><ul><li>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages.</li><li>PHP is a widely-used, free, and efficient alternative to competitors such as Microsofts ASP.</li><li>PHP 7 is the latest stable release.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>php conditions</li><li>php loops</li><li>php functions</li><li>php forms</li><li>php files</li><li>php cookies &amp; sessions</li><li>php oop</li><li>php xml</li><li>php ajax</li></ul>',
                'course_slug'        => 'php',
                'course_image'       => 'php',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'mysql',
                'course_description' => '<h3><strong>what is mysql:</strong></h3><ul><li>SQL is a standard language for storing, manipulating and retrieving data in databases.</li><li>Our SQL tutorial will teach you how to use SQL in: MySQL.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>creating database</li><li>crud operations</li><li>joins</li><li>groups</li><li>functions</li><li>procedures</li><li>operators</li></ul',
                'course_slug'        => 'mysql',
                'course_image'       => 'mysql',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'laravel',
                'course_description' => '<h3><strong>what is laravel:</strong></h3><p>Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>routing</li><li>middleware</li><li>authentication</li><li>controllers</li><li>request</li><li>session</li><li>validation</li><li>blade templates</li><li>broadcasting</li><li>file storage</li></ul>',
                'course_slug'        => 'laravel',
                'course_image'       => 'laravel',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'vuejs',
                'course_description' => '<h3><strong>what is vue js:</strong></h3><p>Vue (pronounced /vjuː/, like <strong>view</strong>) is a <strong>progressive framework</strong> for building user interfaces. Unlike other monolithic frameworks, Vue is designed from the ground up to be incrementally adoptable. The core library is focused on the view layer only, and is easy to pick up and integrate with other libraries or existing projects. On the other hand, Vue is also perfectly capable of powering sophisticated Single-Page Applications when used in combination with <strong>modern tooling</strong> and <strong>supporting libraries</strong>.</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>components</li><li>props</li><li>events</li><li>slots</li><li>conditions</li><li>loops</li><li>filters</li><li>state management</li><li>routing</li></ul>',
                'course_slug'        => 'vuejs',
                'course_image'       => 'vue-js',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'python',
                'course_description' => '<h3><strong>what is python:</strong></h3><ul><li>Python is a programming language.</li><li>Python can be used on a server to create web applications.</li><li>Python can be used on artificial intelligent.</li><li>Python can be used on big data.</li><li>Python can be used on data science.</li><li>Python can be used on mobile application development.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>conditions</li><li>loops</li><li>functions</li><li>strings</li><li>file handling</li><li>numpy</li><li>scipy</li><li>machine learning</li><li>gui</li></ul>',
                'course_slug'        => 'python',
                'course_image'       => 'python',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'sql server',
                'course_description' => '<h3><strong>what is sql server:</strong></h3><ul><li>SQL is a standard language for storing, manipulating and retrieving data in databases.</li><li>Our SQL tutorial will teach you how to use SQL in: Sql Server.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>creating database</li><li>crud operations</li><li>joins</li><li>groups</li><li>functions</li><li>procedures</li><li>operators</li></ul',
                'course_slug'        => 'sql-server',
                'course_image'       => 'sql-server',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'django',
                'course_description' => '<h3><strong>what is django:</strong></h3><p>django is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>routing</li><li>middleware</li><li>authentication</li><li>controllers</li><li>request</li><li>session</li><li>validation</li><li>blade templates</li><li>broadcasting</li><li>file storage</li></ul>',
                'course_slug'        => 'django',
                'course_image'       => 'django',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'node.js',
                'course_description' => '<h3><strong>what is node js:</strong></h3><p>node is a <strong>progressive framework</strong> for building user interfaces. Unlike other monolithic frameworks, node is designed from the ground up to be incrementally adoptable. The core library is focused on the view layer only, and is easy to pick up and integrate with other libraries or existing projects. On the other hand, node is also perfectly capable of powering sophisticated Single-Page Applications when used in combination with <strong>modern tooling</strong> and <strong>supporting libraries</strong>.</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>components</li><li>props</li><li>events</li><li>slots</li><li>conditions</li><li>loops</li><li>filters</li><li>state management</li><li>routing</li></ul>',
                'course_slug'        => 'node-js',
                'course_image'       => 'node-js',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'express.js',
                'course_description' => '<h3><strong>what is express js:</strong></h3><p>Fast, unopinionated, minimalist web framework for Node.js</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>routing</li><li>using middleware</li><li>writing middleware</li><li>templates engine</li><li>error handling</li><li>debugging</li></ul>',
                'course_slug'        => 'express-js',
                'course_image'       => 'express-js',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'mongo-db',
                'course_description' => '<h3><strong>what is mongodb:</strong></h3><ul><li>MongoDB is a general purpose, document-based, distributed database built for modern application developers and for the cloud era.</li><li>No database makes you more productive.</li></ul><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>MongoDB <strong>stores data in flexible, JSON-like documents</strong>, meaning fields can vary from document to document and data structure can be changed over time</li><li>The document model <strong>maps to the objects in your application code</strong>, making data easy to work with</li><li><strong>Ad hoc queries, indexing, and real time aggregation</strong> provide powerful ways to access and analyze your data</li><li>MongoDB is a <strong>distributed database at its core</strong>, so high availability, horizontal scaling, and geographic distribution are built in and easy to use</li><li>MongoDB is <strong>free to use</strong>. Versions released prior to October 16, 2018 are published under the AGPL. All versions released after October 16, 2018, including patch fixes for prior versions, are published under the Server Side Public License (SSPL) v1.</li></ul>',
                'course_slug'        => 'mongo-db',
                'course_image'       => 'mongo-db',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'angular.js',
                'course_description' => '<h3><strong>what is angular js:</strong></h3><p>angular is a <strong>progressive framework</strong> for building user interfaces. Unlike other monolithic frameworks, angular is designed from the ground up to be incrementally adoptable. The core library is focused on the view layer only, and is easy to pick up and integrate with other libraries or existing projects. On the other hand, angular is also perfectly capable of powering sophisticated Single-Page Applications when used in combination with <strong>modern tooling</strong> and <strong>supporting libraries</strong>.</p><h3><strong>what you will learn in this course :&nbsp;</strong></h3><ul><li>components</li><li>props</li><li>events</li><li>slots</li><li>conditions</li><li>loops</li><li>filters</li><li>state management</li><li>routing</li></ul>',
                'course_slug'        => 'angular-js',
                'course_image'       => 'angular-js',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'adobe photoshop',
                'course_description' => 'this is description for adobe photoshop',
                'course_slug'        => 'adobe-photoshop',
                'course_image'       => 'adobe-photoshop',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'adobe illustrator',
                'course_description' => 'this is description for adobe illustrator',
                'course_slug'        => 'adobe-illustrator',
                'course_image'       => 'adobe-illustrator',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'adobe indesign',
                'course_description' => 'this is description for adobe indesign',
                'course_slug'        => 'adobe-indesign',
                'course_image'       => 'adobe-indesign',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'adobe xd',
                'course_description' => 'this is description for adobe xd',
                'course_slug'        => 'adobe-xd',
                'course_image'       => 'adobe-xd',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'adobe after effect',
                'course_description' => 'this is description for adobe after effect',
                'course_slug'        => 'adobe-after-effect',
                'course_image'       => 'adobe-after-effect',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'adobe premiere',
                'course_description' => 'this is description for adobe premiere',
                'course_slug'        => 'adobe-premiere',
                'course_image'       => 'adobe-premiere',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'drawing',
                'course_description' => 'this is description for drawing',
                'course_slug'        => 'drawing',
                'course_image'       => 'drawing',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'digital painting',
                'course_description' => 'this is description for digital painting',
                'course_slug'        => 'digital-painting',
                'course_image'       => 'digital-painting',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'unity 3d',
                'course_description' => 'this is description for unity 3d',
                'course_slug'        => 'unity-3d',
                'course_image'       => 'unity-3d',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'unreal engine',
                'course_description' => 'this is description for unreal engine',
                'course_slug'        => 'unreal-engine',
                'course_image'       => 'unreal-engine',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'it network fundmentals',
                'course_description' => 'this is description for it network fundmentals',
                'course_slug'        => 'it-network-fundmentals',
                'course_image'       => 'it-network-fundmentals',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'network security',
                'course_description' => 'this is description for network security',
                'course_slug'        => 'network-security',
                'course_image'       => 'network-security',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'cyber security',
                'course_description' => 'this is description for cyber security',
                'course_slug'        => 'cyber-security',
                'course_image'       => 'cyber-security',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'ethial hacking',
                'course_description' => 'this is description for ethial hacking',
                'course_slug'        => 'ethial-hacking',
                'course_image'       => 'ethial-hacking',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'power shell',
                'course_description' => 'this is description for power shell',
                'course_slug'        => 'power-shell',
                'course_image'       => 'power-shell',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'shell scripting',
                'course_description' => 'this is description for shell scripting',
                'course_slug'        => 'shell-scripting',
                'course_image'       => 'shell-scripting',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'windows server',
                'course_description' => 'this is description for windows server',
                'course_slug'        => 'windows-server',
                'course_image'       => 'windows-server',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'linux',
                'course_description' => 'this is description for linux',
                'course_slug'        => 'linux',
                'course_image'       => 'linux',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
            ),
            array(
                'course_name'        => 'linux adminstration',
                'course_description' => 'this is description for linux adminstration',
                'course_slug'        => 'linux-adminstration',
                'course_image'       => 'linux-adminstration',
                'created_at'         => NOW(),
                'updated_at'         => NOW()
                )
        ));
    }
}
