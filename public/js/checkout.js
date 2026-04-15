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
