<!-- Futer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
    </div>
    <script src="public/vendor/jquery/jquery.min.js"></script>
    <script src="public/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
        $.ajax({
            url: "index.php?page=filmovi",
            method: "GET",
            dataType: "json",
            success: function(filmovi){
                console.log(filmovi);
                let tekst = "<ul>";
                for(let film of filmovi){
                    tekst += `<li>${film.naziv}</li>`
                }
                tekst+="</ul>";
                $("#filmovi").html(tekst);
            }
        })
    </script>
</footer>
<!--// Futer -->

</body>

</html>