<div id="cart" hx-swap-oob="beforeend">
    <form hx-post class="p-4" hx-swap="outerHTML">
        <p>{{$title}}</p>
        <p>€{{$cost}} Each x {{$quantity}} (€{{ $cost * $quantity}})</p>
        <input type="hidden" name="key" value="{{$key}}">
        <input type="hidden" name="cartkey" value="{{$cartkey}}">
        <div>
            <input class="border border-black p-1 cursor-pointer" type="submit" name="action" value="Remove all">
        </div>
    </form>
</div>
