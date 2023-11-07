function redirectToService() {
    const userData = JSON.parse(sessionStorage.getItem('user'));
    if (userData && userData.name) {
        const url = 'http://localhost:9000/login';
        const newTab = window.open(url, '_blank');
        newTab.focus();
    } else {
        const url = 'http://localhost:8000/login';
        const newTab = window.open(url, '_blank');
        newTab.focus();
    }
}