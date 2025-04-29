<div class="flex flex-col flex-wrap md:flex-row flex-1 min-w-[300px] bg-base-100 rounded-md shadow p-4">
    <!-- Left side -->
    <div class="w-full md:w-1/2 py-4 px-2 flex flex-col justify-between">
        <div>
            <h1 class="text-xl font-bold">Balance</h1>
            <h2 class="text-xl font-bold">{{ round($balance) }}</h2>
        </div>
        <div>
            <p class="text-xs">pending amount: {{ round($pendingDeposits) }}</p>
            <p class="text-xs">last transaction: {{ round($pendingDeposits) }}</p>
        </div>
    </div>

    <!-- Right side -->
    <div class="w-full md:w-1/2 py-4 px-2 flex  flex-wrap flex-col justify-between">
        <div class="flex flex-wrap gap-2 mt-auto md:mt-0">
            <a href="#" class="btn btn-outline-info btn-sm rounded-sm" onclick="my_modal_3.showModal()">Deposit</a>
            <a href="#" class="btn btn-outline-success btn-sm rounded-sm" onclick="my_modal_4.showModal()">Withdraw</a>
        </div>
    </div>









    {{-- Deposit dialogs --}}

    <dialog id="my_modal_3" class="modal" wire:ignore.self>
        <div class="modal-box rounded-md">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <form wire:submit="deposit">
                {{-- account name --}}
                <fieldset class="fieldset bg-base-200 border-base-300 rounded-sm w-full border p-4">
                    <legend class="fieldset-legend ">Deposit</legend>
                    {{-- account name --}}
                    <label class="label">Account Name:</label>
                    <input wire:model="name" type="text" class="input w-full rounded-md" placeholder="Account Name" />
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>

                    @enderror

                    {{-- account number --}}
                    {{-- <label class="label">Account Number:</label>
                    <input wire:model='' type="text" class="input w-full rounded-md" placeholder="Account Number" />
                    <p class="label">Please enter the account number here</p> --}}

                    {{-- amount --}}
                    <label class="label">Amount:</label>
                    <input type="number" wire:model="amount" class="input w-full rounded-md" placeholder="0.00" />
                    @error('amount')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    {{-- choose payment method from easypaisa or jazzcash or bank transfer with icons are not working no
                    label Just icons and radio buttons --}}
                    <div class="flex flex-wrap gap-4 mt-4">
                        <div class="form-control">
                            <label class="cursor-pointer label">
                                <input type="radio" wire:model='method' name="payment_method" value="easypaisa"
                                    class="radio radio-primary radio-xs" />
                                <span class="label-text">
                                    <img src="http://sms.pksol.com/1/images/easypaisa-icon.png" alt="Easypaisa"
                                        class="w-8 h-8" />
                                </span>
                                <p class="label-text text-xs">Easypaisa</p>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="cursor-pointer label">
                                <input type="radio" wire:model='method' name="payment_method" value="jazzcash"
                                    class="radio radio-primary radio-xs" />
                                <span class="label-text">
                                    <img src="http://sms.pksol.com/1/images/jazzcash-icon.png" alt="JazzCash"
                                        class="w-8 h-8" />
                                </span>
                                <p class="label-text text-xs">JazzCash</p>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="cursor-pointer label">
                                <input type="radio" wire:model='method' name="payment_method" value="bank_transfer"
                                    class="radio radio-primary radio-xs" />
                                <span class="label-text">
                                    <img src="http://sms.pksol.com/1/images/bank-icon-.png" alt="Bank Transfer"
                                        class="w-8 h-8" />
                                </span>
                                <p class="label-text text-xs">Bank Transfer</p>
                            </label>
                        </div>
                    </div>

                    {{-- transaction imge screenshot etc --}}

                    <label class="label">Transaction Image:</label>
                    <input type="file" wire:model='voucher' class="file-input file-input-sm w-full rounded-sm"
                        accept="image/*" />
                    @error('voucher')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                </fieldset>
                <div class="modal-action">

                    <button type="button" class="btn btn-ghost rounded-md" onclick="my_modal_3.close()">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-md">Submit</button>
                </div>

            </form>

        </div>



    </dialog>

    <dialog id="my_modal_4" class="modal" wire:ignore.self>
        <div class="modal-box rounded-md">
            <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>

            <form wire:submit.prevent="withdraw">
                {{-- account name --}}
                <fieldset class="fieldset bg-base-200 border-base-300 rounded-sm w-full border p-4">
                    <legend class="fieldset-legend ">Withdraw</legend>
                    {{-- account name --}}
                    <label class="label">Account Name:</label>
                    <input type="text" wire:model='name' class="input w-full rounded-md" placeholder="Account Name" />
                    @error('name')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                    {{-- account number --}}
                    <label class="label">Account Number:</label>
                    <input type="text" wire:model='account_number' class="input w-full rounded-md"
                        placeholder="Account Number" />
                    @error('account_number')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror

                    {{-- amount --}}
                    <label class="label">Amount:</label>
                    <input type="number" wire:model='amount' class="input w-full rounded-md" placeholder="0.00" />
                    @error('amount')
                    <p class="text-red-500">{{$message}}</p>
                    @enderror
                    {{-- choose payment method from easypaisa or jazzcash or bank transfer with icons are not
                    working no
                    label Just icons and radio buttons --}}
                    <div class="flex flex-wrap gap-4 mt-4">
                        <div class="form-control">
                            <label class="cursor-pointer label">
                                <input type="radio" wire:model='method' name="payment_method" value="easypaisa"
                                    class="radio radio-primary radio-xs" />
                                <span class="label-text
                                    ">
                                    <img src="http://sms.pksol.com/1/images/easypaisa-icon.png" alt="Easypaisa"
                                        class="w-8 h-8" />
                                </span>
                                <p class="label-text text-xs">Easypaisa</p>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="cursor-pointer label">
                                <input type="radio" wire:model='method' name="payment_method" value="jazzcash"
                                    class="radio radio-primary radio-xs" />
                                <span class="label-text
                                    ">
                                    <img src="http://sms.pksol.com/1/images/jazzcash-icon.png" alt="JazzCash"
                                        class="w-8 h-8" />
                                </span>
                                <p class="label-text text-xs">JazzCash</p>
                            </label>
                        </div>
                        <div class="form-control">
                            <label class="cursor-pointer label">
                                <input type="radio" wire:model='method' name="payment_method" value="bank_transfer"
                                    class="radio radio-primary radio-xs" />
                                <span class="label-text
                                    ">
                                    <img src="http://sms.pksol.com/1/images/bank-icon-.png" alt="Bank Transfer"
                                        class="w-8 h-8" />
                                </span>
                                <p class="label-text text-xs">Bank Transfer</p>
                            </label>
                        </div>
                </fieldset>
                <div class="modal-action">

                    <button type="button" class="btn btn-ghost rounded-md" onclick="my_modal_4.close()">Cancel</button>
                    <button type="submit" class="btn btn-primary rounded-md">Submit</button>
                </div>



            </form>

        </div>

    </dialog>

</div>