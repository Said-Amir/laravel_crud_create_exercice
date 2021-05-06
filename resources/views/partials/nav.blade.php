<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('user') }}>User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href={{ route('bibliotheque') }}>Bibliothèque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('livre') }}>Livre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href={{ route('image') }}>Image</a>
                </li>
            </ul>
        </div>
    </div>
</nav>