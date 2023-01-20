const button = document.querySelector("button");
const main = document.querySelector(".main");
const id = document.querySelector("#id");
const name = document.querySelector("#name");
const select = document.querySelector("#select");
const body = document.querySelector("body");

function fetchJson() {
  return fetch("pokemon.json")
    .then((result) => result.json())
    .then((res) => res);
}

function renderItem(items) {
  const div = document.createElement("div");
  for (let j in items) {
    const h4 = document.createElement("h4");
    h4.textContent =
      j != "id"
        ? `${j.toLocaleUpperCase()}: `
        : `${j.toLocaleUpperCase()}: ${items[j]}`;
    div.append(h4);
    const par = document.createElement("p");
    for (let k in items[j]) {
      const subPar = document.createElement("p");
      const spanIdx = document.createElement("span");
      const spanVal = document.createElement("span");
      spanIdx.textContent = j != "type" ? `${k}: ` : "";
      spanVal.textContent = items[j][k];
      subPar.append(spanIdx);
      subPar.append(spanVal);
      par.append(subPar);
      console.log(k, items[j][k]);
    }
    div.append(par);
  }
  div.className = "item";
  main.append(div);
}

async function showResult() {
  const allItems = await fetchJson();
  for (let i in allItems) {
    if (
      allItems[i]["type"].includes(select.value) &&
      id.value.length > 0 &&
      id.value == allItems[i].id &&
      name.value == allItems[i].name.english
    ) {
      renderItem(allItems[i]);
    } else if (
      allItems[i]["type"].includes(select.value) &&
      id.value.length == "" &&
      name.value == ""
    ) {
      renderItem(allItems[i]);
    } else if (
      id.value.length > 0 &&
      id.value == allItems[i].id &&
      name.value == "" &&
      select.value == ""
    ) {
      renderItem(allItems[i]);
    } else if (
      select.value == "" &&
      id.value.length == 0 &&
      name.value == allItems[i].name.english
    ) {
      renderItem(allItems[i]);
    }
  }
}

button.addEventListener("click", () => {
    main.innerHTML = "";
    showResult();
});
  


