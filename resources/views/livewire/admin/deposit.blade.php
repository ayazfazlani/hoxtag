<div class="overflow-hidden bg-base-100  p-4 rounded-md">
    {{-- header --}}
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Deposits</h1>
        <div class="flex items-center">

        </div>
    </div>
    <div class="divider"></div>
    {{-- search bar --}}
    <div class="flex items-center  justify-between bg-base-100 p-2 my-2 rounded-md">
        <div class="form-control w-full max-w-xs">
            <input type="text" placeholder="Search..." class="input input-bordered w-full max-w-xs rounded-md" />
        </div>
        <div class="fieldset flex p-1">
            {{-- two date fields for from to end --}}
            <input type="date" class="input input-bordered w-[150px]  rounded-md" />
            to
            <input type="date" class="input input-bordered w-[150px] rounded-md" />
        </div>
        <div class="btn-group">
            <button class="btn btn-primary rounded-md">
                <fulx.flux:icon.plus />
                add
            </button>
        </div>
    </div>
    {{-- <div class="divider"></div> --}}

    {{-- table --}}
    <div class="overflow-x-auto bg-base-100 ">
        <table class="table ">
            <!-- head -->
            <thead>
                <tr>
                    {{-- <th>
                        <label>
                            <input type="checkbox" class="checkbox" />
                        </label>
                    </th> --}}
                    {{-- <th></th> --}}
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Method</th>
                    <th>Status</th>
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($deposits as $deposit )
                <tr>

                    <td>
                        {{ $deposit->user->name }}
                    </td>
                    <td>
                        {{ round($deposit->amount) }}
                    </td>
                    <td>{{$deposit->method}}</td>
                    @if ($deposit->status == 'pending')
                    <td>
                        <div class="badge badge-soft badge-warning">{{$deposit->status}}</div>
                    </td>
                    @elseif ($deposit->status == 'completed')
                    <td>
                        <div class="badge badge-soft badge-success">{{$deposit->status}}</div>
                    </td>


                    @endif

                    <th>
                        <div class="badge badge-soft badge-info">{{$deposit->type}}</div>
                    </th>
                    <th>
                        <button>
                            <flux:icon.ellipsis-vertical />
                        </button>
                    </th>
                </tr>
                @endforeach


            </tbody>
            <!-- foot -->
            <tfoot>

            </tfoot>
        </table>


    </div>
    <div class="join bg-base-100 float-end rounded-md">
        <button class="join-item btn bg-base-100 rounded-md">1</button>
        <button class="join-item btn btn-active bg-base-100 rounded-md">2</button>
        <button class="join-item btn bg-base-100 rounded-md">3</button>
        <button class="join-item btn bg-base-100 rounded-md">4</button>
    </div>

</div>