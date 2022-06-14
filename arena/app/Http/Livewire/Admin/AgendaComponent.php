<?php

namespace App\Http\Livewire\Admin;
// namespace App\Http\Controllers;


use App\Models\Agenda;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class AgendaComponent extends Component
{
    use WithPagination;
    
    public $search = '';
    // public $lokaal, $lokaalnaam, $omschrijving, $capaciteit;

    public function index()
    {
        return view('agenda');
    }

    public function store(Request $request)
    {
        $agendas = new agenda;
        
        $agendas->artist = $request->artist;
        $agendas->zaal = $request->zaal;
        $agendas->capaciteit = $request->capaciteit;
        $agendas->omschrijving = $request->omschrijving;

        $agendas->save();
        return redirect('agenda')->with('status', '');
    }

    public function render()
    {
        //dd(Auth::user());
        return view('Livewire.Admin.agenda-component', [
            'agendas'=> Agenda::search('artist', $this->search)->get(),
        ])->layout('layouts.base');
        
    }
}