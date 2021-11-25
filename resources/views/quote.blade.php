@extends("header")


@section("content")

<div class="quote-section quote-bg">
   <div class="container">
     <div class="row">
       {{-- <div class="offset-lg-5 col-lg-7"> --}}
         <div class="quote-form-section">
           <span class="title" >Quote</span>
           <h2 class="subtitle">Request a free qoute</h2>
           <form action="#" method="POST">
             @csrf
             <div class="row">
               <div class="col-lg-6">
                 <div class="form-element">
                   <input name="name" type="text" placeholder="You name" required/>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-element">
                   <div class="select-wrapper">
                     <select name="freight" required>
                       <option value="" selected disabled>
                         Select a Freight
                       </option>
                       <option value="Air Freight">Air Freight</option>
                       <option value="Ocean Freight">Ocean Freight</option>
                       <option value="Road Freight">Road Freight</option>
                     </select>
                   </div>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-element">
                   <input name="email" type="email" placeholder="Email" required/>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-element">
                   <input name="phone" type="number" placeholder="Phone" required id="quote"/>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-element">
                   <input type="text" placeholder="Pickup Address" name="pickup" required/>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-element">
                   <input type="text" placeholder="Dropoff Address" name="dropoff" required/>
                 </div>
               </div>

               <div class="col-lg-6">
                 <div class="form-element">
                   <input type="text" placeholder="Weight in KG" name="weight" required/>
                 </div>
               </div>
               <div class="col-lg-6">
                 <div class="form-element">
                   <input type="text" placeholder="Distance in KM" name="distance" required/>
                 </div>
               </div>
               <div class="col-lg-12">
                 <div class="form-element mb-0">
                   <button type="submit"><span>Submit</span></button>
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