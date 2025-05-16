<!doctype html>
<html
    lang="en"
    class="layout-navbar-fixed layout-menu-fixed layout-compact"
    dir="ltr"
    data-skin="bordered"
    data-bs-theme="light"
    data-assets-path="../assets/"
    data-template="vertical-menu-template-bordered">

<head>
    <?php include 'includes/head.php'; ?>

    <!-- DataTables CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link
        rel="stylesheet"
        href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" />

    <!-- CSS tweak to ensure horizontal scrollbar on DataTables -->
    <style>
        .dataTables_scrollBody {
            overflow-x: auto !important;
        }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <?php include 'includes/menu.php'; ?>
            <!-- / Menu -->

            <!-- Layout page -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php include 'includes/navbar.php'; ?>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- CSV‑Sourced Table Card -->
                        <div class="card">
                            <h5 class="card-header pb-0">CSV‑Sourced Table</h5>
                            <div class="card-datatable text-nowrap p-5" style="overflow-x:auto;">
                                <table
                                    id="csv-table"
                                    class="display table table-bordered"
                                    width="100%"></table>
                            </div>
                        </div>
                        <!-- / CSV‑Sourced Table Card -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <?php include 'includes/footer.php'; ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- / Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- / Layout container -->

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- PapaParse for CSV parsing -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.4.1/papaparse.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <script>
        $(document).ready(function() {
            // Path to your CSV file
            const csvFile = 'data/ICONX_Monitoring_Data_CLEANED.csv';

            Papa.parse(csvFile, {
                download: true,
                header: true,
                skipEmptyLines: true,
                complete: function(results) {
                    const data = results.data;
                    if (!data.length) {
                        console.error('CSV is empty or failed to parse.');
                        return;
                    }

                    // Dynamically build columns from the CSV header row
                    const keys = Object.keys(data[0]);
                    const columns = keys.map(key => ({
                        title: key,
                        data: key
                    }));

                    // Initialize DataTable
                    $('#csv-table').DataTable({
                        data: data,
                        columns: columns,
                        scrollX: true,
                        scrollCollapse: true,
                        paging: true,
                        ordering: true,
                        autoWidth: false
                    });
                },
                error: function(err) {
                    console.error('Error loading CSV:', err);
                }
            });
        });
    </script>
</body>

</html>