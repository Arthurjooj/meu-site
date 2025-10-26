<a href="#" id="meuLink">Clique aqui</a>

<script>
document.getElementById('meuLink').addEventListener('click', function(e) {
    e.preventDefault();
    // Aqui você pode fazer uma requisição AJAX para registrar o clique no servidor, se necessário

    // Exemplo: registrar localmente no console
    console.log(new Date().toISOString() + " - Clique detectado");

    // Redirecionar após registrar
    window.location.href = "https://www.instagram.com/;
});
</script>
