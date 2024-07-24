@extends('layout.main')

@section('content')

    <div class="bg-primary pt-10 pb-21"></div>

    <div class="container-fluid mt-n22 px-6">
        <div class="row mt-6">
            <div class="col-md-12 col-12">
                <!-- card  -->
                <div class="card">
                    <!-- card header  -->
                    <div class="card-header bg-white py-4 d-flex justify-content-between align-items-center">
                        <h4 class="mb-0">Edit {{ $alternative->name }}'s Nilai</h4>
                    </div>

                    <!-- form  -->

                    {{-- <form class="col-lg-11 mx-auto mb-4 mt-4" method="POST"
                        action="/dashboard/tourism-objects/{{ $object->id }}">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $object->name) }}" autofocus required>

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                                name="address" value="{{ old('address', $object->address) }}" required>

                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mb-3">Simpan Perubahan</button>
                        <a href="/dashboard/tourism-objects" class="btn btn-danger mb-3">Cancel</a>
                    </form> --}}


                    <form class="col-lg-11 mx-auto mb-4 mt-4" method="POST"
                        action="/dashboard/alternatives/{{ $alternative->id }}">
                        @method('PUT')
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Alternatif</label>
                            <input type="text" class="form-control" id="name"
                                value="{{ old('name', $alternative->name) }}" readonly required>

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        @foreach ($alternative->alternatives as $value)
                            <div class="mb-3">
                                <input type="hidden" name="criteria_id[]" value="{{ $value->criteria->id }}">
                                <input type="hidden" name="alternative_id[]" value="{{ $value->id }}">

                                <label for="{{ str_replace(' ', '', $value->criteria->name) }}" class="form-label">
                                    Value of {{ $value->criteria->name }}
                                </label>
                                <input type="text" id="{{ str_replace(' ', '', $value->criteria->name) }}"
                                    class="form-control @error('alternative_value') 'is-invalid' : '' @enderror"
                                    name="alternative_value[]" placeholder="Enter the value"
                                    onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 46)"
                                    value="{{ floatval($value->alternative_value) }}" maxlength="5" autocomplete="off"
                                    required>

                                @error('alternative_value')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        @endforeach

                        @if ($newCriterias->count())
                            <input type="hidden" name="new_tourism_object_id" value="{{ $alternative->id }}">
                            @foreach ($newCriterias as $value)
                                <div class="mb-3">
                                    <input type="hidden" name="new_criteria_id[]" value="{{ $value->id }}">

                                    <label for="{{ str_replace(' ', '', $value->name) }}" class="form-label">
                                        Value of {{ $value->name }}
                                    </label>
                                    <input type="text" id="{{ str_replace(' ', '', $value->name) }}"
                                        class="form-control @error('new_alternative_value') 'is-invalid' : '' @enderror"
                                        name="new_alternative_value[]" placeholder="Enter the value"
                                        onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57)|| event.charCode == 46)"
                                        maxlength="5" autocomplete="off" required>

                                    @error('new_alternative_value')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endforeach
                        @endif

                        <button type="submit" class="btn btn-primary mb-3">Simpan Perubahan</button>
                        <a href="/dashboard/alternatives" class="btn btn-danger mb-3">Cancel</a>
                    </form>
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
