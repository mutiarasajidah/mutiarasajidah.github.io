document.addEventListener('DOMContentLoaded', (event) => {
    const dropdown = document.querySelector('.dropdown');
    const dropdownContent = document.querySelector('.dropdown-content');

    dropdown.addEventListener('click', () => {
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });

    window.addEventListener('click', (e) => {
        if (!dropdown.contains(e.target)) {
            dropdownContent.style.display = 'none';
        }
    });
});
