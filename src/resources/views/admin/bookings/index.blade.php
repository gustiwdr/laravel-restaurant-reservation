@extends('layouts.admin')
@section('content')
@can('booking_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.bookings.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.booking.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Booking">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.nama_depan') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.nama_belakang') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.no_telp') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.tamu') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.jenis_paket') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.tanggal') }}
                        </th>
                        <th>
                            {{ trans('cruds.booking.fields.waktu') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $key => $booking)
                        <tr data-entry-id="{{ $booking->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $booking->id ?? '' }}
                            </td>
                            <td>
                                {{ $booking->nama_depan ?? '' }}
                            </td>
                            <td>
                                {{ $booking->nama_belakang ?? '' }}
                            </td>
                            <td>
                                {{ $booking->email ?? '' }}
                            </td>
                            <td>
                                {{ $booking->no_telp ?? '' }}
                            </td>
                            <td>
                                {{ $booking->tamu ?? '' }}
                            </td>
                            <td>
                                {{ $booking->jenis_paket ?? '' }}
                            </td>
                            <td>
                                {{ $booking->tanggal ?? '' }}
                            </td>
                            <td>
                                {{ $booking->waktu ?? '' }}
                            </td>
                            <td>
                                @can('booking_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('booking_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.bookings.edit', $booking->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('booking_delete')
                                    <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('booking_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bookings.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Booking:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection