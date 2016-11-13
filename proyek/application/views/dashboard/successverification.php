<?php
    $add = base_url('assets/dashboard/');

?>
<html>
    <body>
        Verification Success !
    </body>
    <script src="<?= $add ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                window.location = "<?= site_url() ?>";
            },5000);
        });
    </script>
</html>

