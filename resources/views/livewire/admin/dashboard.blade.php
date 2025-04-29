<div class="p-2">
    <div class="stats stats-vertical lg:stats-horizontal rounded-md w-full ">
        <div class="flex flex-wrap ">
            <div class="flex-1/2 stat bg-base-100">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-8 w-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="stat-title">Downloads</div>
                <div class="stat-value">31K</div>
                <div class="stat-desc">Jan 1st - Feb 1st</div>
            </div>

            <div class=" flex-1/2 stat bg-base-100 ">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-8 w-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4">
                        </path>
                    </svg>
                </div>
                <div class="stat-title">New Users</div>
                <div class="stat-value">4,200</div>
                <div class="stat-desc">↗︎ 400 (22%)</div>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="flex-1/2 stat bg-base-100">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-8 w-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                        </path>
                    </svg>
                </div>
                <div class="stat-title">New Registers</div>
                <div class="stat-value">1,200</div>
                <div class="stat-desc">↘︎ 90 (14%)</div>
            </div>
            <div class="flex-1/2 stat bg-base-100">
                <div class="stat-figure text-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="inline-block h-8 w-8 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4">
                        </path>
                    </svg>
                </div>
                <div class="stat-title">New Registers</div>
                <div class="stat-value">1,200</div>
                <div class="stat-desc">↘︎ 90 (14%)</div>
            </div>
        </div>
    </div>

    {{-- <div class="divider"></div> --}}

    {{-- table --}}
    {{-- searchbar with buttons date range and other filters --}}
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
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Game Id</th>
                    <th>Referal Link</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <!-- row 1 -->
                @foreach ($users as $user)
                <tr>

                    <td>
                        <div class="flex items-center gap-3">
                            <div class="avatar">
                                <div class="mask mask-squircle h-12 w-12">
                                    <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                        alt="Avatar Tailwind CSS Component" />
                                </div>
                            </div>
                            <div>
                                <div class="font-bold">{{$user->name}}</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->game_id}}</td>

                    <th>
                        <button class="btn btn-ghost btn-xs">{{$user->refferal_code}}</button>
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