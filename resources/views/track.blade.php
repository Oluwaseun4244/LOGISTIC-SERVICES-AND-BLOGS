@extends("header")


@section("content")

<div class="quote-section quote-bg">
   <div class="container">
     <div class="row">
         {{-- {{$orderCheck["orderStatus"]}} --}}
       {{-- <div class="offset-lg-5 col-lg-7"> --}}
         <div class="quote-form-section col-lg-8">
           {{-- <span class="title" >Quote</span> --}}
           <h2 class="subtitle">TRACK YOUR ORDER</h2>
           <form action="#" method="POST">
             @csrf
             <div class="row">
               <div class="col-lg-12">
                   <div>
                       <label style="color:white">TRACKING ID</label>
                   </div>
                 <div class="form-element">
                   <input name="trackingID" type="text" placeholder="Insert tracking ID here" required/>
                 </div>
               </div>


               <div class="col-lg-12">
                 <div class="form-element mb-0">
                   <button type="submit"><span>Track</span></button>
                 </div>
               </div>
             </div>
           </form>
         </div>
       {{-- </div> --}}
     </div>
   </div>
 </div>

 @endsection