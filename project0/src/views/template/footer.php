    <footer class="footer">
        <div class="count-table">
            <?php if ($count) { ?>
                <h4>>>> <span><?= $count ?> de <?= $activeCount ?> </span></h4>
            <?php } else { ?>
                <span class="font-weight-light">Copyright </span>
                <span class="font-weight-light">@ well<span class="text-warning">ington</span></span>
            <?php } ?>    
        </div>
    </footer>
    <script src="assets/js/app.js"></script>
</body>
</html>