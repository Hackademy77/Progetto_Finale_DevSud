<div class="card d-flex justify-content-center align-items-center mt-5">
  <img src="{{!$product->images()->get()->isEmpty() ? Storage::url($product->images()->first()->path) : 'https://picsum.photos/200'}}" class="img-card mb-2" alt="">
    <h4>{{$product->title}}</h4>
    <a href="{{route ('category.show',$product->category)}}" class= "category-card rounded text-decoration-none p-2">{{$product->category->name}}</a>
      <p class="lead">€{{$product->price}}</p>
      <p>{{Str::limit($product->description , 25)}}</p>
      <p>Pubblicato il: {{$product->created_at->format('d/m/y')}}</p>
      
      <a href="{{route('product.show', compact('product'))}}" class="text-decoration-none" > 
        <button class="button-48"><span class="text">DETTAGLI</span></button>
      </a>
    </div>

