
@extends('layouts.app')

@section('title', 'Patient Records')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2>Clinic Patient Records</h2>
        <p class="text-muted">Manage registered clinic patients.</p>
    </div>
    <a href="{{ route('patients.create') }}" class="btn btn-primary">
        + Register New Patient
    </a>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <h6 class="text-muted">Total Registered Patients</h6>
        <h2>{{ number_format($totalPatients) }}</h2>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <form method="GET" action="{{ route('patients.index') }}"
              class="row g-2 mb-3">
            <div class="col-md-9">
                <input type="text" name="search" class="form-control"
                       placeholder="Search patient name or number..."
                       value="{{ $search }}">
            </div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-primary">Search</button>
                <a href="{{ route('patients.index') }}"
                   class="btn btn-outline-secondary">Clear</a>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Patient No.</th>
                        <th>Full Name</th>
                        <th>Birth Date</th>
                        <th>Sex</th>
                        <th>Contact Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($patients as $patient)
                    <tr>
                        <td>{{ $patient->patient_number }}</td>
                        <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
                        <td>{{ $patient->birth_date }}</td>
                        <td>{{ $patient->sex }}</td>
                        <td>{{ $patient->contact_number ?? 'N/A' }}</td>
                        <td>
                            <a href="{{ route('patients.show', $patient) }}"
                               class="btn btn-sm btn-info">View</a>

                            <a href="{{ route('patients.edit', $patient) }}"
                               class="btn btn-sm btn-warning">Edit</a>

                            <form action="{{ route('patients.destroy', $patient) }}"
                                  method="POST" class="d-inline"
                                  onsubmit="return confirm('Delete this patient?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center py-4">
                            No patient records found. Register your first patient.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $patients->links() }}
    </div>
</div>
@endsection
