type QuestionsAndAnswers = {
    pergunta: string,
    resposta: string,
}

type FAQ = [
    QuestionsAndAnswers,
    QuestionsAndAnswers,
    QuestionsAndAnswers,
    QuestionsAndAnswers,
    QuestionsAndAnswers,
    QuestionsAndAnswers,
]

const faqs:FAQ = [
    {pergunta: "Onde estão os favoritos?", resposta: "Para encontrar os favoritos, pode acessar o seu perfil após o login e encontrará os seus favoritos e outras listas."},
    {pergunta: "Quem escolhe as Top Receitas?",resposta: "As “Top Receitas” são escolhidas automaticamente por um algoritmo, as receitas mais vistas na ultima semana vão automaticamente para essa secção."},
    {pergunta: "Como posso criar uma conta?",resposta: "Para criar uma conta, basta tocar no ícone no topo da tela e abaixo do login tocar em “Inscreve-te no alquimista”."},
    {pergunta: " Têm receitas não alcoólicas?",resposta: "As receitas de bebidas não alcóolicas estão no outro lado do website!"},
    {pergunta: "Quando mudam as de época?",resposta: "As receitas da época mudam quando aparecer uma época nova, seja uma estação nova ou uma época festiva que esteja a aproximar-se"},
    {pergunta: "Como posso contactá-los?",resposta: "Nossos contactos estão na página do 'Sobre nós'!"},
]

function getColumnCount (): 1 | 2 | 3 {
    const width:number = window.innerWidth;
    if (width > 1280) return 3;
    if(width > 768) return 2;
    return 1;
}

function createCard (questions: QuestionsAndAnswers):HTMLDivElement {
    const card = document.createElement("div");
    card.className = "dropdown mb-4";
    card.innerHTML = `
        <button class="dropdown-button bg-pink w-full text-start flex justify-between p-2 rounded-md
                           sm:p-3">
                <span class="font-poppins text-cream">${questions.pergunta}</span>
                <img class="w-6" src="../images/seta_baixo.svg" alt="">
            </button>
            <div class="dropdown-content hidden">
                <p class="text-cream font-poppins p-2 text-sm
                         md:text-md">${questions.resposta}</p>
            </div>
    `;
    return card;
}

function renderColumns () {
    const faqContainer = document.getElementById("faqContainer");
    const numCols = getColumnCount();

    faqContainer.innerHTML = '';
    const columnElements = Array.from({length: numCols}, () => {
        const column = document.createElement("div");
        column.className = "flex flex-col flex-1";
        faqContainer.appendChild(column);
        return column;
    });

    faqs.forEach((faq, i) => {
        columnElements[i % numCols].appendChild(createCard(faq));
    });

    toggleListener();
}

function toggleListener() {
    document.querySelectorAll('.dropdown-button').forEach(btn => {
        btn.addEventListener('click', e => {
            e.target.closest('.dropdown').querySelector('.dropdown-content').classList.toggle('hidden');
        });
    });
}

let currentColumns = getColumnCount();
renderColumns();

window.addEventListener('resize', () => {
    const newCols = getColumnCount();
    if (newCols !== currentColumns) {
        currentColumns = newCols;
        renderColumns();
    }
});