<div>
    <div class="tabs overflow-x-auto tabs-sm rounded-none tabs-lift">
        <label class="tab">
            <input type="radio" name="my_tabs_4" checked="checked" />
            <flux:icon.check-circle class="size-4 me-2" />
            Success
        </label>
        <div class="tab-content overflow-auto bg-base-100 border-base-300 rounded-sm">
            <ul class="list overflow-auto max-h-64 bg-base-100 rounded-sm p-0 m-0">

                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Successed transactions</li>
                @foreach ($transactionSuccess as $data )
                <li class="list-row">
                    <div>
                        <div class="flex flex-col">
                            <h1 class="text-lg font-bold">{{ round($data->amount) }}</h1>
                            <p class="text-xs opacity-60 text-success">Success</p>
                        </div>
                    </div>
                    <div>
                        <div>{{ $data->name }}</div>
                        <div class="text-xs font-semibold opacity-60">{{$data->method}} | {{$data->type}}</div>
                    </div>
                    {{-- <button class="btn btn-square rounded-sm btn-ghost">
                        view
                    </button> --}}
                    <button class="btn btn-square rounded-sm btn-ghost">
                        view
                    </button>
                    {{-- reJect --}}
                    <button wire:click='reject({{ $data->id }})' class="btn btn-square rounded-sm btn-ghost">
                        reject
                    </button>

                </li>
                @endforeach
            </ul>
        </div>

        <label class="tab">
            <input type="radio" name="my_tabs_4" />
            <flux:icon.clock class="size-4 me-2" />
            Pending
        </label>
        <div class="tab-content bg-base-100 border-base-300 rounded-sm">
            <ul class="list overflow-auto max-h-64 bg-base-100 rounded-sm p-0 m-0">

                <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Pending transactions</li>


                @foreach ($transactionPending as $data )
                <li class="list-row">
                    <div>
                        <div class="flex flex-col">
                            <h1 class="text-lg font-bold">{{ round($data->amount) }}</h1>
                            <p class="text-xs opacity-60 text-warning">Pending</p>
                        </div>
                    </div>
                    <div>
                        <div>{{ $data->name }}</div>
                        <div class="text-xs font-semibold opacity-60">{{$data->method}} | {{$data->type}}</div>
                    </div>
                    {{-- <button class="btn btn-square rounded-sm btn-ghost">
                        view
                    </button> --}}
                    <button class="btn btn-square rounded-sm btn-ghost">
                        view
                    </button>
                    <button wire:click='approve({{ $data->id }})' class="btn btn-square rounded-sm btn-ghost">
                        approve
                    </button>
                    @endforeach



            </ul>
        </div>


    </div>
</div>