    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media(); ?>/images/logoC.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">Usuario</p>
          <p class="app-sidebar__user-designation">Adminsitrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="<?= base_url(); ?>/dashboard"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Principal</span></a></li>

        <li class="treeview">
          <a class="app-menu__item" href="#" data-toggle="treeview">
            <i class="app-menu__icon fa fa-users" aria-hidden="true"></i>
            <span class="app-menu__label">Usuarios </span>
            <i class="treeview-indicator fa fa-angle-right"></i>
          </a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="<?= base_url(); ?>/usuarios"><i class="icon fa fa-circle-o"></i>Usuarios</a></li>

            <li><a class="treeview-item" href="<?= base_url(); ?>/roles"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            <li><a class="treeview-item" href="<?= base_url(); ?>/permisos"><i class="icon fa fa-circle-o"></i> Permisos</a></li>
          </ul>
        </li>

        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/clientes">
             <i class="app-menu__icon fa fa-user" aria-hidden="true"></i><span class="app-menu__label">Clientes</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/productos">
             <i class="app-menu__icon fa fa-archive" aria-hidden="true"></i><span class="app-menu__label">Productos</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/pedidos">
             <i class="app-menu__icon fa fa-shopping-cart" aria-hidden="true"></i><span class="app-menu__label">Pedidos</span>
          </a>
        </li>
        <li>
          <a class="app-menu__item" href="<?= base_url(); ?>/logout">
            <i class="app-menu__icon fa fa-sign-out" aria-hidden="true"></i>
            <span class="app-menu__label">Salir</span>
          </a>
        </li>
      </ul>
    </aside>