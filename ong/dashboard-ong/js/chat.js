let chatBox = document.querySelector('.chat-box'),
    userList = document.querySelector('.users-list'),
    sendButton = document.getElementById('send'),
    chatName = document.querySelector('.chat-area span'),
    chatImg = document.querySelector('.chat-area img'),
    messageInput = document.getElementById('input-mensagem')

var type = 1, destino, idInterval

function ShowMessages(messages) {
    messages.forEach(item => {
        let mensagem = document.createElement('div')
        if (item.origemMensagem == type) {
            mensagem.className = "chat outgoing"
        } else {
            mensagem.className = "chat incoming"
        }
        let conteudo = document.createElement('div')

        conteudo.className = 'details'
        let p = document.createElement('p')
        p.innerText = item.textoMensagem

        conteudo.append(p)
        mensagem.append(conteudo)
        chatBox.append(mensagem)
    })
}


async function sendMessage() {
    let value = messageInput.value
    if (value != "") {
        messageInput.value = ""
        let formData = new FormData()

        formData.append('conteudo', value)
        formData.append('type', type)
        formData.append('id', destino)

        const r = await fetch('../../Chat/enviar-mensagem.php', {
            method: 'POST',
            header: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: formData
        })
        const d = await r.json()
        console.log(d)
    }
}


async function retrieveMessages(id) {
    let formData = new FormData()

    formData.append('id', id)
    formData.append('type', type)

    const response = await fetch('../../Chat/consultar-mensagem.php', {
        method: 'POST',
        header: {
            'Accept': 'application/json',
            'Content-type': 'application/json'
        },
        body: formData
    })

    const data = await response.json()

    return data
}

async function displayMessages(id, img, name) {
    clearTimeout(idInterval)

    chatBox.innerHTML=""

    messageInput.focus();

    var initialData = await retrieveMessages(id)

    chatName.innerText = name
    chatImg.src = "../../ong/Cadastro/"+img

    chatName.classList.remove('hide')
    chatImg.classList.remove('hide')

    destino = id

    ShowMessages(initialData)

    idInterval = setInterval(async () => {
        var data = await retrieveMessages(id)

        if (JSON.stringify(initialData) != JSON.stringify(data)) {
            var messages = data.slice(initialData.length)
            ShowMessages(messages)

            initialData = data
        }
    }, 350)
    chatBox.scroll({ top: chatBox.scrollHeight, behavior: "smooth" })
}

const fillList = async (url) => {

    userList.innerHTML = ''

    const response = await fetch(url)
    const data = await response.json()

    let chats = data

    console.log(chats)

    chats.forEach(item => {
        let chat = document.createElement('a')

        let content = document.createElement('div')
        content.className = 'content'

        //TODO: quando adicionar o cadastro de imagem, atualizar o .src do img de modo que chame a foto do usuário
        let img = document.createElement('img')
        img.src = "../../ong/Cadastro/"+item.foto

        let details = document.createElement('div')
        details.className = 'details'

        let nome = document.createElement('span')
        nome.innerText = item.nome

        let msg = document.createElement('div')
        msg.setAttribute('class', 'chat-item-mensagem')
        if (item.sentfrom && item.ultimamsg) {
            msg.innerText = item.sentfrom == seuApelido ? `Você: ${item.ultimamsg}` : `${item.sentfrom}: ${item.ultimamsg}`
        }

        details.append(nome)
        content.append(img)
        content.append(details)

        chat.append(content)

        chat.addEventListener('click', () => displayMessages(item.id, item.foto, item.nome))

        userList.appendChild(chat)
    })
}

sendButton.addEventListener('click', sendMessage)

messageInput.addEventListener('keypress', (event) => {
    if (event.keyCode == 13) {
        sendMessage()
    }
})

window.onload = async () => { await fillList('../../Chat/consultar-conversas.php?type=' + type) }