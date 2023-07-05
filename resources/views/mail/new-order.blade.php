<h1>
    Novo pedido foi criado
</h1>

<table>
    <tr>
        <th>ID Do Pedido</th>
        <td>
            <a href="{{ $forAdmin ? env('BACKEND_URL').'/app/orders/'.$order->id : route('order.view', $order, true) }}">
                {{$order->id}}
            </a>
        </td>
    </tr>
    <tr>
        <th>Status do Pedido</th>
        <td>{{ $order->status }}</td>
    </tr>
    <tr>
        <th>Preço do Pedido</th>
        <td>${{$order->total_price}}</td>
    </tr>
    <tr>
        <th>Data do Pedido</th>
        <td>${{$order->created_at}}</td>
    </tr>
</table>
<table>
    <tr>
        <th>Imagem</th>
        <th>Título</th>
        <th>Preço</th>
        <th>Quantidade</th>
    </tr>
    @foreach($order->items as $item)
        <tr>
            <td>
                <img src="{{$item->product->image}}" style="width: 100px">
            </td>
            <td>{{$item->product->title}}</td>
            <td>${{$item->unit_price * $item->quantity}}</td>
            <td>{{$item->quantity}}</td>
        </tr>
    @endforeach
</table>