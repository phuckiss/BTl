<?php if(isset($_SESSION['update']) || isset($_SESSION['delete'])): ?>
<div class="alert alert-success" style="text-align:center;">
    <h3 class="alert-link">
        <?php 
            echo isset($_SESSION['update'])? $_SESSION['update'] : ''; 
            echo isset($_SESSION['delete'])? $_SESSION['delete'] : '';   
            unset($_SESSION['update']);
            unset($_SESSION['delete']);
        ?>
    </h3>
</div>
<?php endif; ?>