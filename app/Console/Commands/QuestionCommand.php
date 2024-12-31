<?php

namespace App\Console\Commands;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class QuestionCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:questions';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating questions';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $questions = Storage::disk('questions')->allFiles('tickets');
        $images = Storage::disk('images')->allFiles();

        foreach ($questions as $question) {
            $this->info('Обрабатываю ' . $question);

            $ticketPath = Storage::disk('questions')->path($question);
            $ticketQuestions = File::json($ticketPath);

            foreach ($ticketQuestions as $ticketQuestion) {
                $title = $ticketQuestion['title'];
                $ticketNumber = $ticketQuestion['ticket_number'];
                $ticketCategory = $ticketQuestion['ticket_category'];
                $image = str($ticketQuestion['image'])->explode('/')->last();

                if ($image === 'no_image.jpg') {
                    $image = null;
                } else {
                    $image = "images/A_B/$image";
                }

                $questionText = $ticketQuestion['question'];
                $correctAnswer = $ticketQuestion['correct_answer'];
                $answerTip = $ticketQuestion['answer_tip'];
                $question = Question::query()->create([
                    'title' => $title,
                    'ticket_number' => $ticketNumber,
                    'ticket_category' => $ticketCategory,
                    'image' => $image,
                    'question' => $questionText,
                    'correct_answer' => $correctAnswer,
                    'answer_tip' => $answerTip,
                ]);

                $answers = $ticketQuestion['answers'];
                foreach ($answers as $answer) {
                    Answer::query()->create([
                        'answer_text' => $answer['answer_text'],
                        'is_correct' => $answer['is_correct'],
                        'question_id' => $question->id,
                    ]);
                }
            }
        }
    }
}
