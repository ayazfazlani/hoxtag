<div>
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
                                <div class="font-bold">Hart Hagerty</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        test@gmail.com
                    </td>
                    <td>+1-202-555-0170</td>
                    <td>123456789</td>

                    <th>
                        <button class="btn btn-ghost btn-xs">details</button>
                    </th>
                </tr>
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
                                <div class="font-bold">Hart Hagerty</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        test@gmail.com
                    </td>
                    <td>+1-202-555-0170</td>
                    <td>123456789</td>

                    <th>
                        <button class="btn btn-ghost btn-xs">details</button>
                    </th>
                </tr>
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
                                <div class="font-bold">Hart Hagerty</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        test@gmail.com
                    </td>
                    <td>+1-202-555-0170</td>
                    <td>123456789</td>

                    <th>
                        <button class="btn btn-ghost btn-xs">details</button>
                    </th>
                </tr>
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
                                <div class="font-bold">Hart Hagerty</div>
                                <div class="text-sm opacity-50">United States</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        test@gmail.com
                    </td>
                    <td>+1-202-555-0170</td>
                    <td>123456789</td>

                    <th>
                        <button class="btn btn-ghost btn-xs">details</button>
                    </th>
                </tr>

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