@extends('layouts.main-layout')

@section('content')
    <main>
        <div class="container">
            <ul>
                @foreach ($employees as $employee)
                    <li>
                        <div>
                            <span class="mini-title">Employee</span> - {{ $employee -> firstname }} {{ $employee -> lastname }}
                        </div>
                        <div>
                            <span class="mini-title">Location</span> - {{ $employee -> location -> street }}, {{ $employee -> location -> state }} 
                        </div>
                        <div>
                            <span class="mini-title">Tasks</span> -
                            @foreach ($employee -> tasks as $task)
                                {{ $task -> name }}
                                @if ($loop -> index < ($loop -> count - 1))
                                    ,
                                @endif
                            @endforeach
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </main>
@endsection