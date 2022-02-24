$(document).ready( () => {
    getTodosUsuarios()
})
// remove a logica a baixo para um arquivo .js
function mostrarModalAddUser()
{
    $("#modalAddUser").show("slow")
}
function fechaModalAddUsuario(idTag)
{
    $(`#${idTag}`).hide("slow")
}
// carregar registros
function getTodosUsuarios()
{
    $.ajax({
        url: "./api/cliente",
        method: "get",
        success: res => { 
                publicaTable( res )
            },
        error: err => console.log(err)
    })
}
// monta os registro na tabela
function publicaTable(dados)
{
    dados.forEach( element => {
        let tag = `
            <tr>
                <td>${element.userId}</td>
                <td>${element.name}</td>
                <td>${element.fone_number}</td>
                <td>${element.cpf}</td>
                <td>${element.placa}</td>
                <td>
                    <button class="btn btn-sm btn-warning" title="Editar" onclick="editUser(${element.userId})">Editar</button>
                    <button class="btn btn-sm btn-danger" title="Excluir" onclick="delUser(${element.userId})">Excluir</button>
                </td>
            </tr>
        `
        $("#bodyTable").append(tag)
    });
}
// add usuario
function saveAddUsuario()
{
    let Nome    = $("#iptAddNome").val()
    let Fone    = $("#iptAddFone").val()
    let Cpf     = $("#iptAddCpf").val()
    let Placa   = $("#iptAddPlaca").val()

    $.ajax({
        url: "./api/cliente",
        method: "post",
        data: {
            "name": Nome,
            "fone": Fone,
            "cpf": Cpf,
            "plate": Placa
        },
        success: () => location.reload(),
    })
}
// Edita usuario
function editUser(id)
{
    $("#modalEditUser").show("slow")
    // pega valore
    $.ajax({
        url: `/api/cliente/${id}`,
        method: 'get',
        success: (res) => populaModalEdit(res)
    })
    // preenche inputs
}
function populaModalEdit(dados)
{
    $("#iptEditNome").val(dados.name)
    $("#iptEditFone").val(dados.fone_number)
    $("#iptEditCpf").val(dados.cpf)
    $("#iptEditPlaca").val(dados.plate)
    $("#iptEditIdPlaca").val(dados.auto_id)
}

// update registro
function updateUsuario(id)
{
    let dados = {
                "name":     $("#iptEditNome").val(),
                "fone":     $("#iptEditFone").val(),
                "cpf":      $("#iptEditCpf").val(),
                "plate":    $("#iptEditPlaca").val(),
                "idPlate":  $("#iptEditIdPlaca").val(dados.auto_id)
    }

    $.ajax({
        url: `./api/cliente/${id}`,
        data: dados,
        success: (res) => {
            // atualizar tabela
            // redirecionar p index
            console.log(res)
        },
        error: (err) => sconsole.log(res)
    })
}
// Deletar usaário
function delUser(id)
{
    $.ajax({
        url: `./api/cliente/${id}`,
        method: "delete",
        success: () => location.reload(),
        error: err => console.log(err)
    })
}