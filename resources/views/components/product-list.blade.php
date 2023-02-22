@foreach ($products as $product)
    <div class="row">
        <div class="col-12">
            <div class="card rounded">
                <div class="card-header bg-light p-3">
                    <x-status-badge :status="$product->status" />
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-1 bg-light rounded pt-4 pb-4 text-center border border-primary">
                            Foto
                        </div>
                        <div class="col-11">
                            <span>Nome:{{$product->name}}</span>
                            <br>
                            <span>Código: {{$product->sku}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach