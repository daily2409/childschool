@extends('System.Layouts.Master')
@section('title')
Edit Service
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">SERVICE</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header p-3 m-0 text-center">
                    <h5 class="card-title m-0 text-uppercase text-left ml-2">
                        EDIT SERVICE
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('system.quote.postEditQuote') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$quote->id}}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" value="{{$quote->name}}" class="form-control" type="text"
                                    id="example-text-input" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Price</label>
                            <div class="col-sm-10">
                                <input name="price" value="{{$quote->price}}" class="form-control" type="text"
                                    id="example-text-input" require>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-info waves-effect waves-light">
                                    Save
                                </button>
                                <button type="button" onclick="cancel()" class="btn btn-danger waves-effect m-l-5">
                                    Cancel
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
</div>
@endsection
@section('script')
<script src="assets/plugins/summernote/summernote-bs4.min.js"></script>
<script src="vendor/laravel-filemanager/js/lfm.js?v={{ time() }}"></script>
<script src="assets/pages/form-summernote.init.js?v={{ time() }}"></script>
<script src="assets/js/summernote.js?v={{time()}}"></script>
<script>
    $('.lfm').filemanager('image');
	function cancel(){
		location.replace("{{asset('')}}system/service/list");
	}
</script>
@endsection