// Função para abrir o modal de comunicados
function abrirModalComunicados() {
    const modal = document.getElementById('modalComunicados');
    modal.style.display = 'flex';
    carregarComunicados();
}

// Função para fechar o modal
function fecharModalComunicados() {
    const modal = document.getElementById('modalComunicados');
    modal.style.display = 'none';
}

// Função para carregar comunicados via AJAX
function carregarComunicados() {
    const container = document.getElementById('listaComunicados');

    fetch('/api/comunicados')
        .then(response => response.json())
        .then(comunicados => {
            if (comunicados.length === 0) {
                container.innerHTML = `
                    <div class="text-center py-4">
                        <p class="text-muted">Nenhum comunicado no momento.</p>
                    </div>
                `;
                return;
            }

            container.innerHTML = comunicados.map(com => `
                <div class="comunicado-card">
                    <div class="comunicado-titulo">${com.titulo}</div>
                    <div class="comunicado-conteudo">${com.conteudo}</div>
                    <div class="comunicado-meta">
                        <span class="comunicado-autor">📝 ${com.autor || 'ZKTeco'}</span>
                        <span>📅 ${new Date(com.created_at).toLocaleDateString('pt-BR')}</span>
                    </div>
                </div>
            `).join('');
        })
        .catch(error => {
            console.error('Erro:', error);
            container.innerHTML = `
                <div class="text-center py-4">
                    <p class="text-danger">Erro ao carregar comunicados.</p>
                </div>
            `;
        });
}

// Fechar modal ao clicar fora
document.addEventListener('click', function (event) {
    const modal = document.getElementById('modalComunicados');
    if (event.target === modal) {
        fecharModalComunicados();
    }
});

// Fechar modal com tecla ESC
document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
        fecharModalComunicados();
    }
});