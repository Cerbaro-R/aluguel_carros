document.addEventListener('DOMContentLoaded', function () {
    const carroSelect = document.getElementById('carro_id');
    const dataInicioInput = document.getElementById('data_inicio');
    const dataFimInput = document.getElementById('data_fim');
    const precoTotalInput = document.getElementById('preco_total');

    function calcularPrecoTotal() {
        const carroSelecionado = carroSelect.options[carroSelect.selectedIndex];
        const precoDiario = parseFloat(carroSelecionado.getAttribute('data-preco')) || 0;
        const dataInicio = new Date(dataInicioInput.value);
        const dataFim = new Date(dataFimInput.value);

        if (dataInicio && dataFim && dataFim > dataInicio) {
            const diffTime = Math.abs(dataFim - dataInicio);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)); // Converte para dias
            const precoTotal = diffDays * precoDiario;
            precoTotalInput.value = precoTotal.toFixed(2); // Preenche o campo com o valor calculado
        } else {
            precoTotalInput.value = ''; // Limpa o valor se as datas não forem válidas
        }
    }

    carroSelect.addEventListener('change', calcularPrecoTotal);
    dataInicioInput.addEventListener('change', calcularPrecoTotal);
    dataFimInput.addEventListener('change', calcularPrecoTotal);
});
