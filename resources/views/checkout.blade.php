@extends('layout', ['title'=> 'Home'])

@section('page-content')
<div style="width:80%; margin:auto;">
    <br>
    <br>
    <br>
    <br>
    <h1>Your order amount is {{$total}}</h1><br>
    <h2 style="color:#FB5849">Choose a payment method</h2><br>
    <input ng-model="myVar" type="radio" id="cod" name="cod" value="cod">
    <label for="cod"><img style="max-width:150px;" src="{{ asset('assets/images/cod.png')}}"></label><br>
    <input ng-model="myVar" type="radio" id="bkash" name="bkash" value="bkash">
    <label for="bkash"><img style="max-width:150px;"  src="{{ asset('assets/images/bkash.png')}}"></label><br><br><br>
    <div ng-switch="myVar">
        <div ng-switch-when="cod">
            <form style="display:inline"  action="mailto:kawser.cse.ru@gmail.com" method="post" enctype="text/plain">
            @csrf
                <input class="btn btn-success" type="submit" value="Place Order">
            </form>
        </div>
        <div ng-switch-when="bkash">
            <form style="display:inline"  action="mailto:kawser.cse.ru@gmail.com" method="post" enctype="text/plain">
            @csrf
                <input class="btn btn-success" type="submit" value="Pay Now">
            </form>
        </div>
    </div>
</form>
</div>
@endsection