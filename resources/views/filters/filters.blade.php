<section class="hsh-filters-container">
    <section class="hsh-filters-form">
        {{Form::open(['url' => 'auth/login', 'method' => 'post','class'=>'hsh-filters-form'])}}

        <section class="hsh-filters-form-item">
            {!! Form::select('category',  ['Escorts','Escorts Masculinos'], null, ['class' => 'form-control']) !!}
        </section>

        <section class="hsh-filters-form-item">
            {!! Form::select('category',  ['Escorts','Escorts Masculinos'], null, ['class' => 'form-control']) !!}
        </section>

        <section class="hsh-filters-form-item">
            {!! Form::text('q',null,['placeholder'=> __('filter/filter.search_here')]) !!}
        </section>

        {{Form::close()}}
    </section>
</section>
