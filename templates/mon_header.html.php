
<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="./../index.php">MyLinks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                <li class="nav-item">
                    <a class="nav-link active btn btn-primary text-white" aria-current="page" href="/">Links</a>
                </li>
                <?php if (!array_key_exists("user", $_SESSION)): ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="signup">SignUp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary text-white" href="signin">SignIn</a>
                    </li>

                <?php elseif (array_key_exists("user", $_SESSION)): ?>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="favorites">Favorites</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-secondary text-white" href="logout">Logout</a>
                    </li>


                <?php endif; ?>


                <!--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>-->

            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>


