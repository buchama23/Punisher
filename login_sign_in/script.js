const wrapper = document.querySelector('.wrapper')
const registerLink = document.querySelector('.register-link')
const loginLink = document.querySelector('.login-link')

registerLink.onclick = () => {
    wrapper.classList.add('active')
}

loginLink.onclick = () => {
    wrapper.classList.remove('active')
}
document.addEventListener('invalid', (function () {
    return function (e) {
      e.preventDefault();
      document.getElementById("name").focus();
    };
  })(), true);