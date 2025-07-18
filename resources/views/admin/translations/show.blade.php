@extends('admin.layout.layouts')

@section('extra_css')
    <style>
    td.actions {
    display: flex;
    align-items: center;
}

td.actions .btn {
    margin-right: 5px;
}
    </style>
@endsection

@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>{{ ucfirst($section) }} Translations</h3>
                            <a href="{{ route('translations.create', $section) }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i></a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Key</th>
                                        <th>English</th>
                                        <th>Japanese</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($translations as $translation)
                                        <tr>
                                            <td>{{ $translation->key }}</td>
                                            <td>{{ $translation->translations['en'] }}</td>
                                            <td>{{ $translation->translations['ja'] }}</td>
                                            {{-- <td>
                                                <a href="{{ route('translations.edit', ['section' => $section, 'id' => $translation->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                                <form action="{{ route('translations.destroy', ['section' => $section, 'id' => $translation->id]) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this translation?')"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td> --}}
                                            <td class="actions">
                                                <a href="{{ route('translations.edit', ['section' => $section, 'id' => $translation->id]) }}" class="btn btn-sm btn-success">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                <form action="{{ route('translations.destroy', ['section' => $section, 'id' => $translation->id]) }}" method="POST" style="display: inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this translation?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
