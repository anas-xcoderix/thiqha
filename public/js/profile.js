document.querySelectorAll('.open-detail-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const company = this.dataset.company;
        const contractor = this.dataset.contractor;
        const price = this.dataset.price;
        const duration = this.dataset.duration;

        document.getElementById('detail-company-name').textContent = company;
        document.getElementById('detail-company-title').textContent = company;
        document.getElementById('detail-contractor').textContent = contractor;
        document.getElementById('detail-price').textContent = price;
        document.getElementById('detail-duration').textContent = duration;

        document.getElementById('requests-list').style.display = 'none';
        document.querySelector('#panel-requests > div > p').style.display = 'none';
        document.getElementById('company-detail-panel').classList.add('active');
    });
});

document.getElementById('back-btn').addEventListener('click', function() {
    document.getElementById('requests-list').style.display = 'block';
    document.querySelector('#panel-requests > div > p').style.display = 'block';
    document.getElementById('company-detail-panel').classList.remove('active');
});

function showPassword() {
    const input = document.getElementById('current_password');
    const icon = document.getElementById('eyeIcon');
    if (input.type === 'password') {
        input.type = 'text';
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
    } else {
        input.type = 'password';
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-5 0-9-4-9-7s4-7 9-7a10.05 10.05 0 011.875.175M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18"/>`;
    }
}

function hidePassword() {
    const input = document.getElementById('new_password');
    const icon = document.getElementById('eyeIcon1');
    if (input.type === 'password') {
        input.type = 'text';
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
    } else {
        input.type = 'password';
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-5 0-9-4-9-7s4-7 9-7a10.05 10.05 0 011.875.175M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18"/>`;
    }
}


function toggeler() {
    const input = document.getElementById('new_password_confirmation');
    const icon = document.getElementById('eyeIcon2');
    if (input.type === 'password') {
        input.type = 'text';
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>`;
    } else {
        input.type = 'password';
        icon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" d="M13.875 18.825A10.05 10.05 0 0112 19c-5 0-9-4-9-7s4-7 9-7a10.05 10.05 0 011.875.175M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="M3 3l18 18"/>`;
    }
}
