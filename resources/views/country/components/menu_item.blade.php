@foreach($categories as $category)
    <a href="{{route('category',[$subdomain,$category->category_url])}}" class="hsh-link">
        <article class="hsh-menu-item-container">
            <section class="hsh-menu-item-image">
                <img
                    src="{{$category->category_image_url}}"/>
            </section>

            <section class="hsh-menu-item-category">
                <label class="hsh-txt">{{__('category/category.'.$category->category_name)}}</label>
            </section>

            <section class="hsh-menu-item-category-description">
                <label class="hsh-txt">Encuentra en Bolivia a las mejores escorts que te ofrecen gran variedad de
                    servicios eróticos.
                    Anímate y
                    no esperes más!</label>
            </section>

            @foreach($cities as $city)
                <section class="hsh-menu-item-city">
                    <label
                        class="hsh-txt">{{__('category/category.'.$category->category_name)}} {{$city->city_name}}</label>
                </section>
            @endforeach
        </article>
    </a>
@endforeach
