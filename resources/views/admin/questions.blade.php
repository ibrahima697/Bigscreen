@extends('layouts.base')

@extends('navigation')

<main class="flex-1">
    <div class="py-3">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
       
            <!-- Replace with your content -->
            <div class="py-4">
              <div class=" rounded-lg border-4 border-dashed border-gray-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <th class="px-6 py-3 text-left">Questions</th>
                        <th class="px-6 py-3 text-left">Types</th>
                    </thead> 
                    <tbody >
                     @foreach($questions as $question)
                        <tr>
                            <td  class="px-6 py-3">{{$question['libelle']}}</td>
                            <td  class="px-6 py-3 ">{{$question['type']}}</td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
              </div>
            </div>
            <!-- /End replace -->
        </div>
    </div>
    </main>
