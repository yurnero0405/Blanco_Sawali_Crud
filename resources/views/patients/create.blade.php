
@extends('layouts.app')

@section('title', 'Register Patient')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Register New Patient</h4>
    </div>

    <div class="card-body">
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf

            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Patient Number</label>
                    <input type="text" name="patient_number"
                           class="form-control" value="{{ old('patient_number') }}"
                           required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">First Name</label>
                    <input type="text" name="first_name"
                           class="form-control" value="{{ old('first_name') }}"
                           required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="last_name"
                           class="form-control" value="{{ old('last_name') }}"
                           required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Birth Date</label>
                    <input type="date" name="birth_date"
                           class="form-control" value="{{ old('birth_date') }}"
                           max="{{ date('Y-m-d') }}" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Sex</label>
                    <select name="sex" class="form-select" required>
                        <option value="">Select sex</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Contact Number</label>
                    <input type="text" name="contact_number"
                           class="form-control"
                           value="{{ old('contact_number') }}">
                </div>

                <div class="col-12">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control"
                              rows="3">{{ old('address') }}</textarea>
                </div>
            </div>

            <hr>

            <button type="submit" class="btn btn-primary">
                Save Patient
            </button>
            <a href="{{ route('patients.index') }}"
               class="btn btn-outline-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection
