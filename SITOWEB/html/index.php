<?php
// Credenziali di connessione
$host = 'db';
$db   = 'db_progetto';
$user = 'felix';
$pass = 'vm1';
$charset = 'utf8mb4';

$dsn = 'mysql:host=db;port=3306;dbname=db_progetto;charset=utf8';

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    // Connessione al database MariaDB
    $pdo = new PDO($dsn, $user, $pass, $options);

    // Esecuzione della query SQL
    $stmt = $pdo->query('SELECT id_dipendente, nome, cognome, email, data_di_nascita, mansione FROM dipendenti');
    $dipendenti = $stmt->fetchAll();
} catch (\PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Sito Web Dipendenti</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 3px solid #080808; padding: 8px; text-align: center; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Elenco Dipendenti</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cognome</th>
		<th>Data</th>
                <th>Email</th>
                <th>Mansione</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dipendenti as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id_dipendente']) ?></td>
                    <td><?= htmlspecialchars($row['nome']) ?></td>
                    <td><?= htmlspecialchars($row['cognome']) ?></td>
                    <td><?= htmlspecialchars($row['data_di_nascita']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['mansione']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>
