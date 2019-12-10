@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
	<div class="col-md-6">
		<div class="card uper">
  			<div class="card-header">
    		<i class="fa fa-list-alt fa-lg"></i> Details
  			</div>
  			<div class="card-body">
  				@if ($student->picture==null)
  					<img alt="Card image cap" height='150px' src="">
  				@else
  					<img alt="Card image cap" height='200px' src="">
  				@endif
  	
  				<table class="table table-bordered">
                	<thead>
                        <tr>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    	<tr>
                           <td><i class="fa fa-arrow-circle-right"></i> ID</td>
                           <td></td>
                        </tr>
                   	    <tr>
                           <td><i class="fa fa-arrow-circle-right"></i> Name</td>
                           <td></td>
                        </tr> 
                  	    <tr>
                           <td><i class="fa fa-arrow-circle-right"></i> Email</td>
                           <td></td>
                        </tr>      
                        <tr>
                           <td><i class="fa fa-arrow-circle-right"></i> Program</td>
                           <td></td>
                        </tr>   
                       <tr>
                           <td><i class="fa fa-arrow-circle-right"></i> Status</td>
                           <td></td>
                        </tr>                         
                    </tbody>
                </table>				
			</div>
		</div>
	</div>
</div>
@endsection