<div>
    <section class="bg-gradient-primary  py-4 pb-5" id="resume">
        <div class="row w-100">
            <div class="col-md-6">
                <div class="container px-5 pb-5">
                    <div class="text-center my-5">
                        <h2 class="display-6 fw-bolder"><span class=" d-inline">Expertise</span></h2>
                    </div>

                    <div class="container text-center">

                        <div class="row row-cols-lg-2 justify-content-md-center">

                            @foreach ($minats as $minat)
                            <div class="col text-start">
                                <div class="card shadow-sm m-2 rounded">
                                    <div class="card-body bg-white text-center rounded">
                                        <div class="">
                                            <img src="{{ asset($minat->img) }}" width="60" height="60" alt="">
                                        </div>
                                        <div class="mt-2">
                                            <b>{{ $minat->title }}</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container px-5 pb-5">
                    <div class="text-center my-5">
                        <h2 class="display-6 fw-bolder"><span class=" d-inline">Tech Stack</span></h2>
                    </div>
                    <div class="container text-center">
                        <div class="row row-cols-lg-6 row-cols-md-3">
                            @foreach ($techs as $tech)
                            <div class="col text-start">
                                <div class="card shadow-sm m-2 rounded-pill" style="width: 80px; height: 80px">
                                    <div class="card-body bg-white text-center rounded-pill">
                                        <div class="">
                                            <img src="{{ asset($tech->img) }}" width="40" height="40" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container ">
            <hr class="text-white rounded-pill" style="border-width: 6px;">
        </div>

        <div class=" row w-100">
            <div class="col-lg-6">
                <div class="container px-5 pb-5">
                    <div class="text-center my-5">
                        <h2 class="display-6 fw-bolder"><span class=" d-inline">Education</span></h2>
                    </div>

                    <div class="container">
                        <ul class="list-group">
                            @foreach ($pendidikans as $pendidikan)
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>{{$pendidikan->tempat}}</b> </h6>
                                        <div class="">{{ $pendidikan->priode }}</div>
                                        <p class="my-1"><span class="">{{ $pendidikan->keterangan }}</span></p>
                                        @if($pendidikan->skill)
                                        <div class="">
                                            Keahlian:
                                            {{ $pendidikan->skill }}
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            @endforeach


                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="container px-5 pb-5">
                    <div class="text-center my-5">
                        <h2 class="display-6 fw-bolder"><span class=" d-inline">Experiences</span></h2>
                    </div>

                    <div class="container">
                        <ul class="list-group">
                            @foreach ($pengalamans as $pengalaman)
                            <li class="list-group-item position-relative">
                                <div class="connector-line-left"></div>
                                <div class="connector-line-right"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-start">
                                        <h6 class="mb-0"><b>{{ $pengalaman->posisi }}</b> </h6>
                                        <div class="">
                                            {{ $pengalaman->tempat }} {{ $pengalaman->tempat ? '·' : '' }} {{
                                            $pengalaman->jenis }}
                                        </div>
                                        @php
                                        $startDate = \Carbon\Carbon::create($pengalaman->tgl_masuk);
                                        $endDate = \Carbon\Carbon::create($pengalaman->tgl_keluar ?
                                        $pengalaman->tgl_keluar : date('Y-m-d'));
                                        $monthsDifference = ($endDate->year - $startDate->year) * 12 + $endDate->month -
                                        $startDate->month + 1;
                                        $yearsDifference = floor($monthsDifference / 12);
                                        $remainingMonths = $monthsDifference % 12;
                                        @endphp
                                        <div class="text-muted">{{
                                            \Carbon\Carbon::parse($pengalaman->tgl_masuk)->format('M Y') }} - {{
                                            $pengalaman->tgl_keluar ?
                                            \Carbon\Carbon::parse($pengalaman->tgl_keluar)->format('M Y') : 'Saat ini'
                                            }} · @if ($yearsDifference > 0)
                                            {{ $yearsDifference }} thn
                                            @if ($remainingMonths > 0)
                                            dan {{ $remainingMonths }} bln
                                            @endif
                                            @else
                                            {{ $remainingMonths }} bln
                                            @endif</div>
                                        <div class="text-muted">{{$pengalaman->alamat}} · {{ $pengalaman->jenis_lokasi
                                            }}</div>
                                        <div class=" py-1">
                                            {{ $pengalaman->keterangan }}
                                        </div>
                                        <div class="">
                                            @if($pengalaman->skill)
                                            <div class="">
                                                <b>Keahlian:</b>
                                                {{ $pengalaman->skill }}
                                            </div>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                </div>
            </div>
        </div>


    </section>
</div>
