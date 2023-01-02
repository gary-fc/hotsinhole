<article class="hsh-country-item-container">
    <section class="hsh-country-item-container-country">
        <section class="hsh-country-item-left">
            <img src="https://cdn-icons-png.flaticon.com/512/555/555546.png" alt=""/>
        </section>

        <section class="hsh-country-item-right">
            <section class="hsh-country-item-country-name">
                <label class="hsh-txt">{{$country->country_name}}</label>
            </section>

            <section class="hsh-country-item-country-body"></section>

            <section class="hsh-country-item-country-details">
                <section class="hsh-country-item-country-details-escort-women">
                    <label title="escort-women" class="icon-home"></label>
                    <label class="hsh-txt">50</label>
                </section>

                <section class="hsh-country-item-country-details-escort-man">
                    <label title="escort-man" class="icon-home"></label>
                    <label class="hsh-txt">50</label>
                </section>

                <section class="hsh-country-item-country-details-escort-trans-transvestites">
                    <label title="escort-trans-transvestites" class="icon-home"></label>
                    <label class="hsh-txt">50</label>
                </section>
            </section>
        </section>
    </section>

    <section class="hsh-country-item-container-cities">
        @include('home.country.components.city_item',[$country])
    </section>
</article>

