<?php

namespace App\Http\Livewire;

use App\Models\SupportTicket;
use Livewire\Component;

class Tickets extends Component
{
    public $active;
    protected $listeners = ['ticketSelected'];

    public function ticketSelected($ticketId)
    {
        $this->active = $ticketId;
    }
    public function render()
    {
        $ticket = SupportTicket::all();

        return view('livewire.tickets',[
            'tickets'=>$ticket
        ]);
    }
}
