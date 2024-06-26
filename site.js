let items = document.querySelectorAll(".slider .list .item");
let next = document.getElementById("next");
let prev = document.getElementById("prev");
let thumbnails = document.querySelectorAll(".thumbnail .item");
let originalText = {
  text: "",
  telephone: "",
  address: "",
};

// config param
let countItem = items.length;
let itemActive = 0;

// event next click
next.onclick = function () {
  itemActive = itemActive + 1;
  if (itemActive >= countItem) {
    itemActive = 0;
  }
  showSlider();
};

//event prev click
prev.onclick = function () {
  itemActive = itemActive - 1;
  if (itemActive < 0) {
    itemActive = countItem - 1;
  }
  showSlider();
};

function showSlider() {
  // remove item active old
  let itemActiveOld = document.querySelector(".slider .list .item.active");
  let thumbnailActiveOld = document.querySelector(".thumbnail .item.active");
  itemActiveOld.classList.remove("active");
  thumbnailActiveOld.classList.remove("active");
  // active new item
  items[itemActive].classList.add("active");
  thumbnails[itemActive].classList.add("active");
}

// click thumbnail
thumbnails.forEach((thumbnail, index) => {
  thumbnail.addEventListener("click", () => {
    // Обновляем активный слайд в слайдере
    itemActive = index;
    showSlider();

    // Redirect to the corresponding lab page
    switch (index) {
      case 0:
        window.location.href = "index.php";
        break;
      case 1:
        window.location.href = "lab2.php";
        break;
      case 2:
        window.location.href = "lab3.php";
        break;
      case 3:
        window.location.href = "lab4.php";
        break;
      case 4:
        window.location.href = "lab5.php";
        break;
      default:
        break;
    }
  });
});

//scroll btn
function scrollToBlock(blockId) {
  var element = document.getElementById(blockId);
  if (element) {
    element.scrollIntoView({
      behavior: "smooth",
    });
  }
}

//task2-2
document.getElementById("rows").addEventListener("input", generateMatrixInputs);
document.getElementById("cols").addEventListener("input", generateMatrixInputs);

function generateMatrixInputs() {
  const rows = document.getElementById("rows").value;
  const cols = document.getElementById("cols").value;
  const matrixInputsContainer = document.getElementById("matrix_inputs");
  matrixInputsContainer.innerHTML = "";

  for (let i = 0; i < rows; i++) {
    for (let j = 0; j < cols; j++) {
      const input = document.createElement("input");
      input.type = "number";
      input.name = `matrix[${i}][${j}]`;
      input.placeholder = `"Элемент" ${i}${j}`;
      input.required = true;
      matrixInputsContainer.appendChild(input);
    }
    matrixInputsContainer.appendChild(document.createElement("br"));
  }
}
document.querySelector("form").addEventListener("submit", function (event) {
  event.preventDefault();
  const form = event.target;
  const formData = new FormData(form);

  fetch(form.getAttribute("action"), {
    method: "POST",
    body: formData,
  })
    .then((response) => response.text())
    .then((data) => {
      document.getElementById("result").innerHTML = data;
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});

generateMatrixInputs();
//task2-3
$(document).ready(function () {
  $("#sum_matrix_form").submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "task2_php/calc_sum_matrix.php",
      data: formData,
      success: function (response) {
        $("#sum_matrix_result").html(response);
      },
    });
  });
});
//task2-4
$(document).ready(function () {
  $("#sum_product_form").submit(function (e) {
    e.preventDefault();
    var formData = $(this).serialize();
    $.ajax({
      type: "POST",
      url: "task2_php/calc_sum_product.php",
      data: formData,
      success: function (response) {
        $("#sum_product_result").html(response);
      },
    });
  });
});

//task2-5
document
  .getElementById("transpose_rows")
  .addEventListener("input", generateTransposeMatrixInputs);
document
  .getElementById("transpose_cols")
  .addEventListener("input", generateTransposeMatrixInputs);

function generateTransposeMatrixInputs() {
  const rows = document.getElementById("transpose_rows").value;
  const cols = document.getElementById("transpose_cols").value;
  const matrixInputsContainer = document.getElementById(
    "transpose_matrix_inputs"
  );
  matrixInputsContainer.innerHTML = "";

  for (let i = 0; i < rows; i++) {
    for (let j = 0; j < cols; j++) {
      const input = document.createElement("input");
      input.type = "number";
      input.name = `matrix[${i}][${j}]`;
      input.placeholder = `"Элемент" ${i}${j}`;
      input.required = true;
      matrixInputsContainer.appendChild(input);
    }
    matrixInputsContainer.appendChild(document.createElement("br"));
  }
}
document
  .getElementById("transpose_form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    fetchTransposeMatrix(form.getAttribute("action"), formData)
      .then((data) => {
        document.getElementById("transpose_result").innerHTML = data;
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
function fetchTransposeMatrix(action, formData) {
  return fetch(action, {
    method: "POST",
    body: formData,
  }).then((response) => response.text());
}

generateTransposeMatrixInputs();
//task2-6
document
  .getElementById("matrix_size")
  .addEventListener("input", generateMultiplicationMatrixInputs);

function generateMultiplicationMatrixInputs() {
  const size = document.getElementById("matrix_size").value;
  const matrix1InputsContainer = document.getElementById("matrix1_inputs");
  const matrix2InputsContainer = document.getElementById("matrix2_inputs");
  matrix1InputsContainer.innerHTML = "";
  matrix2InputsContainer.innerHTML = "";

  for (let i = 0; i < size; i++) {
    for (let j = 0; j < size; j++) {
      const input1 = document.createElement("input");
      input1.type = "number";
      input1.name = `matrix1[${i}][${j}]`;
      input1.placeholder = `Элемент 1[${i}][${j}]`;
      input1.required = true;
      matrix1InputsContainer.appendChild(input1);

      const input2 = document.createElement("input");
      input2.type = "number";
      input2.name = `matrix2[${i}][${j}]`;
      input2.placeholder = `Элемент 2[${i}][${j}]`;
      input2.required = true;
      matrix2InputsContainer.appendChild(input2);
    }
    matrix1InputsContainer.appendChild(document.createElement("br"));
    matrix2InputsContainer.appendChild(document.createElement("br"));
  }
}
document
  .getElementById("multiplication_form")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    const form = event.target;
    const formData = new FormData(form);

    fetch(form.getAttribute("action"), {
      method: "POST",
      body: formData,
    })
      .then((response) => response.text())
      .then((data) => {
        document.getElementById("multiplication_result").innerHTML = data;
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });

generateMultiplicationMatrixInputs();

//ФУнкции для кнопки edit профиля
function makeEditable(field) {
  var span = document.getElementById(`editable-${field}`);
  originalText[field] = span.innerText;
  var text = span.innerText;
  var input = document.createElement("input");
  input.type = "text";
  input.value = text;
  input.className = "edit-profile";
  input.id = `editable-input-${field}`;

  input.addEventListener("blur", function () {});

  input.addEventListener("keypress", function (event) {
      if (event.key === "Enter") {
          saveChanges(field);
      }
  });

  span.replaceWith(input);
  input.focus();

  document.getElementById(`edit-button-${field}`).style.display = "none";
  document.getElementById(`save-button-${field}`).style.display = "inline";
  document.getElementById(`cancel-button-${field}`).style.display = "inline";
}

function saveChanges(field) {
  var form = document.getElementById('profile-form');
  var formData = new FormData(form); // Move this line up

  var input = document.getElementById(`editable-input-${field}`);
  var span = document.createElement("span");
  span.id = `editable-${field}`;
  span.className = "add-text";
  span.innerText = input.value;

  input.replaceWith(span);

  formData.append('field', field);
  formData.append('value', input.value); // Now formData is defined before this line

  fetch('update_profile.php', {
      method: 'POST',
      body: formData
  })
  .then(response => {
    console.log([...formData.entries()]);
    return response.json();
  })
    .then(data => {
        if (data.success) {
            alert('Изменения успешно сохранены!');
        } else {
            alert('Ошибка при сохранении изменений.');
        }
    })
    .catch(error => console.error('Error:', error));

  document.getElementById(`edit-button-${field}`).style.display = "inline";
  document.getElementById(`save-button-${field}`).style.display = "none";
  document.getElementById(`cancel-button-${field}`).style.display = "none";
}


function cancelChanges(field) {
  var input = document.getElementById(`editable-input-${field}`);
  var span = document.createElement("span");
  span.id = `editable-${field}`;
  span.className = "add-text";
  span.innerText = originalText[field];

  input.replaceWith(span);

  document.getElementById(`edit-button-${field}`).style.display = "inline";
  document.getElementById(`save-button-${field}`).style.display = "none";
  document.getElementById(`cancel-button-${field}`).style.display = "none";
}
