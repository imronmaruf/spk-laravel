@extends('layout.main')


@section('content')
    <style>
        .badge:hover {
            color: #fff !important;
            text-decoration: none;
        }

        .bg-success:hover {
            background: #2f9164 !important;
        }

        .bg-danger:hover {
            background: #e84a59 !important;
        }
    </style>

    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Final Rank</h4>
                    </div>

                    <!-- table  -->
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-nowrap mb-0">
                            <thead class="table table-success ">
                                <tr>
                                    <th scope="col" class="text-center fw-bold">#</th>
                                    <th scope="col" class="text-center fw-bold">Created By</th>
                                    <th scope="col" class="text-center fw-bold">Created At</th>
                                    <th scope="col" class="text-center fw-bold">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($criteria_analyses->count())
                                    @foreach ($criteria_analyses as $analysis)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $analysis->user->name }}</td>
                                            <td class="text-center">{{ $analysis->created_at->toFormattedDateString() }}
                                            </td>
                                            @if ($isAbleToRank)
                                                <td class="text-center">
                                                    <a href="/dashboard/final-ranking/{{ $analysis->id }}"
                                                        class="badge bg-success text-decoration-none">
                                                        Lihat Final Ranking
                                                    </a>
                                                </td>
                                            @else
                                                <td class="text-center">
                                                    <span role="button" class="badge bg-danger text-decoration-none">
                                                        Waiting Admin
                                                    </span>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-danger text-center p-4">
                                            <h4>You haven't create any comparisons yet</h4>
                                        </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- card footer  -->
                    <div class="card-footer bg-white text-center">
                        {{-- <h4 class=" link-primary">Final Rank</h4> --}}
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <footer class="d-flex flex-wrap justify-content-center align-items-center py-3 my-4 border-top">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                    <span class="mb-3 mb-md-0 text-muted">© 2024 Sukia</span>
                </div>
            </footer>
        </div>

    </div>

@endsection
