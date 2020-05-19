@extends('layouts.master')

@section('body')
    <div class="container">
        <div class="row my-3">
            <a href="{{route("admin")}}" class="btn btn-primary col-md-2"> <i class="fas fa-arrow-circle-left"></i> Dashboard </a>
        </div>
        <h2 class="text-center"> Allowed Types </h2>
        <table class="table w-75 mx-auto mt-4">
            <thead>
            <tr>
                <th scope="col">Allowed Text</th>
                <th scope="col" class="text-center" colspan="2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($types as $type)
                <tr>
                    <td>
                        {{$type->allowedText}}
                    <td>
                        <form method="POST" action="{{ route('deleteAllowed') }}">
                            {{ csrf_field() }}
                            <input id="delete" name="delete" value="delete" hidden>
                            <input id="sourceId-{{$type->allowedText}}" name="node_id" value="{{$type->allowedText}}" hidden>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{route('modifyAllowed', ['allowedText' => $type->allowedText])}}" class="btn btn-primary"><i class="fas fa-edit" aria-hidden="true"></i> Modify </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection