<div class="card">
    <div class="card-body">
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/landing-page*') ? 'active' : '' }}"
                    href="/super_admin/landing-page">Konten Landing Page</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/admin*') ? 'active' : '' }}"
                    href="/super_admin/admin">Data Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/media-informasi*') ? 'active' : '' }}"
                    href="/super_admin/media-informasi">Media Informasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/tutorial*') ? 'active' : '' }}"
                    href="/super_admin/tutorial">Tutorial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/katalog*') ? 'active' : '' }}"
                    href="/super_admin/katalog">Katalog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('super_admin/reward*') ? 'active' : '' }}"
                    href="/super_admin/reward">Product Reward</a>
            </li>
        </ul>
    </div>
</div>
