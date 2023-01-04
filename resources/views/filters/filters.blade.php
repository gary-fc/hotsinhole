<section class="hsh-filters-container">
    <section class="hsh-filters-form">
        {{Form::open(['url' => 'auth/login', 'method' => 'get','class'=>'hsh-filters-form'])}}

        <section class="hsh-filters-form-item">
            {!! Form::select('category',  ['Escorts','Escorts Masculinos'], null, ['class' => 'form-control']) !!}
        </section>

        <section class="hsh-filters-form-item">
            {!! Form::select('city',  ['Santa Cruz','La Paz'], null, ['class' => 'form-control']) !!}
        </section>

        <section class="hsh-filters-form-item">
            {!! Form::text('q',null,['placeholder'=> __('filter/filter.search_here')]) !!}
        </section>

        <section class="hsh-filters-form-item">
            <button class="hsh-link hsh-filters-form-item-btn-search">
                <label class="hsh-txt icon-home"></label>
                <label class="hsh-txt">Buscar</label>
            </button>
        </section>

        {{Form::close()}}
    </section>
</section>
