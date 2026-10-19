<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITS Project Work - Portale Aziendale</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7fe;
            color: #2b3674;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 20px;
            padding: 40px;
            max-width: 800px;
            width: 100%;
            box-shadow: 0px 18px 40px rgba(112, 144, 176, 0.12);
        }

        .header {
            border-bottom: 2px solid #e9edf7;
            padding-bottom: 20px;
            margin-bottom: 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 24px;
            color: #1b2559;
            font-weight: 700;
        }

        .badge {
            background: #e6f7ff;
            color: #0088ff;
            padding: 6px 16px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 20px;
            text-align: center;
        }

        .stat-box h3 {
            font-size: 14px;
            color: #a3ed00;
            color: #707eae;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .stat-box .status {
            font-size: 16px;
            font-weight: 700;
            color: #05cd99;
        }

        .footer-info {
            background: #111827;
            color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            font-size: 14px;
        }

        .footer-info p {
            margin-bottom: 8px;
        }

        .footer-info p:last-child {
            margin-bottom: 0;
        }

        .team-tag {
            color: #a3aed0;
            font-size: 12px;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="header">
            <h1>ITS Infrastructure Portal</h1>
            <span class="badge">Nodo Attivo</span>
        </div>

        <p style="margin-bottom: 25px; color: #707eae; line-height: 1.6;">
            Benvenuti nella dashboard dell'infrastruttura containerizzata. Il sistema è operativo e gestito tramite <strong>Reverse Proxy Nginx</strong>, <strong>DNS BIND9</strong> e <strong>Database MariaDB</strong>.
        </p>

        <div class="grid">
            <div class="stat-box">
                <h3>Servizio DNS</h3>
                <div class="status">BIND9 Online</div>
            </div>
            <div class="stat-box">
                <h3>Gateway Proxy</h3>
                <div class="status">Nginx Active</div>
            </div>
            <div class="stat-box">
                <h3>Persistenza</h3>
                <div class="status">MariaDB Ready</div>
            </div>
        </div>

        <div class="footer-info">
            <p><strong>Dominio:</strong> ns1.esempio.test</p>
            <p><strong>Ambiente:</strong> Docker Compose Bridge Network</p>
        </div>

        <div class="team-tag">
            Project Work ITS • Team: M. Scorteccia, G. Mazzoni, R. Camilli, A. Feliziani
        </div>
    </div>

</body>
</html>
