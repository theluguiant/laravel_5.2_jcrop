@extends('cortes.layout')
@section('content')
<div class="container">
<div class="row">
<div class="span12">
<div class="jc-demo-box">

<div class="page-header">
<ul class="breadcrumb first">
  <li class="active">Live Demo (Requires PHP)</li>
</ul>
<h1>Server-based Cropping Behavior</h1>
</div>

		<!-- This is the image we're attaching Jcrop to -->
		<img src="<?php echo url('/');?>/demos/demo_files/pool.jpg" id="target" />
        
        <div id="preview-pane">
		    <div class="preview-container">
		      <img src="<?php echo url('/');?>/demos/demo_files/pool.jpg" class="jcrop-preview" alt="Preview" />
		    </div>
		</div>
		<!-- This is the form that our event handler fills -->
		<form action="<?php echo url('/');?>/save" method="post" onsubmit="return checkCoords();">
		    {{ csrf_field() }}
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="submit" value="Crop Image" class="btn btn-large btn-inverse" />
		</form>

		<p>
			<b>An example server-side crop script.</b> Hidden form values
			are set when a selection is made. If you press the <i>Crop Image</i>
			button, the form will be submitted and a 150x150 thumbnail will be
			dumped to the browser. Try it!
		</p>


	</div>
	</div>
	</div>
	</div>
@endsection