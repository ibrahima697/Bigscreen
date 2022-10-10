@extends('layouts.base')

@extends('navigation')



<main class="flex-1">
    <div class="py-6">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
              <div class=" rounded-lg border-4 border-dashed border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <th class="px-6 py-3 ">ID</th>
                        <th class="px-6 py-3 ">Questions</th>
                        <th class="px-6 py-3">Reponses</th>
                        
                    <tbody class="bg-white divide-y divide-gray-200">
                       @foreach($answers as $answer)
                        <tr>
                            <td class="px-6 py-3">{{$answer['id']}}</td>
                            <td class="px-6 py-3"> 
                                @foreach($questions as $question)
                                @if($question['id'] == $answer['id'])
                                {{$question['libelle']}}
                                @endif
                                @endforeach
                            </td>
                            <td class="px-6 py-3">{{$answer['libelle']}}</td>
                        </tr>
                    @endforeach
                        

                    </tbody>
                </table>
              </div>
            </div>
            <!-- /End replace -->
        </div>

        </div>
    </div>
    </main>

    {{-- @script('js/app.js')
    <script>
        let graphData = {!! json_encode($graphData) !!};
    </script> --}}

