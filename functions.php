<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

?>


<script>
    function repotsAlert() {
        alert("Do you really wanna get serviced!!...Wink wink");
    }

    function profile() {
        const menu = document.querySelector(".menu");
        menu.classList.toggle("hidden");
    }

    function clickToHide() {
        const menu = document.querySelector(".menu");
        menu.classList.toggle("hidden");
    }

    function pretend() {
        alert('Just pretend some code execution is going on, rn...')
    }

    function support() {
        const div = document.querySelector('.supportFloatDiv');
        div.classList.toggle('hidden')
    }
</script>