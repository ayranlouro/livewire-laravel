<style>
    #container {
        margin-top: 100px;
    }

</style>

<div>
    <form wire:submit.prevent="create" method="POST">
        <div id="container" class="container">
            <div id="row" class="row justify-content-center">
                <div class="col col-md-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" wire:model="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" wire:model="text" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
