// resources/js/commercial-documents.js ou public/js/commercial-documents.js

document.addEventListener('DOMContentLoaded', function () {
    console.log('JavaScript carregado com sucesso!');

    const typeLink = document.getElementById('typeLink');
    const typeFile = document.getElementById('typeFile');
    const urlField = document.getElementById('urlField');
    const fileField = document.getElementById('fileField');
    const urlInput = document.querySelector('input[name="external_url"]');
    const fileInput = document.querySelector('input[name="file"]');

    if (!typeLink || !typeFile) {
        console.log('Elementos não encontrados');
        return;
    }

    console.log('Elementos encontrados, configurando eventos...');

    function toggleFields() {
        if (typeLink.checked) {
            // Modo Link
            urlField.classList.remove('d-none');
            fileField.classList.add('d-none');

            // Ajustar required
            if (urlInput) urlInput.required = true;
            if (fileInput) fileInput.required = false;

            // Limpar valor do arquivo se houver
            if (fileInput) fileInput.value = '';

            console.log('Modo Link ativado - URL obrigatório');
        } else {
            // Modo Arquivo
            urlField.classList.add('d-none');
            fileField.classList.remove('d-none');

            // Ajustar required
            if (urlInput) urlInput.required = false;
            if (fileInput) fileInput.required = true;

            // Limpar URL se houver
            if (urlInput) urlInput.value = '';

            console.log('Modo Arquivo ativado - Arquivo obrigatório');
        }
    }

    // Adicionar event listeners
    typeLink.addEventListener('change', toggleFields);
    typeFile.addEventListener('change', toggleFields);

    // Inicializar
    toggleFields();

    // Monitorar envio do formulário
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (e) {
            console.log('Formulário sendo enviado...');
            console.log('Tipo selecionado:', typeLink.checked ? 'link' : 'file');
            console.log('URL:', urlInput ? urlInput.value : 'N/A');
            console.log('Arquivo:', fileInput && fileInput.files.length > 0 ? fileInput.files[0].name : 'Nenhum');
        });
    }
});