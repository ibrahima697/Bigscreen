@extends('layouts.base')

@push('head')
<!-- Scripts -->
{{-- <script>   
    let graphData = {!! json_encode($graphData) !!};
</script>
 --}}

@section('content')
   
    <main class="flex-1  bg-gradient-to-r from-sky-800 to-cyan-600 pb-24">
        <div class="py-6">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <h1 class="text-2xl font-semibold text-gray-900">BIGSCREEN</h1>
              <h2 class="text-2xl font-semibold text-gray-900">Merci de répondre à toutes les questions et de valider le formulaire en bas de page.</h2>
            </div>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8 ">
            <!-- Replace with your content -->
            <div class="py-4">
              <div class=" rounded-lg border-4 border-dashed border-gray-200">
                <div class="flex flex-col h-full">
        <form class="space-y-8 divide-y" id="form" action="{{route('store')}}" method="POST" enctype="multipart/form-data"> 
            @csrf

            <section class="questions">
                
               
                <header>
                    <h1 class =" text-white">{{"Question 1/" . (count($questions) + 1)}}</h1>
                </header>
                 
                <label class="text-white block text-sm font-medium" for="email">Votre adresse mail</label>
                <input class="
                block
                w-full
                mt-1
                border-gray-300
                rounded-md
                shadow-sm
                focus:border-indigo-300
                focus:ring
                focus:ring-indigo-200
                focus:ring-opacity-50
              " type="text" id="email" name="email" value="{{ old('email') }}">
                {{-- DISPLAY ERROR --}}
                @error("email")
                <div class="error">
                    @switch($message)
                        @case('validation.required')
                            <p>Le champ est requis</p>
                            @break

                        @case('validation.email')
                            <p>Email non valide</p>
                            @break

                        @default
                            <p>{{$message}}</p>
                    @endswitch
                </div>
                @enderror

            </section>
    @foreach($questions as $key => $question)
                <section class =" text-white">
                    <header>
                        <h1>{{"Question " . ($key + 2) . "/" . (count($questions)+1)}}</h1>    
                    </header>
                    @switch($question['type'])
                        @case('A')
                            <p class =" text-white">{{$question['libelle']}}</p>
                            <div class="text-white block mb-6">
                                @foreach($question['choices'] as $keyChoice => $choice)
                                    <div>
                                        <input  class="text-indigo-600  border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"type="radio" id="{{$keyChoice . '-' . $question['id']}}" name="Q{{ ($key + 1) }}" value="{{$choice}}" {{ old( "Q".($key + 1) ) == $choice ? 'checked' : '' }}>
                                        <label  for="{{$keyChoice . '-' . $question['id']}}">{{$choice}}</label>
                                    </div>
                                @endforeach
                            </div>
                            @break

                        @case('B')
                            <label class="text-white" for="{{$question['id']}}">{{$question['libelle']}}</label>
                            <input class="text-indigo-600 border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="text" id="{{$question['id']}}" name="Q{{ ($key + 1) }}" value="{{old( "Q".($key + 1) )}}">
                            @break

                        @case('C')
                            <p class =" text-white">{{$question['libelle']}}</p>
                            <div class="block mb-6">
                                <div>
                                    <input class="text-gray-900  border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"  type="radio" id="1-{{$question['id']}}" name="Q{{ ($key + 1) }}" value="1" {{ old( "Q".($key + 1) ) == 1 ? 'checked' : '' }}>
                                    <label class =" text-white" for="1-{{$question['id']}}">1</label>
                                </div>
                                <div>
                                    <input class="text-indigo-600 border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"  type="radio" id="2-{{$question['id']}}" name="Q{{ ($key + 1) }}" value="2" {{ old( "Q".($key + 1) ) == 2 ? 'checked' : '' }}>
                                    <label class =" text-white" for="2-{{$question['id']}}">2</label>
                                </div>
                                <div>
                                    <input class="text-indigo-600 border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"  type="radio" id="3-{{$question['id']}}" name="Q{{ ($key + 1) }}" value="3" {{ old( "Q".($key + 1) ) == 3 ? 'checked' : '' }}>
                                    <label class =" text-white" for="3-{{$question['id']}}">3</label>
                                </div>
                                <div>
                                    <input class="text-indigo-600 border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50"  type="radio" id="4-{{$question['id']}}" name="Q{{ ($key + 1) }}" value="4" {{ old( "Q".($key + 1) ) == 4 ? 'checked' : '' }}>
                                    <label class =" text-white" for="4-{{$question['id']}}">4</label>
                                </div>
                                <div>
                                    <input class="text-indigo-600 border-gray-300 rounded-full shadow-sm focus:border-indigo-300 focus:ring focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50" type="radio" id="5-{{$question['id']}}" name="Q{{ ($key + 1) }}" value="5" {{ old( "Q".($key + 1) ) == 5 ? 'checked' : '' }}>
                                    <label class =" text-white" for="5-{{$question['id']}}">5</label>
                                </div>
                            </div>
                            @break
                    @endswitch
                    {{-- DISPLAY ERROR --}}
                    @error("Q".($key + 1))
                    <div class="error">
                        @switch($message)
                            @case('validation.required')
                                <p>Le champ est requis</p>
                                @break

                            @case('validation.email')
                                <p>Email non valide</p>
                                @break
                            @case('validation.max.string')
                                <p>255 caractères max</p>
                                @break
                            @default
                                <p>{{$message}}</p>
                        @endswitch
                    </div>
                    @enderror
                </section>
            @endforeach
            <div class=" mb-6">
                <button class=" h-10
                px-5
                text-indigo-100
                bg-indigo-700
                rounded-lg
                transition-colors
                duration-150
                focus:shadow-outline
                hover:bg-indigo-800" type="submit" class="btn">Valider</button>
            </div>
        
            
        </form>
                </div>
              </div>
            </div>
            </div>
            </div>
        </div>
    </main>

@endsection

