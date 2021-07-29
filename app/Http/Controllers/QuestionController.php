<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Question;

class QuestionController extends Controller
{
    public function add_qus($id){
        $cat = Category::find($id);
        $qus = new Question();
        $qus->question = 'How can I ask custome questions?';
        $qus->answer = 'Check our forum';
        $cat->question()->save($qus);

    }

    public function create_qus($id){

        $cat = Category::find($id);

        return view('admin.create_qus', ['cat' => $cat]);

    }

    public function add($id){

        request()->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        Question::create([
            'question' => request('question'),
            'answer' => request('answer'),
            'category_id' => $id,
        ]);

        return redirect('create_qus/'.$id)->with('success','Question added successfully to: ');

    }

    public function update(Question $id){

        request()->validate([
            'qusEdit' => 'required',
            'ansEdit' => 'required'
        ]);

        $id->update([
            'question' => request('qusEdit'),
            'answer' => request('ansEdit'),
        ]);

        return redirect('/admin')->with('success', 'Updated successfully');

    }

    public function delete($id){
        Question::destroy($id);
        return redirect('/admin')->with('success', 'Question deleted successfully');
    }

}
