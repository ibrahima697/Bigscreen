@extends('layouts.base')


@section('content')
   
    <main class="flex-1">
        <div class="py-6">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">BIGSCREEN</h1>
          </div>
          <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
              <div class="h-96 rounded-lg border-4 border-dashed border-gray-200">
                <div class="flex flex-col h-full justify-center items-center">
                  <div class="text-center">
                    <div class="text-4xl font-medium text-gray-900">Merci d'avoir répondu à ce formulaire</div>
                    <div class="mt-4 text-lg text-gray-500"><p> Toute l’équipe de Bigscreen vous remercie pour votre engagement. Grâce à
                        votre investissement, nous vous préparons une application toujours plus
                        facile à utiliser, seul ou en famille.
                        Si vous désirez consulter vos réponse ultérieurement, vous pouvez consultez
                        cette adresse:
                    </p>
                    <a href="{{route('screens.answers')}}">{{route('screens.answers')}}</a>
                </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- /End replace -->
          </div>
        </div>
      </main>

@endsection

