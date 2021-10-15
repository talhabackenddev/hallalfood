@extends('admin.layouts.masterLayout')
@section('page_css')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.css" />

@endsection
@section('content')
<!-- Page -->
<div class="page">

    <!-- Container-fluid -->
    <div class="container-fluid">
        @if(Session::has('error'))
        <div class="alert alert-danger {{ Session::has('error') ? 'alert-important' : '' }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('error') }}
        </div>
        @endif
        @if(Session::has('success'))
        <div class="alert alert-sucess {{ Session::has('success') ? 'alert-important' : '' }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('success') }}
        </div>
        @endif
        @if(Session::has('validation'))
        <div class="alert alert-sucess {{ Session::has('success') ? 'alert-important' : '' }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p style="color:red">{{ Session::get('validation') }}</p>
        </div>
        @endif
        <!-- Main-content-body -->
        <div class="main-content-body">
            <!-- row opened -->
            <div class="row row-sm">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-12">
                                <table class="table table-bordered  datatables">
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->

<div class="modal fade" id="edit_new_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form id="editform" enctype="multipart/form-data">
                <input type="hidden" name="requestId" id="requestId">
                @csrf

                <div class="modal-header align-items-center">
                    <h5 class="modal-title">Rejection Reason</h5>
                    <button data-dismiss="modal" class="btn btn-default">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="alert alert-danger alert-created" style="display:none;"></div>
                <div class="modal-body">

                    <div class="form-group ">
                        <label class="form-label">Reason</label>
                        <input type="text" class="form-control" name="reject_reason" id="reason" placeholder="Enter Rejecting Reasn">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('page_js')
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.3/datatables.min.js"></script>

<script>
    $(window).on('load', function() {

        $('#myTable').DataTable({
            responsive: true,
        });

    });
</script>
<script>
    $(window).on('load', function() {
        window.table = $('.datatables').DataTable({
            scrollY: '100%',
            scrollCollapse: true,
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "GET",
                url: "{{ route('request.index') }}",
            },
            columns: [{
                    title: 'First Name',
                    data: 'first_name'
                },

                {
                    title: 'Last Name',
                    data: 'last_name'
                },
                {
                    title: 'Email',
                    data: 'email'
                },
                {
                    title: 'Cuisine',
                    data: 'cuisine'
                },
                {
                    title: 'Certificate',
                    data: 'certificate'
                },

                {
                    title: 'Reffer By',
                    data: 'refBy'
                },
                {
                    title: 'Action',
                    data: 'action',
                    orderable: false,
                    searchable: false
                },
                {
                    title: 'Refferal Code',
                    data: 'refCode'
                },
                {
                    title: 'Street',
                    data: 'street'
                },
                {
                    title: 'City',
                    data: 'city'
                },
                {
                    title: 'Postal Code',
                    data: 'postCode'
                },
                {
                    title: 'Phone',
                    data: 'phone'
                },
                {
                    title: 'Status',
                    data: 'status'
                },
                {
                    title: 'Rejection Reason',
                    data: 'reject_reason'
                },



            ],
        });

        //  edit modal code
        $(document).on('click', '.editProduct', function(e) {
            const btn = $(e.currentTarget);
            rowid = btn.attr('data-id');
            $('#requestId').val(rowid);
        });

        $(document).ready(function() {
            $('#editform').on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "{{route('request.update')}}",
                    method: "POST",
                    dataType: "json",
                    data: new FormData(e.currentTarget),
                    processData: false,
                    contentType: false,
                    beforeSend: () => {
                        $('.alert-created').fadeOut();
                    },
                    success: function(response) {
                        console.log(response);

                        table.ajax.reload();
                        $('#editform').trigger('reset');

                        $('#edit_new_modal').modal('hide');
                        $('.modal-backdrop').remove();
                    },
                    error: function(errorThrown, errResponse) {
                        console.log(errorThrown.responseJSON.message);
                        $('.alert-created').text(errorThrown.responseJSON.message).fadeIn();
                    }
                });

                return false;
            })
        })
        $(document).on('click', '.deleteProduct', function(e) {
            var btn = $(e.currentTarget);
            var id = parseInt(btn.attr('data-id'));
            if (confirm('Are you really want to delete this row?')) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: "DELETE",
                    url: "{{route('request.index')}}" + "/" + id,
                    success: function(success) {
                        table.ajax.reload();
                    },
                    error: function(errorThrown, errResponse) {
                        console.log('Error Occur');
                    }
                });
                return false;
            }
        });
        $(document).on('click', '#accept', function(e) {
            const rowid = $(e.currentTarget).data('id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('request.chef') }}",
                type: "POST",
                data: {
                    id: rowid,
                },
                success: function(response) {
                    if (response.status === 1) {
                        alert('Chef Accepted Successfully');
                       table.ajax.reload();
                    }
                    console.log(response);
                },
                error: function(errorThrown, errResponse) {
                    console.log(errorThrown, errResponse);
                }
            });

        });

    });
</script>

@endsection