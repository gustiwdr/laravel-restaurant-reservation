@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.booking.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route('admin.bookings.add') }}" method="POST" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="nama_depan">{{ trans('cruds.booking.fields.nama_depan') }}</label>
                <input class="form-control {{ $errors->has('nama_depan') ? 'is-invalid' : '' }}" type="text" name="nama_depan" id="nama_depan" value="{{ old('nama_depan', '') }}" required>
                @if($errors->has('nama_depan'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_depan') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.nama_depan_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="nama_belakang">{{ trans('cruds.booking.fields.nama_belakang') }}</label>
                <input class="form-control {{ $errors->has('nama_belakang') ? 'is-invalid' : '' }}" type="text" name="nama_belakang" id="nama_belakang" value="{{ old('nama_belakang', '') }}" required>
                @if($errors->has('nama_belakang'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama_belakang') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.nama_belakang_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="email">{{ trans('cruds.booking.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email', '') }}" required>
                @if($errors->has('email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="no_telp">{{ trans('cruds.booking.fields.no_telp') }}</label>
                <input class="form-control {{ $errors->has('no_telp') ? 'is-invalid' : '' }}" type="text" name="no_telp" id="no_telp" value="{{ old('no_telp', '') }}" required>
                @if($errors->has('no_telp'))
                    <div class="invalid-feedback">
                        {{ $errors->first('no_telp') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.no_telp_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tamu">{{ trans('cruds.booking.fields.tamu') }}</label>
                <input class="form-control {{ $errors->has('tamu') ? 'is-invalid' : '' }}" type="number" name="tamu" id="tamu" value="{{ old('tamu', '') }}" required>
                @if($errors->has('tamu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tamu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.tamu_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="jenis_paket">{{ trans('cruds.booking.fields.jenis_paket') }}</label>
                <select class="form-control {{ $errors->has('jenis_paket') ? 'is-invalid' : '' }}" name="jenis_paket" id="jenis_paket" required>
                    <option value="" disabled {{ old('jenis_paket', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    <option value="paket1" {{ old('jenis_paket') === 'paket1' ? 'selected' : '' }}>{{ trans('cruds.booking.fields.jenis_paket_paket1') }}</option>
                    <option value="paket2" {{ old('jenis_paket') === 'paket2' ? 'selected' : '' }}>{{ trans('cruds.booking.fields.jenis_paket_paket2') }}</option>
                    <option value="paket3" {{ old('jenis_paket') === 'paket3' ? 'selected' : '' }}>{{ trans('cruds.booking.fields.jenis_paket_paket3') }}</option>
                </select>
                @if($errors->has('jenis_paket'))
                    <div class="invalid-feedback">
                        {{ $errors->first('jenis_paket') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.jenis_paket_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tanggal">{{ trans('cruds.booking.fields.tanggal') }}</label>
                <input class="form-control {{ $errors->has('tanggal') ? 'is-invalid' : '' }}" type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', '') }}" required>
                @if($errors->has('tanggal'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tanggal') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.tanggal_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="waktu">{{ trans('cruds.booking.fields.waktu') }}</label>
                <input class="form-control {{ $errors->has('waktu') ? 'is-invalid' : '' }}" type="time" name="waktu" id="waktu" value="{{ old('waktu', '') }}" required>
                @if($errors->has('waktu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('waktu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.booking.fields.waktu_helper') }}</span>
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
