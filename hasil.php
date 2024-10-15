<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Formulir</title>
    <!-- Ifran Raffi Gunawan -->
    <!-- 232410102006        -->
    <!-- Teknologi Informasi -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Magic Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Shop</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Student</a></li>
                    <li><a class="dropdown-item" href="#">Teacher</a></li>
                    <li><a class="dropdown-item" href="#">Master</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h2 class="text-center">Hasil Formulir</h2>
        <table class="table table-bordered">
            <tr>
                <th class="bg-light-subtle text-white">Nama</th>
                <td><?php echo htmlspecialchars($_POST['nama']); ?></td>
            </tr>
            <tr>
                <th class="">Tempat dan Tanggal Lahir</th>
                <td><?php echo htmlspecialchars($_POST['tempat_lahir']) . ", " . htmlspecialchars($_POST['tanggal_lahir']); ?></td>
            </tr>
            <tr>
                <th class="">Jenis Kelamin</th>
                <td><?php echo htmlspecialchars($_POST['gender']); ?></td>
            </tr>
            <tr>
                <th class="">Alamat</th>
                <td><?php echo htmlspecialchars($_POST['alamat']); ?></td>
            </tr>
            <tr class="">
                <th>Nomor HP</th>
                <td><?php echo htmlspecialchars($_POST['nomor']); ?></td>
            </tr>
            <tr class="">
                <th>Email</th>
                <td><?php echo htmlspecialchars($_POST['email']); ?></td>
            </tr>
            <tr class="">
                <th>Fakultas & Prodi</th>
                <td><?php echo htmlspecialchars($_POST['fakultas']); ?></td>
            </tr>
            <tr class="">
                <th>Pesan dan Kesan</th>
                <td><?php echo htmlspecialchars($_POST['PK']); ?></td>
            </tr>
        </table>
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>