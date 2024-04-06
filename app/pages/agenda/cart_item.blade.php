<div id="cart" hx-swap-oob="beforeend">
    <form hx-post id="cart-item-{{$key}}">
        <p>{{$title}}</p>
        <p>{{$id}}</p>
        <input type="hidden" name="key" value="{{$key}}">
        <div>
            <input type="submit" name="action" value="Remove all">
            <input type="submit" name="action" value="Remove one">
            <input type="submit" name="action" value="Add one">
        </div>
    </form>
</div>
