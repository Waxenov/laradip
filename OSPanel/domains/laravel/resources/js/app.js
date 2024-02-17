import './bootstrap';


document.getElementById('toggleTheme').addEventListener('change', function() {
    if (this.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
        localStorage.setItem('theme', 'dark'); // Сохраняем выбранную тему в localStorage
    } else {
        document.documentElement.setAttribute('data-theme', 'light');
        localStorage.setItem('theme', 'light');
    }
});

// Проверяем значение в localStorage при загрузке страницы
const theme = localStorage.getItem('theme');
if (theme) {
    document.documentElement.setAttribute('data-theme', theme);
    if (theme === 'dark') {
        document.getElementById('toggleTheme').checked = true;
    }
}