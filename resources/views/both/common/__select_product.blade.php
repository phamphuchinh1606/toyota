<select class="form-control" id="product_type" name="{{$selectName}}">
    @foreach($productTrees as $productItem)
        @if(isset($productItem->products))
            <optgroup label="{{$productItem->product_type_name}}" value="{{$productItem->product_type_id}}">
                @foreach($productItem->products as $product)
                    <option value="{{$product->id}}" @if(isset($defaultValue) && $defaultValue == $product->id) selected @endif>
                        {{$product->product_name}}
                    </option>
                @endforeach
            </optgroup>
        @else
            <option class="font-weight-bold" value="{{$productItem->product_type_id}}" @if(isset($defaultValue) && $defaultValue == $productItem->product_type_id) selected @endif>
                <b >{{$productItem->product_type_name}}</b>
            </option>
        @endif
    @endforeach
</select>
