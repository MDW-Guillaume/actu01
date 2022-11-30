@extends('layout.app')

@section('title')
    Météo
@endsection

@section('content')
    <div class="container meteo">
        <div class="rubric_title">
            <h2>Météo</h2>
        </div>
        <div class="meteo_block">
            <div class="meteo_info">
                <div class="meteo_info_left">
                    <h3>{{ $meteo['location']['name'] }}</h3>
                    <span class="meteo_temp_info">{{ $meteo['condition']['name'] }}</span><br>
                </div>
                <div class="meteo_info_right">
                    <span class="meteo_temp_number">{{ $meteo['forecast']['temp'] }}°</span>
                    <div class="minmax">
                        <span>Max. {{ $meteo['forecast']['temp_max'] }}°</span>
                        <span>Min. {{ $meteo['forecast']['temp_min'] }}°</span>
                    </div>
                </div>
            </div>
            <div class="meteo_icon">
                <img src="{{ $meteo['condition']['icon'] }}" alt="">
            </div>
        </div>
    </div>
@endsection
