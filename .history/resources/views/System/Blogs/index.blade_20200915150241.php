@extends('System.Layouts.Master')
@section('title')
	List News
@endsection
@section('css')
@endsection
@section('content')
    <div class="app-body">
        <!-- ############ PAGE START-->
        <div class="row-col">
            <div class="col-lg b-r">
                <div class="padding padding-big">
                    <div class="row">
                        <div class="col-xs-12">
                            <form method="get" action="{{route('admin.listcategory')}}">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="box">
                                                <div class="box-header">
                                                    <h2><i class="fa fa-usd" aria-hidden="true"></i> Search Banners</h2>
                                                </div>
                                                <div class="box-divider m-a-0"></div>
                                                <div class="box-body bg-logo">
                                                    <div class="row m-b p-a">
                                                        <div class="col-md-6">
                                                            <label for="single-prepend-text">ID</label>
                                                            <div class="input-group m-b">
                                                                <span class="input-group-addon"><i
                                                                        class="fa fa-user"></i></span>
                                                                <input type="text" name="user_id" class="form-control"
                                                                       placeholder="Enter ID">
                                                            </div>
                                                            <label for="single-prepend-text">Email</label>
                                                            <div class="input-group m-b">
                                                                <span class="input-group-addon"><i
                                                                        class="fa fa-envelope"></i></span>
                                                                <input type="text" name="email" class="form-control"
                                                                       placeholder="Enter Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="single-prepend-text">Status</label>
                                                                <div class="input-group select2-bootstrap-prepend">
                                                                    <span class="input-group-btn">
                                                                    <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                                                                    <span class="fa fa-caret-down"></span>
                                                                    </button>
                                                                    </span>
                                                                    <select id="single-prepend-text" name="status"
                                                                            class="form-control select2"
                                                                            data-ui-jp="select2"
                                                                            data-ui-options="{theme: 'bootstrap'}">
                                                                        <option value="1">Active</option>
                                                                        <option value="-1">Cancel</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="single-prepend-text">From</label>
                                                            <div class="form-group">
                                                                <div class='input-group date' data-ui-jp="datetimepicker"
                                                                     data-ui-options="{
                                format: 'YYYY-MM-DD',
                                icons: {
                                time: 'fa fa-clock-o',
                                date: 'fa fa-calendar',
                                up: 'fa fa-chevron-up',
                                down: 'fa fa-chevron-down',
                                previous: 'fa fa-chevron-left',
                                next: 'fa fa-chevron-right',
                                today: 'fa fa-screenshot',
                                clear: 'fa fa-trash',
                                close: 'fa fa-remove'
                                }
                                }">
                                                                    <input type='text' name="datefrom"
                                                                           class="form-control"/>
                                                                    <span class="input-group-addon">
                                  <span class="fa fa-calendar"></span>
                                </span>
                                                                </div>
                                                            </div>
                                                            <label for="single-prepend-text">To</label>
                                                            <div class="form-group">
                                                                <div class='input-group date' data-ui-jp="datetimepicker"
                                                                     data-ui-options="{
                                format: 'YYYY-MM-DD',
                                icons: {
                                time: 'fa fa-clock-o',
                                date: 'fa fa-calendar',
                                up: 'fa fa-chevron-up',
                                down: 'fa fa-chevron-down',
                                previous: 'fa fa-chevron-left',
                                next: 'fa fa-chevron-right',
                                today: 'fa fa-screenshot',
                                clear: 'fa fa-trash',
                                close: 'fa fa-remove'
                                }
                                }">
                                                                    <input type='text' name="dateto" class="form-control"/>
                                                                    <span class="input-group-addon">
                                  <span class="fa fa-calendar"></span>
                                </span>
                                                                </div>
                                                            </div>
                                                            <label for="single-prepend-text" style="opacity: 0">To</label>
                                                            <div class="text-left">
                                                                <button class="btn btn-outline info"><i class="fa fa-search"
                                                                                                        aria-hidden="true"></i>
                                                                    Search
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i class="fa fa-times" aria-hidden="true" ></i>
                                        </button>
                                        <h5 class="modal-title">Add Category</h5>

                                    </div>
                                    <div class="modal-body">
                                        <form>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" id="name">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Title</label>
                                            <input type="text" class="form-control" id="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="col-form-label">Description</label>
                                            <textarea class="form-control" id="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="description" class="col-form-label">Status</label>
                                            <select class="form-control" id="status">
                                                <option value="1">Active</option>
                                                <option value="0">Un-Active</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Icon</label>
                                            <input type="file" class="form-control" id="icon">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Slug</label>
                                            <input type="text" class="form-control" id="slug">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Search Description</label>
                                            <input type="text" class="form-control" id="search_Description">
                                        </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary" id="add-category">Add Category</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header pd-b-2">
                                    <div class="pull-left">
                                        <h2><i class="fa fa-table"></i> List booking</h2>
                                    </div>
                                    <div class="pull-right">
                                        <h2>Total: $123456</h2>
                                    </div>
                                </div>
                                <div class="box-body bg-logo">
                                    <div class="p-a-sm pull-left">
                                        Search: <input id="filter" type="text"
                                                       class="form-control input-sm w-auto inline m-r"/>
                                    </div>
                                    <div class="pull-right p-r-md">
                                        <div class="btn-groups">
                                            <button class="btn btn-outline b-warning text-warning"
                                            data-toggle="modal" data-target="#exampleModal"><i
                                            class="fa fa-plus" aria-hidden="true" data-target="#exampleModal" data-whatever="Add Category"> Add Category</i></button>

                                            <button class="btn btn-outline b-info text-info"><i
                                                    class="fa fa-file-excel-o" aria-hidden="true"></i> Excel
                                            </button>
                                            <button class="btn btn-outline b-success text-success"><i
                                                    class="fa fa-print" aria-hidden="true"></i> Print
                                            </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table m-b-none" data-page-size="5">
                                            <thead>
                                            <tr>
                                                <th data-toggle="true">
                                                    ID
                                                </th>
                                                <th>

                                                    Room ID
                                                </th>
                                                <th data-hide="phone,tablet">
                                                    User ID
                                                </th>
                                                <th data-hide="phone,tablet">
                                                    Number Of Guests
                                                </th>
                                                <th data-hide="phone,tablet">
                                                    Guest Name
                                                </th>
                                                <th data-hide="phone,tablet">
                                                    Guest Phone
                                                </th>
                                                <th data-hide="phone,tablet">
                                                    Guest Email
                                                </th>
                                                <th data-hide="phone">
                                                    Guest Country
                                                </th>
                                                <th data-hide="phone">
                                                    Check In Time
                                                </th>
                                                <th data-hide="phone">
                                                    Check Out Time
                                                </th>
                                                <th data-hide="phone">
                                                    Realtime Check In
                                                </th>
                                                <th data-hide="phone">
                                                    Code
                                                </th>
                                                <th data-hide="phone">
                                                    Status
                                                </th>
                                                <th data-hide="phone">
                                                    Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($listBooking as $item)
                                                <tr>
                                                    <td>{{$item->_id}}</td>
                                                    <td>{{$item->room_id}}</td>
                                                    <td>{{$item->User_ID }}</td>
                                                    <td>{{$item->number_of_guests}}</td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->phone}}</td>
                                                    <td>{{$item->email}}</td>
                                                    <td>{{$item->country}}</td>
                                                    <td>{{ Date('Y-m-d H:i:s',(intval((string)$item->checkin))/1000)}}</td>
                                                    <td>{{ Date('Y-m-d H:i:s',(intval((string)$item->checkout))/1000)}}</td>
                                                    <td>{{ Date('H:i:s',(intval((string)$item->checkin_time)))}}</td>

                                                    <td>{{$item->code}}</td>
                                                    @if($item->status == 0 || $item->status == '0' )
                                                        <td><span class="btn btn-outline b-warning text-warning"> Pending</span></td>
                                                    @elseif($item->status == 1 || $item->status == '1' )
                                                        <td><span class="btn btn-outline b-success text-success">Success</span></td>
                                                    @elseif($item->status == -1 || $item->status == '-1' )
                                                        <td><span class="btn btn-outline b-danger text-danger">Cancel</span></td>
                                                    @endif
                                                    {{-- <td>{{date('Y-m-d H:i:s', $item->created_at)}}</td> --}}
                                                    @if($item->status == 0 || $item->status == '0' )
                                                        <td >
                                                            <button id="{{$item->_id}}" class="btnConfirm btn btn-sm btn-rounded btn-noborder btn-info min-width-50 mt-2">Confirm</button>
                                                            <button id="{{$item->_id}}" class="btnCancel btn btn-sm btn-rounded btn-noborder btn-danger min-width-50 mt-2">Cancel</button>
                                                        </td>
                                                    @elseif($item->status == 1 || $item->status == '1' )
                                                        <td >
                                                            <button id="{{$item->_id}}" class="btnCancel btn btn-sm btn-rounded btn-noborder btn-danger min-width-50 mt-2">Cancel</button>
                                                        </td>
                                                    @elseif($item->status == -1 || $item->status == '-1' )
                                                        {{-- <td><span class="btn btn-outline b-danger text-danger">Cancel</span></td>     --}}
                                                    @endif

                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot class="hide-if-no-paging">
                                            <tr>
                                                <td colspan="12" class="text-center">
                                                    <ul class="pagination">{{ $listBooking->appends(request()->input())->links()}}</ul>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ############ PAGE END-->
    </div>


@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget)
        var recipient = button.data('whatever')
        var modal = $(this)
        modal.find('.modal-title').text(recipient)
        modal.find('.modal-body input').val(recipient)
    });

</script>

<script>
    $("#add-category").click(function(e) {
        e.preventDefault();
        name = $('#name').val()
        title = $('#title').val()
        description = $('#description').val()
        icon = $('#icon').val()
        slug = $('#slug').val()
        status = $('#status').val()
        search_Description = $('#search_Description').val()
        $.ajax({
                method: "POST",
                url: '{{route("admin.addcategory")}}',
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                data: {
                        'name': name,
                        'title': title,
                        'description': description,
                        'icon': icon,
                        'slug': slug,
                        'status': status,
                        'search_Description': search_Description
                        },
                success: function (data) {
                    if(data.status == true){
                        $('#exampleModal').modal('hide');
                        swal("Done!", "It was succesfully deleted!", "success");

                    }else{
                        $('#exampleModal').modal('hide');
                        swal("Error "+data.message, "Please try again", "error");
                    }
                }
        });
    });
    $('.btnConfirm').click(function(e){
        id = $(this).attr('id');
        console.log(id);
        Swal.fire({
        title: 'Do you want to confirm the homestay booking?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `Confirm`,
        denyButtonText: `Cancel`,
        }).then((result) => {
            console.log(result.value);
            if (result.value == true) {
                $.ajax({
                        method: "POST",
                        url: '{{route("admin.confirmBooking")}}',
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        data: {
                                'id': id
                                },
                        success: function (data) {
                            if(data.status == true){
                                $(this).hide();
                                swal("Done!", "It was succesfully deleted!", "success");

                            }else{
                                swal("Error "+data.message, "Please try again", "error");
                            }
                            location.reload();
                        }
                });
            }
        })

    });
    $('.btnCancel').click(function(e){
        id = $(this).attr('id');
        console.log(id);
        Swal.fire({
        title: 'Do you want to cancel the homestay booking?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: `confirm`,
        denyButtonText: `close`,
        }).then((result) => {
            console.log(result.value);
            if (result.value == true) {
                $.ajax({
                        method: "POST",
                        url: '{{route("admin.cancelBooking")}}',
                        headers: {
                            'X-CSRF-Token': '{{ csrf_token() }}',
                        },
                        data: {
                                'id': id
                                },
                        success: function (data) {
                            if(data.status == true){
                                $(this).hide();
                                swal("Done!", "It was succesfully deleted!", "success");

                            }else{
                                swal("Error "+data.message, "Please try again", "error");
                            }
                            location.reload();
                        }
                });
            }
        })
    });
</script>
@endsection
