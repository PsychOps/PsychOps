<?php http_response_code(404);?>

<!DOCTYPE HTML>
<html lang="en">

<?php include 'templates/html/head.html' ;?>

<?php include 'templates/html/navigation.php' ;?>

<body>

<div class="notnavtext text-center">
    <img src="/assets/S1.png" alt="">
    <p class="fs-1">404 - Page Not Found</p>
    <p>
        We are unable to recognize this page. Are you sure you landed at the right place?
        <br/>
        <i>Currently, our website url's require being suffixed with <code>.php</code>. Make sure you have that.</i>
        <br/> <br/>
        If you believe this is a mistake on our side, please report it by making an issue.
        <br/> <br/>
        <b>Page name: <code> <?php echo basename($_SERVER['PHP_SELF'],'.php') ;?> </code></b>
    </p>
    <a href="https://github.com/PsychOps/PsychOps/issues/new" class="btn bg-green btn-rounded">Create an issue</a>
</div>

</body>

</html>

