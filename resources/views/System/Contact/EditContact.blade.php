@extends('System.Layouts.Master')
@section('title')
CONTACT
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">CONTACT</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-header p-3 m-0 text-center">
                    <h5 class="card-title m-0 text-uppercase text-left ml-2">
                        EDIT CONTACT
                    </h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('system.contact.postEditContact') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$contact->id}}">
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input name="name" value="{{$contact->name}}" class="form-control" type="text"
                                    id="example-text-input" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input name="email" value="{{$contact->email}}" class="form-control" type="email"
                                    id="example-text-input" require>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Question</label>
                            <div class="col-sm-10">
                                <input name="question" value="{{$contact->question}}" class="form-control" type="text"
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
		location.replace("{{asset('')}}system/product/list");
	}
</script>
@endsection