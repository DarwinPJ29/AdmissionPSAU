<div>
    <div class="container-fluid">
        <div class="container mt-5">
            <!-- Main Content -->
            <div class="main-content">
                <div class="container">
                    <h1>Welcome to the Dashboard</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Semester Card -->
                            <div class="row mt-4 mb-3">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">School Year</h5>
                                            <!-- Dynamic Year Label -->
                                            <h1 id="yearLabel" class="text-center">{{ $school_year }}</h1>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <!-- Semester Dropdown -->
                                                <select class="form-select w-50" id="semesterDropdown"
                                                    wire:change="semester" wire:model ="sem">
                                                    <option value="1st Semester"
                                                        {{ $sem == '1st Semester' ? 'selected' : '' }}>1st Semester
                                                    </option>
                                                    <option value="2nd Semester"
                                                        {{ $sem == '2nd Semester' ? 'selected' : '' }}>2nd Semester
                                                    </option>
                                                </select>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input fs-3" type="checkbox"
                                                        id="toggleSwitch" wire:model="status" wire:click="statuses"
                                                        {{ $status ? 'checked' : '' }}>
                                                    <label class="form-check-label fs-3"
                                                        for="toggleSwitch">{{ $status ? 'Open' : 'Closed' }}</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Colleges</h5>
                                    <canvas id="barChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Applicant Statuses</h5>
                                    <canvas id="pieChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Bar Chart
        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Under Graduates', 'Masteral', 'Doctoral'],
                datasets: [{
                    label: 'Colleges Count',
                    data: [{{ $colleges[1] }}, {{ $colleges[2] }}, {{ $colleges[3] }}],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    }
                }
            }
        });

        // Pie Chart
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Submitted', 'For Evaluation', 'Admitted', 'For Recommendation', 'Denied'],
                datasets: [{
                    data: [{{ $pie_chart[1] }}, {{ $pie_chart[2] }}, {{ $pie_chart[3] }},
                        {{ $pie_chart[4] }}, {{ $pie_chart[5] }}
                    ],
                    backgroundColor: [
                        'rgba(0, 123, 255, 0.6)', // Primary - Submitted
                        'rgba(255, 193, 7, 0.6)', // Warning - For Evaluation
                        'rgba(40, 167, 69, 0.6)', // Success - Admitted
                        'rgba(108, 117, 125, 0.6)', // Secondary - For Recommendation
                        'rgba(220, 53, 69, 0.6)' // Danger - Denied
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top'
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
</div>
