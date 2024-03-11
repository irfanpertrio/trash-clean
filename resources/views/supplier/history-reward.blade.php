<div class="card mb-4">
    <div class="card mb-4 mb-md-0">
        <div class="card-header">
            <h5>History Reward</h5>
        </div>
        <div class="card-body pr-1">

            <div class="row d-flex justify-content-center mt-3 ">

                @foreach ($history_rewards as $reward)
                    @include('supplier.list-history-reward')
                @endforeach

            </div>
        </div>
    </div>
</div>
