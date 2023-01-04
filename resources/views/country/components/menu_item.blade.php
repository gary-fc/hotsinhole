@php
    $categories = \App\Models\Category::all();
@endphp

@foreach($categories as $category)
    <a href="{{route('category',[$subdomain,$category->category_url])}}" class="hsh-link">
        <article class="hsh-menu-item-container">
            <section class="hsh-menu-item-image">
                <img
                    src="https://images.pexels.com/photos/2805050/pexels-photo-2805050.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"/>
            </section>

            <section class="hsh-menu-item-category">
                <label>{{__('category/category.'.$category->category_name)}}</label>
            </section>

            <section class="hsh-menu-item-category-description">
                <label>Encuentra en Bolivia a las mejores escorts que te ofrecen gran variedad de servicios eróticos.
                    Anímate y
                    no esperes más!</label>
            </section>

            <section class="hsh-menu-item-city">
                <label>Escorts Santa Cruz</label>
            </section>
        </article>
    </a>
@endforeach
