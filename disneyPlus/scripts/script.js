document.getElementById('email_form').addEventListener('submit', teste);
function login(event){
    let erro = false;
    erro = true;
    if(erro) event.preventDefault();
    let e_mail = document.getElementById('e_mail');
    let senha = document.getElementById('password');
    let identificacao = e_mail.value.trim();
    let password = senha.value;
    let res = document.getElementById('resultado');
    res.style.fontSize = "20px";
    // Limpar bordas vermelhas antes de verificar
    e_mail.style.border = "1px solid #ccc";
    senha.style.border = "1px solid #ccc";
    if(identificacao === "" || password === ""){
        res.textContent = "❗Este e-mail ou senha não tem o formato correto. Tentar novamente?";
        e_mail.style.border = "2px solid red";
        senha.style.border = "2px solid red";
        e_mail.focus(); // Foco no campo email
    }
    else if(password.length > 64 || password.length < 10){
        res.textContent = "❗O número deve caracteres deve estar entre 10 e 64";
        senha.style.border = "2px solid red";
        // console.log("Foco na senha!");
        senha.focus(); // Foco na senha, pois ela falhou na verificação
    }
    // Validação do formato do e-mail
    else{
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(identificacao)){
            res.textContent = "❗O formato de E-mail inserido não está válido.";
            e_mail.style.border = "2px solid red";
            e_mail.focus(); // Foco no e-mail novamente
        }
    }
}

function create(event){
    event.preventDefault();
    // Construindo variavéis com o valor doconstd's
    const form = document.querySelector('.email_form');
    const e_mail = document.getElementById('e_mail');
    const senha = document.getElementById('current-password');
    const nascimento = document.getElementById('nascimento');
    const usuario = document.getElementById('nomeusuario');
    const telefone = document.getElementById('telefone');
    // Validação dos inputs
    const identificacao = e_mail.value;
    const password = senha.value;
    const birthday = nascimento.value;
    const nameuser = usuario.value;
    const phone = telefone.value;
    const res = document.getElementById('resultado');
    // Limpar bordas vermelhas antes de verificar
    e_mail.style.border = "1px solid #ccc";
    senha.style.border = "1px solid #ccc";
    if(password.length > 64 || password.length < 10){
        res.innerHTML = "❗O número deve caracteres deve estar entre 10 e 64";
        senha.style.border = "2px solid red";
        // console.log("Foco na senha!");
        senha.focus(); // Foco na senha, pois ela falhou na verificação
    }
    if(identificacao === ""){
        res.innerHTML = "<p>❗Você não preencheu o campo de E-mail.</p>";
        e_mail.style.border = "2px solid red";
    }else if(password === ""){
        res.innerHTML = "<p>❗Você não preencheu o campo de senha.</p>";
        senha.style.border = "2px solid red";
    }else if(birthday === ""){
        res.innerHTML = "<p>❗Você não colocou sua Data de Nascimento.</p>";
        birthday.style.border = "2px solid red";
    }else if(nameuser === ""){
        res.innerHTML = "<p>❗Você não colocou seu nome de usuário, preencha esse campo.</p>";
        usuario.style.border = "2px solid red";
    }else if(phone === ""){
        res.innerHTML = "<p>❗Você não colocou o seu número de telefone, preencha esse campo.</p>";
        telefone.style.border = "2px solid red";
    }else{
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if(!emailRegex.test(identificacao)){
            res.innerHTML = "❗O formato de E-mail inserido não está válido.";
            e_mail.style.border = "2px solid red";
            e_mail.focus(); // Foco no e-mail novamente
        }else{
            alert("E-mail verificado com grande sucesso.");
        }
    }
    form.submit();
}
function voltar(arquivo){
    window.location.href = arquivo;
}