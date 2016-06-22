@extends('layouts.admin', ['title' => 'Add CMS Page'])

@section('heading')
	<h1>
        ADD Page
	    <small>CMS PAGES</small>
    </h1>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
	        <div class="box-header with-border">
	            <h3 class="box-title">Quick Example</h3>
	        </div>
	        
	        <form action="{{ route('postAddCmsPage') }}" role="form" method="POST" >
	        {{ csrf_field() }}
	        
	            <div class="box-body">

	            	{!! text('Title', 'title', $errors, old('title')) !!}
	            	{!! textarea('Page Description', 'description', $errors, old('title')) !!}
	            	{!! text('Meta Description', 'meta_description', $errors, old('title')) !!}
	            	{!! text('Meta Keywords', 'meta_keywords', $errors, old('title')) !!}
	            	{!! textarea('Page Detail', 'detail', $errors, old('title')) !!}
	            	{!! text('Position', 'position', $errors, old('position')) !!}
	            	{!! text('Page Priority', 'order', $errors, old('order')) !!}

	            </div>


	        
	            <div class="box-footer">
	            	{!! submit() !!}
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection