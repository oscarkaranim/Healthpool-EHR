@extends('layouts.app')

@section('content')
<div class="col-md-12">
    <div class="card">
        
<div class="col-m-3 offset-md-2">
	<H3 class="mt-20 ">
		MORPHINE ADMINISTRATION CHART
	</H3>
<br>
	<div class="row ">
			<div class="col-md-6">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">PATIENT'S NAME:</label>
					<div class="col-sm-8">
					  <input type="date" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-6">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">I.P.NUMBER:</label>
						<div class="col-sm-8">
						  <input type="	datetime" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
	</div>
	<div class="row ">
			<div class="col-md-4">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">WARD:</label>
					<div class="col-sm-8">
					  <input type="name" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-2">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">AGE:</label>
						<div class="col-sm-8">
						  <input type="	number" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
		 <div class="form-group row col-md-4">
					<label for="staticEmail" class="col-form-label ">DATE MORPHINE:</label>
					<div class="col-sm-8">
					  <input type="	date" name="" class="form-control" placeholder="">
					</div>
				</div>
	</div>
	<div class="row ">
			<div class="col-md-6">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">PRIMARY DOCTOR:</label>
					<div class="col-sm-8">
					  <input type="name" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-6">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">PRESCRIBED BY:</label>
						<div class="col-sm-8">
						  <input type="	datetime" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
	</div>
    <div class="row">
		<div class="form-group row col-md-12">
			<label for="inputPassword" class=" col-form-label">FORM OF MORPHINE USED:</label>
			<div class="col-sm-8">
				<div class="form-group">
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">Oral solution</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">Tablet</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
					  <label class="form-check-label" for="inlineRadio3">Injection</label>
					</div>
				</div>
				</div>
		  </div>
	</div>
	<div class="row ">
			<div class="col-md-6">
				<div class="form-group row ">
					<label for="staticEmail" class="col-form-label ">STRENGTH OF FORMULATION: SOLUTION in (mg/ml):</label>
					<div class="col-sm-4">
					  <input type="number" name="" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="col-md-6">
			 <div class="form-group row ">
						<label for="staticEmail" class="col-form-label ">TABLET in (mg):</label>
						<div class="col-sm-4">
						  <input type="	number" name="" class="form-control" placeholder="">
						</div>
					</div>
			</div>
	</div>
	<div class="row">
		<div class="form-group row col-md-12">
			<label for="inputPassword" class=" col-form-label">FREQUENCY OF ADMINISTRATION (HOURLY):</label>
			<div class="col-sm-8">
				<div class="form-group">
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
					  <label class="form-check-label" for="inlineRadio1">4</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
					  <label class="form-check-label" for="inlineRadio2">6</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
					  <label class="form-check-label" for="inlineRadio3">8</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
					  <label class="form-check-label" for="inlineRadio3">12</label>
					</div>
					<div class="form-check form-check-inline  col-form-label">
					  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
					  <label class="form-check-label" for="inlineRadio3">24</label>
					</div>
					
				</div>
				</div>
		  </div>
	</div>
	<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">DATE</th>
      <th scope="col">DOSE</th>
      <th scope="col">TIME GIVEN</th>
	  <th scope="col">TIME OF EXTRA DOSES</th>
	  <th scope="col">GIVEN BY</th>
	  <th scope="col">RMARKS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
    <tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
	<tr>
      <td><input type="date" name="" class="form-control" placeholder=""></td>
      <td><input type="number" name="" class="form-control" placeholder=""></td>
      <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="time" name="" class="form-control" placeholder=""></td>
	  <td><input type="name" name="" class="form-control" placeholder=""></td>
	  <td><input type="text" name="" class="form-control" placeholder=""></td>
    </tr>
  </tbody>
</table>




        
    </div>
</div> 
@endsection