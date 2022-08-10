@extends('layout')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <br><br>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>My Cart</h2></div>
                    <div class="col-sm-4">                        
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th>Image</th>
                        <th>Name</th>                        
                        <th>Unit Price</th>                         
                        <th>Quantity</th> 
                        <th>Subtotal</th>                         
                        <th>Actions</th>
                    </tr>
                </thead>
                <form action="" method="post" class="" id="" >   
                    @csrf           
                <tbody>
                    
                    <tr>
                        <td><input type="checkbox" name="" id="" value="" onclick=""><input type="hidden" name="" id="" value=""></td>
                        <td width="10%"><img src="" width="100" alt="" class="img-fluid"></td> 
                        <td></td>                        
                        <td></td>                        
                        <td></td> 
                        <td></td>                         
                        <td>        							
                            <a href="" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">Delete</i></a>
                        </td>
                    </tr>
                    
                    <tr align="right">
                        <td colspan="5">&nbsp;</td>
                        <td>RM<i> </i> <input type="text" value="0" name="sub" id="sub" size="7" readonly /></td>
                        <td>&nbsp;</td>
                    </tr>
                   
                </tbody>              
                
                
                
            </table>
        </div>
    </div>
    <div class="col-sm-1"></div>

    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <div class="row">
          
          <div class="col-md-6 col-md-offset-3">
             <div class="panel panel-default credit-card-box">
                <div class="panel-heading" >
                   <div class="row">
                      <h3>Card Payment</h3>
                      
                   </div>
                </div>
                <div class="panel-body">
                  
                   <br>
                   
                      <div class='form-row row'>
                         <div class='col-xs-12 col-md-6 form-group required'>
                            <label class='control-label'>Name on Card</label> 
                            <input class='form-control' size='4' type='text'>
                         </div>
                         <div class='col-xs-12 col-md-6 form-group required'>
                            <label class='control-label'>Card Number</label> 
                            <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                         </div>                           
                      </div>                        
                      <div class='form-row row'>
                         <div class='col-xs-12 col-md-4 form-group cvc required'>
                            <label class='control-label'>CVC</label> 
                            <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                         </div>
                         <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Month</label> 
                            <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                         </div>
                         <div class='col-xs-12 col-md-4 form-group expiration required'>
                            <label class='control-label'>Expiration Year</label> 
                            <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                         </div>
                      </div>
                    {{-- <div class='form-row row'>
                       <div class='col-md-12 error form-group hide'>
                          <div class='alert-danger alert'>Please correct the errors and try
                             again.
                          </div>
                       </div>
                    </div> --}}
                      <div class="form-row row">
                         <div class="col-xs-12">
                            <button class="btn btn-primary btn-xs btn-block" type="submit">Pay Now</button>
                         </div>
                      </div>
                   
                </div>
             </div>
          </div>
    
</div>


@endsection