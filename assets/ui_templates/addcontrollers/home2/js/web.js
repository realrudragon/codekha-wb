        // Line Chart
        var ctx1 = document.getElementById('lineChart').getContext('2d');
        var lineChart = new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'Sales',
                    data: [30, 50, 40, 70, 60],
                    borderColor: 'blue',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });

        // Pie Chart
        var ctx2 = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['2023', '2024', '2025'],
                datasets: [{
                    data: [35, 40, 15],
                    backgroundColor: ['#ff9b28', '#185CFF', '#c3ff39']
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });