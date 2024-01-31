@extends('student.dashboard.dashboard')
@section('content')
<div class="container-fluid">
    <div class="row column_title">
       <div class="col-md-12">
          <div class="page_title">
             <h2 class="text-primary">Fees</h2>
          </div>
       </div>
    </div>
 <!-- table section -->
 <div class="col-md-12">

    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head bg-warning">
          <div class="heading1 margin_0 ">
             <h2 class="">Pending Fees</h2>

          </div>

       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-bordered">
                <thead>
                   <tr>
                      <th>Description</th>
                      <th>Term</th>
                      <th>Session</th>
                      <th>Amount</th>
                      <th></th>
                   </tr>
                </thead>
                <tbody>

                        @foreach ( $pendingFees as $pendingFee )
                        <tr>
                      <td>School Fee</td>
                      <td>First</td>
                      <td>2022/2023</td>
                      <td>#{{$pendingFee->amount}}</td>
                      <td>
{{--
                        <input type="hidden" id="email-address" name="email" value="{{auth()->user()->email}}">
                       <input type="hidden" id="amount" name="amount" value="{{$pendingFee->amount}}">

                       <button  onclick="payWithPaystack(event)" class="btn btn-primary text-light">Pay fee</button> --}}
                       <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">

                                <input type="hidden" name="email" value="{{auth()->user()->email}}"> {{-- required --}}
                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                <input type="hidden" name="amount" value="{{$pendingFee->amount*100}}"> {{-- required in kobo --}}

                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value=""> {{-- required --}}


                                 {{-- to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
                                {{-- <input type="hidden" name="split" value="{{ json_encode($split) }}"> to support dynamic transaction split. More details https://paystack.com/docs/payments/multi-split-payments/#dynamic-splits --}}
                                {{-- <input type="hidden" name="split" value="{{ json_encode($split) }}"> --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                <p>
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>

                    </form>
                    </td>
                   </tr>
                   @endforeach
                </form>
                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>

 <div class="col-md-12">
    <div class="white_shd full margin_bottom_30">
       <div class="full graph_head bg-success ">
          <div class="heading1 margin_0 ">
             <h2 class="text-light">Cleared Fees</h2>
          </div>
       </div>
       <div class="table_section padding_infor_info">
          <div class="table-responsive-sm">
             <table class="table table-bordered">
                <thead>
                   <tr>
                      <th>Description</th>
                      <th>Term</th>
                      <th>Session</th>
                      <th>Amount</th>
                      <th></th>
                   </tr>
                </thead>
                <tbody>
                   <tr>
                      <td>John</td>
                      <td>Doe</td>
                      <td>john@example.com</td>
                      <td>Doe</td>
                      <td><button type="submit"  class="btn btn-success">Receipt</button></td>
                   </tr>

                </tbody>
             </table>
          </div>
       </div>
    </div>
 </div>
</div>
@endsection


