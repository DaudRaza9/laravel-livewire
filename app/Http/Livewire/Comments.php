<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Comments extends Component
{
    use withPagination;
    public $newComment;
    public $image;

    protected $listeners = ['fileUpload'=>'handleFileUpload'];

    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function mount()
    {
//        $initalComment = Comment::latest()->get();
//        $this->comments = $initalComment;
    }
    public function render()
    {
        return view('livewire.comments',[
            'comments'=>Comment::latest()->paginate(2)
        ]);
    }

    public function addComment(){
        $this->validate([
            'newComment'=>'required|max:255'
        ]);

        $image = $this->storeImage();
        $createdComment = Comment::create([
            'body'=> $this->newComment,
            'user_id'=>1,
            'image'=>$image
        ]);

        $this->newComment = "";
        $this->image = "";
        session()->flash('message','Comment added successfully');
    }

    public function storeImage(){
        if(!$this->image){
            return null;
        }
        $this->image->storeAs('public/images',$this->image);
//        Storage::put('/public/images/',$this->image);
        return $this->image;
    }

    public function updated($field){
        $this->validateOnly($field,
        ['newComment'=>'required|max:255']
        );
    }

    public function remove($commentId){
        $comment = Comment::find($commentId);
        $comment->delete();
        session()->flash('message','Comment deleted successfully');

    }

    public function getImagePath(){
        return Storage::disk('images')->url($this->image);
    }
}
