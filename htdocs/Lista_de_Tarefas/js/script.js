function editar(id, descricao, page) {

    // criar um form de edição
    let form = document.createElement('form');
    form.method = 'post';
    form.action = `${page}.php?pag=${page}&acao=atualizar`;
    form.className = 'row';

    // criar um input para entrada de texto
    let input = document.createElement('input');
    input.type = 'text';
    input.name = 'tarefa';
    input.className = 'col-9 form-control';
    input.value = descricao;

    // criar um input oculto para armazenar o id
    let inputId = document.createElement('input');
    inputId.type = 'hidden';
    inputId.name = 'id';
    inputId.value = id;

    // criar um button para o envio do form
    let button = document.createElement('button');
    button.type = 'submit';
    button.className = 'col-3 btn btn-primary';
    button.innerHTML = 'Atualizar';

    // incluir o input tarefa no form
    form.appendChild(input);

    // inclui o inputId no form
    form.appendChild(inputId);

    // inclui o button no form
    form.appendChild(button);

    // Seleciona o elemento div tarefa
    let tarefa = document.getElementById(`tarefa_${id}`);

    // limpar o texto da tarefa para a inclusão do form
    tarefa.innerHTML = '';

    // incluir o form na página
    tarefa.insertBefore(form, tarefa[0]);
}

function remover(id, page) {
    location.href = `${page}.php?pag=${page}&acao=remover&id=${id}`;
}

function marcarRealizada(id, page) {
    location.href = `${page}.php?pag=${page}&acao=marcarRealizada&id=${id}`;
}