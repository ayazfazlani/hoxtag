<div class="overflow-hidden bg-base-100  p-4 rounded-md">
    {{-- header --}}
    <div class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Tournaments</h1>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Entry Fee</th>
                    <th>Game</th>
                    <th>Prize pool</th>
                    <th>Max players</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($tournaments as $tournament )
                <tr>

                    <td>
                        {{ $tournament->title }}
                    </td>
                    <td>
                        {{ $tournament->description }}
                    </td>
                    <td>
                        {{ round($tournament->entry_fee) }}
                    </td>
                    <td>
                        {{ $tournament->game }}
                    </td>
                    <td>
                        {{ round($tournament->prize_pool) }}
                    </td>
                    <td>
                        {{ $tournament->max_players }}
                    </td>
                    <td>
                        {{ $tournament->start_date }}
                    </td>
                    <td>
                        {{ $tournament->end_date }}
                    </td>

                    <td class="flex gap-2">
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-error btn-sm">Delete</button>
                    </td>

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