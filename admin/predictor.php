<?php
// Proxy endpoint to avoid CORS issues
if (isset($_GET['proxy'])) {
    // Handle preflight
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Methods: POST, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type');
        exit;
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        header('Content-Type: application/json');
        $payload = file_get_contents('php://input');

        $ch = curl_init('https://iconx-fastapi-production.up.railway.app/predict');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            http_response_code(500);
            echo json_encode(['error' => curl_error($ch)]);
        } else {
            echo $response;
        }
        curl_close($ch);
        exit;
    }
}
?>

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


    <!-- Custom CSS tweak -->
    <style>
        .dataTables_scrollBody {
            overflow-x: auto !important;
        }

        /* Styled output card */
        #result .card {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>




<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include 'includes/menu.php'; ?>

            <div class="layout-page">
                <?php include 'includes/navbar.php'; ?>

                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">

                        <div class="card mb-4">
                            <h5 class="card-header">Aging Prediction</h5>
                            <div class="card-body">
                                <form id="predictForm">
                                    <div class="row mb-4">
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="number"
                                                step="any"
                                                class="form-control"
                                                id="latInput"
                                                placeholder="Lat"
                                                required />
                                            <label for="latInput">Lat</label>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="number"
                                                step="any"
                                                class="form-control"
                                                id="longInput"
                                                placeholder="Long"
                                                required />
                                            <label for="longInput">Long</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="fatPortInput"
                                                placeholder="FAT Port to Customers"
                                                required />
                                            <label for="fatPortInput">FAT Port to Customers</label>
                                        </div>
                                        <div class="col-md-6 form-floating">
                                            <input
                                                type="number"
                                                step="any"
                                                class="form-control"
                                                id="signalInput"
                                                placeholder="Signal OPM ONT (dBm)"
                                                required />
                                            <label for="signalInput">Signal OPM ONT (dBm)</label>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <label for="mitraSelect" class="form-label">Mitra Aktivasi</label>
                                            <select class="form-select" id="mitraSelect" required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="AFB">AFB</option>
                                                <option value="IDM">IDM</option>
                                                <option value="IFT">IFT</option>
                                                <option value="INTENS">INTENS</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="serviceSelect" class="form-label">Service</label>
                                            <select class="form-select" id="serviceSelect" required>
                                                <option value="" disabled selected>Pilih</option>
                                                <option value="10">ICONX - 10 MBPS</option>
                                                <option value="20">ICONX - 20 MBPS</option>
                                                <option value="35">ICONX - 35 MBPS</option>
                                                <option value="50">ICONX - 50 MBPS</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-12 form-floating">
                                            <input
                                                type="date"
                                                class="form-control"
                                                id="tanggalDisposisi"
                                                required />
                                            <label for="tanggalDisposisi">Tanggal Disposisi</label>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Predict</button>
                                </form>

                                <div id="result" class="mt-4"></div>
                            </div>
                        </div>

                    </div>
                    <?php include 'includes/footer.php'; ?>
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>

    <!-- Core JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        document.getElementById('predictForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const lat = parseFloat(document.getElementById('latInput').value);
            const Long = parseFloat(document.getElementById('longInput').value);
            const fatPort = parseInt(document.getElementById('fatPortInput').value, 10);
            const signal = parseFloat(document.getElementById('signalInput').value);
            const mitra = document.getElementById('mitraSelect').value;
            const service = document.getElementById('serviceSelect').value;
            const date = new Date(document.getElementById('tanggalDisposisi').value);
            let day = date.getDay();
            const dispo_dayofweek = day === 0 ? 7 : day;
            const dispo_is_weekend = (day === 0 || day === 6) ? 1 : 0;

            const payload = {
                Lat: lat,
                Long,
                'FAT Port to Customers': fatPort,
                'Signal OPM ONT (dBm)': signal,
                dispo_dayofweek,
                dispo_is_weekend
            };
            ['AFB', 'IDM', 'IFT', 'INTENS'].forEach(m => payload[`Mitra_${m}`] = (m === mitra) ? 1 : 0);
            ['10', '20', '35', '50'].forEach(s => payload[`Service_${s}`] = (s === service) ? 1 : 0);

            try {
                const resp = await fetch(window.location.pathname + '?proxy=1', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(payload)
                });
                if (!resp.ok) throw new Error(`HTTP ${resp.status}`);
                const data = await resp.json();

                // Styled output
                const aging = data.prediction || data.Aging || 'N/A';
                document.getElementById('result').innerHTML =
                    `<div class="card text-center">
               <div class="card-body">
                 <h5 class="card-title">Predicted Aging</h5>
                 <p class="display-6 fw-bold">${aging}</p>
               </div>
             </div>`;
            } catch (err) {
                document.getElementById('result').innerHTML = `<div class="alert alert-danger">Error: ${err.message}</div>`;
            }
        });
    </script>
</body>

</html>