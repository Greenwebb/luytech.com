@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/fullcalendar/fullcalendar.css') !!}
    {!! Html::style('plugins/fullcalendar/custom-fullcalendar.advance.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/forms/theme-checkbox-radio.css') !!}
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{__('Apps')}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{__('Calendar')}}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
                <li style="display: none;"><span id="currentDate"></span></li>
            </ul>
            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <button class="premium-btn">
                        <i class="las la-star"></i>
                        <span>{{__('Premium')}}</span>
                    </button>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing" id="cancel-row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <button type="button" id="myBtn" class="w-100 btn-sm btn btn-primary"><i class="las la-plus"></i> {{__('Create New Event')}}</button>
                                <div id="external-events" class="mt-5">
                                    <p class="text-muted"> {{__('Event List')}}</p>
                                    <div class="external-event bg-success-strong text-white p-1 mb-2" draggable="true" data-type="bg-success">
                                        <i class="ml-2 vertical-middle"></i> {{__('Update Successful')}}
                                    </div>
                                    <div class="external-event bg-info text-white p-1 mb-2" draggable="true" data-type="bg-info">
                                        <i class="ml-2 vertical-middle"></i> {{__('Another Event')}}
                                    </div>
                                    <div class="external-event bg-warning-strong text-white p-1 mb-2" draggable="true" data-type="bg-warning">
                                        <i class="ml-2 vertical-middle"></i> {{__('Conference')}}
                                    </div>
                                    <div class="external-event bg-danger-strong text-white p-1 mb-2" draggable="true" data-type="bg-danger">
                                        <i class="ml-2 vertical-middle"></i> {{__('Error solve')}}
                                    </div>
                                </div>
                                <div class="mt-5 d-none d-xl-block"><h5 class="text-center">
                                        {{__('How to use ?')}}</h5>
                                    <ul class="pl-3 mt-3">
                                        <li class="text-muted mb-3"> {{__('Drag and drop event from calender or click in the calendar.')}}</li>
                                        <li class="text-muted mb-3"> {{__('Change view by clicking month, week or day tab')}}</li>
                                        <li class="text-muted mb-3"> {{__('Click on todaay button to see the current date')}}</li>
                                        <li class="text-muted mb-3"> {{__('Use Right and Left arrow to change months')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-content widget-content-area">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- The Modal -->
            <div id="addEventsModal" class="modal animated fadeIn">
                <div class="modal-dialog modal-dialog-centered">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <div class="modal-body">
                            <span class="close">&times;</span>
                            <div class="add-edit-event-box">
                                <div class="add-edit-event-content">
                                    <h5 class="add-event-title modal-title"> {{__('Creat new event')}}</h5>
                                    <h5 class="edit-event-title modal-title"> {{__('Edit Events')}}</h5>
                                    <form class="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex event-title">
                                                    <input id="write-e" type="text" placeholder="{{__('Event Title')}}" class="form-control" name="task">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="form-group start-date">
                                                    <div class="d-flex">
                                                        <input id="start-date" placeholder="{{__('Event Start Date')}}" class="form-control" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="form-group end-date">
                                                    <div class="d-flex">
                                                        <input id="end-date" placeholder="{{__('Event End Date')}}" type="text" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="d-flex event-description">
                                                    <textarea id="taskdescription" placeholder="{{__('Event Description')}}" rows="3" class="form-control" name="taskdescription"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="event-label mt-4">
                                                    <p class=""> {{__('Label:')}}</p>
                                                    <div class="d-sm-flex d-block">
                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-primary">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-primary">
                                                                <span class="new-control-indicator"></span> {{__('Blue')}}
                                                            </label>
                                                        </div>
                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-warning">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-warning">
                                                                <span class="new-control-indicator"></span> {{__('Yellow')}}
                                                            </label>
                                                        </div>
                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-success">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-success">
                                                                <span class="new-control-indicator"></span> {{__('Green')}}
                                                            </label>
                                                        </div>
                                                        <div class="n-chk">
                                                            <label class="new-control new-radio radio-danger">
                                                                <input type="radio" class="new-control-input" name="marker" value="bg-danger">
                                                                <span class="new-control-indicator"></span> {{__('Red')}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="discard" class="btn btn-sm" data-dismiss="modal"> {{__('Cancel')}}</button>
                            <button id="add-e" class="btn btn-sm"> {{__('Add Event')}}</button>
                            <button id="edit-event" class="btn btn-sm"> {{__('Save')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    {!! Html::script('assets/js/loader.js') !!}
    {!! Html::script('plugins/fullcalendar/moment.min.js') !!}
    {!! Html::script('plugins/flatpickr/flatpickr.js') !!}
    {!! Html::script('plugins/fullcalendar/fullcalendar.min.js') !!}
    {!! Html::script('plugins/fullcalendar/custom-fullcalendar.advance.js') !!}
@endpush

@push('custom-scripts')

@endpush
