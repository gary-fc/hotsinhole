@php
    use Illuminate\Support\Facades\URL;
@endphp
@foreach($country->cities as $city)
    <a href="{{URL::route('categoryCity',[$city->subdomain,$category,$city->abbreviation])}}" class="hsh-link">
        <section class="hsh-country-item-container-city">
            <label class="hsh-txt">{{$city->city_name}}</label>
        </section>
    </a>
@endforeach
