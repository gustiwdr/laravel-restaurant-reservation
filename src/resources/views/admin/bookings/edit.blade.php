@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.bookings.update', [$booking->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="nama_depan">{{ trans('cruds.footer.fields.nama_depan_helper') }}</label>
                <input class="form-control {{ $errors->has('nama_depan') ? 'is-invalid' : '' }}" type="text" name="nama_depan" id="nama_depan" value="{{ old('nama_depan', $booking->nama_depan) }}" required>
                @if($errors->has('nama_depan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_depan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.nama_depan_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nama_belakang">{{ trans('cruds.footer.fields.nama_belakang_helper') }}</label>
                <input class="form-control {{ $errors->has('nama_belakang') ? 'is-invalid' : '' }}" type="text" name="nama_belakang" id="nama_belakang" value="{{ old('nama_belakang', $booking->nama_belakang) }}" required>
                @if($errors->has('nama_belakang'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_belakang') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.nama_belakang_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.footer.fields.email_helper') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', $booking->email) }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="no_telp">{{ trans('cruds.footer.fields.no_telp_helper') }}</label>
                <input class="form-control {{ $errors->has('no_telp') ? 'is-invalid' : '' }}" type="text" name="no_telp" id="no_telp" value="{{ old('no_telp', $booking->no_telp) }}" required>
                @if($errors->has('no_telp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_telp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.no_telp_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tamu">{{ trans('cruds.footer.fields.jumlah_tamu_helper') }}</label>
                <input class="form-control {{ $errors->has('tamu') ? 'is-invalid' : '' }}" type="number" name="tamu" id="tamu" value="{{ old('tamu', $booking->tamu) }}" required>
                @if($errors->has('tamu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tamu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.jumlah_tamu_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="jenis_paket">{{ trans('cruds.footer.fields.jenis_paket_helper') }}</label>
                <select class="form-control {{ $errors->has('jenis_paket') ? 'is-invalid' : '' }}" name="jenis_paket" id="jenis_paket" required>
                    <option value="" disabled {{ old('jenis_paket', null) === null ? 'selected' : '' }}>Pilih Jenis Paket</option>
                    <option value="paket1" {{ old('jenis_paket', $booking->jenis_paket) === 'paket1' ? 'selected' : '' }}>Paket Booking "Baru Jadian"</option>
                    <option value="paket2" {{ old('jenis_paket', $booking->jenis_paket) === 'paket2' ? 'selected' : '' }}>Paket Booking "Keluarga Cemara"</option>
                    <option value="paket3" {{ old('jenis_paket', $booking->jenis_paket) === 'paket3' ? 'selected' : '' }}>Paket Booking "Satu Keturunan"</option>
                </select>
                @if($errors->has('jenis_paket'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_paket') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.jenis_paket_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="tanggal">{{ trans('cruds.footer.fields.tanggal_helper') }}</label>
                <input class="form-control {{ $errors->has('tanggal') ? 'is-invalid' : '' }}" type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $booking->tanggal) }}" required>
                @if($errors->has('tanggal'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tanggal') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.tanggal_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="waktu">{{ trans('cruds.footer.fields.waktu_helper') }}</label>
                <input class="form-control {{ $errors->has('waktu') ? 'is-invalid' : '' }}" type="time" name="waktu" id="waktu" value="{{ old('waktu', $booking->waktu) }}" required>
                @if($errors->has('waktu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waktu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.footer.fields.waktu_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
