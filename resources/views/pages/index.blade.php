@extends('layouts.app')

@section('content')
    <div class="_sec_navbar">
    	<div class="_navbar_input_search">
    		<form method="POST" >
    			@csrf
    			<input type="text" name="q" class="search_iput">
    			<button type="submit" class="_search_submit"><i class="fa fa-search"></i></button>
    		</form>
    	</div>
    </div> 
    <br><br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-3 col-sm-12 col-xs-12">
    			<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>RECENT FACULTIES</b></h1>
    				<div class="Content-Li">
    					@if(count($companies) >= 1)
    							@foreach($fcus as $fcu)
    							<ul>
		    						<li>
		    							<span><b>{{$fcu->user->name}}</b></span>
		    							<p style="line-height: .5;"> <small><strong>2 min ago</strong></small></p>
		    							<span><b>{{substr($fcu->user->name,0,25)}}@if(strlen($fcu->user->name) > 25) .. @endif</b></span>
		    							<p style="line-height: .5;"> <small><strong>
                                            2 min ago
                                        </strong></small></p>
		    						</li>
	    						</ul>
	    						@endforeach
    						@else
    							<div class="text-center">
    								<p style="color:#e74c3c"><small><strong>NO FACULITIES YET</strong></small></p>
    							</div>
    						@endif
    				</div>
    			</div>
    			<br>
    			<div class="_con_card" style="height: 250px;">
    				<h1 class="h1_optimzed"> <i class="fas fa-bell"></i> <b>RECENET COMPANIES</b></h1>
    				<div class="Content-Li">

    						@if(count($companies) >= 1)
    							@foreach($companies as $company)
    							<ul>
		    						<li>
		    							<span><b>{{$company->user->name}}</b></span>
		    							<span><b>{{substr($company->user->name,0,25)}}@if(strlen($company->user->name) > 25) .. @endif</b></span>
		    							<p style="line-height: .5;"> <small><strong>2 min ago</strong></small></p>
		    						</li>
	    						</ul>
	    						@endforeach
    						@else
    							<div class="text-center">
    								<p style="color:#e74c3c"><small><strong>NO COMPAINES YET</strong></small></p>
    							</div>
    						@endif

    				</div>
    			</div>
    		</div>
    		<div class="col-md-9 col-sm-12 col-xs-12">
    			<div class="_con_card">
    				<h1 class="h1_optimzed"><i class="fas fa-database"></i> <strong>RECENET PROJECTS</strong></h1>
    				@if(count($projects) >= 1)
    					<ul>
	    					@foreach($projects as $project)

	    							<li>
	    								<div class="Projects">

		    							</div>
	    							</li>

	    					@endforeach
    					</ul>
    				@else
    					<div class="text-center">
    						<p style="color:#e74c3c;"><small><strong>NO PROJECTS YET</strong></small></p>
    					</div>
    				@endif
    			</div>
    		</div>
    	</div>
    </div>

@endsection
