
 <!---partial html for  products.blade.php ---->
 
 @foreach($products as $product)
            <li>
                <a href="{{ url('productos/'.$product->slug) }}">
                    <strong>{{ $product->title }}</strong>
                </a> -
                <a href="{{ url('productos/categoria/'.$product->category->slug) }}">
                    {{ $product->category->title }}
                </a>
            </li>
        @endforeach
