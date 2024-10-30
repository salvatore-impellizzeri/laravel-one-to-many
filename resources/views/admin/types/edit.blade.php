@extends('layouts.app')

@section('page-title', 'Modifica '.$type->name)

@section('main-content')

@if ($errors->any())
    <div class="alert alert-danger mb-4">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.types.update', ['type' => $type->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" required minlength="3" maxlength="255" value="{{ old('name', $type->name) }}" placeholder="Inserisci il nome...">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success w-100">
                            Aggiorna
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection