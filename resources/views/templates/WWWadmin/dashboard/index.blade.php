@extends('master')
@dd("Hello");
@section('content')
<div class="content">
<div class="row">
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Users</h6>
            <ul class="list list-unstyled mb-0">
              <li>Active users: <span class="font-weight-semibold text-default">#{{$activeusers}}</span></li>
              <li>Blocked users: <span class="font-weight-semibold text-default">#{{$blockedusers}}</span></li>
            </ul>
          </div>

          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totalusers}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Support Ticket</h6>
            <ul class="list list-unstyled mb-0">
              <li>Open tickets: <span class="font-weight-semibold text-default">
                #{{$openticket}}</span></li>
              <li>Closed tickets: <span class="font-weight-semibold text-default">
                #{{$closedticket}}</span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totalticket}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Platform Reviews</h6>
            <ul class="list list-unstyled mb-0">
              <li>Published reviews: <span class="font-weight-semibold text-default">
                #{{$pubreview}}</span></li>
              <li>Pending reviews: <span class="font-weight-semibold text-default">
                #{{$unpubreview}}</span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totalreview}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Other Deposits</h6>
            <ul class="list list-unstyled mb-0">
              <li>Pending: <span class="font-weight-semibold text-default">
                #{{$pendingdep}}</span></li>
              <li>Approved: <span class="font-weight-semibold text-default">
                #{{$approveddep}}</span>
              </li>              
              <li>Declined: <span class="font-weight-semibold text-default">
                #{{$declineddep}}</span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totaldeposit}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Bank Deposits</h6>
            <ul class="list list-unstyled mb-0">
              <li>Pending: <span class="font-weight-semibold text-default">
                #{{$pendingbdep}}</span></li>
              <li>Approved: <span class="font-weight-semibold text-default">
                #{{$approvedbdep}}</span>
              </li>              
              <li>Declined: <span class="font-weight-semibold text-default">
                #{{$declinedbdep}}</span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totalbdeposit}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Withdrawal</h6>
            <ul class="list list-unstyled mb-0">
              <li>Pending: <span class="font-weight-semibold text-default">
                #{{$pendingwd}}</span></li>
              <li>Approved: <span class="font-weight-semibold text-default">
                #{{$approvedwd}}</span>
              </li>              
              <li>Declined: <span class="font-weight-semibold text-default">
                #{{$declinedwd}}</span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totalwd}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>  
  <div class="col-md-4">
    <div class="card border-left-3 border-left-violet rounded-left-0">
      <div class="card-body">
        <div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
          <div>
            <h6 class="font-weight-semibold">Loan</h6>
            <ul class="list list-unstyled mb-0">
              <li>Payed back: <span class="font-weight-semibold text-default">
                #{{$paidloan}}</span></li>
              <li>Awaiting approval: <span class="font-weight-semibold text-default">
                #{{$onholdloan}}</span>
              </li>              
              <li>Awaiting payback: <span class="font-weight-semibold text-default">
                #{{$pendingloan}}</span>
              </li>
            </ul>
          </div>
          <div class="text-sm-right mb-0 mt-3 mt-sm-0 ml-auto">
            <h3 class="font-weight-semibold">#{{$totalloan}}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>  

  @stop