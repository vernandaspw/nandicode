<div>
    <section class="bg-gradient-primary d-flex align-items-center py-4 pb-5" id="portofolio">
        <div class="container px-5 pb-5">
            <div class="text-center my-5">
                <h2 class="display-6 fw-bolder"><span class=" d-inline">Portofolio</span></h2>
            </div>
            <div class="container ">
                <!-- Tabs -->
                <ul class="nav nav-tabs justify-content-center" id="myTabs">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" id="web-tab" data-toggle="tab" href="#web">Web</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="design-tab" data-toggle="tab" href="#design">Design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="ui-tab" data-toggle="tab" href="#ui">UI</a>
                    </li>
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
                                        <p class="card-text">{{ $project->singkat }}</p>
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


                        </div>
                    </div>
                </div>
            </div>





        </div>
    </section>
</div>
