@extends('layouts.front.app')


@section('content')
    <div class="container product">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Category</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container product">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('category.add')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp"
                               placeholder="Please, enter product's name">
                        @if($errors->has('name'))
                            <small id="nameHelp" class="form-text text-danger">{{$errors->first('name')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                               aria-describedby="descriptionHelp"
                               placeholder="Please, enter product's description">
                        @if($errors->has('description'))
                            <small id="descriptionHelp"
                                   class="form-text text-danger">{{$errors->first('description')}}</small>
                        @endif
                    </div>
                    <hr>

                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Create
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection