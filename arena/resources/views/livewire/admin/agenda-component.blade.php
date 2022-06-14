@extends('agendamaster')
@include('layouts.header')
<main>
  <h4 class="ml-6 p-3 font-bold text-dark-blue"> Agenda </h4>

  <div class="flex">
      <button onclick="openModal(true)" class="ml-6 mt-2 bg-dark-blue text-black hover:bg-green-600 hover:text-white font-medium text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">
        Voeg nieuwe datum toe
      </button>
      <input wire:model="search" class="w-1/4 ml-8 mt-2 h-12 rounded p-2" type="search" placeholder="Zoek een artist..." >
  </div>


  <h4 class="ml-3 mt-6 p-3 font-bold text-red-600"> Records: </h4>

  <table class="border-separate w-full">
      <thead>
        <tr>
          <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell">No</th>
          <th class="p-3 font-bold bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell">Artist</th>
          <th class="p-3 font-bold bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell">Event zaal</th>
          <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell">Capaciteit</th>
          <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell">Omschrijving</th>
          <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell"><i class="fas fa-edit"></i></th>
          <th class="p-3 font-bold uppercase bg-gray-200 text-gray-600 text-center border border-gray-300 hidden lg:table-cell"><i class="fas fa-trash-alt"></i></th>
        </tr>
      </thead>
      <tbody>
        @forelse ($agendas as $agenda)
          <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold uppercase"></span>
                {{ $agenda->id }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold"></span>
              {{ $agenda->artist }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold"></span>
              {{ $agenda->zaal }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold uppercase"></span>
              {{ $agenda->capaciteit }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold uppercase"></span>
              {{ $agenda->omschrijving }}
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 hover:bg-yellow-300 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold uppercase"><i class="fas fa-edit"></i></span>
                <a href="#" class="text-blue-400 hover:text-blue-600 underline"><i class="fas fa-edit"></i></a>
            </td>
            <td class="w-full lg:w-auto p-3 text-gray-800 hover:bg-red-500 text-center border border-b block lg:table-cell relative lg:static">
              <span class="lg:hidden absolute top-0 left-0 bg-gray-200 px-2 py-1 text-xs font-bold uppercase"><i class="fas fa-trash-alt"></i></span>
              <a href="#" class="text-blue-400 hover:text-blue-600 underline"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
        @empty            
          <td colspan="7" class="w-full"> Er zijn geen zoekresultaten gevonden met de aangeleverde zoekopdracht. </td>            
        @endforelse
      </tbody>
  </table>
</main>
<!-- <form enctype="multipart/form-data" wire.sumbit.prevent="store">
  <div id="modal_overlay" class="hidden fixed inset-0  bg-opacity-30 h-1/5 w-full flex justify-center items-start md:items-center pt-10 md:pt-0">
    <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-2/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300"> -->
  <div id="modal_overlay" class="hidden fixed inset-0 bg-opacity-30 h-1/5 w-full flex justify-center items-start md:items-center pt-10 md:pt-0">
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
    <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">
    <button 
      onclick="openModal(false)"
      class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
      &cross;
      </button> 
      <div class="px-4 py-3 border-b border-gray-200">
        <p class="font-semibold text-gray-800">Nieuwe datum toevoegen</p>
      </div>
    <!-- <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
        <p class="font-semibold text-gray-800">Lokaal toevoegen</p> -->
        <!-- <svg
          onclick="openModal(false)"
          class="w-6 h-6"
          fill="none"
          stroke="currentColor"
          viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M6 18L18 6M6 6l12 12"
          ></path>
        </svg>
       </div> -->
       <form name="agendas" id="agendas" method="post" action="{{route('store.form')}}">
        @csrf
      <div class="flex flex-col px-6 py-5 bg-gray-50">
      <p class="mb-2 font-semibold text-gray-700">Artist</p>
          <input type="text" name="artist" placeholder="Artist" class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-6" id="artist" required="">
        <hr />
        <p class="mt-2 mb-2 font-semibold text-gray-700">Event zaal</p>
          <input type="text" name="zaal" placeholder="Event zaal" class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-6" id="zaal" required="">
        <hr />
        <p class="mt-2 mb-2 font-semibold text-gray-700">Capaciteit </p>
          <input type="number" name="capaciteit" placeholder="Aantal beschikbaar personen" class="p-5 bg-white border border-gray-200 rounded shadow-sm h-6" id="capaciteit" required=""><br />
        <hr />
        <p class="mb-2 font-semibold text-gray-700">Omschrijving</p>
        <input type="text" name="omschrijving" placeholder="korte omschrijving" class="p-5 mb-5 bg-white border border-gray-200 rounded shadow-sm h-6" id="omschrijving" required="">
      <hr />
      <div class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
        <button onclick="openModal(false)" > <p class="font-semibold text-gray-600">Cancel</p></button>
        <button type="submit" class="px-4 py-2 text-white font-semibold bg-green-600 rounded">
          Save
        </button>
        {{-- onclick="store()" --}}
        {{-- wire:model="lokaal" --}}
      </form>
      </div>
    </div>
  </div>
</div> 
<script>
  const modal_overlay = document.querySelector('#modal_overlay');
  const modal = document.querySelector('#modal');
  
  function openModal (value){
    const modalCl = modal.classList
    const overlayCl = modal_overlay
  
    if(value){
    overlayCl.classList.remove('hidden')
    setTimeout(() => {
        modalCl.remove('opacity-0')
        modalCl.remove('-translate-y-full')
        modalCl.remove('scale-150')
    }, 100);
    } else {
    modalCl.add('-translate-y-full')
    setTimeout(() => {
        modalCl.add('opacity-0')
        modalCl.add('scale-150')
    }, 100);
    setTimeout(() => overlayCl.classList.add('hidden'), 300);
    }
  }
  openModal(false)
</script>

@include('layouts.footer')