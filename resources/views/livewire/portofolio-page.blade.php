<div>
    <section class="bg-gradient-primary d-flex align-items-center py-4 pb-5" id="portofolio">
        <div class="container px-5 pb-5">
            <div class="text-center my-5">
                <h2 class="display-6 fw-bolder"><span class=" d-inline">Portofolio</span></h2>
            </div>
            <div class="container ">
                <!-- Tabs -->
                <ul class="nav nav-tabs justify-content-center" id="myTabs">
                    <a wire:click="$set('tipe_id', 'semua')" class="nav-link @if($tipe_id == 'semua')
                        active
                    @endif fw-bold" id="web-tab" data-toggle="tab" href="javascript:void()">Semua</a>
                    @foreach ($tipes as $tipe)
                    <li class="nav-item">
                        <a wire:click="$set('tipe_id', {{ $tipe->id }})" class="nav-link @if($tipe_id != 'semua' && $tipe->id == $tipe_id)
                            active

                        @endif fw-bold" id="web-tab" data-toggle="tab" href="javascript:void()">{{ $tipe->nama }}</a>
                    </li>
                    @endforeach
                </ul>

                <div class="tab-content mt-3">
                    <div class="tab-pane fade show active" id="web">
                        <div class="row">
                            <!-- Card 1 -->
                            @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 mb-4">
                                <div class="card shadow-sm">
                                    <img src="{{ asset($project->img) }}" class="card-img-top" style="max-height: 250px"
                                        alt="Web Project 1">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $project->title }}</h5>
                                        <p class="card-text" style="font-size: 12px">{{ $project->singkat }}</p>
                                    </div>
                                    <div class="card-footer">
                                        @foreach ($project->tags as $tag)
                                        <div class="badge bg-success">
                                            {{ $tag->nama }}
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            {{-- {{ $project_count }}
                            {{ $take }} --}}
                            @if($project_count > $take)
                                <center class="d-flex justify-content-center">
                                    <button wire:click="portofolio_take"
                                        class="rounded btn btn-success m-1 shadow text-white px-5 py-3 rounded-pill">Lainnya</button>
                                </center>
                            @endif

                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>
</div>
