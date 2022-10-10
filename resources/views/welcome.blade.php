@extends('layouts.app')
<x-slot name="navigation">
    @include('navigation')
</x-slot>
@extends('navigation')
@section('content')
    
    </div>
        <div id="graphs">
            <div class="graph">
                <canvas id="pie-6" ></canvas>
            </div>
            <div class="graph">
                <canvas id="pie-7"></canvas>
            </div>
            <div class="graph">
                <canvas id="pie-10"></canvas>
            </div>
            <div class="graph">
                <canvas id="radar"></canvas>
            </div>
        </div>
    </div>
@endsection
