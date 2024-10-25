document.querySelector('form').addEventListener('submit', function (e) {
    const modelo = document.getElementById('modelo').value;
    const ano = document.getElementById('ano').value;
    
    if (modelo === '' || ano === '') {
        e.preventDefault(); // Evita o envio do formulário
        alert('Por favor, preencha todos os campos.');
    }
});