
function showPage(pageId) {
    const pages = ['page-main', 'page-water', 'page-soil', 'page-bricks', 'page-contracts', 'page-insurance'];
    pages.forEach(id => {
        const el = document.getElementById(id);
        if (id === pageId) {
            el.classList.remove('hidden');
        } else {
            el.classList.add('hidden');
        }
    });
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function switchContractMode(mode) {
    const newFields = document.getElementById('contract-new-fields');
    const reviewFields = document.getElementById('contract-review-fields');
    if (mode === 'new') {
        newFields.classList.remove('hidden');
        reviewFields.classList.add('hidden');
    } else {
        newFields.classList.add('hidden');
        reviewFields.classList.remove('hidden');
    }
}
