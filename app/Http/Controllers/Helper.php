<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Answer as Answer;
use App\Question as Question;
use App\User as User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Helper extends Controller
{
    public function DisplayQ(){
        
        $questions = Question::all();
        $data = array(
                'questions' => $questions
            );
        return view('home', $data);
    }
    
    public function Question($id){
        
        $question = Question::find($id);
        $answers = Answer::where('qid', '=', $id)->get();
        $data = array(
                'Question' => $question,
                'Answers' => $answers
            );
        return view('question', $data);
    }
    
    public function Answer($id){
        
        $answer = Answer::find($id);
        $question = Question::find($answer->qid);
        $data = array(
                'Question' => $question,
                'Answer' => $answer
            );
        return view('answer', $data);
    }
    
    public function Profile(){
    
        if (Auth::check()) {
            $user = Auth::user();
            $questions = Question::where('uid', '=', $user->id)->get();
            $answers = Answer::where('uid', '=', $user->id)->get();
            $data = array(
                'user' => $user,
                'questions' => $questions,
                'answers' => $answers
            );
            return view('profile', $data);
        }else{
            return view('login');
        }
    }
    
    public function MyAns(){
    
        if (Auth::check()) {
            $user = Auth::user();
            $answers = Answer::where('uid', '=', $user->id)->get();
            $data = array(
                'user' => $user,
                'answers' => $answers
            );
            return view('myans', $data);
        }else{
            return view('login');
        }
    }
    
    public function MyQues(){
    
        if (Auth::check()) {
            $user = Auth::user();
            $questions = Question::where('uid', '=', $user->id)->get();
            $data = array(
                'user' => $user,
                'questions' => $questions,
            );
            return view('myques', $data);
        }else{
            return view('login');
        }
    }
}
