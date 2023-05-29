function fetchBooks() {
        fetch("fetch_books.php").then(fetchResponse).then(fetchBooksJson);
}


function fetchResponse(response) {
    if (!response.ok) {return null};
    return response.json();
}

function fetchBooksJson(json) {
    console.log("Fetching...");
    console.log(json);
    if (!json.length) {noResults(); return;}
    
    const container = document.getElementById('page');
    container.innerHTML = '';
    container.className = 'page';

    for (let book in json) {
        const card = document.createElement('div');
        card.dataset.id = json[book].content.id;
        card.classList.add('book');
        const author = document.createElement('strong');
        author.innerHTML = json[book].content.author;
        card.appendChild(author);
        const img = document.createElement('img');
        img.src = json[book].content.image;
        const link = document.createElement('a');
        link.href = json[book].content.url;
        link.appendChild(img);
        card.appendChild(link);
        const infoContainer = document.createElement('div');
        infoContainer.classList.add("infoContainer");
        const name = document.createElement('p');
        name.innerHTML = json[book].content.title;
        card.appendChild(name);
        container.appendChild(card);
        }
}

function openNav() {
    document.getElementById("mySidepanel2").style.width = "20%";
  }
  
  /* Set the width of the sidebar to 0 (hide it) */
  function closeNav() {
    document.getElementById("mySidepanel2").style.width = "0";
  }

function noResults() {
    // Definisce il comportamento nel caso in cui non ci siano contenuti da mostrare
    const container = document.getElementById('page');
    container.innerHTML = '';
    const nores = document.createElement('div');
    nores.className = "nores";
    nores.textContent = "Nessun risultato.";
    container.appendChild(nores);
  }



fetchBooks();