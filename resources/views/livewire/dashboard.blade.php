<div>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: #f8fafc;
            color: #334155;
            line-height: 1.6;
        }

        .dashboard-container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 2rem;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .dashboard-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .dashboard-subtitle {
            font-size: 1.1rem;
            color: #64748b;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .school-year-card {
            text-align: center;
        }

        .school-year {
            font-size: 2rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1rem;
        }

        .semester-info {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .semester {
            font-size: 1.1rem;
            font-weight: 500;
            color: #475569;
        }

        .status-badge {
            background: #dcfce7;
            color: #166534;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .chart-container {
            position: relative;
            height: 300px;
            margin-top: 1rem;
        }

        .pie-chart-container {
            position: relative;
            height: 350px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .legend {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.9rem;
        }

        .legend-color {
            width: 12px;
            height: 12px;
            border-radius: 2px;
        }

        .charts-section {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 1024px) {
            .charts-section {
                grid-template-columns: 1fr;
            }
        }

        .bar-chart-container {
            position: relative;
            height: 350px;
        }

        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .stat-card {
            background: white;
            border-radius: 8px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid #e2e8f0;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 500;
        }
    </style>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <h1 class="dashboard-title">Dashboard</h1>
        </div>

        <div class="dashboard-grid">
            <div class="card school-year-card">
                <h3 class="card-title">School Year</h3>
                <div class="school-year">{{ $school_year }}</div>
                <div class="d-flex justify-content-between align-items-center me-5 ms-5 mb-5">
                    <!-- Semester Dropdown -->
                    <select class="form-select w-50" id="semesterDropdown" wire:change="semester" wire:model ="sem">
                        <option value="1st Semester" {{ $sem == '1st Semester' ? 'selected' : '' }}>1st Semester
                        </option>
                        <option value="2nd Semester" {{ $sem == '2nd Semester' ? 'selected' : '' }}>2nd Semester
                        </option>
                    </select>
                    <div class="form-check form-switch">
                        <input class="form-check-input fs-3" type="checkbox" id="toggleSwitch" wire:model="status"
                            wire:click="statuses" {{ $status ? 'checked' : '' }}>
                        <label class="form-check-label fs-3"
                            for="toggleSwitch">{{ $status ? 'Open' : 'Closed' }}</label>
                    </div>
                </div>
                <div class="">
                    <h3 class="card-title">No. of Submitted Application Form - Graduate Level</h3>
                    <div class="bar-chart-container" wire:ignore>
                        <canvas id="graduateChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="card">
                <h3 class="card-title">Applicant Status</h3>
                <div class="pie-chart-container mt-5" wire:ignore>
                    <canvas id="statusChart"></canvas>
                </div>
                <div class="legend">
                    <div class="legend-item">
                        <div class="legend-color" style="background: #3b82f6;"></div>
                        <span>Submitted: <b>{{ $pie_chart[1] }}</b></span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #f59e0b;"></div>
                        <span>For Evaluation: <b>{{ $pie_chart[2] }}</b></span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #10b981;"></div>
                        <span>Admitted: <b>{{ $pie_chart[3] }}</b></span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #ef4444;"></div>
                        <span>Denied: <b>{{ $pie_chart[4] }}</b></span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color" style="background: #6b7280;"></div>
                        <span>For Recommendation: <b>{{ $pie_chart[5] }}</b></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="charts-section">
            <div class="card">
                <h3 class="card-title">No. of Submitted Application Form - Undergraduate Level</h3>
                <div class="bar-chart-container" wire:ignore>
                    <canvas style="width: 100%; height: 100%" id="undergraduateChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Status Pie Chart
        const statusCtx = document.getElementById('statusChart').getContext('2d');
        new Chart(statusCtx, {
            type: 'doughnut',
            data: {
                labels: ['Submitted', 'For Evaluation', 'Admitted', 'Denied', 'For Recommendation'],
                datasets: [{
                    data: [{{ $pie_chart[1] }}, {{ $pie_chart[2] }}, {{ $pie_chart[3] }},
                        {{ $pie_chart[4] }}, {{ $pie_chart[5] }}
                    ],
                    backgroundColor: [
                        '#3b82f6',
                        '#f59e0b',
                        '#10b981',
                        '#ef4444',
                        '#6b7280'
                    ],
                    borderWidth: 0,
                    cutout: '65%'
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    datalabels: {
                        display: true,
                        color: 'white',
                        font: {
                            weight: 'bold',
                            size: 14
                        },
                        formatter: (value, context) => {
                            return value;
                        }
                    }
                },
                elements: {
                    arc: {
                        borderWidth: 2,
                        borderColor: 'white'
                    }
                }
            }
        });

        const gradData = @json($gradLabels); // your current {5: 'DVM : 4', ...}
        const gradCounts = @json($gradCounts); // your [4, 3, 5, ...]
        const gradLabels = Object.values(gradData).map(item => item.split(':')[0].trim());

        const undergradData = @json($undergradLabels); // your current {5: 'DVM : 4', ...}
        const undergradCounts = @json($undergradCounts); // your [4, 3, 5, ...]
        const undergradLabels = Object.values(undergradData).map(item => item.split(':')[0].trim());

        const grd = document.getElementById('graduateChart')?.getContext('2d');

        function getRandomColor(opacity = 0.6) {
            const r = Math.floor(Math.random() * 256);
            const g = Math.floor(Math.random() * 256);
            const b = Math.floor(Math.random() * 256);
            return `rgba(${r}, ${g}, ${b}, ${opacity})`;
        }

        const backgroundColors = gradCounts.map(() => getRandomColor(0.6));
        const borderColors = backgroundColors.map(color => color.replace(/0\.6\)$/, '1)')); // change opacity to 1

        const graduateChart = new Chart(grd, {
            type: 'bar',
            data: {
                labels: gradLabels,
                datasets: [{
                    label: '',
                    data: gradCounts,
                    backgroundColor: backgroundColors,
                    borderColor: borderColors,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                indexAxis: 'x',
                plugins: {
                    legend: {
                        display: true
                    },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return context.dataset.label + ': ' + context.raw;
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true
                    }
                }
            }
        });

        const ctx = document.getElementById('undergraduateChart')?.getContext('2d');
        if (ctx && undergradLabels.length > 0 && undergradCounts.length > 0) {
            const undergraduateChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: undergradLabels,
                    datasets: [{
                        label: '',
                        data: undergradCounts,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: false,
                    indexAxis: 'x',
                    plugins: {
                        legend: {
                            display: true
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.dataset.label + ': ' + context.raw;
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>


</div>
