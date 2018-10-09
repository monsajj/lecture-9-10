@extends('layouts.front.app')


@section('content')
    <div class="container product">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="{{ route('home') }}"> <i class="fa fa-home"></i> Home</a></li>
                    <li class="active">Product</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="container product">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('product.add')}}" method="post">
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
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" name="category" id="category"
                               aria-describedby="categoryHelp"
                               placeholder="Please, enter category">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" min="0" class="form-control" name="quantity" id="quantity"
                               aria-describedby="quantityHelp"
                               placeholder="Please, enter quantity">
                        @if($errors->has('quantity'))
                            <small id="quantityHelp"
                                   class="form-text text-danger">{{$errors->first('quantity')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelp"
                               placeholder="Please, enter price">
                        @if($errors->has('price'))
                            <small id="priceHelp"
                                   class="form-text text-danger">{{$errors->first('price')}}</small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="0">Active</option>
                            <option value="1">Not active</option>
                        </select>
                    </div>
                    @if($errors->has('status'))
                        <small id="statusHelp"
                               class="form-text text-danger">{{$errors->first('status')}}</small>
                    @endif
                    <hr>

                    <button type="submit" class="btn btn-warning"><i class="fa fa-cart-plus"></i> Create
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection