<div class="mb-3">
    <label for="patient_number" class="form-label">Patient Number</label>
    <input
        type="text"
        name="patient_number"
        id="patient_number"
        class="form-control @error('patient_number') is-invalid @enderror"
        value="{{ old('patient_number', $patient->patient_number ?? '') }}"
        required
    >
    @error('patient_number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label for="first_name" class="form-label">First Name</label>
        <input
            type="text"
            name="first_name"
            id="first_name"
            class="form-control @error('first_name') is-invalid @enderror"
            value="{{ old('first_name', $patient->first_name ?? '') }}"
            required
        >
        @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-6 mb-3">
        <label for="last_name" class="form-label">Last Name</label>
        <input
            type="text"
            name="last_name"
            id="last_name"
            class="form-control @error('last_name') is-invalid @enderror"
            value="{{ old('last_name', $patient->last_name ?? '') }}"
            required
        >
        @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>

<div class="mb-3">
    <label for="birth_date" class="form-label">Date of Birth</label>
    <input
        type="date"
        name="birth_date"
        id="birth_date"
        class="form-control @error('birth_date') is-invalid @enderror"
        value="{{ old('birth_date', isset($patient) ? $patient->birth_date->format('Y-m-d') : '') }}"
        max="{{ date('Y-m-d') }}"
        required
    >
    @error('birth_date')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="sex" class="form-label">Sex</label>
    <select
        name="sex"
        id="sex"
        class="form-select @error('sex') is-invalid @enderror"
        required
    >
        <option value="">Select sex</option>
        <option value="Male" {{ old('sex', $patient->sex ?? '') == 'Male' ? 'selected' : '' }}>Male</option>
        <option value="Female" {{ old('sex', $patient->sex ?? '') == 'Female' ? 'selected' : '' }}>Female</option>
    </select>
    @error('sex')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="contact_number" class="form-label">Contact Number</label>
    <input
        type="text"
        name="contact_number"
        id="contact_number"
        class="form-control @error('contact_number') is-invalid @enderror"
        value="{{ old('contact_number', $patient->contact_number ?? '') }}"
    >
    @error('contact_number')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <textarea
        name="address"
        id="address"
        class="form-control @error('address') is-invalid @enderror"
        rows="3"
    >{{ old('address', $patient->address ?? '') }}</textarea>
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>