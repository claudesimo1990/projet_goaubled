<nav class="fh5co-nav" role="navigation">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-xs-2">
        <div class="logo">
                <a href="index.html"><img src="\img\logo1.png"  alt=""></a>
        </div>
      </div>
      <div class="col-md-6 col-xs-6 text-center menu-1">
        <ul class="nav-list">
          <li class="list voir">
            <a href="product.html">Voir les Annonces</a>
          </li>
          <li class="list"><a href="about.html"><i class="icon-aircraft"></i>Expedier un Colis</a></li>
          <li class="list">
            <a href="services.html"><i class="icon-circle-plus circle"></i>Poster un Voyage</a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
        <ul class="nav-list">

          @auth
          <li class="list">
          <li class="has-dropdown">
            <a href="#">Mon Compte</a>
            <ul class="dropdown">
              <li><a href="#">Profil</a></li>
              <li><a href="#">Espace Expediteur</a></li>
              <li><a href="#">Espace Porteur</a></li>
              <li><a href="#">Mes Trajets</a></li>
                <li><a href="#">Message</a></li>
                    <li><a href="#">deconnection</a></li>
            </ul>
          </li>
          @else
          <li class="list">
            <a href="#">Inscription</a>
          </li>
          <li class="list"><a href="#">Connexion</a></li>

          @endauth



        </ul>
      </div>
    </div>

  </div>
</nav>
