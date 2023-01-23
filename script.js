// Работа с виджетом recaptcha
// 1. Получить ответ гугл капчи
// if (grecaptcha != null) {
//   var captcha = grecaptcha.getResponse();

//   // 2. Если ответ пустой, то выводим сообщение о том, что пользователь не прошёл тест.
//   // Такую форму не будем отправлять на сервер.
//   if (!captcha.length) {
//     // Выводим сообщение об ошибке
//     $('#recaptchaError').text('* Вы не прошли проверку "Я не робот"');
//   } else {
//     // получаем элемент, содержащий капчу
//     $('#recaptchaError').text('');
//   }

//   // 3. Если форма валидна и длина капчи не равно пустой строке, то отправляем форму на сервер (AJAX)
//   if ((formValid) && (captcha.length)) {
//     // добавить в formData значение 'g-recaptcha-response'=значение_recaptcha
//     formData.append('g-recaptcha-response', captcha);
//   }

//   // 4. Если сервер вернул ответ error, то делаем следующее...
//   // Сбрасываем виджет reCaptcha
//   grecaptcha.reset();
//   // Если существует свойство msg у объекта $data, то...
//   if ($data.msg) {
//     // вывести её в элемент у которого id=recaptchaError
//     $('#recaptchaError').text($data.msg);
//   }
// }

const blockSearch = document.querySelector(".search_block");
blockSearch.addEventListener("input", searchBlock);

function searchBlock() {
  let blockList = document.querySelectorAll(".penoblocks");

  Array.from(blockList).forEach(function(item) {
  	let searchedText = item.getElementsByClassName("penoblocks-name")[0].innerText;
  	let re = new RegExp(blockSearch.value, 'gi');
  	item.style.display = searchedText.match(re) ? "block" : "none";
  })
}

let accordionItems = document.getElementsByClassName("accordion__toggle");
for (let i = 0; i < accordionItems.length; i++) {
    accordionItems[i].addEventListener("click", function() {
        this.classList.toggle("active");

        var panel = this.nextElementSibling;
        panel.style.display = panel.style.display === "block" ? "none" : "block";
    });
}