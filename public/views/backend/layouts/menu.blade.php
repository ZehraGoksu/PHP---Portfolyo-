<div id="layoutSidenav_nav">

   
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <a class="nav-link" href="{{base_url("admin")}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Alanlar</div>
                <a class="nav-link" href="{{base_url("admin/about")}}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Hakkımda
                </a>
                
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Portfolyo
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{base_url("admin/projectList")}}" >
                            Projeler
                        </a>
                        <a class="nav-link collapsed" href="{{base_url("admin/projectAdd")}}" >
                            Proje Ekle
                        </a>
                       
                       
                    </nav>
                </div>
                <a class="nav-link collapsed" href="{{base_url("admin/contactList")}}" >
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    İletişim 
                </a>
                
            </div>
        </div>
    </nav>
</div>