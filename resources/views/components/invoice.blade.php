@foreach($purchases as $pu)

  <div class="card">
<div class="card-header">
Invoice: 
<strong>{{$pu->created_at->format('d-m-Y')}}</strong> 
  <span class="float-right"> <strong>Status:</strong> Pending</span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">From:</h6>
<div>
</div>
<div>Madalinskiego 8</div>
@if($pu->user->city_id == null)

@else
<div>{{$pu->user->city->name}}, {{$pu->user->city->country->name_country}}</div>
@endif
<div>Email: {{$pu->user->email}}</div>
<div>Phone: {{$pu->user->mobile}}</div>
</div>

<div class="col-sm-6">
<h6 class="mb-3">To:</h6>
<div>
</div>
<div>Attn: Daniel Marek</div>
<div>43-190 Mikolow, Poland</div>
<div>Email: marek@daniel.com</div>
<div>Phone: +48 123 456 789</div>
</div>



</div>

<div class="table-responsive-sm">
<table class="table table-striped">
<thead>
<tr>
<th class="center">#</th>
<th>Item</th>
<th>Description</th>

<th class="right">Unit Cost</th>
  <th class="center">Qty</th>
<th class="right">Total</th>
</tr>
</thead>
<tbody>
<tr>
<td class="center">1</td>
<td class="left strong">{{$pu->accounttype->name}}</td>
<td class="left">Account type bought</td>

<td class="right">${{$pu->price}},00</td>
  <td class="center">1</td>
<td class="right">${{$pu->price}},00</td>
</tr>
</tbody>
</table>
</div>
<div class="row">
<div class="col-lg-4 col-sm-5">

</div>

<div class="col-lg-4 col-sm-5 ml-auto">
<table class="table table-clear">
<tbody>


<tr>
<td class="left">
<strong>Total</strong>
</td>
<td class="right">
<strong>${{$pu->price}},00</strong>
</td>
</tr>
</tbody>
</table>

</div>

</div>

</div>
</div>

@endforeach