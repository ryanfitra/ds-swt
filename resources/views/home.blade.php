@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>DASHBOARD</h1>
</div>
<div class="container mt-5">
    <div class="row justify-content-left">
        <div class="col-3 text-center">
            <a href="{{route('db')}}" class="text-decoration-none">
                <img src="{{asset('images/database.svg')}}" alt="" width="100">
                <h2>DATABASE</h2>
            </a>
        </div>
        <div class="col-3 text-center">
            <a href="{{route('rekap')}}" class="text-decoration-none">
                <img src="{{asset('images/rekap.svg')}}" alt="" width="100">
                <h2>REKAP</h2>
            </a>
        </div>
        <div class="col-3 text-center">
            <a href="{{route('pengaturan')}}" class="text-decoration-none">
                <img src="{{asset('images/pengaturan.svg')}}" alt="" width="100">
                <h2>PENGATURAN</h2>
            </a>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{asset('assets/js/cleave.min.js')}}"></script>
<script>
    // use cleave.js to format the number
    var cleave = new Cleave('#number', {
        numeral: true,
        numeralThousandsGroupStyle: 'thousand',
        numeralDecimalMark: ',',
        delimiter: '.'
    });
</script>
@endpush
