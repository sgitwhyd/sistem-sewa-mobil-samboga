<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <!-- logo here -->
              </span>
              <span class="app-brand-text demo menu-text fw-bold ms-2">SMB rentcar</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active">
              <a href="<?= base_url('/'); ?>" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Dashboards">Dashboard</div>
              </a>
            </li>
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Master</span>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('admin/armada'); ?>" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-car-garage'></i>
                <div data-i18n="Armada">Armada</div>
              </a>
            </li>           
            <li class="menu-item">
              <a href="<?= base_url('admin/bank'); ?>" class="menu-link">
                <i class='menu-icon tf-icons bx bxs-credit-card'></i>
                <div data-i18n="Armada">Bank Account</div>
              </a>
            </li>           
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Transaksi</span>
            </li>
            <li class="menu-item">
              <a href="#" class="menu-link">
                <i class="menu-icon tf-icons bx bx-taxi"></i>
                <div data-i18n="Penyewaan">Penyewaan</div>
              </a>
            </li>
            
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Management</span>
            </li>
            <li class="menu-item">
              <a href="<?= base_url('admin/user'); ?>" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user"></i>
                <div data-i18n="Penyewaan">Users</div>
              </a>
            </li>
          </ul>
        </aside>
