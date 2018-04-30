@extends('master')

@section('page_title', __('voyager.generic.viewing'))

@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            Integrations
        </h1>
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Provider
                                        </th>
                                        <th>
                                            Integration
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            GitHub
                                        </td>
                                        <td class="no-sort no-click" id="bread-actions">
                                            <a href="" title="{{ __('voyager.generic.view') }}" class="btn btn-sm btn-warning pull-left">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Enable</span>
                                            </a>
                                            <a href="javascript:;" title="{{ __('voyager.generic.delete') }}" class="btn btn-sm btn-danger pull-left delete" id="delete-gitgub">
                                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Disable</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Slack
                                        </td>
                                        <td class="no-sort no-click" id="bread-actions">
                                            <a href="" title="{{ __('voyager.generic.view') }}" class="btn btn-sm btn-warning pull-left">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Enable</span>
                                            </a>
                                            <a href="javascript:;" title="{{ __('voyager.generic.delete') }}" class="btn btn-sm btn-danger pull-left delete" id="delete-gitgub">
                                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Disable</span>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            AWS
                                        </td>
                                        <td class="no-sort no-click" id="bread-actions">
                                            <a href="" title="{{ __('voyager.generic.view') }}" class="btn btn-sm btn-warning pull-left">
                                                <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Enable</span>
                                            </a>
                                            <a href="javascript:;" title="{{ __('voyager.generic.delete') }}" class="btn btn-sm btn-danger pull-left delete" id="delete-gitgub">
                                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Disable</span>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager.generic.close') }}"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><i class="voyager-trash"></i>  Are you sure you want to diable this ?</h4>
                </div>
                <div class="modal-footer">
                    <form action="#" id="delete_form" method="POST">
                        {{ method_field("DELETE") }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                                 value="Yes, Disable it!">
                    </form>
                    <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager.generic.cancel') }}</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@stop

@section('javascript')
    <script>
        var deleteFormAction;
        $('td').on('click', '.delete', function (e) {
            $('#delete_modal').modal('show');
        });
    </script>
@stop
