<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Intervention\Image\ImageManagerStatic;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Comments extends Component
{
    use withPagination;
    public $newComment;
    public $image;
    public $ticketId;

    protected $listeners = [
        'fileUpload'=>'handleFileUpload',
        'ticketSelected'
    ];

    public function ticketSelected($ticketId){
        $this->ticketId = $ticketId;
    }

    public function handleFileUpload($imageData)
    {
        $this->image = $imageData;
    }

    public function mount()
    {

    }
    public function render()
    {
        return view('livewire.comments',[
            'comments'=>Comment::where('support_ticket_id',$this->ticketId)->latest()->paginate(2)
        ]);
    }

    public function addComment(){
        $this->validate([
            'newComment'=>'required|max:255'
        ]);

        $images =   $this->imageUpload($this->image, 'Comment', 'public/images');

        $createdComment = Comment::create([
            'body'=> $this->newComment,
            'user_id'=>1,
            'image'=>$images,
            'support_ticket_id'=>$this->ticketId
        ]);

        $this->newComment = "";
        $this->image = "";
        session()->flash('message','Comment added successfully');
    }

    public function updated($field){
        $this->validateOnly($field,
        ['newComment'=>'required|max:255']
        );
    }

    public function remove($commentId){
        $comment = Comment::find($commentId);
//        Storage::disk('public')->delete($comment->image);
        Storage::delete('public/images/'.$comment->image);
        $comment->delete();
        session()->flash('message','Comment deleted successfully');

    }

    public function getImagePath(){
        return Storage::disk('images')->url($this->image);
    }

    public function imageUpload($image, $fileStart, $originalPath): string
    {
        $fileName = $fileStart . '-' . time() . rand(1, 100) . '.' . 'png';
        Storage::putFileAs($originalPath, $image, $fileName);
        return $fileName;

    }
}
