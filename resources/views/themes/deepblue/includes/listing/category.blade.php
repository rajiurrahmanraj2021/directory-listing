@foreach ($listingCategory as $category) 
    <div class="col-lg-3 col-md-4 col-6">
        <a href="" class="category-btn">
        <i class="{{ $category->icon }}" aria-hidden="true"></i>
        @lang(optional(@$category->details)->name) (9)
        </a>
    </div>
@endforeach