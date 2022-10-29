<div>

    @foreach ($category as $item)
        <div class="form-check mb-1">
            <input class="form-check-input" type="checkbox" value="{{ $item->id }}" wire:model="Sorting">



            <label class="category-form-check-label" for="c1">{{ $item->{'name_' . app()->getLocale()} }}</label>


        </div>
    @endforeach

</div>
