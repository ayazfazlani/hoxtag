<x-layouts.app :title="__('Dashboard')">
    <div class="flex flex-col gap-4 h-full w-full bg-base-200 rounded-xl p-4">
        <div class="flex flex-wrap gap-3 w-full">
            <!-- Card 1 -->
            <div class="flex flex-col flex-wrap md:flex-row flex-1 min-w-[300px] bg-base-100 rounded-md shadow p-4">
                <!-- Left side -->
                <div class="w-full md:w-1/2 py-4 px-2 flex flex-col justify-between">
                    <div>
                        <h1 class="text-xl font-bold">Balance</h1>
                        <h2 class="text-xl font-bold">0.00</h2>
                    </div>
                    <div>
                        <p class="text-xs">pending amount 0.00</p>
                        <p class="text-xs">last transaction 0.00</p>
                    </div>
                </div>

                <!-- Right side -->
                <div class="w-full md:w-1/2 py-4 px-2 flex  flex-wrap flex-col justify-between">
                    <div class="flex flex-wrap gap-2 mt-auto md:mt-0">
                        <a href="#" class="btn btn-outline-info btn-sm rounded-sm"
                            onclick="my_modal_3.showModal()">Deposit</a>
                        <a href="#" class="btn btn-outline-success btn-sm rounded-sm">Withdraw</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flex-1 min-w-[300px] bg-base-100 rounded-md shadow p-4">
                <!-- name of each tab group should be unique -->
                <div class="tabs overflow-x-auto tabs-sm rounded-none tabs-lift">
                    <label class="tab">
                        <input type="radio" name="my_tabs_4" checked="checked" />
                        <flux:icon.check-circle class="size-4 me-2" />
                        Success
                    </label>
                    <div class="tab-content overflow-auto bg-base-100 border-base-300 rounded-sm">
                        <ul class="list overflow-auto max-h-64 bg-base-100 rounded-sm p-0 m-0">

                            <li class="p-4 pb-2 text-xs opacity-60 tracking-wide">Successed transactions</li>


                            <li class="list-row">
                                <div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-bold">200</h1>
                                        <p class="text-xs opacity-60 text-success">Success</p>
                                    </div>
                                </div>
                                <div>
                                    <div>Dio Lupa</div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                                </div>
                                {{-- <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button> --}}
                                <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button>
                            </li>


                            <li class="list-row">
                                <div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-bold">200</h1>
                                        <p class="text-xs opacity-60 text-success">Success</p>
                                    </div>
                                </div>
                                <div>
                                    <div>Dio Lupa</div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                                </div>
                                {{-- <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button> --}}
                                <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button>
                            </li>

                            <li class="list-row">
                                <div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-bold">200</h1>
                                        <p class="text-xs opacity-60 text-success">Success</p>
                                    </div>
                                </div>
                                <div>
                                    <div>Dio Lupa</div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                                </div>
                                {{-- <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button> --}}
                                <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button>
                            </li>
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


                            <li class="list-row">
                                <div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-bold">200</h1>
                                        <p class="text-xs opacity-60 text-warning">Pending</p>
                                    </div>
                                </div>
                                <div>
                                    <div>Dio Lupa</div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                                </div>
                                {{-- <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button> --}}
                                <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button>
                            </li>


                            <li class="list-row">
                                <div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-bold">200</h1>
                                        <p class="text-xs opacity-60 text-warning">Sending</p>
                                    </div>
                                </div>
                                <div>
                                    <div>Dio Lupa</div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                                </div>
                                {{-- <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button> --}}
                                <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button>
                            </li>

                            <li class="list-row">
                                <div>
                                    <div class="flex flex-col">
                                        <h1 class="text-lg font-bold">200</h1>
                                        <p class="text-xs opacity-60 text-warning">Sending</p>
                                    </div>
                                </div>
                                <div>
                                    <div>Dio Lupa</div>
                                    <div class="text-xs uppercase font-semibold opacity-60">Remaining Reason</div>
                                </div>
                                {{-- <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button> --}}
                                <button class="btn btn-square rounded-sm btn-ghost">
                                    view
                                </button>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>

            <!-- Card 3 -->
            <div class="flex-1 min-w-[300px] bg-base-100 shadow p-4">
                <div
                    class="stats stats-vertical md:stats-horizontal stats-sm flex flex-wrap rounded-sm shadow border-base-300">
                    <div class="stat flex-1/2">
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

                    <div class="stat flex-1/2">
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

                    {{-- <div class="stat">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>




    <dialog id="my_modal_3" class="modal">
        <div class="modal-box rounded-md">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <h3 class="text-lg font-bold">Hello!</h3>
            <p class="py-4">Press ESC key or click on ✕ button to close</p>
            <form>
                <label class="input">
                    <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                            stroke="currentColor">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                        </g>
                    </svg>
                    <input type="text" class="grow" placeholder="index.php" />
                </label>
            </form>
        </div>
    </dialog>
</x-layouts.app>