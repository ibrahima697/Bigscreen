@extends('layouts.base')

@extends('navigation')


@push('head')
<!-- Scripts -->
<script>   
    let graphData = {!! json_encode($graphData) !!};
</script>
 <!-- Fonts -->
 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
<script src="{{ asset('js/app.js')}}" defer></script>
@endpush

@section('content')
<main class="flex-1">
    <div class="py-6">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
              <div class=" rounded-lg border-4 border-dashed border-gray-200">
                <div class="col">
                    <canvas id="pie-6" ></canvas>
                </div>
                <div class="col">
                    <canvas id="pie-7"></canvas>
                </div>
                <div class="col">
                    <canvas id="pie-10"></canvas>
                </div>
                <div class="col">
                    <canvas id="radar"></canvas>
                </div>
                
              </div>
            </div>
            <!-- /End replace -->
        </div>

        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.esm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.esm.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.esm.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/helpers.js"></script>

@endsection

    {{-- @script('js/app.js')
    <script>
        let graphData = {!! json_encode($graphData) !!};
    </script>
    @endscript --}}

