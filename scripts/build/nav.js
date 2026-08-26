function abrirNav () {
    document.getElementById("nav").classList.remove('hidden');
    document.getElementById("nav").classList.add('block');
    document.getElementById("abrir").classList.remove('block');
    document.getElementById("abrir").classList.add('hidden');
    document.getElementById("fechar").classList.add('block');
    document.getElementById("fechar").classList.remove('hidden');
    document.body.classList.add('overflow-hidden')

}

function fecharNav () {
    document.getElementById("nav").classList.remove('block');
    document.getElementById("nav").classList.add('hidden');
    document.getElementById("abrir").classList.remove('hidden');
    document.getElementById("abrir").classList.add('block');
    document.getElementById("fechar").classList.add('hidden');
    document.getElementById("fechar").classList.remove('block');
    document.body.classList.remove('overflow-hidden')

}