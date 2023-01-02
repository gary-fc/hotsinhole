@foreach($country->cities as $city)
    <section class="hsh-country-item-container-city">
        <label class="hsh-txt">{{$city->city_name}}</label>
    </section>
@endforeach
