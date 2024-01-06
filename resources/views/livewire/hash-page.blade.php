<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <section class="bg-light py-5">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xxl-8">
                    <div class="text-center my-5">
                        <h2 class="display-5 fw-bolder"><span class="text-gradient d-inline">HASH GENERATE</span></h2>
                        <p class="lead fw-light mb-4">Buat password hash</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="container px-5 mb-5">

            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <!-- Project Card 1-->
                    <div
                        class="card overflow-hidden text-decoration-none text-dark shadow rounded-4 border-0 mb-5">
                        <div class="card-body text-center ">
                            <div class="">
                                <div class="">
                                    <label class="" for="">Input password</label>
                                    <input type="text" wire:model.live="hash" class="form-control">
                                </div>
                                <div class="mt-2">
                                    <label for="">Hasil hash</label>
                                    <div class="">
                                        {{ $hashed }}
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
