<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->delete();
        DB::table('questions')->insert(array(
            array(
                'question_no' => 1,
                'question_name' => 'what does html stands for?',
                'ans_one' => 'hyper text markup language',
                'ans_two' => 'hyper links markup language',
                'ans_three' => 'hyper tool markup language',
                'correct_answer'   => 'hyper text markup language',
                'exam_id' => 1
            ),
            array(
                'question_no' => 2,
                'question_name' => 'Choose the correct HTML element for the largest heading:',
                'ans_one' => 'h6',
                'ans_two' => 'h3',
                'ans_three' => 'h1',
                'correct_answer'   => 'h1',
                'exam_id' => 1
            ),
            array(
                'question_no' => 3,
                'question_name' => 'What is the correct HTML element for inserting a line break?',
                'ans_one' => '<lb>',
                'ans_two' => '<br>',
                'ans_three' => '<b>',
                'correct_answer'   => '<br>',
                'exam_id' => 1
            ),
            array(
                'question_no' => 4,
                'question_name' => 'Choose the correct HTML element to define important text',
                'ans_one' => '<i>',
                'ans_two' => '<b>',
                'ans_three' => '<strong>',
                'correct_answer'   => '<strong>',
                'exam_id' => 1
            ),
            array(
                'question_no' => 5,
                'question_name' => 'Which character is used to indicate an end tag?',
                'ans_one' => '/',
                'ans_two' => '>',
                'ans_three' => '<',
                'correct_answer'   => '/',
                'exam_id' => 1
            ),
            array(
                'question_no' => 6,
                'question_name' => 'How can you make a numbered list?',
                'ans_one' => 'ul',
                'ans_two' => 'li',
                'ans_three' => 'ol',
                'correct_answer'   => 'ol',
                'exam_id' => 1
            ),
            array(
                'question_no' => 1,
                'question_name' => 'What does CSS stand for?',
                'ans_one' => 'colorful style sheets',
                'ans_two' => 'cascading style sheets',
                'ans_three' => 'creative style sheets',
                'correct_answer'   => 'cascading style sheets',
                'exam_id' => 2
            ),
            array(
                'question_no' => 2,
                'question_name' => 'Which HTML tag is used to define an internal style sheet?',
                'ans_one' => '<css>',
                'ans_two' => '<script>',
                'ans_three' => '<style>',
                'correct_answer'   => '<style>',
                'exam_id' => 2
            ),
            array(
                'question_no' => 3,
                'question_name' => 'Which HTML attribute is used to define inline styles?',
                'ans_one' => 'font',
                'ans_two' => 'style',
                'ans_three' => 'class',
                'correct_answer'   => 'style',
                'exam_id' => 2
            ),
            array(
                'question_no' => 4,
                'question_name' => 'Which property is used to change the background color?',
                'ans_one' => 'bgcolor',
                'ans_two' => 'color',
                'ans_three' => 'background-color',
                'correct_answer'   => 'background-color',
                'exam_id' => 2
            ),
            array(
                'question_no' => 5,
                'question_name' => 'Which CSS property is used to change the text color of an element?',
                'ans_one' => 'text-color',
                'ans_two' => 'color',
                'ans_three' => 'background-color',
                'correct_answer'   => 'text-color',
                'exam_id' => 2
            ),
            
        ));
    }
}
