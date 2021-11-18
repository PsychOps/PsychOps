<script>
var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
var collapseList = collapseElementList.map(function (collapseEl) {
  return new bootstrap.Collapse(collapseEl)
})
</script>
<!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a
          href="index.php"
          class="list-group-item list-group-item-action py-2 ripple bg-button"
          aria-current="true"
        >
          <i class="fas fa-address-card fa-fw me-3"></i><span>About us</span>
        </a>
        <a href="team.php" class="list-group-item list-group-item-action py-2 ripple bg-button">
          <i class="fas fa-users fa-fw me-3"></i><span>Our team</span>
        </a>
        <a href="positions.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-laptop-code fa-fw me-3"></i><span>Open positions</span></a
        >
        <a href="associates.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-handshake fa-fw me-3"></i><span>Associates</span></a
        >
        <a href="commissions.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-coins fa-fw me-3"></i><span>Commissions</span></a
        >
        <a href="mg.php" class="list-group-item list-group-item-action py-2 ripple bg-button">
          <i class="fas fa-cubes fa-fw me-3"></i><span>MinecraftGolden</span>
        </a>
        <a href="pingernos.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-server fa-fw me-3"></i><span>Pingernos</span></a
        >
        <a href="network.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-network-wired fa-fw me-3"></i><span>Network</span></a
        >
        <a href="credit.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-award fa-fw me-3"></i><span>Credit</span></a
        >
        <a href="legal.php" class="list-group-item list-group-item-action py-2 ripple bg-button"
          ><i class="fas fa-balance-scale fa-fw me-3"></i><span>Legal</span></a
        >
        <!--
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a
        > -->
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        data-target="#collapseOne"
        aria-controls="sidebarMenu"
        aria-expanded="true"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

    <!-- data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> -->

      <!-- Brand -->
      <a class="navbar-brand" href="index.php">
        <img
          src="assets/PsychOpsTransparent.png"
          class="navbar-ps"
          height="25"
          alt=""
          loading="lazy"
        />
      </a>
      <!-- Right links -->
      <ul class="navbar-nav ms-auto d-flex flex-row">
        <!-- Icon -->
        <li class="nav-item me-3 me-lg-0">
          <a class="nav-link" href="https://github.com/PsychOps" target="_blank">
            <i class="fab fa-github bg-button fa-2x" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4"></div>
</main>
<!--Main layout-->