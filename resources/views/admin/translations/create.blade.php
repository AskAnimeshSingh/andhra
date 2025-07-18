@extends('admin.layout.layouts')

@section('extra_css')
    <style>
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h3>Create Translation for {{ ucfirst($section) }}</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('translations.store', $section) }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="key">Key</label>
                                    <input type="text" class="form-control @error('key') is-invalid @enderror" id="key" name="key" value="{{ old('key') }}" required>
                                    @error('key')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="en_translation">English Translation</label>
                                    <textarea class="form-control summernote @error('en_translation') is-invalid @enderror" id="en_translation" name="en_translation" rows="3" required>{{ old('en_translation') }}</textarea>
                                    @error('en_translation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">English Translations</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote form-control @error('en_translation') is-invalid @enderror" name="en_translation"> {{ old('en_translation') }}</textarea>
                                        @error('en_translation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{-- <div class="form-group">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Japanese Translations</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote form-control @error('ja_translation') is-invalid @enderror" name="ja_translation"> {{ old('ja_translation') }}</textarea>
                                        @error('ja_translation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label for="ja_translation">Japanese Translation</label>
                                    <textarea class="form-control summernote @error('ja_translation') is-invalid @enderror" id="ja_translation" name="ja_translation" rows="3" required>{{ old('ja_translation') }}</textarea>
                                    @error('ja_translation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Create Translation</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

