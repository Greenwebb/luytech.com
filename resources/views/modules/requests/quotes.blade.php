@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('public/plugins/table/datatable/datatables.css') !!}
    {!! Html::style('public/plugins/table/datatable/dt-global_style.css') !!}
@endpush

@section('content')
    <!--  Navbar Starts / Breadcrumb Area  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">                       
                                <li class="breadcrumb-item active" aria-current="page"><span> {{__('Quote Requests')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
                <li style="display: none;"><span id="currentDate"></span></li>
            </ul>
            {{-- <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <button class="premium-btn">
                        <i class="las la-star"></i>
                        <span>{{__('Premium')}}</span>
                    </button>
                </li>
            </ul> --}}
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="layout-top-spacing mb-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="container p-0">
                        <div class="row layout-top-spacing date-table-container">
                            <!-- BASIC -->
                            
                            <!-- Datatable with a dropdown -->
                            @if(Session::has('success'))
                            <div id="quote-update-message" style="padding:1%; padding-top:2%; margin:1%; background-color:rgb(140, 255, 117); display:none; color:rgb(103, 170, 2)4, 31); font-weight:bold">
                                <p>Quote updated successfully</p>
                            </div>
                            @endif
                            <!-- Datatable go to last page -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    {{-- <h4 class="table-header">{{__('Go to last page of the datatable')}}</h4> --}}
                                    <div class="table-responsive mb-4">
                                        <table id="last-page-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>{{__('Tracker ID')}}</th>
                                                <th>{{__('Customer')}}</th>
                                                <th>{{__('Consigment')}}</th>
                                                <th>{{__('Phone#')}}</th>
                                                <th>{{__('Total Items')}}</th>
                                                <th>{{__('Status')}}</th>
                                                <th>{{__('Order date')}}</th>
                                                <th>{{__('Total Cost')}}</th>
                                                <th class="no-content"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            
                                            @foreach ($quotes as $q)
                                            <tr>
                                                <td>
                                                    <a href="{{ route('quote.show', $q->id) }}">
                                                        {{ $q->tracking_id ?? 'Untracked'}}
                                                    </a>
                                                </td>
                                                <td>{{ $q->user->fname.' '.$q->user->lname }}</td>
                                                <td class="capitalize">{{ ucwords($q->consignment_type) }}</td>
                                                <td>{{ $q->user->phone }}</td>
                                                <td>
                                                    @if ($q->product_type == 'vehicle')
                                                        {{ $q->num_of_vehicles.' Vehicle(s)' }}                 
                                                    @else
                                                        {{ $q->num_goods.' Product(s)' }}
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    @if ($q->status !== 2)
                                                        @switch($q->current_state)
                                                            @case(1)
                                                                <span class="badge badge-warning">Pending</span>
                                                            @break
                                                            @case(2)
                                                                <span class="badge badge-info">Quoted</span>
                                                            @break
                                                            @case(3)
                                                                <span class="badge badge-success">Paid</span>
                                                            @break
                                                            @case(4)
                                                                <span class="badge badge-info">Ordered</span>
                                                            @break
                                                            @case(5)
                                                                <span class="badge badge-info">Left Origin</span>
                                                            @break
                                                            @case(6)
                                                                <span class="badge badge-info">At Port</span>
                                                            @break
                                                            @case(7)
                                                                <span class="badge badge-info">Port Cleared</span>
                                                            @break
                                                            @case(8)
                                                                <span class="badge badge-info">At Border</span>
                                                            @break
                                                            @case(9)
                                                                <span class="badge badge-info">Border Cleared</span>
                                                            @break
                                                            @case(10)
                                                                <span class="badge badge-info">Delivery In Transit</span>
                                                            @break
                                                            @case(11)
                                                                <span class="badge badge-secondary">Completed</span>
                                                            @break
                                                            @default
                                                                <span class="badge badge-light">Invalid</span>
                                                            @break
                                                        @endswitch
                                                    @else
                                                        <span class="badge badge-default">Cancelled</span>
                                                    @endif 
                                                </td>
                                                <td>{{ $q->created_at->toFormattedDateString() }}</td>
                                                <td>ZMW {{ $q->price + $q->service_price + $q->other_price  }}</td>
                                                <td class="text-center">
                                                    <div class="dropdown custom-dropdown">
                                                        <a class="dropdown-toggle font-20 text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="las la-cog"></i>
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1" style="will-change: transform;">
                                                            <a class="dropdown-item" href="{{ route('quote.reply', $q->id) }}">{{__('Reply')}}</a>
                                                            <a class="dropdown-item" href="{{ route('quote.show', $q->id) }}">{{__('View')}}</a>
                                                            {{-- <a class="dropdown-item" href="javascript:void(0);">{{__('Edit')}}</a>
                                                            <a class="dropdown-item" href="javascript:void(0);">{{__('Delete')}}</a> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>{{__('Tracker ID')}}</th>
                                                <th>{{__('Customer')}}</th>
                                                <th>{{__('Consigment')}}</th>
                                                <th>{{__('Phone#')}}</th>
                                                <th>{{__('Total Items')}}</th>
                                                <th>{{__('Order Date')}}</th>
                                                <th>{{__('Total Cost')}}</th>
                                                <th></th>
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
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('public/assets/js/loader.js') !!}
    {!! Html::script('public/plugins/table/datatable/datatables.js') !!}
    <!--  The following JS library files are loaded to use Copy CSV Excel Print Options-->
    {!! Html::script('public/plugins/table/datatable/button-ext/dataTables.buttons.min.js') !!}
    {!! Html::script('public/plugins/table/datatable/button-ext/jszip.min.js') !!}
    {!! Html::script('public/plugins/table/datatable/button-ext/buttons.html5.min.js') !!}
    {!! Html::script('public/plugins/table/datatable/button-ext/buttons.print.min.js') !!}
    <!-- The following JS library files are loaded to use PDF Options-->
    {!! Html::script('public/plugins/table/datatable/button-ext/pdfmake.min.js') !!}
    {!! Html::script('public/plugins/table/datatable/button-ext/vfs_fonts.js') !!}
@endpush

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#basic-dt').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5,10,15,20],
                "pageLength": 5
            });
            $('#dropdown-dt').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5,10,15,20],
                "pageLength": 5
            });
            $('#last-page-dt').DataTable({
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                        "first": "<i class='las la-angle-double-left'></i>",
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>",
                        "last": "<i class='las la-angle-double-right'></i>"
                    }
                },
                "lengthMenu": [10,30,90,100,200],
                "pageLength": 10
            });
            $.fn.dataTable.ext.search.push(
                function( settings, data, dataIndex ) {
                    var min = parseInt( $('#min').val(), 10 );
                    var max = parseInt( $('#max').val(), 10 );
                    var age = parseFloat( data[3] ) || 0; // use data for the age column
                    if ( ( isNaN( min ) && isNaN( max ) ) ||
                        ( isNaN( min ) && age <= max ) ||
                        ( min <= age   && isNaN( max ) ) ||
                        ( min <= age   && age <= max ) )
                    {
                        return true;
                    }
                    return false;
                }
            );
            var table = $('#range-dt').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5,10,15,20],
                "pageLength": 5
            });
            $('#min, #max').keyup( function() { table.draw(); } );
            $('#export-dt').DataTable( {
                dom: '<"row"<"col-md-6"B><"col-md-6"f> ><""rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>>',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'btn btn-primary' },
                        { extend: 'csv', className: 'btn btn-primary' },
                        { extend: 'excel', className: 'btn btn-primary' },
                        { extend: 'pdf', className: 'btn btn-primary' },
                        { extend: 'print', className: 'btn btn-primary' }
                    ]
                },
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            } );
            // Add text input to the footer
            $('#single-column-search tfoot th').each( function () {
                var title = $(this).text();
                $(this).html( '<input type="text" class="form-control" placeholder="Search '+title+'" />' );
            } );
            // Generate Datatable
            var table = $('#single-column-search').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5,10,15,20],
                "pageLength": 5
            });
            // Search
            table.columns().every( function () {
                var that = this;
                $( 'input', this.footer() ).on( 'keyup change', function () {
                    if ( that.search() !== this.value ) {
                        that
                            .search( this.value )
                            .draw();
                    }
                } );
            } );
            var table = $('#toggle-column').DataTable( {
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5,10,15,20],
                "pageLength": 5
            } );
            $('a.toggle-btn').on( 'click', function (e) {
                e.preventDefault();
                // Get the column API object
                var column = table.column( $(this).attr('data-column') );
                // Toggle the visibility
                column.visible( ! column.visible() );
                $(this).toggleClass("toggle-clicked");
            } );
        } );
    </script>
@endpush
