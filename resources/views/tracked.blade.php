@extends("header")


@section('content')

    <div class="quote-section quote-bg">
        <div class="container">
            <div class="row">
                {{-- <div class="offset-lg-5 col-lg-7"> --}}
                <div class="quote-form-section col-lg-12">
                    {{-- <span class="title" >Quote</span> --}}
                    <h2 class="subtitle">ORDER STATUS</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <h6 style="color:white">Order Date: {{ $orderCheck['created_at'] }}</h6>
                                    <h6 style="color:white">Name: {{ $orderCheck['name'] }}</h6>
                                    <h6 style="color:white">Email: {{ $orderCheck['email'] }}</h6>
                                    <h6 style="color:white">Pickup: {{ $orderCheck['pickup'] }}</h6>
                                    <h6 style="color:white">Dropoff: {{ $orderCheck['dropoff'] }}</h6>
                                    <h6 style="color:white">Freight: {{ $orderCheck['freight'] }}</h6>
                                    <h6 style="color:white">Distance: {{ $orderCheck['distance'] }}</h6>
                                    <h6 style="color:white">Weight: {{ $orderCheck['weight'] }}</h6>
                                    <h4 style="color:white">Status: {{ $orderCheck['orderStatus'] }}</h4>
                                    <h6 style="color:white">{{ $orderCheck['orderStatus'] }} since:
                                        {{ $orderCheck['updated_at'] }}</h6>
                                    <span><a style="text-decoration: none; color:white;" class="return"
                                            href="/home">Return Home</a></span> <span style="margin-left: 60%; "><a
                                            class="return" style="text-decoration: none ;color:white;"
                                            href="/track">Track another order</a></span>
                                </div>

                            </div>


                            {{-- <div class="col-lg-12">
                 <div class="form-element mb-0">
                   <button type="submit"><span>Track</span></button>
                 </div>
               </div> --}}
                        </div>
                    </form>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>

@endsection
