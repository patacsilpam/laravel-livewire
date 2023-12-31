<?php

namespace App\Livewire;
use App\Models\TodoItem;
use Livewire\Component;

class Todolist extends Component
{
    public $todos;
    public string $todoText = '';

    public function mount(){
        $this->selectTodos();
    }
    public function render()
    {
        return view('livewire.todolist');
    }
   
    public function addTodo(){
        $todo = new TodoItem();
        $todo->name = $this->todoText;
        $todo->completed = false;
        $todo->save();

        $this->todoText = '';
        $this->selectTodos();
    }
    public function toggleTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = TodoItem::where('id', $id)->first();
        if (!$todo) {
            return;
        }
        $todo->delete();
        $this->selectTodos();
    }
    public function selectTodos(){
        //$this->todo = TodoItem::orderBy('created_at','ASC')->get();
        $this->todos = TodoItem::orderBy('created_at','ASC')->get();
    }


 
}
