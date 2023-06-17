// change navbar style on scroll
window.addEventListener('scroll', () => {
    document.querySelector('nav').classList.toggle('window-scroll', window.scrollY > 100)
})


function openMenu(evt, menuName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(menuName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  document.getElementById("myLink").click();
//irfanlogin
const wrapper = document.querySelector('.border');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click',()=>{
    wrapper.classList.add('active');
})
loginLink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
})
//login
var loginbtn = document.getElementById('loginbtn');
loginbtn.addEventListener('click',()=>{
    login();
});

  //register
  var emailreg = document.getElementById('emailreg');
  var passreg = document.getElementById('passreg');
  var regbtn = document.getElementById('regbtn');
  var nemail;
  var npass;
  regbtn.addEventListener('click',()=>{
    register()
  })
  function register(){
    nemail = emailreg.value;
    npass = passreg.value;
    alert("Email : "+nemail+"\n"+"Password : "+npass+"\n"+"Successfully register");
  }
  function login() {
    var username = document.getElementById('email').value;
    var password = document.getElementById('password').value
    
    // Perform authentication check here (e.g. send a request to server-side code)
    if (username === "test" && password === "123") {
        window.location.href = "home.html";
      alert("Login successful!");
      
    }
    else if (username === "admin" && password === "admin") {
      window.location.href = "./admin/home.html";
    alert("Admin login successful!");
    }else {
      alert("Incorrect username or password");
    }
  }