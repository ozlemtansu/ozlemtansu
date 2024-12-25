<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="blog.php">
	    	<b>Benim<span style="color: #0088FF;">Blogum</span>
	    	</b>
	    </a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Gezinmeyi Aç">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="blog.php">Blog</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" 
	             href="category.php">
	             Kategori</a>
	        </li>
	         <?php 
               if ($logged) {
	         ?>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" 
	             href="profile.php" 
	             role="button" 
	             data-bs-toggle="dropdown" 
	             aria-expanded="false">
	             <i class="fa fa-user" 
	                aria-hidden="true"></i> 
	            @<?=$_SESSION['username']?>
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" 
	            	   href="logout.php">
	            	   Çıkış Yap</a></li>
	          </ul>
	        </li>
	        <?php 
               } else {
	         ?>
	         <li class="nav-item">
	          <a class="nav-link" href="login.php">Giriş | Kayıt Ol</a>
	        </li>
	         <?php 
               }
	         ?>
	      </ul>
	      <form class="d-flex" 
	             role="search"
	             method="GET"
	             action="blog.php">
	        <input class="form-control me-2" 
	               type="search"
	               name="search" 
	               placeholder="Arama" 
	               aria-label="Arama">

	        <button class="btn btn-outline-success" 
	                type="submit">
	                Ara</button>
	      </form>
	    </div>
	  </div>
	</nav>