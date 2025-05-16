<!doctype html>

<html
    lang="en"
    class=" layout-navbar-fixed layout-menu-fixed layout-compact "

    dir="ltr" data-skin="bordered" data-bs-theme="light"

    data-assets-path="../assets/"
    data-template="vertical-menu-template-bordered">

<?php include 'includes/head.php'; ?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'includes/menu.php'; ?>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">

                <!-- Navbar -->
                <?php include 'includes/navbar.php'; ?>
                <!-- / Navbar -->


                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Activations Over Time (Line Chart) -->
                            <div class="col-xl-6 col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Aktivasi Over Time</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="barChart" class="chartjs" height="250"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Activations by Mitra (Horizontal Bar) -->
                            <div class="col-xl-6 col-12 mb-4">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Aktivasi by Mitra</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="horizontalBarChart" class="chartjs" height="250"></canvas>
                                    </div>
                                </div>
                            </div>



                            <!-- Service Plan Mix (Doughnut) -->
                            <div class="col-lg-4 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Service Plan Mix</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="doughnutChart" class="chartjs" height="350"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Signal Strength (Scatter) -->
                            <div class="col-lg-8 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">ONT Signal Strength (dBm)</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="scatterChart" class="chartjs" height="137"></canvas>
                                    </div>
                                </div>
                            </div>

                            <!-- Aging Distribution (Histogram) -->
                            <div class="col-lg-6 col-12 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Distribusi Aging</h5>
                                    </div>
                                    <div class="card-body">
                                        <canvas id="radarChart" class="chartjs" height="355"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- / Content -->




                    <!-- Footer -->
                    <?php include 'includes/footer.php'; ?>
                    <!-- / Footer -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->





    <!-- Core JS -->

    <!-- build:js assets/vendor/js/theme.js  -->



    <script src="../assets/vendor/libs/jquery/jquery.js"></script>

    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>



    <script src="../assets/vendor/libs/@algolia/autocomplete-js.js"></script>

    <script src="../assets/vendor/libs/pickr/pickr.js"></script>



    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>


    <script src="../assets/vendor/libs/hammer/hammer.js"></script>

    <script src="../assets/vendor/libs/i18n/i18n.js"></script>


    <script src="../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/chartjs/chartjs.js"></script>

    <!-- Main JS -->

    <script src="../assets/js/main.js"></script>


    <!-- Page JS -->
    <script src="../assets/js/charts-chartjs-legend.js"></script>
    <!-- <script src="../assets/js/charts-chartjs.js"></script> -->
    <!-- include via CDN -->
    <script src="https://unpkg.com/papaparse@5.4.1/papaparse.min.js"></script>

    <!-- at the bottom of your page, after including Chart.js -->
    <script>
        // 1) Load & parse CSV into an array of objects
        async function loadData() {
            const res = await fetch('data/ICONX_Monitoring_Data_CLEANED.csv');
            const text = await res.text();
            // parse with headers, auto‑type numbers/dates
            const {
                data,
                errors
            } = Papa.parse(text, {
                header: true,
                dynamicTyping: true,
                skipEmptyLines: true
            });
            if (errors.length) console.warn(errors);
            return data; // array of objects, correctly handling quoted commas
        }


        function groupBy(arr, keyFn) {
            return arr.reduce((acc, x) => {
                const k = keyFn(x);
                acc[k] = (acc[k] || 0) + 1;
                return acc;
            }, {});
        }

        function bucketAging(arr) {
            const buckets = {
                '0': 0,
                '1-2': 0,
                '3-5': 0,
                '>5': 0
            };
            arr.forEach(o => {
                const a = +o['Aging'];
                if (a === 0) buckets['0']++;
                else if (a <= 2) buckets['1-2']++;
                else if (a <= 5) buckets['3-5']++;
                else buckets['>5']++;
            });
            return buckets;
        }

        loadData().then(data => {
            // --- Activations Over Time (Line) ---
            const dates = [...new Set(data.map(o => o['Tanggal Aktivasi']))]
                .sort((a, b) => new Date(a) - new Date(b));
            const activationsByDate = groupBy(data, o => o['Tanggal Aktivasi']);
            new Chart(document.getElementById('barChart'), {
                type: 'bar',
                data: {
                    labels: dates,
                    datasets: [{
                        label: 'Activations',
                        data: dates.map(d => activationsByDate[d] || 0),
                        backgroundColor: '#03a9fc',
                        borderColor: "transparent",
                        maxBarThickness: 16,
                        borderRadius: {
                            topRight: 15,
                            topLeft: 15
                        },
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    }
                }
            });

            // --- Activations by Mitra (Horizontal Bar) ---
            const byMitra = groupBy(data, o => o['Mitra Aktivasi']);
            new Chart(document.getElementById('horizontalBarChart'), {
                type: 'bar',
                data: {
                    labels: Object.keys(byMitra),
                    datasets: [{
                        label: 'Activations',
                        data: Object.values(byMitra),
                        borderColor: "transparent",
                        backgroundColor: '#03a9fc',
                        maxBarThickness: 20,
                    }]
                },
                options: {
                    indexAxis: 'y',
                    responsive: true,
                    scales: {
                        x: {
                            beginAtZero: true
                        }
                    }
                }
            });



            // --- Service Plan Mix (Doughnut) ---
            const byService = groupBy(data, o => o['Service']);
            new Chart(document.getElementById('doughnutChart'), {
                type: 'doughnut',
                data: {
                    labels: Object.keys(byService),
                    datasets: [{
                        data: Object.values(byService)
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        }
                    }
                }
            });

            // --- Signal Strength (Scatter) ---
            new Chart(document.getElementById('scatterChart'), {
                type: 'scatter',
                data: {
                    datasets: [{
                        label: 'Optical Power (dBm)',
                        data: data.map((o, i) => ({
                            x: i + 1, // or parse Float(o.Lat) for geospatial
                            y: +o['Signal OPM ONT (dBm)']
                        })),
                        pointRadius: 5
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Customer #'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'dBm'
                            }
                        }
                    }
                }
            });

            // --- Aging Distribution (Histogram-style Bar) ---
            const agingBuckets = bucketAging(data);
            new Chart(document.getElementById('radarChart'), {
                // repurpose radar canvas to show Aging histogram
                type: 'bar',
                data: {
                    labels: Object.keys(agingBuckets),
                    datasets: [{
                        label: 'Orders',
                        data: Object.values(agingBuckets)
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            // …you can wire up the polarChart or bubbleChart similarly…
        });
    </script>

</body>

</html>

<!-- beautify ignore:end -->