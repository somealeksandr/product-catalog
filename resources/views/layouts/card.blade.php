<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} ₴</p>
            <div>
                <form action="" method="POST">
                    <button type="submit" class="btn btn-primary" role="button">В кошик</button>
                    <a href="{{ route('product', [isset($category) ? $category->code : $product->category->code, $product->code]) }}"
                       class="btn btn-default"
                       role="button">Детальніше</a>
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
