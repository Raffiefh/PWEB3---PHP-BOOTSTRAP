<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ifran Raffi Gunawan -->
    <!-- 232410102006        -->
    <!-- Teknologi Informasi -->
    <title>Formulir Diri</title>
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
        <h2 class="text-center">Formulir Diri</h2>
        <form action="hasil.php" method="post">
            <fieldset>            
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="birthplace">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="2" required></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label for="phone">No. HP</label>
                    <input type="text" class="form-control" id="nomor" name="nomor" required>
                </div>
                <br>
                <label>Email</label>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="nama@example.com">
                    <label for="email">Email address</label>
                </div>
                <br>
                <div class="form-group">
                    <label for="birthdate">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="faculty"> Prodi dan Fakultas</label>
                    <input type="text" class="form-control" id="fakultas" name="fakultas" required>
                </div>
                <br>
                <div class="form-group">
                    <label for="message">Pesan dan Kesan</label>
                    <textarea class="form-control" id="PK" name="PK" rows="3" required></textarea>
                </div>
                <br>
            </fieldset>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>