<div class="bg-white shadow ">
    <div class="card bg-green">
        hello world
    </div>

    <div class="grid grid-cols-2 gap-4">
        <button wire:click="withdraw"
            class="bg-red-500 hover:bg-red-600 text-white text-sm sm:text-base py-3 rounded-xl transition duration-200">
            Withdraw
        </button>
        <button wire:click="addPayment"
            class="bg-blue-500 hover:bg-blue-600 text-white text-sm sm:text-base py-3 rounded-xl transition duration-200">
            Add Payment
        </button>
    </div>
</div>