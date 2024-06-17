<div>
    <div>
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <a class="navbar brand nav-link-white" href="/projeto/index.php">
                    <img src="https://icones.pro/wp-content/uploads/2021/02/icone-de-la-maison-grise.png" width="80" height="80">
                </a>
                <div class="collapse navbar-collapse" id="#navbarSupportedContent" style="margin-left: 24px;">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link nav-link-white" aria-current="page" href="/projeto/blog.php">Blog</a>
                        </li>
                        <?php
                        session_start();
                            if (isset($_SESSION['escritor_id'])) {
                                echo "<li class=\"nav-item\">";
                                echo "<a class=\"nav-link nav-link-white\" aria-current=\"page\" href=\"/projeto/admin/addArtigoForm.php\">Adicionar Artigo</a>";
                                echo "</li>";

                                echo "<li class=\"nav-item\">";
                                echo "<a class=\"nav-link nav-link-white\" aria-current=\"page\" href=\"/projeto/admin/escritor.php\">Meu Usuário</a>";
                                echo "</li>";

                                echo "<li class=\"nav-item\">";
                                echo "<a class=\"nav-link nav-link-white\" aria-current=\"page\" href=\"/projeto/admin/logout.php\">Logout</a>";
                                echo "</li>";
                            } else {
                                echo "<li class=\"nav-item\">";
                                echo "<a class=\"nav-link nav-link-white\" aria-current=\"page\" href=\"/projeto/admin/loginForm.php\">Login</a>";
                                echo "</li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<style>
    .nav-link-white {
        color: white;
    }
</style>