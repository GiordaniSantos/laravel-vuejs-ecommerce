<h2>
    O status do seu pedido foi alterado para "{{$order->status}}"
</h2>
<p>
    Link para o seu pedido:
    <a href="{{route('order.view', $order, true)}}">Pedido #{{$order->id}}</a>
</p>
