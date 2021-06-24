<div aria-label="breadcrumb" class="pt-3">
	<ol class="breadcrumb">
		@if( isset( $data[ 'breadcrumb' ] ) )
		@foreach( $data[ 'breadcrumb' ] as $key => $value )
		<li class="breadcrumb-item {{ ( empty( $value ) ) ? 'active' : '' }} ">
			<a {{ ( !empty( $value ) ) ? "href=".$value : "" }}>{{ $key }}</a>
		</li>
		@endforeach
		@endif
	</ol>
</div>