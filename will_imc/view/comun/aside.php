<aside id="sidebar">
    <div class="d-flex">
        <button class="toggle-btn" type="button">
            <i class="lni lni-grid-alt"></i>
        </button>
        <div class="sidebar-logo">
            <a href="#">Caso: </a>
        </div>
    </div>
    <ul class="sidebar-nav">
        <li class="sidebar-item">
            <a href="index.php?url=inicio" class="sidebar-link">
                <i class="lni lni-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                <i class="lni lni-user"></i>
                <span>Usuarios</span>
            </a>
            <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                <li class="sidebar-item">
                    <a href="index.php?url=usuario" class="sidebar-link">Lista</a>
                </li>
                <li class="sidebar-item">
                    <a href="index.php?url=usuario&accion=nuevo" class="sidebar-link">Nuevo</a>
                </li>
            </ul>
        </li>
        <li class="sidebar-item">
            <a href="index.php?url=ajax" class="sidebar-link">
            <i class="lni lni-protection"></i>
                <span>Ajax</span>
            </a>
        </li>          
        <li class="sidebar-item">
            <a href="index.php?url=login&accion=logout" class="sidebar-link">
                <i class="lni lni-exit"></i>
                <span>Salir</span>
            </a>
        </li>        
    </ul>
</aside>