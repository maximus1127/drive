@extends('layouts.app')



@section('content')
<div class="container">

<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">School Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">State License Number</label>
      <input type="text" class="form-control" id="inputPassword4" name="license_number">
    </div>

  <div class="form-group col-md-2">
    <label for="phone">Phone Number</label>
    <input type="text" class="form-control" id="phone" name="phone">
  </div>
</div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St, Apt 12" name="address" >
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control" name="state">
        <option selected>Choose...</option>
        <option>Louisiana</option>
        <option>Texas</option>
        <option>Mississippi</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" name="zip_code">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="bond_name">Bond Name</label>
      <input type="text" class="form-control" id="bond_name" name="bond_name">
    </div>
    <div class="form-group col-md-6">
      <label for="bond_amount">Bond Amount</label>
      <input type="text" class="form-control" id="bond_amount" name="bond_amount">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>



@endsection
