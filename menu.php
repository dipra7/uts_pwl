<div class="row">
    <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="index.php?hal=home">Sistem Data Pegawai</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-5 mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php?hal=home" >HOME <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=aboutus">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MENU
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="index.php?hal=dataPegawai">PEGAWAI</a>
                        </div>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <?php 
                        $member = $_SESSION['MEMBER'];
                        if(!isset($member)){
                        
                    ?>

                    <a href="index.php?hal=login" class="btn bg-white text-info my-2 my-sm-0"><i class="fa fa-sign-in"></i> LOGIN</a>
                    
                    <?php
                        }else{
                    ?>

                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle text-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?= $member['fullname'] ?>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-info" href="logout.php">LOGOUT</a>
                        </div>
                    </div>

                    <?php 
                        }
                    ?>
                    
                </div>
            </div>
        </nav>
    </div>
</div>