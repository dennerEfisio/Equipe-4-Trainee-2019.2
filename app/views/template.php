<!-- Header -->
<?php include "includes/header.php"; ?>

<body class="alinhamento">
    <div class="cont">
        <!-- Navbar -->
        
        <?php include "includes/navbar.php"; ?>
        
        <!-- Conteudo central -->
        <?php $this->load($view,$viewData); ?>
    </div>
    
    <!-- Footer -->
    <?php include "includes/footer.php"; ?>
    
    <script src="<?php echo URL_BASE."assets/js/script.js";?>"></script>
    <script src="<?php echo URL_BASE."assets/js/jquery.js";?>"></script>
    <script src="<?php echo URL_BASE."assets/js/bootstrap.js";?>"></script>
    <script src="<?php echo URL_BASE."assets/js/script.js";?>"></script>
</body>

</html>