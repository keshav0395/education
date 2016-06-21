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
	            <!-- /.box-header -->
	            <!-- form start -->
	        <form role="form">
	            <div class="box-body">
	        	    
	        	    <div class="form-group">
	            	    <label for="exampleInputEmail1">Title</label>
	                	<input type="text" placeholder="Enter Title" id="title" class="form-control" name="title" value="{{old('title')}}">
	                </div>

	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Description</label>
	                  	<textarea class="form-control" name="description" id="description">{{old('description')}}</textarea>
	                </div>
	                
	        	    <div class="form-group">
	            	    <label for="exampleInputEmail1">Meta Description</label>
	                	<input type="text" placeholder="Enter Meta Description" id="meta_description" class="form-control" name="meta_description" value="{{old('meta_description')}}">
	                </div>

	        	    <div class="form-group">
	            	    <label for="exampleInputEmail1">Meta Keywords</label>
	                	<input type="text" placeholder="Enter Keywords" id="meta_keywords" class="form-control" value="{{old('meta_keywords')}}">
	                </div>

	                <div class="form-group">
	                  	<label for="exampleInputPassword1">Page Detail</label>
	                  	<textarea class="form-control" name="detail" id="detail">{{old('detail')}}</textarea>
	                </div>




	                <div class="checkbox">
		                <label>
		                	<input type="checkbox"> Check me out
		                </label>
	                </div>
	            </div>
	              <!-- /.box-body -->

	            <div class="box-footer">
	            	<button class="btn btn-primary" type="submit">Submit</button>
	            </div>
	        </form>
	    </div>
	</div>
</div>

@endsection