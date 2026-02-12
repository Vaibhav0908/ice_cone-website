@if(count($cart) > 0)
    @php $total = 0; @endphp

    @foreach($cart as $item)
        @php $total += $item['price'] * $item['qty']; @endphp

        <div class="d-flex mb-3 align-items-center">
            <img src="{{ $item['image'] }}" width="60" class="me-3">

            <div class="flex-grow-1">
                <strong>{{ $item['name'] }}</strong><br>
                ₹{{ $item['price'] }} × {{ $item['qty'] }}
            </div>

            <button class="btn btn-sm btn-danger remove-item"
                    data-id="{{ $item['id'] }}">
                ✕
            </button>
        </div>
    @endforeach

    <hr>
    <h5>Total: ₹{{ $total }}</h5>
@else
    <p>Your cart is empty.</p>
@endif