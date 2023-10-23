/* SELECT RAÇA */
const wrapper = document.querySelector(".wrapper"),
selectBtn = wrapper.querySelector(".select-btn"),
searchInp = wrapper.querySelector("input"),
options = wrapper.querySelector(".options");

let breeds = ["Bulldog", "Chihuahua", "Chow Chow", "Golden Retriever", "Maine Coon", "Pastor Alemão",    
            "Persa", "Pitbull", "Raça Não Definida", "Siamês"]

function addRace(selectedRace) {
    options.innerHTML = "";
    breeds.forEach(race => {
       let isSelected = race == selectedRace ? "selected" : "";
       let li = `<li onclick="updateName(this)" class="${isSelected}">${race}</li>`;
       options.insertAdjacentHTML("beforeend", li);
    });
}
addRace();

function updateName(selectedLi) {
    searchInp.value = "";
    addRace(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchedVal = searchInp.value.toLowerCase();

    arr = breeds.filter(data => {
        return data.toLowerCase().startsWith(searchedVal);
    }).map(data => `<li onclick="updateName(this)">${data}</li>`).join("");
    options.innerHTML = arr ? arr : `<p>Ops! Raça não encontrada...</p>`;
});

selectBtn.addEventListener("click", () => {
    wrapper.classList.toggle("active");
})



/* SELECT PORTE 
const wrapperPorte = document.querySelector(".wrapper-porte"),
selectBtnPorte = wrapperPorte.querySelector(".wrapper-porte .select-btn"),
searchInpPorte = wrapperPorte.querySelector(".wrapper-porte input"),
optionsPorte = wrapperPorte.querySelector(".wrapper-porte .options");

let breedsPorte = ["Pequeno", "Médio", "Grande"]

function addRacePorte(selectedRace) {
    optionsPorte.innerHTML = "";
    breedsPorte.forEach(race => {
       let isSelected = race == selectedRace ? "selected" : "";
       let li = `<li onclick="updateNamePorte(this)" class="${isSelected}">${race}</li>`;
       optionsPorte.insertAdjacentHTML("beforeend", li);
    });
}
addRacePorte();

function updateNamePorte(selectedLi) {
    searchInpPorte.value = "";
    addRacePorte(selectedLi.innerText);
    wrapperPorte.classList.remove("active");
    selectBtnPorte.firstElementChild.innerText = selectedLi.innerText;
}

selectBtnPorte.addEventListener("click", () => {
    wrapperPorte.classList.toggle("active");
})
*/


/* SELECT IDADE 
const wrapperIdade = document.querySelector(".wrapper-idade"),
selectBtnIdade = wrapperIdade.querySelector(".wrapper-idade .select-btn"),
searchInpIdade = wrapperIdade.querySelector(".wrapper-idade input"),
optionsIdade = wrapperIdade.querySelector(".wrapper-idade .options");

let breedsIdade = ["Filhote (Menos de 1 ano)", "Adulto (Entre 1 e 3 anos)", 
                "Adulto (Entre 3 e 5 anos)", "Idoso (Mais de 5 anos)"]

function addRaceIdade(selectedRace) {
    optionsIdade.innerHTML = "";
    breedsIdade.forEach(race => {
       let isSelected = race == selectedRace ? "selected" : "";
       let li = `<li onclick="updateNameIdade(this)" class="${isSelected}">${race}</li>`;
       optionsIdade.insertAdjacentHTML("beforeend", li);
    });
}
addRaceIdade();

function updateNameIdade(selectedLi) {
    searchInpIdade.value = "";
    addRaceIdade(selectedLi.innerText);
    wrapperIdade.classList.remove("active");
    selectBtnIdade.firstElementChild.innerText = selectedLi.innerText;
}

selectBtnIdade.addEventListener("click", () => {
    wrapperIdade.classList.toggle("active");
})
*/

const select = document.querySelector("#selectIdade .select");
const options_list = document.querySelector("#selectIdade .options-list");
const optionsLi = document.querySelectorAll("#selectIdade .option");

//show & hide options list
select.addEventListener("click", () => {
  options_list.classList.toggle("active");
  select.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");

  /*
select.querySelector("i").style = "transform: rotate(-180deg);"

  select.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");
  */
});

//select option
optionsLi.forEach((option) => {
  option.addEventListener("click", () => {
    optionsLi.forEach((option) => {option.classList.remove('selected')});
    select.querySelector("span").innerHTML = option.innerHTML;
    option.classList.add("selected");
    options_list.classList.toggle("active");
    select.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");
    /*
    select.querySelector("i").style = "transform: rotate(0);"

    select.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");
    */
  });
});




const selectPorte = document.querySelector("#selectPorte .select");
const options_listPorte = document.querySelector("#selectPorte .options-list");
const optionsPorte = document.querySelectorAll("#selectPorte .option");

//show & hide options list
selectPorte.addEventListener("click", () => {
  options_listPorte.classList.toggle("active");
  selectPorte.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");

  /*
select.querySelector("i").style = "transform: rotate(-180deg);"

  select.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");
  */
});

//select option
optionsPorte.forEach((option) => {
  option.addEventListener("click", () => {
    optionsPorte.forEach((option) => {option.classList.remove('selected')});
    selectPorte.querySelector("span").innerHTML = option.innerHTML;
    option.classList.add("selected");
    options_listPorte.classList.toggle("active");
    selectPorte.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");
    /*
    select.querySelector("i").style = "transform: rotate(0);"

    select.querySelector(".fi-rr-angle-small-down").classList.toggle("fi-rr-angle-small-up");
    */
  });
});




/* SELECT VACINA */
const wrapperVac = document.querySelector(".wrapper-vac"),
selectBtnVac = wrapperVac.querySelector(".wrapper-vac .select-btn"),
searchInpVac = wrapperVac.querySelector(".wrapper-vac input"),
optionsVac = wrapperVac.querySelector(".wrapper-vac .options");

let breedsVac = ["Adenovírus tipo 1 (CAV-1)", "Adenovírus tipo 2 (CAV-2)", "Bordetella (Tosse dos Canis)", 
                "Cinomose", "FIV (Vírus da Imunodeficiência Felina)", "Leptospirose", "Leucemia Felina (FeLV)", 
                "Lyme", "Panleucopenia Felina (Parvovírus Felino)", "Raiva", "Vacina múltipla (ou V8/V10/V12)"]

function addRaceVac() {
    optionsVac.innerHTML = "";
    breedsVac.forEach(race => {
       let li = `<li><input type="checkbox"/>${race}</li>`;
       optionsVac.insertAdjacentHTML("beforeend", li);
    });
}
addRaceVac();

function updateNameVac(selectedLi) {
    searchInpVac.value = "";
    addRaceVac(selectedLi.innerText);
    wrapperVac.classList.remove("active");
    selectBtnVac.firstElementChild.innerText = selectedLi.innerText;
}

searchInpVac.addEventListener("keyup", () => {
    let arr = [];
    let searchedVal = searchInpVac.value.toLowerCase();

    arr = breedsVac.filter(data => {
        return data.toLowerCase().startsWith(searchedVal);
    }).map(data => `<li><input type="checkbox"/>${data}</li>`).join("");
    optionsVac.innerHTML = arr ? arr : `<p>Ops! Vacina não encontrada...</p>`;
});

selectBtnVac.addEventListener("click", () => {
    wrapperVac.classList.toggle("active");
})



/* SELECT DOENÇA */
const wrapperDoen = document.querySelector(".wrapper-doen"),
selectBtnDoen = wrapperDoen.querySelector(".wrapper-doen .select-btn"),
searchInpDoen = wrapperDoen.querySelector(".wrapper-doen input"),
optionsDoen = wrapperDoen.querySelector(".wrapper-doen .options");

let breedsDoen = ["Alergias", "Asma Felina", "Artrite", "Calicivírus Felino", "Cinomose", "Diabetes", 
                "Doença do Trato Urinário", "Doença do Verme do Coração", "Gripe Canina", "Obesidade", 
                "Parvovirose Canina", "Raiva", "Rinotraqueíte Felina", "Sarna"]

function addRaceDoen() {
    optionsDoen.innerHTML = "";
    breedsDoen.forEach(race => {
       let li = `<li><input type="checkbox"/>${race}</li>`;
       optionsDoen.insertAdjacentHTML("beforeend", li);
    });
}
addRaceDoen();

function updateNameDoen(selectedLi) {
    searchInpDoen.value = "";
    addRaceDoen(selectedLi.innerText);
    wrapperDoen.classList.remove("active");
    selectBtnDoen.firstElementChild.innerText = selectedLi.innerText;
}

searchInpDoen.addEventListener("keyup", () => {
    let arr = [];
    let searchedVal = searchInpDoen.value.toLowerCase();

    arr = breedsDoen.filter(data => {
        return data.toLowerCase().startsWith(searchedVal);
    }).map(data => `<li><input type="checkbox"/>${data}</li>`).join("");
    optionsDoen.innerHTML = arr ? arr : `<p>Ops! Vacina não encontrada...</p>`;
});

selectBtnDoen.addEventListener("click", () => {
    wrapperDoen.classList.toggle("active");
})