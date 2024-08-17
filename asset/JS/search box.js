function toggleDropdown() {
  const dropdown = document.querySelector(".dropdown");
  dropdown.style.display = dropdown.style.display === "none" ? "block" : "none";
}

function filterItems() {
  const input = document.querySelector(".search-box");
  const filter = input.value.toUpperCase();
  const items = document.querySelectorAll(".dropdown-item");

  items.forEach(function (item) {
    const text = item.textContent || item.innerText;
    if (text.toUpperCase().indexOf(filter) > -1) {
      item.style.display = "";
    } else {
      item.style.display = "none";
    }
  });
}

function selectItem(item) {
  const selectedItem = document.querySelector(".selected-item");
  selectedItem.textContent = item;
  toggleDropdown();
}

// stop location 2

function toggleDropdown1() {
  const dropdown1 = document.querySelector(".dropdown1");
  dropdown1.style.display = dropdown1.style.display === "none" ? "block" : "none";
}

function filterItems1() {
  const input = document.querySelector(".search-box1");
  const filter = input.value.toUpperCase();
  const items1 = document.querySelectorAll(".dropdown-item1");

  items1.forEach(function (item1) {
    const text1 = item1.textContent || item1.innerText;
    if (text1.toUpperCase().indexOf(filter) > -1) {
      item1.style.display = "";
    } else {
      item1.style.display = "none";
    }
  });
}

function selectItem1(item1) {
  const selectedItem1 = document.querySelector(".selected-item1");
  selectedItem1.textContent = item1;
  toggleDropdown1();
}


//search button
function search() {
  const from = document.querySelector(".selected-item").textContent;
  const to = document.querySelector(".selected-item1").textContent;
  const date = document.getElementById("travelDate").value;
  const searchResults = document.getElementById("searchResults");
  
  searchResults.textContent = `Searching for trips from ${from} to ${to} on ${date}`;
  // Perform actual search or other actions here
}