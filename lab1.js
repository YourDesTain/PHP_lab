//task1
$(document).ready(function () {
    $("#volume_form").submit(function (e) {
      e.preventDefault(); //Отмена отправки формы
      var formData = $(this).serialize(); //Получение данных формы
      $.ajax({
        type: "POST",
        url: "task_php/calc_volume.php", //Путь к файлу обработчику
        data: formData,
        success: function (response) {
          $("#volume_output").html(response); //Вывод ответа
        },
      });
    });
  });
  //task2
  $(document).ready(function () {
    $("#factorial_form").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "task_php/calc_factorial.php",
        data: formData,
        success: function (response) {
          $("#factorial_result").html(response);
        },
      });
    });
  });
  //task3
  $(document).ready(function () {
    $("#quadratic_form").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "task_php/calc_quadratic.php",
        data: formData,
        success: function (response) {
          $("#quadratic_roots_title").html(response);
        },
      });
    });
  });
  //task5
  $(document).ready(function () {
    $("#expression_form").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "task_php/calc_expression.php",
        data: formData,
        success: function (response) {
          $("#expression_result").html(response);
        },
      });
    });
  });
  //task6
  $(document).ready(function () {
    $("#season_form").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "task_php/calc_season.php",
        data: formData,
        success: function (response) {
          $("#season_output").html(response);
        },
      });
    });
  });
  //task7
  $(document).ready(function () {
    $("#max_number_form").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "task_php/calc_max_number.php",
        data: formData,
        success: function (response) {
          $("#max_number_output").html(response);
        },
      });
    });
  });
  //task8
  $(document).ready(function () {
    $("#swap_digits_form").submit(function (e) {
      e.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "task_php/calc_swap_digits.php",
        data: formData,
        success: function (response) {
          $("#swapped_number_output").html(response);
        },
      });
    });
  });