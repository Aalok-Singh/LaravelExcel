@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <button type="button" class="btn btn-success">Export Excel</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <form action="" method="post">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile" required accept=".csv">
                </div>
                <button type="submit" class="btn btn-success">Import Excel</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection